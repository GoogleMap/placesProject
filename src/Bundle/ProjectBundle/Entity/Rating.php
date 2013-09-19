<?php

namespace Bundle\ProjectBundle\Entity;

class Rating {

    protected $rating;

    public function setRating($rating) {
        $this->raiting = $rating;

        return $this;
    }

    public function getRating() {
        return $this->rating;
    }
    
    protected $type;

    public function setType($type) {
        $this->type = $type;

        return $this;
    }

    public function getType() {
        return $this->type;
    }

}
