<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\Session;
use BackendBundle\Entity\Company;
use BackendBundle\Entity\User;
use BackendBundle\Entity\Comment;
use AppBundle\Form\RegisterCompanyType;
use AppBundle\Form\CompanyType;

class CompanyController extends Controller {

	private $session;

	public function __construct() {
		$this->session = new Session();
	}

	/* éste método es para registrar una compañia */

	public function registerAction(Request $request) {
		$company = new Company();
		$form = $this->createForm(RegisterCompanyType::class, $company);

		$form->handleRequest($request);
		if ($form->isSubmitted()) {
			if ($form->isValid()) {
				$em = $this->getDoctrine()->getManager();
				$user = $this->getUser();

				//$user_repo = $em->getRepository("BackendBundle:Company");
				$query = $em->createQuery('SELECT u FROM BackendBundle:Company u WHERE u.tradename = :tradename')
						->setParameter('tradename', $form->get("tradename")->getData());

				$company_isset = $query->getResult();
				/* si company isset es igual a 0 crea el usuario sino no lo hace por que ya existe el usuario */
				if (count($company_isset) == 0) {

					$representant = $request->request->get('optionsRadios');
					//$factory = $this->get("security.encoder_factory");
					//$encoder = $factory->getEncoder($company);
					//$company->setStatus("NO");
					$createdAt = new \Datetime('now');
					$updatedAt = new \Datetime('now');
					$company->setUser($user);
					$company->setLogo(null);
					if ($representant == 'no') {
						$company->setStatus("invalid");
						$company->setRepresentant($representant);
					} else {
						$company->setStatus("invalid");
						$company->setRepresentant($representant);
					}
					$company->setCreatedAt($createdAt);
					$company->setUpdatedAt($updatedAt);


					$em->persist($company);
					$flush = $em->flush();
					if ($flush == null) {
						$status = "registro exitoso";
						return $this->redirect("registrar");
					} else {
						return $status = "registro fallido";
					}
				} else {
					$status = "La compañía ya existe";
				}
			} else {
				$status = "La empresa no fue registrada correctamente";
			}
		}

		return $this->render('AppBundle:Company:register-company.html.twig', array(
					"form" => $form->createView()
		));
	}

