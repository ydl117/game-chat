<?php

namespace App\Form;

use App\Entity\Jeux;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class AjoutJeuxType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name', TextType::class,
                [
                    'label'=>"Nom du jeux"
                ])
            ->add('Nintendo', ChoiceType::class, [
                'choices' => ['Oui' => '1', 'Non' => '0'],
            ])
            ->add('Playstation', ChoiceType::class, [
                'choices' => ['Oui' => '1', 'Non' => '0'],
            ])
            ->add('Xbox', ChoiceType::class, [
                'choices' => ['Oui' => '1', 'Non' => '0'],
            ])
            ->add('pc', ChoiceType::class, [
                'choices' => ['Oui' => '1', 'Non' => '0'],
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Jeux::class,
        ]);
    }
}
