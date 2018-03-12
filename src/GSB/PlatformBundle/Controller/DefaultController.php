<?php

namespace GSB\PlatformBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('GSBPlatformBundle:Default:index.html.twig');
    }
}
