<?php

// src/Bundle/ProjectBundle/Controller/FormsController.php

namespace Bundle\ProjectBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Bundle\ProjectBundle\Model\StoreModel;
use Bundle\ProjectBundle\Model\UserIpModel;
use Bundle\ProjectBundle\lib\GetUserIp;

class FormsController extends Controller {

    private $em;
    private $ip;
    
    function __construct() {
        
    }
    public function moreStoresRequestAction($param) {
        $this->em = $this->getDoctrine()->getManager();
        $params = explode(',', $param);
        $start = $params[0];
        $end = $params[1];
   
        $coffeStores = $this->em->getRepository('BundleProjectBundle:Store')
                ->loadMoreStores($start, $end);

        return $this->render('BundleProjectBundle:Store:moreStores.html.twig', array(
                    'start' => $params[0],
                    'end' => $params[1],
                    'coffeStores' => $coffeStores,          
        ));
    }

    // votes for place
    function setVoteAction($vot) {
        $this->em = $this->getDoctrine()->getManager();

        $param = explode(',', $vot);
        $voteValue = $param[0];
        $placeExtId = $param[1];
        $userIp = $param[2];

        
        // get the rating before update
        $ratingBeforeUpdate = $this->em->getRepository('BundleProjectBundle:Places')
                ->getPlaceUserRating($placeExtId);
        if ($ratingBeforeUpdate[0]['usersRating'] == 0) {
            // get the current votesCount
            $currentCounts = $this->em->getRepository('BundleProjectBundle:Places')
                    ->getTotalVotes($placeExtId);
            // update votesCount
            $updateVotesCount = $this->em->getRepository('BundleProjectBundle:Places')
                    ->updatePlaceVotesCount($placeExtId,$currentCounts[0]['votesCount'],1);
            // get current votesTotal
            $currentVotesTotal = $this->em->getRepository('BundleProjectBundle:Places')
                    ->getVotesTotal($placeExtId);
            // update votesTotal
            $updateVotesTotal = $this->em->getRepository('BundleProjectBundle:Places')
                    ->updatePlaceVotesTotal($placeExtId,$currentVotesTotal[0]['votesTotal'],$voteValue);
            // vote to add
            $ratingToAdd = ($ratingBeforeUpdate[0]['usersRating'] + $voteValue);
        } else {
            // get the current votesCount
            $currentCounts = $this->em->getRepository('BundleProjectBundle:Places')
                    ->getTotalVotes($placeExtId);
//            echo $currentCounts[0]['votesCount'];
//            exit();
            // update total votes
            $updateVotesCount = $this->em->getRepository('BundleProjectBundle:Places')
                    ->updatePlaceVotesCount($placeExtId,$currentCounts[0]['votesCount'],1);
            
            // get current votesTotal; vote1+vote2+..+voteN
            $currentVotesTotal = $this->em->getRepository('BundleProjectBundle:Places')
                    ->getVotesTotal($placeExtId);
//            echo $currentCounts[0]['votesTotal'];
//            exit();
            // update votesTotal
            $updateVotesTotal = $this->em->getRepository('BundleProjectBundle:Places')
                    ->updatePlaceVotesTotal($placeExtId,$currentVotesTotal[0]['votesTotal'],$voteValue);
            
            
            // get total votes again
            //$getTotalVotes = $this->em->getRepository('BundleProjectBundle:Places')
                    //->getTotalVotes($placeExtId);
            //echo "curent votes".$getTotalVotes[0]['votesCount'] ."<br/>";
            //echo "current rating".$ratingBeforeUpdate[0]['usersRating'] ."<br />";
            //echo "votevalue:".$voteValue ."<br />";
            //exit();
            // add the new rating after the vote
            
            $currentVotesTotal1 = $this->em->getRepository('BundleProjectBundle:Places')
                    ->getVotesTotal($placeExtId);
            $currentCounts1 = $this->em->getRepository('BundleProjectBundle:Places')
                    ->getTotalVotes($placeExtId);
            
            $ratingToAdd = ($currentVotesTotal1[0]['votesTotal']) / $currentCounts1[0]['votesCount'];
            //exit();
        }
//        echo "<br/> rating to add".$ratingToAdd ."<br />";
//        //echo "<br/>" .number_format($ratingToAdd, 1, '.');
//        exit();
        // insert newRating in store table
        $updateStoreRating = $this->em->getRepository('BundleProjectBundle:Places')
                ->updatePlaceRating($placeExtId, $ratingToAdd);

        // update vote status table
        $updateVoteStatus = $this->em->getRepository('BundleProjectBundle:VoteStatus')
                ->insertVoteStatus($placeExtId, $userIp, $this->em);
        // get the ratinge vote updated from store table
        $ratingAfterUpdate = $this->em->getRepository('BundleProjectBundle:Places')
                ->getPlaceUserRating($placeExtId);

        $currentCounts = $this->em->getRepository('BundleProjectBundle:Places')
                    ->getTotalVotes($placeExtId);
        return $this->render('BundleProjectBundle:Places:usersRating.html.twig', array(
                    'usersRating' => $ratingAfterUpdate[0]['usersRating'],
                    'totalVotes' => $currentCounts[0]['votesCount']
        ));
    }

