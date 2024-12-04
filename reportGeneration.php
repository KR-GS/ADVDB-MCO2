<?php
    include "database.php";

    //$conn = $_GET['conn'];
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $reportOption = $_POST["reportGenerate"];

        if($reportOption=="gameNo"){
            $sql = "SELECT YEAR(release_date) AS release_year, COUNT(*) AS games_count FROM game_dim WHERE release_date IS NOT NULL GROUP BY release_year ORDER BY release_year;";
            $header1 = "games_count"; //input name of table header for year
            $header2 = "release_year";
            $reportName = "Number of games per year";
        }else if($reportOption=="gameNo"){
            $sql = "SELECT COUNT(*) AS age_count, YEAR (release_date) AS release_year FROM game_dim WHERE age > =17 GROUP BY release_year, ORDER BY release_year";
            $header1 = "age_count"; //input name of table header for year
            $header2 = "release_year";
            $reportName = "Number of games for 17 above per year";
        }
        
        if($conn){
            $data = mysqli_query($conn, $sql);

            echo "<h3>".$reportName."</h3>
                    <table>
                    <tr>
                        <th>Number of Games Released</th>
                        <th>Year</th>
                    </tr>";
            if ($data-> num_rows > 0){
                while ($row = $data-> fetch_assoc()) {
                    echo "<tr><td>".$row[$header1].
                            "</td><td>".$row[$header2].
                            "</td></tr>";
                }
                echo "</table><br><br>";
            }
        }
            
    }
    echo "<a href='main.php'>Return to Main Page</a>";
    