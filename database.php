<?php

    $db_server = "localhost:3307";
    $db_user = "root";
    $db_pass = "";
    $db_name = "steamdb";
    $conn = "";

    $conn = new mysqli($db_server, $db_user, $db_pass, $db_name);
    try{
        $conn = mysqli_connect($db_server, $db_user, $db_pass, $db_name);
    }
    catch(mysqli_sql_exception){
        echo "Could not connect!";
    }
?>