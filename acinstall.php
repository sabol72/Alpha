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

  <!-- Custom Styles -->
  <style>
    body {
      font-family: 'Roboto', sans-serif;
      background-color: #f0f0f0; /* Light gray background */
      margin: 0;
      padding: 0;
    }

/* Header Styles */
.header {
  color: var(--default-color); /* from File 2 */
  background-color: var(--background-color); /* from File 2 */
  padding: 0px 0;
  transition: all 0.5s;
  z-index: 997;
}

/* Ensuring logo is stable and responsive */
.header .logo {
  display: flex;
  align-items: center;
  line-height: 1;
  padding: 10px 0; /* Adjust padding as needed */
}

.header .logo img {
  max-height: 50px; /* Adjust max height for responsiveness */
  width: auto;
  margin-right: 8px;
  transition: max-height 0.3s ease;
}

.header .logo h1 {
  font-size: 30px;
  margin: 0;
  font-weight: 700;
  color: var(--heading-color); /* from File 2 */
}

/* Responsive adjustments */
@media (max-width: 480px) {
  .header .logo img {
      max-height: 24px;
      position: fixed; /* Smaller logo on very small screens */
  }

  .header .logo h1 {
      font-size: 24px;
  }
}


@media (max-width: 1200px) {
  .header .logo {
    order: 1;
  }

 
  .header .navmenu {
    order: 3;
  }
}

.scrolled .header {
    padding:  0; /* Adjust padding to make header look bigger */
  box-shadow: 0px 0 18px color-mix(in srgb, var(--default-color), transparent 85%); /* from File 2 */
}

.index-page .header {
  --background-color: rgba(255, 255, 255, 0); /* from File 2 */
}

.index-page.scrolled .header {
  --background-color: #ffffff; /* from File 2 */
}

/* Navigation Menu Styles */
@media (min-width: 1200px) {
  .navmenu {
    padding: 0px;
  }

  .navmenu ul {
    margin: 0;
    padding: 0;
    display: flex;
    list-style: none;
    align-items: center;
  }

  .navmenu li {
    position: relative;
  }

  .navmenu a,
  .navmenu a:focus {
    color: var(--nav-color); /* from File 2 */
    padding: 18px 15px;
    font-size: 16px;
    font-family: var(--nav-font); /* from File 2 */
    font-weight: 400;
    display: flex;
    align-items: center;
    white-space: nowrap;
    transition: 0.3s;
  }

  .navmenu a:hover,
  .navmenu .active,
  .navmenu .active:focus,
  .navmenu li:hover > a {
    color: var(--nav-hover-color); /* from File 2 */
  }

  .navmenu li:hover .dropdown {
    display: block;
  }

  .navmenu .dropdown {
    display: block;
    position: absolute;
    left: 0;
    top: calc(100% + 30px);
    z-index: 99;
    opacity: 0;
    visibility: hidden;
    padding: 15px 0;
    margin: 0;
    background: var(--nav-dropdown-background-color); /* from File 2 */
    box-shadow: 0px 0 30px rgba(127, 137, 161, 0.25);
    transition: 0.3s;
  }

  .navmenu .dropdown ul {
    opacity: 0;
    visibility: hidden;
    transition: 0.3s;
    transition-delay: 0s;
  }

  .navmenu .dropdown li {
    min-width: 200px;
  }

  .navmenu li:hover > .dropdown,
  .navmenu li:hover > .dropdown ul {
    opacity: 1;
    top: 100%;
    visibility: visible;
  }

  .navmenu .dropdown a {
    padding: 10px 20px;
    font-size: 15px;
    font-weight: 500;
    color: var(--nav-dropdown-color); /* from File 2 */
    background: var(--nav-dropdown-background-color); /* from File 2 */
  }

  .navmenu .dropdown a:hover,
  .navmenu .dropdown .active:hover,
  .navmenu .dropdown .active:focus,
  .navmenu .dropdown .active {
    color: var(--nav-dropdown-hover-color); /* from File 2 */
  }

  .navmenu .dropdown .dropdown {
    top: 0;
    left: calc(100% - 30px);
    visibility: hidden;
  }

  .navmenu .dropdown .dropdown li {
    min-width: 200px;
  }

  .navmenu li:hover > .dropdown .dropdown {
    opacity: 1;
    top: 0;
    left: 100%;
    visibility: visible;
  }
}

