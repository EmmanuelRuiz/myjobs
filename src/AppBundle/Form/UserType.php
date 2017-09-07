<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;

class UserType extends AbstractType {

    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options) {
        $builder
                ->add('name', TextType::class, array(
                    'label' => 'Nombre',
                    'required' => false,
                    'attr' => array(
                        'class' => 'form-name form-control'
                    )
                ))
                ->add('plastname', TextType::class, array(
                    'label' => 'Apellido Paterno',
                    'required' => false,
                    'attr' => array(
                        'class' => 'form-lastname form-control'
                    )
                ))
                ->add('mlastname', TextType::class, array(
                    'label' => 'Apellido Materno',
                    'required' => false,
                    'attr' => array(
                        'class' => 'form-lastname form-control'
                    )
                ))
                ->add('email', EmailType::class, array(
                    'label' => 'Correo electrónico',
                    'required' => false,
                    'attr' => array(
                        'class' => 'form-name form-control email-input'
                    )
                ))
                // textarea para la biografia del usuario
                ->add('biography', TextareaType::class, array(
                    'label' => 'Biografía',
                    'required' => false,
                    'attr' => array(
                        'class' => 'form-bio form-control '
                    )
                ))

                //campo para imagen del usuario
                ->add('image', FileType::class, array(
                    'label' => 'Foto de perfil',
                    'required' => false,
                    'data_class' => null,
                    'attr' => array(
                        'class' => ''
                    )
                ))
                ->add('age', IntegerType::class, array(
                    'label' => 'Edad',
                    'required' => false,
                    'attr' => array(
                        'class' => 'form-control'
                    )
                ))
                ->add('telephone', TextType::class, array(
                    'label' => 'Número de teléfono',
                    'required' => false,
                    'attr' => array(
                        'class' => 'form-control'
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
                    ),
                    'placeholder' => 'Perfil'
                ))
                ->add('Editar', SubmitType::class, array(
                    "attr" => array(
                        "class" => "btn btn-success btn-block"
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
