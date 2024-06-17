<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>BBC- Maintenance and Repair</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
 

  <!-- Main CSS File -->
   <link href="assets/css/main.css" rel="stylesheet"> 
  <style>
    /* .carousel-item img {
      width: 100%;
      height: auto;
    } */
  </style>
</head>

<body class="index-page">
  <?php require "db_Connect.php"; ?>
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
        <img src="assets/img/logo.png" alt="">
      </a>

      <nav id="navmenu" class="navmenu">
        <ul>
          <li><a href="#hero">Home</a></li>
          <li><a href="#about">About</a></li>
          <li><a href="#features">Features</a></li>
          <li><a href="#services">Services</a></li>
          <li><a href="#contact">Contact</a></li>
          <li><a href="#book"><button type="button" class="btn btn-primary">Book Now</button></a></li>
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
                  <img src="Slider2.jpeg" alt="">
                  <div class="overlay"></div>
                  <div class="content">
                    <span style="color: rgb(255, 255, 255); font-size: 70px;">AC Services</span>
                    <span>Get Your Service now!</span><br>
                    <button id="slider1-btn" class="btn load-content-btn" data-file="AC.php">Click Here</button>
                  </div>
                </div>
              </div>
              <div class="swiper-slide slide">
                <div class="image-container">
                  <img src="Slider2.jpeg" alt="">
                  <div class="overlay"></div>
                  <div class="content">
                    <span style="color: rgb(255, 255, 255); font-size: 70px;">Cleaning Services</span><br>
                    <span>Get Your Service now!</span><br>
                    <button id="slider2-btn" class="btn load-content-btn" data-file="CLEAN.php">Click Here</button>
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

    <section id="dynamic-content" class="dynamic-content">
      <!-- Loaded content will appear here -->
    </section>

  </main>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>

  <!-- Main JS File -->
  <script src="assets/js/main.js"></script>

  <!-- Custom JS for content loading -->
  <script>
    document.addEventListener('DOMContentLoaded', function () {
      const buttons = document.querySelectorAll('.load-content-btn');

      buttons.forEach(button => {
        button.addEventListener('click', function () {
          const file = this.getAttribute('data-file');
          fetch(file)
            .then(response => response.text())
            .then(data => {
              document.getElementById('dynamic-content').innerHTML = data;
            })
            .catch(error => console.error('Error loading content:', error));
        });
      });
    });
  </script>
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