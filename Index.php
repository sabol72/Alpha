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
  <link href="https://unpkg.com/swiper/swiper-bundle.min.css" rel="stylesheet">

 


  <!-- Main CSS File -->
   <link href="assets/css/main.css" rel="stylesheet"> 
   
</head>

<body class="index-page">

  <header id="header" class="header d-flex align-items-center fixed-top">
  
    <div class="container-fluid container-xl position-relative d-flex align-items-center">

      <a href="index.html" class="logo d-flex align-items-center me-auto">
        <img src="assets/img/logo.png" alt="">
        
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
                    <a id="slider1-btn" class="btn load-content-btn" href="AC.php">Click Here</a>
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
                    <a id="slider1-btn" class="btn load-content-btn" href="CLEAN.php">Click Here</a>
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

    <section id="services" class="services section">
    <div class="container section-title" data-aos="fade-up" id="service">
        <div class="row image-and-text">
            <div class="col-md-6 image-container">
                <img src="assets/img/about.webp" alt="A team of professional cleaners at work" class="img-fluid">
            </div>
            <div class="col-md-6 text-content">
                <h2 style="text-align: center;">Al Bahja Building Maintenance and Cleaning Services</h2>
                <p style="text-align: justify; text-indent: 20px;">Al Bahja Building Maintenance and Cleaning Services provide eco-friendly cleaning services to keep your home, office, or workspace clean and beautiful so that you can focus on things that matter the most. Our team has been providing first-rate cleaning services in the UAE at very affordable rates. Our passion is cleaning offices, homes, schools, and businesses. Al Bahja Building Maintenance and Cleaning Services are proud to call ourselves cleaning experts. We guarantee that our staff are qualified, experienced, and insured so you can be sure that you are receiving the best service possible. Hence we strive hard to achieve the perfect results for our valuable clients.</p>
                <p style="text-align: justify; text-indent: 20px;">Al Bahja Building Maintenance and Cleaning Services do regular cleaning jobs, upholstery cleaning, after-party cleaning, deep cleaning, and move-in move-out cleaning. Al Bahja Building Maintenance and Cleaning Services have cleaners and buses running around Dubai every day.</p>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12 text-center mb-4">
                <div class="section">
                    <img src="assets/img/about.icon.png" alt="Logo" class="logo">
                    <div class="content">
                        <h2>Book Us Get Clean Done & Relax</h2>
                        <p>We offer a full range of Cleaning & Maintenance Services.</p>
                    </div>
                </div>
            </div>
        </div>

        
    <div class="row">
        <div class="col-md-6">
            <div class="row image-and-text">
                <div class="col-md-12 text-content">
                    <h2 class="mt-4 mb-3 text-center">Mission Statement</h2>
                    <p style="text-align: justify;">Our mission is to provide superior customer service by delivering quality cleaning services in a safe and efficient manner, while protecting the environment around us. Al Bahja Building Maintenance and cleaning services strives to develop a lasting relationship with our customers by offering exceptional customer service, high standards of cleanliness, and a commitment to protecting the natural environment.</p>
                </div>
            </div>

            <div class="row image-and-text">
                <div class="col-md-12 text-content">
                    <h2 class="mt-2 mb-3 text-center">Our Commitment</h2>
                    <p style="text-align: justify;">Al Bahja Building Maintenance and cleaning services is committed to the development and implementation of a good management system with a wide-ranging view of the effective expansion of its organization and its services to its customers.</p>

                  </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="image-container">
                <img src="assets/img/about1.png" alt="A team of professional cleaners at work" class="img-fluid">
            </div>
        </div>
    </div>
</div>

    </div>
</section>


<?php include "how-we-works.php"?>





    <!-- Features Section -->
    <section id="features" class="features section" style="padding-top: 0;" >

      <!-- Section Title -->
      <div class="container mt-4 section-title" data-aos="fade-up">
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
               <a href="AC.php" class="read-more btn btn-primary stretched-link">Learn More <i class="bi bi-arrow-right"></i></a>
              </div>
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
            <div class="service-item item-orange position-relative">
              <i class="bi bi-broadcast icon"></i>
              <div>
                <h2>Cleaning</h2>
                <p style="text-align: left;">Al Bahja Building Maintenance is your trusted partner for comprehensive cleaning services in Dubai. </p>
                <a href="CLEAN.php" class="read-more btn btn-primary stretched-link">Learn More <i class="bi bi-arrow-right"></i></a>
              </div>
            </div>
          </div>
