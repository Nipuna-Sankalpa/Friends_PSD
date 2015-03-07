<?php

namespace PsdFriendsBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use PsdFriendsBundle\Entity\User;
use PsdFriendsBundle\Entity\Login;
use Symfony\Component\HttpFoundation\Request;

class SignUPController extends Controller {

    public function signupAction(Request $req) {
        $user = new User();
        $login = new Login();

        if ($req->getMethod() == "POST") {

            $user->setFirstname($req->get('first_name'));
            $user->setLastname($req->get('last_name'));
            $user->setEMail($req->get('email'));

            $login->setEMail($req->get('email'));
            $login->setPassword($req->get('password'));

            $em = $this->getDoctrine()->getManager();
            $em1 = $this->getDoctrine()->getManager();
            $em->persist($user);
            $em->flush();
            $em1->persist($login);
            $em1->flush();

            return $this->render('PsdFriendsBundle:Profile:profile.html.twig');
        } else {
            return $this->render('PsdFriendsBundle:Profile:profile.html.twig');
        }
    }

}
