<?php

namespace SecRout\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('SecRoutUserBundle:Default:index.html.twig');
    }
}
