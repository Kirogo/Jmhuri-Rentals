<?php
session_start();

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Jmhuri Rentals: Quality Cars on Hire</title>
  <link rel="icon" type="image/x-icon" href="assets/img/jmhcar.png" />
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons 
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon"> -->

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">


</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center justify-content-between">

      <h1 class="logo">
        <img src="assets/img/jmhuri_1.png" alt="">
        <a href="index.php"></a>
      </h1>


      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link active" href="index.php">Home</a></li>
          <li><a class="nav-link active" href="index.php#about">About</a></li>
          <li><a class="nav-link active" href="services.php">Services</a></li>
          <li><a class="nav-link active" href="pricing.html">Pricing</a></li>
          <li><a class="nav-link active" href="index.php#contact">Contact</a></li>

          <?php if (isset($_SESSION['username'])) { ?>
            <li><a class="nav-link active" style="font-weight: bold
             ;"><?php echo $_SESSION['username']; ?></a></li>
            <li><a class="nav-link active" href="includes/logout.inc.php">Logout</a></li>
          <?php
          }
          ?>

        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav>
      <!-- .navbar -->

    </div>
  </header>

</body>