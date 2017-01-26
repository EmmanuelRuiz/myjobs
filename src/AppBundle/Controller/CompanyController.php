<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class CompanyController extends Controller{
	
	public function indexAction(Request $request){
		echo "accion index company";
		die();
	}
}
