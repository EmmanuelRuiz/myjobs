<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\Session;

use BackendBundle\Entity\Company;
use BackendBundle\Entity\User;
use BackendBundle\Entity\Comment;

use AppBundle\Form\CompanyType;


class CompanyController extends Controller {

    private $session;

    public function __construct() {
        $this->session = new Session();
    }
	
    /* éste método es para registrar una compañia*/
    public function registerAction(Request $request) {
        $company = new Company();
        $form = $this->createForm(CompanyType::class, $company);

        $form->handleRequest($request);
        if ($form->isSubmitted()) {
            if ($form->isValid()) {
                $em = $this->getDoctrine()->getManager();
                $user = $this->getUser();

                //$user_repo = $em->getRepository("BackendBundle:Company");
                $query = $em->createQuery('SELECT u FROM BackendBundle:Company u WHERE u.tradename = :tradename OR u.businessname = :businessname')
                        ->setParameter('tradename', $form->get("tradename")->getData())
                        ->setParameter('businessname', $form->get("businessname")->getData());
                
                $company_isset = $query->getResult();
                /* si company isset es igual a 0 crea el usuario sino no lo hace por que ya existe el usuario */
                if (count($company_isset) == 0) {
                    //$factory = $this->get("security.encoder_factory");
                    //$encoder = $factory->getEncoder($company);
                    //$company->setStatus("NO");
                    $createdAt = new \Datetime('now');
                    $updatedAt = new \Datetime('now');
                    $company->setUser($user);
                    $company->setLogo(null);
                    $company->setCreatedAt($createdAt);
                    $company->setUpdatedAt($updatedAt);
                    
                    
                    $em->persist($company);
                    $flush = $em->flush();
                    if ($flush == null) {
                        $status = "registro exitoso";
                        return $this->redirect("register-company");
                    } else {
                        return $status = "registro fallido";
                    }
                } else {
                    $status = "La compañía ya existe";
                }
            } else {
                $status = "La empresa no fue registrada correctamente";
            }
        }

        return $this->render('AppBundle:Company:register-company.html.twig', array(
			"form" => $form->createView()
        ));
    }
  
    public function companiesAction(Request $request) {
        $em = $this->getDoctrine()->getManager();

        // Hacemos una consulta a la entidad Company para que nos saque los objetos de tipo Company
        $dql = "SELECT u FROM BackendBundle:Company u ORDER BY u.id ASC";
        $query = $em->createQuery($dql);

        $paginator = $this->get('knp_paginator');
        $pagination = $paginator->paginate(
			$query, $request->query->getInt('page', 1), 5
        );

        return $this->render('AppBundle:Company:companies.html.twig', array(
			'pagination' => $pagination
        ));
    }

    public function searchAction(Request $request) {
        $em = $this->getDoctrine()->getManager();
        $search = trim($request->query->get("search", null));

        if ($search == null) {
            return $this->redirect($this->generateURL('home_publication'));
        }

        // Hacemos una consulta a la entidad Company para que nos saque los objetos de tipo Company
        // La consulta nos devuelve resultados parecidos a la busqueda que se envia
        $dql = "SELECT u FROM BackendBundle:Company u "
                . "WHERE u.businessname LIKE :search OR u.tradename LIKE :search "
                . "OR u.businesssector LIKE :search ORDER BY u.id ASC";
        $query = $em->createQuery($dql)->setParameter('search', "%$search%");

        $paginator = $this->get('knp_paginator');
        $pagination = $paginator->paginate(
                $query, $request->query->getInt('page', 1), 5
        );

        return $this->render('AppBundle:Company:companies.html.twig', array(
            'pagination' => $pagination,
        ));
    }

    public function getOpinions($request) {
        $em = $this->getDoctrine()->getManager();

        // Obtenemos el usuario logeado
        $user = $this->getUser();

        $opinions_repo = $em->getRepository('BackendBundle:Opinion');
        $following_repo = $em->getRepository('BackendBundle:Following');

        /*
          SELECT generalcomment FROM opinions WHERE user_id = 1 OR user_id
          IN (SELECT followed FROM following WHERE user = 1 );
         */

        $following = $following_repo->findBy(array(
            'user' => $user
        ));

        $following_array = array();
        foreach ($following as $follow) {
            $following_array[] = $follow->getFollowed();
        }

        // query comentada arriba
        $query = $opinions_repo->createQueryBuilder('o')
                ->where('o.user = (:user_id) OR o.user IN (:following)')
                ->setParameter('user_id', $user->getId())
                ->setParameter('following', $following_array)
                ->orderBy('o.id', 'DESC')
                ->getQuery();

        // obtenemos el elemento de paginacion
        $paginator = $this->get('knp_paginator');
        $pagination = $paginator->paginate(
                $query, $request->query->getInt('page', 1), 5
        );

        return $pagination;
    }

    // metodo para eliminar la opinion
    public function removeOpinionAction(Request $request, $id) {
        $em = $this->getDoctrine()->getManager();

        $opinions_repo = $em->getRepository('BackendBundle:Opinion');
        $opinions = $opinions_repo->find($id);
        $user = $this->getUser();
		
		
        if ($user->getId() == $opinions->getUser()->getId()) {
            $em->remove($opinions);
            $flush = $em->flush();

            if ($flush == null) {
                $status = "La publicación se ha borrado correctamente";
            } else {
                $status = "La publicación no se ha borrado";
            }
        } else {
            $status = "La publicación no se ha borrado";
        }
        return new Response($status);
    }

    // metodo para el perfil de la empresa
    public function profileAction(Request $request, $id = null) {

        $user = $this->getUser();
        $em = $this->getDoctrine()->getManager();
		
		$comment_repo = $em->getRepository('BackendBundle:Comment')->findAll();
		
	
		
        // Si el ID no es nulo
        if ($id != null) {
            // Cargamos el repositorio de la empresa
            $company_repo = $em->getRepository('BackendBundle:Company');
            // buscamos por la ID
            $company = $company_repo->findOneBy(array(
                'id' => $id
            ));
        } else { // en caso de no obtener nulo
            //obtenemos el ID de la empresa
            $company = $this->getId();
        }

        // si la empresa viene vacia o no es un objeto
        if (empty($company) || !is_object($company)) {
            return $this->redirect($this->generateUrl('home_companies'));
        }


        // en esta query se debe sacar las opiniones que se le hayan hecho unicamente a la compañia
        $company_id = $company->getId();
        $dql = "SELECT o FROM BackendBundle:Opinion o WHERE o.company = $company_id ORDER BY o.id DESC";
        $query = $em->createQuery($dql);

        $paginator = $this->get('knp_paginator');
        $opinions = $paginator->paginate($query, $request->query->getInt('page', 1), 5);

        return $this->render('AppBundle:Company:profile.html.twig', array(
			// le pasamos a la vista una variable company donde estan todos los datos a mostrar
			'comments' => $comment_repo,
			'company' => $company,
			'pagination' => $opinions
        ));
    }

}
