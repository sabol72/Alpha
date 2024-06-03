
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
    <!-- Services Section -->
    <section id="services" class="services section" id="service">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Cleaning Serviceses</h2>
        <p class="text-black">All the cleaning services that we provide for you</p>
      </div><!-- End Section Title -->

      <div class="container">

        <div class="row g-5">

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
            <div class="service-item item-cyan position-relative">
            <img src="assets/img/deep.png" alt="Logo" style="width: 50px; height: 50px; margin-right: 15px;">
              <div>
                <h3>Deep Cleaning Service</h3>
                <p>Upholstery and mattress cleaning, Carpet cleaning, Cleaning of unreachable and tough spots</p>
                
              </div>
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
            <div class="service-item item-orange position-relative">
            <img src="assets/img/hvac.png" alt="Logo" style="width: 50px; height: 50px; margin-right: 15px;">
              <div>
                <h3>HVAC Air Duct Cleaning Service</h3>
                <p>Breathe cleaner air with our expert HVAC air duct cleaning service, ensuring optimal indoor air quality.</p>
              </div>
            </div>
          </div><!-- End Service Item -->

         

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="300">
            <div class="service-item item-teal position-relative">
            <img src="assets/img/uph.png" alt="Logo" style="width: 50px; height: 50px; margin-right: 15px;">
              <div>
                <h3>Upholstery Sofa Steam Cleaning</h3>
                <p>Revive your upholstery with our professional sofa steam cleaning service, restoring freshness</p>
              </div>
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="300">
            <div class="service-item item-teal position-relative">
            <img src="assets/img/village.png" alt="Logo" style="width: 50px; height: 50px; margin-right: 15px;">
              <div>
                <h3>Villa & House Cleaning</h3>
                <p>Dusting, vacuuming, mopping, sanitizing bathrooms and kitchens, laundry or dishwashing</p>
              </div>
            </div>
          </div><!-- End Service Item -->


          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="300">
            <div class="service-item item-teal position-relative">
            <img src="assets/img/water tank.png" alt="Logo" style="width: 50px; height: 50px; margin-right: 15px;">
              <div>
                <h3>Water tank Cleaning & Disinfection</h3>
                <p>Our Water Tank Cleaning & Disinfection Service is a comprehensive solution aimed at ensuring the purity</p>
              </div>
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="300">
            <div class="service-item item-teal position-relative">
            <img src="assets/img/window.png" alt="Logo" style="width: 50px; height: 50px; margin-right: 15px;">
              <div>
                <h3>Window Glass Cleaning</h3>
                <p>Exterior Window Cleaning, Facade Cleaning, High-rise Window Cleaning</p>
              </div>
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="300">
            <div class="service-item item-teal position-relative">
            <img src="assets/img/mattress.png" alt="Logo" style="width: 50px; height: 50px; margin-right: 15px;">
              <div>
                <h3>Mattress Cleaning</h3>
                <p>Revitalize your sleep sanctuary with our professional mattress cleaning service, ensuring a deep clean</p>
              </div>
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="300">
            <div class="service-item item-teal position-relative">
            <img src="assets/img/carpet.png" alt="Logo" style="width: 50px; height: 50px; margin-right: 15px;">
              <div>
                <h3>Carpet Cleaning</h3>
                <p>Revive your carpets with our professional cleaning service, restoring freshness and vibrancy to your home.</p>
              </div>
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="300">
            <div class="service-item item-teal position-relative">
            <img src="assets/img/pool.png" alt="Logo" style="width: 50px; height: 50px; margin-right: 15px;">
              <div>
                <h3>Pool Cleaning</h3>
                <p>Keep your pool pristine with our expert pool cleaning service, ensuring crystal-clear waters for your enjoyment.</p>
              </div>
            </div>
          </div><!-- End Service Item -->

          
        </div>

      </div>

    </section><!-- /Services Section -->

    
 <!-- features section -->

 <div class="container section-title " data-aos="fade-up" id="features">
      <h1 class="text-center mt-5 mb-4">Our Features</h1>
    </div>
  
  
      <div class="row">
        <div class="col-lg-4 mb-4">
          <div class="feature-box">
            <div class="text-center">
              <i class="fas fa-tools fa-3x mb-3"></i>
              <h3>Expert Technicians</h3>
              <p>Our team consists of experienced technicians who are trained to handle all types of AC maintenance and repair tasks with precision and expertise.</p>
            </div>
          </div>
        </div>
  
        <div class="col-lg-4 mb-4">
          <div class="feature-box">
            <div class="text-center">
              <i class="fas fa-clock fa-3x mb-3"></i>
              <h3>24/7 Emergency Service</h3>
              <p>We understand that AC issues can arise at any time. That's why we offer round-the-clock emergency repair services to address urgent problems promptly.</p>
            </div>
          </div>
        </div>
  
        <div class="col-lg-4 mb-4">
          <div class="feature-box">
            <div class="text-center">
              <i class="fas fa-wrench fa-3x mb-3"></i>
              <h3>Comprehensive Repairs</h3>
              <p>From minor repairs to major overhauls, we provide comprehensive repair services to restore your AC system's functionality and efficiency quickly and effectively.</p>
            </div>
          </div>
        </div>
  
        <div class="col-lg-4 mb-4">
          <div class="feature-box">
            <div class="text-center">
              <i class="fas fa-check-circle fa-3x mb-3"></i>
              <h3>Quality Assurance</h3>
              <p>We take pride in the quality of our workmanship and stand behind the services we provide. With us, you can expect reliable repairs and lasting results every time.</p>
            </div>
          </div>
        </div>
  
        <div class="col-lg-4 mb-4">
          <div class="feature-box">
            <div class="text-center">
              <i class="fas fa-tools fa-3x mb-3"></i>
              <h3>Preventive Maintenance</h3>
              <p>Our preventive maintenance plans are designed to keep your AC system running smoothly year-round, helping to prevent breakdowns and prolong the lifespan of your equipment.</p>
            </div>
          </div>
        </div>
  
        <div class="col-lg-4 mb-4">
          <div class="feature-box">
            <div class="text-center">
              <i class="fas fa-handshake fa-3x mb-3"></i>
              <h3>Customer Satisfaction</h3>
              <p>Your satisfaction is our priority. We strive to deliver exceptional service and exceed your expectations at every step of the process, from diagnosis to repair.</p>
            </div>
          </div>
        </div>
      </div>

