<?php
include "database.php";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve form data
    $id = $_POST['id'];
    $gameName = $_POST['gameName'];
    $date = $_POST['date'];
    $ageReq = $_POST['ageReq'];
    $price = $_POST['price'];
    $dlc = $_POST['dlc'];

    // Update query
    $sql = "UPDATE `game_dim` SET 
            `game_name` = '$gameName', 
            `release_date` = '$date', 
            `required_age` = '$ageReq', 
            `price` = '$price', 
            `discount_dlc_count` = '$dlc' 
            WHERE `app_id` = $id";

    // Execute the query
    if ($conn->query($sql) === TRUE) {
        $_SESSION['message'] = "Record updated successfully!";
    } else {
        $_SESSION['error'] = "Error updating record: " . $conn->error;
    }

    // Redirect back to the main page
    echo "<script>location.href = 'https://advdb-mco2-52k3.onrender.com/index.php';</script>"; 
    exit;
}
?>