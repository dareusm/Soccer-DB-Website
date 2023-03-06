<?php
    include 'dbconnection.php';
?>

<html>

    <head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    </head>

    <body>

    <div id='nav'>
                <ul>
                    <li><a href="http://localhost/db_website/index.php">Home</a></li>
                    <li><a href="http://localhost/db_website/playertable.php">Top 10 Players</a></li>
                    <li><a href="http://localhost/db_website/stats.php">Player Stats</a></li>
                    <li><a class="active" href="http://localhost/db_website/leagues.php">Leagues</a></li>
                    <li><a href="http://localhost/db_website/standings.php">Standings</a></li>
                    <li><a href="http://localhost/db_website/clubs.php">Clubs</a></li>
                    <li><a href="http://localhost/db_website/stadiums.php">Stadiums</a></li>
                </ul>
            </div>

            <center><h1>Leagues</h1><center>

        <table>
            <tr>
                <th>Name</th>
                <th>Country</th>
            </tr>
        
        <div id=sqltable>
        <?php
            $sql = 'SELECT * FROM leagues;'; 
            $result = mysqli_query($con, $sql);
            $resultCheck = mysqli_num_rows($result);


            if($resultCheck > 0){
                while($row = mysqli_fetch_assoc($result)){
                    echo 
                    '<tr><td>' . $row['name'] . '</td><td>' . 
                    $row['country'] . '</td></tr>';

                }
            }
        ?>
        <tr>
                    <td><form action='leagues_delete.php' method='POST'>
                        <input type='text' placeholder='name' name='leagueName'> 
                        <input type='submit' value='Delete' name='delete'>

                    </form></td>
        </table>
        </div>
        </div>
        <div id='insert'>
            <table>
            <form action='leagues_insert.php' method='POST'>
                <tr>
                    <th>League</th>
                    <td><input type='text' placeholder='name' name='leagueName'></td>
                </tr>
                <tr>
                    <th>Country</th>
                    <td><input type='text' placeholder='country' name='country'></td>
                </tr>
                <tr>
                    <td><button type='submit'>Submit</button></td>
                </tr>
            </form>
        </table>
            <div>
    </body>

</html>