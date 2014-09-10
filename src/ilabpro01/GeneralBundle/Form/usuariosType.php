<?php

namespace ilabpro01\GeneralBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class usuariosType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('sitio')
            ->add('ciudad')
            ->add('fotografo')
            ->add('nombre')
            ->add('apellido')
            ->add('email')
            ->add('fechaAlta')
            ->add('contrasenia')
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'ilabpro01\GeneralBundle\Entity\usuarios'
        ));
    }

    public function getName()
    {
        return 'ilabpro01_generalbundle_usuariostype';
    }
}
