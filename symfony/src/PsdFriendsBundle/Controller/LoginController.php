<?php

namespace PsdFriendsBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class LoginController extends Controller {

    public function loginAction(Request $req) {
        
        if ($req->getMethod() == "POST") {
            $user_mail = $req->get('mail');
            $user_pass = sha1($req->get('password'));
        }

        $em = $this->getDoctrine()->getEntityManager();
        $repository = $em->getRepository('PsdFriendsBundle:Login');
        $user = $repository->findOneBy(array('email' => $user_mail, 'password' => $user_pass));
        
        if ($user) {
            return $this->redirect($this->generateUrl("profile", array('ID'=>$user->getId())));
        } else {

            return $this->render('PsdFriendsBundle:Login:login.html.twig', array('msg' =>TRUE,
                'content'=>"login credentials"
                ));
        }
    }

}
