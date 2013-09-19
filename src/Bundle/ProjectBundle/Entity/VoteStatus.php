<?php
// src/Bundle/ProjectBundle/Entiy/VoteStatus.php

namespace Bundle\ProjectBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="Bundle\ProjectBundle\Entity\Repository\VoteStatusRepository")
 * @ORM\Table(name="vote_status")
 * @ORM\HasLifecycleCallbacks
 */
class VoteStatus {

    function __construct() {
        
    }
    
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;
    
    /**
     * @ORM\Column(type="string")
     */
    protected $refId;
    
    /**
     * @ORM\Column(type="string", length=15)
     */
    protected $userIp;


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
     * Set refId
     *
     * @param string $refId
     * @return VoteStatus
     */
    public function setRefId($refId)
    {
        $this->refId = $refId;
    
        return $this;
    }

    /**
     * Get refId
     *
     * @return string 
     */
    public function getRefId()
    {
        return $this->refId;
    }

    /**
     * Set userIp
     *
     * @param string $userIp
     * @return VoteStatus
     */
    public function setUserIp($userIp)
    {
        $this->userIp = $userIp;
    
        return $this;
    }

    /**
     * Get userIp
     *
     * @return string 
     */
    public function getUserIp()
    {
        return $this->userIp;
    }
}