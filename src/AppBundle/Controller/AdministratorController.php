<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Session\Session;
// entidades 
use BackendBundle\Entity\Comment;
use BackendBundle\Entity\Opinion;
use BackendBundle\Entity\Company;
use BackendBundle\Entity\Claimcompany;
use BackendBundle\Entity\User;

class AdministratorController extends Controller {

	private $session;

	public function __construct() {
		$this->session = new Session();
	}

	public function loginAction(Request $request){
		return $this->render('AppBundle:Administrator:login.html.twig');
	}
	
	public function indexAction(Request $request) {

		$em = $this->getDoctrine()->getManager();
		$db = $em->getConnection();

		// Hacemos una consulta a la entidad Company para que nos saque los objetos de tipo Company
		$dql = "SELECT u FROM BackendBundle:Company u";
		$query_company = $em->createQuery($dql);

		$paginator = $this->get('knp_paginator');
		$pag_company = $paginator->paginate(
				$query_company, $request->query->getInt('page', 1), 5
		);

		// Hacemos una consulta a la entidad Company para que nos saque los objetos de tipo Company que no estan verificadas
		$dql = "SELECT u FROM BackendBundle:Company u WHERE u.status = 'invalid'";
		$query = $em->createQuery($dql);

		$paginator = $this->get('knp_paginator');
		$pagination = $paginator->paginate(
				$query, $request->query->getInt('page', 1), 5
		);

		$querye = "SELECT COUNT(id) AS empresas FROM companies WHERE status = 'invalid';";
		$stmt = $db->prepare($querye);
		$params = array();
		$stmt->execute($params);

		$po = $stmt->fetchAll();

		foreach ($po as $e) {
			$e["empresas"];
		}

		// sacar cantidad de comentarios
		$queryc = "SELECT COUNT(id) AS comentarios FROM comments WHERE status = 'invalid';";
		$stmt = $db->prepare($queryc);
		$params = array();
		$stmt->execute($params);

		$po = $stmt->fetchAll();

		foreach ($po as $c) {
			$c["comentarios"];
		}

		// sacar cantidad de usuarios
		$queryu = "SELECT COUNT(id) AS usuarios FROM users;";
		$stmt = $db->prepare($queryu);
		$params = array();
		$stmt->execute($params);

		$po = $stmt->fetchAll();

		foreach ($po as $u) {
			$u["usuarios"];
		}

		// sacar cantidad de empresas
		$queryte = "SELECT COUNT(id) AS todas_empresas FROM companies;";
		$stmt = $db->prepare($queryte);
		$params = array();
		$stmt->execute($params);

		$po = $stmt->fetchAll();

		foreach ($po as $te) {
			$te["todas_empresas"];
		}

		// sacar cantidad de reclamos
		$queryte = "SELECT COUNT(id) AS claims FROM claimcompany;";
		$stmt = $db->prepare($queryte);
		$params = array();
		$stmt->execute($params);

		$po = $stmt->fetchAll();

		foreach ($po as $re) {
			$re["claims"];
		}

		$opinion_repo = $em->getRepository('BackendBundle:Opinion');

		$query_opinion_100 = $opinion_repo->createQueryBuilder('o')
				->select('(o.company) as company', 'COUNT(o) as cont', 'SUM(o.point1 + o.point2 + o.point3 + o.point4 + o.point5 + o.point6 + o.point7 + o.point8 + o.point9 + o.point10) as promedio_100')
				->where('o.createdAt > :date')
				->groupBy('o.company', 'o.createdAt')
				->setParameter('date', new \DateTime('-365 day'))
				->getQuery();

		$opinions_100 = $query_opinion_100->getResult();

		$query_opinion_60 = $opinion_repo->createQueryBuilder('o')
				->select('(o.company) as company', 'COUNT(o) as cont', 'SUM(o.point1 + o.point2 + o.point3 + o.point4 + o.point5 + o.point6 + o.point7 + o.point8 + o.point9 + o.point10)*:multiplication as promedio_60')
				->where('o.createdAt < :date')
				->groupBy('o.company', 'o.createdAt')
				->setParameter('date', new \DateTime('-365 day'))
				->setParameter('multiplication', .60)
				->getQuery();

		$opinions_60 = $query_opinion_60->getResult();

		$query_avg = $opinion_repo->createQueryBuilder('o')
				->select('(o.company) as company', 'AVG(CASE WHEN o.createdAt > :date THEN (o.point1 + o.point2 + o.point3 + o.point4 + o.point5 + o.point6 + o.point7 + o.point8 + o.point9 + o.point10) WHEN o.createdAt < :date THEN (o.point1 + o.point2 + o.point3 + o.point4 + o.point5 + o.point6 + o.point7 + o.point8 + o.point9 + o.point10)*:multiplication ELSE 0 END) AS promedio')
				->groupBy('o.company')
				->orderBy('promedio', 'DESC')
				->setParameter('date', new \DateTime('-365 day'))
				->setParameter('multiplication', .60)
				->getQuery();

		$general_avg = $query_avg ->getResult();
		
		
		



		return $this->render('AppBundle:Administrator:administrator.html.twig', array(
			'empresas' => $e,
			'comentarios' => $c,
			'usuarios' => $u,
			'todas_empresas' => $te,
			'claims' => $re,
			'pagination' => $pagination,
			'opinion_100' => $opinions_100,
			'opinion_60' => $opinions_60,
			'general_avg' => $general_avg
		));
	}

