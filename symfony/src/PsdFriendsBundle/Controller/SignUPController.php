<?php

namespace PsdFriendsBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use PsdFriendsBundle\Entity\Login;
use Symfony\Component\HttpFoundation\Request;

class SignUPController extends Controller {

    public function signupAction(Request $req) {
        $login = new Login();

        if ($req->getMethod() == "POST") {

            $login->setFirstname($req->get('first_name'));
            $login->setLastname($req->get('last_name'));
            
            $em=$this->getDoctrine()->getManager();
            $repo=$em->getRepository('PsdFriendsBundle:Login');
            $mail=$repo->findBy(array('email'=>$req->get('email')));
            if ($mail) {
                return $this->render('PsdFriendsBundle:Login:login.html.twig', array('msg' =>TRUE,
                'content'=>"E-mail.It is already exist in the system."
                ));
            }else{
                $login->setEMail($req->get('email'));
            }
            
            $login->setPassword(sha1($req->get('password')));

            $em1 = $this->getDoctrine()->getManager();
            $em1->persist($login);
            $em1->flush();

            return $this->render('PsdFriendsBundle:Timeline:timeLine.html.twig');
            
        } else {
            return $this->render('PsdFriendsBundle:Login:login.html.twig', array('msg' =>TRUE,
                'content'=>"Sign Up.Try Again"
                ));
        }
    }

}
