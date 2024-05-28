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
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">


  <!-- Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet">
  <!-- <link href="assets/css/Style.css" rel="stylesheet"> -->

  <!-- slider css -->
  <style>
    /* Optional: Custom styles for the image slider */
    .carousel-item img {
      width: 100%;
      height: auto;
    }
  </style>
</head>

<body class="index-page">
<?php
// Initialize variables
$showForm = true;
$message = "";

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $name = $_POST['gname'];
    $email = $_POST['gmail'];
    $mobile = $_POST['cnum'];
    $address = $_POST['CAddress'];
    $serviceType = $_POST['cage'];
    $userMessage = $_POST['message'];

    // Validate form data
    if (!empty($name) && !empty($email) && !empty($mobile) && !empty($address) && !empty($serviceType) && !empty($userMessage)) {
  
$customer_name = $_POST['gname'];
$customer_email = $_POST['gmail'];
$mobile = $_POST['cnum'];
$address = $_POST['CAddress'];
$service_type = $_POST['cage'];
$message = $_POST['message'];

$sql = "INSERT INTO bookings (customer_name, customer_email, mobile, address, service_type, message) 
        VALUES (?, ?, ?, ?, ?, ?)";

$stmt = $conn->prepare($sql);
$stmt->bind_param("ssssss", $customer_name, $customer_email, $mobile, $address, $service_type, $message);
$txt="";
if ($stmt->execute()) {
    // $txt = "New record created successfully";

    // echo "<script>alert('$txt');</script>";
} else {
    $txt = "Error: " . $sql . "<br>" . $conn->error;
    echo "<script>alert('$txt');</script>";
}

$stmt->close();
$conn->close();

        // Display confirmation message
        $showForm = false;
        $message = "You have booked your service. We will get back to you shortly.";
    }
}
?>

  <header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl position-relative d-flex align-items-center">

      <a href="index.html" class="logo d-flex align-items-center me-auto">
        <img src="assets/img/apple-touch-icon.png" alt="">
        <h1 class="sitename">BBC maintenance</h1>
      </a>

      <nav id="navmenu" class="navmenu">
        <ul>
          <li><a href="index.html#hero" class="">Home</a></li>
          <li><a href="index.html#about">About</a></li>
          <li><a href="index.html#features">Features</a></li>
          <li><a href="index.html#services">Services</a></li>
          <li><a href="index.html#contact">Contact</a></li>
          <li><button type="button" class="btn btn-primary">Book Now</button></li>
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>

    </div>
  </header>

  <main class="main">

    <!-- Hero Section -->
    <section id="hero" class="hero section">
      
      <Section class="home-bg">
        <section class="home">
           <div class="swiper home-slider">
              <div class="swiper-wrapper">
     
                 <div class="swiper-slide slide">
                    <div class="image-container">
                       <img src="Slider2.jpeg" alt="">
                       <div class="overlay"></div>
                       <div class="content">
                           <span style="color: rgb(255, 255, 255); font-size: 70px;">AC Maintenance</span>
                           <span>Get Your Service now!</span><br>
                           <a href="shop.php" class="btn">Book now</a>
                       </div>
                    </div>
                 </div>
                 <div class="swiper-slide slide">
                  <div class="image-container">
                     <img src="Slider2.jpeg" alt="">
                     <div class="overlay"></div>
                     <div class="content">
                         <span style="color: rgb(255, 255, 255); font-size: 70px;">AC Maintenance</span><br>
                         <span>Get Your Service now!</span><br>
                         <a href="shop.php" class="btn">Book now</a>
                     </div>
                  </div>
               </div>  <div class="swiper-slide slide">
                <div class="image-container">
                   <img src="Slider2.jpeg" alt="">
                   <div class="overlay"></div>
                   <div class="content">
                       <span style="color: rgb(255, 255, 255); font-size: 70px;">AC Maintenance</span><br>
                       <span>Get Your Service now!</span><br>
                       <a href="shop.php" class="btn">Book now</a>
                   </div>
                </div>
             </div>  <div class="swiper-slide slide">
              <div class="image-container">
                 <img src="Slider2.jpeg" alt="">
                 <div class="overlay"></div>
                 <div class="content">
                     <span style="color: rgb(255, 255, 255); font-size: 70px;">AC Maintenance</span><br>
                     <span>Get Your Service now!</span><br>
                     <a href="shop.php" class="btn">Book now</a>
                 </div>
              </div>
           </div>
              </div>
              <!-- Add Pagination -->
              <div class="swiper-pagination"></div>
              <!-- Add Navigation -->
              <div class="swiper-button-next"></div>
              <div class="swiper-button-prev"></div>
           </div>
        </section>
     </Section>
    </section><!-- /Hero Section -->

    <!-- Featured Services Section -->
    <section id="featured-services" class="featured-services section">

      <div class="container">

        <div class="row gy-4">

          <div class="col-xl-4 col-lg-6" data-aos="fade-up" data-aos-delay="100">
            <div class="service-item d-flex">
              <div class="icon flex-shrink-0"><i class="bi bi-briefcase"></i></div>
              <div>
                <h4 class="title"><a href="#" class="stretched-link">Lorem Ipsum</a></h4>
                <p class="description">Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi</p>
              </div>
            </div>
          </div>
          <!-- End Service Item -->

          <div class="col-xl-4 col-lg-6" data-aos="fade-up" data-aos-delay="200">
            <div class="service-item d-flex">
              <div class="icon flex-shrink-0"><i class="bi bi-card-checklist"></i></div>
              <div>
                <h4 class="title"><a href="#" class="stretched-link">Dolor Sitema</a></h4>
                <p class="description">Minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip exa</p>
              </div>
            </div>
          </div><!-- End Service Item -->

          <div class="col-xl-4 col-lg-6" data-aos="fade-up" data-aos-delay="300">
            <div class="service-item d-flex">
              <div class="icon flex-shrink-0"><i class="bi bi-bar-chart"></i></div>
              <div>
                <h4 class="title"><a href="#" class="stretched-link">Sed ut perspiciatis</a></h4>
                <p class="description">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum</p>
              </div>
            </div>
          </div><!-- End Service Item -->

        </div>

      </div>

    </section><!-- /Featured Services Section -->

    

                   
           

            



    <!-- Services Section -->
    <section id="services" class="services section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Services</h2>
        <p>Services that we provide for you.</p>
      </div><!-- End Section Title -->

      <div class="container">

        <div class="row g-5">

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
            <div class="service-item item-cyan position-relative">
              <i class="bi bi-thermometer-half"></i>
              <div>
                <h3>AC Installation</h3>
                <p>If you’re looking for a reliable AC installation service in Dubai, look no further than Toolboys. Our experienced AC technicians can install a wide range of AC systems, from window units to split systems, ensuring that your new unit is installed safely and securely. We also provide expert advice on the best AC system for your space and budget.</p>
                
              </div>
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
            <div class="service-item item-orange position-relative">
              <i class="bi bi-tools"></i>
              <div>
                <h3>AC Maintainance</h3>
                <p>Regular AC maintenance is essential to ensure that your AC system is running at its best. Our AC maintenance service includes cleaning and checking your AC system’s various components, including the filters, coils, and condenser. By doing this, we can identify any potential issues and fix them before they become bigger problems.</p>
                
              </div>
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="300">
            <div class="service-item item-teal position-relative">
              <i class="fas fa-tools"></i>
              
              <div>
                <h3>AC Repairt</h3>
                <p>If your AC system is not functioning properly, you need a reliable AC repair service that you can trust. Our expert AC technicians can diagnose and repair a wide range of AC problems, from leaks and compressor issues to gas filing and more.</p>
                
              </div>
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="400">
            <div class="service-item item-red position-relative">
              <i class="fas fa-wrench"></i>
              <div>
                <h3>AC Duct cleaning</h3>
                <p>At ToolBoys, we take pride in providing reliable, affordable, and high-quality AC technician services in Dubai. Contact us today to schedule an appointment with one of our experienced AC technicians.</p>
                
              </div>
            </div>
          </div><!-- End Service Item -->

          


        </div>

      </div>

    </section><!-- /Services Section -->

    



       

    
    
  

            

    <!-- Contact Section -->
   <section id="contact" class="contact section">

    <!-- Section Title -->
    <div class="container section-title" data-aos="fade-up">
        <h2>Contact Us</h2>
        
    </div><!-- End Section Title -->

    <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-4">

            <div class="col-lg-6">
                <div class="info-item d-flex flex-column justify-content-center align-items-center" data-aos="fade-up" data-aos-delay="200">
                    <i class="bi bi-geo-alt"></i>
                    <h3>Address</h3>
                    <p>A108 Adam Street, New York, NY 535022</p>
                </div>
            </div><!-- End Info Item -->

            <div class="col-lg-3 col-md-6">
                <div class="info-item d-flex flex-column justify-content-center align-items-center" data-aos="fade-up" data-aos-delay="300">
                    <i class="bi bi-telephone"></i>
                    <h3>Call Us</h3>
                    <p>+1 5589 55488 55</p>
                </div>
            </div><!-- End Info Item -->

            <div class="col-lg-3 col-md-6">
                <div class="info-item d-flex flex-column justify-content-center align-items-center" data-aos="fade-up" data-aos-delay="400">
                    <i class="bi bi-envelope"></i>
                    <h3>Email Us</h3>
                    <p>info@example.com</p>
                </div>
            </div><!-- End Info Item -->

        </div>

        <div class="container mt-5">
        <h3 class="text-center">Book Your Service Now</h3>
            <div id="formContainer" <?php if (!$showForm) echo 'style="display: none;"'; ?>>
                <form action="" method="post" class="needs-validation" novalidate>
                    <div class="bg-white p-4 p-sm-5">
                        <div class="row g-3">
                            <div class="col-sm-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="gname" name="gname" placeholder="Customer Name" required>
                                    <label for="gname">Your Name</label>
                                    <div class="invalid-feedback">
                                        Please provide your name.
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-floating">
                                    <input type="email" class="form-control" id="gmail" name="gmail" placeholder="Customer Email" required>
                                    <label for="gmail">Your Email</label>
                                    <div class="invalid-feedback">
                                        Please provide a valid email address.
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="cnum" name="cnum" placeholder="Your Mobile" required pattern="[0-9]+" title="Please enter only numeric digits" minlength="10" maxlength="15">
                                    <label for="cnum">Your Mobile</label>
                                    <div class="invalid-feedback">
                                        Please provide your mobile number (10 digits).
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="CAddress" name="CAddress" placeholder="Your Address" required>
                                    <label for="CAddress">Your Address</label>
                                    <div class="invalid-feedback">
                                        Please provide your address.
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-floating">
                                    <select class="form-select" id="cage" name="cage" aria-label="Service Type" required>
                                        <option value="" selected disabled>Select Service Type</option>
                                        <option value="Service 1">Service 1</option>
                                        <option value="Service 2">Service 2</option>
                                        <option value="Service 3">Service 3</option>
                                        <option value="Service 4">Service 4</option>
                                    </select>
                                    <label for="cage">Service Type</label>
                                    <div class="invalid-feedback">
                                        Please select a service type.
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <textarea class="form-control" placeholder="Leave a message here" id="message" name="message" style="height: 80px" required></textarea>
                                    <label for="message">Message</label>
                                    <div class="invalid-feedback">
                                        Please leave a message.
                                    </div>
                                </div>
                            </div>
                            <input type="hidden" name="status" value="New">
                            <div class="col-12">
                                <button class="btn btn-primary py-3 px-5" type="submit">Book Now!</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div id="confirmationContainer" <?php if ($showForm) echo 'style="display: none;"'; ?>>
                <div class="bg-white p-4 p-sm-5 text-center">
                    <p class="lead"><?php echo $message; ?></p>
                    <button class="btn btn-primary py-3 px-5" onclick="showForm()">Book Another Service</button>
                </div>
            </div>
        </div><!-- End Container for Form and Confirmation -->
        <div class="row gy-4 mt-1 justify-content-center align-items-center">
    <div class="col-12 text-center">
        <h3>Our Location</h3>
    </div>
    <div class="col-lg-6" data-aos="fade-up" data-aos-delay="300">
        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d48389.78314118045!2d-74.006138!3d40.710059!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c25a22a3bda30d%3A0xb89d1fe6bc499443!2sDowntown%20Conference%20Center!5e0!3m2!1sen!2sus!4v1676961268712!5m2!1sen!2sus" frameborder="0" style="border:0; width: 100%; height: 400px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div><!-- End Google Maps -->
</div>
    </div><!-- End Container for Contact Section Content -->

</section><!-- End Contact Section -->
<!-- /Contact Section -->

  </main>



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

  <!-- for slider of photos -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

  <!-- Main JS File -->
  <script src="assets/js/main.js"></script>
  <script src="assets/js/script.js"></script>

</body>

</html>