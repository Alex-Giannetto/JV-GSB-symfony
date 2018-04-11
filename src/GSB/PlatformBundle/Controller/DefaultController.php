<?php

namespace GSB\PlatformBundle\Controller;

use GSB\PlatformBundle\Entity\Echantillon;
use GSB\PlatformBundle\Entity\Medecin;
use GSB\PlatformBundle\Entity\Medicament;
use GSB\PlatformBundle\Entity\RapportVisite;
use GSB\PlatformBundle\Entity\Visiteur;
use GSB\PlatformBundle\Form\RapportVisiteType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

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

    public function addVisiteAction(Request $request){
        $rapportVisite = new RapportVisite();
        $form = $this->get('form.factory')->create(RapportVisiteType::class, $rapportVisite);

        if ($request->isMethod('POST') && $form->handleRequest($request)->isValid()) {
            $em = $this->getDoctrine()->getManager();

            $em->persist($rapportVisite);
            $em->flush();

            $request->getSession()->getFlashBag()->add('notice', 'Raport bien enregistré.');

            return $this->redirectToRoute('gsb_platform_visites_all');
        }




        return $this->render('GSBPlatformBundle:Pages:addVisite.html.twig', array(
            'form' => $form->createView(),
            'name' => "Ajouter une visite"

        ));
    }

    public function editVisiteAction($id, Request $request){
        $rapportVisite = $this->getDoctrine()
            ->getManager()
            ->getRepository('GSBPlatformBundle:RapportVisite')
            ->find($id);

        $form = $this->get('form.factory')->create(RapportVisiteType::class, $rapportVisite);

        if ($request->isMethod('POST') && $form->handleRequest($request)->isValid()) {
            $em = $this->getDoctrine()->getManager();

            $em->persist($rapportVisite);
            $em->flush();

            $request->getSession()->getFlashBag()->add('notice', 'Raport bien modifier.');

            return $this->redirectToRoute('gsb_platform_visites_one', array(
                'id' => $rapportVisite->getId()
            ));
        }

        return $this->render('GSBPlatformBundle:Pages:addVisite.html.twig', array(
            'form' => $form->createView(),
            'name' => "Modifier visite n°".$rapportVisite->getId()
        ));
    }

    public function deleteVisiteAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $rapport = $em->getRepository('GSBPlatformBundle:RapportVisite')->find($id);


        if (null === $rapport) {
            throw new NotFoundHttpException("Le rapport ayant por id ".$id." n'existe pas.");
        }


        // On crée un formulaire vide, qui ne contiendra que le champ CSRF
        // Cela permet de protéger la suppression d'annonce contre cette faille
            $em->remove($rapport);
            $em->flush();

            $request->getSession()->getFlashBag()->add('info', "Le rapport a bien été supprimée.");


        return $this->redirectToRoute('gsb_platform_visites_all', array());
    }
}
