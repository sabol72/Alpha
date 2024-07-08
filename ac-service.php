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
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Inter:wght@100;200;300;400;500;600;700;800;900&family=Nunito:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

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
    /* .img-fluid {
    max-width: 50%;
    height: auto;
    }
    */


@media (max-width: 767px) {
  .service-content {
    flex-direction: column;
    align-items: center;
  }

  .service-content img {
    margin-right: 0;
    margin-bottom: 20px;
  }
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
          <li><a href="Ac.php#service">Services</a></li>
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
                <a href="#install" class="active"><i class="bi bi-arrow-right-circle"></i><span>AC Installation</span></a>
                <a href="#cleaning"><i class="bi bi-arrow-right-circle"></i><span>AC Duct Cleaning</span></a>
                <a href="#maintain"><i class="bi bi-arrow-right-circle"></i><span>AC Maintenance Service</span></a>
                <a href="#repair"><i class="bi bi-arrow-right-circle"></i><span>AC Repair</span></a>
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
            <div id="install" class="service-content active-content ">
              <img src="install.jpg" alt="AC Installation" class="img-fluid services-img">
              <h3>WELCOME TO AC INSTALLATION SERVICE</h3>
              <p>If you’re looking for a reliable AC installation service in Dubai, look no further than Al Bahja Buildling Maintenance. Our experienced AC technicians can install a wide range of AC systems, from window units to split systems, ensuring that your new unit is installed safely and securely. We also provide expert advice on the best AC system for your space and budget.
                
              </p>
            
            </div>
           </div>
          <div id="install" class="service-content active-content  d-flex align-items-start" data-aos="fade-up" data-aos-delay="200">
            <img src="acinstall.jpg" alt="AC Installation" class=" img-fluid services-img me-3 w-50">
        <div>
    <!-- <h3>WELCOME TO AC INSTALLATION SERVICE</h3> -->
    <p>Are you searching for a reliable AC installation service in Dubai? Look no further than Al Bahja Building Maintenance. Our team of experienced AC technicians is equipped to handle a wide range of AC systems, from window units to split systems.
    We understand the importance of having your new unit installed safely and securely. That's why we ensure each installation is carried out with the utmost care and professionalism.
    Not only do we provide expert installation services, but we also offer advice on the best AC system to suit your space and budget. Trust us to keep your environment comfortable and cool.
    </p>
  </div>
</div>
<div id="install" class="service-content active-content  d-flex align-items-start" data-aos="fade-up" data-aos-delay="200">
            
        <div>
    <!-- <h3>WELCOME TO AC INSTALLATION SERVICE</h3> -->
    <p>Are you searching for a reliable AC installation service in Dubai? Look no further than Al Bahja Building Maintenance. Our team of experienced AC technicians is equipped to handle a wide range of AC systems, from window units to split systems.
    We understand the importance of having your new unit installed safely and securely. That's why we ensure each installation is carried out with the utmost care and professionalism.
    Not only do we provide expert installation services, but we also offer advice on the best AC system to suit your space and budget. Trust us to keep your environment comfortable and cool.
    </p>
    
  </div>
  <img src="install3.jpg" alt="AC Installation" class=" img-fluid services-img me-3 w-50">
 
 
</div>

  <div class="row justify-content-center">
    <div class="col-auto">
      <a href="book-service/booking.php" class="btn btn-primary" data-aos="fade-up" data-aos-delay="200">Book Now</a>
    </div>
  </div>
</div>




            <div id="cleaning" class="service-content">
              <img src="cleaner.jpg" alt="AC Duct Cleaning" class="img-fluid services-img">
              <h3>WELCOME TO AC DUCT CLEANING SERVICE</h3>
              <p>Keep your AC ducts clean and your indoor air fresh with our AC duct cleaning service. We remove dust, allergens, and contaminants, ensuring your AC system works efficiently and your air quality is improved.</p>
            </div>
      

            <div id="maintain" class="service-content">
              <img src="maintain.jpg" alt="AC Maintenance Service" class="img-fluid services-img">
              <h3>WELCOME TO AC MAINTENANCE SERVICE</h3>
              <p>Ensure your AC system works smoothly year-round with our AC maintenance service. We offer regular inspections, cleaning, and adjustments to keep your AC unit running efficiently and prevent breakdowns.</p>
            </div>

            <div id="repair" class="service-content">
              <img src="repair.jpg" alt="AC Repair" class="img-fluid services-img">
              <h3>WELCOME TO AC REPAIR SERVICE</h3>
              <p>If your AC system is not cooling properly or making strange noises, our AC repair service can help. Our technicians diagnose and repair all types of AC problems to restore comfort to your space.</p>
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
              <img src="assets/img/install.png" alt="AC Installation" class="mr-3">
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
              <img src="assets/img/duct.png" alt="AC Duct Cleaning" class="mr-3">
              <div>
                <h3>AC Duct Cleaning</h3>
                <p>Keep your AC ducts clean and your indoor air fresh with our AC duct cleaning service. We remove dust, allergens, and contaminants, ensuring your AC system works efficiently and your air quality is improved.</p>
              </div>
            </div>
          </div>

          <div class="col-lg-6 mb-4">
            <div class="service-item item-blue position-relative p-4 d-flex align-items-center">
              <img src="assets/img/duct.png" alt="AC Maintenance Service" class="mr-3">
              <div>
                <h3>AC Maintenance Service</h3>
                <p>Ensure your AC system works smoothly year-round with our AC maintenance service. We offer regular inspections, cleaning, and adjustments to keep your AC unit running efficiently and prevent breakdowns.</p>
              </div>
            </div>
          </div>

          <div class="col-lg-6 mb-4">
            <div class="service-item item-orange position-relative p-4 d-flex align-items-center">
              <img src="assets/img/repair.png" alt="AC Repair" class="mr-3">
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
  <?php include "book-service/booking.php"; ?>
  <?php include "FAQ.php"?>

  <!-- Footer -->
  <?php include "footer.php"?>
  <!-- End Footer -->

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
      const serviceLinks = document.querySelectorAll('.services-list a');
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
