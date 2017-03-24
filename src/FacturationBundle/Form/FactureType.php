<?php

namespace FacturationBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;


class FactureType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('dateFacture')
            ->add('numTauxTva')
            ->add('montantHT')
            ->add('montantTTC')
            ->add('montantAccompteTTC')
            ->add('codeModeReglement')
            ->add('numCheque')
            ->add('dateReglement')
            ->add('typeFacture'
            )->add('montantRegle')
            ->add('libFacture')
            ->add('commentaire')
            ->add('montantRemise')
            ->add('txRemise')
            ->add('dateDevis')
            ->add('banque')
            ->add('modeReglement')
            ->add('Tva')
            ->add('facturePrestation')
            ->add('client');
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
