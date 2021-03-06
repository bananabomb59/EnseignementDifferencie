<?php

namespace EDiff\Bundle\AdminBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilder;

class ReponseType extends AbstractType
{
    public function buildForm(FormBuilder $builder, array $options)
    {
        $builder
            ->add('libelle')
            ->add('bonne_ou_mauvaise')
            ->add('question')
        ;
    }

    public function getName()
    {
        return 'ediff_bundle_adminbundle_reponsetype';
    }
}
