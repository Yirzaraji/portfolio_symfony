<?php

namespace App\Form;

use App\Entity\Post;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;

class CreateFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
        ->add('title', TextType::class, array('label' => false, 'attr' => array('class' => '', 'style' => '', 'placeholder' => 'Titre du projet')))
        ->add('technos', TextareaType::class, array('label' => false, 'attr' => array('class' => '', 'style' => '', 'placeholder' => 'Technos utilisées')))
        ->add('projectImage', TextType::class, array('label' => false, 'attr' => array('class' => '', 'style' => '', 'placeholder' => 'Image Link')))
        ->add('categorie', TextType::class, array('label' => false, 'attr' => array('class' => '', 'placeholder' => 'Categorie')))
        ->add('lien', TextType::class, array('label' => false, 'attr' => array('class' => '', 'placeholder' => 'Lien')))
        ->add('git', TextType::class, array('label' => false, 'attr' => array('class' => 'e', 'placeholder' => 'Git Link')))
        ->add('Save', SubmitType::class, array('attr' => array('class' => 'btn btn-danger', 'style' => 'color:white; font-weight:bold')))
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Post::class,
        ]);
    }
}
