<?php

namespace ilabpro01\BackFotogBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class albumesType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('sitio')
            ->add('fotografo')
            ->add('nombre')
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'ilabpro01\BackFotogBundle\Entity\albumes'
        ));
    }

    public function getName()
    {
        return 'ilabpro01_backfotogbundle_albumestype';
    }
}
