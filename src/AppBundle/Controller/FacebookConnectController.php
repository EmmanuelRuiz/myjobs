<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;

class FacebookConnectController extends Controller
{
    /**
     * @Route("/connect/facebook", name="connect_facebook")
     */
    public function connectFacebookAction(Request $request)
    {
        // redirect to Facebook
        $facebookOAuthProvider = $this->get('app.facebook_provider');
		
        $url = $facebookOAuthProvider->getAuthorizationUrl([
            // these are actually the default scopes
            'scopes' => ['public_profile', 'email'],
        ]);
		var_dump($url);
		die();
        return $this->redirect($url);
    }
    /**
     * @Route("/connect/facebook-check", name="connect_facebook_check")
     */
    public function connectFacebookActionCheck()
    {
        // will not be reached!
    }
}