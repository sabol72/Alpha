<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>BBC- Maintenance and Repair</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="../assets/img/favicon.png" rel="icon">
  <link href="../assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
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
    /* Add the custom styles here or in main.css */
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

    /* Custom focus outline for accessibility */
    input[type="text"]:focus,
    input[type="email"]:focus,
    input[type="tel"]:focus,
    input[type="date"]:focus,
    input[type="time"]:focus,
    select:focus,
    textarea:focus,
    button:focus {
      outline: 2px solid black;
    }
  </style>
</head>

<body class="index-page">
  <?php require "../db_Connect.php"; ?>
  <?php
  session_start();

  // Function to save form data to session
  function saveFormData($step) {
    switch ($step) {
      case 1:
        $_SESSION['serviceType'] = $_POST['serviceType'];
        break;
      case 2:
        $_SESSION['cleaners'] = $_POST['cleaners'];
        $_SESSION['hours'] = $_POST['hours'];
        break;
      case 3:
        $_SESSION['gname'] = $_POST['gname'];
        $_SESSION['gmail'] = $_POST['gmail'];
        $_SESSION['cnum'] = $_POST['cnum'];
        $_SESSION['CAddress'] = $_POST['CAddress'];
        break;
      case 4:
        $_SESSION['paymentOption'] = $_POST['paymentOption'];
        break;
      default:
        break;
    }
  }

  // Check if we are on a specific step
  $currentStep = isset($_GET['step']) ? intval($_GET['step']) : 1;

  // Handle form submission for each step
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    saveFormData($currentStep);

    // Redirect to the next step
    if ($currentStep < 4) {
      header("Location: index.php?step=" . ($currentStep + 1));
    } else {
      header("Location: index.php?step=" . ($currentStep + 1));
    }
    exit();
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
              <!-- Step content will be loaded here dynamically -->
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
    let currentStep = <?php echo $currentStep; ?>;
    let formData = <?php echo json_encode($_SESSION); ?>;

    function loadStep(step) {
      $.get(`step${step}.php`, function(data) {
        $('#formContent').html(data);
        fillFormWithSavedData();
      });
    }

    function changeStep(step) {
      if (validateStep()) {
        saveFormData(currentStep);
        currentStep = step;
        loadStep(currentStep);
        toggleButtons();
      }
    }

    function toggleButtons() {
      $('#prevBtn').toggle(currentStep > 1);
      $('#nextBtn').text(currentStep === 4 ? 'Submit' : 'Next');
    }

    function saveFormData(step) {
      $('#formContent').find('input, select, textarea').each(function() {
        formData[$(this).attr('name')] = $(this).val();
      });
    }

    function fillFormWithSavedData() {
      for (let name in formData) {
        $(`[name="${name}"]`).val(formData[name]);
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
