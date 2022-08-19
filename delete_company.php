<?php
 include('connection.php');
 session_start();
 
    $l = $_GET['role'];
 
    $sql = "DELETE FROM company WHERE role = '$l'";
 
    if (mysqli_query($db, $sql)) {
 
        echo "Record deleted successfully";
 
    } else {
     
        echo "Error deleting record: " . mysqli_error($db);
    }
    mysqli_close($db);
?>