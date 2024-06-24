<?php
session_start();
?>
<!-- Step 5: Confirmation -->
<div class="step-content">
  <h2>Step 5: Confirmation</h2>
  <div>
    <p>Service Type: <?php echo $_SESSION['formData'][1]['serviceType']; ?></p>
    <p>Preferred Date: <?php echo $_SESSION['formData'][2]['date']; ?></p>
    <p>Preferred Time: <?php echo $_SESSION['formData'][2]['time']; ?></p>
    <p>Number of Workers: <?php echo $_SESSION['formData'][2]['workers']; ?></p>
    <p>Number of Hours: <?php echo $_SESSION['formData'][2]['hours']; ?></p>
    <p>Name: <?php echo $_SESSION['formData'][3]['name']; ?></p>
    <p>Email: <?php echo $_SESSION['formData'][3]['email']; ?></p>
    <p>Phone: <?php echo $_SESSION['formData'][3]['phone']; ?></p>
    <p>Address: <?php echo $_SESSION['formData'][3]['address']; ?></p>
    <p>Additional Message: <?php echo $_SESSION['formData'][3]['additionalMessage']; ?></p>
    <p>Payment Method: <?php echo $_SESSION['formData'][4]['paymentMethod']; ?></p>
  </div>
  <form method="POST" action="">
    <button type="submit" name="prev" value="prev" class="btn btn-secondary">Previous</button>
    <button type="submit" name="submit" class="btn btn-primary">Confirm Booking</button>
  </form>
</div>
<? session_destroy();?>