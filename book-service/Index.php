<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>BBC- Maintenance and Repair</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="../assets/img/favicon.png" rel="icon">
  <link href="../assets/img/apple-touch-icon.png" rel="stylesheet">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="../assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="../assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="../assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="https://unpkg.com/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="../assets/css/main.css" rel="stylesheet">
  <style>
    /* Add your custom styles here */
    body {
      color: black;
    }

    button {
      color: black;
      background-color: white;
      border: 2px solid green;
      padding: 10px 20px;
      transition: all 0.3s ease;
    }

    button:hover,
    button:focus {
      color: white;
      background-color: green;
      border: 2px solid black;
      outline: none;
    }

    input[type="text"],
    input[type="email"],
    input[type="tel"],
    input[type="date"],
    input[type="time"],
    select,
    textarea {
      color: black;
      background-color: white;
      border: 2px solid green;
      padding: 10px;
      transition: all 0.3s ease;
    }

    input[type="text"]:hover,
    input[type="email"]:hover,
    input[type="tel"]:hover,
    input[type="date"]:hover,
    input[type="time"]:hover,
    select:hover,
    textarea:hover,
    input[type="text"]:focus,
    input[type="email"]:focus,
    input[type="tel"]:focus,
    input[type="date"]:focus,
    input[type="time"]:focus,
    select:focus,
    textarea:focus {
      color: white;
      background-color: green;
      border: 2px solid black;
      outline: none;
    }
  </style>
</head>

<body class="index-page">
<?php
session_start();

// Reset session data if the page is loaded via GET request (refresh)
if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    session_destroy(); // Destroy all data registered to a session
    session_start(); // Re-initialize the session
    $_SESSION['currentStep'] = 1;
    $_SESSION['formData'] = [];
}

// Handle form submissions
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Check if "prev" button is pressed
    if (isset($_POST['prev'])) {
        $_SESSION['currentStep'] = max(1, $_SESSION['currentStep'] - 1);
    } else {
        // Proceed to the next step if "next" button is pressed
        if (isset($_POST['step'])) {
            $step = $_POST['step'];
            $_SESSION['formData'][$step] = $_POST;

            if ($step < 5) {
                $_SESSION['currentStep'] = $step + 1;
            }
        }
    }
}
?>


  <header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl position-relative d-flex align-items-center justify-content-between">
      <a href="index.php" class="logo d-flex align-items-center">
        <img src="../assets/img/logo.png" alt="">
      </a>

      <nav id="navmenu" class="navmenu">
        <ul class="d-flex align-items-center justify-content-end">
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
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-8">
            <div id="formContent">
              <?php
              // Check if session currentStep is set, otherwise default to 1
              $currentStep = isset($_SESSION['currentStep']) ? $_SESSION['currentStep'] : 1;

              switch ($currentStep) {
                case 1:
                  include 'Step1.php';
                  break;
                case 2:
                  include 'Step2.php';
                  break;
                case 3:
                  include 'Step3.php';
                  break;
                case 4:
                  include 'Step4.php';
                  break;
                case 5:
                  include 'Step5.php';
                  break;
                default:
                  echo "Invalid step.";
              }
              ?>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>

  <!-- Vendor JS Files -->
  <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="../assets/vendor/aos/aos.js"></script>
  <script src="../assets/vendor/swiper/swiper-bundle.min.js"></script>

  <!-- Main JS File -->
  <script src="../assets/js/main.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

  <script>
    let currentStep = <?php echo isset($_SESSION['currentStep']) ? $_SESSION['currentStep'] : 1; ?>;
    let formData = <?php echo isset($_SESSION['formData']) ? json_encode($_SESSION['formData']) : '{}'; ?>;

    function changeStep(stepChange) {
      if (validateStep()) {
        saveFormData();
        currentStep += stepChange;
        if (currentStep < 1) currentStep = 1;
        loadStep(currentStep);
        toggleButtons();
      }
    }

    function loadStep(step) {
      $.get(`Step${step}.php`, function(data) {
        $('#formContent').html(data);
        fillFormWithSavedData();
      });
    }

    function toggleButtons() {
      $('#prevBtn').toggle(currentStep > 1);
      $('#nextBtn').text(currentStep === 5 ? 'Submit' : 'Next');
    }

    function saveFormData() {
      $('#formContent').find('input, select, textarea').each(function() {
        formData[currentStep] = formData[currentStep] || {};
        formData[currentStep][this.id] = $(this).val();
      });
    }

    function fillFormWithSavedData() {
      if (formData[currentStep]) {
        for (let id in formData[currentStep]) {
          $(`#${id}`).val(formData[currentStep][id]);
        }
      }
    }

    function validateStep() {
      // Add your step validation logic here
      return true;
    }

    $(document).ready(function() {
      loadStep(currentStep);
      toggleButtons();
    });
  </script>

</body>

</html>
