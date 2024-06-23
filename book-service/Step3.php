<?php
session_start();
?>
<!-- Step 3: Personal Details -->
<div class="step-content">
  <h2>Step 3: Personal Details</h2>
  <form method="POST" action="">
    <div class="mb-3">
      <label for="name" class="form-label">Name:</label>
      <input type="text" class="form-control" id="name" name="name" required>
    </div>
    <div class="mb-3">
      <label for="email" class="form-label">Email:</label>
      <input type="email" class="form-control" id="email" name="email" required>
    </div>
    <div class="mb-3">
      <label for="phone" class="form-label">Phone:</label>
      <input type="tel" class="form-control" id="phone" name="phone" required>
    </div>
    <div class="mb-3">
      <label for="address" class="form-label">Address:</label>
      <input type="text" class="form-control" id="address" name="address" required>
    </div>
    <div class="mb-3">
      <label for="additionalMessage" class="form-label">Additional Message:</label>
      <textarea class="form-control" id="additionalMessage" name="additionalMessage" rows="4"></textarea>
    </div>
    <input type="hidden" name="step" value="3">
    <button type="submit" name="prev" value="prev" class="btn btn-secondary">Previous</button>
    <button type="submit" class="btn btn-primary">Next</button>
  </form>
</div>
