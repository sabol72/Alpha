<?php require"db_Connect.php"?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title> BBC- maintenance and repair</title>
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
  <link href="https://unpkg.com/swiper/swiper-bundle.min.css" rel="stylesheet">

 


  <!-- Main CSS File -->
   <link href="assets/css/main.css" rel="stylesheet"> 
</head>

<body class="index-page">

  <header id="header" class="header d-flex align-items-center fixed-top">
  
    <div class="container-fluid container-xl position-relative d-flex align-items-center">

      <a href="index.html" class="logo d-flex align-items-center me-auto">
        <img src="logo.png" alt="">
        
      </a>

      <nav id="navmenu" class="navmenu">
        <ul>
          <li><a href="#hero">Home</a></li>
          <li><a href="#about">About</a></li>
          <li><a href="#features">Features</a></li>
          <li>
    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        Services
    </a>
    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
        <a class="dropdown-item" href="AC.php">Air Conditioner</a>
        <a class="dropdown-item" href="CLEAN.php">Cleaning</a>
    </div>
</li>         
<li><a href="#contact">Contact</a></li>
          <li> <a href="indbooking/index.php"><button type="button" class="btn btn-primary">Book Now</button></a></li>
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>

    </div>
  </header>

  <main class="main">
    <section id="hero" class="hero section">
      <section class="home-bg">
        <section class="home">
          <div class="swiper home-slider">
            <div class="swiper-wrapper">
              <div class="swiper-slide slide">
                <div class="image-container">
                  <img src="assets/img/checking-conditioner.jpg" alt="">
                  <div class="overlay"></div>
                  <div class="content">
                    <span style="color: rgb(255, 255, 255); font-size: 70px;">AC Services</span>
                    <span>Get Your Service now!</span><br>
                    <button id="slider1-btn" class="btn load-content-btn"  onclick="redirectToAC()">Click Here</button>
                  </div>
                </div>
              </div>
              <div class="swiper-slide slide">
                <div class="image-container">
                  <img src="assets/img/clean.jpg" alt="">
                  <div class="overlay"></div>
                  <div class="content">
                    <span style="color: rgb(255, 255, 255); font-size: 70px;">Cleaning Services</span><br>
                    <span>Get Your Service now!</span><br>
                    <button id="slider2-btn" class="btn load-content-btn"  onclick="redirectToCLEAN()">Click Here</button>
                  </div>
                </div>
              </div>
              <!-- Add more slides as needed -->
            </div>
            <div class="swiper-pagination"></div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
          </div>
        </section>
      </section>
    </section>  
    <!-- Features Section -->
    <section id="features" class="features section" style="padding-top: 0;" >

      <!-- Section Title -->
      <div class="container mt-0 section-title" data-aos="fade-up">
        <h2 class=""> Our Features</h2>
        <h3 class="text-muted">Your Comfort, Our Priority</h3>
          <h5 class="text-secondary">From installation to maintenance, we prioritize your comfort with meticulous care and attention.</h5>
        <div class="row justify-content-between">

          <div class="col-lg-5 d-flex align-items-center">

            <ul class="nav nav-tabs" data-aos="fade-up" data-aos-delay="100">
              <li class="nav-item">
                <a class="nav-link active show" data-bs-toggle="tab" data-bs-target="#features-tab-1">
                  <i class="bi bi-binoculars"></i>
                  <div>
                    <h4 class="d-none d-lg-block">Comprehensive Service Options:</h4>
                    <p>
                    Offer a range of services such as AC installation, maintenance, repair, duct cleaning, and indoor air quality assessments.
                    </p>
                  </div>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" data-bs-target="#features-tab-2">
                  <i class="bi bi-box-seam"></i>
                  <div>
                    <h4 class="d-none d-lg-block">Emergency Services</h4>
                    <p>
                    Provide 24/7 emergency repair services for air conditioning units to cater to urgent needs of customers.
                    </p>
                  </div>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" data-bs-target="#features-tab-3">
                  <i class="bi bi-brightness-high"></i>
                  <div>
                    <h4 class="d-none d-lg-block">Certified Technicians</h4>
                    <p>
                    Employ trained and certified technicians who are skilled in handling various types and brands of AC units and cleaning equipment.
                    </p>
                  </div>
                </a>
              </li>
            </ul><!-- End Tab Nav -->

          </div>

          <div class="col-lg-6">

            <div class="tab-content" data-aos="fade-up" data-aos-delay="200">

              <div class="tab-pane fade active show" id="features-tab-1">
                <img src="assets/img/feature.webp" alt="" class="img-fluid">
              </div><!-- End Tab Content Item -->

              <div class="tab-pane fade" id="features-tab-2">
                <img src="assets/img/tabs-2.jpg" alt="" class="img-fluid">
              </div><!-- End Tab Content Item -->

              <div class="tab-pane fade" id="features-tab-3">
                <img src="assets/img/tabs-3.jpg" alt="" class="img-fluid">
              </div><!-- End Tab Content Item -->
            </div>

          </div>

        </div>

      </div>

    </section><!-- /Features Section -->


    </section><!-- /Features Details Section -->

    <!-- Services Section -->
    <section id="services" class="services section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up" id="service">
        <h2>Services</h2>
      
        <div class="row g-5">

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
            <div class="service-item item-cyan position-relative">
              <img src="assets/img/install.png" alt="Logo" style="width: 50px; height: 50px; margin-right: 15px;">
              <div>
                <h2 style="text-align: left;">Air Conditioner</h2>
                <p style="text-align: left;">If you’re looking for a reliable AC installation service in Dubai, look no further than Al Bahja Buildling  Maintenance.
               </p>
<<<<<<< HEAD
               <a href="ac-service/ac-install.php" class="read-more stretched-link">Learn More <i class="bi bi-arrow-right"></i></a>
=======
               <a href="AC.php" class="read-more btn btn-primary stretched-link">Learn More <i class="bi bi-arrow-right"></i></a>
>>>>>>> 71531e20c1e8f96879c03bda7c08b83da6839cd3
              </div>
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
            <div class="service-item item-orange position-relative">
              <i class="bi bi-broadcast icon"></i>
              <div>
<<<<<<< HEAD
                <h3>CLEANING</h3>
                <p>Al Bahja Building Maintenance is your trusted partner for comprehensive cleaning services in Dubai. We offer a wide range of cleaning solutions tailored to meet your specific needs, ensuring your home or office is clean, comfortable, and safe</p>
                <a href="cleaning-service/deep-cleaning.php" class="read-more stretched-link">Learn More <i class="bi bi-arrow-right"></i></a>
=======
                <h2>Cleaning</h2>
                <p style="text-align: left;">Al Bahja Building Maintenance is your trusted partner for comprehensive cleaning services in Dubai. </p>
                <a href="CLEAN.php" class="read-more btn btn-primary stretched-link">Learn More <i class="bi bi-arrow-right"></i></a>
>>>>>>> 71531e20c1e8f96879c03bda7c08b83da6839cd3
              </div>
            </div>
          </div>
</div>
      </div><!-- End Section Title -->
    </section><!-- /Services Section -->

    <?php include "FAQ.php"?>

    </main>

  <!-- footer part -->
  <?php include "footer.php"?>

  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  <div id="preloader"></div>

<!-- Scroll Top -->
<a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

<!-- Preloader -->

<!-- Vendor JS Files -->
<script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/vendor/php-email-form/validate.js"></script>
<script src="assets/vendor/aos/aos.js"></script>
<script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>


<!-- for slider of photos -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<!-- Main JS File -->
<script src="assets/js/main.js"></script>
<script src="assets/js/script.js"></script>
</body>

</html>