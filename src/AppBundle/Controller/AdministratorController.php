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
    
    public function companiesAction(Request $request)
    {
		$em = $this->getDoctrine()->getManager();
		
        // Hacemos una consulta a la entidad Company para que nos saque los objetos de tipo Company
        $dql = "SELECT u FROM BackendBundle:Company u WHERE u.status = 'invalid'";
        $query = $em->createQuery($dql);

        $paginator = $this->get('knp_paginator');
        $pagination = $paginator->paginate(
			$query, $request->query->getInt('page', 1), 5
        );

        return $this->render('AppBundle:Administrator:administrator_companies.html.twig', array(
			'pagination' => $pagination
        ));
        /*return $this->render('AppBundle:Administrator:administrator_companies.html.twig');*/
    }
	
	public function commentsAction(Request $request)
    {
		$em = $this->getDoctrine()->getManager();
		
        // Hacemos una consulta a la entidad Company para que nos saque los objetos de tipo Company
        $dql = "SELECT u FROM BackendBundle:Comment u WHERE u.status = 'invalid'";
        $query = $em->createQuery($dql);
		

        $paginator = $this->get('knp_paginator');
        $pagination = $paginator->paginate(
			$query, $request->query->getInt('page', 1), 5
        );

        return $this->render('AppBundle:Administrator:administrator_comments.html.twig', array(
			'pagination' => $pagination
        ));
	
    }
	
	public function usersAction(Request $request)
    {
		$em = $this->getDoctrine()->getManager();
		
        // Hacemos una consulta a la entidad Company para que nos saque los objetos de tipo Company
        $dql = "SELECT u FROM BackendBundle:User u";
        $query = $em->createQuery($dql);
		

        $paginator = $this->get('knp_paginator');
        $pagination = $paginator->paginate(
			$query, $request->query->getInt('page', 1), 5
        );

        return $this->render('AppBundle:Administrator:administrator_users.html.twig', array(
			'pagination' => $pagination
        ));
    }
	
	public function allCompaniesAction(Request $request)
    {
		$em = $this->getDoctrine()->getManager();
		
        // Hacemos una consulta a la entidad Company para que nos saque los objetos de tipo Company
        $dql = "SELECT u FROM BackendBundle:Company u";
        $query = $em->createQuery($dql);
		

        $paginator = $this->get('knp_paginator');
        $pagination = $paginator->paginate(
			$query, $request->query->getInt('page', 1), 5
        );

        return $this->render('AppBundle:Administrator:administrator_allcompanies.html.twig', array(
			'pagination' => $pagination
        ));
    }
}
