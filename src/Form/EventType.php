<?php

namespace App\Form;

use App\Entity\Category;
use App\Entity\Event;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Validator\Context\ExecutionContextInterface;

class EventType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('titre')
            ->add('description')
            ->add('start_date', DateType::class, [
                'attr' => [
                    'class' => 'form-control datepicker',
                    'placeholder'=>'dd/mm/yyyy'

                ],
                'widget' => 'single_text',
                'required' => true
            ])
            ->add('end_date', DateType::class, [
                'attr' => [
                    'class' => 'form-control datepicker',
                    'placeholder'=>'dd/mm/yyyy'

                ],
                'widget' => 'single_text',
                'required' => true
            ])
            ->add('nb_persons')
            ->add('price_event')
            ->add('files',FileType::class,[
                'mapped' => false,
                'required' => false,
                'multiple'=>true,

                ])
            ->add('category',EntityType::class,[
                'label'=>false,
                'multiple'=>false,
                'expanded'=>false,
                'class'=>Category::class


            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Event::class,
        ]);
    }
}
