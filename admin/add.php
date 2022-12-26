<?php
include "config.php";

// Check user login or not
if (!isset($_SESSION['uname'])) {
    header('Location: index.php');
}

// logout
if (isset($_POST['but_logout'])) {
    session_destroy();
    header('Location: index.php');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin Dashboard</title>
    <link rel="icon" type="image/png" href="../img/logo.png">
    <link rel="stylesheet" href="../style/styles.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.22/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<body>

    <?php
    $theaterNo = mysqli_num_rows(mysqli_query($con, "SELECT * FROM theater_show"));
    $moviesNo = mysqli_num_rows(mysqli_query($con, "SELECT * FROM add_movie"));
    $bookingNo = mysqli_num_rows(mysqli_query($con, "SELECT * FROM customers"));
    $userNo = mysqli_num_rows(mysqli_query($con, "SELECT * FROM user"));
    ?>
    <?php include('header.php'); ?>

    <div class="admin-container">

        <?php include('sidebar.php'); ?>
        <div class="admin-section admin-section2">
            <div class="admin-section-column">


                <div class="admin-section-panel admin-section-panel2">
                    <div class="admin-panel-section-header">
                        <h2>Theater</h2>
                        <i class="fas fa-film" style="background-color: #4547cf"></i>
                    </div>
                    <form action="" method="POST">
                        <input placeholder="Show" type="text" name="show" required>
                        <input placeholder="Theater" type="text" name="theater" required>
                        <button type="submit" value="submit" name="submit" class="form-btn">Add Theater</button>

                        <?php

                        $myquery1 = "SELECT MAX(id) FROM theater_show";
                        $kq1 = mysqli_query($con,$myquery1);
                        $row691 = mysqli_fetch_array($kq1);
                        $newid1 = $row691[0] + 1;



                        if (isset($_POST['submit'])) {
                            $insert_query = "INSERT INTO 
                            `theater_show` (`id`, `show`, `theater`)
                            VALUES ('$newid1', 
                                '" . $_POST["show"] . "',
                                '" . $_POST["theater"] . "')";
                            $rs= mysqli_query($con, $insert_query);
                            if ($rs) {
                                echo "<script>alert('Sussessfully Submitted');
                                    indow.location.href='addmovie.php';</script>";
                        }
                        }
                        ?>
                    </form>
                </div>
                <div class="admin-section-panel admin-section-panel2">
                    <div class="admin-panel-section-header">
                        <h2>Recent Movies</h2>
                        <i class="fas fa-film" style="background-color: #4547cf"></i>
                    </div>

                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <tr>
                            <th>ID</th>
                            <th>Show</th>
                            <th>Theater</th>
                        </tr>
                        <tbody>
                            <?php
                            $host = "localhost"; /* Host name */
                            $user = "root"; /* User */
                            $password = ""; /* Password */
                            $dbname = "moviebook"; /* Database name */

                            $con = mysqli_connect('localhost','root','','moviebook');
                            $select = "SELECT * FROM `theater_show`";
                            $run = mysqli_query($con, $select);
                            while ($row = mysqli_fetch_array($run)) {
                                $ID = $row['id'];
                                $title = $row['show'];
                                $genere = $row['theater'];
                            ?>
                                <tr align="center">
                                    <td><?php echo $ID; ?></td>
                                    <td><?php echo $title; ?></td>
                                    <td><?php echo $genere; ?></td>
                                    <!--<td><?php echo  "<a href='deletetheater.php?id=" . $row['id'] . "'>delete</a>"; ?></td>-->
                                    <td><button value="Book Now!" type="submit" onclick="" type="button" class="btn btn-danger"><?php echo  "<a href='deletetheater.php?id=" . $row['id'] . "'>delete</a>"; ?></button></td>
                                </tr>
                            <?php }
                            ?>
                        </tbody>

                    </table>
                </div>
            </div>

        </div>
    </div>

    <script src="../scripts/jquery-3.3.1.min.js "></script>
    <script src="../scripts/owl.carousel.min.js "></script>
    <script src="../scripts/script.js "></script>
</body>

</html>