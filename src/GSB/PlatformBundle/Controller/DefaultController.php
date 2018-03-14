<?php

namespace GSB\PlatformBundle\Controller;

use GSB\PlatformBundle\Entity\Medecin;
use GSB\PlatformBundle\Entity\RapportVisite;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {

        return $this->render('GSBPlatformBundle:Default:index.html.twig', array(

        ));
    }

    public function visitesAction()
    {

        return $this->render('GSBPlatformBundle:Pages:visites.html.twig', array(

        ));
    }
}
