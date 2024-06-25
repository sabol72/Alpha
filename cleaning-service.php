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
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet">

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
  </style>

</head>

<body class="service-details-page">

  <header id="header" class="header d-flex align-items-center sticky-top">
    <div class="container-fluid container-xl position-relative d-flex align-items-center">

      <a href="index.php" class="logo d-flex align-items-center me-auto">
        <img src="assets/img/logo.png" alt="">
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
            <li class="current">Service Details</li>
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
              <h4>Services List</h4>
              <div class="services-list">
                <a href="#deep-cleaning" class="service-link active"><i class="bi bi-arrow-right-circle"></i><span>Deep Cleaning</span></a>
                <a href="#hvac-duct-cleaning" class="service-link"><i class="bi bi-arrow-right-circle"></i><span>HVAC Air Duct Cleaning</span></a>
                <a href="#upholstery-cleaning" class="service-link"><i class="bi bi-arrow-right-circle"></i><span>Upholstery Sofa Steam Cleaning</span></a>
                <a href="#villa-cleaning" class="service-link"><i class="bi bi-arrow-right-circle"></i><span>Villa & House Cleaning</span></a>
                <a href="#water-tank-cleaning" class="service-link"><i class="bi bi-arrow-right-circle"></i><span>Water Tank Cleaning & Disinfection</span></a>
                <a href="#window-cleaning" class="service-link"><i class="bi bi-arrow-right-circle"></i><span>Window Glass Cleaning</span></a>
                <a href="#mattress-cleaning" class="service-link"><i class="bi bi-arrow-right-circle"></i><span>Mattress Cleaning</span></a>
                <a href="#carpet-cleaning" class="service-link"><i class="bi bi-arrow-right-circle"></i><span>Carpet Cleaning</span></a>
                <a href="#pool-cleaning" class="service-link"><i class="bi bi-arrow-right-circle"></i><span>Pool Cleaning</span></a>
              </div>
            </div><!-- End Services List -->

            <div class="help-box d-flex flex-column justify-content-center align-items-center">
              <i class="bi bi-headset help-icon"></i>
              <h4>Have a Question?</h4>
              <p class="d-flex align-items-center mt-2 mb-0"><i class="bi bi-telephone me-2"></i> <span>+1 5589 55488 55</span></p>
              <p class="d-flex align-items-center mt-1 mb-0"><i class="bi bi-envelope me-2"></i> <a href="mailto:contact@example.com">contact@example.com</a></p>
            </div>

          </div>

          <div class="col-lg-8 ps-lg-5" data-aos="fade-up" data-aos-delay="200">
            <div id="deep-cleaning" class="service-content active-content" id="deep">
              <img src="deep-clean.jpg" alt="Deep Cleaning" class="img-fluid services-img">
              <h3>WELCOME TO DEEP CLEANING SERVICE</h3>
              <p>If you're looking for thorough and comprehensive cleaning services, our deep cleaning service is perfect for you. We clean every nook and corner of your home or office, ensuring a fresh and hygienic environment.</p>
            </div>

            <div id="hvac-duct-cleaning" class="service-content" >
              <img src="hvac.jpg" alt="HVAC Air Duct Cleaning" class="img-fluid services-img">
              <h3>WELCOME TO HVAC AIR DUCT CLEANING</h3>
              <p>Breathe cleaner air with our expert HVAC air duct cleaning service, ensuring optimal indoor air quality for your home or office.</p>
            </div>

            <div id="upholstery-cleaning" class="service-content">
              <img src="sofa.jpg" alt="Upholstery Sofa Steam Cleaning" class="img-fluid services-img">
              <h3>WELCOME TO UPHOLSTERY SOFA STEAM CLEANING</h3>
              <p>Revitalize your upholstery with our professional sofa steam cleaning service, removing dirt, stains, and allergens, and ensuring a fresh and clean sofa.</p>
            </div>

            <div id="villa-cleaning" class="service-content">
              <img src="house-clean.jpg" alt="Villa & House Cleaning" class="img-fluid services-img">
              <h3>WELCOME TO VILLA & HOUSE CLEANING</h3>
              <p>Our villa and house cleaning service includes dusting, vacuuming, mopping, sanitizing bathrooms and kitchens, and more, ensuring your home is clean and comfortable.</p>
            </div>

            <div id="water-tank-cleaning" class="service-content">
              <img src="water-tank.jpg" alt="Water Tank Cleaning & Disinfection" class="img-fluid services-img">
              <h3>WELCOME TO WATER TANK CLEANING & DISINFECTION</h3>
              <p>Our water tank cleaning and disinfection service ensures that your water tank is clean, safe, and free from harmful bacteria and contaminants.</p>
            </div>

            <div id="window-cleaning" class="service-content">
              <img src="glass-clean.jpg" alt="Window Glass Cleaning" class="img-fluid services-img">
              <h3>WELCOME TO WINDOW GLASS CLEANING</h3>
              <p>Our window glass cleaning service leaves your windows sparkling clean, enhancing the appearance and letting more light into your home or office.</p>
            </div>

            <div id="mattress-cleaning" class="service-content">
              <img src="mattress.jpg" alt="Mattress Cleaning" class="img-fluid services-img">
              <h3>WELCOME TO MATTRESS CLEANING</h3>
              <p>Our mattress cleaning service removes dust mites, allergens, and stains, ensuring your mattress is clean, fresh, and comfortable for a good night's sleep.</p>
            </div>

            <div id="carpet-cleaning" class="service-content">
              <img src="carpet-clean.jpg" alt="Carpet Cleaning" class="img-fluid services-img">
              <h3>WELCOME TO CARPET CLEANING</h3>
              <p>Our carpet cleaning service uses the latest technology, a variety of cleaning solutions, and deep cleaning techniques to ensure your carpets are clean and hygienic.</p>
            </div>

            <div id="pool-cleaning" class="service-content">
              <img src="pool.jpg" alt="Pool Cleaning" class="img-fluid services-img">
              <h3>WELCOME TO POOL CLEANING</h3>
              <p>Our swimming pool cleaning service ensures the cleanliness and safety of your pool, so you can enjoy a refreshing swim whenever you like.</p>
            </div>
          </div>

        </div>

      </div>

    </section><!-- /Service Details Section -->

  </main>

  <?php include "FAQ.php"?>
  <!-- footer part -->
  <?php include "footer.php"?>
  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>

  <!-- Main JS File -->
  <script src="assets/js/main.js"></script>

  <script>
    // JavaScript to toggle active class in services list and service content
    document.addEventListener('DOMContentLoaded', function() {
      const serviceLinks = document.querySelectorAll('.services-list .service-link');
      const serviceContents = document.querySelectorAll('.service-content');

      serviceLinks.forEach(link => {
        link.addEventListener('click', (e) => {
          e.preventDefault(); // Prevent default behavior of anchor tags
          const targetId = link.getAttribute('href').substring(1);
          serviceLinks.forEach(l => l.classList.remove('active'));
          link.classList.add('active');
          serviceContents.forEach(content => {
            content.classList.remove('active-content');
            if (content.id === targetId) {
              content.classList.add('active-content');
            }
          });
        });
      });
    });
  </script>

</body>

</html>
