<?php
include "database.php";

$conn->query("SET SESSION TRANSACTION ISOLATION LEVEL SERIALIZABLE");
if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $gamename = $_POST["gameName"];
    $date = $_POST["date"];
    $ageReq = $_POST["ageReq"];
    $price = $_POST["price"];
    $dlc = $_POST["dlc"];

    $q = "INSERT INTO `game_dim` (`game_name`, `release_date`, `required_age`, `price` , `discount_dlc_count`) VALUES ('$gamename', '$date', '$ageReq', '$price', '$dlc')";

    $conn->query($q);
}