	public function companiesAction(Request $request) {
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

	public function searchAction(Request $request) {
		$em = $this->getDoctrine()->getManager();
		$search = trim($request->query->get("search", null));

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
					'pagination' => $pagination,
		));
	}

	public function getOpinions($request) {
		$em = $this->getDoctrine()->getManager();

		// Obtenemos el usuario logeado
		$user = $this->getUser();

		$opinions_repo = $em->getRepository('BackendBundle:Opinion');
		$following_repo = $em->getRepository('BackendBundle:Following');

		/*
		  SELECT generalcomment FROM opinions WHERE user_id = 1 OR user_id
		  IN (SELECT followed FROM following WHERE user = 1 );
		 */

		$following = $following_repo->findBy(array(
			'user' => $user
		));

		$following_array = array();
		foreach ($following as $follow) {
			$following_array[] = $follow->getFollowed();
		}

		// query comentada arriba
		$query = $opinions_repo->createQueryBuilder('o')
				->where('o.user = (:user_id) OR o.user IN (:following)')
				->setParameter('user_id', $user->getId())
				->setParameter('following', $following_array)
				->orderBy('o.id', 'DESC')
				->getQuery();

		// obtenemos el elemento de paginacion
		$paginator = $this->get('knp_paginator');
		$pagination = $paginator->paginate(
				$query, $request->query->getInt('page', 1), 5
		);

		return $pagination;
	}

	// metodo para eliminar la opinion
	public function removeOpinionAction(Request $request, $id) {
		$em = $this->getDoctrine()->getManager();

		$opinions_repo = $em->getRepository('BackendBundle:Opinion');
		$opinions = $opinions_repo->find($id);
		$user = $this->getUser();


		if ($user->getId() == $opinions->getUser()->getId()) {
			$em->remove($opinions);
			$flush = $em->flush();

			if ($flush == null) {
				$status = "La publicación se ha borrado correctamente";
			} else {
				$status = "La publicación no se ha borrado";
			}
		} else {
			$status = "La publicación no se ha borrado";
		}
		return new Response($status);
	}

	// metodo para el perfil de la empresa
	public function profileAction(Request $request) {


		$em = $this->getDoctrine()->getManager();
		$user = $this->getUser();
		$id = $request->query->get('id');
		$db = $em->getConnection();

		$comment_repo = $em->getRepository('BackendBundle:Comment')->findAll();

		// Si el ID no es nulo
		if ($id != null) {
			// Cargamos el repositorio de la empresa
			$company_repo = $em->getRepository('BackendBundle:Company');
			// buscamos por la ID
			$company = $company_repo->findOneBy(array(
				'id' => $id
			));
		} else { // en caso de no obtener nulo
			//obtenemos el ID de la empresa
			$company = $this->getId();
		}

		// si la empresa viene vacia o no es un objeto
		if (empty($company) || !is_object($company)) {
			return $this->redirect($this->generateUrl('home_companies'));
		}


		// en esta query se debe sacar las opiniones que se le hayan hecho unicamente a la compañia
		$company_id = $company->getId();
		$dql = "SELECT o FROM BackendBundle:Opinion o WHERE o.company = $company_id ORDER BY o.id DESC";
		$query = $em->createQuery($dql);

		$paginator = $this->get('knp_paginator');
		$opinions = $paginator->paginate($query, $request->query->getInt('page', 1), 5);

		/* SELECT * from opinions where created_at < DATE_SUB(NOW(), INTERVAL 356 DAY); */
		/* SELECT * from opinions where created_at < DATE_FORMAT(NOW(),'%Y-%m-%d') */
		$query = "SELECT SUM(point1 + point2 + point3 + point4 + point5 + point6 + point7 + point8 + point9 + point10)*.60"
				. "AS promedio FROM opinions WHERE company_id = $company_id and  created_at < (DATE_SUB(NOW(), INTERVAL 365 DAY));";
		
		
		$query2 = "SELECT SUM(point1 + point2 + point3 + point4 + point5 + point6 + point7 + point8 + point9 + point10)"
				. " AS promedios FROM opinions WHERE company_id = $company_id and  created_at > (DATE_SUB(NOW(), INTERVAL 365 DAY));";

		$stmt = $db->prepare($query);
		$params = array();
		$stmt->execute($params);

		$po = $stmt->fetchAll();

		foreach ($po as $p) {
			$p["promedio"];
			var_dump($p);
		}


		$stmt = $db->prepare($query2);
		$params = array();
		$stmt->execute($params);

		$po = $stmt->fetchAll();

		foreach ($po as $q) {
			$q["promedios"];
			var_dump($q);
		}

		return $this->render('AppBundle:Company:profile.html.twig', array(
			// le pasamos a la vista una variable company donde estan todos los datos a mostrar
			'puntos2' => $q,
			'puntos' => $p,
			'comments' => $comment_repo,
			'company' => $company,
			'pagination' => $opinions
		));
	}

	/* public function puntosAction(Request $request){
	  $em = $this->getDoctrine()->getEntityManager();
	  $db = $em->getConnection();

	  $query = "SELECT SUM(point1 + point2 + point3 + point4 + point5 + point6 + point7 + point8 + point9 + point10) / 10 AS promedio FROM opinions WHERE company_id = 6; ";
	  $stmt = $db->prepare($query);
	  $params = array();
	  $stmt->execute($params);

	  $po=$stmt->fetchAll();

	  foreach ($po as $p) {
	  $p["promedio"];
	  }

	  return $this->render('AppBundle:User:home.html.twig', array(
	  'puntos' => $p
	  ));
	  } */

	public function editAction(Request $request) {

		$em = $this->getDoctrine()->getManager();
		$user = $this->getUser();

		$company = new Company();

		$id = $request->query->get('id');
		$company_repo = $em->getRepository('BackendBundle:Company');
		$company = $company_repo->find($id);


		// guardamos la imagen por defecto
		$company_image = $company->getLogo();


		// creamos variable para la instancia del formulario
		$form = $this->createForm(CompanyType::class, $company);

		/* recoger la request del formulario */
		$form->handleRequest($request);
		/* comprobar si el formularion se ha enviado */
		if ($form->isSubmitted()) {
			if ($form->isValid()) {
				/*
				 * usar entiti manager para consultas				
				 * hacer comprobacion de que el usuario se quiere registrar
				 * no este en la bd	
				 * valor significa que es el parametro que recibimos			 
				 */

				$query = $em->createQuery('SELECT u FROM BackendBundle:Company u WHERE u.tradename = :tradename')
						->setParameter('tradename', $form->get("tradename")->getData());

				// almacenamos el usuario existente
				$company_isset = $query->getResult();

				/* si user_isset es = 0 crea el usuario, si no no se registra por que ya existe */
				if ((count($company_isset) == 0 || $company->getTradename() == $company_isset[0]->getTradename())) {

					// upload archivo
					$file = $form["logo"]->getData();

					if (!empty($file) && $file != null) {
						// comprobamos que sea un formato de imagen
						$ext = $file->guessExtension();
						if ($ext == 'jpg' || $ext == 'jpeg' || $ext == 'png' || $ext == 'gif') {
							// creamos el nombre del archivo nuevo
							$file_name = $company->getId() . time() . '.' . $ext;
							//carpeta en la que se guardara
							$file->move("uploads/company", $file_name);
							$company->setLogo($file_name);
						}
					} else {
						$company->setLogo($company_image);
					}

					/* volcar el objeto y persistir en doctrine */
					$em->persist($company);
					/* pasar los objetos persistidos a la bd */
					$flush = $em->flush();


					// mensajes de comprobación 
					if ($flush == null) {
						$status = "La información de la empresa se a actualizado correctamente";
					} else {
						$status = "No se ha realizado ninguna actualización";
					}
				} else {
					$status = "La empresa ya existe en nuestra base de datos";
				}
			} else {
				$status = "No se ha realizado ninguna actualización";
			}
			$this->session->getFlashBag()->add("status", $status);
			return $this->redirectToRoute('companies_edit', array('id' => $id));
		}

		return $this->render('AppBundle:Company:edit_company.html.twig', array(
					'company' => $company,
					'form' => $form->createView()
		));
	}

	public function myCompaniesAction(Request $request) {

		$em = $this->getDoctrine()->getManager();
		$user = $this->getUser();
		$id = $request->query->get('id');

		$company_repo = $em->getRepository('BackendBundle:Company');

		$company = $company_repo->findAll();

		return $this->render('AppBundle:Company:listmycompanies.html.twig', array(
					'company' => $company
		));
	}

}
