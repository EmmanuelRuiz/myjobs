<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\DateType;

class RegisterType extends AbstractType {

    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options) {

        $builder
                ->add('name', TextType::class, array(
                    'label' => 'Nombre',
                    'required' => 'required',
                    'attr' => array(
                        'class' => 'form-name form-control'
                    )
                ))
                ->add('plastname', TextType::class, array(
                    'label' => 'Apellido paterno',
                    'required' => 'required',
                    'attr' => array(
                        'class' => 'form-lastname form-control'
                    )
                ))
                ->add('mlastname', TextType::class, array(
                    'label' => 'Apellido materno',
                    'required' => 'required',
                    'attr' => array(
                        'class' => 'form-lastname form-control'
                    )
                ))
                ->add('email', EmailType::class, array(
                    'label' => 'Correo electronico',
                    'required' => 'required',
                    'attr' => array(
                        'class' => 'form-name form-control email-input'
                    )
                ))
                ->add('password', PasswordType::class, array(
                    'label' => 'Contraseña',
                    'required' => 'required',
                    'attr' => array(
                        'class' => 'form-password form-control'
                    )
                ))
                ->add('age', NumberType::class, array(
                    'label' => 'Edad',
                    'required' => 'required',
                    'attr' => array(
                        'class' => 'form-control'
                    )
                ))
                ->add('telephone', TextType::class, array(
                    'label' => 'Numero telefonico',
                    'required' => 'required',
                    'attr' => array(
                        'class' => 'form-control'
                    )
                ))
                ->add('termscondition', CheckboxType::class, array(
                    'label' => ' ',
                    'required' => false,
                    'attr' => array(
                        'class' => 'hidden'
                    )
                ))
                ->add('datejob', DateType::class, array(
                    'label' => 'Fecha desde que labora',
                    'widget' => 'choice',
                    'years' => range(1980, 2025),
                    // do not render as type="date", to avoid HTML5 date pickers
                    'html5' => false,
                    // add a class that can be selected in JavaScript
                    'attr' => ['class' => 'form-control js-datepicker'],
                ))
                ->add('anonimo', ChoiceType::class, array(
                    'choices' => array(
                        'Si' => 'Si',
                        'No' => 'No'
                    ),
                    'label' => '¿Quieres ser un perfil privado?',
                    'required' => 'required',
                    'attr' => array(
                        'class' => 'form-control'
                    )
                ))
                ->add('Registrarse', SubmitType::class, array(
                    "attr" => array(
                        "class" => "form-submit btn-block btn btn-primary btnvalidar"
                    )
                ))
        ;
    }

    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver) {
        $resolver->setDefaults(array(
            'data_class' => 'BackendBundle\Entity\User'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix() {
        return 'backendbundle_user';
    }

}
