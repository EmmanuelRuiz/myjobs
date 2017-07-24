<?php

namespace AppBundle\Security;

use Symfony\Component\Security\Guard\AbstractGuardAuthenticator;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Security\Core\Authentication\Token\TokenInterface;
use Symfony\Component\Security\Core\Exception\AuthenticationException;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Security\Core\User\UserProviderInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;

class GoogleAuthenticator extends AbstractGuardAuthenticator {

	private $container;

	public function __construct(ContainerInterface $container) {
		$this->container = $container;
	}

	public function getCredentials(Request $request) {
		
		if ($request->getPathInfo() != '/connect/google/check') {
            // skip authentication unless we're on this URL!
			var_dump($request);
			die();
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
		// todo
	}

	public function checkCredentials($credentials, UserInterface $user) {
		// todo
	}

	public function onAuthenticationFailure(Request $request, AuthenticationException $exception) {
		// todo
	}

	public function onAuthenticationSuccess(Request $request, TokenInterface $token, $providerKey) {
		// todo
	}

	public function supportsRememberMe() {
		// todo
	}

	public function start(Request $request, AuthenticationException $authException = null) {
		// todo
	}

}
