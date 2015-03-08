<?php

namespace PsdFriendsBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ProfileHandlerController extends Controller {

    public function profileHandleAction($ID) {

        $imgURL = $this->getRequest()->getUriForPath('/img/proPic.jpg');

        $em = $this->getDoctrine()->getManager();
        $profile = $em->getRepository('PsdFriendsBundle:Profile')->find($ID);
        $login = $em->getRepository('PsdFriendsBundle:Login')->find($ID);


        return $this->render('PsdFriendsBundle:Profile:profile.html.twig', array(
                    'imgPath' => $imgURL,
                    'profile' => $profile,
                    'login' => $login
        ));
    }

}
