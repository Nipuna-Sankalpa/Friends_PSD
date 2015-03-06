<?php

namespace PsdFriendsBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class TimelineController extends Controller {

    public function timeLineAction() {
        return $this->render('PsdFriendsBundle:Timeline:timeLine.html.twig');
    }

}
