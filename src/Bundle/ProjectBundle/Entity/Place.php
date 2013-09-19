<?php

// Our places
// src/Bundle/ProjectBundle/Entity/Place.php

namespace Bundle\ProjectBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="Bundle\ProjectBundle\Entity\Repository\PlacesRepository")
 * @ORM\Table(name="place")
 * @ORM\HasLifecycleCallbacks()
 */
class Place {

    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\Column(type="string", unique=true)
     */
    protected $slug;

    /**
     * @ORM\ManyToOne(targetEntity="Types", inversedBy="typee")
     * @ORM\JoinColumn(name="type_id", referencedColumnName="id")
     */
    protected $type;
    
    /**
     * @ORM\Column(type="string")
     */
    protected $name;
    
    /**
     * @ORM\OneToMany(targetEntity="Comments", mappedBy="place")
     */
    protected $comments;
    
    /**
     *
     * @ORM\Column(type="string")
     */
    protected $vicinity;
    
    /**
     * @ORM\Column(type="decimal",precision=2, scale=1)
     */
    protected $rating;
    
    /**
     * @ORM\Column(type="integer")
     */
    protected $votesCount;

}

?>
