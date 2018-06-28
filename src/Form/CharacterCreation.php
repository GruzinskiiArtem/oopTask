<?php

namespace App\Form;

use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;

class CharacterCreation extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name', TextType::class)
            ->add('hp', IntegerType::class)
            ->add('attack', IntegerType::class)
            ->add('chanceOfCriticalDamage', IntegerType::class)
            ->add('chanceOfDamageBias', IntegerType::class)
            ->add('restoring', IntegerType::class)
            ->add('save', SubmitType::class)
        ;
    }
}