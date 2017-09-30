<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

class CompanyType extends AbstractType {

	/**
	 * {@inheritdoc}
	 */
	public function buildForm(FormBuilderInterface $builder, array $options) {
		$builder

				//campo para imagen del usuario
				->add('logo', FileType::class, array(
					'label' => 'Foto de perfil de la empresa',
					'required' => false,
					'data_class' => null,
					'attr' => array(
						'class' => ''
					)
				))
				->add('website', TextType::class, array(
					'label' => 'Sitio Web de la empresa',
					'required' => false,
					'data_class' => null,
					'attr' => array(
						'class' => 'form-control'
					)
				))
				->add('tradename', TextType::class, array(
					'label' => 'Nombre comercial',
					'required' => false,
					'attr' => array(
						'class' => 'form-tradename form-control'
					)
				))
				/* ->add('businessname', TextType::class, array(
				  'label' => 'Nombre del negocio',
				  'required' => 'required',
				  'attr' => array(
				  'class' => 'form-businessname form-control'
				  )
				  )) */
				->add('rfc', TextType::class, array(
					'label' => 'RFC',
					'required' => false,
					'attr' => array(
						'class' => 'form-rfc form-control'
					)
				))
				->add('description', TextareaType::class, array(
					'label' => 'Descripción de la empresa',
					'required' => false,
					'attr' => array(
						'class' => 'form-description form-control'
					)
				))
				->add('businesssector', ChoiceType::class, array(
					'label' => 'Sector empresarial',
					'choices' => array(
						'Agronegocios' => 'Agronegocios',
						'Automotriz' => 'Automotriz',
						'Comercio' => 'Comercio',
						'Comunicaciones' => 'Comunicaciones',
						'Construcción' => 'Construcción',
						'Educación' => 'Educación',
						'Energia' => 'Energia',
						'Petroquimico' => 'Petroquimico',
						'Minero' => 'Minero',
						'Entretenimiento' => 'Entretenimiento',
						'Farmaceutico' => 'Farmaceutico',
						'Salud' => 'Salud',
						'Gubernamental' => 'Gubernamental',
						'Hoteleles y Restaurantes' => 'Hoteleles y Restaurantes',
						'Logistica y Transporte' => 'Logistica y Transporte',
						'Mercado Inmobiliario' => 'Mercado Inmobiliario',
						'Mueblera, Madera' => 'Mueblera, Madera',
						'ONG´S' => 'ONG´S',
						'Servicios Financieros' => 'Servicios Financieros',
						'Servicios Profesionales, Empresariales' => 'Servicios Profesionales, Empresariales',
						'Tabacalera ' => 'Tabacalera ',
						'Tecnología, Internet' => 'Tecnología, Internet',
						'Otros servicios' => 'Otros servicios',
						'No conozco el sector' => 'No conozco el sector',
					),
					'required' => 'required',
					'attr' => array(
						'class' => 'form-businesssector form-control'
					)
				))
				->add('contacname', TextType::class, array(
					'label' => 'Nombre',
					'required' => false,
					'attr' => array(
						'class' => 'form-contacname form-control'
					)
				))
				->add('position', TextType::class, array(
					'label' => 'Cargo',
					'required' => false,
					'attr' => array(
						'class' => 'form-position form-control'
					)
				))
				->add('telephoneext', TextType::class, array(
					'label' => 'No° de Extensión',
					'required' => false,
					'attr' => array(
						'class' => 'form-telefono form-control'
					)
				))
				->add('businessemail', TextType::class, array(
					'label' => 'Correo electrónico',
					'required' => false,
					'attr' => array(
						'class' => 'form-businessemail form-control'
					)
				))
				->add('Registrar', SubmitType::class, array(
					"attr" => array(
						"class" => "btn btn-success btn-block btn-lg"
					)
				))
		;
	}

	/**
	 * {@inheritdoc}
	 */
	public function configureOptions(OptionsResolver $resolver) {
		$resolver->setDefaults(array(
			'data_class' => 'BackendBundle\Entity\Company'
		));
	}

	/**
	 * {@inheritdoc}
	 */
	public function getBlockPrefix() {
		return 'backendbundle_company';
	}

}
