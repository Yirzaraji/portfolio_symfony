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
            ->add('title', TextareaType::class, array('label' => false, 'attr' => array('class' => '', 'style' => '', 'placeholder' => 'titre', 'value' => 'coucou', 'required'=>false)))
            ->add('technos', TextareaType::class, array('label' => false, 'attr' => array('class' => '', 'style' => '', 'placeholder' => 'Technos utilisées', 'value' => 'coucou', 'required'=>false)))
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
