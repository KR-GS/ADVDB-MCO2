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
            <form id="input" action="">
                <label for="gameName">Game: </label>
                <input type="text" id="gameName">
                <input type="submit" value="Submit">
            </form>
        </div>
        <br>
        <div class = "editData">
            <form id="edit" action="">
                <label for="gameName">Search Existing Game: </label>
                <input type="text" id="gameName">
                <label for="releaseYear">Change Release Year: </label>
                <input type="text" id="releaseYear">
                <input type="submit" value="Submit">
            </form>
        </div>
        <div class = "searchData">
            <form id="search" action="">
                <label for="gameName">Search Existing Game: </label>
                <input type="text" id="gameName">
                <input type="submit" value="Submit">
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
                    include("database.php");
                ?>
            </table>
        </div>
    </body>
</html>