/* Media Query for Smaller Screens */
@media (max-width: 1199px) {
  .mobile-nav-toggle {
    color: var(--nav-color); /* from File 2 */
    font-size: 28px;
    cursor: pointer;
    display: none;
    line-height: 0;
    transition: 0.5s;
  }

  .mobile-nav-toggle.bi-x {
    color: var(--main-color); /* from File 1 */
  }

  .navmenu {
    display: none;
  }

  .navmenu ul {
    display: block;
    position: fixed;
    top: 0;
    left: 0;
    z-index: 9997;
    width: 100%;
    height: 100%;
    padding: 10px 0;
    margin: 0;
    transition: 0.3s;
    background-color: var(--background-color); /* from File 2 */
    overflow-y: auto;
    transition: 0.3s;
  }

  .navmenu ul::before {
    content: "";
    position: fixed;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: rgba(52, 59, 64, 0.9);
    z-index: 9996;
    overflow: hidden;
    transform: scaleX(0);
    transform-origin: 0 0;
    transition: transform 0.3s ease-in-out;
  }

  .navmenu ul.show::before {
    transform: scaleX(1);
  }

  .navmenu ul.show {
    display: block;
    right: 0;
    visibility: visible;
    opacity: 1;
  }

  .navmenu li {
    position: relative;
  }

  .navmenu a,
  .navmenu a:focus {
    font-size: 16px;
    padding: 10px 20px;
    color: var(--nav-color); /* from File 2 */
  }

  .navmenu .dropdown ul {
    position: static;
    display: none;
    margin-top: 10px;
    padding: 10px 0;
    transition: all 0.5s ease-in-out;
    border-top: 1px solid rgba(255, 255, 255, 0.3);
  }

  .navmenu .dropdown > .dropdown-active {
    display: block;
  }

  .navmenu .dropdown .dropdown ul {
    margin: 10px 0;
    padding: 10px 0;
  }

  .navmenu .dropdown .dropdown {
    margin: 10px 0;
    padding: 10px 0;
  }

  .scrolled .mobile-nav-toggle {
    color: var(--default-color); /* from File 2 */
  }

  .mobile-nav-active {
    overflow: hidden;
  }

  .mobile-nav-active .navmenu {
    display: block;
  }

  .mobile-nav-active .mobile-nav-toggle {
    color: var(--main-color); /* from File 1 */
  }
}



    .hero-section {
      background-image: url('path/to/your-background-image.jpg'); /* Replace with your image path */
      background-size: cover;
      background-position: center;
      color: #ffffff; /* Text color (white) */
      text-align: center;
      padding: 150px 0; /* Adjust padding as needed */
      margin-top: 80px; /* Ensure content starts below the fixed header */
    }

    .hero-section h1 {
      font-size: 2.5rem; /* Larger font size for h1 */
      font-weight: 600; /* Bold font weight */
      color: #333333; /* Darker color for h1 */
      margin-bottom: 20px; /* Bottom margin for spacing */
    }

    .hero-section p {
      font-size: 1.2rem; /* Font size for p */
      color: #666666; /* Less dark color for p */
    }

    .navbar {
      background-color: #333333; /* Dark background color for navbar */
      text-align: center; /* Center align text */
      padding: 10px 0; /* Padding top and bottom */
      z-index: 999; /* Ensure it's above other content */
    }

    .navbar-nav {
      display: flex;
      justify-content: center;
    }

    .navbar-nav .nav-item {
      margin: 0 10px;
    }

    .navbar-nav .nav-link {
      color: #ffffff; /* Navbar link color */
      font-size: 1.2rem; /* Navbar link font size */
    }

    /* Custom styles can be added here if needed */
    .service-item {
      display: flex;
      align-items: center;
    }

    .service-item img {
      width: 80px; /* Adjust width as needed */
      height: auto; /* Maintain aspect ratio */
      margin-right: 15px; /* Add margin between image and text */
    }
    .services-section {
      background-color: #ffffff; /* White background for services section */
      padding: 50px 0; /* Adjust padding as needed */
    }

    .service-title {
      font-weight: 600; /* Semi-bold font weight */
    }

    .service-item {
      display: flex;
      align-items: center;
    }

    .service-item img {
      width: 80px; /* Adjust width as needed */
      height: auto; /* Maintain aspect ratio */
      margin-right: 15px; /* Add margin between image and text */
    }

  </style>
</head>

<body>

  <header class="header">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">
      <a href="index.html" class="logo d-flex align-items-center">
        <img src="assets/img/logo.png" alt="Logo">
      </a>

      <nav class="navmenu">
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

  <div class="container-fluid hero-section">
    <div class="row">
      <div class="col-md-12">
        <h1>EMERGENCY AC REPAIR SERVICES IN DUBAI | 24/7 AIR CONDITIONING REPAIR</h1>
        <p>AC Repair Dubai, AC Repair Services near Me, Emergency AC Repair, Air Conditioning Repair, AC Maintenance, AC Installation</p>
      </div>
    </div>
  </div>

  <nav class="navbar navbar-expand-lg">
    <div class="container">
      <div class="collapse navbar-collapse">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="#">AC Installation</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">AC Repair</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Duct Cleaning</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Maintenance</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>


  <div class="container pt-5" >
  <div class="row">
    <div class="col-md-6 ">
      <img src="repair.jpg" class="img-fluid" alt="Cleaning Image">
    </div>
    <div class="col-md-6">
        <h1 style="font-size: 1.5rem;">WELCOME TO AC INSTALLATION SERVICE</h1>
        <p style="color: black;">
  If you’re looking for a reliable AC installation service in Dubai, look no further than Al Bahja Buildling Maintenance. Our experienced AC technicians can install a wide range of AC systems, from window units to split systems, ensuring that your new unit is installed safely and securely. We also provide expert advice on the best AC system for your space and budget.
  <ul>
    <li>AC Installation</li>
    <li>AC Duct Cleaning</li>
    <li>AC Maintenance Service</li>
    <li>AC Repair</li>
  </ul>
</p>
    </div>
  </div>
</div>


<section class="services-section py-5">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center mb-4">
          <h2 class="service-title" style="font-weight: 400; color: #555;">Our Services</h2>
        </div>
      </div>
  <!-- Service Item Section -->
  <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center mb-4">
          <h2 class="service-title">Our AC Installation Services</h2>
        </div>
      </div>
    <div class="container">
      <div class="row">
        <div class="col-lg-6 mb-4">
          <div class="service-item item-cyan position-relative p-4 d-flex align-items-center">
            <img src="assets/img/install.png" alt="AC Installation" class="mr-3" >
            <div>
              <h3>AC Installation</h3>
              <p>If you’re looking for a reliable AC installation service in Dubai, look no further than Al Bahja Building
                Maintenance. Our experienced AC technicians can install a wide range of AC systems, from window units to
                split systems, ensuring that your new unit is installed safely and securely.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>





  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>
