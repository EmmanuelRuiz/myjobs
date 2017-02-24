<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\Session;

use BackendBundle\Entity\Company;
use BackendBundle\Entity\User;

// clases de la entidad opinion
use BackendBundle\Entity\Opinion;
use AppBundle\Form\OpinionType;

class CompanyController extends Controller{
	
	private $session;

    public function __construct() {
        $this->session = new Session();
    }
	
	/* Este metodo debe ser colocado en su controlador indicado
	 * Es para cargar el formulario de la opinion general en donde van las preguntas
	 */
	public function indexAction(Request $request){
		$em = $this->getDoctrine()->getManager();
		
		$user = $this->getUser();
		
		//creamos objeto de la entidad
		$opinion = new Opinion();
		// cargamos el formulario
		$form = $this->createForm(OpinionType::class, $opinion);
		
		$form->handleRequest($request);
		if ($form->isSubmitted()) {
			if ($form->isValid()) {
				/*//upload image
				$file = $form['image']->getData();
				if (!empty($file) && $file != null) {
					$ext = $file->getExtension();
					if ($ext == 'jpg' || $ext == 'jpeg' || $ext == 'png' || $ext == 'gifs') {
						$file_name = $user->getId().time().".".$ext;
						$file->move("uploads/opinins/images", $file_name)
								
						$opinion->setImage($file_name);
					} else {
						$opinion->setImage(null);
					}
				} else {
					$opinion->setImage(null);
				}
				
				//upload document
				$doc = $form['document']->getData();
				if (!empty($doc) && $doc != null) {
					$ext = $doc->getExtension();
					if ($ext == 'jpg' || $ext == 'jpeg' || $ext == 'png' || $ext == 'gifs') {
						$file_name = $user->getId().time().".".$ext;
						$doc->move("uploads/opinins/documents", $file_name)
								
						$opinion->setDocument($file_name);
					} else {
						$opinion->setDocument(null);
					}
				} else {
					$opinion->setDocument(null);
				}*/
				
				
				$opinion->setUser($user);
				$opinion->setCreatedAt(new \DateTime("now"));
				
				$em->persist($opinion);
				$flush = $em->flush();
				
				if ($flush == null) {
					$status = "La publicacion se ha creado correctamente";
				} else {
					$status = "Error al añadir la publicacion";
				}
				
			} else {
				$status = "La publicación no se ha creado";
			}
			
			$this->session->getFlashBag()->add("status", $status);
			return $this->redirectToRoute('home_companies');
		} 
		
		$opinion = $this->getOpinions($request);
		
		return $this->render('AppBundle:Company:home.html.twig', array(
			'form' => $form->createView(),
			'pagination' => $opinion
		));
	}
	
	
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
	
	
	public function searchAction(Request $request){
		$em = $this->getDoctrine()->getManager();
		
		$search	= trim($request->query->get("search", null));
		
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
	
	
	public function getOpinions($request){
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
		foreach($following as $follow){
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
					$query,
					$request->query->getInt('page', 1),
					5
				);
		
		return $pagination;
		
		
	}
}
