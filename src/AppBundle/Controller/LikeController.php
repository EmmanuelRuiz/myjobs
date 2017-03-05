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
	
}
