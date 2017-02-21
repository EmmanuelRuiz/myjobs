<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\Session;

use BackendBundle\Entity\Company;
use BackendBundle\Entity\User;

class CompanyController extends Controller{

	public function indexAction(Request $request){
		return $this->render('AppBundle:Company:home.html.twig');
	}
	
	// metodo para buscar empresas. DEBE ESTAR EN OTRO CONTROLADOR
	public function companiesAction(Request $request){
		$em = $this->getDoctrine()->getManager();
		
		// Hacemos una consulta a la entidad Company para que nos saque los objetos de tipo Company
		$dql = "SELECT u FROM BackendBundle:Company u ORDER BY u.id ASC";
		$query = $em->createQuery($dql);
		
		$paginator = $this->get('knp_paginator');
		$pagination = $paginator->paginate(
				$query, $request->query->getInt('page', 1), 5
		);
		
		return $this->render('AppBundle:Company:companies.html.twig', array(
			'pagination' => $pagination
		));
	}
	
	// metodo para buscar empresas. DEBE ESTAR EN OTRO CONTROLADOR
	public function searchAction(Request $request){
		$em = $this->getDoctrine()->getManager();
		
		$search	= $request->query->get("search", null);
		
		if ($search == null) {
			return $this->redirect($this->generateURL('home_publication'));
		}
		
		// Hacemos una consulta a la entidad Company para que nos saque los objetos de tipo Company
		// La consulta nos devuelve resultados parecidos a la busqueda que se envia
		$dql = "SELECT u FROM BackendBundle:Company u "
				. "WHERE u.businessname LIKE :search OR u.tradename LIKE :search "
				. "OR u.businesssector LIKE :search ORDER BY u.id ASC";
		$query = $em->createQuery($dql)->setParameter('search', "%$search%");
		
		$paginator = $this->get('knp_paginator');
		$pagination = $paginator->paginate(
				$query, $request->query->getInt('page', 1), 5
		);
		
		return $this->render('AppBundle:Company:companies.html.twig', array(
			'pagination' => $pagination
		));
	}
}
