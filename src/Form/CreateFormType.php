<?php

namespace App\Form;

use App\Entity\Post;
use App\Form\TagFormType;
use App\Form\ImageFormType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\HttpFoundation\File\File;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;

class CreateFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
        ->add('title', 
            TextType::class, 
            array('label' => false, 'attr' => 
            array('class' => '', 'style' => '', 'placeholder' => 'Titre du projet')
            ))

        ->add('technos', 
            TextareaType::class, 
            array('label' => false, 'attr' => 
            array('class' => '', 'style' => '', 'placeholder' => 'Technos utilisées', 'value' => 'coucou')
            ))
        
        ->add('projectDescription', 
            TextareaType::class, 
            array('label' => false, 'attr' => 
            array('class' => '', 'style' => '', 'placeholder' => 'Description', 'value' => 'coucou')
            ))

        ->add('projectImage', 
            TextType::class, 
            [
                'label' => false, 'attr' => 
                [
                    'class' => '', 'style' => '', 'placeholder' => 'Image projet'
                ]
            ])

        ->add('categorie', 
            TextType::class, 
            array('label' => false, 'attr' => 
            array('class' => '', 'placeholder' => 'Categorie')
            ))

        ->add('lien', 
            TextType::class, 
            array('label' => false, 'required' => false, 'attr' => 
            array('class' => '', 'placeholder' => 'Lien')
            ))
        
        ->add('git', 
            TextType::class, 
            array('label' => false, 'required' => false, 'attr' => 
                array('class' => 'e', 'placeholder' => 'Git Link')
                )
            )
        
        ->add(
            'images', 
            CollectionType::class,
            [
                'entry_type' => ImageFormType::class,
                'allow_add' => true,
                'allow_delete' => true
            ]
        )

        ->add(
            'tags', 
            CollectionType::class,
            [
                'entry_type' => TagFormType::class,
                'allow_add' => true,
                'allow_delete' => true
            ]
        )
        
        ->add('Save', 
            SubmitType::class, 
            array('attr' => 
            array('class' => 'btn btn-danger', 'style' => 'color:white; font-weight:bold')
            ))
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Post::class,
        ]);
    }

    
}