<?php

namespace DF\CommentBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use FOS\CommentBundle\Entity\Comment as BaseComment;
use FOS\CommentBundle\Model\SignedCommentInterface;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Config\Definition\IntegerNode;
use PA\CommentairesBundle\Controller\PublicController;

/**
 * @ORM\Table(name="v4_commentaires")
 * @ORM\Entity
 * @ORM\ChangeTrackingPolicy("DEFERRED_EXPLICIT")
 */
class Comment extends BaseComment  implements SignedCommentInterface
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\generatedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * Thread of this comment
     *
     * @var Thread
     * @ORM\ManyToOne(targetEntity="DF\CommentBundle\Entity\Thread")
     */
    protected $thread;
    
    /**
     * Author of the comment
     *
     * @ORM\ManyToOne(targetEntity="DF\UserBundle\Entity\User")
     * @var User
     */
    protected $author;

    /**
     * @var integer
     * 1 : Hors-sujet
     * 2 : Abusif
     *
     * @ORM\Column(name="tag", type="integer", nullable=true)
     */
    private $tag;
    
    /**
     * @var string
     * 
     * @ORM\Column(name="textAbusif", type="text", nullable=true)
     */
    private $textAbusif;
    
    /**
     * @var Integer
     * 
     * @ORM\Column(name="nbAbusif", type="integer", nullable=false)
     */
    private $nbAbusif = 0;
    
    /**
     * @var Integer
     * 
     * @ORM\Column(name="nbHs", type="integer", nullable=false)
     */
    private $nbHs = 0;
    
    public function setAuthor(UserInterface $author)
    {
        $this->author = $author;
    }
    
    public function getAuthor()
    {
        return $this->author;
    }
    
    public function getAuthorName()
    {
        if (null === $this->getAuthor()) {
            return 'Anonymous';
        }
    
        return $this->getAuthor()->urlizeIdentity();
    }  

    public function getAuthorNameNotClean()
    {
    	if (null === $this->getAuthor()) {
    		return 'Anonymous';
    	}
    	
    	return $this->getAuthor()->getNom();
    }
    
    public function getAuthorId()
    {
    	if (null === $this->getAuthor()) {
    		return null;
    	}
    	
    	return $this->getAuthor()->getId();
    }

    /**
     * Set tag
     *
     * @param integer $tag
     * @return Comment
     */
    public function setTag($tag)
    {
        $this->tag = $tag;

        return $this;
    }

    /**
     * Get tag
     *
     * @return integer 
     */
    public function getTag()
    {
        return $this->tag;
    }

    /**
     * Set textAbusif
     *
     * @param string $textAbusif
     * @return Comment
     */
    public function setTextAbusif($textAbusif)
    {
        $this->textAbusif = $textAbusif;

        return $this;
    }

    /**
     * Get textAbusif
     *
     * @return string 
     */
    public function getTextAbusif()
    {
        return $this->textAbusif;
    }

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
     * Set nbAbusif
     *
     * @param integer $nbAbusif
     * @return Comment
     */
    public function setNbAbusif($nbAbusif)
    {
        $this->nbAbusif = $nbAbusif;

        return $this;
    }

    /**
     * Get nbAbusif
     *
     * @return integer 
     */
    public function getNbAbusif()
    {
        return $this->nbAbusif;
    }

    /**
     * Set nbHs
     *
     * @param integer $nbHs
     * @return Comment
     */
    public function setNbHs($nbHs)
    {
        $this->nbHs = $nbHs;

        return $this;
    }

    /**
     * Get nbHs
     *
     * @return integer 
     */
    public function getNbHs()
    {
        return $this->nbHs;
    }  
}
