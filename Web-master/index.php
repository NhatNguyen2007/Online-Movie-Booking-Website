<?php
  session_start();
?>

<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Male_Fashion Template">
    <meta name="keywords" content="Male_Fashion, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Movie Ticket Booking System</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@300;400;600;700;800;900&display=swap"
    rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.3/css/fontawesome.min.css">


    <!-- Css Styles -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="css/magnific-popup.css" type="text/css">
    <link rel="stylesheet" href="css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="css/slicknav.min.css" type="  text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">    
</head>

<body>


<?php 

  include("header.php");

?>

<div class="container">
   <img src=image/theatre.jpg alt="" class="image-resize" style="width: 100%; height: 400px;">
</div>

<div class="container">
  <h2>Running Movies</h2>
    <div class="row">

  <?php
    include_once 'Database.php';
    $result = mysqli_query($conn,"SELECT * FROM add_movie");

    if (mysqli_num_rows($result) > 0) {
      $i = 0;
      while($row = mysqli_fetch_array($result)) {
        if($row['action']== "running"){
          echo "<div class='col-lg-3 col-md-3 col-sm-6'>
                  <div class='running-movie'>";
            echo "<img src=admin/image/$row[10] alt='' class='image-resize2' style='width: 100%;'>";
            echo "<div class='top-right'>";
              echo "<a data-toggle='modal' data-target='#tailer_modal$row[0]'><img src='img/icon/play-btn.png' width='40' height='40'></a></div>";
                  echo "<h5><b>$row[1]</b></h5>";
                  echo "<h6><center>$row[5]</center></h6>";
              echo "<a href='movie_details.php?pass=$row[0]' class='btn btn-primary'>Book Now</a>";
            echo "</div>
                </div>";

          echo "<div class='modal fade' id='tailer_modal$row[0]' tabindex='-1' role='dialog' aria-labelledby='exampleModalLabel' aria-hidden='true'>";
            echo "<div class='modal-dialog' role='document'>";
              echo "<div class='modal-content'>";
                echo "<embed style='width: 820px; height: 450px;' src='$row[6]'></embed>";
              echo "</div>";
            echo "</div>
                </div>";

        }
      }
    }
  ?>
</div>    
</div>

<div class="container">
    <h2>Upcoming Movies</h2>
    <div class="row">
    <?php
      include_once 'Database.php';
      $result = mysqli_query($conn,"SELECT * FROM add_movie");

      if (mysqli_num_rows($result) > 0) {
        while($row = mysqli_fetch_array($result)) {
          if($row['action']== "upcoming"){
            echo "<div class='image-box'>";
              echo "<div class='col-lg-2 col-md-3 col-sm-6'>";
                echo "<div class='card' style='width: 12rem;'>";
                  echo "<img class='card-img-top image-resize4' src='admin/image/$row[10]' alt='Card image cap'>";
                  echo "<div class='card-body'>";
                    echo "<h5 class='card-title'>$row[1]</h5>";
                    echo "<p class='card-text'>Director: $row[2]</p>";
                  echo "</div>";
                echo "</div>";
              echo "</div>";
            echo "</div>";
          }
        }
      }
    ?>

</div>
</div>



   <?php
   include("footer.php");
   ?>

    <!-- Js Plugins -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.nice-select.min.js"></script>
    <script src="js/jquery.nicescroll.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/jquery.countdown.min.js"></script>
    <script src="js/jquery.slicknav.js"></script>
    <script src="js/mixitup.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/main.js"></script>

</body>
</html>