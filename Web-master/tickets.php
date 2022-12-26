<?php
    session_start();
    if (!isset($_SESSION['uname'])) {
    header("location:index.php");
    }
?>
 <a href="logout.php"><font color="blue">Log Out</font></a><br>
  <a href="index.php"><font color="blue">Back To Home</font></a>
  <!DOCTYPE html>
  <html>
  <head>
  	<meta charset="utf-8">
  	<title>Your Ticket</title>

    <?php
        include "Database.php";
        require_once "Gmail/sendmail.php";
        $result = mysqli_query($conn,"SELECT c.movie,c.booking_date,c.show_time,c.seat,c.totalseat,c.price,c.payment_date,c.custemer_id,u.username,u.email,u.mobile,u.city,t.theater FROM customers c INNER JOIN user u on c.uid=u.id INNER JOIN theater_show t on c.show_time=t.show WHERE custemer_id = '".$_SESSION['custemer_id']."'");
        $row = mysqli_fetch_array($result);
        $mailer = new Mailer();
        $mailer->seat_booking_email($row['custemer_id'], $row['payment_date'], $row['movie'], $row['username'], $row['city'], $row['email'], $row['mobile'], $row['payment_date'], $row['price'], $row['theater'], $row['booking_date'], $row['show_time'], $row['seat'], $row['totalseat']);
    ?>

  </head>
  <body>
  <center><font color="#000080"><h1>Congratulation Your Seats Have Been Reserved</h1></font>
  	<a href="ticket_show.php" target="_blank"><font color="blue"><h3>Take Your Ticket</h3></center></font></a>
  </body>
  </html>