<?php

// src/Bundle/ProjectBundle/Controller/PageController
namespace Bundle\ProjectBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Bundle\ProjectBundle\lib\GetUserIp;
use Bundle\ProjectBundle\lib\ClientBrowser;
use Bundle\ProjectBundle\Entity\UsersIp;
use Bundle\ProjectBundle\Entity\Rating;
use Bundle\ProjectBundle\Form\RatingType;
use Bundle\ProjectBundle\Model\StoreModel;
use Bundle\ProjectBundle\Model\UserIpModel;

class PageController extends Controller {

    private $em;
    private $ip;
    
    function __construct() {
         
    }

    // Preload method - insert/update in/the users_ip table and redirect to homePage
    function preLoadAction() {
        $this->em = $this->getDoctrine()->getManager();
        $addIp = new UserIpModel();
        $addIp->addUserIp($this->em);
        return $this->redirect($this->generateUrl('BundleProjectBundle_index'));
    }

    // Home page.
    function indexAction() {
        $this->em = $this->getDoctrine()->getManager();
        $userBrowser = new ClientBrowser();
        $browserName = $userBrowser->Name;
        $browserVers = $userBrowser->Version;
        $userIp = new GetUserIp();
        $currentIp = $userIp->get_user_ip();
        

        $userHits = $this->em->getRepository('BundleProjectBundle:UsersIp')
                ->getUserHits($currentIp);
        $allTimeUsers = $this->em->getRepository('BundleProjectBundle:UsersIp')
                ->getTotalUniqueUsers();

        return $this->render('BundleProjectBundle:Page:index.html.twig', array(
                    'userIp' => $currentIp,
                    'userSiteHits' => $userHits,
                    'browserName' => $browserName,
                    'browserVers' => $browserVers,
                    'allTimeUsers' => $allTimeUsers
        ));
    }

    // About page.
    function aboutAction() {
        $userIp = new GetUserIp();
        $currentIp = $userIp->get_user_ip();
        $this->em = $this->getDoctrine()->getManager();    
        // check if the user already voted
        $isUser = $this->em->getRepository('BundleProjectBundle:UsersIp')
                ->isUser($currentIp); // return true or false

        // get the vote results
        //get content of poll_result.txt
        $filename = "bundles/bundleproject/txt/poll_result.txt";
        $content = file($filename);

        //put content in array
        $array = explode("||", $content[0]);
        $yes = $array[0];
        $ok = $array[1];
        $notReally = $array[2];
        $no = $array[3];
        $total = $array[4];
        
        //if the user already voted
        if ($isUser) {
            return $this->render("BundleProjectBundle:About:about.html.twig", array(
                        'bool' => true,
                        'yes' => $yes,
                        'ok' => $ok,
                        'notReally' => $notReally,
                        'no' => $no,
                        'totalVotes' => $total
            ));
        }
        return $this->render("BundleProjectBundle:About:about.html.twig");
    }
}

?>
