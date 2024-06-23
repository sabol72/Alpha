<div class="step">
  <h2>Step 2: Cleaners and Hours</h2>
  <form method="POST">
    <div class="mb-3">
      <label for="cleaners" class="form-label">Number of Cleaners:</label>
      <input type="number" class="form-control" id="cleaners" name="cleaners" required>
    </div>
    <div class="mb-3">
      <label for="hours" class="form-label">Hours Required:</label>
      <input type="number" class="form-control" id="hours" name="hours" required>
    </div>
    <button type="button" class="btn btn-primary" onclick="nextStep()">Next</button>
  </form>
</div>

<script>
  function nextStep() {
    if ($('#cleaners').val() && $('#hours').val()) {
      $('form').submit();
    } else {
      alert('Please fill in all fields.');
    }
  }
</script>
