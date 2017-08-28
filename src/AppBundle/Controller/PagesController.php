<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class PagesController extends Controller {

	public function viewContactAction(Request $request) {
		return $this->render('AppBundle:Pages:contact.html.twig');
	}

	public function contactAction(Request $request) {
		$name = $request->get('name');
		$email = $request->get('email');
		$subject = $request->get('subject');
		$message_send = $request->get('message');

		$message = \Swift_Message::newInstance()
				->setSubject('Mensaje enviado desde MyJobsAdvisor')
				->setFrom('contacto@crealab.com.mx')
				->setTo('contacto@crealab.com.mx')
				->setBody(
				$this->renderView(
						// app/Resources/views/Emails/registration.html.twig
						'Emails/contact.html.twig', array(
							'message' => $message_send, 
							'name' => $name, 
							'email' => $email,
							'subject' => $subject
							)
				), 'text/html'
		);

		$this->get('mailer')->send($message);
		
		$this->addFlash(
            'success',
            'Tu mensaje se ha enviado correctamente. En breve nos comunicaremos contigo'
        );

		return $this->render('AppBundle:Pages:contact.html.twig');
	}

}
