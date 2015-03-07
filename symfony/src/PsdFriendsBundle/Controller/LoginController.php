<?php

namespace PsdFriendsBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;



class LoginController extends Controller
{
    public function loginAction(Request $req){   
        
        return $this->render('PsdFriendsBundle:Login:login.html.twig');
    }
    
    
}
