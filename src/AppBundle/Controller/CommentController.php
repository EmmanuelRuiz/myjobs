<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

use BackendBundle\Entity\Comment;
use BackendBundle\Entity\Opinion;
use BackendBundle\Entity\Company;

class CommentController extends Controller{
   
    public function createAction(Request $request, $id, $opinion_id){
		$em = $this->getDoctrine()->getManager();
		$comment = new Comment();
		
		$user = $this->getUser();
		
		$opinion_repo = $em->getRepository('BackendBundle:Opinion');
		// buscamos la opinion a la que le estamos comentando
		$opinion = $opinion_repo->find($opinion_id);

		$commentText = $request->request->get("comment");	
		
	
		// upload image
		//$image = $request->query->get('image')->getData();
		$image = $request->files->get('image');
		
		// evaluamos si hay una imagen enviandose
		if (!empty($image) && $image != null) { // si la imagen existe
			
			// generamos una extensión
			$ext = $image->guessExtension();
			
			// evaluamos si la imagen tiene estas extensiones
			if ($ext == 'jpg' || $ext == 'jpeg' || $ext == 'png' || $ext == 'gif') {
				// guardamos el nombre del archivo que viene
				$file_name = $user->getId().time().".".$ext; 
				// movemos a la carpeta que deseemos en el servidor
				$image->move("uploads/comments/images", $file_name);
				
				// lo guaramos
				$comment->setImage($file_name);
				
			} else { // si no viene con una extension correcta
				// haces un set imagen en la entidad a null
				$comment->setImage(null);
			}
		} else { // si no existe
			// insertamos como vacio
			$comment->setImage(null);
		}
		
		// insertamos el comentario
		$comment->setBody($commentText);
		$comment->setOpinion($opinion);
        $comment->setCreatedAt(new \Datetime());
        $comment->setUser($user);
		// seteamos el status definido
		$comment->setStatus("invalid");
		$comment->setCreatedAt(new \DateTime("now"));
        $em->persist($comment);
		$em->flush(); //ejecturamos
		
		
        $this->addFlash('msg', 'Tu comentario se ha realizado con exito. Estamos validando, en breve tu comentario se podra visualizar');
		
        return $this->redirectToRoute('company_profile', array('id' => $id ));
		
		
	}
}
