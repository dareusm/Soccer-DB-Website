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
                    <li><a href="http://localhost/db_website/leagues.php">Leagues</a></li>
                    <li><a href="http://localhost/db_website/standings.php">Standings</a></li>
                    <li><a href="http://localhost/db_website/clubs.php">Clubs</a></li>
                    <li><a class="active" href="http://localhost/db_website/stadiums.php">Stadiums</a></li>
                </ul>
            </div>

            <center><h1>Stadiums</h1><center>

        <table>
            <tr>
                <th>Club</th>
                <th>Name</th>
                <th>City</th>
                <th>Country</th>
                <th>Built</th>
            </tr>
        
        <div id=sqltable>
        <?php
            $sql = 'SELECT * FROM stadiums;'; 
            $result = mysqli_query($con, $sql);
            $resultCheck = mysqli_num_rows($result);

            if($resultCheck > 0){
                while($row = mysqli_fetch_assoc($result)){
                    echo 
                    '<tr><td>' . $row['clubName'] . '</td><td>' . 
                    $row['name'] . '</td><td>' . 
                    $row['city'] . '</td><td>' . 
                    $row['country'] . '</td><td>' . 
                    $row['yearBuilt'] . '</td></tr>';

                }
            }
        ?>
        <tr>
                    <td><form action='stadium_delete.php' method='POST'>
                        <input type='text' placeholder='stadium name' name='stadiumName'> 
                        <input type='submit' value='Delete' name='delete'>

                    </form></td>
        </table>
        </div>

        </div>
        <div id='insert'>
            <table>
            <form action='stadiums_insert.php' method='POST'>
                <tr>
                    <th>Stadium</th>
                    <td><input type='text' placeholder='name' name='stadiumName'></td>
                </tr>
                <tr>
                    <th>Club</th>
                    <td><input type='text' placeholder='club' name='club'></td>
                </tr>
                <tr>
                    <th>City</th>
                    <td><input type='text' placeholder='city' name='city'></td>
                </tr>
                <tr>
                    <th>Country</th>
                    <td><input type='text' placeholder='country' name='country'></td>
                </tr>
                <tr>
                    <th>Year Built</th>
                    <td><input type='text' placeholder='year built' name='yearBuilt'></td>
                </tr>
                <tr>
                <tr>
                    <td><button type='submit'>Submit</button></td>
                </tr>
                
            </form>
        </table>
            <div>
    </body>

</html>