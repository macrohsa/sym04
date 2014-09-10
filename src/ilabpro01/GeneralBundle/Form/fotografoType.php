<?php

namespace ilabpro01\GeneralBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class fotografoType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('idSitio','text', array(
            'label' =>'Sitio '))
            ->add('nombre')
            ->add('apellido')
            ->add('email')
            ->add('usuario')
            ->add('contrasenia','text', array(
            'label' =>'Contraseña '))
            ->add('telefono')
            ->add('estudio')
            ->add('fechaAlta','text', array(
            'label' =>'Fecha Alta '))
            ->add('idCiudad','text', array(
            'label' =>'Código '))
            ->add('idPlanFotografo','text', array(
            'label' =>'Plan Fotógrafo '))
            ->add('idFormaPago','text', array(
            'label' =>'Forma Pago '))
            ->add('fechaInicioPlan','text', array(
            'label' =>'Fecha Inicio Plan '))
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'ilabpro01\GeneralBundle\Entity\fotografo'
        ));
    }

    public function getName()
    {
        return 'ilabpro01_generalbundle_fotografotype';
    }
}
