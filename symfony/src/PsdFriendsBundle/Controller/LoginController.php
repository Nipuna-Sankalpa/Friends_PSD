<?php

namespace PsdFriendsBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class LoginController extends Controller
{
    public function loginAction(){
        
        
        
        return $this->render('PsdFriendsBundle:Login:login.html.twig');
    }
    
    
}
