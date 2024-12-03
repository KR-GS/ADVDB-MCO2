<?php
    include "database.php";

    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $sql = "DELETE from `game_dim` where app_id=$id";
        $conn->query($sql);

        header("Location: ../main.php");
        exit;
    }
    