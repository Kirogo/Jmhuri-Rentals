<?php

include 'header.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Jmhuri Rentals</title>
  <link rel="icon" type="image/x-icon" href="assets/img/jmhcar.png" />
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons 
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon"> -->

  <!-- Google Fonts -->
  <link
    href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
    rel="stylesheet">

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
  <link href="assets/css/bkin.css" rel="stylesheet">


</head>

<body>

  <!-- ======= Header ======= -->
  <!-- ======= Why Choose Us Section ======= -->
  <section id="faq" class="faq section-bg">
    <div class="container">

      <div class="section-title" style="margin-top: 10px;">
        <h2>Car Serices Booking</h2>
        <h5><i></i></h5>
      </div>

      <div class="booking-card">
        <style>
          .card {
            width: 600px;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 5px;
          }

          .control-label {
            margin-bottom: 5px;
          }

          .form-control {
            width: 100%;
            padding: 5px;
          }

          .btn-primary {
            width: 100%;
            padding: 10px;
            background-color: #007bff;
            color: #fff;
            border: none;
            cursor: pointer;
          }

          .btn-primary:hover {
            background-color: #0056b3;
          }
        </style>
        <form action="report.php" class="form-horizontal card" method="POST" style="margin-top: 15px;">
          <div class="form-group">
            <label class="control-label" for="name">Name:</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="Enter your name">
          </div>

          <div class="form-group" style="margin-top: 15px;">
            <label class="control-label" for="service">Select Service:</label>
            <select id="service" name="service" required>
              <option value="">-- Select Service --</option>
              <option value="diagnostic">Diagnostic Test</option>
              <option value="engine">Engine Testing</option>
              <option value="tires">Tire Replacement</option>
              <option value="oil">Oil Changing</option>
            </select>
          </div>

          <div class="form-group" style="margin-top: 15px;">
            <label class="control-label" for="time">Select Time:</label>
            <input type="datetime-local" class="form-control" id="time" name="time" required>
          </div>

          <div class="form-group" style="margin-top: 35px; margin-bottom: 35px;">
            <input class="btn btn-primary" type="submit" value="Book Now">
          </div>
        </form>

      </div>

    </div>
  </section>


  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="container d-md-flex py-4">

      <div class="me-md-auto text-center text-md-start">
        <div class="credits">
          Designed by <a href=" ">Kirogo M</a>
        </div>
        <div class="copyright">
          &copy; Copyright. All Rights Reserved
        </div>

      </div>
      <div class="social-links text-center text-md-right pt-3 pt-md-0">
        <a href="" class="twitter"><i class="bx bxl-twitter"></i></a>
        <a href="" class="facebook"><i class="bx bxl-facebook"></i></a>
        <a href="" class="instagram"><i class="bx bxl-instagram"></i></a>
        <a href="" class="linkedin"><i class="bx bxl-linkedin"></i></a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
      class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>