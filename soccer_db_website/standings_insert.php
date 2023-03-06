<?php 
    include 'dbconnection.php';

    if($_POST){
    $year = $_POST['year'];
    $league = $_POST['league'];
    $firstPlace = $_POST['firstPlace'];
    $secondPlace = $_POST['secondPlace'];
    $thirdPlace = $_POST['thirdPlace'];


    $sql_insert = "INSERT INTO season (year, league, firstPlace, secondPlace, thirdPlace) 
    VALUES ('$year', '$league', '$firstPlace', '$secondPlace', '$thirdPlace')";
    if (mysqli_query($con, $sql_insert)) {
        header('Location: http://localhost/db_website/standings.php');
      } else {
        echo "Error: " . $sql_insert . "<br>" . mysqli_error($con);
      }
    }
    
   
?>  