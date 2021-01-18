<?php

namespace App\Form;

use App\Entity\Post;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;

class EditFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('title', TextType::class, array('label' => false, 'attr' => array('class' => '', 'style' => '', 'placeholder' => 'Titre du projet', 'required'=>false)))
            ->add('technos', TextareaType::class, array('label' => false, 'attr' => array('class' => '', 'style' => '', 'placeholder' => 'Technos utilisées', 'value' => 'coucou', 'required'=>false)))
            ->add('projectImage', TextType::class, array('label' => false, 'attr' => array('class' => '', 'style' => '', 'placeholder' => 'Image Link', 'required'=>false)))
            ->add('categorie', TextType::class, array('label' => false, 'attr' => array('class' => '', 'placeholder' => 'Categorie', 'required'=>false)))
            ->add('lien', TextType::class, array('label' => false, 'attr' => array('class' => '', 'placeholder' => 'Lien', 'required'=>false)))
            ->add('git', TextType::class, array('label' => false, 'attr' => array('class' => 'e', 'placeholder' => 'Git Link', 'required'=>false)))
            ->add('projectDescription', TextareaType::class, array('label' => false, 'attr' => array('class' => '', 'placeholder' => 'Description', 'required'=>false)))
            ->add('premierParagraphe', TextareaType::class, ['required'=>false])
            ->add('secondParagraphe', TextareaType::class, ['required'=>false])
            ->add('premiereImage', TextType::class, ['required'=>false])
            ->add('secondeImage', TextType::class, ['required'=>false])
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
