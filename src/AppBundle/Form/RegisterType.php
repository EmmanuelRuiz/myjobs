<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class RegisterType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
		/*
		 * 			->add('name')
			->add('plastname')
			->add('mlastname')
			->add('nick')
			->add('age')
			->add('email')
			->add('telephone')
			->add('password')
			->add('connection')
			->add('biography')
			->add('image')
			->add('termscondition')
			->add('datejob')
			->add('privacy')
			->add('role')
			->add('anonimo')
			->add('active')
			->add('createdAt')
			->add('updatedAt'
		 */
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
				'label' => 'apellido materno',
				'required' => 'required',
				'attr' => array(
					'class' => 'form-lastname form-control'
				)
			))
			->add('nick', TextType::class, array(
				'label' => 'Nick ',
				'required' => 'required',
				'attr' => array(
					'class' => 'form-nick form-control nick-input'
				)
			))
			->add('age')
			->add('email', EmailType::class, array(
				'label' => 'Correo electronico',
				'required' => 'required',
				'attr' => array(
					'class' => 'form-name form-control'
				)
			))
			->add('telephone')
			->add('password', PasswordType::class, array(
				'label' => 'Contraseña',
				'required' => 'required',
				'attr' => array(
					'class' => 'form-password form-control'
				)
			))
			->add('termscondition')
			->add('datejob')
			->add('privacy')
			->add('anonimo')
			->add('Registrarse', SubmitType::class, array(
				"attr" => array(
					"class" => "form-submit btn btn-success"
				)
			))
		;
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'BackendBundle\Entity\User'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'backendbundle_user';
    }


}
