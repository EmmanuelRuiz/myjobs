<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class AdministratorController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        return $this->render('AppBundle:Administrator:administrator.html.twig');
    }
    
    public function companiesAdminAction(Request $request)
    {
        return $this->render('AppBundle:Administrator:administrator_companies.html.twig');
    }
}
