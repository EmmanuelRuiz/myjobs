<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\Session;

use BackendBundle\Entity\Following;
use BackendBundle\Entity\User;


class FollowingController extends Controller {

    private $session;

    public function __construct() {
        $this->session = new Session();
    }
	
	public function followAction(Request $request){
		// recogemos el usuario con el que estamos logeados
		$user = $this->getUser();
		// sacamos el followed id 
		$followed_id = $request->get('followed');
		
		$em = $this->getDoctrine()->getManager();
		$user_repo = $em->getRepository('BackendBundle:User');
		
		// preguntamos si los usuarios existen y obtenemos el objeto de tipo usuario
		$followed = $user_repo->find($followed_id);
		
		// creamos un objeto de tipo following
		$following = new Following();
		$following->setUser($user);
		$following->setFollowed($followed);
		
		$em->persist($following);
		$flush = $em->flush();
		
		if ($flush == null) {
			$status = "Ahora estás siguiendo a este usuario";
		} else {
			$status = "No se ha podido seguir a este usuario";
		}
		
		return new Response($status);
		
	}
	
	public function unfollowAction(Request $request){
		// recogemos el usuario con el que estamos logeados
		$user = $this->getUser();
		// sacamos el followed id 
		$followed_id = $request->get('followed');
		
		$em = $this->getDoctrine()->getManager();
		
		//sacamos el registro del follow
		$following_repo = $em->getRepository('BackendBundle:Following');
		$followed = $following_repo->findOneBy(
				array(
					'user' => $user,
					'followed' => $followed_id
				));
		
		//lo eliminamos del doctrine
		$em->remove($followed);	
		$flush = $em->flush();
		
		if ($flush == null) {
			$status = "Has dejado de seguir a este usuario";
		} else {
			$status = "No se ha podido dejar de seguir a este usuario";
		}
		
		return new Response($status);
	}
	
	public function followingAction(Request $request, $email = null){
		$em = $this->getDoctrine()->getManager();
		
		// Si el ID no es nulo
		if ($email != null) {
			// Cargamos el repositorio de la empresa
			$user_repo = $em->getRepository('BackendBundle:User');
			// buscamos por la ID
			$user = $user_repo->findOneBy(array(
				'email' => $email
			));
		} else { // en caso de no obtener nulo
			//obtenemos el ID de la empresa
			$user = $this->getUser();
		}
		
		// si la empresa viene vacia o no es un objeto
		if (empty($user) || !is_object($user)) {
			return $this->redirect($this->generateUrl('home_companies'));
		}
		
		
		// en esta query se debe sacar las opiniones que se le hayan hecho unicamente a la compañia
		$user_id = $user->getId();
		$dql = "SELECT f FROM BackendBundle:Following f WHERE f.user = $user_id ORDER BY f.id DESC";
		$query = $em->createQuery($dql);
		
		$paginator = $this->get('knp_paginator');
		$following = $paginator->paginate($query, $request->query->getInt('page', 1), 5);
		
		return $this->render('AppBundle:Following:following.html.twig', array(
			// le pasamos a la vista una variable company donde estan todos los datos a mostrar		
			'type' => 'following',
			'profile_user' => $user,
			'pagination' => $following
		));	
	}
	
	public function followedAction(Request $request, $email = null){
		$em = $this->getDoctrine()->getManager();
		
		// Si el ID no es nulo
		if ($email != null) {
			// Cargamos el repositorio de la empresa
			$user_repo = $em->getRepository('BackendBundle:User');
			// buscamos por la ID
			$user = $user_repo->findOneBy(array(
				'email' => $email
			));
		} else { // en caso de no obtener nulo
			//obtenemos el ID de la empresa
			$user = $this->getUser();
		}
		
		// si la empresa viene vacia o no es un objeto
		if (empty($user) || !is_object($user)) {
			return $this->redirect($this->generateUrl('home_companies'));
		}
		
		
		// en esta query se debe sacar las opiniones que se le hayan hecho unicamente a la compañia
		$user_id = $user->getId();
		$dql = "SELECT f FROM BackendBundle:Following f WHERE f.followed = $user_id ORDER BY f.id DESC";
		$query = $em->createQuery($dql);
		
		$paginator = $this->get('knp_paginator');
		$followed = $paginator->paginate($query, $request->query->getInt('page', 1), 5);
		
		return $this->render('AppBundle:Following:following.html.twig', array(
			// le pasamos a la vista una variable company donde estan todos los datos a mostrar		
			'type' => 'followed',
			'profile_user' => $user,
			'pagination' => $followed
		));	
	}
    
}
