<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\Session;

// clases de las entidades
use BackendBundle\Entity\Opinion;
use BackendBundle\Entity\User;
use BackendBundle\Entity\Like;


class LikeController extends Controller{
	
	public function likeAction($id = null){
		
		$user = $this->getUser();
		
		$em = $this->getDoctrine()->getManager();
		
		$opinion_repo = $em->getRepository('BackendBundle:Opinion');
		// Buscamos la opinion que estamos dando like
		$opinion = $opinion_repo->find($id);
		
		// Creamo un objeto de tipo Like
		$like = new Like();
		$like->setUser($user);
		$like->setOpinions($opinion);
		
		$em->persist($like);
		$flush = $em->flush();
		
		if ($flush == null) {
			$status = "Te gusta esta opinions";
		} else {
			$status = "No se ha podido guardar el me gusta";
		}
		
		return new Response($status);
	}
	
	public function unlikeAction($id = null){
		
		$user = $this->getUser();
		
		$em = $this->getDoctrine()->getManager();
		
		$like_repo = $em->getRepository('BackendBundle:Like');
		// Buscamos la opinion que estamos dando like
		$like = $like_repo->findOneBy(array(
			'user' => $user,
			'opinions' => $id
		));
		
		$em->remove($like);
		$flush = $em->flush();
		
		if ($flush == null) {
			$status = "Ya no te gusta";
		} else {
			$status = "No se ha podido eliminar el me gusta";
		}
		
		return new Response($status);
	}
	
	public function likesAction(Request $request, $email = null){
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
		$dql = "SELECT l FROM BackendBundle:Like l WHERE l.user = $user_id ORDER BY l.id DESC";
		$query = $em->createQuery($dql);
		
		$paginator = $this->get('knp_paginator');
		$likes = $paginator->paginate($query, $request->query->getInt('page', 1), 5);
		
		return $this->render('AppBundle:Like:likes.html.twig', array(
			// le pasamos a la vista una variable company donde estan todos los datos a mostrar		
			'user' => $user,
			'pagination' => $likes
		));	
	}
	
}
