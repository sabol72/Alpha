<?php
session_start();
?>
<!-- Step 1: Service Details -->
<div class="step-content">
  <h2>Step 1: Service Details</h2>
  <form method="POST" action="">
    <div class="mb-3">
      <label for="serviceType" class="form-label">Select Service Type:</label>
      <select class="form-control" id="serviceType" name="serviceType" required>
        <option value="">Select Service</option>
        <option value="ac_service">AC Services</option>
        <option value="cleaning_service">Cleaning Services</option>
      </select>
    </div>
    <input type="hidden" name="step" value="1">
    <button type="submit" class="btn btn-primary">Next</button>
  </form>
</div>
