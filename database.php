<?php

    $db_server = "ccscloud.dlsu.edu.ph:20182";
    $db_user = "username";
    $db_pass = "password";
    $db_name = "Less2010";
    $conn = "";

    //$conn = new mysqli($db_server, $db_user, $db_pass, $db_name);
    try{
        $conn = new mysqli($db_server, $db_user, $db_pass, $db_name);
        echo "Connection success!";
    }
    catch(mysqli_sql_exception){
        echo "Could not connect!";
    }
?>