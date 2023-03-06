<?php 
    include 'dbconnection.php';

    if($_POST){
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $height = $_POST['height'];
    $weight = $_POST['weight'];
    $nationality = $_POST['nationality'];
    $clubName = $_POST['clubName'];


    $sql_insert = "INSERT INTO players (firstName, lastName, height, weight, nationality, clubName)
    VALUES ('$firstName', '$lastName', '$height', '$weight', '$nationality', '$clubName')";
    if (mysqli_query($con, $sql_insert)) {
        header('Location: http://localhost/db_website/playertable.php');
      } else {
        echo "Error: " . $sql_insert . "<br>" . mysqli_error($con);
      }
    }
    
   
?>  
