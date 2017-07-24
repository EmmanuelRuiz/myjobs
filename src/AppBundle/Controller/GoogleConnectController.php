<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;

class GoogleConnectController extends Controller {

	/**
	 * @Route("/connect/google", name="connect_google")
	 */
	public function connectGoogleAction(Request $request) {
		// redirect to Facebook
		$googleOAuthProvider = $this->get('app.google_provider');


		$url = $googleOAuthProvider->getAuthorizationUrl([
			// these are actually the default scopes
			'scope' => [
				'email',
				'profile',
			]
		]);

		return $this->redirect($url);
	}

	/**
	 * @Route("/connect/google/check", name="connect_google_check")
	 */
	public function connectCheckAction() {
		
	}

}
