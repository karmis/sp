<?php

namespace AppBundle\Form\Shop;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ShopType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('caption')
            ->add('address')
            ->add('openTime')
            ->add('closeTime')
            ->add('lunchTimeStart')
            ->add('lunchTimeEnd')
            ->add('havePersonalPriceList')
            ->add('published')
            ->add('deleted')
            ->add('personalPriceList')
            ->add('organization')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Shop\Shop'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'appbundle_shop_shop';
    }
}
