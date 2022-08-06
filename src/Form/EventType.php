<?php

namespace App\Form;

use App\Entity\Events;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\TimeType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\UrlType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;



use Symfony\Component\Form\FormBuilderInterface;


class EventType extends AbstractType
{
  public function buildForm(FormBuilderInterface $builder, array $options): void
  {
      $builder
        ->add('name', TextType::class, [
            'label' => 'Name of Event',
              'attr' => ['class' => 'form-control w-75', 'style' => 'margin-bottom:2rem;', 'placeholder'=>'Name of Event']
        ])
        ->add('date', DateType::class, [
            'label' => 'Date of Event',
              'attr' => ['class' => 'form-control w-75', 'style' => 'margin-bottom:2rem;'],
              'widget' => 'single_text',
              'format' => 'yyyy-MM-dd'
        ])
        ->add('startTime', DateType::class, [
              'label' => 'Start Time',
              'attr' => ['class' => 'form-control w-75', 'style' => 'margin-bottom:2rem;'],
              'widget' => 'single_text',
              'format' => 'yyyy-MM-dd'
        ])
        ->add('email', EmailType::class, [
            'label' => 'Email Address',
            'attr' => ['class' => 'form-control w-75', 'style' => 'margin-bottom:2rem;', 'placeholder'=>'Email Address']
        ])
        ->add('capacity', NumberType::class, [
            'label' => 'Number of People',
            'attr' => ['class' => 'form-control w-75', 'style' => 'margin-bottom:2rem;', 'placeholder'=>'Number of People']
        ])
        ->add('phoneNumber', NumberType::class, [
            'label' => 'Phone Number',
            'attr' => ['class' => 'form-control w-75', 'style' => 'margin-bottom:2rem;', 'placeholder'=>'Phone Number']
        ])
        ->add('city', ChoiceType::class, [
            'choices' => ['Vienna' => 'Vienna', 'Upper Austria' => 'Upper Austria', 'Lower Austria' => 'Lower Austria', 'Graz' => 'Graz'],
            'attr' => ['class' => 'form-control w-75', 'style' => 'margin-bottom:2rem']
        ])
        ->add('streetName', TextType::class, [
            'label' => 'Street Name',
            'attr' => ['class' => 'form-control w-75', 'style' => 'margin-bottom:2rem;', 'placeholder'=>'Street Name']
        ])
        ->add('houseNumber', NumberType::class, [
            'label' => 'House Number',
            'attr' => ['class' => 'form-control w-75', 'style' => 'margin-bottom:2rem;', 'placeholder'=>'House Number']
        ])
        ->add('zipCode', NumberType::class, [
            'label' => 'Zip Code',
            'attr' => ['class' => 'form-control w-75', 'style' => 'margin-bottom:2rem;', 'placeholder'=>'Zip Code']
        ])
        ->add('eventUrl', UrlType::class, [
            'label' => 'Event Website',
            'attr' => ['class' => 'form-control w-75', 'style' => 'margin-bottom:2rem;', 'placeholder'=>'Event Website']
        ])
        ->add('eventType', ChoiceType::class, [
            'choices' => ['Music' => 'Music', 'Sport' => 'Sport', 'Movie' => 'Movie', 'Theater' => 'Theater'],
            'attr' => ['class' => 'form-control w-75', 'style' => 'margin-bottom:2rem']
        ])
        ->add('picture', TextType::class, [
            'label' => 'Picture',
            'attr' => ['class' => 'form-control w-75', 'style' => 'margin-bottom:2rem;', 'placeholder'=>'Picture']
        ])
        ->add('description', TextAreaType::class, [
            'label' => 'Desription',
            'attr' => ['class' => 'form-control w-75','rows'=>'4', 'style' => 'margin-bottom:2rem;', 'placeholder'=>'Event Description']

        ])
          ->add('save', SubmitType::class, [
              'attr' => ['class' => 'btn btn-success w-25', 'style' => 'margin-bottom:2rem; margin-left:20rem;']
          ]);
  }

  public function configureOptions(OptionsResolver $resolver): void
  {
      $resolver->setDefaults([
          'data_class' => Events::class,
      ]);
  }
}