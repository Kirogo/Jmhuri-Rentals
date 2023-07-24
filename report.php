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
    <link href="assets/css/bkin.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">


</head>

<body>

    <!-- ======= Header ======= -->
    <!-- ======= Why Choose Us Section ======= -->
    <section id="faq" class="faq section-bg">
        <div class="container">

            <div class="section-title" style="margin-top: 15px;">
                <h2>Service Booking Confirmation</h2>
            </div>

            <div class="faq-list">
                <ul>
                    <li>
                        <div class="container1">
                        <h1><i>Booking Details</i></h1>

                            <?php
                            $name = $_POST['name'];
                            $service = $_POST['service'];
                            $time = $_POST['time'];

                            // Associate the service with its price and mechanic
                            $services = [
                                'diagnostic' => [
                                    'price' => 6100,
                                    'mechanic' => 'John Kimani',
                                    'icon' => 'fa-wrench'
                                ],
                                'engine' => [
                                    'price' => 7500,
                                    'mechanic' => 'Charles Mugo',
                                    'icon' => 'fa-cogs'
                                ],
                                'tires' => [
                                    'price' => 25000,
                                    'mechanic' => 'David Kivuti',
                                    'icon' => 'fa-car'
                                ],
                                'oil' => [
                                    'price' => 10000,
                                    'mechanic' => 'Bernard Kiprono',
                                    'icon' => 'fa-oil-can'
                                ]
                            ];

                            if (array_key_exists($service, $services)) {
                                $selectedService = $services[$service];
                                $price = $selectedService['price'];
                                $mechanic = $selectedService['mechanic'];
                                $icon = $selectedService['icon'];
                            ?>

                                <div class="booking-card">
                                    <div class="icon" style="margin-right: 80px;"><i class="fas <?php echo $icon; ?>"></i></div>
                                    <div class="booking-details">
                                        
                                        <p><strong>Name:</strong> <?php echo $name; ?></p>
                                        <p><strong>Service:</strong> <?php echo ucfirst($service); ?></p>
                                        <p><strong>Time:</strong> <?php echo date('Y-m-d H:i', strtotime($time)); ?></p>
                                        <p><strong>Mechanic:</strong> <?php echo $mechanic; ?></p>
                                        <p><strong>Price:</strong> Ksh <?php echo $price; ?></p>
                                    </div>
                                </div>

                                <style>
                                    .button-container {
                                        display: flex;
                                        justify-content: space-between;
                                    }
                                </style>

                                <div class="button-container">
                                    <button class="btn btn-success">
                                        <a href="login.php" style="color: white;">Confirm</a>
                                    </button>
                                    <button class="btn btn-danger">
                                        <a href="book.html" style="color: white;">Delete</a>
                                    </button>
                                </div>





                            <?php
                            } else {
                                echo "<p>Invalid service selected.</p>";
                            }
                            ?>
                        </div>
                    </li>


                </ul>
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
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

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