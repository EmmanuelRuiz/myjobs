<?php

namespace BackendBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
		//cargar entiti manager.. acceder a nuestras entidades
		$em = $this->getDoctrine()->getManager();
		$user_repo = $em->getRepository("BackendBundle:User");
		$user = $user_repo->find(1);
		
		echo "Bienvenido ".$user->getName()." ".$user->getplastname();
		
		var_dump($user);
		die();
		
        return $this->render('BackendBundle:Default:index.html.twig');
    }
}
