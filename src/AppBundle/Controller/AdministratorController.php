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
		$em = $this->getDoctrine()->getManager();
		$db = $em->getConnection();
		
		$querye = "SELECT COUNT(id) AS empresas FROM companies WHERE status = 'invalid';";
        $stmt = $db->prepare($querye);
		$params = array();
        $stmt->execute($params);
		
        $po=$stmt->fetchAll();
		
		foreach ($po as $e) {
           $e["empresas"];
        }
		
		// sacar cantidad de comentarios
		$queryc = "SELECT COUNT(id) AS comentarios FROM comments WHERE status = 'invalid';";
		$stmt = $db->prepare($queryc);
		$params = array();
        $stmt->execute($params);
		
        $po=$stmt->fetchAll();
		
		foreach ($po as $c) {
           $c["comentarios"];
        }
		
		// sacar cantidad de usuarios
		$queryu = "SELECT COUNT(id) AS usuarios FROM users;";
		$stmt = $db->prepare($queryu);
		$params = array();
        $stmt->execute($params);
		
        $po=$stmt->fetchAll();
		
		foreach ($po as $u) {
           $u["usuarios"];
        }
		
		// sacar cantidad de empresas
		$queryte = "SELECT COUNT(id) AS todas_empresas FROM companies;";
		$stmt = $db->prepare($queryte);
		$params = array();
        $stmt->execute($params);
		
        $po=$stmt->fetchAll();
		
		foreach ($po as $te) {
           $te["todas_empresas"];
        }
		
        return $this->render('AppBundle:Administrator:administrator.html.twig', array(
			'empresas' => $e,
			'comentarios' => $c,
			'usuarios' => $u,
			'todas_empresas' => $te
		));
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
	
	public function validateCompaniesAction(Request $request){
		
		$em = $this->getDoctrine()->getManager();
		$user = $this->getUser();
		
		$company = new Company();
		
		$id = $request->query->get('id');
		$company_repo = $em->getRepository('BackendBundle:Company');
        $company = $company_repo->find($id);
		
		$company->setStatus('valid');
		$em->persist($company);
		$em->flush(); //ejecturamos
	
		return $this->redirectToRoute('administrator_company');
	}
	
	public function deleteCompaniesAction(Request $request){
		
		$em = $this->getDoctrine()->getManager();
		
		$company = new Company();
		$id = $request->query->get('id');
		$company_repo = $em->getRepository('BackendBundle:Company');
        $company = $company_repo->find($id);
		
		$em->remove($company);
		$flush = $em->flush();
		
		$this->addFlash('msg', 'La empresa se ha eliminado con exito');

        return $this->redirectToRoute("administrator_allcompanies");
		
	}
	
	public function deleteUsersAction(Request $request, $id){
		
		$em = $this->getDoctrine()->getManager();
		$user = $this->getUser();
		
		$user_repo = $em->getRepository('BackendBundle:User');
        $user = $user_repo->find($id);
		
		$em->remove($user);
		$flush = $em->flush();

		$this->addFlash('msg', 'El usuario se ha eliminado con exito');

        return $this->redirectToRoute("administrator_user");
	}
}
