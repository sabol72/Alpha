<div class="step">
  <h2>Step 1: Select Service Type</h2>
  <form method="POST">
    <div class="mb-3">
      <label for="serviceType" class="form-label">Select Service Type:</label>
      <select class="form-select" id="serviceType" name="serviceType" required>
        <option value="">Select Service Type</option>
        <option value="maintenance">Maintenance</option>
        <option value="repair">Repair</option>
        <option value="cleaning">Cleaning</option>
      </select>
    </div>
    <button type="button" class="btn btn-primary" onclick="nextStep()">Next</button>
  </form>
</div>

<script>
  function nextStep() {
    if ($('#serviceType').val()) {
      $('form').submit();
    } else {
      alert('Please select a service type.');
    }
  }
</script>
