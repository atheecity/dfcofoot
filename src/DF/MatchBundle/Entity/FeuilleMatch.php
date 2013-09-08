<?php

namespace DF\MatchBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * FeuilleMatch
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="DF\MatchBundle\Entity\FeuilleMatchRepository")
 */
class FeuilleMatch
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;
    
    /**
     * @ORM\ManyToOne(targetEntity="DF\MatchBundle\Entity\Matchs")
     * @ORM\JoinColumn(nullable=false)
     */
    private $match;
    
    /**
     * @ORM\ManyToOne(targetEntity="DF\JoueurBundle\Entity\Joueur")
     * @ORM\JoinColumn(nullable=false)
     */
    private $joueur1Home;
    
    /**
     * @ORM\ManyToOne(targetEntity="DF\JoueurBundle\Entity\Joueur")
     * @ORM\JoinColumn(nullable=false)
     */
    private $joueur2Home;
    
    /**
     * @ORM\ManyToOne(targetEntity="DF\JoueurBundle\Entity\Joueur")
     * @ORM\JoinColumn(nullable=false)
     */
    private $joueur3Home;
    
    /**
     * @ORM\ManyToOne(targetEntity="DF\JoueurBundle\Entity\Joueur")
     * @ORM\JoinColumn(nullable=false)
     */
    private $joueur4Home;
    
    /**
     * @ORM\ManyToOne(targetEntity="DF\JoueurBundle\Entity\Joueur")
     * @ORM\JoinColumn(nullable=false)
     */
    private $joueur5Home;
    
    /**
     * @ORM\ManyToOne(targetEntity="DF\JoueurBundle\Entity\Joueur")
     * @ORM\JoinColumn(nullable=false)
     */
    private $joueur6Home;
    
    /**
     * @ORM\ManyToOne(targetEntity="DF\JoueurBundle\Entity\Joueur")
     * @ORM\JoinColumn(nullable=false)
     */
    private $joueur7Home;
    
    /**
     * @ORM\ManyToOne(targetEntity="DF\JoueurBundle\Entity\Joueur")
     * @ORM\JoinColumn(nullable=false)
     */
    private $joueur8Home;
    
    /**
     * @ORM\ManyToOne(targetEntity="DF\JoueurBundle\Entity\Joueur")
     * @ORM\JoinColumn(nullable=false)
     */
    private $joueur9Home;
    
    /**
     * @ORM\ManyToOne(targetEntity="DF\JoueurBundle\Entity\Joueur")
     * @ORM\JoinColumn(nullable=false)
     */
    private $joueur10Home;
    
    /**
     * @ORM\ManyToOne(targetEntity="DF\JoueurBundle\Entity\Joueur")
     * @ORM\JoinColumn(nullable=false)
     */
    private $joueur11Home;
    
    /**
     * @ORM\ManyToOne(targetEntity="DF\JoueurBundle\Entity\Joueur")
     * @ORM\JoinColumn(nullable=false)
     */
    private $joueur1Away;
    
    /**
     * @ORM\ManyToOne(targetEntity="DF\JoueurBundle\Entity\Joueur")
     * @ORM\JoinColumn(nullable=false)
     */
    private $joueur2Away;
    
    /**
     * @ORM\ManyToOne(targetEntity="DF\JoueurBundle\Entity\Joueur")
     * @ORM\JoinColumn(nullable=false)
     */
    private $joueur3Away;
    
    /**
     * @ORM\ManyToOne(targetEntity="DF\JoueurBundle\Entity\Joueur")
     * @ORM\JoinColumn(nullable=false)
     */
    private $joueur4Away;
    
    /**
     * @ORM\ManyToOne(targetEntity="DF\JoueurBundle\Entity\Joueur")
     * @ORM\JoinColumn(nullable=false)
     */
    private $joueur5Away;
    
    /**
     * @ORM\ManyToOne(targetEntity="DF\JoueurBundle\Entity\Joueur")
     * @ORM\JoinColumn(nullable=false)
     */
    private $joueur6Away;
    
    /**
     * @ORM\ManyToOne(targetEntity="DF\JoueurBundle\Entity\Joueur")
     * @ORM\JoinColumn(nullable=false)
     */
    private $joueur7Away;
    
    /**
     * @ORM\ManyToOne(targetEntity="DF\JoueurBundle\Entity\Joueur")
     * @ORM\JoinColumn(nullable=false)
     */
    private $joueur8Away;
    
    /**
     * @ORM\ManyToOne(targetEntity="DF\JoueurBundle\Entity\Joueur")
     * @ORM\JoinColumn(nullable=false)
     */
    private $joueur9Away;
    
    /**
     * @ORM\ManyToOne(targetEntity="DF\JoueurBundle\Entity\Joueur")
     * @ORM\JoinColumn(nullable=false)
     */
    private $joueur10Away;
    
    /**
     * @ORM\ManyToOne(targetEntity="DF\JoueurBundle\Entity\Joueur")
     * @ORM\JoinColumn(nullable=false)
     */
    private $joueur11Away;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set match
     *
     * @param \DF\MatchBundle\Entity\Matchs $match
     * @return FeuilleMatch
     */
    public function setMatch(\DF\MatchBundle\Entity\Matchs $match)
    {
        $this->match = $match;
    
        return $this;
    }

    /**
     * Get match
     *
     * @return \DF\MatchBundle\Entity\Matchs 
     */
    public function getMatch()
    {
        return $this->match;
    }

    /**
     * Set joueur1Home
     *
     * @param \DF\JoueurBundle\Entity\Joueur $joueur1Home
     * @return FeuilleMatch
     */
    public function setJoueur1Home(\DF\JoueurBundle\Entity\Joueur $joueur1Home)
    {
        $this->joueur1Home = $joueur1Home;
    
        return $this;
    }

    /**
     * Get joueur1Home
     *
     * @return \DF\JoueurBundle\Entity\Joueur 
     */
    public function getJoueur1Home()
    {
        return $this->joueur1Home;
    }

    /**
     * Set joueur2Home
     *
     * @param \DF\JoueurBundle\Entity\Joueur $joueur2Home
     * @return FeuilleMatch
     */
    public function setJoueur2Home(\DF\JoueurBundle\Entity\Joueur $joueur2Home)
    {
        $this->joueur2Home = $joueur2Home;
    
        return $this;
    }

    /**
     * Get joueur2Home
     *
     * @return \DF\JoueurBundle\Entity\Joueur 
     */
    public function getJoueur2Home()
    {
        return $this->joueur2Home;
    }

    /**
     * Set joueur3Home
     *
     * @param \DF\JoueurBundle\Entity\Joueur $joueur3Home
     * @return FeuilleMatch
     */
    public function setJoueur3Home(\DF\JoueurBundle\Entity\Joueur $joueur3Home)
    {
        $this->joueur3Home = $joueur3Home;
    
        return $this;
    }

    /**
     * Get joueur3Home
     *
     * @return \DF\JoueurBundle\Entity\Joueur 
     */
    public function getJoueur3Home()
    {
        return $this->joueur3Home;
    }

    /**
     * Set joueur4Home
     *
     * @param \DF\JoueurBundle\Entity\Joueur $joueur4Home
     * @return FeuilleMatch
     */
    public function setJoueur4Home(\DF\JoueurBundle\Entity\Joueur $joueur4Home)
    {
        $this->joueur4Home = $joueur4Home;
    
        return $this;
    }

    /**
     * Get joueur4Home
     *
     * @return \DF\JoueurBundle\Entity\Joueur 
     */
    public function getJoueur4Home()
    {
        return $this->joueur4Home;
    }

    /**
     * Set joueur5Home
     *
     * @param \DF\JoueurBundle\Entity\Joueur $joueur5Home
     * @return FeuilleMatch
     */
    public function setJoueur5Home(\DF\JoueurBundle\Entity\Joueur $joueur5Home)
    {
        $this->joueur5Home = $joueur5Home;
    
        return $this;
    }

    /**
     * Get joueur5Home
     *
     * @return \DF\JoueurBundle\Entity\Joueur 
     */
    public function getJoueur5Home()
    {
        return $this->joueur5Home;
    }

    /**
     * Set joueur6Home
     *
     * @param \DF\JoueurBundle\Entity\Joueur $joueur6Home
     * @return FeuilleMatch
     */
    public function setJoueur6Home(\DF\JoueurBundle\Entity\Joueur $joueur6Home)
    {
        $this->joueur6Home = $joueur6Home;
    
        return $this;
    }

    /**
     * Get joueur6Home
     *
     * @return \DF\JoueurBundle\Entity\Joueur 
     */
    public function getJoueur6Home()
    {
        return $this->joueur6Home;
    }

    /**
     * Set joueur7Home
     *
     * @param \DF\JoueurBundle\Entity\Joueur $joueur7Home
     * @return FeuilleMatch
     */
    public function setJoueur7Home(\DF\JoueurBundle\Entity\Joueur $joueur7Home)
    {
        $this->joueur7Home = $joueur7Home;
    
        return $this;
    }

    /**
     * Get joueur7Home
     *
     * @return \DF\JoueurBundle\Entity\Joueur 
     */
    public function getJoueur7Home()
    {
        return $this->joueur7Home;
    }

    /**
     * Set joueur8Home
     *
     * @param \DF\JoueurBundle\Entity\Joueur $joueur8Home
     * @return FeuilleMatch
     */
    public function setJoueur8Home(\DF\JoueurBundle\Entity\Joueur $joueur8Home)
    {
        $this->joueur8Home = $joueur8Home;
    
        return $this;
    }

    /**
     * Get joueur8Home
     *
     * @return \DF\JoueurBundle\Entity\Joueur 
     */
    public function getJoueur8Home()
    {
        return $this->joueur8Home;
    }

    /**
     * Set joueur9Home
     *
     * @param \DF\JoueurBundle\Entity\Joueur $joueur9Home
     * @return FeuilleMatch
     */
    public function setJoueur9Home(\DF\JoueurBundle\Entity\Joueur $joueur9Home)
    {
        $this->joueur9Home = $joueur9Home;
    
        return $this;
    }

    /**
     * Get joueur9Home
     *
     * @return \DF\JoueurBundle\Entity\Joueur 
     */
    public function getJoueur9Home()
    {
        return $this->joueur9Home;
    }

    /**
     * Set joueur10Home
     *
     * @param \DF\JoueurBundle\Entity\Joueur $joueur10Home
     * @return FeuilleMatch
     */
    public function setJoueur10Home(\DF\JoueurBundle\Entity\Joueur $joueur10Home)
    {
        $this->joueur10Home = $joueur10Home;
    
        return $this;
    }

    /**
     * Get joueur10Home
     *
     * @return \DF\JoueurBundle\Entity\Joueur 
     */
    public function getJoueur10Home()
    {
        return $this->joueur10Home;
    }

    /**
     * Set joueur11Home
     *
     * @param \DF\JoueurBundle\Entity\Joueur $joueur11Home
     * @return FeuilleMatch
     */
    public function setJoueur11Home(\DF\JoueurBundle\Entity\Joueur $joueur11Home)
    {
        $this->joueur11Home = $joueur11Home;
    
        return $this;
    }

    /**
     * Get joueur11Home
     *
     * @return \DF\JoueurBundle\Entity\Joueur 
     */
    public function getJoueur11Home()
    {
        return $this->joueur11Home;
    }

    /**
     * Set joueur1Away
     *
     * @param \DF\JoueurBundle\Entity\Joueur $joueur1Away
     * @return FeuilleMatch
     */
    public function setJoueur1Away(\DF\JoueurBundle\Entity\Joueur $joueur1Away)
    {
        $this->joueur1Away = $joueur1Away;
    
        return $this;
    }

    /**
     * Get joueur1Away
     *
     * @return \DF\JoueurBundle\Entity\Joueur 
     */
    public function getJoueur1Away()
    {
        return $this->joueur1Away;
    }

    /**
     * Set joueur2Away
     *
     * @param \DF\JoueurBundle\Entity\Joueur $joueur2Away
     * @return FeuilleMatch
     */
    public function setJoueur2Away(\DF\JoueurBundle\Entity\Joueur $joueur2Away)
    {
        $this->joueur2Away = $joueur2Away;
    
        return $this;
    }

    /**
     * Get joueur2Away
     *
     * @return \DF\JoueurBundle\Entity\Joueur 
     */
    public function getJoueur2Away()
    {
        return $this->joueur2Away;
    }

    /**
     * Set joueur3Away
     *
     * @param \DF\JoueurBundle\Entity\Joueur $joueur3Away
     * @return FeuilleMatch
     */
    public function setJoueur3Away(\DF\JoueurBundle\Entity\Joueur $joueur3Away)
    {
        $this->joueur3Away = $joueur3Away;
    
        return $this;
    }

    /**
     * Get joueur3Away
     *
     * @return \DF\JoueurBundle\Entity\Joueur 
     */
    public function getJoueur3Away()
    {
        return $this->joueur3Away;
    }

    /**
     * Set joueur4Away
     *
     * @param \DF\JoueurBundle\Entity\Joueur $joueur4Away
     * @return FeuilleMatch
     */
    public function setJoueur4Away(\DF\JoueurBundle\Entity\Joueur $joueur4Away)
    {
        $this->joueur4Away = $joueur4Away;
    
        return $this;
    }

    /**
     * Get joueur4Away
     *
     * @return \DF\JoueurBundle\Entity\Joueur 
     */
    public function getJoueur4Away()
    {
        return $this->joueur4Away;
    }

    /**
     * Set joueur5Away
     *
     * @param \DF\JoueurBundle\Entity\Joueur $joueur5Away
     * @return FeuilleMatch
     */
    public function setJoueur5Away(\DF\JoueurBundle\Entity\Joueur $joueur5Away)
    {
        $this->joueur5Away = $joueur5Away;
    
        return $this;
    }

    /**
     * Get joueur5Away
     *
     * @return \DF\JoueurBundle\Entity\Joueur 
     */
    public function getJoueur5Away()
    {
        return $this->joueur5Away;
    }

    /**
     * Set joueur6Away
     *
     * @param \DF\JoueurBundle\Entity\Joueur $joueur6Away
     * @return FeuilleMatch
     */
    public function setJoueur6Away(\DF\JoueurBundle\Entity\Joueur $joueur6Away)
    {
        $this->joueur6Away = $joueur6Away;
    
        return $this;
    }

    /**
     * Get joueur6Away
     *
     * @return \DF\JoueurBundle\Entity\Joueur 
     */
    public function getJoueur6Away()
    {
        return $this->joueur6Away;
    }

    /**
     * Set joueur7Away
     *
     * @param \DF\JoueurBundle\Entity\Joueur $joueur7Away
     * @return FeuilleMatch
     */
    public function setJoueur7Away(\DF\JoueurBundle\Entity\Joueur $joueur7Away)
    {
        $this->joueur7Away = $joueur7Away;
    
        return $this;
    }

    /**
     * Get joueur7Away
     *
     * @return \DF\JoueurBundle\Entity\Joueur 
     */
    public function getJoueur7Away()
    {
        return $this->joueur7Away;
    }

    /**
     * Set joueur8Away
     *
     * @param \DF\JoueurBundle\Entity\Joueur $joueur8Away
     * @return FeuilleMatch
     */
    public function setJoueur8Away(\DF\JoueurBundle\Entity\Joueur $joueur8Away)
    {
        $this->joueur8Away = $joueur8Away;
    
        return $this;
    }

    /**
     * Get joueur8Away
     *
     * @return \DF\JoueurBundle\Entity\Joueur 
     */
    public function getJoueur8Away()
    {
        return $this->joueur8Away;
    }

    /**
     * Set joueur9Away
     *
     * @param \DF\JoueurBundle\Entity\Joueur $joueur9Away
     * @return FeuilleMatch
     */
    public function setJoueur9Away(\DF\JoueurBundle\Entity\Joueur $joueur9Away)
    {
        $this->joueur9Away = $joueur9Away;
    
        return $this;
    }

    /**
     * Get joueur9Away
     *
     * @return \DF\JoueurBundle\Entity\Joueur 
     */
    public function getJoueur9Away()
    {
        return $this->joueur9Away;
    }

    /**
     * Set joueur10Away
     *
     * @param \DF\JoueurBundle\Entity\Joueur $joueur10Away
     * @return FeuilleMatch
     */
    public function setJoueur10Away(\DF\JoueurBundle\Entity\Joueur $joueur10Away)
    {
        $this->joueur10Away = $joueur10Away;
    
        return $this;
    }

    /**
     * Get joueur10Away
     *
     * @return \DF\JoueurBundle\Entity\Joueur 
     */
    public function getJoueur10Away()
    {
        return $this->joueur10Away;
    }

    /**
     * Set joueur11Away
     *
     * @param \DF\JoueurBundle\Entity\Joueur $joueur11Away
     * @return FeuilleMatch
     */
    public function setJoueur11Away(\DF\JoueurBundle\Entity\Joueur $joueur11Away)
    {
        $this->joueur11Away = $joueur11Away;
    
        return $this;
    }

    /**
     * Get joueur11Away
     *
     * @return \DF\JoueurBundle\Entity\Joueur 
     */
    public function getJoueur11Away()
    {
        return $this->joueur11Away;
    }
}