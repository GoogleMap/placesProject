<?php

// src/Bundle/ProjectBundle/Entity/Store.php

namespace Bundle\ProjectBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * @ORM\Entity(repositoryClass="Bundle\ProjectBundle\Entity\Repository\PlacesRepository")
 * @ORM\Table(name="places")
 * @ORM\HasLifecycleCallbacks()
 */
class Places {
    
    /**
     * 
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\Column(type="string")
     */
    protected $extId;

    /**
     *
     * @ORM\Column(type="string")
     */
    protected $imgRef;

    /**
     *
     * @ORM\Column(type="string")
     */
    protected $name;

    /**
     * @ORM\OneToMany(targetEntity="Comment", mappedBy="place")
     */
    protected $comments;

    /**
     *
     * @ORM\Column(type="string")
     */
    protected $vicinity;

    /**
     * 
     * @ORM\Column(type="string")
     */
    protected $type;

    /**
     * 
     * @ORM\Column(type="string")
     */
    protected $lat;

    /**
     * 
     * @ORM\Column(type="string")
     */
    protected $lng;

    /**
     * 
     * @ORM\Column(type="string")
     */
    protected $rating;

    /**
     * 
     * @ORM\Column(type="string")
     */
    protected $icon;
    
    
    /**
     * 
     * @ORM\Column(type="decimal", precision=2, scale=1)
     * 
     */
    protected $usersRating;

    /**
     * @ORM\Column(type="integer")
     */
    protected $votesCount;
    
    /**
     * @ORM\Column(type="integer")
     */
    protected $votesTotal;
    
    /**
     * 
     * @param integer $total
     * @return Places
     */
    public function setVotesTotal($total){
        $this->votesTotal = $total;
        
        return $this;
    }
    
    /**
     * 
     * @return integer
     */
    public function getVotesTotal(){
        return $this->votesTotal;
    }
    
    /**
     * Get id
     *
     * @return integer 
     */
    
    public function getId() {
        return $this->id;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return Places
     */
    public function setName($name) {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName() {
        return $this->name;
    }

    /**
     * Set vicinity
     *
     * @param string $vicinity
     * @return Places
     */
    public function setVicinity($vicinity) {
        $this->vicinity = $vicinity;

        return $this;
    }

    /**
     * Get vicinity
     *
     * @return string 
     */
    public function getVicinity() {
        return $this->vicinity;
    }

    /**
     * Set type
     *
     * @param string $type
     * @return Places
     */
    public function setType($type) {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return string 
     */
    public function getType() {
        return $this->type;
    }

    /**
     * Set lat
     *
     * @param string $lat
     * @return Places
     */
    public function setLat($lat) {
        $this->lat = $lat;

        return $this;
    }

    /**
     * Get lat
     *
     * @return string 
     */
    public function getLat() {
        return $this->lat;
    }

    /**
     * Set lng
     *
     * @param string $lng
     * @return Places
     */
    public function setLng($lng) {
        $this->lng = $lng;

        return $this;
    }

    /**
     * Get lng
     *
     * @return string 
     */
    public function getLng() {
        return $this->lng;
    }

    /**
     * Set rating
     *
     * @param string $rating
     * @return Places
     */
    public function setRating($rating) {
        $this->rating = $rating;

        return $this;
    }

    /**
     * Get rating
     *
     * @return string 
     */
    public function getRating() {
        return $this->rating;
    }

    /**
     * Set icon
     *
     * @param string $icon
     * @return Places
     */
    public function setIcon($icon) {
        $this->icon = $icon;

        return $this;
    }

    /**
     * Get icon
     *
     * @return string 
     */
    public function getIcon() {
        return $this->icon;
    }

    /**
     * Add comments
     *
     * @param \Bundle\ProjectBundle\Entity\Comment $comments
     * @return Places
     */
    public function addComment(\Bundle\ProjectBundle\Entity\Comment $comments) {
        $this->comments[] = $comments;

        return $this;
    }

    /**
     * Remove comments
     *
     * @param \Bundle\ProjectBundle\Entity\Comment $comments
     */
    public function removeComment(\Bundle\ProjectBundle\Entity\Comment $comments) {
        $this->comments->removeElement($comments);
    }

    /**
     * Get comments
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getComments() {
        return $this->comments;
    }

    public function __construct() {
        $this->comments = new ArrayCollection();

        
    }


    /**
     * Set usersRating
     *
     * @param float $usersRating
     * @return Places
     */
    public function setUsersRating($usersRating)
    {
        $this->usersRating = $usersRating;
    
        return $this;
    }

    /**
     * Get usersRating
     *
     * @return float 
     */
    public function getUsersRating()
    {
        return $this->usersRating;
    }

    /**
     * Set extId
     *
     * @param string $extId
     * @return Places
     */
    public function setExtId($extId)
    {
        $this->extId = $extId;
    
        return $this;
    }

    /**
     * Get extId
     *
     * @return string 
     */
    public function getExtId()
    {
        return $this->extId;
    }

    /**
     * Set imgRef
     *
     * @param string $imgRef
     * @return Places
     */
    public function setImgRef($imgRef)
    {
        $this->imgRef = $imgRef;
    
        return $this;
    }

    /**
     * Get imgRef
     *
     * @return string 
     */
    public function getImgRef()
    {
        return $this->imgRef;
    }

    /**
     * Set votesCount
     *
     * @param integer $votesCount
     * @return Places
     */
    public function setVotesCount($votesCount)
    {
        $this->votesCount = $votesCount;
    
        return $this;
    }

    /**
     * Get votesCount
     *
     * @return integer 
     */
    public function getVotesCount()
    {
        return $this->votesCount;
    }
}