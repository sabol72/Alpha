<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Service Details</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900&family=Inter:wght@100;200;300;400;500;600;700;800;900&family=Nunito:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="../assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="../assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="../assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="../assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="../assets/css/main.css" rel="stylesheet">

  <style>
    /* Additional CSS styles specific to this page */
    .service-details-page {
      background-color: #fff;
      color: #000;
    }

    .service-box h4,
    .service-title {
      color: #000;
    }

    .services-img {
      max-width: 100%;
      height: auto;
    }

    .service-content {
      display: none;
    }

    .service-content.active-content {
      display: block;
    }

    .service-details-content {
      margin-top: 20px;
    }
  </style>

</head>

<body class="service-details-page">

  <header id="header" class="header d-flex align-items-center sticky-top">
    <div class="container-fluid container-xl position-relative d-flex align-items-center">

      <a href="../Index.php" class="logo d-flex align-items-center me-auto">
        <img src="../assets/img/logo.png" alt="">
      </a>

      <nav id="navmenu" class="navmenu">
        <ul>
          <li><a href="Ac.php#hero" class="">Home</a></li>
          <li><a href="Ac.php#about">About</a></li>
          <li><a href="AC.php#feature">Features</a></li>
          <li><a href="cleaning.php#service">Services</a></li>
          <li><a href="Ac.php#contact">Contact</a></li>
          <li><a href="Ac.php#book"><button type="button" class="btn btn-primary">Book Now</button></a></li>
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>
    </div>
  </header>

  <main class="main">

    <!-- Page Title -->
    <div class="page-title" data-aos="fade">
      <div class="container d-lg-flex justify-content-between align-items-center">
        <h1 class="mb-2 mb-lg-0">Service Details</h1>
        <nav class="breadcrumbs">
          <ol>
            <li><a href="index.php">Home</a></li>
            <li><a href="CLEAN.php">cleaning</a></li>
            <li class="current"> pool cleaning</li>
          </ol>
        </nav>
      </div>
    </div><!-- End Page Title -->

    <!-- Service Details Section -->
    <section id="service-details" class="service-details section">

      <div class="container">

        <div class="row gy-5">

          <!-- Service List Column -->
          <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">

            <div class="service-box">
              <h4>Services List</h4>
              <div class="services-list">
              <a href="deep-cleaning.php" class="service-link "><i class="bi bi-arrow-right-circle"></i><span>Deep Cleaning</span></a>
                <a href="air-duct.php" class="service-link"><i class="bi bi-arrow-right-circle"></i><span>HVAC Air Duct Cleaning</span></a>
                <a href="sofa-steam.php" class="service-link"><i class="bi bi-arrow-right-circle"></i><span>Upholstery Sofa Steam Cleaning</span></a>
                <a href="villa.php" class="service-link"><i class="bi bi-arrow-right-circle"></i><span>Villa & House Cleaning</span></a>
                <a href="tank.php" class="service-link"><i class="bi bi-arrow-right-circle"></i><span>Water Tank Cleaning & Disinfection</span></a>
                <a href="glass-cleaning.php" class="service-link"><i class="bi bi-arrow-right-circle"></i><span>Window Glass Cleaning</span></a>
                <a href="mattress-cleaning.php" class="service-link"><i class="bi bi-arrow-right-circle"></i><span>Mattress Cleaning</span></a>
                <a href="carpet-cleaning.php" class="service-link"><i class="bi bi-arrow-right-circle"></i><span>Carpet Cleaning</span></a>
                <a href="pool-cleaning.php" class="service-link active"><i class="bi bi-arrow-right-circle"></i><span>Pool Cleaning</span></a>
              </div>
            </div><!-- End Services List -->

            <div class="help-box d-flex flex-column justify-content-center align-items-center">
              <i class="bi bi-headset help-icon"></i>
              <h4>Have a Question?</h4>
              <p class="d-flex align-items-center mt-2 mb-0"><i class="bi bi-telephone me-2"></i> <span>+1 5589 55488 55</span></p>
              <p class="d-flex align-items-center mt-1 mb-0"><i class="bi bi-envelope me-2"></i> <a href="mailto:contact@example.com">contact@example.com</a></p>
            </div>

          </div>

          <!-- Service Details Column -->
          <div class="col-lg-8">

            <!-- Deep Cleaning Service -->
            <div id="deep-cleaning" class="service-content active-content">
              <div class="row">
                <div class="col-md-12">
                <img src="pool.jpg" alt="Pool Cleaning" class="img-fluid services-img">
                </div>
                <div class="col-md-12 service-details-content">
                <h3>WELCOME TO POOL CLEANING</h3>
              <p>Our swimming pool cleaning service ensures the cleanliness and safety of your pool, so you can enjoy a refreshing swim whenever you like.</p>
                </div>
              </div>
            </div>
           
        
             <!-- Add other service details sections similarly -->

          </div>

        </div>

      </div>

    </section><!-- /Service Details Section -->


    
<section id="service-details" class="service-details section">

<div class="container">

  <div class="row gy-5">
  
    <div class="service-content active-content d-flex align-items-start" data-aos="fade-up" data-aos-delay="30">
      <img src="../img/pool2.webp" alt="AC Installation" class="img-fluid services-img me-3 w-50">
      <div class="text-content">
        <h3>Sparkling Clean Pools with Professional Pool Cleaning Services</h3>
        <p>At Al Bahja Building Maintenance and Cleaning Services, we privide your pool crystal clear and inviting with our expert pool cleaning services. We remove debris, balance chemicals, and ensure your pool is safe and hygienic for swimming. Trust our skilled technicians to maintain your pool's pristine condition, so you can enjoy a refreshing and clean swimming experience every time.</p>
      </div>
    </div>

    <div class="service-content active-content d-flex align-items-start py-9" data-aos="fade-up" data-aos-delay="50">
      <div class="text-content">
        <h3>Maintain a Clean and Healthy Pool with Expert Services</h3>
        <p>Enjoy a clean and healthy pool with our professional cleaning services. We tackle all aspects of pool maintenance, including vacuuming, filter cleaning, and water testing, to ensure optimal cleanliness and safety. Trust our experienced team to keep your pool in top condition, providing you with a refreshing and enjoyable swimming experience.</p>
      </div>
      <img src="../img/pool.jpg" alt="AC Installation" class="img-fluid services-img me-3 w-50">
    </div>

<!-- Book Now Button -->
<div class="row justify-content-center">
      <div class="col-auto">
        <a href="book-service/booking.php" class="btn btn-primary" data-aos="fade-up" data-aos-delay="50">Book Now</a>
      </div>
    </div>

</div>
</div>
</section>

<?php include "service.php" ?>
  </main>

  <!-- Footer -->
  <?php include "footer.php" ?>

  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="../assets/vendor/php-email-form/validate.js"></script>
  <script src="../assets/vendor/aos/aos.js"></script>
  <script src="../assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="../assets/vendor/swiper/swiper-bundle.min.js"></script>

  <!-- Main JS File -->
  <script src="../assets/js/main.js"></script>

</body>

</html>
