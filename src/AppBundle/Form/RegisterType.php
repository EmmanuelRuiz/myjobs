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
                        'class' => 'form-name form-control name-input'
                    )
                ))
                ->add('plastname', TextType::class, array(
                    'label' => 'Apellido paterno',
                    'required' => 'required',
                    'attr' => array(
                        'class' => 'form-lastname form-control plastname-input'
                    )
                ))
                ->add('mlastname', TextType::class, array(
                    'label' => 'Apellido materno',
                    'required' => 'required',
                    'attr' => array(
                        'class' => 'form-lastname form-control mlastname-input'
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
                        'class' => 'form-password form-control password-input'
                    )
                ))
                ->add('age', NumberType::class, array(
                    'label' => 'Edad',
                    'required' => 'required',
                    'attr' => array(
                        'class' => 'form-control age-input'
                    )
                ))
                ->add('telephone', TextType::class, array(
                    'label' => 'Numero telefonico',
                    'required' => 'required',
                    'attr' => array(
                        'class' => 'form-control phone-input'
                    )
                ))
                ->add('termscondition', CheckboxType::class, array(
                    'label' => ' ',
                    'required' => false,
                    'attr' => array(
                        'class' => 'hidden'
                    )
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
