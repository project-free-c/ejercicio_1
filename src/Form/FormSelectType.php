<?php

namespace App\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

use Symfony\Component\Form\Extension\Core\Type\CheckboxType;

class FormSelectType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder            
                ->add('rut', CheckboxType::class, ['required' => false])
                ->add('name', CheckboxType::class, ['required' => false])
                ->add('lastName', CheckboxType::class, ['required' => false])
                ->add('address', CheckboxType::class, ['required' => false])
                ->add('phone', CheckboxType::class, ['required' => false])
                ->add('email', CheckboxType::class, ['required' => false]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([]);
    }
}
