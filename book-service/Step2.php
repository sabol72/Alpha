<?php
session_start();
?>
<!-- Step 2: Additional Information -->
<div class="step-content">
  <h2>Step 2: Additional Information</h2>
  <form method="POST" action="">
    <div class="mb-3">
      <label for="date" class="form-label">Preferred Date:</label>
      <input type="date" class="form-control" id="date" name="date" required>
    </div>
    <div class="mb-3">
      <label for="time" class="form-label">Preferred Time:</label>
      <input type="time" class="form-control" id="time" name="time" required>
    </div>
    <div class="mb-3">
      <label for="workers" class="form-label">Number of Workers:</label>
      <input type="number" class="form-control" id="workers" name="workers" required>
    </div>
    <div class="mb-3">
      <label for="hours" class="form-label">Number of Hours:</label>
      <input type="number" class="form-control" id="hours" name="hours" required>
    </div>
    <input type="hidden" name="step" value="2">
    <button type="submit" name="prev" value="prev" class="btn btn-secondary">Previous</button>
    <button type="submit" class="btn btn-primary">Next</button>
  </form>
</div>
