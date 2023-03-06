<?php 
    include 'dbconnection.php';

    if($_POST){
    $leagueName = $_POST['leagueName'];
    $country = $_POST['country'];
    


    $sql_insert = "INSERT INTO leagues (name, country)
    VALUES ('$leagueName', '$country')";
    if (mysqli_query($con, $sql_insert)) {
        header('Location: http://localhost/db_website/leagues.php');
      } else {
        echo "Error: " . $sql_insert . "<br>" . mysqli_error($con);
      }
    }
    
   
?>  