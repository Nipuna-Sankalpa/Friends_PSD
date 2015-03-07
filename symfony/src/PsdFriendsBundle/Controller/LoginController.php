<?php

namespace PsdFriendsBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;




class LoginController extends Controller
{
    public function loginAction(Request $req){   
        if ($req->getMethod()=="POST") {
            $user_mail=$req->get('mail');
            $user_pass=$req->get('password');
        }
        
        $em=$this->getDoctrine()->getEntityManager();
        $repository = $em->getRepository('PsdFriendsBundle:Login');
        $user=$repository->findOneBy(array('eMail'=>$user_mail,'password'=>$user_pass));
        
        if ($user) {
            return $this->render('PsdFriendsBundle:Profile:profile.html.twig');
        }else{
         return $this->render('PsdFriendsBundle:Login:login.html.twig',array('msg'=>"Login Fail"));   
        }
    }
    
    
}
