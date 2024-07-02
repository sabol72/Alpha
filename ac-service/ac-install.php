<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>AC Installation Service</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="../assets/img/favicon.png" rel="icon">
  <link href="../assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Inter:wght@100;200;300;400;500;600;700;800;900&family=Nunito:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

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
    body {
      background-color: #fff;
      color: #000; /* Default text color */
      font-family: 'Roboto', sans-serif; /* Example font family */
      line-height: 1.6;
    }

    .service-details-page {
      background-color: #fff;
      color: #000; /* Default text color */
    }

    .service-box h4,
    .service-title {
      color: #000; /* Black font color */
    }

    .services-img {
      max-width: 100%;
      height: auto;
    }

    .service-content {
      display: block; /* Ensure content is visible by default */
      color: #000; /* Black font color */
    }

    .services-list a {
      color: #000; /* Black font color for service list links */
      text-decoration: none; /* Remove underline */
    }

    .services-list a.active {
      font-weight: bold; /* Example: make active link bold */
    }

    .help-box {
      text-align: center;
      margin-top: 20px;
    }

    .help-box h4 {
      color: #000; /* Black font color */
    }

    .help-box p {
      color: #000; /* Black font color */
    }

    .sticky-service-list {
      position: sticky;
      top: 20px; /* Adjust top distance as needed */
      height: calc(100vh - 40px); /* Height of viewport minus top and bottom margin */
      overflow-y: auto; /* Enable vertical scrolling */
      margin: 20px 0; /* Margin around the sticky list */
      padding: 10px; /* Padding for inner content */
      background-color: #f9f9f9; /* Background color of sticky area */
      border: 1px solid #ddd; /* Example border */
      border-radius: 5px; /* Example border radius */
    }
  </style>

</head>

<body class="service-details-page">

  <header id="header" class="header d-flex align-items-center sticky-top">
    <div class="container-fluid container-xl position-relative d-flex align-items-center">

      <a href="../index.php" class="logo d-flex align-items-center me-auto">
        <img src="../assets/img/logo.png" alt="">
      </a>

      <nav id="navmenu" class="navmenu">
        <ul>
          <li><a href="../index.php#hero" class="">Home</a></li>
          <li><a href="../index.php#about">About</a></li>
          <li><a href="../index.php#feature">Features</a></li>
          <li><a href="../index.php#service">Services</a></li>
          <li><a href="../index.php#contact">Contact</a></li>
          <li><a href="../index.php#book"><button type="button" class="btn btn-primary">Book Now</button></a></li>
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>
    </div>
  </header>

  <main class="main">

    <!-- Page Title -->
    <div class="page-title" data-aos="fade">
      <div class="container d-lg-flex justify-content-between align-items-center">
        <h1 class="mb-2 mb-lg-0" style="color: #000;">AC Installation Service</h1>
        <nav class="breadcrumbs">
          <ol>
            <li><a href="../index.php" style="color: #000;">Home</a></li>
            <li><a href="../index.php#service" style="color: #000;">Services</a></li>
            <li class="current" style="color: #000;">AC Installation</li>
          </ol>
        </nav>
      </div>
    </div><!-- End Page Title -->

    <!-- Service Details Section -->
    <section id="service-details" class="service-details section">

      <div class="container">

        <div class="row gy-5">

          <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">

            <div class="service-box">
              <h4 style="color: #000;">Services List</h4>
              <div class="services-list">
                <a href="ac-install.php" class="active" style="color: #000;"><i class="bi bi-arrow-right-circle"></i><span>AC Installation</span></a>
                <a href="ac-duct.php" style="color: #000;"><i class="bi bi-arrow-right-circle"></i><span>AC Duct Cleaning</span></a>
                <a href="ac-maintain.php" style="color: #000;"><i class="bi bi-arrow-right-circle"></i><span>AC Maintenance Service</span></a>
                <a href="ac-repair.php" style="color: #000;"><i class="bi bi-arrow-right-circle"></i><span>AC Repair</span></a>
              </div>
            </div><!-- End Services List -->

            <div class="help-box">
              <i class="bi bi-headset help-icon"></i>
              <h4 style="color: #000;">Have a Question?</h4>
              <p style="color: #000;" class="d-flex align-items-center mt-2 mb-0"><i class="bi bi-telephone me-2"></i> <span>+1 5589 55488 55</span></p>
              <p style="color: #000;" class="d-flex align-items-center mt-1 mb-0"><i class="bi bi-envelope me-2"></i> <a href="mailto:contact@example.com" style="color: #000;">contact@example.com</a></p>
            </div>

          </div>

          <div class="col-lg-8 ps-lg-5" data-aos="fade-up" data-aos-delay="200">
            <div id="install" class="service-content">
              <img src="install.jpg" alt="AC Installation" class="img-fluid services-img">
              <h3 style="color: #000;">WELCOME TO AC INSTALLATION SERVICE</h3>
              <p style="color: #000;">If you’re looking for a reliable AC installation service in Dubai, look no further than Al Bahja Building Maintenance. Our experienced AC technicians can install a wide range of AC systems, from window units to split systems, ensuring that your new unit is installed safely and securely. We also provide expert advice on the best AC system for your space and budget.</p>
            </div>
          </div>

        </div>

      </div>

    </section><!-- /Service Details Section -->
      <!-- Services Section -->
      <section class="services-section py-3">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center mb-4">
            <h2 class="service-title">Our Services</h2>
          </div>
        </div>

        <div class="row gy-4">
          <div class="col-lg-6 mb-4">
            <div class="service-item item-cyan position-relative p-4 d-flex align-items-center">
              <img src="../assets/img/install.png" alt="AC Installation" class="mr-3">
              <div>
                <h3>AC Installation</h3>
                <p>If you’re looking for a reliable AC installation service in Dubai, look no further than Al Bahja Building
                  Maintenance. Our experienced AC technicians can install a wide range of AC systems, from window units to
                  split systems, ensuring that your new unit is installed safely and securely.</p>
              </div>
            </div>
          </div>

          <div class="col-lg-6 mb-4">
            <div class="service-item item-green position-relative p-4 d-flex align-items-center">
              <img src="../assets/img/duct.png" alt="AC Duct Cleaning" class="mr-3">
              <div>
                <h3>AC Duct Cleaning</h3>
                <p>Keep your AC ducts clean and your indoor air fresh with our AC duct cleaning service. We remove dust, allergens, and contaminants, ensuring your AC system works efficiently and your air quality is improved.</p>
              </div>
            </div>
          </div>

          <div class="col-lg-6 mb-4">
            <div class="service-item item-blue position-relative p-4 d-flex align-items-center">
              <img src="../assets/img/duct.png" alt="AC Maintenance Service" class="mr-3">
              <div>
                <h3>AC Maintenance Service</h3>
                <p>Ensure your AC system works smoothly year-round with our AC maintenance service. We offer regular inspections, cleaning, and adjustments to keep your AC unit running efficiently and prevent breakdowns.</p>
              </div>
            </div>
          </div>

          <div class="col-lg-6 mb-4">
            <div class="service-item item-orange position-relative p-4 d-flex align-items-center">
              <img src="../assets/img/repair.png" alt="AC Repair" class="mr-3">
              <div>
                <h3>AC Repair</h3>
                <p>If your AC system is not cooling properly or making strange noises, our AC repair service can help. Our technicians diagnose and repair all types of AC problems to restore comfort to your space.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section><!-- /Services Section -->


  </main>

  <!-- Footer -->
  <?php include "../footer.php"?>
  <!-- End Footer -->

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
