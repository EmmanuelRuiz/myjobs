<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

use BackendBundle\Entity\Comment;
use BackendBundle\Entity\Opinion;
use BackendBundle\Entity\Company;

class CommentController extends Controller{
   
    public function createAction(Request $request, $id){
		$comment = new Comment();
		$user = $this->getUser();
		
	
		$commentText = $request->request->get("comment");
		
		$em = $this->getDoctrine()->getManager();
		
		$opinion_repo = $em->getRepository('BackendBundle:Opinion');
		// buscamos la opinion a la que le estamos comentando
		$opinion = $opinion_repo->find($id);
		
		// insertamos el comentario
		$comment->setBody($commentText);
		$comment->setOpinion($opinion);
        $comment->setCreatedAt(new \Datetime());
        $comment->setUser($user);
        $em->persist($comment);
		
		$em->flush(); //ejecturamos
        $this->addFlash('msg', 'Thank you for commenting.');
        return $this->redirectToRoute('company_profile', array('id' => $id));
		
		
	}
}
