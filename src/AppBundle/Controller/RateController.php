<?php
namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\Session;

use BackendBundle\Entity\Opinion;

class RateController extends Controller {
	private $session;

    public function __construct() {
        $this->session = new Session();
    }
	
	public function rateAction(Request $request, $id){
		$em = $this->getDoctrine()->getManager();
		$user = $this->getUser();
		
		//creamos objeto de la entidad
		$opinion = new Opinion();
		
		$company_repo = $em->getRepository('BackendBundle:Company');
		
		$company = $company_repo->find($id);
		
		$var = $request->query->get("estrellas");
		$var2 = $request->query->get("estrellas2");
		$var3 = $request->query->get("estrellas3");
		$var4 = $request->query->get("estrellas4");
		$var5 = $request->query->get("estrellas5");
		$var6 = $request->query->get("estrellas6");
		$var7 = $request->query->get("estrellas7");
		$var8 = $request->query->get("estrellas8");
		$var9 = $request->query->get("estrellas9");
		$var10 = $request->query->get("estrellas10");
                $yesno = $request->query->get("yesno");
		$generalcomment = $request->query->get("generalcomment");
		
		// seteamos los datos
		$opinion->setUser($user);
		$opinion->setPoint1($var);
		$opinion->setPoint2($var2);
		$opinion->setPoint3($var3);
		$opinion->setPoint4($var4);
		$opinion->setPoint5($var5);
		$opinion->setPoint6($var6);
		$opinion->setPoint7($var7);
		$opinion->setPoint8($var8);
		$opinion->setPoint9($var9);
		$opinion->setPoint10($var10);
                $opinion->setYesno($yesno);
		$opinion->setGeneralcomment($generalcomment);
		$opinion->setCompany($company);
		$opinion->setCreatedAt(new \DateTime("now"));
		
		
		$em->persist($opinion);
		$flush = $em->flush();
		if ($flush == null) {
			$status = "Has opinado correctamente";
		} else {
			$status = "Error al añadir la opinion";
		}
		
		$this->session->getFlashBag()->add("status", $status);
		// /company/id 
		return $this->redirectToRoute('company_profile', array('id' => $id));
	}
	
	
}
