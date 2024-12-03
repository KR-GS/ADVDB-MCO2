<!DOCTYPE html>
<html>
    <body>
        <div class = "changeServer">
            <button type="button" id="global"> Global Server </button>
            <button type="button" id="server1">Server 1</button>
            <button type="button" id="server2">Server 2</button>
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