<?php

namespace AppBundle\Security;

use Symfony\Component\Security\Guard\AbstractGuardAuthenticator;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\Security\Core\Authentication\Token\TokenInterface;
use Symfony\Component\Security\Core\Exception\AuthenticationException;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Security\Core\User\UserProviderInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\Security\Core\Exception\BadCredentialsException;
use Doctrine\ORM\EntityManagerInterface;
use BackendBundle\Entity\User;

class FacebookAuthenticator extends AbstractGuardAuthenticator {

	private $container;

	public function __construct(ContainerInterface $container) {
		$this->container = $container;
	}

	public function getCredentials(Request $request) {

		if ($request->getPathInfo() != '/connect/facebook-check') {
			// skip authentication unless we're on this URL!
			
			return null;
		}

		if ($code = $request->query->get('code')) {

			return $code;
		}
		// no code! Something went wrong. Quite probably the user denied our app access
		// you could read the error, error_code, error_description, error_reason query params
		// http://localhost:8000/connect/facebook-check?error=access_denied&error_code=200&error_description=Permissions+error&error_reason=user_denied&state=S2fKgHJSZSJM0Qs2fhKL6USZP50KSBHc#_=_
		throw CustomAuthenticationException::createWithSafeMessage(
				'There was an error getting access from Facebook. Please try again.'
		);
	}

	public function getUser($authorizationCode, UserProviderInterface $userProvider) {

		$facebookProvider = $this->container->get('app.facebook_provider');

		try {
			// the credentials are really the access token
			$accessToken = $facebookProvider->getAccessToken(
					'authorization_code', ['code' => $authorizationCode]
			);
		} catch (IdentityProviderException $e) {
			// probably the authorization code has been used already
			$response = $e->getResponseBody();
			$errorCode = $response['error']['code'];
			$message = $response['error']['message'];

			throw CustomAuthenticationException::createWithSafeMessage(
					'There was an error logging you into Facebook - code ' . $errorCode
			);
		}

		$facebookUser = $facebookProvider->getResourceOwner($accessToken);

		//var_dump($facebookUser);
		//die();

		$email = $facebookUser->getEmail();



		$em = $this->container->get('doctrine')->getManager();


		// 1) have they logged in with Facebook before? Easy!
		$existingUser = $em->getRepository('BackendBundle:User')
				->findOneBy(array('facebookId' => $facebookUser->getId()));
		if ($existingUser) {
			return $existingUser;
		}

		// 2) do we have a matching user by email?
		$user = $em->getRepository('BackendBundle:User')
				->findOneBy(array('email' => $email));

		// 3) no user? Perhaps you just want to create one
		//      or maybe you want to redirect to a registration (in that case, keep reading_
		if (!$user) {
			$user = new User();
			$user->setName($facebookUser->getFirstName());
			$user->setPlastname($facebookUser->getLastName());
			$user->setAge($facebookUser->getMinAge());
			$user->setEmail($email);
			// set an un-encoded password, which basically makes it *not* possible
			// to login with any password
			$user->setPassword('Sesión creada con Facebook');
			$user->setImage($facebookUser->getPictureUrl());
			$user->setRole('ROLE_USER');
			$user->setAnonimo('No');
		}

		// make sure the Facebook user is set
		$user->setFacebookId($facebookUser->getId());

		$em->persist($user);
		$em->flush();
		return $user;
	}

	public function checkCredentials($credentials, UserInterface $user) {

		$password = $user->getPassword();

		if ($password == null) {
			// returning anything NOT true will cause an authentication failure
			return;
			// or, you can still throw an AuthenticationException if you want to
			// throw new AuthenticationException();
		}

		// return true to make authentication successful
		return true;
	}

	public function onAuthenticationFailure(Request $request, AuthenticationException $exception) {
		echo "fallo";
		die();
	}

	public function onAuthenticationSuccess(Request $request, TokenInterface $token, $providerKey) {


		return new RedirectResponse($this->container->get('router')
						->generate('app_homepage'));
	}

	public function supportsRememberMe() {
		// todo
	}

	public function start(Request $request, AuthenticationException $authException = null) {
		// todo
	}

}
