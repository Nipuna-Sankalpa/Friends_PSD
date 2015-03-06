<?php

namespace PsdFriendsBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('PsdFriendsBundle:Default:index.html.twig');
    }
}
