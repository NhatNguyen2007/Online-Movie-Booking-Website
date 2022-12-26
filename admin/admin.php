<?php
include "config.php";

// Check user login or not
if (!isset($_SESSION['uname'])) {
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
                <div class="admin-section-panel admin-section-stats">
                <div class="admin-section-stats-panel">
                        <i class="fa fa-ticket-alt" style="background-color: #cf4545"></i>
                        <h2 style="color: #cf4545"><?php echo $bookingNo ?></h2>
                        <h3>Bookings</h3>
                    </div>
                    <div class="admin-section-stats-panel">
                        <i class="fas fa-film" style="background-color: #4547cf"></i>
                        <h2 style="color: #4547cf"><?php echo $moviesNo ?></h2>
                        <h3>Movies</h3>
                    </div>
                    <div class="admin-section-stats-panel">
                        <i class="fas fa-chalkboard" style="background-color: #000000"></i>
                        <!--<i class="fas fa-ticket-alt"></i>-->
                        <h2 style="color: #bb3c95"><?php echo $theaterNo ?></h2>
                        <h3>Theater</h3>
                    </div>
                    <div class="admin-section-stats-panel" style="border: none">
                        <i class="fas fa-users" style="background-color: #3cbb6c"></i>
                        <h2 style="color: #3cbb6c"><?php echo $userNo    ?></h2>
                        <h3>Users</h3>
                    </div>
                </div>
                <div class="admin-section-panel admin-section-panel1">
                    <div class="admin-panel-section-header">
                        <h2>Recent Bookings</h2>
                        <i class="fas fa-ticket-alt" style="background-color: #cf4545"></i>
                    </div>
                    <div class="admin-panel-section-content">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <tr>
                                <th>User ID</th>
                                <th>Movie</th>
                                <th>Show time</th>
                                <th>Seat</th>
                                <th>Total seat</th>
                                <th>Price</th>
                                <th>Paymen date</th>
                                <th>Booking date</th>
                                <th>Card name </th>
                                <th>Card number </th>
                                <th>Ex date</th>
                                <th>Cvv</th>
                                <th>Customer ID</th>
                            </tr>
                            <tbody>
                                <?php

                                $select = "SELECT * FROM `customers`";
                                $run = mysqli_query($con, $select);
                                while ($row = mysqli_fetch_array($run)) {
                                    $userID = $row['uid'];
                                    $movieName = $row['movie'];
                                    $showTime = $row['show_time'];
                                    $Seat = $row['seat'];
                                    $totalSeat = $row['totalseat'];
                                    $Price = $row['price'];
                                    $paymentPrice = $row['payment_date'];
                                    $bookingDate = $row['booking_date'];
                                    $cardName = $row['card_name'];
                                    $cardNumber = $row['card_number'];
                                    $exDate = $row['ex_date'];
                                    $Cvv = $row['cvv'];
                                    $customerID = $row['custemer_id'];

                                ?>
                                    <tr align="center">
                                        <td><?php echo $userID; ?></td>
                                        <td><?php echo $movieName; ?></td>
                                        <td><?php echo $showTime; ?></td>
                                        <td><?php echo $Seat; ?></td>
                                        <td><?php echo $totalSeat; ?></td>
                                        <td><?php echo $Price; ?></td>
                                        <td><?php echo $paymentPrice; ?></td>
                                        <td><?php echo $bookingDate; ?></td>
                                        <td><?php echo $cardName; ?></td>
                                        <td><?php echo $cardNumber; ?></td>
                                        <td><?php echo $exDate; ?></td>
                                        <td><?php echo $Cvv; ?></td>
                                        <td><?php echo $customerID; ?></td>
                                    </tr>

                                <?php }
                                ?>
                            </tbody>

                        </table>
                    </div>
                </div>

            </div>

        </div>
    </div>

    <script src="../scripts/jquery-3.3.1.min.js "></script>
    <script src="../scripts/owl.carousel.min.js "></script>
    <script src="../scripts/script.js "></script>
</body>

</html>