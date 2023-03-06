<?php
    include 'dbconnection.php';

    if(isset($_POST['delete'])){
        $lastName = $_POST['lastName'];

        $sql_delete = "DELETE FROM players WHERE lastName='$lastName'";

        if(mysqli_query($con, $sql_delete)){
            header('location: http://localhost/db_website/playertable.php');
            
        }else{
            header('location: http://localhost/db_website/playertable.php');
            
        }

    }

?>