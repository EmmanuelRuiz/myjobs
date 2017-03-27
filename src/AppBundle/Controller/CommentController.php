<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

use BackendBundle\Entity\Comment;
use BackendBundle\Entity\Opinion;
use BackendBundle\Entity\Company;

class CommentController extends Controller{
   
    public function createAction(Request $request, $id, $opinion_id){
		$comment = new Comment();
		$user = $this->getUser();
	
		
		$commentText = trim($request->request->get("comment"));
		
		$em = $this->getDoctrine()->getManager();
		
		//$company_repo = $em->getRepository('BackendBundle:Company');
		
		//$company = $company_repo->find($id);
		
		$opinion_repo = $em->getRepository('BackendBundle:Opinion');
		// buscamos la opinion a la que le estamos comentando
		$opinion = $opinion_repo->find($opinion_id);
		
		// insertamos el comentario
		$comment->setBody($commentText);
		$comment->setOpinion($opinion);
        $comment->setCreatedAt(new \Datetime());
        $comment->setUser($user);
		$comment->setCreatedAt(new \DateTime("now"));
        $em->persist($comment);
		
		$em->flush(); //ejecturamos
        $this->addFlash('msg', 'Tu comentario se ha realizado con exito');
        return $this->redirectToRoute('company_profile', array('id' => $id ));
		
		
	}
}
