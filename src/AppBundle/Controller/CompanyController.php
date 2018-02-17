<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\HttpFoundation\JsonResponse;
use BackendBundle\Entity\Company;
use BackendBundle\Entity\User;
use BackendBundle\Entity\Comment;
use BackendBundle\Entity\Estado;
use AppBundle\Form\RegisterCompanyType;
use AppBundle\Form\CompanyType;
use AppBundle\Form\UbicationType;

class CompanyController extends Controller {

	private $session;

	public function __construct() {
		$this->session = new Session();
	}

	/* éste método es para registrar una compañia */

	public function registerAction(Request $request) {
		$company = new Company();
		$estado = new Estado();

		$form = $this->createForm(RegisterCompanyType::class, $company);
		$form_ubication = $this->createForm(UbicationType::class, $estado);


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

					$estado = $request->request->get('estado');
					$municipio = $request->request->get('municipio');
					$localidad = $request->request->get('localidad');



					if ((empty($municipio) && $municipio == null) || (empty($localidad) && $localidad == null)) {
						$status = "Ingrese la ubicación de la empresa correctamente ";
						$this->session->getFlashBag()->add("error", $status);
					} else {
						$estado_repo = $em->getRepository("BackendBundle:Estado");
						$nombre_estado = $estado_repo->findOneById($estado)->getNombre();

						$municipio_repo = $em->getRepository("BackendBundle:Municipio");
						$nombre_municipio = $municipio_repo->findOneById($municipio)->getNombre();

						$localidad_repo = $em->getRepository("BackendBundle:Localidad");
						$nombre_localidad = $localidad_repo->findOneById($localidad)->getNombre();

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
						$company->setEstado($nombre_estado);
						$company->setMunicipio($nombre_municipio);
						$company->setLocalidad($nombre_localidad);

						$company->setCreatedAt($createdAt);
						$company->setUpdatedAt($updatedAt);


						$em->persist($company);
						$flush = $em->flush();
						if ($flush == null) {
							$status = "¡Genial! La empresa se ha registrado con éxito. Ahora puedes calificarla con base en tu experiencia como trabajador o extrabajador.";
							$this->session->getFlashBag()->add("success", $status);
							return $this->redirectToRoute('company_profile', array('id' => $company->getId()));
						} else {
							$status = "Ha ocurrido un error al hacer el registro. Intente de nuevo.";
							$this->session->getFlashBag()->add("error", $status);
						}
					}
				} else {
					$status = "La empresa que estas intentando registrar ya existe.";
					$this->session->getFlashBag()->add("error", $status);
				}
			} else {
				$status = "La empresa no fue registrada correctamente. Compruebe que los datos hayan sido ingresados correctamente.";
				$this->session->getFlashBag()->add("error", $status);
			}
			$status = "Ha ocurrido un error al hacer el registro. Intente de nuevo.";
			$this->session->getFlashBag()->add("error", $status);
		}

		return $this->render('AppBundle:Company:register-company.html.twig', array(
					"form" => $form->createView(),
		));
	}

	public function findStateAction(Request $request) {

		$em = $this->getDoctrine()->getManager();

		$states_repo = $em->getRepository("BackendBundle:Estado");
		$states = $states_repo->findAll();

		$countrytab = array();

		foreach ($states as $country) {
			$countrytab[$country->getNombre()] = array(
				"nombre" => $country->getNombre(),
				"id" => $country->getId()
			);
		}

		return new JsonResponse($countrytab);
	}

	public function findMunicipioAction(Request $request) {

		$em = $this->getDoctrine()->getManager();

		$id = $request->get('id');
		$municipio_repo = $em->getRepository("BackendBundle:Municipio");
		$municipio = $municipio_repo->findBy(array("estadoId" => $id));
		$municipiotab = array();
		foreach ($municipio as $country) {
			$municipiotab[$country->getNombre()] = array(
				"nombre" => $country->getNombre(),
				"id" => $country->getId()
			);
		}

		return new JsonResponse($municipiotab);
	}

	public function findLocalidadAction(Request $request) {

		$em = $this->getDoctrine()->getManager();

		$id = $request->get('id');
		$localidad_repo = $em->getRepository("BackendBundle:Localidad");
		$localidad = $localidad_repo->findBy(array("municipioId" => $id));


		$localidadtab = array();

		foreach ($localidad as $country) {
			$localidadtab[$country->getNombre()] = array(
				"nombre" => $country->getNombre(),
				"id" => $country->getId()
			);
		}

		return new JsonResponse($localidadtab);
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

	// metodo para eliminar comentarios
	public function removeCommentAction(Request $request, $id) {
		$em = $this->getDoctrine()->getManager();

		$comment_repo = $em->getRepository('BackendBundle:Comment');
		$comments = $comment_repo->find($id);
		$user = $this->getUser();


		if ($user->getId() == $comments->getUser()->getId()) {
			$em->remove($comments);
			$flush = $em->flush();

			if ($flush == null) {
				$status = "El comentario se ha eliminado";
			} else {
				$status = "El comentario no se ha borrado";
			}
		} else {
			$status = "El comentario no se ha borrado correctamente";
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
		}


		$stmt = $db->prepare($query2);
		$params = array();
		$stmt->execute($params);

		$po = $stmt->fetchAll();

		foreach ($po as $q) {
			$q["promedios"];
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

	public function editAction(Request $request) {
		$user = $this->getUser();
		$em = $this->getDoctrine()->getManager();


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
		$id = $user->getId();

		$dql = "SELECT u FROM BackendBundle:Company u WHERE u.user = $id and u.representant = 'si'";

		$query = $em->createQuery($dql);

		$paginator = $this->get('knp_paginator');
		$pagination = $paginator->paginate(
				$query, $request->query->getInt('page', 1), 5
		);

		return $this->render('AppBundle:Company:listmycompanies.html.twig', array(
					'pagination' => $pagination,
		));
	}

}
