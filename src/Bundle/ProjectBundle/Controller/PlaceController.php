<?php

// src/Bundle/ProjectBundle/Controller/StoreController.php

namespace Bundle\ProjectBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Bundle\ProjectBundle\lib\GetUserIp;
use Bundle\ProjectBundle\Model\StoreModel;

/**
 * Store controller.
 */
class PlaceController extends Controller {

    // Store page - insert and show all stores
    function placesAction(Request $request) {
        $em = $this->getDoctrine()->getManager();

        // best practice..
//        $insert = $em->getRepository('BundleProjectBundle:Places')
//                ->addPlacesByType("food",$em);
//       $insertt = $em->getRepository('BundleProjectBundle:Places')
//                ->addPlacesByType("gym",$em);
//        exit();
        
        $searchInput = $request->query->get('input');

        if (!empty($searchInput) && is_numeric($searchInput)) {
            $places = $em->getRepository('BundleProjectBundle:Places')
                    ->getPlacesByRating($searchInput);
            $totalStores = count($places);
        } else if (is_string($searchInput)) {
            $places = $em->getRepository('BundleProjectBundle:Places')
                    ->getPlacesByType($searchInput);
            $totalStores = count($places);
        } else {
            $places = $em->getRepository('BundleProjectBundle:Places')
                    ->getPlacesPosts();
            $totalStores = count($places);
        }
        return $this->render('BundleProjectBundle:Places:infoPlaces.html.twig', array(
                    'places' => $places,
                    'placesCount' => $totalStores
        ));
    }

    // Show place by id
    function showPlaceAction($id) {
        
        $userIp = new GetUserIp();
        $currentIp = $userIp->get_user_ip();
        
        $em = $this->getDoctrine()->getManager();
        $places = $em->getRepository('BundleProjectBundle:Places')
                ->getPlacesById($id);

        $place = $em->getRepository('BundleProjectBundle:Places')->find($id);
        if (!$place) {
            return $this->render('BundleProjectBundle:Error:errorPage.html.twig');
            //throw $this->createNotFoundException('Unable to find store post.');
        }
        $comments = $em->getRepository('BundleProjectBundle:Comment')
                ->getCommentsForPlace($place->getId());

        // check if the current user vote for the store
        $findIfUserVoted = $em->getRepository('BundleProjectBundle:VoteStatus')
                ->getUserStatus($id, $currentIp);


        if ($findIfUserVoted) {
            // get store usersRating
            $storeUsersRating = $em->getRepository('BundleProjectBundle:Places')
                    ->getPlaceUserRating($id);
            $getTotalVotes = $em->getRepository('BundleProjectBundle:Places')
                    ->getTotalVotes($id);
            $getTotalVotesAllTime = $em->getRepository('BundleProjectBundle:VoteStatus')
                    ->getTotalVotes();
            
            //exit();
            return $this->render("BundleProjectBundle:Places:show.html.twig", array(
                        'places' => $places,
                        'comments' => $comments,
                        'id' => $id,
                        'ip' => $currentIp,
                        'bool' => true,
                        'usersRating' => $storeUsersRating[0]['usersRating'],
                        'totalVotes' => $getTotalVotes[0]['votesCount'],
                        'totalVotesAllTime' => $getTotalVotesAllTime
            ));
        }

        return $this->render("BundleProjectBundle:Places:show.html.twig", array(
                    'places' => $places,
                    'comments' => $comments,
                    'id' => $id,
                    'ip' => $currentIp
        ));
    }
}
