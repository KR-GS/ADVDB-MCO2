<?php
    include "database.php";

    $sql = "Select * from game_dim limit 10";
    $data = $conn->query($sql);

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
