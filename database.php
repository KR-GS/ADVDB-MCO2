<?php
    $db_servers = [
        "main" => ["host" => "ccscloud.dlsu.edu.ph:20182", "db" => "SteamGames"],
        "server1" => ["host" => "ccscloud.dlsu.edu.ph:20192", "db" => "Less2010"],
        "server2" => ["host" => "ccscloud.dlsu.edu.ph:20202", "db" => "After2010"]
    ];


    $db_user = "username";
    $db_pass = "password";

    $conn = "";

    $selected_server = "main";
    
    //$conn = new mysqli($db_server, $db_user, $db_pass, $db_name);
    if($_SERVER["REQUEST_METHOD"] == "GET"){
        if(isset($_GET["server1"])){
            $selected_server = "server1";
        // header("Location: ../main.php");
        }else if(isset($_GET["server2"])){
            $selected_server = "server2";
            //header("Location: ../main.php");
        }else{
            $conn="";
        }        
    }

    a:
    $server = $db_servers[$selected_server];

    
    $conn = new mysqli($server["host"], $db_user, $db_pass, $server["db"]);

    if(!$conn){
        if($selected_server=="main"){
            $selected_server=="server1";
            goto a;
            echo "Main server down. Transfering to server 1";
        }else if($selected_server=="server1"){
            $selected_server=="server2";
            goto a;
            echo "Server 1 down. Transfering to server 2";
        }else{
            $selected_server=="main";
            goto a;
            echo "Server 2 down. Transfering to main server";
        }
    }

    //exit();
?>