<!-- end feature section-->


      

    <!-- Contact Section -->
   <section id="contact" class="contact section" id="contact">

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
         <!-- location section -->
    
         <div class="row gy-4 mt-1 justify-content-center align-items-center">
    <div class="col-12 text-center">
        <h3>Our Location</h3>
    </div>
    <div class="col-12" data-aos="fade-up" data-aos-delay="300">
        <iframe 
            src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d48389.78314118045!2d-74.006138!3d40.710059!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c25a22a3bda30d%3A0xb89d1fe6bc499443!2sDowntown%20Conference%20Center!5e0!3m2!1sen!2sus!4v1676961268712!5m2!1sen!2sus" 
            frameborder="0" 
            style="border:0; width: 100%; height: 400px;" 
            allowfullscreen 
            loading="lazy" 
            referrerpolicy="no-referrer-when-downgrade">
            
        </iframe>
    </div>
</div>

    </div><!-- End Container for Contact Section Content -->

</section><!-- End Contact Section -->
<!-- /Contact Section -->



        <!-- booking services -->
        <div class="container mt-5" id="book">
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











       
    <!-- about us -->

    <div class="container section-title" data-aos="fade-up" id="about">
    <h2>About Us</h2>
    <P style="color: black;"> Al Bahja Building Maintenance and cleaning services do regular cleaning jobs, upholstery cleaning, <br>after party cleaning, deep cleaning, and move-in move-out cleaning. Al Bahja Building Maintenance<br> and cleaning services have cleaners and buses running around Dubai every day.</P>
  </div>

  <div class="container">
    <h2 class="text-center my-4"> Meet Our Team</h2>
    <div class="row">
      <div class="col-md-4">
        <div class="card">
          <img src="assets/img/absolute-image.jpg" alt="Jane" class="card-img-top">
          <div class="card-body">
            <h2 class="card-title">Jane Doe</h2>
            <p class="card-text">CEO & Founder</p>
            <p class="card-text">Some text that describes me lorem ipsum ipsum lorem.</p>
            <p>jane@example.com</p>
            <button class="btn btn-primary">Contact</button>
          </div>
        </div>
      </div>

      <div class="col-md-4">
        <div class="card">
          <img src="assets/img/absolute-image.jpg" alt="Mike" class="card-img-top">
          <div class="card-body">
            <h2 class="card-title">Mike Ross</h2>
            <p class="card-text">Art Director</p>
            <p class="card-text">Some text that describes me lorem ipsum ipsum lorem.</p>
            <p>mike@example.com</p>
            <button class="btn btn-primary">Contact</button>
          </div>
        </div>
      </div>

      <div class="col-md-4">
        <div class="card">
          <img src="assets/img/absolute-image.jpg" alt="John" class="card-img-top">
          <div class="card-body">
            <h2 class="card-title">John Doe</h2>
            <p class="card-text">Designer</p>
            <p class="card-text">Some text that describes me lorem ipsum ipsum lorem.</p>
            <p>john@example.com</p>
            <button class="btn btn-primary">Contact</button>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- end about us -->

  </main>


  <!-- footer part -->

  <footer>
    <div class="main-content">
       <div class="left box">
          <h2>BBC.Maintainance</h2>
          <div class="content">
             <p>Al Bahja Building Maintenance and cleaning services do regular cleaning jobs, upholstery cleaning,
                after party cleaning, deep cleaning, and move-in move-out cleaning.</p>
             <div class="social">
                <a href="#"><span class="fab fa-facebook-f"></span></a>
                <a href="#"><span class="fab fa-twitter"></span></a>
                <a href="#"><span class="fab fa-instagram"></span></a>
                <a href="#"><span class="fab fa-youtube"></span></a>
             </div>
          </div>
       </div>

       <div class="center box">
          <h2>Details</h2>
          <div class="content">
             <div class="place">
                <span class="fas fa-map-marker-alt"></span>
                <span class="text">Amwaj Building , Burdubai, Office No. <br> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                   &nbsp; &nbsp;G19, P.O Box: 46777</span>
             </div>
             <div class="phone">
                <span class="fas fa-phone-alt"></span>
                <span class="text">+971 (04) 357 2148
                </span>
             </div>
             <div class="email">
                <span class="fas fa-envelope"></span>
                <span class="text">
                   info@bbcmaintenance.com
                </span>
             </div>
          </div>
       </div>

       <div class="service">
          <h5>Services</h5>
          <br>
          <ul class="service-list">
              <li><a href="#">AC Installations</a></li>
              <li><a href="#">AC Maintenance</a></li>
              <li><a href="#">AC Repair</a></li>
              <li><a href="#">AC Duct Cleaning</a></li>
          </ul>
      </div>
      
 </footer>




  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->


  

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