<?php 
    include 'dbconnection.php';

    if($_POST){
    $stadiumName = $_POST['stadiumName'];
    $club = $_POST['club'];
    $city = $_POST['city'];
    $country = $_POST['country'];
    $yearBuilt = $_POST['yearBuilt'];


    $sql_insert = "INSERT INTO stadiums (clubName, name, city, country, yearBuilt) 
    VALUES ('$club', '$stadiumName', '$city', '$country', '$yearBuilt')";
    if (mysqli_query($con, $sql_insert)) {
        header('Location: http://localhost/db_website/stadiums.php');
      } else {
        echo "Error: " . $sql_insert . "<br>" . mysqli_error($con);
      }
    }
    
   
?>  