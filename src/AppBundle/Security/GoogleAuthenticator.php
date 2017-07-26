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

class GoogleAuthenticator extends AbstractGuardAuthenticator {

	private $container;

	public function __construct(ContainerInterface $container) {
		$this->container = $container;
	}

	public function getCredentials(Request $request) {

		if ($request->getPathInfo() != '/connect/google-check') {
		
			return null;
		}

		if ($code = $request->query->get('code')) {
			return $code;
		}
		
		throw CustomAuthenticationException::createWithSafeMessage(
				'Se genero algun error al iniciar con Google. Intenta de nuevo.'
		);
	}

	public function getUser($authorizationCode, UserProviderInterface $userProvider) {
		
		// Llamamos al servicio de Google
		$googleProvider = $this->container->get('app.google_provider');

		try {
			// Obtenemos el Token de Acceso
			$accessToken = $googleProvider->getAccessToken(
					'authorization_code', ['code' => $authorizationCode]
			);
		} catch (IdentityProviderException $e) {
			// Si ya se ha usado el Token
			$response = $e->getResponseBody();
			$errorCode = $response['error']['code'];
			$message = $response['error']['message'];

			throw CustomAuthenticationException::createWithSafeMessage(
					'Se genero algun error al iniciar con Google. Intenta de nuevo.' . $errorCode
			);
		}

		$googleUser = $googleProvider->getResourceOwner($accessToken);


		$email = $googleUser->getEmail();



		$em = $this->container->get('doctrine')->getManager();


		// 1) Han iniciado con Google antes?
		$existingUser = $em->getRepository('BackendBundle:User')
				->findOneBy(array('googleId' => $googleUser->getId()));
		if ($existingUser) {
			return $existingUser;
		}

		// 2) Exite algun usuario con ese correo?
		$user = $em->getRepository('BackendBundle:User')
				->findOneBy(array('email' => $email));

		// 3) No existe el usuario
		//    Se crea uno nuevo con la informacion que la API nos regresa
		if (!$user) {
			$user = new User();
			$user->setName($googleUser->getFirstName());
			$user->setPlastname($googleUser->getLastName());
			$user->setAge(00);
			$user->setEmail($email);
			// set an un-encoded password, which basically makes it *not* possible
			// to login with any password
			$user->setPassword('Sesión creada con Google');
			$user->setImage($googleUser->getAvatar());
			$user->setRole('ROLE_USER');
			$user->setAnonimo('No');
		}

		// make sure the Facebook user is set
		$user->setGoogleId($googleUser->getId());

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
		// todo
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
