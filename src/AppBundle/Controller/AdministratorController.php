<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

use BackendBundle\Entity\Comment;
use BackendBundle\Entity\Opinion;
use BackendBundle\Entity\Company;

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
	
	public function validateCompaniesAction(Request $request, $id){
		$em = $this->getDoctrine()->getManager();
		$user = $this->getUser();
		
		
		$company_repo = $em->getRepository('BackendBundle:Company');
        $company = $company_repo->find($id);
		
		var_dump($company);
		die();
		
		
		
		return $this->redirectToRoute('administrator_company');
	}
	
	public function deleteCompaniesAction(Request $request, $id){
		
		$em = $this->getDoctrine()->getManager();
		$user = $this->getUser();
		
		$company_repo = $em->getRepository('BackendBundle:Company');
        $company = $company_repo->find($id);
		
		$em->remove($company);
		$flush = $em->flush();

		if ($flush == null) {
			$status = "La publicación se ha borrado correctamente";
		} else {
			$status = "La publicación no se ha borrado";
		}
        
		return $this->render('AppBundle:Administrator:administrator_allcompanies.html.twig', array(
			'status' => $status
        ));
	}
	
	public function deleteUsersAction(Request $request, $id){
		
		$em = $this->getDoctrine()->getManager();
		$user = $this->getUser();
		
		$user_repo = $em->getRepository('BackendBundle:User');
        $user = $user_repo->find($id);
		
		$em->remove($user);
		$flush = $em->flush();

		if ($flush == null) {
			$status = "La publicación se ha borrado correctamente";
		} else {
			$status = "La publicación no se ha borrado";
		}
        
		return $this->render('AppBundle:Administrator:administrator_allcompanies.html.twig', array(
			'status' => $status
        ));
	}
}
