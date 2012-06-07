<?php

namespace EDiff\Bundle\AdminBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilder;

class QuestionnaireType extends AbstractType
{
    public function buildForm(FormBuilder $builder, array $options)
    {
        $builder
            ->add('titre')
            ->add('nb_questions_a_repondre')
            ->add('matiere')
            ->add('anneescolaire')
            ->add('classe')
        ;
    }

    public function getName()
    {
        return 'ediff_bundle_adminbundle_questionnairetype';
    }
}
