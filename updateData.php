<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Database connection
    $conn = new mysqli('localhost', 'root', '', 'game_dim');

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Retrieve form data
    $id = $_POST['id'];
    $gameName = $_POST['gameName'];
    $date = $_POST['date'];
    $ageReq = $_POST['ageReq'];
    $price = $_POST['price'];
    $dlc = $_POST['dlc'];

    // Update query
    $sql = "UPDATE games_table SET 
            game_name = ?, 
            release_date = ?, 
            required_age = ?, 
            price = ?, 
            discount_dlc_count = ? 
            WHERE id = ?";

    // Prepare and bind
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssidsi", $gameName, $date, $ageReq, $price, $dlc, $id);

    // Execute and check result
    if ($stmt->execute()) {
        echo "Record updated successfully!";
    } else {
        echo "Error updating record: " . $conn->error;
    }

    // Close connection
    $stmt->close();
    $conn->close();
}
?>