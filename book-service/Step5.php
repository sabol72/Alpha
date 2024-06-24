<?php
session_start(); // Start the session at the beginning of the script

// Check if session variables are set and provide default values if not
$serviceType = isset($_SESSION['serviceType']) ? $_SESSION['serviceType'] : '';
$cleaners = isset($_SESSION['cleaners']) ? $_SESSION['cleaners'] : '';
$hours = isset($_SESSION['hours']) ? $_SESSION['hours'] : '';
$gname = isset($_SESSION['gname']) ? $_SESSION['gname'] : '';
$gmail = isset($_SESSION['gmail']) ? $_SESSION['gmail'] : '';
$cnum = isset($_SESSION['cnum']) ? $_SESSION['cnum'] : '';
$CAddress = isset($_SESSION['CAddress']) ? $_SESSION['CAddress'] : '';
$paymentOption = isset($_SESSION['paymentOption']) ? $_SESSION['paymentOption'] : '';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Step 5 - Review Your Information</title>
</head>
<body>
    <h2>Review Your Information</h2>
    <p>Service Type: <?php echo htmlspecialchars($serviceType); ?></p>
    <p>Number of Cleaners: <?php echo htmlspecialchars($cleaners); ?></p>
    <p>Hours Required: <?php echo htmlspecialchars($hours); ?></p>
    <p>Name: <?php echo htmlspecialchars($gname); ?></p>
    <p>Email: <?php echo htmlspecialchars($gmail); ?></p>
    <p>Contact Number: <?php echo htmlspecialchars($cnum); ?></p>
    <p>Address: <?php echo htmlspecialchars($CAddress); ?></p>
    <p>Payment Option: <?php echo htmlspecialchars($paymentOption); ?></p>
    <form method="POST" action="process_booking.php">
    <!-- Any additional hidden fields or submit buttons can be added here -->
    <button type="submit" class="btn btn-primary">Confirm Booking</button>
  </form>
</body>
</html>
