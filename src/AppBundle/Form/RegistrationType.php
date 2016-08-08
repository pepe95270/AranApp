<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;

class RegistrationType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('poste', 'Symfony\Component\Form\Extension\Core\Type\ChoiceType', array(
            'choices'  => array(
                'CDI' => 'CDI',
                'Evenementiel' => 'Evenementiel',
            ),
            'label'  => 'Poste recherché',
        ));
        $builder->add('name', null, array(
            'label'  => 'Nom de famille',
        ));
        $builder->add('nomjeunefille', null, array(
            'label'  => 'Nom de jeune fille',
        ));
        $builder->add('prenom', null, array(
            'label'  => 'Prénom',
        ));
        $builder->add('adresse', null, array(
            'label'  => 'Adresse',
        ));
        $builder->add('codepostal', null, array(
            'label'  => 'Code postal',
        ));
        $builder->add('ville', null, array(
            'label'  => 'Ville',
        ));
        $builder->add('telfixe', null, array(
            'label'  => 'Téléphone fixe',
        ));
        $builder->add('telport', null, array(
            'label'  => 'Téléphone portable',
        ));
        $builder->add('datenaissance', 'Symfony\Component\Form\Extension\Core\Type\BirthdayType', array(
            'label'  => 'Date de naissance',
        ));
        $builder->add('lieunaissance', null, array(
            'label'  => 'Lieu de naissance',
        ));
        $builder->add('secu', null, array(
            'label'  => 'Numéro de sécurité social',
        ));
        $builder->add('nationalite', null, array(
            'label'  => 'Nationalité',
        ));
        $builder->add('cartedesejour', null, array(
            'label'  => 'Numéro de carte de séjour',
        ));
        $builder->add('delivreepar', null, array(
            'label'  => 'Délivrée par',
        ));
        $builder->add('dateexpiration', 'Symfony\Component\Form\Extension\Core\Type\BirthdayType', array(
            'label'  => "Date d'expiration",
        ));
        $builder->add('situation', 'Symfony\Component\Form\Extension\Core\Type\ChoiceType', array(
            'choices'  => array(
                'Célibataire' => 'Célibataire',
                'Marié(e)' => 'Marié(e)',
                'Concubin(e)' => 'Concubin(e)',
            ),
            'label'  => 'Situation familiale',
        ));
        $builder->add('obligationemploi', null, array(
            'label'  => 'Cocher cette case si vous êtes bénéficiaire de l’obligation d’emploi selon l’article L. 5212-13 du Code du travail',
        ));
        $builder->add('tags', 'Symfony\Component\Form\Extension\Core\Type\CollectionType', array(
            'entry_type'   => TextType::class,
            'prototype' => true,
            'allow_add' => true,
            'allow_delete' => true,
            'label' => 'Langues parlées (+niveau entre parenthèse)'));
        $builder->add('niveauetude', null, array(
            'label'  => "Niveau d'étude",
        ));
        $builder->add('permis', null, array(
            'label'  => 'Permis',
        ));
        $builder->add('voiture', null, array(
            'label'  => 'Voiture',
        ));
        $builder->add('dateobtention', 'Symfony\Component\Form\Extension\Core\Type\BirthdayType', array(
            'label'  => "Date d'obtention",
        ));
        $builder->add('prefecture', null, array(
            'label'  => 'Préfecture',
        ));
        $builder->add('deuxroues', null, array(
            'label'  => 'Deux roues',
        ));
        $builder->add('roller', null, array(
            'label'  => 'Roller',
        ));
        $builder->add('taille', null, array(
            'label'  => 'Taille (cm)',
        ));
        $builder->add('taillejupe', null, array(
            'label'  => 'Taille jupe/pantalon',
        ));
        $builder->add('couleurcheveux', null, array(
            'label'  => 'Couleur de cheveux',
        ));
        $builder->add('couleuryeux', null, array(
            'label'  => 'Couleur des yeux',
        ));
        $builder->add('tourpoitrine', null, array(
            'label'  => 'Tour de poitrine',
        ));
        $builder->add('tailleveste', null, array(
            'label'  => 'Taille de veste',
        ));
        $builder->add('pointure', null, array(
            'label'  => 'Pointure',
        ));
        $builder->add('experiencehote', null, array(
            'label'  => 'Cocher la case si vous avez déjà eu une expérience d\'hôte(sse)',
        ));
        $builder->add('experiencehotedetail', null, array(
            'label'  => "Détailler votre expérience et cocher les cases si vous avez occupé l'un des postes suivants",
        ));
        $builder->add('bar', null, array(
            'label'  => 'Bar',
        ));
        $builder->add('animation', null, array(
            'label'  => 'Animation',
        ));
        $builder->add('micro', null, array(
            'label'  => 'Passage de micro',
        ));
        $builder->add('vente', null, array(
            'label'  => 'Vente',
        ));
        $builder->add('service', null, array(
            'label'  => 'Service assiette / plateau',
        ));
        $builder->add('distribution', null, array(
            'label'  => 'Distribution prospectus',
        ));
        $builder->add('traduction', null, array(
            'label'  => 'Traduction',
        ));
        $builder->add('saisie', null, array(
            'label'  => 'Saisie informatique',
        ));
        $builder->add('commentconnuagence', null, array(
            'label'  => 'Comment avez-vous connu notre agence ?',
        ));
        $builder->add('villehebergement', 'Symfony\Component\Form\Extension\Core\Type\CollectionType', array(
            'entry_type'   => TextType::class,
            'prototype' => true,
            'allow_add' => true,
            'allow_delete' => true,
            'label'  => 'Ville dans lesquelles vous pouvez être hébergée en France',
        ));
        $builder->add('personneaprevenir', null, array(
            'label'  => "Personne à prévenir en cas d'accident",
        ));
        $builder->add('adressetelaccident', null, array(
            'label'  => 'Adresse et téléphone',
        ));
        $builder->add('imageFile', 'Symfony\Component\Form\Extension\Core\Type\FileType', array(
            'label'  => 'Photo',
        ));
    }

    public function getParent()
    {
        return 'FOS\UserBundle\Form\Type\RegistrationFormType';

    }

    public function getBlockPrefix()
    {
        return 'app_user_registration';
    }

    // For Symfony 2.x
    public function getName()
    {
        return $this->getBlockPrefix();
    }
}