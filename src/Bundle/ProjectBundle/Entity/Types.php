<?php
// Our types
// src/Bundle/ProjectBundle/Entity/Types.php

namespace Bundle\ProjectBundle\Entity;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="Bundle\ProjectBundle\Entity\Repository\TypesRepository")
 * @ORM\Table(name="types")
 * @ORM\HasLifecycleCallbacks()
 */
class Types {
    
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\Column(type="string",length=30)
     */
    
    protected $type;
    
    /**
     * @ORM\OneToMany(targetEntity="Place", mappedBy="type")
     */
    protected $typee;
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->typee = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set type
     *
     * @param string $type
     * @return Types
     */
    public function setType($type)
    {
        $this->type = $type;
    
        return $this;
    }

    /**
     * Get type
     *
     * @return string 
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Add typee
     *
     * @param \Bundle\ProjectBundle\Entity\Place $typee
     * @return Types
     */
    public function addTypee(\Bundle\ProjectBundle\Entity\Place $typee)
    {
        $this->typee[] = $typee;
    
        return $this;
    }

    /**
     * Remove typee
     *
     * @param \Bundle\ProjectBundle\Entity\Place $typee
     */
    public function removeTypee(\Bundle\ProjectBundle\Entity\Place $typee)
    {
        $this->typee->removeElement($typee);
    }

    /**
     * Get typee
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getTypee()
    {
        return $this->typee;
    }
}