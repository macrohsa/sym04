<?php

namespace ilabpro01\GeneralBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class pedidosType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('sitio')
            ->add('fotografo')
            ->add('usuario')
            ->add('fechaAlta')
            ->add('importe')
            ->add('estado')
            ->add('evento')
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'ilabpro01\GeneralBundle\Entity\pedidos'
        ));
    }

    public function getName()
    {
        return 'ilabpro01_generalbundle_pedidostype';
    }
}
