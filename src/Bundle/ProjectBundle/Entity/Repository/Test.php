<?php

$type = "";
$url  = "";
$token = "";
function addStores($t) {
        global $type,$url;
        $type = $t;
        
        $url = "https://maps.googleapis.com/maps/api/place/nearbysearch/xml?location=46.7667,23.6&radius=5000&types=" . $type . "&sensor=false&key=AIzaSyD9d7n2e6NlRr1tsq1yTbK-sTmYhhepan8";
        addStoresByUrl($url);
    }

// Add store by url method
function addStoresByUrl($urll) {
    global $type;
    global $url;
    mysql_connect("localhost","root","root");
    mysql_select_db("db2013");
    
    //$url = "https://maps.googleapis.com/maps/api/place/nearbysearch/xml?location=46.7667,23.6&radius=5000&types=" . $typee . "&sensor=false&key=AIzaSyD9d7n2e6NlRr1tsq1yTbK-sTmYhhepan8";
    $stores = simplexml_load_file($urll);
    $storeItems = $stores->result;
    $pageToken = $stores->next_page_token;

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
            $refId = $item->id;
//            if ($this->getCurrentId($refId)) {
//                continue; // jump to the next id! getCurrentId - return true
//            } else {
//                $refId = $item->id; // id not in the db
//            }
//                if (in_array($refId, $idsInDb)) {
//                    continue;
//                } else {
//                    $refId = $item->id;
//                }
            echo $name = $item->name ."\r\n";
            
            $vicinity = $item->vicinity;
            $rating = $item->rating;
            $icon = $item->icon;
            $lat = $loc->lat;
            $lng = $loc->lng;

            $sqlQuery = "INSERT INTO store values(
            '',
            '".$name."',    
            '".$vicinity."',    
            '".$type."',    
            '".$lat."',    
            '".$lng."',    
            '".$rating."',    
            '".$icon."',    
            '".$imgRef."',    
            '".$refId."',
            0
            )";
            //run
//            mysql_query($sqlQuery);
            
        }
    }
    //echo "URL \r\n";
    //echo $url ."\r\n";
    //echo "TOKEN \r\n";
    $pageToken[0] ."\r\n";
    //exit();
    if ($pageToken[0] != "") {
        echo "WITH TOKEN \r\n";
        echo $url = "https://maps.googleapis.com/maps/api/place/nearbysearch/xml?location=46.7667,23.6&radius=5000&types=" . $type . "&sensor=false&key=AIzaSyD9d7n2e6NlRr1tsq1yTbK-sTmYhhepan8&pagetoken=" . $pageToken[0] ."\r\n";

        //echo $nextToken ."<br />";
        sleep(2);
        addStoresByUrl($url);
    } else {
        echo "DONE !";
    }
}

?>