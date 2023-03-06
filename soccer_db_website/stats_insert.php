<?php 
    include 'dbconnection.php';

    if($_POST){
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $matchesPlayed = $_POST['matchesPlayed'];
    $goals = $_POST['goals'];
    $assists = $_POST['assists'];
    $yellowCards = $_POST['yellowCards'];
    $redCards = $_POST['redCards']


    $sql_insert = "INSERT INTO stats (firstName, lastName, matchesPlayed, goals, assists, yellowCards, redCards)
    VALUES ('$firstName', '$lastName', '$matchesPlayed', '$goals', '$assists', '$yellowCards', '$redCards')";
    if (mysqli_query($con, $sql_insert)) {
        header('Location: http://localhost/db_website/stats.php');
      } else {
        echo "Error: " . $sql_insert . "<br>" . mysqli_error($con);
      }
    }
    
   
?>  