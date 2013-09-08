<?php

namespace DF\MatchBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Doctrine\ORM\EntityRepository;

class FeuilleMatchType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
    	$joueursDom = function (EntityRepository $er) use ($options) {
    		return $er->createQueryBuilder('j')
	    		->join('DF\JoueurBundle\Entity\JoueurClub', 'jc')
	    		->where('jc.joueur = j.id')
	    		->andWhere('jc.club = :club')
	    		->setParameter('club' , $options['match']->getEquipeDom());
    	};
    	
    	$joueursExt = function (EntityRepository $er) use ($options) {
    		return $er->createQueryBuilder('j')
	    		->join('DF\JoueurBundle\Entity\JoueurClub', 'jc')
	    		->where('jc.joueur = j.id')
	    		->andWhere('jc.club = :club')
	    		->setParameter('club' , $options['match']->getEquipeExt());
    	};
    	
        $builder
            ->add('joueur1Home', 'entity', array(
            	'class' => 'DFJoueurBundle:Joueur', 
            	'property' => 'nom', 
            	'multiple' => false, 
            	'query_builder' => $joueursDom
             ))
            ->add('joueur2Home', 'entity', array(
            	'class' => 'DFJoueurBundle:Joueur', 
            	'property' => 'nom', 
            	'multiple' => false, 
            	'query_builder' => $joueursDom
             ))
            ->add('joueur3Home', 'entity', array(
            	'class' => 'DFJoueurBundle:Joueur', 
            	'property' => 'nom', 
            	'multiple' => false, 
            	'query_builder' => $joueursDom
             ))
            ->add('joueur4Home', 'entity', array(
            	'class' => 'DFJoueurBundle:Joueur', 
            	'property' => 'nom', 
            	'multiple' => false, 
            	'query_builder' => $joueursDom
             ))
            ->add('joueur5Home', 'entity', array(
            	'class' => 'DFJoueurBundle:Joueur', 
            	'property' => 'nom', 
            	'multiple' => false, 
            	'query_builder' => $joueursDom
             ))
            ->add('joueur6Home', 'entity', array(
            	'class' => 'DFJoueurBundle:Joueur', 
            	'property' => 'nom', 
            	'multiple' => false, 
            	'query_builder' => $joueursDom
             ))
            ->add('joueur7Home', 'entity', array(
            	'class' => 'DFJoueurBundle:Joueur', 
            	'property' => 'nom', 
            	'multiple' => false, 
            	'query_builder' => $joueursDom
             ))
            ->add('joueur8Home', 'entity', array(
            	'class' => 'DFJoueurBundle:Joueur', 
            	'property' => 'nom', 
            	'multiple' => false, 
            	'query_builder' => $joueursDom
             ))
            ->add('joueur9Home', 'entity', array(
            	'class' => 'DFJoueurBundle:Joueur', 
            	'property' => 'nom', 
            	'multiple' => false, 
            	'query_builder' => $joueursDom
             ))
            ->add('joueur10Home', 'entity', array(
            	'class' => 'DFJoueurBundle:Joueur', 
            	'property' => 'nom', 
            	'multiple' => false, 
            	'query_builder' => $joueursDom
             ))
            ->add('joueur11Home', 'entity', array(
            	'class' => 'DFJoueurBundle:Joueur', 
            	'property' => 'nom', 
            	'multiple' => false, 
            	'query_builder' => $joueursDom
             ))
            ->add('joueur1Away', 'entity', array(
            	'class' => 'DFJoueurBundle:Joueur', 
            	'property' => 'nom', 
            	'multiple' => false, 
            	'query_builder' => $joueursExt
             ))
             ->add('joueur2Away', 'entity', array(
             	'class' => 'DFJoueurBundle:Joueur',
             	'property' => 'nom',
             	'multiple' => false,
             	'query_builder' => $joueursExt
             ))
             ->add('joueur3Away', 'entity', array(
             	'class' => 'DFJoueurBundle:Joueur',
             	'property' => 'nom',
             	'multiple' => false,
             	'query_builder' => $joueursExt
             ))
             ->add('joueur4Away', 'entity', array(
             	'class' => 'DFJoueurBundle:Joueur',
             	'property' => 'nom',
             	'multiple' => false,
             	'query_builder' => $joueursExt
             ))
             ->add('joueur5Away', 'entity', array(
             	'class' => 'DFJoueurBundle:Joueur',
             	'property' => 'nom',
             	'multiple' => false,
             	'query_builder' => $joueursExt
             ))
             ->add('joueur6Away', 'entity', array(
             	'class' => 'DFJoueurBundle:Joueur',
             	'property' => 'nom',
             	'multiple' => false,
             	'query_builder' => $joueursExt
             ))
             
             ->add('joueur7Away', 'entity', array(
             	'class' => 'DFJoueurBundle:Joueur',
             	'property' => 'nom',
             	'multiple' => false,
             	'query_builder' => $joueursExt
             ))
             ->add('joueur8Away', 'entity', array(
             	'class' => 'DFJoueurBundle:Joueur',
             	'property' => 'nom',
             	'multiple' => false,
             	'query_builder' => $joueursExt
             ))
             ->add('joueur9Away', 'entity', array(
             	'class' => 'DFJoueurBundle:Joueur',
             	'property' => 'nom',
             	'multiple' => false,
             	'query_builder' => $joueursExt
             ))->add('joueur10Away', 'entity', array(
            	'class' => 'DFJoueurBundle:Joueur', 
            	'property' => 'nom', 
            	'multiple' => false, 
            	'query_builder' => $joueursExt
             ))
             ->add('joueur11Away', 'entity', array(
             	'class' => 'DFJoueurBundle:Joueur',
             	'property' => 'nom',
             	'multiple' => false,
             	'query_builder' => $joueursExt
             ));
    }

    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
    	$resolver->setRequired(array(
    		'match'
    	));
    	
        $resolver->setDefaults(array(
            'data_class' => 'DF\MatchBundle\Entity\FeuilleMatch'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'df_matchbundle_feuillematchtype';
    }
}
