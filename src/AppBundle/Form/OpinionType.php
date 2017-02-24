<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class OpinionType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
		
        $builder
			
			// textarea para la biografia del usuario
			->add('generalcomment', TextareaType::class, array(
				'label' => 'Opinion (ejemplo)',
				'required' => 'required',
				'attr' => array(
					'class' => 'form-control '
				)
			))
				
			//Estos dos campos no sirven para las opiniones pero para comentarios si, falta adaptarlo
				
			/*->add('image', FileType::class, array(
                'label' => 'Foto',
                'required' => false,
                'data_class' => null,
                'attr' => array(
                    'class' => 'form-control'
                )
            ))
				
			->add('document', FileType::class, array(
                'label' => 'Subir archivo',
                'required' => false,
                'data_class' => null,
                'attr' => array(
                    'class' => 'form-control'
                )
            ))*/
				
			
				
			->add('Publicar', SubmitType::class, array(
				"attr" => array(
					"class" => "btn btn-success"
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
            'data_class' => 'BackendBundle\Entity\Opinion'
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
