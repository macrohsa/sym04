<?php

namespace ilabpro01\GeneralBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class eventosType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('sitio')
            ->add('fotografo')
            ->add('nombre')
            ->add('descripcion')
            ->add('fechaInicio')
            ->add('fechaFin')
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'ilabpro01\GeneralBundle\Entity\eventos'
        ));
    }

    public function getName()
    {
        return 'ilabpro01_generalbundle_eventostype';
    }
}
