<?php

namespace App\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;

class ContactType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
        ->add('name', TextType::class, array('label' => false, 'attr' => array('class' => 'contactForm', 'style' => '', 'placeholder' => 'Name')))
        ->add('email', TextType::class, array('label' => false, 'attr' => array('class' => 'contactForm', 'style' => '', 'placeholder' => 'Email')))
        ->add('subject', TextType::class, array('label' => false, 'attr' => array('class' => 'contactForm', 'style' => '', 'placeholder' => 'Subject')))
        ->add('message', TextareaType::class, array('label' => false, 'attr' => array('class' => 'contactFormMessage', 'placeholder' => 'Your message')))
        ->add('Save', SubmitType::class, array('attr' => array('class' => 'btn btn-danger contactForm', 'style' => 'color:white; font-weight:bold')))
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            // Configure your form options here
        ]);
    }
}
