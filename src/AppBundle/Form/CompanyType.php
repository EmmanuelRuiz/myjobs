<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class CompanyType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('tradename', TextType::class, array(
                'label' => 'Nombre comercial',
                'required' => 'required',
                'attr' => array(
                    'class' => 'form-tradename form-control'
                )
            ))
            ->add('businessname', TextType::class, array(
                'label' => 'Nombre del negocio',
                'required' => 'required',
                'attr' => array(
                    'class' => 'form-businessname form-control'
                )
            ))
            ->add('rfc', TextType::class, array(
                'label' => 'RFC',
                'required' => 'required',
                'attr' => array(
                    'class' => 'form-rfc form-control'
                )
            ))
            
            ->add('description', TextType::class, array(
                'label' => 'Descripción de la empresa',
                'required' => 'required',
                'attr' => array(
                    'class' => 'form-description form-control'
                )
            ))
            ->add('businesssector', TextType::class, array(
                'label' => 'Sector empresarial',
                'required' => 'required',
                'attr' => array(
                    'class' => 'form-businesssector form-control'
                )
            ))
            ->add('contacname', TextType::class, array(
                'label' => 'Nombre de contacto',
                'required' => 'required',
                'attr' => array(
                    'class' => 'form-contacname form-control'
                )
            ))
            ->add('position', TextType::class, array(
                'label' => 'Posición en la empresa',
                'required' => 'required',
                'attr' => array(
                    'class' => 'form-position form-control'
                )
            ))
            ->add('telephoneext')
            ->add('businessemail')
            ->add('status')
            ->add('document')
            ->add('createdAt')
            ->add('updatedAt')
            ->add('user')
            ->add('Registrarse', SubmitType::class, array(
                "attr" => array(
                    "class" => "form-submit btn btn-success"
                )
            ))
        ;
    
        /*        $builder
            ->add('tradename', TextType::class, array(
                'label' => 'Nombre comercial',
                'required' => 'required',
                'attr' => array(
                    'class' => 'form-tradename form-control'
                )
            ))
            ->add('businessname', TextType::class, array(
                'label' => 'Nombre del negocio',
                'required' => 'required',
                'attr' => array(
                    'class' => 'form-businessname form-control'
                )
            ))
            ->add('rfc', TextType::class, array(
                'label' => 'RFC',
                'required' => 'required',
                'attr' => array(
                    'class' => 'form-rfc form-control'
                )
            ))
            ->add('logo')
            ->add('description')
            ->add('businesssector')
            ->add('contacname')
            ->add('position')
            ->add('telephoneext')
            ->add('businessemail')
            ->add('status')
            ->add('document')
            ->add('createdAt')
            ->add('updatedAt')
            ->add('user')
            ->add('Registrarse', SubmitType::class, array(
                "attr" => array(
                    "class" => "form-submit btn btn-success"
                )
            ))
        ;
    }*/
        
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'BackendBundle\Entity\Company'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'backendbundle_company';
    }


}
