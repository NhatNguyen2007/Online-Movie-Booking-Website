<?php 
    $id = $_GET['id'];
    include "config.php";

    $sql = "DELETE FROM theater_show WHERE id = '$id'"; 

    if ($con->query($sql) === TRUE) {
        header('Location: add.php');
        exit;
    } else {
        echo "Error deleting record: " . $con->error;
    }
?>