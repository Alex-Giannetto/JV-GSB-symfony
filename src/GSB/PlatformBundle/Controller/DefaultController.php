<?php

namespace GSB\PlatformBundle\Controller;

use GSB\PlatformBundle\Entity\RapportVisite;
use GSB\PlatformBundle\Form\RapportVisiteType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Form\Extension\Core\Type\FormType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;

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

    public function addVisiteAction(){
        // On crée un objet Advert
        $rapportVisite = new RapportVisite();

        // On crée le FormBuilder grâce au service form factory
//        $formBuilder = $this->get('form.factory')->createBuilder(FormType::class, $rapportVisite);
//
//        // On ajoute les champs de l'entité que l'on veut à notre formulaire
//        $formBuilder
//            ->add('date',      DateType::class)
//            ->add('motif',     TextType::class)
//            ->add('bilan',   TextareaType::class)
//            ->add('save',      SubmitType::class)
//        ;
//        // Pour l'instant, pas de candidatures, catégories, etc., on les gérera plus tard

        // À partir du formBuilder, on génère le formulaire
        $form = $this->get('form.factory')->create(RapportVisiteType::class, $rapportVisite);

        // On passe la méthode createView() du formulaire à la vue
        // afin qu'elle puisse afficher le formulaire toute seule
        return $this->render('GSBPlatformBundle:Pages:addVisite.html.twig', array(
            'form' => $form->createView(),
        ));
    }
}
