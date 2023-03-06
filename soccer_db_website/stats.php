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
                    <li><a class="active" href="http://localhost/db_website/stats.php">Player Stats</a></li>
                    <li><a href="http://localhost/db_website/leagues.php">Leagues</a></li>
                    <li><a href="http://localhost/db_website/standings.php">Standings</a></li>
                    <li><a href="http://localhost/db_website/clubs.php">Clubs</a></li>
                    <li><a href="http://localhost/db_website/stadiums.php">Stadiums</a></li>
                </ul>
            </div>

            <center><h1>Stats</h1><center>

        <table>
            <tr>
                <th>FirstName</th>
                <th>LastName</th>
                <th>MatchesPlayed</th>
                <th>Goals</th>
                <th>Assists</th>
                <th>YellowCards</th>
                <th>RedCards</th>
            </tr>
        
        <div id=sqltable>
        <?php
            $sql = 'SELECT * FROM stats;'; 
            $result = mysqli_query($con, $sql);
            $resultCheck = mysqli_num_rows($result);

            if($resultCheck > 0){
                while($row = mysqli_fetch_assoc($result)){
                    echo 
                    '<tr><td>' . $row['firstName'] . '</td><td>' . 
                    $row['lastName'] . '</td><td>' . 
                    $row['matchesPlayed'] . '</td><td>' . 
                    $row['goals'] . '</td><td>' . 
                    $row['assists'] . '</td><td>' . 
                    $row['yellowCards'] . '</td><td>' . 
                    $row['redCards'] . '</td></tr>';

                }
            }
        ?>
        <tr>
                    <td><form action='stats_delete.php' method='POST'>
                        <input type='text' placeholder='last name' name='lastName'> 
                        <input type='submit' value='Delete' name='delete'>

                    </form></td>
        </table>
        </div>
        <div id='insert'>
            <table>
            <form action='stats_insert.php' method='POST'>
                <tr>
                    <th>First Name</th>
                    <td><input type='text' placeholder='first name' name='firstName'></td>
                </tr>
                <tr>
                    <th>Last Name</th>
                    <td><input type='text' placeholder='last name' name='lastName'></td>
                </tr>
                <tr>
                    <th>Matches Played</th>
                    <td><input type='text' placeholder='matches played' name='matchesPlayed'></td>
                </tr>
                <tr>
                    <th>Goals</th>
                    <td><input type='text' placeholder='goals' name='goals'></td>
                </tr>
                <tr>
                    <th>Assists</th>
                    <td><input type='text' placeholder='assists' name='assists'></td>
                </tr>
                <tr>
                    <th>Yellow Cards</th>
                    <td><input type='text' placeholder='yellow cards' name='yellowCards'></td>
                </tr>
                <tr>
                    <th>Red Cards</th>
                    <td><input type='text' placeholder='red cards' name='redCards'></td>
                </tr>
                <tr>
                    <td><button type='submit'>Submit</button></td>
                </tr>
            </form>
        </table>
            <div>
    </body>

</html>