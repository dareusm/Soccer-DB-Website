<?php
    include 'dbconnection.php';

    if(isset($_POST['delete'])){
        $clubName = $_POST['clubName'];

        $sql_delete = "DELETE FROM clubs WHERE clubName='$clubName'";

        if(mysqli_query($con, $sql_delete)){
            header('location: http://localhost/db_website/clubs.php');
            
        }else{
            echo 'Error!';
            
        }

    }

?>