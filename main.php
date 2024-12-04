<!DOCTYPE html>
<?php
    include "database.php";




?>
<html>
    <body>
        <div class = "changeServer">
            <form action="#" method="GET">
                <button type="submit" name="global" value="global"> Main Server </button>
                <button type="submit" name="server1" value="server1">Server 1</button>
                <button type="submit" name="server2" value="server2">Server 2</button>
            </form>
        </div>
        <br>

        <div class = "inputData">
            <h3>New Game Entry</h3>
            <form id="input" action="inputData.php" method="post">
                <label for="id">Game ID: </label>
                <input type="text" name="id"><br>
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
                <button type="submit" name="insert">Submit</button>
            </form>
        </div>
        <!-- <br><br>
        <div class = "searchData">
            <form id="search" action="displayTable.php">
                <label for="gameName">Search Existing Game: </label>
                <input type="text" name="gameName">
                <input type="submit" value="submit">
            </form>
        </div> -->
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