    // votes for site
    function voteeAction($vot) {
        $this->em = $this->getDoctrine()->getManager();

        $userIp = new GetUserIp();
        $currentIp = $userIp->get_user_ip();
        
        $updateVoteFlag = $this->em->getRepository('BundleProjectBundle:UsersIp')
                ->updateClient($currentIp);
        //echo $vot;
        $vote = $vot;
        //get content of textfile
        $filename = "bundles/bundleproject/txt/poll_result.txt";
        $content = file($filename);

        //put content in array
        $array = explode("||", $content[0]);
        $yes = $array[0];
        $ok = $array[1];
        $notReally = $array[2];
        $no = $array[3];
        $total = $array[4];
        //update voteField (yes,it's ok,not really,no)
        if ($vote == 0) {
            $yes = $yes + 1;
            $total = $total + 1;
        }
        if ($vote == 1) {
            $ok = $ok + 1;
            $total = $total + 1;
        }
        if ($vote == 2) {
            $notReally = $notReally + 1;
            $total = $total + 1;
        }
        if ($vote == 3) {
            $no = $no + 1;
            $total = $total + 1;
        }
        //insert votes to txt file
        $insertvote = $yes . "||" . $ok . "||" . $notReally . "||" . $no . "||" . $total;
        $fp = fopen($filename, "w");
        fputs($fp, $insertvote);
        fclose($fp);

        return $this->render('BundleProjectBundle:Places:voteResult.html.twig', array(
                    'yes' => $yes,
                    'ok' => $ok,
                    'notReally' => $notReally,
                    'no' => $no,
                    'totalVotes' => $total
        ));
    }
    
    // Search by rating
    function searchAction() {
        $request = $this->getRequest();
        if ($request->getMethod() == "POST") {
            $searchInput = $request->get('input');
            //$typeInput = $request->get('type');
            if (!empty($searchInput)) {
                if (is_numeric($searchInput)&& $searchInput >= 1 && $searchInput <= 5) {
                    return $this->redirect($this->generateUrl('BundleProjectBundle_places',array(
                        'input'=>$searchInput
                    )));
                } else if(is_string($searchInput)){
                    return $this->redirect($this->generateUrl('BundleProjectBundle_places',array(
                        'input'=>  htmlentities($searchInput)
                    )));
                } else {
                    return $this->redirect($this->generateUrl('BundleProjectBundle_places'));
                }
            } else {
                // if rating filed is not valid ..
                return $this->redirect($this->generateUrl('BundleProjectBundle_places'));
            }
        } else {
            // if the request != post
            return $this->redirect($this->generateUrl('BundleProjectBundle_places'));
        }
    }

}

?>
