<?php

namespace ChouettesBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class WhoamiType extends AbstractType
{
/**
 * @param FormBuilderInterface $builder
 * @param array $options
 */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder

            ->add('text', 'textarea', array('attr' => array('class' => 'tinymce')))
            ->add('image', ImageType::class)
        ;
    }

/**
 * @param OptionsResolver $resolver
 */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'ChouettesBundle\Entity\Whoami'
        ));
    }
}
