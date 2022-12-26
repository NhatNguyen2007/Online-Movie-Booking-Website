<?php 
    $id = $_GET['id'];
    include "config.php";

    $sql = "DELETE FROM createmovie WHERE id = $id"; 

    if ($con->query($sql) === TRUE) {
        header('Location: addmovie.php');
        exit;
    } else {
        echo "Error deleting record: " . $con->error;
    }
?>