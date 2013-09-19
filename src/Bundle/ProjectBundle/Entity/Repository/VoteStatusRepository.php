<?php

namespace Bundle\ProjectBundle\Entity\Repository;

use Doctrine\ORM\EntityRepository;

use Bundle\ProjectBundle\Entity\VoteStatus;

/**
 * VoteStatusRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class VoteStatusRepository extends EntityRepository
{
    // insert data
    public function insertVoteStatus($refId,$ip,$em) {
        $voteStatus = new VoteStatus();
        $voteStatus->setRefId($refId);
        $voteStatus->setUserIp($ip);
        
        $em->persist($voteStatus);
        $em->flush();
    }
    
    // getUserStatus - did the user vote or not for current store ?!..
    public function getUserStatus($id,$ip){
        $qb = $this->createQueryBuilder('votes')
                ->select('votes.refId')
                ->where('votes.refId = :refId')
                ->andWhere('votes.userIp = :ip')
                ->setParameter('refId', $id)
                ->setParameter('ip', $ip)
                ->getQuery()
                ->getResult();
        $rowCount = count($qb);
        if($rowCount >= 1) {
            return true;
        } else {
            return false;
        }
        
    }
    public function getTotalVotes(){
        $qb = $this->createQueryBuilder('votes')
                ->select('votes.id')
                ->getQuery()
                ->getResult();
        return count($qb);
    }
}