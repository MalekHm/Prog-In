<?php

namespace App\Form;

use App\Entity\Place;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\HttpFoundation\File\File;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;



class PlaceAddType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('titlePlace')
            ->add('DescriptionPlace')
            ->add('media',FileType::class,[
                'label'=> false,
                'multiple'=> true,
                'mapped'=>false,
                'required'=>false
            ])
            ->add('location')
            ->add('category')
            ->add('picturePlace',FileType::class
            )

            ->add('showPlace')



        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Place::class,
        ]);
    }
}
