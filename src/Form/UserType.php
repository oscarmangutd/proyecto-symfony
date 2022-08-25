<?php

namespace App\Form;

use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\IsTrue;
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;

class UserType extends AbstractType{
    public function buildForm(FormBuilderInterface $builder, array $options){
        $builder->add('email', EmailType::class, array(
                            'label' => 'Correo Electronico'
                        ))

                    ->add('password', PasswordType::class, array(
                                'label' => 'Contraseña'
                            ))
                        
                            ->add('nombre', textType::class, array(
                                'label' => 'Nombre'
                            ))
                        

                    ->add('submit', SubmitType::class, array(
                                'label' => 'Registrarse'
                            ));



    }
}