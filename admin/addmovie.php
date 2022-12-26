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
                        <h2>Movies</h2>
                        <i class="fas fa-film" style="background-color: #4547cf"></i>
                    </div>
                    <form action="" method="POST">
                        <div>
                        <input placeholder="movie_name" type="text" name="movie_name" required>
                        <input placeholder="directer" type="text" name="directer" required>
                        <input placeholder="release_date" type="date" name="release_date" required>
                        <input placeholder="categroy" type="text" name="categroy" required>
                        <input placeholder="language" type="text" name="language" required>
                        <input placeholder="you_tube_link" type="text" name="you_tube_link" required>
                        <input placeholder="show" type="text" name="show" required>
                        <input placeholder="action" type="text"  name="action" required>
                        <input placeholder="image" type="text" name="image" required>
                        <input placeholder="status" type="text" name="status" class="form-btn1" required><br />
                        </div>
                        
                        <button type="submit" value="submit" name="submit" class="form-btn">Add Movie</button>

                        <?php

                        $myquery = "SELECT MAX(id) FROM add_movie";
                        $kq = mysqli_query($con,$myquery);
                        $row69 = mysqli_fetch_array($kq);
                        $newid = $row69[0] + 1;



                        if (isset($_POST['submit'])) {
                            $insert_query = "INSERT INTO 
                            `add_movie` (`id`, `movie_name`, `directer`, `release_date`, `categroy`, `language`, `you_tube_link`, `show`, `action`, `decription`, `image`, `status`)
                            VALUES ('$newid', 
                                '" . $_POST['movie_name'] . "', 
                                '" . $_POST["directer"] . "', 
                                '" . $_POST["release_date"] . "',
                                '" . $_POST["categroy"] . "',
                                '" . $_POST["language"] . "',
                                '" . $_POST["you_tube_link"] . "',
                                '" . $_POST["show"] . "',
                                '" . $_POST["action"] . "',
                                '" . $_POST["image"] . "',
                                '" . $_POST["image"] . "',
                                '" . $_POST["status"] . "')";
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
                            <th>Title</th>
                            <th>Genre</th>
                            <th>Release date</th>
                            <th>Director</th>
                            <th>Operation</th>
                            
                        </tr>
                        <tbody>
                            <?php
                            $host = "localhost"; /* Host name */
                            $user = "root"; /* User */
                            $password = ""; /* Password */
                            $dbname = "moviebook"; /* Database name */

                            $con = mysqli_connect('localhost','root','','moviebook');
                            $select = "SELECT * FROM `add_movie`";
                            $run = mysqli_query($con, $select);
                            while ($row = mysqli_fetch_array($run)) {
                                $ID = $row['id'];
                                $title = $row['movie_name'];
                                $genere = $row['categroy'];
                                $releasedate = $row['release_date'];
                                $movieactor = $row['language'];
                            ?>
                                <tr align="center">
                                    <td><?php echo $ID; ?></td>
                                    <td><?php echo $title; ?></td>
                                    <td><?php echo $genere; ?></td>
                                    <td><?php echo $releasedate; ?></td>
                                    <td><?php echo $movieactor; ?></td>
                                    <!--<td><?php echo  "<a href='deletemovie.php?id=" . $row['movieID'] . "'>delete</a>"; ?></td>-->
                                    <td><button value="Book Now!" type="submit" onclick="" type="button" class="btn btn-danger"><?php echo  "<a href='deletemovie.php?id=" . $row['id'] . "'>delete</a>"; ?></button></td>
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