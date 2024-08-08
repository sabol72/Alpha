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
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

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
                <a href="ac-install.php" style="color: #000;"><i class="bi bi-arrow-right-circle"></i><span>AC Installation</span></a>
                <a href="ac-duct.php" style="color: #000;"><i class="bi bi-arrow-right-circle"></i><span>AC Duct Cleaning</span></a>
                <a href="ac-maintain.php" style="color: #000;"><i class="bi bi-arrow-right-circle"></i><span>AC Maintenance Service</span></a>
                <a href="ac-repair.php" class="active"  style="color: #000;"><i class="bi bi-arrow-right-circle"></i><span>AC Repair</span></a>
              </div>
            </div><!-- End Services List -->
            <div class="container">
            <div class="services-list">
            <h2 class="booking-info">Book your ac repair  service today.</h2>
            <a href="../indbooking/index.php" class=" btn-lg btn-book-now" style="color: white; background-color: green; padding: 10px 20px; border-radius: 5px; text-decoration: none;">
    Book Now <i class="fas fa-arrow-right ml-2"></i></a>
      </div>
      </div>

            <div class="help-box">
              <i class="bi bi-headset help-icon"></i>
              <h4 style="color: #000;">Have a Question?</h4>
              <p style="color: #000;" class="d-flex align-items-center mt-2 mb-0"><i class="bi bi-telephone me-2"></i> <span>+1 5589 55488 55</span></p>
              <p style="color: #000;" class="d-flex align-items-center mt-1 mb-0"><i class="bi bi-envelope me-2"></i> <a href="mailto:contact@example.com" style="color: #000;">contact@example.com</a></p>
            </div>

          </div>

          <div class="col-lg-8 ps-lg-5" data-aos="fade-up" data-aos-delay="200">
          <div id="repair" class="service-content">
              <img src="../img/acrepair1.png" alt="AC Repair" class="img-fluid services-img">
              <h3>WELCOME TO AC REPAIR SERVICE</h3>
              <p>If your AC system is not cooling properly or making strange noises, our AC repair service can help. Our technicians diagnose and repair all types of AC problems to restore comfort to your space.</p>
            </div>

            <div id="repair" class="service-content">
              <img src="../img/acrepair2.png" alt="AC Repair" class="img-fluid services-img">
              <h3>Why Choose Us for Your AC Repair Needs?</h3>
              <p>At  Al Bahja Building Maintenance , we understand the importance of a well-functioning air conditioning system, especially during those hot summer months. Our team of certified technicians is dedicated to providing prompt, reliable, and efficient AC repair services to ensure your home or business stays cool and comfortable all year round.</p>
            </div>
          </div>
         
        </div>

      </div>

    </section><!-- /Service Details Section -->

    <section id="service-details" class="service-details section">

