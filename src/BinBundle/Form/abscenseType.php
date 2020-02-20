<?php

namespace BinBundle\Form;

use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class abscenseType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('pupl',EntityType::class,array('class'=>'BinBundle:abscense',
            'choice_label'=>'pupl',
            'multiple'=>false,
            'expanded'=> false))
            ->add('groupe',EntityType::class,array('class'=>'BinBundle:groupee',
                'choice_label'=>'name',
                'multiple'=>false,
                'expanded'=> false))
            ->add('nbr')
            ->add('date')
            ->add('subject',EntityType::class,array('class'=>'BinBundle:subjectt',
        'choice_label'=>'name',
        'multiple'=>false,
        'expanded'=> false))
            ->add('add',SubmitType::class);
    }/**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'BinBundle\Entity\abscense'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'binbundle_abscense';
    }


}
