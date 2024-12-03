<?php

    $db_mainserver = "ccscloud.dlsu.edu.ph:20182";
    $db_server1 = "ccscloud.dlsu.edu.ph:20192";
    $db_server2 = "ccscloud.dlsu.edu.ph:20202";

    $db_mainname = "SteamGames";
    $db_name1 = "Less2010";
    $db_name2 = "After2010";
    

    $db_user = "username";
    $db_pass = "password";

    $conn = "";

    //$conn = new mysqli($db_server, $db_user, $db_pass, $db_name);
    if($_SERVER["REQUEST_METHOD"] == "GET"){
        if(isset($_GET["global"])){
            try{
                $conn = new mysqli($db_mainserver, $db_user, $db_pass, $db_mainname);
                //echo "Connection success!";
            }
            catch(mysqli_sql_exception){
                echo "Could not connect to the main server!";
            }
        }else if(isset($_GET["server1"])){
            try{
                $conn = new mysqli($db_server1, $db_user, $db_pass, $db_name1);
                //echo "Connection success!";
            }
            catch(mysqli_sql_exception){
                echo "Server 1 is down!";
            }
        }else if(isset($_GET["server2"])){
            try{
                $conn = new mysqli($db_mainserver, $db_user, $db_pass, $db_mainname);
                //echo "Connection success!";
            }
            catch(mysqli_sql_exception){
                echo "Server 2 is down!";
            }
        }else{
            $conn="";
        }
    }
    
    
    header("Location: ../main.php");
?>