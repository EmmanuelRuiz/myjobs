<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\Session;

use BackendBundle\Entity\User;
use AppBundle\Form\RegisterType;
use AppBundle\Form\UserType;

class UserController extends Controller {

    private $session;

    public function __construct() {
        $this->session = new Session();
    }
	
	public function indexAction(Request $request) {
        if (is_object($this->getUser())) {
			return $this->redirect('');
        }

        $authenticationUtils = $this->get('security.authentication_utils');
        $error = $authenticationUtils->getLastAuthenticationError();
        $lastUsername = $authenticationUtils->getLastUsername();
		
        return $this->render('AppBundle:User:home.html.twig', array(
			'last_username' => $lastUsername,
			'error' => $error
        ));
    }

    public function loginerrorAction(Request $request) {
        if (is_object($this->getUser())) {
			return $this->redirect('');
        }

        $authenticationUtils = $this->get('security.authentication_utils');
        $error = $authenticationUtils->getLastAuthenticationError();
        $lastUsername = $authenticationUtils->getLastUsername();
		
        return $this->render('AppBundle:User:home.html.twig', array(
			'last_username' => $lastUsername,
			'error' => $error
        ));
    }

    public function registerAction(Request $request) {
        if (is_object($this->getUser())) {
            return $this->redirect('home');
        }


        $user = new User();
        $form = $this->createForm(RegisterType::class, $user);

        /* recoger la request del formulario */
        $form->handleRequest($request);
        /* comprobar si el formularion se ha enviado */
        if ($form->isSubmitted()) {
            if ($form->isValid()) {

                /* conseguir el entitiManager */
                $em = $this->getDoctrine()->getManager();
                //$user_repo = $em->getRepository("BackendBundle:User");

                /*
                 * usar entiti manager para consultas				
                 * hacer comprobacion de que el usuario se quiere registrar
                 * no este en la bd	
                 * :valor significa que es el parametro que recibimos			 
                 */

                $query = $em->createQuery('SELECT u FROM BackendBundle:User u WHERE u.email = :email')
                        ->setParameter('email', $form->get("email")->getData());
                $user_isset = $query->getResult();
                /* si user_isset es = 0 crea el usuario, si no no se registra por que ya existe */
                if (count($user_isset) == 0) {
                    $factory = $this->get("security.encoder_factory");
                    $encoder = $factory->getEncoder($user);
                    $password = $encoder->encodePassword($form->get("password")->getData(), $user->getSalt());
                    /* metodos set necesarios para guardar la informacion */
                    $user->setPassword($password);
                    $user->setRole("ROLE_USER");
                    $user->setImage(null);
                    /* volcar el objeto y persistir en doctrine */
                    $em->persist($user);
                    /* pasar los objetos persistidos a la bd */
                    $flush = $em->flush();
                    /* comprobar que se guarda */
                    if ($flush == null) {
                        $status = "Te has registrado correctamente";

                        $this->session->getFlashBag()->add("status", $status);
                        return $this->redirect("login");
                    } else {
                        $status = "No te has registrado correctamente";
                    }
                } else {
                    $status = "El usuario ya existe";
                }
            } else {
                $status = "No te has registrado correctamente";
            }
            $this->session->getFlashBag()->add("status", $status);
        }

        return $this->render('AppBundle:User:register.html.twig', array(
					"form" => $form->createView()
		));
	}

    public function emailTestAction(Request $request) {
        $email = $request->get("email");

        $em = $this->getDoctrine()->getManager();
        $user_repo = $em->getRepository("BackendBundle:User");
        /* si el nick es igual al de la bd es que ya existe */
        $user_isset = $user_repo->findOneBy(array("email" => $email));

        $result = "used";
        if (count($user_isset) >= 1 && is_object($user_isset)) {
            $result = "used";
        } else {
            $result = "unused";
        }
        return new Response($result);
    }
    
    public function editUserAction(Request $request){
		
		// creamos un objeto  usuario que ya esta logeado
		$user = $this->getUser();
		
		// guardamos la imagen por defecto
		$user_image = $user->getImage();
		
		// creamos variable para la instancia del formulario
		$form = $this->createForm(UserType::class, $user);
		
		/* recoger la request del formulario */
        $form->handleRequest($request);
        /* comprobar si el formularion se ha enviado */
        if ($form->isSubmitted()) {
            if ($form->isValid()) {
                /* conseguir el entitiManager */
                $em = $this->getDoctrine()->getManager();

                /*
                 * usar entiti manager para consultas				
                 * hacer comprobacion de que el usuario se quiere registrar
                 * no este en la bd	
                 * valor significa que es el parametro que recibimos			 
                 */

                $query = $em->createQuery('SELECT u FROM BackendBundle:User u WHERE u.email = :email')
						->setParameter('email', $form->get("email")->getData());
				
				// almacenamos el usuario existente
				$user_isset = $query->getResult();
				
				/* si user_isset es = 0 crea el usuario, si no no se registra por que ya existe */
                if ((count($user_isset) == 0 || $user->getEmail() == $user_isset[0]->getEmail())) {
                    
					// upload archivo
					$file = $form["image"]->getData();
					if (!empty($file) && $file != null) {
						// comprobamos que sea un formato de imagen
						$ext = $file->guessExtension();
						if ($ext == 'jpg' || $ext == 'jpeg' || $ext == 'png' || $ext == 'gif') {
							// creamos el nombre del archivo nuevo
							$file_name = $user->getId().time().'.'.$ext;
							//carpeta en la que se guardara
							$file->move("uploads/users", $file_name);
							$user->setImage($file_name);
						}
					} else {
						$user->setImage($user_image);
					}
					
                    /* volcar el objeto y persistir en doctrine */
                    $em->persist($user);
                    /* pasar los objetos persistidos a la bd */
                    $flush = $em->flush();
					
					
                    // mensajes de comprobación 
                    if ($flush == null) {
                        $status = "Has modificado tus datos correctamente";
                    } else {
                        $status = "No has modificado tus datos";
                    }
                } else {
                    $status = "El usuario ya existe";
                }
            } else {
                $status = "No se han actualizado tus datos";
            }
            $this->session->getFlashBag()->add("status", $status);
			return $this->redirect('my-data');
        }

		return $this->render('AppBundle:User:edit_user.html.twig', array(
			'form' => $form->createView()
		));
		
    }
	
	public function userAction(Request $request){
		
		$em = $this->getDoctrine()->getManager();
		
		//Sacamos todos los objetos de tipo usuario desde la base de datos
		$dql = "SELECT u FROM BackendBundle:User u ORDER BY u.id ASC";
		$query = $em->createQuery($dql);
		
		//Sacamos los registros paginados
		$paginator = $this->get('knp_paginator');
		$pagination = $paginator->paginate(
				$query, $request->query->getInt('page', 1), 5
		);

		//Pasamos información a la vista
		return $this->render('AppBundle:User:users.html.twig', array(
			'pagination' => $pagination
		));

		var_dump("User action");
		die();
	}

}
