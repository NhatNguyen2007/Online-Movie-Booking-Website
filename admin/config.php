<?php
session_start();
// $host = "localhost"; /* Host name */
// $user = "root"; /* User */
// $password = "123"; /* Password */
// $dbname = "movie"; /* Database name */

// $con = mysqli_connect($host, $user, $password, $dbname);
// // Check connection
// if (!$con) {
//   die("Connection failed: " . mysqli_connect_error());
// }

$con = new mysqli('localhost','root','','moviebook');
    if($con->errno !== 0)
    {
    die("Error: Could not connect to the database. An error ".$con->error." ocurred.");
    }
    $con->set_charset('utf8'); 
?>  