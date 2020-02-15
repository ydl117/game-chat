<?php

namespace App\Form;

use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\HttpFoundation\File\File;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\Email;
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\Validator\Constraints\NotBlank;

class RegistrationFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('email', EmailType::class, [
                "label" => "Email",
                "required" => true,
                "trim" => true,
                "constraints" => [
                    new NotBlank([
                        "message"=>"Le champ Email ne peut pas être vide !"
                    ]),
                    new Length([
                        "max"=>"180",
                        "maxMessage"=>"L'email ne peut faire plus de 180 caractères !"
                    ]),
                    new Email([
                        "message"=>"Email non valide !"
                    ])
                ]])
            ->add('password', PasswordType::class)
            ->add("submit", SubmitType::class,[
                "label" => "Enregistrer"
            ])
            ->add('pseudo', TextType::class,[
                "label"=>"Pseudo",
                "required"=>true,
            ])
            ->add('level', ChoiceType::class, [
                    'choices' => ['Casual' => 'casual', 'Regular' => 'regular', 'Harcore'=> 'hardcore'],
            ])

            ->add('sexe', ChoiceType::class, [
                'choices' => ['Homme' => 'homme', 'Femme' => 'femme', 'Autres'=> 'autres'],
            ])

            ->add("image", FileType::class,[
                'label' => 'Avatar',

                // unmapped means that this field is not associated to any entity property
                'mapped' => false,

                // make it optional so you don't have to re-upload the PDF file
                // every time you edit the Product details
                'required' => false,

                // unmapped fields can't define their validation using annotations
                // in the associated entity, so you can use the PHP constraint classes


            ])

            ->add('birthdate', DateType::class, [
                'widget' => 'single_text',
                'label' => 'Date de naissance',
                // this is actually the default format for single_text
                'format' => 'yyyy-MM-dd',
            ])

        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => User::class,
        ]);
    }
}