	public function companiesAction(Request $request) {
		$em = $this->getDoctrine()->getManager();
		$db = $em->getConnection();

		$querye = "SELECT COUNT(id) AS empresas FROM companies WHERE status = 'invalid';";
		$stmt = $db->prepare($querye);
		$params = array();
		$stmt->execute($params);

		$po = $stmt->fetchAll();

		foreach ($po as $e) {
			$e["empresas"];
		}

		// sacar cantidad de comentarios
		$queryc = "SELECT COUNT(id) AS comentarios FROM comments WHERE status = 'invalid';";
		$stmt = $db->prepare($queryc);
		$params = array();
		$stmt->execute($params);

		$po = $stmt->fetchAll();

		foreach ($po as $c) {
			$c["comentarios"];
		}

		// sacar cantidad de usuarios
		$queryu = "SELECT COUNT(id) AS usuarios FROM users;";
		$stmt = $db->prepare($queryu);
		$params = array();
		$stmt->execute($params);

		$po = $stmt->fetchAll();

		foreach ($po as $u) {
			$u["usuarios"];
		}

		// sacar cantidad de empresas
		$queryte = "SELECT COUNT(id) AS todas_empresas FROM companies;";
		$stmt = $db->prepare($queryte);
		$params = array();
		$stmt->execute($params);

		$po = $stmt->fetchAll();

		foreach ($po as $te) {
			$te["todas_empresas"];
		}

		// sacar cantidad de reclamos
		$queryte = "SELECT COUNT(id) AS claims FROM claimcompany;";
		$stmt = $db->prepare($queryte);
		$params = array();
		$stmt->execute($params);

		$po = $stmt->fetchAll();

		foreach ($po as $re) {
			$re["claims"];
		}

		// Hacemos una consulta a la entidad Company para que nos saque los objetos de tipo Company
		$dql = "SELECT u FROM BackendBundle:Company u WHERE u.status = 'invalid'";
		$query = $em->createQuery($dql);

		$paginator = $this->get('knp_paginator');
		$pagination = $paginator->paginate(
				$query, $request->query->getInt('page', 1), 5
		);

		return $this->render('AppBundle:Administrator:administrator_companies.html.twig', array(
					'empresas' => $e,
					'comentarios' => $c,
					'usuarios' => $u,
					'todas_empresas' => $te,
					'claims' => $re,
					'pagination' => $pagination
		));
		/* return $this->render('AppBundle:Administrator:administrator_companies.html.twig'); */
	}

