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
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900&family=Inter:wght@100;200;300;400;500;600;700;800;900&family=Nunito:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900&display=swap"
        rel="stylesheet">

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
            /* Set relative positioning for the container */
            display: inline-block;
            /* Ensure the container size fits the content */
            padding: 10px;
            /* Add padding to create space around the button */
        }

        .btn-book-now i {
            position: absolute;
            right: 10px;
            /* Initial position of the arrow */
            top: 50%;
            transform: translateY(-50%);
            /* Center vertically */
            transition: right 0.3s ease;
            /* Transition the 'right' property */
        }

        .btn-book-now:hover i {
            right: 0;
            /* Move the arrow to the end of the box */
        }

        .row {
            display: flex;
            margin: 0;
            padding: 0;
        }

        .img-container {
            overflow: hidden;
            position: relative;
            width: 100%;
        }

        .large-img-container {
            height: 50vh;
            /* Large image takes up half of viewport height */
        }

        .small-img-container {
            height: 50vh;
            /* Small image container takes up half of viewport height */
            display: flex;
            flex-direction: column;
            margin: 0;
            padding: 0;
            gap: 10px;
            /* Space between the small images */
            position: relative;
            /* Position relative for absolute positioning of hovered image */
        }

        .small-img {
            height: calc(50vh / 3);
            /* Set height of each small image to be equal to one-third of the large image's height */
            position: relative;
            /* For absolute positioning of hovered image */
            overflow: hidden;
            /* Ensure content does not overflow */
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            /* Transition for hover effects */
        }

        .small-img img {
            width: 100%;
            height: 100%;
            /* Ensure images fill their container */
            object-fit: contain;
            /* Do not crop, fit the image inside the container */
            display: block;
            /* Remove extra space below the image */
        }

        .small-img:hover {
            position: absolute;
            /* Take it out of the document flow */
            top: 0;
            left: 0;
            width: 100%;
            /* Cover the full width */
            height: 100%;
            /* Cover the full height */
            z-index: 10;
            /* Ensure it is on top of other content */
            transform: scale(1.1);
            /* Slightly zoom in the image */
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            /* Add shadow on hover */
        }

        .large-img-container img {
            width: 100%;
            height: 100%;
            /* Ensure the image covers the container */
            object-fit: cover;
            /* Crop the image to fit the container */
        }

        /* Social Media Styles */
        .social-media {
            display: flex;
            justify-content: center;
            /* Center horizontally */
            margin-top: 10px;
            /* Space above social media icons */
        }

        .social-icon {
            margin: 0 10px;
            /* Space between icons */
            font-size: 24px;
            /* Icon size */
            color: #333;
            /* Default icon color */
            transition: color 0.3s ease;
            /* Smooth color transition */
        }

        .facebook-icon:hover {
            color: #3b5998;
            /* Facebook theme color on hover */
        }

        .twitter-icon:hover {
            color: #1da1f2;
            /* Twitter theme color on hover */
        }

        .instagram-icon:hover {
            color: #e4405f;
            /* Instagram theme color on hover */
        }

        .linkedin-icon:hover {
            color: #0077b5;
            /* LinkedIn theme color on hover */
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
                    <li><a href="../Login-system/login.php"><button type="button" class="btn btn-primary">Book
                                Now</button></a></li>
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
                    <div class="col-lg-4">

                        <div class="service-box">
                            <h4>Services List</h4>
                            <div class="services-list">
                                <a href="deep-cleaning.php" class="service-link active"><i
                                        class="bi bi-arrow-right-circle"></i><span>Deep Cleaning</span></a>
                                <a href="air-duct.php" class="service-link"><i
                                        class="bi bi-arrow-right-circle"></i><span>HVAC Air Duct Cleaning</span></a>
                                <a href="sofa-steam.php" class="service-link"><i
                                        class="bi bi-arrow-right-circle"></i><span>Upholstery Sofa Steam
                                        Cleaning</span></a>
                                <a href="villa.php" class="service-link"><i
                                        class="bi bi-arrow-right-circle"></i><span>Villa & House Cleaning</span></a>
                                <a href="tank.php" class="service-link"><i
                                        class="bi bi-arrow-right-circle"></i><span>Water Tank Cleaning &
                                        Disinfection</span></a>
                                <a href="glass-cleaning.php" class="service-link"><i
                                        class="bi bi-arrow-right-circle"></i><span>Window Glass Cleaning</span></a>
                                <a href="mattress-cleaning.php" class="service-link"><i
                                        class="bi bi-arrow-right-circle"></i><span>Mattress Cleaning</span></a>
                                <a href="carpet-cleaning.php" class="service-link"><i
                                        class="bi bi-arrow-right-circle"></i><span>Carpet Cleaning</span></a>
                                <a href="pool-cleaning.php" class="service-link"><i
                                        class="bi bi-arrow-right-circle"></i><span>Pool Cleaning</span></a>
                            </div>
                        </div><!-- End Services List -->


                        <div class="help-box d-flex flex-column justify-content-center align-items-center">
                            <i class="bi bi-headset help-icon"></i>
                            <h4>Have a Question?</h4>
                            <p class="d-flex align-items-center mt-2 mb-0"><i class="bi bi-telephone me-2"></i> <span>+1
                                    5589 55488 55</span></p>
                            <p class="d-flex align-items-center mt-1 mb-0"><i class="bi bi-envelope me-2"></i> <a
                                    href="mailto:contact@example.com">contact@example.com</a></p>
                        </div>

                        <!-- <div class="container">
              <div class="services-list">
                <h2 class="Quote-info">Free quote for deep cleaning services.</h2>
                <a href="../Login-system/login.php" class=" btn-lg btn-book-now" style="color: white; background-color: yellow; padding: 10px 20px; border-radius: 5px; text-decoration: none;">
                 <h3> Get a Quote.</h3><i class="fas fa-arrow-right ml-2"></i></a>
              </div>
            </div> -->

                    </div>
                    <div class="col-lg-8">
                        <!-- Deep Cleaning Service -->
                        <div id="deep-cleaning" class="service-content active-content">
                            <!-- Row for Large Image and Smaller Images -->
                            <div class="row no-gutters" style="margin: 0; padding: 0;">
                                <!-- Large Image Covering More Width -->
                                <div class="col-md-8 mb-0" style="padding: 0;">
                                    <div class="img-container large-img-container"
                                        style="border-radius: 10px; overflow: hidden;">
                                        <img src="../img/hvac1.png" alt="Deep Cleaning" class="img-fluid services-img"
                                            style="border-radius: 10px;">
                                    </div>
                                </div>

                                <!-- Column for Smaller Images -->
                                <div class="col-md-4 mb-0" style="padding: 0;">
                                    <div class="img-container small-img-container"
                                        style="display: flex; flex-direction: column;">
                                        <!-- Stack the smaller images vertically with no spacing -->
                                        <div class="small-img"
                                            style="margin-bottom: 5px; border-radius: 10px; overflow: hidden;">
                                            <img src="../img/deep-clean3.jpg" alt="Deep Cleaning"
                                                class="img-fluid services-img" style="border-radius: 10px;">
                                        </div>
                                        <div class="small-img"
                                            style="margin-bottom: 5px; border-radius: 10px; overflow: hidden;">
                                            <img src="../img/deepclean2.png" alt="Deep Cleaning"
                                                class="img-fluid services-img" style="border-radius: 10px;">
                                        </div>
                                        <div class="small-img" style="border-radius: 10px; overflow: hidden;">
                                            <img src="../img/deepclean3.jpg" alt="Deep Cleaning"
                                                class="img-fluid services-img" style="border-radius: 10px;">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>




                        <div class="container mt-4">
                            <!-- Section Title -->
                            <h2 style="font-size: 20px; font-weight: 500;">HVAC AIR DUCT CLEANING</h2>

                            <!-- Social Media Icons -->
                            <div class="mb-3">
                                <a href="#" class="me-2"><img
                                        src="https://img.icons8.com/color/48/000000/facebook-new.png" alt="Facebook"
                                        style="width: 24px; height: 24px;"></a>
                                <a href="#" class="me-2"><img
                                        src="https://img.icons8.com/color/48/000000/twitter--v1.png" alt="Twitter"
                                        style="width: 24px; height: 24px;"></a>
                                <a href="#" class="me-2"><img
                                        src="https://img.icons8.com/color/48/000000/linkedin-circled.png" alt="LinkedIn"
                                        style="width: 24px; height: 24px;"></a>
                                <a href="#" class="me-2"><img
                                        src="https://img.icons8.com/color/48/000000/youtube-play.png" alt="YouTube"
                                        style="width: 24px; height: 24px;"></a>
                                <a href="#"><img src="https://img.icons8.com/color/48/000000/instagram-new.png"
                                        alt="Instagram" style="width: 24px; height: 24px;"></a>
                            </div>
                            <!-- CTA Box 1 -->
                            <div class="d-flex mb-3"
                                style="background-color: #007bff; border-radius: 5px; overflow: hidden;">
                                <div class="flex-grow-1 text-white" style="padding: 15px;">
                                    <strong>Book a HVAC AIR DUCT CLEANINGonline</strong><br>
                                    <span>Book affordable HVAC AIR DUCT CLEANING services at fixed rates</span>
                                </div>
                                <div class="d-flex align-items-center justify-content-center"
                                    style="background-color: #6c757d; padding: 15px; width: 200px;">
                                    <button class="btn text-white"
                                        style="background-color: #ff8c00; padding: 8px 20px; border-radius: 5px;">BOOK
                                        NOW</button>
                                </div>
                            </div>

                            <!-- CTA Box 2 -->
                            <div class="d-flex"
                                style="background-color: #28a745; border-radius: 5px; overflow: hidden;">
                                <div class="flex-grow-1 text-white" style="padding: 15px;">
                                    <strong>Quotes for HVAC AIR DUCT cleaning services</strong><br>
                                    <span>Free quotes from HVAC AIR DUCTcleaning</span>
                                </div>
                                <div class="d-flex align-items-center justify-content-center"
                                    style="background-color: #6c757d; padding: 15px; width: 200px;">
                                    <button class="btn text-white"
                                        style="background-color: #ff8c00; padding: 8px 20px; border-radius: 5px;">GET
                                        QUOTES</button>
                                </div>
                            </div>
                        </div>



                        <!-- End Gallery Section -->


                        <div class="col-md-12 service-details-content"
                            style="font-family: 'Roboto', sans-serif; font-weight: 400; line-height: 1.6; margin-bottom: 30px;">
                            <h3
                                style="font-family: 'Roboto', sans-serif; font-weight: 500; font-size: 24px; margin-bottom: 15px;">
                                WELCOME TO HVAC AIR DUCT CLEANING SERVICE</h3>
                            <p
                                style="font-family: 'Roboto', sans-serif; font-weight: 400; font-size: 16px; line-height: 1.6; text-align: justify; margin-bottom: 20px;">
                                If you're looking for thorough and comprehensive HVAC air duct cleaning, our service is
                                perfect for you. We meticulously clean every component of your air duct system to ensure
                                a fresh and hygienic environment in your home or office. Our expert team uses the latest
                                equipment and techniques to tackle even the toughest buildup and debris, providing you
                                with a spotless and efficient air duct system. Whether it’s routine maintenance or a
                                one-time deep clean, we tailor our services to meet your specific needs and preferences,
                                delivering exceptional results every time. Enjoy cleaner air and improved system
                                performance with our professional HVAC air duct cleaning service.
                            </p>

                        </div>

                        <!-- End Gallery Section -->
                    </div>
                </div>

                <!-- Section Title -->
                <div class="section-title pb-0 text-center">
                    <h2
                        style="font-family: 'Roboto', sans-serif; font-size: 24px; font-weight: 700; margin-bottom: 20px;">
                        What's more!</h2>
                </div>

                <!-- Service Content Section -->
                <div class="row gy-0">

                    <!-- First Service Content -->
                    <div class="service-content d-flex align-items-start" data-aos="fade-up" data-aos-delay="30"
                        style="font-family: 'Roboto', sans-serif; font-weight: 400; line-height: 1.6; margin-bottom: 30px;">
                        <img src="../img/deepclean1.png" alt="Deep Cleaning" class="img-fluid me-3"
                            style="width: 50%; border-radius: 8px;">
                        <div class="text-content">
                            <h3
                                style="font-family: 'Roboto', sans-serif; font-weight: 500; font-size: 20px; margin-bottom: 10px;">
                                Through HVAC AIR DUCT Cleaning Services</h3>
                            <p
                                style="font-family: 'Roboto', sans-serif; font-weight: 400; font-size: 16px; line-height: 1.6; text-align: justify; margin-bottom: 20px;">
                                Experience superior air quality with Al Bahja Building Maintenance's HVAC air duct
                                cleaning services in Dubai. Our thorough cleaning process ensures that your HVAC system
                                is free from dust, allergens, and contaminants, promoting a healthier indoor
                                environment. By targeting hidden pollutants within air ducts, we help improve airflow
                                efficiency and reduce energy consumption. Whether it's for your home or office, trust
                                our skilled technicians to provide an exceptional cleaning service that enhances air
                                quality and comfort. Breathe easier with our specialized HVAC air duct cleaning,
                                designed to meet your unique needs and exceed your expectations.

                                Regular maintenance of air ducts not only improves air quality but also prolongs the
                                life of your HVAC system. Our team uses advanced equipment and eco-friendly cleaning
                                solutions to ensure a safe and effective service. With Al Bahja Building Maintenance,
                                you can enjoy a cleaner, healthier, and more efficient living or working space.
                            </p>
                        </div>
                    </div>

                    <!-- Second Service Content -->
                    <div class="service-content d-flex flex-wrap align-items-start" data-aos="fade-up"
                        data-aos-delay="50"
                        style="font-family: 'Roboto', sans-serif; font-weight: 400; line-height: 1.6; margin-bottom: 30px;">
                        <div class="col-md-6">
                            <div class="text-content">
                                <h3
                                    style="font-family: 'Roboto', sans-serif; font-weight: 500; font-size: 20px; margin-bottom: 10px;">
                                    Comprehensive Deep Cleaning Services</h3>
                                <p
                                    style="font-family: 'Roboto', sans-serif; font-weight: 400; font-size: 16px; line-height: 1.6; text-align: justify; margin-bottom: 20px;">
                                    Experience superior air quality with Al Bahja Building Maintenance's HVAC air duct
                                    cleaning services. We thoroughly clean every part of your HVAC system, ensuring a
                                    fresh and healthier indoor environment. Our detail-oriented approach eliminates
                                    dust, allergens, and contaminants from within air ducts, improving airflow and
                                    system efficiency. Whether you're preparing for a special occasion or need regular
                                    maintenance, trust our expert technicians to deliver exceptional results, customized
                                    to meet your needs and exceed expectations. With our comprehensive service, your
                                    space will not only feel cleaner but also benefit from improved air quality and
                                    comfort.

                                    Regular HVAC air duct cleaning can significantly extend the lifespan of your system,
                                    reducing costly repairs and maintenance. Our specialized cleaning techniques help
                                    enhance energy efficiency, lowering your utility bills while promoting a healthier
                                    breathing environment.

                                </p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <img src="../img/deepclean2.png" alt="Deep Cleaning" class="img-fluid"
                                style="width: 100%; border-radius: 8px;">
                        </div>
                    </div>

                    <!-- Third Service Content -->
                    <div class="service-content d-flex align-items-start" data-aos="fade-up" data-aos-delay="30"
                        style="font-family: 'Roboto', sans-serif; font-weight: 400; line-height: 1.6; margin-bottom: 30px;">
                        <img src="../img/deepcleaningn2.png" alt="Deep Cleaning" class="img-fluid me-3"
                            style="width: 50%; border-radius: 8px;">
                        <div class="text-content">
                            <h3
                                style="font-family: 'Roboto', sans-serif; font-weight: 500; font-size: 20px; margin-bottom: 10px;">
                                Customized Solutions</h3>
                            <p
                                style="font-family: 'Roboto', sans-serif; font-weight: 400; font-size: 16px; line-height: 1.6; text-align: justify; margin-bottom: 20px;">
                                At Al Bahja Building Maintenance, we understand that every HVAC system is unique and
                                requires a personalized approach to cleaning. Our customized HVAC air duct cleaning
                                solutions are designed to address your specific needs and preferences, ensuring a
                                thorough and efficient service every time. Whether it's a residential or commercial
                                space, we tailor our services to meet your exact requirements, ensuring improved air
                                quality and system performance. With a focus on precision and care, we ensure that your
                                HVAC system receives the attention it deserves, providing lasting results and
                                satisfaction.

                                Our technicians assess your HVAC system and customize the cleaning process based on the
                                condition and size of the ducts, ensuring maximum efficiency. We use advanced tools and
                                eco-friendly products to safely remove dust, debris, and contaminants. Regular air duct
                                cleaning can lead to healthier indoor air, lower energy consumption, and enhanced
                                comfort. Our goal is not just to clean but to extend the life of your HVAC system and
                                boost its performance.

                            </p>
                        </div>
                    </div>

                    <!-- Fourth Service Content -->
                    <div class="service-content d-flex flex-wrap align-items-start" data-aos="fade-up"
                        data-aos-delay="50"
                        style="font-family: 'Roboto', sans-serif; font-weight: 400; line-height: 1.6; margin-bottom: 30px;">
                        <div class="col-md-6">
                            <div class="text-content">
                                <h3
                                    style="font-family: 'Roboto', sans-serif; font-weight: 500; font-size: 20px; margin-bottom: 10px;">
                                    Flexible Scheduling</h3>
                                <p
                                    style="font-family: 'Roboto', sans-serif; font-weight: 400; font-size: 16px; line-height: 1.6; text-align: justify; margin-bottom: 20px;">
                                    At Al Bahja Building Maintenance, we know that life can be hectic, and finding time
                                    for HVAC air duct cleaning can be challenging. That's why we offer flexible
                                    scheduling options to accommodate your busy lifestyle and ensure your system gets
                                    the care it needs without disrupting your day. We understand that your time is
                                    valuable, so our services are available during weekends and evenings to fit your
                                    schedule. Whether it's for your home or business, you can count on us to provide
                                    top-quality cleaning at a time that works best for you.

                                    With our flexible scheduling, we aim to make HVAC maintenance as convenient as
                                    possible, ensuring you don’t have to compromise on comfort or air quality. Let us
                                    handle the cleaning while you focus on what matters most.


                                </p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <img src="../img/deepclean4.png" alt="Deep Cleaning" class="img-fluid"
                                style="width: 100%; border-radius: 8px;">
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
    <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>


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