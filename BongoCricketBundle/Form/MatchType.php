<?php

namespace Bbd\BongoCricketBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class MatchType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('home_team','entity', array(
                'class'     => 'BbdBongoCricketBundle:Team',
                'expanded'  => false,
                'multiple'  => false,
                'label'     => 'Home Team',

            ))
            ->add('away_team','entity', array(
                'class'     => 'BbdBongoCricketBundle:Team',
                'expanded'  => false,
                'multiple'  => false,
                'label'     => 'Away Team',

            ))
            ->add('match_number')
            ->add('match_type','choice', array( 'label'=>'Match Type',  'choices' => array(
                'Qualifier'     => 'Qualifier',
                'Super 10s'     => 'Super 10s',
                'Quarter Final' => 'Quarter Final',
                'Semi Final'    => 'Semi Final',
                'Final'         => 'Final'
            ),
                ))
            ->add('match_date','datetime', array(
                'label'=> 'Publication Date',
                'required' => false,
                'years' => range(date('Y'), date('Y') + 2),
                'placeholder' => array(
                    'year' => 'Year', 'month' => 'Month', 'day' => 'Day',
                    'hour' => 'Hour', 'minute' => 'Minute', 'second' => 'Second',)
            ))

        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Bbd\BongoCricketBundle\Entity\Match'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'bbd_bongocricketbundle_match';
    }
}
