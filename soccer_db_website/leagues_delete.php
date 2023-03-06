<?php
    include 'dbconnection.php';

    if(isset($_POST['delete'])){
        $leagueName = $_POST['leagueName'];

        $sql_delete = "DELETE FROM leagues WHERE name='$leagueName'";

        if(mysqli_query($con, $sql_delete)){
            header('location: http://localhost/db_website/leagues.php');
            
        }else{
            echo 'Error!';
            
        }

    }

?>