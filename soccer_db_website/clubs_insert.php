<?php 
    include 'dbconnection.php';

    if($_POST){
    $clubName = $_POST['clubName'];
    $city = $_POST['city'];
    $country = $_POST['country'];
    $yearEstablished = $_POST['yearEstablished'];

    $sql_insert = "INSERT INTO clubs (clubName, city, country, yearEstablished) 
    VALUES ('$clubName', '$city', '$country', '$yearEstablished')";
    if (mysqli_query($con, $sql_insert)) {
        header('Location: http://localhost/db_website/clubs.php');
      } else {
        echo "Error: " . $sql_insert . "<br>" . mysqli_error($con);
      }
    }
    
   
?>  