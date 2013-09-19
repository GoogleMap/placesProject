<?php

namespace Bundle\ProjectBundle\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;

class InsertPlacesCommand extends Command {

    private $type = "";
    private $url = "";
    private $token = "";

    protected function configure() {
        $this
                ->setName('insert:places')
                ->setDescription('Insert places by type.')
                ->addArgument(
                        'type', InputArgument::OPTIONAL, 'Place type !'
                )
                ->addOption(
                        'yell', null, InputOption::VALUE_NONE, 'If set, the task message will yell in uppercase letters'
                )
        ;
    }

    protected function execute(InputInterface $input, OutputInterface $output) {
        $type = $input->getArgument('type');

        $this->addStores($type);
//        mysql_connect("localhost", "root", "root");
//        mysql_select_db("myproject");
//
//        $run = mysql_query("INSERT INTO users_ip VALUES('" . $type . "')");

//        if ($run) {
//            $text = 'Type ' . $type . ' inserted !';
//        } else {
//            $text = 'Error: ' . mysql_error();
//        }
//
//        if ($input->getOption('yell')) {
//            $text = strtoupper($text);
//        }
        $text = "DONE !";

        $output->writeln($text);
    }

    function addStores($type) {
        $url = "https://maps.googleapis.com/maps/api/place/nearbysearch/xml?location=46.7667,23.6&radius=5000&types=" . $type . "&sensor=false&key=AIzaSyCLRr7MJ5GMGRo0zRCs1azjafkQDIY23jc";
        $this->addStoresByUrl($url,$type);
    }

    function addStoresByUrl($url,$placeType) {
        mysql_connect("localhost", "root", "root");
        mysql_select_db("db2013");

        //$url = "https://maps.googleapis.com/maps/api/place/nearbysearch/xml?location=46.7667,23.6&radius=5000&types=" . $typee . "&sensor=false&key=AIzaSyD9d7n2e6NlRr1tsq1yTbK-sTmYhhepan8";
        $stores = simplexml_load_file($url);
        $storeItems = $stores->result;
        $pageToken = $stores->next_page_token;
        
//        print_r($storeItems);
//        exit();
        // Run the results
        foreach ($storeItems as $item) {
            $geoGeometry = $item->geometry;
            $geoLocation = $geoGeometry->location;
            $photoRef = $item->photo;
            $types = $item->type;

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
                $extId = $item->id;
            if ($this->getCurrentId($extId)) {
                    continue; // jump to the next id! getCurrentId - return true
                } else {
                    $extId = $item->id; // id not in the db
                }
//                if (in_array($refId, $idsInDb)) {
//                    continue;
//                } else {
//                    $refId = $item->id;
//                }
                $name = $item->name . "\r\n";

                $vicinity = $item->vicinity;
                $rating = $item->rating;
                $icon = $item->icon;
                $lat = $loc->lat;
                $lng = $loc->lng;

                $sqlQuery = "INSERT INTO places values(
            '',
            '" . $extId . "',    
            '" . $imgRef . "',    
            '" . $name . "',    
            '" . $vicinity . "',    
            '" . rtrim($type,',') . "',    
            '" . $lat . "',    
            '" . $lng . "',    
            '" . $rating . "',    
            '" . $icon . "',
            0,
            0,
            0
            )";
            //run
            mysql_query($sqlQuery);
            }
        }
        if ($pageToken[0] != "") {
            $url = "https://maps.googleapis.com/maps/api/place/nearbysearch/xml?location=46.7667,23.6&radius=5000&types=" . $placeType . "&sensor=false&key=AIzaSyCLRr7MJ5GMGRo0zRCs1azjafkQDIY23jc&pagetoken=" . $pageToken[0];
            sleep(2);
            $this->addStoresByUrl($url,$placeType);
        }
    }
    private function getCurrentId($extId){
        mysql_connect("localhost","root","root");
        mysql_select_db("db2013");
        $sql = "
        SELECT p.extId FROM places p
        WHERE p.extId = '".$extId."'
        ";
        
        $run = mysql_query($sql);
        if(mysql_num_rows($run)){
            return true;
        } else {
            return false;
        }
        
    }

}