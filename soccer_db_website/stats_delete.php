<?php
    include 'dbconnection.php';

    if(isset($_POST['delete'])){
        $lastName = $_POST['lastName'];

        $sql_delete = "DELETE FROM stats WHERE lastName='$lastName'";

        if(mysqli_query($con, $sql_delete)){
            header('location: http://localhost/db_website/stats.php');
            
        }else{
            echo 'Error!';
            
        }

    }

?>