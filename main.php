<!DOCTYPE html>
<?php
    $db_mainserver = "ccscloud.dlsu.edu.ph:20182";
    $db_server1 = "ccscloud.dlsu.edu.ph:20192";
    $db_server2 = "ccscloud.dlsu.edu.ph:20202";

    $db_mainname = "SteamGames";
    $db_name1 = "Less2010";
    $db_name2 = "After2010";
    

    $db_user = "username";
    $db_pass = "password";

    global $conn;

    //$conn = new mysqli($db_server, $db_user, $db_pass, $db_name);
    if($_SERVER["REQUEST_METHOD"] == "GET"){
        if(isset($_GET["global"])){
            try{
                $conn = new mysqli($db_mainserver, $db_user, $db_pass, $db_mainname);
                echo "Connection to main success!";
            }
            catch(mysqli_sql_exception){
                echo "Could not connect to the main server!";
            }
           // header("Location: ../main.php");
        }else if(isset($_GET["server1"])){
            try{
                $conn = new mysqli($db_server1, $db_user, $db_pass, $db_name1);
                echo "Connection to server 1 success!";
            }
            catch(mysqli_sql_exception){
                echo "Server 1 is down!";
            }
           // header("Location: ../main.php");
        }else if(isset($_GET["server2"])){
            try{
                $conn = new mysqli($db_mainserver, $db_user, $db_pass, $db_mainname);
                echo "Connection to server 2 success!";
            }
            catch(mysqli_sql_exception){
                echo "Server 2 is down!";
            }
            //header("Location: ../main.php");
        }else{
            $conn="";
        }        
    }
?>
<html>
    <body>
        <div class = "changeServer">
            <form action="#" method="GET">
                <button type="submit" name="global" value="global"> Global Server </button>
                <button type="submit" name="server1" value="server1">Server 1</button>
                <button type="submit" name="server2" value="server2">Server 2</button>
            </form>
        </div>
        <br>
        <div class = "inputData">
            <h3>New Game Entry</h3>
            <form id="input" action="inputData.php" method="post">
                <label for="gameName">Game: </label>
                <input type="text" name="gameName"><br>
                <label for="date">Release Date: </label>
                <input type="text" name="date"><br>
                <label for="ageReq">Required Age </label>
                <input type="text" name="ageReq"><br>
                <label for="price">Price: </label>
                <input type="text" name="price"><br>
                <label for="dlc">DLC count on discount: </label>
                <input type="text" name="dlc"><br>
                <button type="submit" name="submit">Submit</button>
            </form>
        </div>
        <br><br>
        <div class = "searchData">
            <form id="search" action="displayTable.php">
                <label for="gameName">Search Existing Game: </label>
                <input type="text" name="gameName">
                <input type="submit" value="submit">
            </form>
        </div>
        <br>
        <br>
        <div class="updateData">
            <h3>Update Game Entry</h3>
            <form id="update" action="updateData.php" method="post">
                <label for="id">Game ID: </label>
                <input type="text" name="id" placeholder="Enter Game ID"><br>
                <label for="gameName">Game Name: </label>
                <input type="text" name="gameName"><br>
                <label for="date">Release Date: </label>
                <input type="text" name="date"><br>
                <label for="ageReq">Required Age: </label>
                <input type="text" name="ageReq"><br>
                <label for="price">Price: </label>
                <input type="text" name="price"><br>
                <label for="dlc">DLC count on discount: </label>
                <input type="text" name="dlc"><br>
                <button type="submit" name="update">Update</button>
            </form>
        </div>
        <br>
        <div class = "displayData">
            <table>
                <tr>
                    <th>ID</th>
                    <th>Game name</th>
                    <th>Release Date</th>
                    <th>Required Age</th>
                    <th>Price</th>
                    <th>Discount DLC Count</th>
                </tr>
                <?php
                    include "displayTable.php";
                ?>
            </table>
        </div>
    </body>
</html>