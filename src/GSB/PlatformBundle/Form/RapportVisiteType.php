<?php

namespace GSB\PlatformBundle\Form;

use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class RapportVisiteType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('date', DateType::class)
            ->add('motif', TextType::class)
            ->add('bilan', TextareaType::class)
            ->add('documentation', CheckboxType::class)
            ->add('medecin', EntityType::class, array(
                'class'        => 'GSBPlatformBundle:Medecin',
                'choice_label' => 'nomPrenom',
                'multiple'     => false,
            ))
            ->add('medecinRemplacant', EntityType::class, array(
                'class'        => 'GSBPlatformBundle:Medecin',
                'choice_label' => 'nomPrenom',
                'multiple'     => false,
                'required'      => false,

            ))
            ->add('medicament1', EntityType::class, array(
                'class'        => 'GSBPlatformBundle:Medicament',
                'choice_label' => 'libelle',
                'multiple'     => false,
            ))
            ->add('medicament2', EntityType::class, array(
                'class'        => 'GSBPlatformBundle:Medicament',
                'choice_label' => 'libelle',
                'multiple'     => false,
                'required'      => false,
            ))
            ->add('echantillons', CollectionType::class, array(
                'entry_type'   => EchantillonType::class,
                'allow_add'    => true,
                'allow_delete' => true
            ))
            ->add('save',      SubmitType::class)
        ;
    }

    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'GSB\PlatformBundle\Entity\RapportVisite'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'gsb_platformbundle_rapportvisite';
    }


}
