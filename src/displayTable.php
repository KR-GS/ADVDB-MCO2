<?php
    include "database.php";

    //$conn = $_GET['conn'];
    $sql = "Select * from game_dim limit 10";
    if($conn){
        $data = mysqli_query($conn, $sql);

        if ($data-> num_rows > 0){
            while ($row = $data-> fetch_assoc()) {
                echo "<tr><td>".$row["app_ID"].
                        "</td><td>".$row["game_name"].
                        "</td><td>".$row["release_date"].
                        "</td><td>".$row["required_age"].
                        "</td><td>".$row["price"].
                        "</td><td>".$row["discount_dlc_count"]."
                        </td><td><a class='btn' href='deletedata.php?id=$row[app_ID]'>Delete</a>
                        </td></tr>";
            }
            echo "</table>";
        }
    }
        