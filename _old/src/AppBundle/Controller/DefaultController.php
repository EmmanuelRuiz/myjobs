<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller {

	/**
	 * @Route("/", name="homepage")
	 */
	public function indexAction(Request $request) {
		
		$em = $this->getDoctrine()->getManager();
		$db = $em->getConnection();
		
		$dql = "SELECT o FROM BackendBundle:Opinion o ORDER BY o.id DESC";
		$query = $em->createQuery($dql);

		$paginator = $this->get('knp_paginator');
		$pagination = $paginator->paginate(
				$query, $request->query->getInt('page', 1), 4	
		);
		
		$authenticationUtils = $this->get('security.authentication_utils');
		$error = $authenticationUtils->getLastAuthenticationError();
		$lastUsername = $authenticationUtils->getLastUsername();
		
		return $this->render('AppBundle:Index:index.html.twig', array(
					'last_username' => $lastUsername,
					'error' => $error,
					'pagination' => $pagination
		));
	}

}
