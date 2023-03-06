<?php
    include 'dbconnection.php';

    if(isset($_POST['delete'])){
        $stadiumName = $_POST['stadiumName'];

        $sql_delete = "DELETE FROM stadiums WHERE name='$stadiumName'";

        if(mysqli_query($con, $sql_delete)){
            header('location: http://localhost/db_website/stadiums.php');
            
        }else{
            echo 'Error!';
            
        }

    }

?>