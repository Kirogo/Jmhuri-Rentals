<!DOCTYPE html>
<html>
<head>
  <title>Booking Confirmation</title>
  <link rel="stylesheet" type="text/css" href="assets/css/bkin.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
</head>
<body>
  <div class="container1">
    <h1>Booking Confirmation</h1>

    <?php
    $name = $_POST['name'];
    $service = $_POST['service'];
    $time = $_POST['time'];

    // Associate the service with its price and mechanic
    $services = [
      'diagnostic' => [
        'price' => 50,
        'mechanic' => 'John Kimani',
        'icon' => 'fa-wrench'
      ],
      'engine' => [
        'price' => 100,
        'mechanic' => 'Charles Mugo',
        'icon' => 'fa-cogs'
      ],
      'tire' => [
        'price' => 150,
        'mechanic' => 'David Kivuti',
        'icon' => 'fa-car'
      ],
      'oil' => [
        'price' => 30,
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
        <div class="icon"><i class="fas <?php echo $icon; ?>"></i></div>
        <div class="booking-details">
          <h2>Booking Information</h2>
          <p><strong>Name:</strong> <?php echo $name; ?></p>
          <p><strong>Service:</strong> <?php echo ucfirst($service); ?></p>
          <p><strong>Time:</strong> <?php echo date('Y-m-d H:i', strtotime($time)); ?></p>
          <p><strong>Mechanic:</strong> <?php echo $mechanic; ?></p>
          <p><strong>Price:</strong> $<?php echo $price; ?></p>
        </div>
      </div>
      
      <?php
    } else {
      echo "<p>Invalid service selected.</p>";
    }
    ?>
  </div>
</body>
</html>
