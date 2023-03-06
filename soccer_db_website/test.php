<?php
    include 'dbconnection.php';

    $sql = 'SELECT * FROM '$option''; 
                    $result = mysqli_query($con, $sql);
                    $resultCheck = mysqli_num_rows($result);

                    if($resultCheck > 0){
                        while($row = mysqli_fetch_assoc($result)){
                            $count++;
                            echo 
                            '<tr><td>' . $row[''$option''] . '</td><td>' . 
                            $row['firstName'] . '</td><td>' . 
                            $row['lastName'] . '</td><td>' . 
                            $row['height'] . '</td><td>' . 
                            $row['weight'] . '</td><td>' . 
                            $row['nationality'] . '</td><td>' . 
                            $row['clubName'] . '</td></tr>' . '<br>';

                        }
                    }

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
                    <li><a class="active" href="http://localhost/db_website/playertable.php">Top 10 Players</a></li>
                    <li><a href="http://localhost/db_website/stats.php">Player Stats</a></li>
                    <li><a href="http://localhost/db_website/leagues.php">Leagues</a></li>
                    <li><a href="http://localhost/db_website/standings.php">Standings</a></li>
                    <li><a href="http://localhost/db_website/clubs.php">Clubs</a></li>
                    <li><a href="http://localhost/db_website/stadiums.php">Stadiums</a></li>
                    <li><a href="http://localhost/db_website/register.php">Register</a></li>
                    <li><a href="http://localhost/db_website/login.php">Login</a></li> 
                </ul>
            </div>

            <center><h1>Top 10 Players in the World 2022!</h1><center>
        <div id='container'>
            <div id=sqltable>
                <table>
                    
                    <tr>
                        <th>Rank</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Height</th>
                        <th>Weight</th>
                        <th>Nationality</th>
                        <th>Club</th>
                    </tr>
                
                
                <?php
                    $sql = 'SELECT * FROM players;'; 
                    $result = mysqli_query($con, $sql);
                    $resultCheck = mysqli_num_rows($result);

                    /*echo "<table border='3'>
                    <tr>
                    <th>Rank</th>
                    <th>Firstname</th>
                    <th>Lastname</th>
                    <th>Height</th>
                    <th>Weight</th>
                    <th>Nationality</th>
                    <th>Club</th>
                    </tr>";*/

                    if($resultCheck > 0){
                        while($row = mysqli_fetch_assoc($result)){
                            $count++;
                            echo 
                            '<tr><td>' . $row['id'] . '</td><td>' . 
                            $row['firstName'] . '</td><td>' . 
                            $row['lastName'] . '</td><td>' . 
                            $row['height'] . '</td><td>' . 
                            $row['weight'] . '</td><td>' . 
                            $row['nationality'] . '</td><td>' . 
                            $row['clubName'] . '</td></tr>' . '<br>';

                        }
                    }
                ?>
                </table>
            </div>

            <div id='insert'>
            <table>
            <form action='' method='POST'>
                <tr>
                    <th>First Name</th>
                    <td><input type='text' placeholder='first name' name='firstName'></td>
                </tr>
                <tr>
                    <th>Last Name</th>
                    <td><input type='text' placeholder='last name' name='lastName'></td>
                </tr>
                <tr>
                    <th>Height</th>
                    <td><input type='text' placeholder='height' name='height'></td>
                </tr>
                <tr>
                    <th>Weight</th>
                    <td><input type='text' placeholder='weight' name='weight'></td>
                </tr>
                <tr>
                    <th>Nationality</th>
                    <td><input type='text' placeholder='nationality' name='nationality'></td>
                </tr>
                <tr>
                    <th>Club</th>
                    <td><input type='text' placeholder='club' name='clubName'></td>
                </tr>
                <tr>
                    <td><button type='submit'>Submit</button></td>
                </tr>
            </form>
        </table>
            <div>
        </div>

        
    </body>

</html>