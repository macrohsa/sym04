<?php

namespace ilabpro01\GeneralBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class precioXproductoType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('sitio')
            ->add('fotografo')
            ->add('precio')
            ->add('producto')
            ->add('lista')
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'ilabpro01\GeneralBundle\Entity\precioXproducto'
        ));
    }

    public function getName()
    {
        return 'ilabpro01_generalbundle_precioxproductotype';
    }
}
