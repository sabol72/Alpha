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
            padding-right: 40px; /* Ensure space for arrow icon */
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
            <li class="current">Mattress cleaning</li>
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
                <a href="mattress-cleaning.php" class="service-link active"><i class="bi bi-arrow-right-circle"></i><span>Mattress Cleaning</span></a>
                <a href="carpet-cleaning.php" class="service-link"><i class="bi bi-arrow-right-circle"></i><span>Carpet Cleaning</span></a>
                <a href="pool-cleaning.php" class="service-link"><i class="bi bi-arrow-right-circle"></i><span>Pool Cleaning</span></a>
              </div>
            </div><!-- End Services List -->
            <div class="container">
            <div class="services-list">
            <h2 class="booking-info">Book your air-duct service today.</h2>
            <a href="../indbooking/index.php" class=" btn-lg btn-book-now" style="color: white; background-color: green; padding: 10px 20px; border-radius: 5px; text-decoration: none;">
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
                <img src="../img/mattess0.png" alt="Mattress Cleaning" class="img-fluid services-img">
                </div>
                <div class="col-md-12 service-details-content">
                <h3>WELCOME TO MATTRESS CLEANING</h3>
                <p>Our mattress cleaning service removes dust mites, allergens, and stains, ensuring your mattress is clean, fresh, and comfortable for a good night's sleep.</p>
                </div>
              </div>
            </div>
            
            
             <!-- Add other service details sections similarly -->
             <div id="deep-cleaning" class="service-content active-content">
              <div class="row">
                <div class="col-md-12">
                <img src="../img/matress1.png" alt="Mattress Cleaning" class="img-fluid services-img">
                </div>
                <div class="col-md-12 service-details-content">
                <h3>Refresh Your Sleep Environment with Our Expert Mattress Cleaning</h3>
                <p>A good night's sleep starts with a clean mattress. Over time, mattresses can accumulate dust mites, allergens, sweat, stains, and even bacteria, which can affect your sleep quality and health. Our professional mattress cleaning services are designed to deeply clean, sanitize, and revitalize your mattress, ensuring you sleep soundly on a fresh and hygienic bed.</p>
                </div>
              </div>
            </div>
             
          </div>

        </div>
        <div class="row gy-5">
        <div class="section-title pb-3 pt-5">
        <h2>Whats more!</h2></div>
  <div class="service-content active-content d-flex align-items-start" data-aos="fade-up" data-aos-delay="30">
    <img src="../img/matress4.png" alt="Mattress Cleaning" class="img-fluid services-img me-3 w-50">
    <div class="text-content">
      <h3>Deep Clean Your Mattress for Better Sleep</h3>
      <p>At Al Bahja Building Maintenance and Cleaning Services, Achieve a cleaner, healthier sleeping environment with our specialized mattress cleaning services. We target and eliminate deep-seated dirt, allergens, and bacteria using eco-friendly methods, ensuring your mattress is thoroughly sanitized and refreshed. Enjoy a better night's sleep and prolong the life of your mattress with our professional cleaning services.</p>
    </div>
  </div>

  <div class="service-content active-content d-flex align-items-start py-9" data-aos="fade-up" data-aos-delay="50">
    <div class="text-content">
      <h3>Experience Freshness with Expert Mattress Cleaning</h3>
      <p>Breathe easy with our professional mattress cleaning services. We deep clean and disinfect your mattress, eliminating harmful allergens and bacteria for a healthier sleeping surface. Our efficient and eco-friendly techniques ensure your mattress is left spotless and odor-free, promoting a more restful and rejuvenating sleep.</p>
    </div>
    <img src="../img/matress2 resize.png" alt="Mattress Cleaning" class="img-fluid services-img me-3 w-50">
  </div>

  <div class="service-content active-content d-flex align-items-start" data-aos="fade-up" data-aos-delay="30">
    <img src="../img/matress5.png" alt="Mattress Cleaning" class="img-fluid services-img me-3 w-50">
    <div class="text-content">
      <h3>Prolongs Mattress Life</h3>
      <p>Regular cleaning helps maintain the integrity of your mattress. Removing dirt, sweat, and stains prevents material breakdown, thus extending the lifespan of your mattress and ensuring you get the most out of your investment.</p>
    </div>
  </div>
  
  <div class="service-content active-content d-flex align-items-start py-9" data-aos="fade-up" data-aos-delay="50">
    <div class="text-content">
      <h3>Enhanced Sleep Quality</h3>
      <p>A clean mattress contributes to better sleep quality. Dust mites, allergens, and dirt can disrupt your sleep and cause health issues. Regular mattress cleaning ensures a healthier sleeping environment, leading to more restful nights and refreshed mornings.</p>
    </div>
    <img src="../img/matress6.png" alt="Mattress Cleaning" class="img-fluid services-img me-3 w-50">
  </div>

         
  
      </div>

    </section><!-- /Service Details Section -->
    <section id="service-details" class="service-details section bg-light py-5">

  <div class="container">
  
    <div class="row gy-5 justify-content-center">
    
      <div class="col-lg-8">
      <div class="section-title pb-3 pt-5">
      <h3 style="color: #007bff; font-weight: bold;">Why Choose Our Mattress Cleaning Services?</h3>
      </div>


                  <!-- Box 1 -->

          <div class="service-box text-center p-4 mb-4" style="background-color: #ffffff; border-radius: 10px; box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);">

          <div style="font-size: 1.1rem; line-height: 1.8;">
            <p>Removing stains, especially old or set-in ones, can be challenging with home cleaning products.</p>
          </div>
          
        </div>
        
        <!-- Box 2 -->
        <div class="service-box text-center p-4 mb-4" style="background-color: #ffffff; border-radius: 10px; box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);">
        
          <h3 style="color: #007bff; font-weight: bold;">Thorough Cleaning</h3>
          
          <div style="font-size: 1.1rem; line-height: 1.8;">
            <p>Professional mattress cleaning services use advanced techniques and equipment that penetrate deeper into the mattress than typical household cleaning methods. </p>
          </div>
          
        </div>
        
        <!-- Box 3 -->
        <div class="service-box text-center p-4 mb-4" style="background-color: #ffffff; border-radius: 10px; box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);">
        
          <h3 style="color: #007bff; font-weight: bold;">Better Sleep Quality</h3>
          
          <div style="font-size: 1.1rem; line-height: 1.8;">
            <p>Removing allergens, dust, and bacteria can lead to a more comfortable and healthier sleeping environment, helping you to wake up feeling more refreshed and energized.</p>
          </div>
          
        </div>
        
        <!-- Box 4 -->
        <div class="service-box text-center p-4 mb-4" style="background-color: #ffffff; border-radius: 10px; box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);">
        
          <h3 style="color: #007bff; font-weight: bold;">Enhanced Comfort</h3>
          
          <div style="font-size: 1.1rem; line-height: 1.8;">
            <p>Professional cleaning removes lumps caused by accumulated dirt and dust, ensuring that your mattress remains plush and supportive, contributing to better sleep quality.</p>
          </div>
          
        </div>
        
        <!-- Box 5 -->
        <div class="service-box text-center p-4 mb-4" style="background-color: #ffffff; border-radius: 10px; box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);">
        
          <h3 style="color: #007bff; font-weight: bold;">Safe and Effective Cleaning Solutions</h3>
          
          <div style="font-size: 1.1rem; line-height: 1.8;">
            <p>Professional services use specially formulated cleaning solutions that are both safe for your mattress and effective at eliminating dirt, stains, and odors.</p>
          </div>
          
        </div>
        
        
        
        <!-- Button Box -->
        <div class="text-center">
          <a href="../indbooking/index.php" class="btn btn-primary btn-lg btn-book-now">Book Now <i class="fas fa-arrow-right ml-2"></i></a>
        </div>
        
      </div>
      
    </div>
    
  </div>
  
</section>



  
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

</body>

</html>
