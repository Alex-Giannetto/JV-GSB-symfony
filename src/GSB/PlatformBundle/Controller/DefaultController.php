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

    public function allVisitesAction()
    {

        $em = $this->getDoctrine()->getManager();

        // On récupère l'annonce $id
        $rapports = $em->getRepository('GSBPlatformBundle:RapportVisite')->findAll();

        return $this->render('GSBPlatformBundle:Pages:visites.html.twig', array(
            'rapports' => $rapports
        ));
    }

    public function selectedVisiteAction($id)
    {

        $em = $this->getDoctrine()->getManager();

        // On récupère l'annonce $id
        $rapport = $em->getRepository('GSBPlatformBundle:RapportVisite')->find($id);

        return $this->render('GSBPlatformBundle:Pages:oneVisite.html.twig', array(
            'rapport' => $rapport
        ));
    }
}