	public function commentsAction(Request $request) {
		$em = $this->getDoctrine()->getManager();
		$db = $em->getConnection();

		$querye = "SELECT COUNT(id) AS empresas FROM companies WHERE status = 'invalid';";
		$stmt = $db->prepare($querye);
		$params = array();
		$stmt->execute($params);

		$po = $stmt->fetchAll();

		foreach ($po as $e) {
			$e["empresas"];
		}

		// sacar cantidad de comentarios
		$queryc = "SELECT COUNT(id) AS comentarios FROM comments WHERE status = 'invalid';";
		$stmt = $db->prepare($queryc);
		$params = array();
		$stmt->execute($params);

		$po = $stmt->fetchAll();

		foreach ($po as $c) {
			$c["comentarios"];
		}

		// sacar cantidad de usuarios
		$queryu = "SELECT COUNT(id) AS usuarios FROM users;";
		$stmt = $db->prepare($queryu);
		$params = array();
		$stmt->execute($params);

		$po = $stmt->fetchAll();

		foreach ($po as $u) {
			$u["usuarios"];
		}

		// sacar cantidad de empresas
		$queryte = "SELECT COUNT(id) AS todas_empresas FROM companies;";
		$stmt = $db->prepare($queryte);
		$params = array();
		$stmt->execute($params);

		$po = $stmt->fetchAll();

		foreach ($po as $te) {
			$te["todas_empresas"];
		}

		// sacar cantidad de reclamos
		$queryte = "SELECT COUNT(id) AS claims FROM claimcompany;";
		$stmt = $db->prepare($queryte);
		$params = array();
		$stmt->execute($params);

		$po = $stmt->fetchAll();

		foreach ($po as $re) {
			$re["claims"];
		}

		// Hacemos una consulta a la entidad Company para que nos saque los objetos de tipo Company
		$dql = "SELECT u FROM BackendBundle:Comment u WHERE u.status = 'invalid'";
		$query = $em->createQuery($dql);


		$paginator = $this->get('knp_paginator');
		$pagination = $paginator->paginate(
				$query, $request->query->getInt('page', 1), 5
		);

		return $this->render('AppBundle:Administrator:administrator_comments.html.twig', array(
					'empresas' => $e,
					'comentarios' => $c,
					'usuarios' => $u,
					'todas_empresas' => $te,
					'claims' => $re,
					'pagination' => $pagination
		));
	}

	public function usersAction(Request $request) {
		$em = $this->getDoctrine()->getManager();
		$db = $em->getConnection();

		$querye = "SELECT COUNT(id) AS empresas FROM companies WHERE status = 'invalid';";
		$stmt = $db->prepare($querye);
		$params = array();
		$stmt->execute($params);

		$po = $stmt->fetchAll();

		foreach ($po as $e) {
			$e["empresas"];
		}

		// sacar cantidad de comentarios
		$queryc = "SELECT COUNT(id) AS comentarios FROM comments WHERE status = 'invalid';";
		$stmt = $db->prepare($queryc);
		$params = array();
		$stmt->execute($params);

		$po = $stmt->fetchAll();

		foreach ($po as $c) {
			$c["comentarios"];
		}

		// sacar cantidad de usuarios
		$queryu = "SELECT COUNT(id) AS usuarios FROM users;";
		$stmt = $db->prepare($queryu);
		$params = array();
		$stmt->execute($params);

		$po = $stmt->fetchAll();

		foreach ($po as $u) {
			$u["usuarios"];
		}

		// sacar cantidad de empresas
		$queryte = "SELECT COUNT(id) AS todas_empresas FROM companies;";
		$stmt = $db->prepare($queryte);
		$params = array();
		$stmt->execute($params);

		$po = $stmt->fetchAll();

		foreach ($po as $te) {
			$te["todas_empresas"];
		}

		// sacar cantidad de reclamos
		$queryte = "SELECT COUNT(id) AS claims FROM claimcompany;";
		$stmt = $db->prepare($queryte);
		$params = array();
		$stmt->execute($params);

		$po = $stmt->fetchAll();

		foreach ($po as $re) {
			$re["claims"];
		}

		// Hacemos una consulta a la entidad Company para que nos saque los objetos de tipo Company
		$dql = "SELECT u FROM BackendBundle:User u";
		$query = $em->createQuery($dql);


		$paginator = $this->get('knp_paginator');
		$pagination = $paginator->paginate(
				$query, $request->query->getInt('page', 1), 5
		);

		return $this->render('AppBundle:Administrator:administrator_users.html.twig', array(
					'empresas' => $e,
					'comentarios' => $c,
					'usuarios' => $u,
					'todas_empresas' => $te,
					'claims' => $re,
					'pagination' => $pagination
		));
	}

