<div class="step">
  <h2>Step 3: Customer Information</h2>
  <form method="POST">
    <div class="mb-3">
      <label for="gname" class="form-label">Name:</label>
      <input type="text" class="form-control" id="gname" name="gname" required>
    </div>
    <div class="mb-3">
      <label for="gmail" class="form-label">Email:</label>
      <input type="email" class="form-control" id="gmail" name="gmail" required>
    </div>
    <div class="mb-3">
      <label for="cnum" class="form-label">Contact Number:</label>
      <input type="tel" class="form-control" id="cnum" name="cnum" required>
    </div>
    <div class="mb-3">
      <label for="CAddress" class="form-label">Address:</label>
      <textarea class="form-control" id="CAddress" name="CAddress" required></textarea>
    </div>
    <button type="button" class="btn btn-primary" onclick="nextStep()">Next</button>
  </form>
</div>

<script>
  function nextStep() {
    if ($('#gname').val() && $('#gmail').val() && $('#cnum').val() && $('#CAddress').val()) {
      $('form').submit();
    } else {
      alert('Please fill in all fields.');
    }
  }
</script>
