<?php

    function test() {
        mysql_connect("localhost", "root", "root");
        mysql_select_db("myproject");
        $sql = "INSERT INTO users_ip VALUES('100.100.100')";

        $run = mysql_query($sql);
        if ($run) {
            echo "Inserted !";
        } else {
            echo mysql_error();
        }
    }
    
   

?>
