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

	// Funcion en caso de existir un error
	public function loginerrorAction(Request $request) {
		if (is_object($this->getUser())) {
			return $this->redirectToRoute('user_profile');
		}

		$em = $this->getDoctrine()->getManager();
		$db = $em->getConnection();

		// Hacemos una consulta a la entidad Company para que nos saque los objetos de tipo Company
		$dql = "SELECT o FROM BackendBundle:Opinion o ORDER BY o.id DESC";
		$query = $em->createQuery($dql);


		$paginator = $this->get('knp_paginator');
		$pagination = $paginator->paginate(
				$query, $request->query->getInt('page', 1), 4
		);

		$authenticationUtils = $this->get('security.authentication_utils');
		$error = $authenticationUtils->getLastAuthenticationError();
		$lastUsername = $authenticationUtils->getLastUsername();

		$this->addFlash(
				'error_login', 'Algunos datos no se ingresaron correctamente. Compruebe que su correo o contraseña sean correctos e inténtelo de nuevo'
		);

		return $this->render('AppBundle:Index:index.html.twig', array(
					'last_username' => $lastUsername,
					'error' => $error,
					'pagination' => $pagination
		));
	}

	public function registerAction(Request $request) {
		if (is_object($this->getUser())) {
			return $this->redirectToRoute('user_profile');
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
					$user->setCreatedAt(new \Datetime('now'));
					$user->setTermscondition('ACEPTO');
					$user->setImage(null);
					/* volcar el objeto y persistir en doctrine */
					$em->persist($user);
					/* pasar los objetos persistidos a la bd */
					$flush = $em->flush();
					/* comprobar que se guarda */
					if ($flush == null) {
						$status = "Te has registrado con éxito. Bienvenido.";
						$this->session->getFlashBag()->add("success", $status);
						return $this->redirect("cuenta/login");
					} else {
						$status = "Ha ocurrido un error al hacer el registro. Intente de nuevo.";
						$this->session->getFlashBag()->add("error", $status);
					}
				} else {
					$status = "El usuario que estas intentando registrar ya existe.";
					$this->session->getFlashBag()->add("error", $status);
				}
			} else {
				$status = "El usuario no fué registrado. Intente de nuevo mas tarde.";
				$this->session->getFlashBag()->add("error", $status);
			}
			$status = "Ha ocurrido un error al hacer el registro. Intente de nuevo.";
			$this->session->getFlashBag()->add("error", $status);
		}

		return $this->render('AppBundle:User:register.html.twig', array(
					"form" => $form->createView()
		));
	}

	public function redirectAction(Request $request) {
		return $this->render('AppBundle:User:login.html.twig');
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

	public function editUserAction(Request $request) {

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
							$file_name = $user->getId() . time() . '.' . $ext;

							//carpeta en la que se guardara
							$file->move("uploads/users", $file_name);
							$user->setImage($file_name);
						}
					} else {
						$user->setImage($user_image);
					}



					$user->setUpdatedAt(new \Datetime('now'));
					/* volcar el objeto y persistir en doctrine */
					$em->persist($user);
					/* pasar los objetos persistidos a la bd */
					$flush = $em->flush();


					// mensajes de comprobación
					if ($flush == null) {
						$status = "Tu perfil se a actualizado con éxito";
					} else {
						$status = "No se han realizado cambios a tu perfil";
					}
				} else {
					$status = "El correo electrónico ya esta en uso";
				}
			} else {
				$status = "No se han realizado cambios a tu perfil";
			}
			$this->session->getFlashBag()->add("status", $status);
			return $this->redirectToRoute('user_edit');
		}

		return $this->render('AppBundle:User:edit_user.html.twig', array(
					'form' => $form->createView()
		));
	}

	public function userAction(Request $request) {

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
	}

	public function profileAction(Request $request) {
		$em = $this->getDoctrine()->getManager();

		$comment_repo = $em->getRepository('BackendBundle:Comment')->findAll();

		$user = new User();
		$id = $request->query->get('id');

		if ($id != null) {
			$user_repo = $em->getRepository('BackendBundle:User');
			$user = $user_repo->findOneBy(array("id" => $id));
		} else {
			$user = $this->getUser();
		}

		if (empty($user) || !is_object($user)) {
			return $this->redirect($this->generateUrl('app_homepage'));
		}

		$user_id = $user->getId();
		$dql = "SELECT o FROM BackendBundle:Opinion o WHERE o.user = $user_id ORDER BY o.id DESC";
		//creamos la query
		$query = $em->createQuery($dql);

		//servicio de paginacion
		$paginator = $this->get('knp_paginator');
		$opinions = $paginator->paginate($query, $request->query->getInt('page', 1), 5);

		return $this->render('AppBundle:User:profile.html.twig', array(
					'comments' => $comment_repo,
					'user' => $user,
					'pagination' => $opinions
		));
	}

	public function viewForgetPasswordAction(Request $request) {
		return $this->render('AppBundle:User:forget.html.twig');
	}

	public function resetPasswordAction(Request $request) {
		$email = $request->get('inputEmail');

		$em = $this->getDoctrine()->getManager();

		$user_repo = $em->getRepository('BackendBundle:User')->findOneBy(array("email" => $email));
		$user_isset = count($user_repo);
		if ($user_isset == 0) {
			$status = "No hay ninguna cuenta vinculada a ese correo elctronico.";
			$this->session->getFlashBag()->add("error", $status);
		} else {
			$characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
			$charactersLength = strlen($characters);
			$randomString = '';
			for ($i = 0; $i < 16; $i++) {
				$randomString .= $characters[rand(0, $charactersLength - 1)];
			}

			$factory = $this->get("security.encoder_factory");
			$encoder = $factory->getEncoder($user_repo);
			$password = $encoder->encodePassword($randomString, $user_repo->getSalt());

			$message = \Swift_Message::newInstance()
					->setSubject('Solicitud de Cambio de Contraseña ')
					->setFrom('noreply@myjobsadvisor.com', 'MyJobsAdvisor')
					->setTo($email)
					->setBody(
					$this->renderView(
							// app/Resources/views/Emails/registration.html.twig
							'Emails/forgot_password.html.twig', array('password' => $randomString, 'user' => $user_repo->getName())
					), 'text/html'
			);

			$user_repo->setPassword($password);
			$em->persist($user_repo);
			$flush = $em->flush();

			if ($flush == null) {
				$status = "Se ha enviado un correo a la dirección $email.";
				$this->session->getFlashBag()->add("success", $status);
			} else {
				$status = "Ocurrio un error al realizar el proceso. Intentelo de nuevo. ";
				$this->session->getFlashBag()->add("error", $status);
			}

			$this->get('mailer')->send($message);
		}

		return $this->render('AppBundle:User:forget.html.twig');
	}

	public function viewChangeAction(Request $request) {
		return $this->render('AppBundle:User:view_change.html.twig');
	}

	public function changePasswordAction(Request $request) {
		$user = $this->getUser();
		$em = $this->getDoctrine()->getManager();

		$password = $request->get('newPassword');

		$factory = $this->get("security.encoder_factory");
		$encoder = $factory->getEncoder($user);
		$password = $encoder->encodePassword($password, $user->getSalt());

		$user->setPassword($password);
		$em->persist($user);
		$flush = $em->flush();
		return $this->render('AppBundle:User:view_change.html.twig');
	}

}
