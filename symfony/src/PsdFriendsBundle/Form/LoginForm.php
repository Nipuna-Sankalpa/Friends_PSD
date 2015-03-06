<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace PsdFriendsBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

/**
 * Description of LoginForm
 *
 * @author Yellow Flash
 */
class LoginForm extends AbstractType {

    public function buildForm(FormBuilderInterface $builder, array $option) {
        $builder->add('email', 'text', array(
                    'label' => 'E-mail',
                    'placeholder' => 'Enter email'
                ))
                ->add('password', 'password', array(
                    'label' => 'Password',
                    'placeholder' => 'Enter password'
                ))
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver) {
        $resolver->setDefaults(array('data_class' => 'PsdFreindsBundle\Entity\login'));
    }

    public function getName() {
        return 'PsdFriendsLoginForm';
    }

}
