<?php

namespace ilabpro01\BackAdminBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class planFotografoType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('codigoPlan','text', array(
            'label' =>'Código '))
            ->add('nombre')
            ->add('diasVigencia','integer', array(
            'label' =>'Días Vigencia '))
            ->add('disponible')
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'ilabpro01\BackAdminBundle\Entity\planFotografo'
        ));
    }

    public function getName()
    {
        return 'ilabpro01_backadminbundle_planfotografotype';
    }
}
