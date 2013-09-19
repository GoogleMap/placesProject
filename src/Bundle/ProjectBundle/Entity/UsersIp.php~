<?php
// src/Bundle/ProjectBundle/Entity/UsersIp.php

namespace Bundle\ProjectBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="Bundle\ProjectBundle\Entity\Repository\UsersIpRepository")
 * @ORM\Table(name="users_ip")
 * @ORM\HasLifecycleCallbacks
 */

class UsersIp {
    
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;
    
    /**
     * @ORM\Column(type="string",length=15)
     */
    protected $ip;
    
    /**
     * @ORM\Column(type="integer")
     */
    protected $count;
    
    /**
     * @ORM\Column(type="integer")
     */
    protected $voteFlag;

    /**
     * Set ip
     *
     * @param string $ip
     * @return UsersIp
     */
    public function setIp($ip)
    {
        $this->ip = $ip;
    
        return $this;
    }

    /**
     * Get ip
     *
     * @return string 
     */
    public function getIp()
    {
        return $this->ip;
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
     * Set count
     *
     * @param integer $count
     * @return UsersIp
     */
    public function setCount($count)
    {
        $this->count = $count;
    
        return $this;
    }

    /**
     * Get count
     *
     * @return integer 
     */
    public function getCount()
    {
        return $this->count;
    }

    /**
     * Set voteFlag
     *
     * @param $voteFlag
     * @return UsersIp
     */
    public function setVoteFlag($voteFlag)
    {
        $this->voteFlag = $voteFlag;
    
        return $this;
    }

    /**
     * Get voteFlag
     *
     * @return \integer 
     */
    public function getVoteFlag()
    {
        return $this->voteFlag;
    }
}