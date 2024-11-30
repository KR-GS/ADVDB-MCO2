<?php

    $db_server = "localhost:3307";
    $db_user = "root";
    $db_pass = "";
    $db_name = "steamdb";
    $conn = "";

    $conn = mysqli_connect($db_server, $db_user, $db_pass, $db_name);
    try{
        $conn = mysqli_connect($db_server, $db_user, $db_pass, $db_name);
    }
    catch(mysqli_sql_exception){
        echo "Could not connect!";
    }

    $sql = "Select * from game_dim";
    $data = $conn-> query($sql);

    if ($data-> num_rows > 0){
        while ($row = $data-> fetch_assoc()) {
            echo "<tr><td>".$row["app_ID"].
                    "</td><td>".$row["game_name"].
                    "</td><td>".$row["release_date"].
                    "</td><td>".$row["required_age"].
                    "</td><td>".$row["price"].
                    "</td><td>".$row["discount_dlc_count"]."</td></tr>";
        }
        echo "</table>";
    }
?>