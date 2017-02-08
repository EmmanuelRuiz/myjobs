<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\Session;
use BackendBundle\Entity\User;
use AppBundle\Form\RegisterType;

class UserController extends Controller {

    private $session;

    public function __construct() {
        $this->session = new Session();
    }

    public function loginAction(Request $request) {
        if (is_object($this->getUser())) {
            return $this->redirect('home');
        }

        $authenticationUtils = $this->get('security.authentication_utils');
        $error = $authenticationUtils->getLastAuthenticationError();
        $lastUsername = $authenticationUtils->getLastUsername();

        return $this->render('AppBundle:User:login.html.twig', array(
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
        echo "accion editar usuario mis datos";
        die();
    }

}
