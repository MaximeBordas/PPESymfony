<?php

namespace FacturationBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\MoneyType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;


class FactureType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('dateFacture', DateTimeType::class, [
                'widget' => 'single_text',
                'attr' => ['class' => 'js-datepicker'],
                'html5' => false,
            ])
            ->add('numTauxTva')
            ->add('montantHT')
            ->add('montantTTC')
            ->add('montantAccompteTTC')
            ->add('numCheque')
            ->add('dateReglement', DateTimeType::class, [
                'widget' => 'single_text',
                'attr' => ['class' => 'js-datepicker'],
                'html5' => false,
            ])
            ->add('typeFacture')
            ->add('montantRegle')
            ->add('libFacture')
            ->add('commentaire')
            ->add('montantRemise')
            ->add('txRemise')
            ->add('dateDevis', DateTimeType::class, [
                'widget' => 'single_text',
                'attr' => ['class' => 'js-datepicker'],
                'html5' => false,
            ])
            ->add('banque')
            ->add('modeReglement')
            ->add('Tva')
            ->add('facturePrestation')
            ->add('client')
            ->add('factureRegler')
            ->add('unDevis');
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'FacturationBundle\Entity\Facture'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'facturationbundle_facture';
    }


}
