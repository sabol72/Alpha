<div class="step">
  <h2>Step 4: Payment Options</h2>
  <form method="POST">
    <div class="mb-3">
      <label for="paymentOption" class="form-label">Select Payment Option:</label>
      <select class="form-select" id="paymentOption" name="paymentOption" required>
        <option value="">Select Payment Option</option>
        <option value="credit_card">Credit Card</option>
        <option value="paypal">PayPal</option>
        <option value="bank_transfer">Bank Transfer</option>
      </select>
    </div>
    <button type="button" class="btn btn-primary" onclick="nextStep()">Next</button>
  </form>
</div>

<script>
  function nextStep() {
    if ($('#paymentOption').val()) {
      $('form').submit();
    } else {
      alert('Please select a payment option.');
    }
  }
</script>
