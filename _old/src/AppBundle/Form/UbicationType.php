<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;

class UbicationType extends AbstractType {

    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options) {
        $builder
                ->add('id', EntityType::class, array(
                    'label' => 'Estado',
                    'class' => 'BackendBundle:Estado',
                    'choice_label' => 'nombre'
                ))
                ->add('clave', EntityType::class, array(
                    'label' => 'Municipio',
                    'class' => 'BackendBundle:Municipio',
                    'choice_label' => 'nombre'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver) {
        $resolver->setDefaults(array(
            'data_class' => 'BackendBundle\Entity\Estado'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix() {
        return 'backendbundle_ubication';
    }

}
