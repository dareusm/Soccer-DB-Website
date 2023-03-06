<?php
    include 'dbconnection.php';

    if(isset($_POST['delete'])){
        $leagueName = $_POST['leagueName'];

        $sql_delete = "DELETE FROM season WHERE league='$leagueName'";

        if(mysqli_query($con, $sql_delete)){
            header('location: http://localhost/db_website/standings.php');
            
        }else{
            echo 'Error!';
            
        }

    }

?>