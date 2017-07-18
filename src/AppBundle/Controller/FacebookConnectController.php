<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;


/**
 * Description of FacebookConnectController
 */

class FacebookConnectController extends Controller {

	public function connectFacebookAction(Request $request) {
		// redirect to Facebook
		$facebookOAuthProvider = $this->get('app.facebook_provider');
		$url = $facebookOAuthProvider->getAuthorizationUrl([
			// these are actually the default scopes
			'scopes' => ['public_profile', 'email'],
		]);
		return $this->redirect($url);
	}

	public function connectFacebookActionCheck() {
		// will not be reached!
	}

}
