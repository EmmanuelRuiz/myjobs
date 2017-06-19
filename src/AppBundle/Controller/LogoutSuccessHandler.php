<?php

namespace AppBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Http\HttpUtils;
use Symfony\Component\Security\Http\Logout\LogoutSuccessHandlerInterface;
use Symfony\Component\HttpFoundation\Session\Session;

class LogoutSuccessHandler implements LogoutSuccessHandlerInterface {
	
    protected $httpUtils;
    protected $targetUrl;
	private $session;

    /**
     * @param HttpUtils $httpUtils
     */
    public function __construct(HttpUtils $httpUtils)
    {
        $this->httpUtils = $httpUtils;	
        $this->targetUrl = '/';
		$this->session = new Session();
    }

    /**
     * {@inheritdoc}
     */
    public function onLogoutSuccess(Request $request)
    {

        $response = $this->httpUtils->createRedirectResponse($request, $this->targetUrl);
		
		$this->session->getFlashBag()->add('notice', 'Has cerrado sesión correctamente. Vuelve pronto');
		return $response;
    }
}
