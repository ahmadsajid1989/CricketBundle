<?php

namespace Bbd\BongoCricketBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

use Bbd\BongoCricketBundle\Entity\Cricket;

class CricketType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('score1', 'text', array('required' => true))
            ->add('duck_lewis1', 'checkbox', array('label' => 'D/L', 'required' => false))
            ->add('dl_target1', 'text')

            ->add('wickets1', 'text', array('required' => false))
            ->add('all_out1', 'checkbox')

            ->add('overs1', 'text', array('required' => true))
            ->add('balls1', 'text', array('required' => true))

            ->add('score2', 'text', array('required' => true))
            ->add('duck_lewis2', 'checkbox', array('label' => 'D/L', 'required' => false))
            ->add('dl_target2', 'text')

            ->add('wickets2', 'text', array('required' => false))
            ->add('all_out2', 'checkbox')

            ->add('overs2', 'text', array('required' => true))
            ->add('balls2', 'text', array('required' => true))
        ;
    }
    
    /**
     * @param OptionsResolver $resolver
     */
    public function configDefaults(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Bbd\BongoCricketBundle\Entity\Team'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'bbd_bongocricketbundle_cricket';
    }
}
