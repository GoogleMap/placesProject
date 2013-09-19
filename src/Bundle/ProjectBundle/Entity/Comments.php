<?php
// Comment for our places
// src/Bundle/ProjectBundle/Entity/Comments.php

namespace Bundle\ProjectBundle\Entity;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="Bundle\ProjectBundle\Entity\Repository\CommentsRepository")
 * @ORM\Table(name="comments")
 * @ORM\HasLifecycleCallbacks
 */

class Comments {

    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\Column(type="string")
     */
    protected $user;

    /**
     * @ORM\Column(type="text")
     */
    protected $comment;

    /**
     * @ORM\ManyToOne(targetEntity="Place", inversedBy="comments")
     * @ORM\JoinColumn(name="place_id", referencedColumnName="id")
     */
    protected $place;


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
     * Set user
     *
     * @param string $user
     * @return Comments
     */
    public function setUser($user)
    {
        $this->user = $user;
    
        return $this;
    }

    /**
     * Get user
     *
     * @return string 
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * Set comment
     *
     * @param string $comment
     * @return Comments
     */
    public function setComment($comment)
    {
        $this->comment = $comment;
    
        return $this;
    }

    /**
     * Get comment
     *
     * @return string 
     */
    public function getComment()
    {
        return $this->comment;
    }

    /**
     * Set place
     *
     * @param \Bundle\ProjectBundle\Entity\Place $place
     * @return Comments
     */
    public function setPlace(\Bundle\ProjectBundle\Entity\Place $place = null)
    {
        $this->place = $place;
    
        return $this;
    }

    /**
     * Get place
     *
     * @return \Bundle\ProjectBundle\Entity\Place 
     */
    public function getPlace()
    {
        return $this->place;
    }
}