<div class="container">
<div class="section-title pb-3 pt-5">
<h2>What's more!</h2></div>
  <div class="row gy-5">
  
    <div class="service-content active-content d-flex align-items-start" data-aos="fade-up" data-aos-delay="30">
      <img src="../img/acrepair3.png" alt="AC Installation" class="img-fluid services-img me-3 w-50">
      <div class="text-content">
        <h3>Prompt and Reliable AC Repair Services in Dubai</h3>
        <p>When your AC breaks down, trust Al Bahja Building Maintenance for prompt and reliable repairs in Dubai. Our experienced technicians handle all issues efficiently, ensuring your system is quickly up and running. We use high-quality parts for lasting solutions. Choose us for fast, effective, and affordable AC repair services to keep your space cool and comfortable.</p>
      </div>
    </div>

    

   <div class="service-content active-content d-flex align-items-start py-9" data-aos="fade-up" data-aos-delay="50">
      <div class="text-content">
        <h3>Efficient AC Repair Services in Dubai</h3>
        <p>Count on Al Bahja Building Maintenance for swift and reliable AC repairs in Dubai. Our skilled technicians swiftly diagnose and resolve a wide range of issues to restore your AC's functionality promptly. Using high-quality parts and efficient techniques, we ensure durable solutions to keep your space comfortably cool. Trust our expertise for fast, effective, and affordable AC repair services that prioritize your comfort and satisfaction.</p>
      </div>
      <img src="../img/acmaintain6.png" alt="AC Installation" class="img-fluid services-img me-3 w-50">
    </div>

    <div class="service-content active-content d-flex align-items-start" data-aos="fade-up" data-aos-delay="30">
      <img src="../img/acmaintain0.png" alt="AC Installation" class="img-fluid services-img me-3 w-50">
      <div class="text-content">
        <h3>Stay Cool and Comfortable with Our Expert AC Repair Services</h3>
        <p>At Al Bahja Building Maintenance, we understand the importance of a well-functioning air conditioning system, especially during the hot summer months. Our team of experienced technicians is dedicated to providing top-notch AC repair services to keep your home or business cool and comfortable.  </p>
      </div>
    </div>

    <div class="service-content active-content d-flex align-items-start py-9" data-aos="fade-up" data-aos-delay="50">
      <div class="text-content">
        <h3>Emergency AC Repair</h3>
        <p>We know that AC problems can arise at any time, often when you least expect them. That's why we offer 24/7 emergency repair services. No matter the time of day or night, you can count on us to restore your comfort quickly and efficiently.</p>
      </div>
      <img src="../img/acrepair6.png" alt="AC Installation" class="img-fluid services-img me-3 w-50">
    </div>


</div>
</div>
</section>
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

    <section id="service-details" class="service-details section bg-light py-5">

  <div class="container">
  
    <div class="row gy-5 justify-content-center">
    
      <div class="col-lg-8">
      <div class="section-title pb-3 pt-5">
      <h3 style="color: #007bff; font-weight: bold;">Why Choose Our AC  Repair Services?</h3>
      </div>


                  <!-- Box 1 -->

          <div class="service-box text-center p-4 mb-4" style="background-color: #ffffff; border-radius: 10px; box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);">

          <div style="font-size: 1.1rem; line-height: 1.8;">
            <p>Our team of experienced technicians is dedicated to providing top-notch AC repair services to keep your home or business cool and comfortable.</p>
          </div>
          
        </div>
        
        <!-- Box 2 -->
        <div class="service-box text-center p-4 mb-4" style="background-color: #ffffff; border-radius: 10px; box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);">
        
          <h3 style="color: #007bff; font-weight: bold;">Experienced Technicians</h3>
          
          <div style="font-size: 1.1rem; line-height: 1.8;">
            <p>Our skilled professionals have years of experience in diagnosing and repairing all types of air conditioning systems.</p>
          </div>
          
        </div>
        
        <!-- Box 3 -->
        <div class="service-box text-center p-4 mb-4" style="background-color: #ffffff; border-radius: 10px; box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);">
        
          <h3 style="color: #007bff; font-weight: bold;">Prompt Service</h3>
          
          <div style="font-size: 1.1rem; line-height: 1.8;">
            <p> We value your time and offer quick response times to ensure your AC is up and running as soon as possible.</p>
          </div>
          
        </div>
        
        <!-- Box 4 -->
        <div class="service-box text-center p-4 mb-4" style="background-color: #ffffff; border-radius: 10px; box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);">
        
          <h3 style="color: #007bff; font-weight: bold;">Customer Satisfaction</h3>
          
          <div style="font-size: 1.1rem; line-height: 1.8;">
            <p>We are committed to delivering exceptional service and ensuring our customers are completely satisfied.</p>
          </div>
          
        </div>
        
        <!-- Box 5 -->
        <div class="service-box text-center p-4 mb-4" style="background-color: #ffffff; border-radius: 10px; box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);">
        
          <h3 style="color: #007bff; font-weight: bold;">Comprehensive Repairs</h3>
          
          <div style="font-size: 1.1rem; line-height: 1.8;">
            <p>From minor fixes to major repairs, we handle it all with precision and expertise.</p>
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


     <?php include "FAQ.php" ?> 

  </main>

  <!-- Footer -->
  <?php include "footer.php"?>
  <!-- End Footer -->

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
