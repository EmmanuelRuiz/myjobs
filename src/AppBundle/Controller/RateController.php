<?php
namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

use BackendBundle\Entity\Opinion;

class RateController extends Controller {
	
	public function rateAction(Request $request, $id){
		$em = $this->getDoctrine()->getManager();
		$user = $this->getUser();
		
		var_dump($id);
		
		$var = $request->query->get("estrellas");
		$var2 = $request->query->get("estrellas2");
		$var3 = $request->query->get("estrellas3");
		var_dump($var,$var2, $var3);
		
		//creamos objeto de la entidad
		$opinion = new Opinion();
		
		$opinion->setUser($user);
		$opinion->setPoint1($var);
		
		$em->persist($opinion);
		$flush = $em->flush();
		
		var_dump($opinion); 
		die();
		
		
	}
	
}
