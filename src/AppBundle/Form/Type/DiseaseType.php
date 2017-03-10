<?php
/**
 * Created by PhpStorm.
 * User: marcel
 * Date: 10/03/2017
 * Time: 21:58
 */

namespace AppBundle\Form\Type;

use AppBundle\Entity\Disease;
use AppBundle\Entity\Task;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;

class DiseaseType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('name')
        ->add('othernames')
        ->add('patogenesis')
        ->add('p_desc')
        ->add('epi')
        ->add('diagno')
        ->add('diff')
        ->add('save', SubmitType::class);

        $builder->add('tags', CollectionType::class, array(
            'entry_type' => TagType::class
        ));
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => Disease::class,
        ));
    }
}