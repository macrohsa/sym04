<?php

namespace ilabpro01\BackFotogBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class fotosXalbumType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('sitio')
            ->add('fotografo')
            ->add('album')
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'ilabpro01\BackFotogBundle\Entity\fotosXalbum'
        ));
    }

    public function getName()
    {
        return 'ilabpro01_backfotogbundle_fotosxalbumtype';
    }
}
