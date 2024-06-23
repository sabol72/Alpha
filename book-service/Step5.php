<div class="step">
  <h2>Step 5: Confirmation</h2>
  <p>Please review your details below:</p>
  
  <ul>
    <li><strong>Service Type:</strong> <?php echo $_SESSION['serviceType']; ?></li>
    <li><strong>Number of Cleaners:</strong> <?php echo $_SESSION['cleaners']; ?></li>
    <li><strong>Hours Required:</strong> <?php echo $_SESSION['hours']; ?></li>
    <li><strong>Name:</strong> <?php echo $_SESSION['gname']; ?></li>
    <li><strong>Email:</strong> <?php echo $_SESSION['gmail']; ?></li>
    <li><strong>Contact Number:</strong> <?php echo $_SESSION['cnum']; ?></li>
    <li><strong>Address:</strong> <?php echo $_SESSION['CAddress']; ?></li>
    <li><strong>Payment Option:</strong> <?php echo $_SESSION['paymentOption']; ?></li>
  </ul>
  
  <form method="POST" action="process_booking.php">
    <!-- Any additional hidden fields or submit buttons can be added here -->
    <button type="submit" class="btn btn-primary">Confirm Booking</button>
  </form>
</div>
