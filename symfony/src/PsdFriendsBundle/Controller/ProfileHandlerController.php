<?php

namespace PsdFriendsBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ProfileHandlerController extends Controller {

    public function profileHandleAction() {
        return $this->render('PsdFriendsBundle:Profile:profile.html.twig');
    }

}