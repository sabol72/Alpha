<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Choosing Service Type</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <link href="Style.css" rel="stylesheet">
    <link href="../assets/css/main.css" rel="stylesheet">

    <style>
    * {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: "Poppins", sans-serif;
}

body{
  height: 100vh;
  display: flex;
  align-items: center;
  justify-content: center;
  background: #350048;

}
</style>
</head>
<body>
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
        <li><a href="#service">Services</a></li>
        <li><a href="#contact">Contact</a></li>
        <li> <a href="book-service/booking.php"><button type="button" class="btn btn-primary">Book Now</button></a></li>
      </ul>
      <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
    </nav>

  </div>
</header>
    <main>
        <div class="container mt-5 title-section" data-aos="fade-up">
        <h2>Choose your service</h2>
            <div class="buttons">
                <a class="gbutton"href="../book-service/booking.php">Deep Cleaning Service</a>
                <a class="gbutton"href="../book-service/booking.php">HV/AC Air Duct Cleaning Service</a>
                <a class="gbutton"href="../book-service/booking.php">Upholstery Sofa Steam Cleaning</a>
                <a class="gbutton"href="../book-service/booking.php">Villa & House Cleaning</a>
                <a class="gbutton"href="../book-service/booking.php">Water Tank Cleaning & Disinfection</a>
                <a class="gbutton"href="../book-service/booking.php">Window Glass Cleaning</a>
                <a class="gbutton"href="../book-service/booking.php">Matress Cleaning</a>
                <a class="gbutton"href="../book-service/booking.php">Carpet Cleaning</a>
                <a class="gbutton"href="../book-service/booking.php">Pool Cleaning</a>

            </div>
        </div>
    </main>
    
    <script src="Script.js">
  </script>
</body>
</html>