<?php

namespace App\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;

class PasswordUpdateType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('oldPassword', 
                PasswordType::class, 
                    array('label' => false, 'attr' => 
                    array('placeholder' => 'Mot de passe actuel')
                    )
                )

            ->add('newPassword', 
            PasswordType::class, 
                array('label' => false, 'attr' => 
                array('placeholder' => 'New MDP')
                )
            )

            ->add('confirmPassword', 
            PasswordType::class, 
                array('label' => false, 'attr' => 
                array('placeholder' => 'Confirm MDP')
                )
            )
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            // Configure your form options here
        ]);
    }
}
