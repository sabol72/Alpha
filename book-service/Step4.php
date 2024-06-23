<?php
session_start();
?>
<!-- Step 4: Payment Options -->
<div class="step-content">
  <h2>Step 4: Payment Options</h2>
  <form method="POST" action="">
    <div class="mb-3">
      <label for="paymentMethod" class="form-label">Select Payment Method:</label>
      <select class="form-control" id="paymentMethod" name="paymentMethod" required>
        <option value="">Select Payment Method</option>
        <option value="credit_card">Credit Card</option>
        <option value="paypal">PayPal</option>
      </select>
    </div>
    <input type="hidden" name="step" value="4">
    <button type="submit" name="prev" value="prev" class="btn btn-secondary">Previous</button>
    <button type="submit" class="btn btn-primary">Next</button>
  </form>
</div>