	public function allCompaniesAction(Request $request) {
		$em = $this->getDoctrine()->getManager();
		$db = $em->getConnection();

		$querye = "SELECT COUNT(id) AS empresas FROM companies WHERE status = 'invalid';";
		$stmt = $db->prepare($querye);
		$params = array();
		$stmt->execute($params);

		$po = $stmt->fetchAll();

		foreach ($po as $e) {
			$e["empresas"];
		}

		// sacar cantidad de comentarios
		$queryc = "SELECT COUNT(id) AS comentarios FROM comments WHERE status = 'invalid';";
		$stmt = $db->prepare($queryc);
		$params = array();
		$stmt->execute($params);

		$po = $stmt->fetchAll();

		foreach ($po as $c) {
			$c["comentarios"];
		}

		// sacar cantidad de usuarios
		$queryu = "SELECT COUNT(id) AS usuarios FROM users;";
		$stmt = $db->prepare($queryu);
		$params = array();
		$stmt->execute($params);

		$po = $stmt->fetchAll();

		foreach ($po as $u) {
			$u["usuarios"];
		}

		// sacar cantidad de empresas
		$queryte = "SELECT COUNT(id) AS todas_empresas FROM companies;";
		$stmt = $db->prepare($queryte);
		$params = array();
		$stmt->execute($params);

		$po = $stmt->fetchAll();

		foreach ($po as $te) {
			$te["todas_empresas"];
		}

		// sacar cantidad de reclamos
		$queryte = "SELECT COUNT(id) AS claims FROM claimcompany;";
		$stmt = $db->prepare($queryte);
		$params = array();
		$stmt->execute($params);

		$po = $stmt->fetchAll();

		foreach ($po as $re) {
			$re["claims"];
		}

		// Hacemos una consulta a la entidad Company para que nos saque los objetos de tipo Company
		$dql = "SELECT u FROM BackendBundle:Company u";
		$query = $em->createQuery($dql);


		$paginator = $this->get('knp_paginator');
		$pagination = $paginator->paginate(
				$query, $request->query->getInt('page', 1), 5
		);

		return $this->render('AppBundle:Administrator:administrator_allcompanies.html.twig', array(
					'empresas' => $e,
					'comentarios' => $c,
					'usuarios' => $u,
					'todas_empresas' => $te,
					'claims' => $re,
					'pagination' => $pagination
		));
	}

