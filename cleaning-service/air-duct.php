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
            <li><a href="../Index.php">Home</a></li>
            <li><a href="CLEAN.php">cleaning</a></li>
            <li class="current">air-duct cleaning</li>
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
                <a href="air-duct.php" class="service-link active"><i class="bi bi-arrow-right-circle"></i><span>HVAC Air Duct Cleaning</span></a>
                <a href="sofa-steam.php" class="service-link"><i class="bi bi-arrow-right-circle"></i><span>Upholstery Sofa Steam Cleaning</span></a>
                <a href="villa.php" class="service-link"><i class="bi bi-arrow-right-circle"></i><span>Villa & House Cleaning</span></a>
                <a href="tank.php" class="service-link"><i class="bi bi-arrow-right-circle"></i><span>Water Tank Cleaning & Disinfection</span></a>
                <a href="glass-cleaning.php" class="service-link"><i class="bi bi-arrow-right-circle"></i><span>Window Glass Cleaning</span></a>
                <a href="mattress.php" class="service-link"><i class="bi bi-arrow-right-circle"></i><span>Mattress Cleaning</span></a>
                <a href="carpet-cleaning.php" class="service-link"><i class="bi bi-arrow-right-circle"></i><span>Carpet Cleaning</span></a>
                <a href="pool-cleaning.php" class="service-link"><i class="bi bi-arrow-right-circle"></i><span>Pool Cleaning</span></a>
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
                  <img src="hvac.jpg" alt="HVAC Air Duct Cleaning" class="img-fluid services-img">
                </div>
                <div class="col-md-12 service-details-content">
                <h3>WELCOME TO HVAC AIR DUCT CLEANING</h3>
                <p>Breathe cleaner air with our expert HVAC air duct cleaning service, ensuring optimal indoor air quality for your home or office.</p>
                </div>
              </div>
            </div>

            <!-- Book Now Button -->
            <div class="row justify-content-center">
                <div class="col-auto">
                  <a href="book-service/booking.php" class="btn btn-primary" data-aos="fade-up" data-aos-delay="50">Book Now</a>
                </div>
              </div>


             <!-- Add other service details sections similarly -->

          </div>

        </div>

         
      <div class="service-content active-content d-flex align-items-start mt-5" data-aos="fade-up" data-aos-delay="30">
      <img src="../acinstall.jpg" alt="AC Installation" class="img-fluid services-img me-3 w-50">
      <div class="text-content">
        <h3>WELCOME TO DUCT AIR CLEANING SERVICE</h3>
        <p>If you’re looking for a reliable AC installation service in Dubai, look no further than Al Bahja Building Maintenance. Our experienced AC technicians can install a wide range of AC systems, from window units to split systems, ensuring that your new unit is installed safely and securely. We also provide expert advice on the best AC system for your space and budget.</p>
      </div>
    </div>


    <div class="service-content active-content d-flex align-items-start py-9" data-aos="fade-up" data-aos-delay="50">
      <div class="text-content">
        <h3>ANOTHER SECTION TITLE</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam tempor nisi sit amet facilisis cursus. Vivamus ac posuere dui. Nunc sit amet velit malesuada, posuere turpis non, tincidunt velit. Aliquam euismod laoreet nisl, in gravida nunc vehicula non. Proin iaculis libero vitae ipsum gravida, a scelerisque eros euismod. Nulla facilisi.</p>
      </div>
      <img src="../install3.jpg" alt="AC Installation" class="img-fluid services-img me-3 w-50">
    </div>

      </div>


     

    </section><!-- /Service Details Section -->


    
<section id="service-details" class="service-details section">

<div class="container">

  <div class="row gy-5">
  
<<<<<<< HEAD
  <div class="service-content active-content d-flex align-items-start" data-aos="fade-up" data-aos-delay="30">
  <img src="../img/ductcleaning1.jpg" alt="duct cleaning" class="img-fluid services-img me-3 w-50">
  <div class="text-content">
    <h3>RESIDENTIAL DUCT CLEANING SERVICES</h3>
    <p>Transform your home's air quality with our residential duct cleaning services. Our team at Al Bahja Building Maintenance specializes in thorough cleaning of HVAC ducts, eliminating dust, pollen, and mold to create a healthier indoor environment. We use advanced cleaning techniques to ensure your ducts are free from contaminants, enhancing airflow and system efficiency.</p>
  </div>
</div>

<div class="service-content active-content d-flex align-items-start py-9" data-aos="fade-up" data-aos-delay="50">
  <div class="text-content">
    <h3>COMMERCIAL HVAC MAINTENANCE SOLUTIONS</h3>
    <p>Keep your commercial space comfortable and efficient with our comprehensive HVAC maintenance solutions. From routine inspections to emergency repairs, Al Bahja Building Maintenance offers tailored services to meet your business needs. Our certified technicians ensure your HVAC systems operate at peak performance, reducing downtime and maximizing energy efficiency.</p>
  </div>
  <img src="../img/ductcleaning2.jpg" alt="Commercial HVAC Maintenance" class="img-fluid services-img me-3 w-50">
</div>

=======
    <div class="service-content active-content d-flex align-items-start" data-aos="fade-up" data-aos-delay="30">
      <img src="../img/ductcleaning.jpg" alt="AC Installation" class="img-fluid services-img me-3 w-50">
      <div class="text-content">
        <h3>Professional HVAC Air Duct Cleaning Services</h3>
        <p>Ensure clean and healthy indoor air with Al Bahja Building Maintenance's professional HVAC air duct cleaning services. Our skilled technicians thoroughly clean your air ducts, removing dust, debris, and allergens that can accumulate over time. Clean air ducts not only improve indoor air quality but also enhance HVAC system efficiency, leading to energy savings. Trust us to deliver thorough and effective cleaning, ensuring a healthier and more comfortable environment for your home or business.</p>
      </div>
    </div>

    <div class="service-content active-content d-flex align-items-start py-9" data-aos="fade-up" data-aos-delay="50">
      <div class="text-content">
        <h3>Reliable HVAC Air Duct Cleaning Services</h3>
        <p>Al Bahja Building Maintenance offers reliable HVAC air duct cleaning services to maintain clean indoor air quality. Our skilled technicians use effective techniques to remove dust, allergens, and debris from your ductwork, ensuring optimal airflow and system efficiency. With our thorough cleaning approach, we help create a healthier and more comfortable environment for your home or business. Trust us to deliver professional results that enhance the performance of your HVAC system and improve overall air quality.</p>
      </div>
      <img src="../img/duct2.jpg" alt="AC Installation" class="img-fluid services-img me-3 w-50">
    </div>
>>>>>>> 23b889687901cf223409614b977a1e6192c85497

<!-- Book Now Button -->
<div class="row justify-content-center">
      <div class="col-auto">
        <a href="book-service/booking.php" class="btn btn-primary" data-aos="fade-up" data-aos-delay="50">Book Now</a>
      </div>
    </div>

</div>
</div>
</section>
  </main>

  <!-- Footer -->
  <?php include "../footer.php" ?>

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
