<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

use BackendBundle\Entity\Comment;
use BackendBundle\Entity\Opinion;

class CommentController extends Controller{
   
    public function createAction(Request $request){
		$em = $this->getDoctrine()->getManager();
		
        $comment = new Comment();
		var_dump($comment);
		
    }
}
