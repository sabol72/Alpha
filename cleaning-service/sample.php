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
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900&family=Inter:wght@100;200;300;400;500;600;700;800;900&family=Nunito:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="../assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="../assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="../assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

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

    .booking-section {
      text-align: center;
      max-width: 800px;
      padding: 20px;
      border: 1px solid #ccc;
      border-radius: 8px;
      background-color: #f9f9f9;
    }

    .booking-info {
      margin-bottom: 20px;
    }

    .btn-book-now {
      position: relative;
      padding-right: 40px;
      color: #fff;
      border: none;
      border-radius: 8px;
      transition: background-color 0.3s ease;
      position: relative;
    }

    .btn-book-now i {
      position: absolute;
      right: 10px;
      top: 50%;
      transform: translateY(-50%);
      transition: transform 0.3s ease;
    }

    .btn-book-now:hover i {
      transform: translate(5px, -50%);
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
          <li><a href="../Login-system/login.php"><button type="button" class="btn btn-primary">Book Now</button></a></li>
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
            <li class="current">Deep-cleaning</li>
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
                <a href="deep-cleaning.php" class="service-link active"><i class="bi bi-arrow-right-circle"></i><span>Deep Cleaning</span></a>
                <a href="air-duct.php" class="service-link"><i class="bi bi-arrow-right-circle"></i><span>HVAC Air Duct Cleaning</span></a>
                <a href="sofa-steam.php" class="service-link"><i class="bi bi-arrow-right-circle"></i><span>Upholstery Sofa Steam Cleaning</span></a>
                <a href="villa.php" class="service-link"><i class="bi bi-arrow-right-circle"></i><span>Villa & House Cleaning</span></a>
                <a href="tank.php" class="service-link"><i class="bi bi-arrow-right-circle"></i><span>Water Tank Cleaning & Disinfection</span></a>
                <a href="glass-cleaning.php" class="service-link"><i class="bi bi-arrow-right-circle"></i><span>Window Glass Cleaning</span></a>
                <a href="mattress-cleaning.php" class="service-link"><i class="bi bi-arrow-right-circle"></i><span>Mattress Cleaning</span></a>
                <a href="carpet-cleaning.php" class="service-link"><i class="bi bi-arrow-right-circle"></i><span>Carpet Cleaning</span></a>
                <a href="pool-cleaning.php" class="service-link"><i class="bi bi-arrow-right-circle"></i><span>Pool Cleaning</span></a>
              </div>
            </div><!-- End Services List -->
            <div class="container">
              <div class="services-list">
                <h2 class="booking-info">Book your deep cleaning service today.</h2>
                <a href="../Login-system/login.php" class=" btn-lg btn-book-now" style="color: white; background-color: green; padding: 10px 20px; border-radius: 5px; text-decoration: none;">
                  Book Now <i class="fas fa-arrow-right ml-2"></i></a>
              </div>
            </div>

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
                  <img src="../img/deepclean0.png" alt="Deep Cleaning" class="img-fluid services-img">
                </div>
                <div class="col-md-12 service-details-content" style="font-family: 'Roboto', sans-serif; font-weight: 400; line-height: 1.6; margin-bottom: 30px;">
  <h3 style="font-family: 'Roboto', sans-serif; font-weight: 500; font-size: 24px; margin-bottom: 15px;">WELCOME TO DEEP CLEANING SERVICE</h3>
  <p style="font-family: 'Roboto', sans-serif; font-weight: 400; font-size: 16px; line-height: 1.6; text-align: justify; margin-bottom: 20px;">
    If you're looking for thorough and comprehensive cleaning services, our deep cleaning service is perfect for you. We clean every nook and corner of your home or office, ensuring a fresh and hygienic environment. Our expert team uses the latest equipment and techniques to tackle even the toughest cleaning challenges, providing you with a spotless and sanitized space. Whether it's a routine clean or a one-time deep clean, we tailor our services to meet your specific needs and preferences, delivering exceptional results every time.
  </p>
  <p style="font-family: 'Roboto', sans-serif; font-weight: 400; font-size: 16px; line-height: 1.6; text-align: justify;">
    We understand that each space is unique, and our approach is customized to address your specific requirements. From detailed surface cleaning to addressing hidden areas, we ensure that no corner is overlooked. Our commitment to quality and customer satisfaction is what sets us apart, and we strive to exceed your expectations with every job. Choose our deep cleaning service for a thorough, reliable, and efficient cleaning experience that will leave your space looking and feeling brand new.
  </p>
</div>

              </div>
            </div>

              <!-- Gallery Section -->
              <div class="row mt-5">
                <div class="col-md-6">
                  <img src="../img/deepclean1.png" alt="Deep Cleaning" class="img-fluid services-img">
                </div>
                <div class="col-md-6">
                  <img src="../img/deepclean2.png" alt="Deep Cleaning" class="img-fluid services-img">
                </div>
              </div>

              <!-- Button to Expand Gallery -->
              <div class="row mt-3">
                <div class="col-md-12 text-center">
                  <button class="btn btn-primary" id="expandGalleryBtn">View More Photos</button>
                </div>
              </div>

              <!-- Expanded Gallery Section (Hidden by Default) -->
              <div class="row mt-3" id="expandedGallery" style="display: none;">
                <div class="col-md-6">
                  <img src="../img/deep-clean3.jpg" alt="Deep Cleaning" class="img-fluid services-img">
                </div>
                <div class="col-md-6">
                  <img src="../img/deepclean4.png" alt="Deep Cleaning" class="img-fluid services-img">
                </div>
                <div class="col-md-6 mt-3">
                  <img src="../img/deep-clean5.png" alt="Deep " class="img-fluid services-img">
                </div>
                <div class="col-md-6 mt-3">
                  <img src="../img/deepclean6.png" alt=" Cleaning" class="img-fluid services-img">
                </div>
              </div>
              <!-- End Gallery Section -->

            </div>

          </div>



         <!-- Section Title -->
<div class="section-title pb-3 pt-5 text-center">
  <h2 style="font-family: 'Roboto', sans-serif; font-size: 24px; font-weight: 700; margin-bottom: 20px;">What's more!</h2>
</div>

<!-- Service Content Section -->
<div class="row gy-5">
  
  <!-- First Service Content -->
  <div class="service-content d-flex align-items-start" data-aos="fade-up" data-aos-delay="30" style="font-family: 'Roboto', sans-serif; font-weight: 400; line-height: 1.6; margin-bottom: 30px;">
    <img src="../img/deepclean1.png" alt="Deep Cleaning" class="img-fluid me-3" style="width: 50%; border-radius: 8px;">
    <div class="text-content">
      <h3 style="font-family: 'Roboto', sans-serif; font-weight: 500; font-size: 20px; margin-bottom: 10px;">Through Deep Cleaning Services</h3>
      <p style="font-family: 'Roboto', sans-serif; font-weight: 400; font-size: 16px; line-height: 1.6; text-align: justify; margin-bottom: 20px;">
        Discover unparalleled cleanliness with Al Bahja Building Maintenance's deep cleaning services in Dubai. Our meticulous approach ensures every corner of your home or office receives a thorough cleaning, leaving behind a fresh and hygienic environment. From high-touch surfaces to hidden nooks, we pay attention to detail to eliminate dust, grime, and allergens effectively. Whether preparing for a special occasion or maintaining a pristine workplace, trust our expert cleaners to deliver exceptional results. Experience the difference with our comprehensive deep cleaning service, tailored to meet your exact needs and exceed your expectations.
      </p>
    </div>
  </div>

 <!-- Second Service Content -->
<div class="service-content d-flex flex-wrap align-items-start" data-aos="fade-up" data-aos-delay="50" style="font-family: 'Roboto', sans-serif; font-weight: 400; line-height: 1.6; margin-bottom: 30px;">
  <div class="col-md-6">
    <div class="text-content">
      <h3 style="font-family: 'Roboto', sans-serif; font-weight: 500; font-size: 20px; margin-bottom: 10px;">Comprehensive Deep Cleaning Services</h3>
      <p style="font-family: 'Roboto', sans-serif; font-weight: 400; font-size: 16px; line-height: 1.6; text-align: justify; margin-bottom: 20px;">
        Experience through cleanliness with Al Bahja Building Maintenance's deep cleaning services. We meticulously clean every corner of your home or office, ensuring a fresh and hygienic environment. Our detail-oriented approach eliminates dust, grime, and allergens from high-touch surfaces to hidden nooks. Whether for a special occasion or regular maintenance, trust our expert cleaners for exceptional results tailored to exceed your expectations.
      </p>
    </div>
  </div>
  <div class="col-md-6">
    <img src="../img/deepclean2.png" alt="Deep Cleaning" class="img-fluid" style="width: 100%; border-radius: 8px;">
  </div>
</div>

  <!-- Third Service Content -->
  <div class="service-content d-flex align-items-start" data-aos="fade-up" data-aos-delay="30" style="font-family: 'Roboto', sans-serif; font-weight: 400; line-height: 1.6; margin-bottom: 30px;">
    <img src="../img/deepcleaningn2.png" alt="Deep Cleaning" class="img-fluid me-3" style="width: 50%; border-radius: 8px;">
    <div class="text-content">
      <h3 style="font-family: 'Roboto', sans-serif; font-weight: 500; font-size: 20px; margin-bottom: 10px;">Customized Solutions</h3>
      <p style="font-family: 'Roboto', sans-serif; font-weight: 400; font-size: 16px; line-height: 1.6; text-align: justify; margin-bottom: 20px;">
        At our Deep Cleaning Service, we understand that every space is unique and requires a personalized approach to cleaning. Our customized solutions are designed to address your specific needs and preferences, ensuring a thorough and satisfying clean every time. We understand that every space has unique needs. Our services are tailored to meet your specific requirements and preferences.
      </p>
    </div>
  </div>

 <!-- Fourth Service Content -->
<div class="service-content d-flex flex-wrap align-items-start" data-aos="fade-up" data-aos-delay="50" style="font-family: 'Roboto', sans-serif; font-weight: 400; line-height: 1.6; margin-bottom: 30px;">
  <div class="col-md-6">
    <div class="text-content">
      <h3 style="font-family: 'Roboto', sans-serif; font-weight: 500; font-size: 20px; margin-bottom: 10px;">Flexible Scheduling</h3>
      <p style="font-family: 'Roboto', sans-serif; font-weight: 400; font-size: 16px; line-height: 1.6; text-align: justify; margin-bottom: 20px;">
        At our Deep Cleaning Service, we know that life can be hectic and finding time for a thorough cleaning can be challenging. That's why we offer flexible scheduling options to accommodate your busy lifestyle and ensure your space is pristine whenever you need it. We understand that your time is valuable. That’s why we offer flexible scheduling options, including weekends and evenings, to fit your busy lifestyle.
      </p>
    </div>
  </div>
  <div class="col-md-6">
    <img src="../img/deepclean4.png" alt="Deep Cleaning" class="img-fluid" style="width: 100%; border-radius: 8px;">
  </div>
</div>

</div><!-- End Service Details Section -->

 
        
       
        
        <?php include "how-we-works.php" ?>
   


<?php include "service.php" ?>


<?php include "FAQ.php" ?>



  </main>

  <!-- Footer -->
  <?php include "footer.php" ?>

  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>


  <!-- Vendor JS Files -->
  <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="../assets/vendor/php-email-form/validate.js"></script>
  <script src="../assets/vendor/aos/aos.js"></script>
  <script src="../assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="../assets/vendor/swiper/swiper-bundle.min.js"></script>

  <!-- Main JS File -->
  <script src="../assets/js/main.js"></script>

   <!-- Custom JS for Gallery Expansion -->
   <script>
    document.getElementById('expandGalleryBtn').addEventListener('click', function () {
      var expandedGallery = document.getElementById('expandedGallery');
      if (expandedGallery.style.display === 'none') {
        expandedGallery.style.display = 'flex';
        this.textContent = 'Show Less Photos';
      } else {
        expandedGallery.style.display = 'none';
        this.textContent = 'View More Photos';
      }
    });
  </script>

</body>

</html>
