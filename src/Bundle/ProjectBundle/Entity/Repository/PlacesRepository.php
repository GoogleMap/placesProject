<?php

namespace Bundle\ProjectBundle\Entity\Repository;

use Doctrine\ORM\EntityRepository;
use Bundle\ProjectBundle\Entity\Places;

/**
 * StoreRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class PlacesRepository extends EntityRepository {

    private $token = "";
    private $type = "";
    private $url = "";

    public function getPlacesPosts($limit = null) {
        $qb = $this->createQueryBuilder('place')
                ->select('place')
                ->addOrderBy('place.id', 'ASC');


        if (false === is_null($limit)) {
            $qb->setMaxResults($limit);
        }

        return $qb->getQuery()
              ->getResult();
    }

    // Get place by id
//    public function getPlaceById($id) {
//        $qb = $this->createQueryBuilder('place')
//                ->select('place.id')
//                ->where('place.id=:id')
//                ->setParameter('id', $id)
//                ->setMaxResults(1);
//        return $qb->getQuery()->getResult();
//    }

    public function getPlacesById($id) {
        $qb = $this->createQueryBuilder('place')
                ->select('place')
                ->where('place.id = :id')
                ->setParameter('id', $id);

        return $qb->getQuery()->getResult();
    }

    // Get all stores ids
    public function getPlacesIds() {
        $qb = $this->createQueryBuilder('place')
                ->select('place.extId');

        return $qb->getQuery()->getResult();
    }

    // Get stores by rating
    public function getPlacesByRating($rating) {
        $qb = $this->createQueryBuilder('place')
                ->select('place')
                ->where('place.rating >= :rating')
                ->setParameter('rating', $rating);
        return $qb->getQuery()->getResult();
    }

    // Get stores by type
    public function getPlacesByType($type) {

        $qb = $this->createQueryBuilder('place')
                ->select('place')
                ->where('place.type LIKE :type')
                ->setParameter('type', $type . '%');
        return $qb->getQuery()->getResult();
    }

    // update place - usersRating field
    public function updatePlaceRating($id, $rating) {
        $qb = $this->createQueryBuilder('')
                ->update('Bundle\ProjectBundle\Entity\Places', 'place')
                ->set('place.usersRating', ':rating')
                ->where('place.id = :id')
                ->setParameter('id', $id)
                ->setParameter('rating', $rating);

        return $qb->getQuery()->execute();
    }

    // get store userRating
    public function getPlaceUserRating($id) {
        $qb = $this->createQueryBuilder('place')
                ->select('place.usersRating')
                ->where('place.id = :id')
                ->setParameter('id', $id);
        return $qb->getQuery()->getResult();
    }

    // get stores where index start at and and at..
    public function loadMorePlaces($start, $end) {
        $qb = $this->createQueryBuilder('place')
                ->select('place')
                ->where('place.id > :start')
                ->andWhere('place.id <= :end')
                ->setParameter('start', $start)
                ->setParameter('end', $end);
        return $qb->getQuery()->getResult();
    }

    public function addPlacesByType($type,$em) {
        $url = $this->url = "https://maps.googleapis.com/maps/api/place/nearbysearch/xml?location=46.7667,23.6&radius=5000&types=" . $type . "&sensor=false&key=AIzaSyCLRr7MJ5GMGRo0zRCs1azjafkQDIY23jc";
        $this->addPlacesByUrl($type, $url, $em);
    }

    private function addPlacesByUrl($type, $url, $em) {
        $places = simplexml_load_file($url);
        $placeItems = $places->result;
        $pageToken = $places->next_page_token;

        // Run the results
        foreach ($placeItems as $placeItem) {
            $geoGeometry = $placeItem->geometry;
            $geoLocation = $geoGeometry->location;
            $photoRef = $placeItem->photo;
            $types = $placeItem->type;

            if (!empty($photoRef)) {
                $imgRef = $photoRef->photo_reference;
            } else {
                $imgRef = "default.jpg";
            }
            // get all types for store
            $type = "";
            foreach ($types as $innerType) {
                $type .= $innerType . ",";
            }
            // get the lat. and lng
            foreach ($geoLocation as $loc) {
                $extId = $placeItem->id;
                if ($this->getCurrentId($extId)) {
                    continue; // jump to the next id! getCurrentId - return true
                } else {
                    $extId = $placeItem->id; // id not in the db
                }
                $name = $placeItem->name;
                $vicinity = $placeItem->vicinity;
                $rating = $placeItem->rating;
                $icon = $placeItem->icon;
                $lat = $loc->lat;
                $lng = $loc->lng;

                // Create the store object
                $place = new Places();
                $place->setExtId($extId);
                $place->setImgRef($imgRef);
                $place->setName($name);
                $place->setVicinity($vicinity);
                $place->setType(rtrim($type, ','));
                $place->setLat($lat);
                $place->setLng($lng);
                $place->setRating($rating);
                $place->setUsersRating(0);
                $place->setVotesCount(0);
                $place->setIcon($icon);

                // Save data in db
                $em->persist($place);
                $em->flush();
            }
        }
        $token = $pageToken[0];
        if ($token != "") {
            //$this->token . "<br/>";
            $url = $this->url = "https://maps.googleapis.com/maps/api/place/nearbysearch/xml?location=46.7667,23.6&radius=5000&types=" . $type . "&sensor=false&key=AIzaSyCLRr7MJ5GMGRo0zRCs1azjafkQDIY23jc&pagetoken=" . $token;

            //echo $nextToken ."<br />";
            sleep(2);
            $this->addPlacesByUrl($type,$url,$em);
        }
    }
    private function getCurrentId($id){
        $qb = $this->createQueryBuilder('places')
                ->select('places.extId')
                ->where('places.extId = :extId')
                ->setParameter('extId', $id)
                ->getQuery()
                ->getResult();      
        $rows = count($qb);
        
        if($rows == 1) {
            return true;
        } else {
            return false;
        }
        
    }
    
    // update total votes
    public function updatePlaceVotesCount($id,$currentCount,$incValue) {
        $qb = $this->createQueryBuilder('')
                ->update('Bundle\ProjectBundle\Entity\Places', 'place')
                ->set('place.votesCount', ':increment')
                ->where('place.id = :id')
                ->setParameter('id', $id)
                ->setParameter('increment', $currentCount+$incValue);

        return $qb->getQuery()->execute();
    }
    // get total votes
    public function getTotalVotes($id) {
        $qb = $this->createQueryBuilder('place')
                ->select('place.votesCount')
                ->where('place.id = :id')
                ->setParameter('id', $id)
                ->getQuery()
                ->getResult();
        return $qb;
        
    }
    // get votes total; vote1+vote2+..+voteN
    public function getVotesTotal($id) {
        $qb = $this->createQueryBuilder('place')
                ->select('place.votesTotal')
                ->where('place.id = :id')
                ->setParameter('id', $id)
                ->getQuery()
                ->getResult();
        return $qb;
    }
    // update votes total
    public function updatePlaceVotesTotal($id,$currentValue,$voteValue){
        $qb = $this->createQueryBuilder('')
                ->update('Bundle\ProjectBundle\Entity\Places', 'place')
                ->set('place.votesTotal', ':votesTotal')
                ->where('place.id = :id')
                ->setParameter('id', $id)
                ->setParameter('votesTotal', $currentValue+$voteValue);

        return $qb->getQuery()->execute();
        
    }

}
