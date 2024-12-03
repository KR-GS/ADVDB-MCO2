<?php
    include "database.php";

    if ($conn instanceof mysqli) {
        echo "Database connection is successful!";
    } else {
        echo "Error: $conn";  // This will display what $conn contains if it's not a valid object
    }

    //echo $row;
    if ($_SERVER["REQUEST_METHOD"] == "POST"){
        $gamename = $_POST["gameName"];
        $date = $_POST["date"];
        $ageReq = $_POST["ageReq"];
        $price = $_POST["price"];
        $dlc = $_POST["dlc"];


        $q = "INSERT INTO `game_dim` (`game_name`, `release_date`, `required_age`, `price` , `discount_dlc_count`) VALUES ('$gamename', '$date', '$ageReq', '$price', '$dlc')";

        $data = mysqli_query($conn, $q);

        header("Location: ../main.php");

        die();
    }