	public function validateCompaniesAction(Request $request) {

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

	public function deleteCompaniesAction(Request $request) {

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

	public function deleteUsersAction(Request $request) {

		$em = $this->getDoctrine()->getManager();
		$user = new User();
		$id = $request->query->get('id');
		$user_repo = $em->getRepository('BackendBundle:User');
		$user = $user_repo->find($id);

		$em->remove($user);
		$flush = $em->flush();

		$this->addFlash('msg', 'El usuario se ha eliminado con exito');

		return $this->redirectToRoute("administrator_user");
	}

	public function asignAction(Request $request) {
		//Entity Manager
		$em = $this->getDoctrine()->getEntityManager();

		$id = $request->query->get('id');
		$company_id = $request->query->get('company_id');
		$claim_id = $request->query->get('claim_id');


		$user_repo = $em->getRepository('BackendBundle:User');
		$user = $user_repo->find($id);

		$company_repo = $em->getRepository('BackendBundle:Company');
		$company = $company_repo->find($company_id);


		$claim_repo = $em->getRepository('BackendBundle:Claimcompany');
		$claim = $claim_repo->find($claim_id);


		$company->setStatus('valid');
		$company->setUser($user);
		$company->setRepresentant('si');
		$em->remove($claim);

		//Persistimos en el objeto
		$em->persist($company, $claim);

		//Insertarmos en la base de datos
		$flush = $em->flush();

		$this->addFlash('msg', 'Se ha asignado la empresa correctamente');

		return $this->redirectToRoute('administrator_claim');
	}

	public function viewAction(Request $request) {
		$em = $this->getDoctrine()->getManager();
		$db = $em->getConnection();

		$querye = "SELECT COUNT(id) AS empresas FROM companies WHERE status = 'invalid';";
		$stmt = $db->prepare($querye);
		$params = array();
		$stmt->execute($params);

		$po = $stmt->fetchAll();

		foreach ($po as $e) {
			$e["empresas"];
		}

		// sacar cantidad de comentarios
		$queryc = "SELECT COUNT(id) AS comentarios FROM comments WHERE status = 'invalid';";
		$stmt = $db->prepare($queryc);
		$params = array();
		$stmt->execute($params);

		$po = $stmt->fetchAll();

		foreach ($po as $c) {
			$c["comentarios"];
		}

		// sacar cantidad de usuarios
		$queryu = "SELECT COUNT(id) AS usuarios FROM users;";
		$stmt = $db->prepare($queryu);
		$params = array();
		$stmt->execute($params);

		$po = $stmt->fetchAll();

		foreach ($po as $u) {
			$u["usuarios"];
		}

		// sacar cantidad de empresas
		$queryte = "SELECT COUNT(id) AS todas_empresas FROM companies;";
		$stmt = $db->prepare($queryte);
		$params = array();
		$stmt->execute($params);

		$po = $stmt->fetchAll();

		foreach ($po as $te) {
			$te["todas_empresas"];
		}

		// sacar cantidad de reclamos
		$queryte = "SELECT COUNT(id) AS claims FROM claimcompany;";
		$stmt = $db->prepare($queryte);
		$params = array();
		$stmt->execute($params);

		$po = $stmt->fetchAll();

		foreach ($po as $re) {
			$re["claims"];
		}

		// Hacemos una consulta a la entidad Company para que nos saque los objetos de tipo Company
		$dql = "SELECT u FROM BackendBundle:Claimcompany u";
		$query = $em->createQuery($dql);


		$paginator = $this->get('knp_paginator');
		$pagination = $paginator->paginate(
				$query, $request->query->getInt('page', 1), 5
		);

		return $this->render('AppBundle:Administrator:administrator_claims.html.twig', array(
					'empresas' => $e,
					'comentarios' => $c,
					'usuarios' => $u,
					'todas_empresas' => $te,
					'claims' => $re,
					'pagination' => $pagination
		));
	}

	public function reclamarAction(Request $request) {
		$em = $this->getDoctrine()->getManager();
		$user = $this->getUser();

		$claim = new Claimcompany();


		$id = $request->query->get('id');
		$company_repo = $em->getRepository('BackendBundle:Company');
		$company = $company_repo->find($id);


		$name = $request->request->get("name");
		$lastname = $request->request->get("lastname");
		$position = $request->request->get("position");
		$companyemail = $request->request->get("companyemail");
		$officenumber = $request->request->get("officenumber");
		$personalnumber = $request->request->get("personalnumber");


		$claim->setName($name);
		$claim->setUser($user);
		$claim->setCompany($company);
		$claim->setLastname($lastname);
		$claim->setPosition($position);
		$claim->setOfficenumber($officenumber);
		$claim->setPersonalnumber($personalnumber);
		$claim->setBusinessemail($companyemail);
		$claim->setCreatedAt(new \DateTime("now"));

		$em->persist($claim);
		$flush = $em->flush();
		if ($flush == null) {
			$status = "Reclamación exitosa, en breve nos comunicaremos contigo para corroborar la información";
		} else {
			$status = "Error al hacer la reclamación, intente mas tarde. Si el problema persiste, contactenos";
		}

		$this->session->getFlashBag()->add("status", $status);
		// /company/id 
		return $this->redirectToRoute('company_profile', array('id' => $id));
	}
	
	public function validateCommentAction(Request $request){
		$em = $this->getDoctrine()->getManager();
		
		$comment = new Comment();
		$comment_id = $request->query->get('id');
		
		$comment_repo = $em->getRepository('BackendBundle:Comment');
		$comment = $comment_repo->find($comment_id);
		
		
		$comment->setStatus('valid');
		$em->persist($comment);
		$em->flush();
		
		return $this->redirectToRoute('administrator_comment');
		
	}

	public function graficarAction(Request $request) {
		//$email = $request->get("email");

		$em = $this->getDoctrine()->getManager();
		$db = $em->getConnection();
		$user_repo = $em->getRepository("BackendBundle:User");
		/* si el nick es igual al de la bd es que ya existe */


		$query = "SELECT age FROM users;";
		$stmt = $db->prepare($query);
		$params = array();
		$stmt->execute($params);

		$po = $stmt->fetchAll();

		foreach ($po as $e) {
			$e["age"];
		}

		

		return new JSONResponse($e);
	}

		/*
		SELECT CASE WHEN
		  (age BETWEEN 10 AND 19) THEN 'De 10 a 19' ELSE CASE WHEN(age BETWEEN 20 AND 29) THEN 'De 20 a 29' ELSE CASE WHEN(age >= 20) THEN 'De 30 o más'
		END
		END
		END rango,
		COUNT(*) total
		FROM
		  users
		GROUP BY
		  rango;
		*/


}