</div>
      </div><!-- End Section Title -->
    </section><!-- /Services Section -->

    <!-- Services Section -->
    <section id="services" class="services section" id="service">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Cleaning Services</h2>
        <div class="row g-5">

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
            <div class="service-item item-cyan position-relative">
            <img src="assets/img/deep.png" alt="Logo" style="width: 50px; height: 50px; margin-right: 15px;">
              <div>
                <h3>Deep Cleaning Service</h3>
                <p>Upholstery and mattress cleaning, Carpet cleaning, Cleaning of unreachable and tough spots</p>
                <a href="cleaning-service/deep-cleaning.php" class="btn btn-primary">Learn More</a>
              </div>
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
            <div class="service-item item-orange position-relative">
            <img src="assets/img/hvac.png" alt="Logo" style="width: 50px; height: 50px; margin-right: 15px;">
              <div>
                <h3>HVAC Air Duct Cleaning Service</h3>
                <p>Breathe cleaner air with our expert HVAC air duct cleaning service, ensuring optimal indoor air quality.</p>
                <a href="cleaning-service/air-duct.php" class="btn btn-primary">Learn More</a>
              </div>
            </div>
          </div><!-- End Service Item -->

         

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="300">
            <div class="service-item item-teal position-relative">
            <img src="assets/img/uph.png" alt="Logo" style="width: 50px; height: 50px; margin-right: 15px;">
              <div>
                <h3>Upholstery Sofa Steam Cleaning</h3>
                <p>Revive your upholstery with our professional sofa steam cleaning service, restoring freshness</p>
                <a href="cleaning-service/sofa-steam.php" class="btn btn-primary">Learn More</a>

              </div>
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="300">
            <div class="service-item item-teal position-relative">
            <img src="assets/img/village.png" alt="Logo" style="width: 50px; height: 50px; margin-right: 15px;">
              <div>
                <h3>Villa & House Cleaning</h3>
                <p>Dusting, vacuuming, mopping, sanitizing bathrooms and kitchens, laundry or dishwashing</p>
                <a href="cleaning-service/villa.php" class="btn btn-primary">Learn More</a>
              </div>
            </div>
          </div><!-- End Service Item -->


          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="300">
            <div class="service-item item-teal position-relative">
            <img src="assets/img/water tank.png" alt="Logo" style="width: 50px; height: 50px; margin-right: 15px;">
              <div>
                <h3>Water tank Cleaning & Disinfection</h3>
                <p>Our Water Tank Cleaning & Disinfection Service is a comprehensive solution aimed at ensuring the purity</p>
                <a href="cleaning-service/tank.php" class="btn btn-primary">Learn More</a>
              </div>
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="300">
            <div class="service-item item-teal position-relative">
            <img src="assets/img/window.png" alt="Logo" style="width: 50px; height: 50px; margin-right: 15px;">
              <div>
                <h3>Window Glass Cleaning</h3>
                <p>Exterior Window Cleaning, Facade Cleaning, High-rise Window Cleaning</p>
                <a href="cleaning-service/glass-cleaning.php" class="btn btn-primary">Learn More</a>
              </div>
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="300">
            <div class="service-item item-teal position-relative">
            <img src="assets/img/mattress.png" alt="Logo" style="width: 50px; height: 50px; margin-right: 15px;">
              <div>
                <h3>Mattress Cleaning</h3>
               
               <p>Revitalize your sleep sanctuary with our professional mattress cleaning service, ensuring a deep clean</p>
               <a href="cleaning-service/mattress-cleaning.php" class="btn btn-primary">Learn More</a>
              </div>
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="300">
            <div class="service-item item-teal position-relative">
            <img src="assets/img/carpet.png" alt="Logo" style="width: 50px; height: 50px; margin-right: 15px;">
              <div>
                <h3>Carpet Cleaning</h3>
                <p>Revive your carpets with our professional cleaning service, restoring freshness and vibrancy to your home.</p>
                <a href="cleaning-service/carpet-cleaning.php" class="btn btn-primary">Learn More</a>
              </div>
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="300">
            <div class="service-item item-teal position-relative">
            <img src="assets/img/pool.png" alt="Logo" style="width: 50px; height: 50px; margin-right: 15px;">
              <div>
                <h3>Pool Cleaning</h3>
                
              <p>Keep your pool pristine with our expert pool cleaning service, ensuring crystal-clear waters for your enjoyment.</p>
              <a href="cleaning-service/pool-cleaning.php" class="btn btn-primary">Learn More</a>
            </div>
            </div>
          </div><!-- End Service Item -->

          
        </div>

      </div>


    </section><!-- /Services Section -->






    <!-- Services Section -->
