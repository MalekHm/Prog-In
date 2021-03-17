<?php

namespace App\Form;

use App\Entity\Event;
use App\Repository\EventRepository;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\CountryType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\UrlType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\File;
use Symfony\Component\Validator\Context\ExecutionContextInterface;
use Symfony\Component\Validator\Constraints;

class PublicityType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('titlePub', TextType::class, [
                'attr' => [
                    'class' => 'form-control',
                    'placeholder'=>'Title of publicity'

                ],
                'required' => true,

            ])
            ->add('descriptionPub', TextareaType::class, [
                'attr' => [
                    'class' => 'form-control',
                    'placeholder'=>'Description of publicity'

                ],
                'required' => true,

            ])
            ->add('link', UrlType::class, [
                'attr' => [
                    'class' => 'form-control',
                    'placeholder'=>'Link of publicity owner'

                ],
                'required' => true,

            ])
            ->add('startDatePub', DateType::class, [
                'attr' => [
                    'class' => 'form-control',
                    'placeholder'=>'dd/mm/yyyy'

                ],
                'constraints' => [
                    new Constraints\NotBlank(),
                    new Constraints\DateTime(),
                    new Constraints\Callback(function($object, ExecutionContextInterface $context) {
                        $start = $object;

                        if ($start->format('U') - (new \DateTime())->format('U')+86400 <= 0) {
                            $context
                                ->buildViolation('Start date must be after today date')
                                ->addViolation();
                        }

                    }),
                ],
                'widget' => 'single_text',
                'required' => true
            ])
            ->add('endDatePub', DateType::class, [
                'attr' => [
                    'class' => 'form-control datepicker',
                    'placeholder'=>'dd/mm/yyyy'

                ],
                'constraints' => [
                    new Constraints\NotBlank(),
                    new Constraints\DateTime(),
                    new Constraints\Callback(function($object, ExecutionContextInterface $context) {
                        $start = $context->getRoot()->getData()->getStartDatePub();
                        $stop = $object;

                        if (is_a($start, \DateTime::class) && is_a($stop, \DateTime::class)) {
                            if ($stop->format('U') - $start->format('U') < 0) {
                                $context
                                    ->buildViolation('End date must be after start date')
                                    ->addViolation();
                            }
                        }
                    }),
                ],
                'widget' => 'single_text',
                'required' => true

            ])
            ->add('picturePub', FileType::class, [
                'attr' => [
                    'class' => 'form-control',
                ],
                'mapped' => false,
                'required' => true,
                'constraints' => [
                    new File([
                        'maxSize' => '5M',
                        'mimeTypes' => [
                            'image/png',
                            'image/jpeg',
                        ],
                        'mimeTypesMessage' => 'Please upload a valid JPEG or PNG image',
                        'maxSizeMessage' => 'The file is too large. Allowed maximum size is 5 MiB.',
                        'uploadIniSizeErrorMessage' => 'The file is too large. Allowed maximum size is 5 MiB.',
                        'uploadFormSizeErrorMessage' => 'The file is too large. Allowed maximum size is 5 MiB.',
                    ])
                ],
            ])
            ->add('position', ChoiceType::class, [
                'attr' => [
                    'class' => 'form-control',
                    'placeholder'=>'Description of publicity'

                ],
                'choices'  => [
                    'TOP' => 'TOP',
                    'BOTTOM' => 'BOTTOM',
                    'NAN'=>'NAN'
                ],
            ])

        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
        ]);
    }
}
