<?php

namespace App\Form;

use App\Entity\Events;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;

use Symfony\Component\Form\FormBuilderInterface;

class EventsType extends AbstractType
{
  public function buildForm(FormBuilderInterface $builder, array $options): void
  {
      $builder
          ->add('name', TextType::class, [
              'attr' => ['class' => 'form-control mb-1', "placeholder" => "Please type the event name", "id"=>"text"]
          ])
          # <input type="text" class="form-control mb-1" placeholder="Please type the todo name" id="text">
          ->add('date', DateTimeType::class, [
            'attr' => ['style' => 'margin-bottom:15px']
          ])
          ->add('startTime', DateTimeType::class, [
            'attr' => ['style' => 'margin-bottom:15px']
          ])
          ->add('capacity', NumberType::class, [
              'attr' => ['class' => 'form-control', 'style' => 'margin-bottom:15px']
          ])
          ->add('email', EmailType::class, [
              'attr' => ['class' => 'form-control', 'style' => 'margin-bottom:15px']
          ])
          ->add('phoneNumber', NumberType::class, [
            'attr' => ['class' => 'form-control', 'style' => 'margin-bottom:15px']
          ])
          ->add('city', TextType::class, [
            'attr' => ['class' => 'form-control', 'style' => 'margin-bottom:15px']
          ])
          ->add('streetName', TextType::class, [
            'attr' => ['class' => 'form-control', 'style' => 'margin-bottom:15px']
          ])
          ->add('houseNumber', NumberType::class, [
            'attr' => ['class' => 'form-control', 'style' => 'margin-bottom:15px']
          ])
          ->add('zipCode', NumberType::class, [
            'attr' => ['class' => 'form-control', 'style' => 'margin-bottom:15px']
          ])
          ->add('eventUrl', UrlType::class, [
            'attr' => ['class' => 'form-control', 'style' => 'margin-bottom:15px']
          ])
          ->add('eventType', TextType::class, [
            'attr' => ['class' => 'form-control', 'style' => 'margin-bottom:15px']
          ])
          ->add('description', TextAreaType::class, [
              'attr' => ['class' => 'form-control', 'style' => 'margin-bottom:15px']
          ])
          ->add('save', SubmitType::class, [
              'label' => 'Create todo',
              'attr' => ['class' => 'btn btn-primary', 'style' => 'margin-bottom:15px']
          ]);
  }

  public function configureOptions(OptionsResolver $resolver): void
  {
      $resolver->setDefaults([
          'data_class' => Events::class,
      ]);
  }
}