<section id="services" class="services section" id="service">

<!-- Section Title -->
<div class="container section-title" data-aos="fade-up">
  <h2>AC Services</h2>

<section class="services-section py-3">
      <div class="row g-5">

        <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
          <div class="service-item item-cyan position-relative">
            <img src="assets/img/install.png" alt="Logo" style="width: 50px; height: 50px; margin-right: 15px;">
            <div>
              <h3>AC Installation</h3>
              <p>If you’re looking for a reliable AC installation service in Dubai, look no further than Al Bahja Building Maintenance. Our experienced AC technicians can install a wide range of AC systems, from window units to split systems, ensuring that your new unit is installed safely and securely. We also provide expert advice on the best AC system for your space and budget.</p>
              <!-- Button to redirect to install.php -->
              <a href="ac-service/ac-install.php" class="btn btn-primary">Learn More</a>
            </div>
          </div>
        </div><!-- End Service Item -->

        <div class="col-lg-6" data-aos="fade-up" data-aos-delay="400">
          <div class="service-item item-red position-relative">
            <img src="assets/img/duct.png" alt="Logo" style="width: 50px; height: 50px; margin-right: 15px;">
            <div>
              <h3>AC Duct Cleaning</h3>
              <p>The ducts that distribute cool air throughout your space can become clogged with dust, dirt, and other debris. This can reduce the efficiency of your AC system and even affect your indoor air quality. Our AC duct cleaning service ensures that your ducts are clean and free of debris, so your AC system is working efficiently and your indoor air quality is healthy.</p>
              <!-- Button to redirect to cleaning.php -->
              <a href="ac-service/ac-duct.php" class="btn btn-primary">Learn More</a>
            </div>
          </div>
        </div><!-- End Service Item -->

        <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
          <div class="service-item item-orange position-relative">
            <img src="assets/img/maintainance.png" alt="Logo" style="width: 50px; height: 50px; margin-right: 15px;">
            <div>
              <h3>AC Maintenance</h3>
              <p>Regular AC maintenance is essential to ensure that your AC system is running at its best. Our AC maintenance service includes cleaning and checking your AC system’s various components, including the filters, coils, and condenser. By doing this, we can identify any potential issues and fix them before they become bigger problems.</p>
              <!-- Button to redirect to maintain.php -->
              <a href="ac-service/ac-maintain.php" class="btn btn-primary">Learn More</a>
            </div>
          </div>
        </div><!-- End Service Item -->

        <div class="col-lg-6" data-aos="fade-up" data-aos-delay="300">
          <div class="service-item item-teal position-relative">
            <img src="assets/img/repair.png" alt="Logo" style="width: 50px; height: 50px; margin-right: 15px;">
            <div>
              <h3>AC Repair</h3>
              <p>If your AC system is not functioning properly, you need a reliable AC repair service that you can trust. Our expert AC technicians can diagnose and repair a wide range of AC problems, from leaks and compressor issues to gas filling and more.</p>
              <!-- Button to redirect to repair.php -->
              <a href="ac-service/ac-repair.php" class="btn btn-primary">Learn More</a>
            </div>
          </div>
        </div><!-- End Service Item -->

      </div><!-- End row -->
  </section><!-- /Services Section -->
</div><!-- End Section Title -->
</section>


  <?php include "why.php"?>


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