<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Booking System</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <!-- <link rel="stylesheet" href="../assets/css/main.css"> -->
    <link rel="stylesheet" href="Main.css">

</head>

<body class="index-page">
    <main class="main">
        <div class="container mt-5" data-aos="fade-up">
            <h2>Book your service now!!</h2>
            <div class="progress-container">
                <div class="progress-bar-steps d-flex justify-content-between">
                    <div class="progress-bar-step active">Service</div>
                    <div class="progress-bar-step">Extras</div>
                    <div class="progress-bar-step">Time</div>
                    <div class="progress-bar-step">Details</div>
                    <div class="progress-bar-step">Payment</div>
                    <div class="progress-bar-step">Done</div>
                </div>
                <div class="progress my-4">
                    <div class="progress-bar bg-success" role="progressbar" style="width: 16.6%;" id="progress-bar">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-8">
                    <form id="booking-form" action="store_booking.php" method="POST">
                        <div id="service-section" class="form-section active">
                            <h4>Please select your service</h4>
                            <div class="form-row">
                                <div class="form-group col-md-4">
                                    <label for="location">Location</label>
                                    <select class="form-control" id="location" name="location" required>
                                        <option value="">Select City</option>
                                        <option value="Dubai">Dubai</option>
                                        <option value="Abu Dhabi">Abu Dhabi</option>
                                        <option value="Sharjah">Sharjah</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="service-type">Service Type</label>
                                    <select class="form-control" id="service-type" name="service-type" required
                                        onchange="loadSubServices()">
                                        <option value="">Select Service</option>
                                        <option value="AC Service">AC Service</option>
                                        <option value="Cleaning">Cleaning</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="sub-service">Sub Service</label>
                                    <select class="form-control" id="sub-service" name="sub-service" required>
                                        <option value="">Select Sub Service</option>
                                    </select>
                                </div>
                            </div>
                            <button type="button" class="btn btn-primary"
                                onclick="nextSection('extras-section')">Next</button>
                        </div>

                        <!-- Extras Section -->
                        <div id="extras-section" class="form-section">
                            <h4>Extras</h4>
                            <div class="form-group">
                                <label for="hours">Select Number of Hours</label>
                                <select class="form-control" id="hours" name="hours">
                                    <option value="1">1 Hour</option>
                                    <option value="2">2 Hours</option>
                                    <option value="3">3 Hours</option>
                                    <option value="4">4 Hours</option>
                                    <option value="5">5 Hours</option>
                                    <option value="6">6 Hours</option>
                                    <option value="7">7 Hours</option>
                                    <option value="8">8 Hours</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="workers">Select Number of Workers</label>
                                <select class="form-control" id="workers" name="workers">
                                    <option value="1">1 Worker</option>
                                    <option value="2">2 Workers</option>
                                    <option value="3">3 Workers</option>
                                    <option value="4">4 Workers</option>
                                    <option value="5">5 Workers</option>
                                    <option value="6">6 Workers</option>
                                    <option value="7">7 Workers</option>
                                    <option value="8">8 Workers</option>
                                </select>
                            </div>
                            <button type="button" class="btn btn-secondary"
                                onclick="previousSection('service-section')">Back</button>
                            <button type="button" class="btn btn-primary"
                                onclick="nextSection('time-section')">Next</button>
                        </div>
                        <!-- Time Section -->
                        <div id="time-section" class="form-section">
                            <h4>Time</h4>
                            <div class="form-group">
                                <label for="date">Select Date</label>
                                <input type="date" class="form-control" id="date" name="date" required>
                            </div>
                            <div class="form-group">
                                <label for="time">Select Time</label>
                                <input type="time" class="form-control" id="time" name="time" required>
                            </div>
                            <button type="button" class="btn btn-secondary"
                                onclick="previousSection('extras-section')">Back</button>
                            <button type="button" class="btn btn-primary"
                                onclick="nextSection('details-section')">Next</button>
                        </div>
                        <!-- Details Section -->
                        <div id="details-section" class="form-section">
                            <h4>Details</h4>
                            <div class="form-group">
                                <label for="name">Full Name</label>
                                <input type="text" class="form-control" id="Cname" name="Cname" required>
                            </div>
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" class="form-control" id="email" name="email" required>
                            </div>
                            <div class="form-group">
                                <label for="phone">Phone</label>
                                <input type="tel" class="form-control" id="phone" name="phone" required>
                            </div>
                            <button type="button" class="btn btn-secondary"
                                onclick="previousSection('time-section')">Back</button>
                            <button type="button" class="btn btn-primary"
                                onclick="nextSection('payment-section')">Next</button>
                        </div>
                        <!-- Payment Section -->
                        <div id="payment-section" class="form-section">
                            <h4>Payment Method</h4>
                            <div class="form-group">
                                <label for="payment-method">Select Payment Method</label>
                                <select class="form-control" id="payment-method" name="payment-method"
                                    onchange="togglePaymentFields()">
                                    <option value="credit_card">Credit Card</option>
                                    <option value="debit_card">Debit Card</option>
                                    <option value="cod">Cash on Delivery (COD)</option>
                                </select>
                            </div>
                            <div id="credit-card-details" style="display: none;">
                                <div class="form-group">
                                    <label for="card-number">Card Number</label>
                                    <input type="text" class="form-control" id="card-number" name="card-number">
                                </div>
                                <div class="form-group">
                                    <label for="expiry-date">Expiry Date</label>
                                    <input type="text" class="form-control" id="expiry-date">
                                </div>
                                <div class="form-group">
                                    <label for="cvv">CVV</label>
                                    <input type="text" class="form-control" id="cvv">
                                </div>
                            </div>
                            <button type="button" class="btn btn-secondary"
                                onclick="previousSection('details-section')">Back</button>
                            <button type="button" class="btn btn-primary"
                                onclick="nextSection('done-section')">Next</button>
                        </div>
                        <!-- Done Section -->
                        <div id="done-section" class="form-section">
                            <h5>Confirm Your details</h5>
                            <p><strong>Location:</strong> <span id="done-location"></span></p>
                            <p><strong>Service Type:</strong> <span id="done-service-type"></span></p>
                            <p><strong>Sub Service:</strong> <span id="done-sub-service"></span></p>
                            <p><strong>Number Of Hours:</strong> <span id="done-hours"></span></p>
                            <p><strong>Number of Workers:</strong> <span id="done-workers"></span></p>
                            <p><strong>Date:</strong> <span id="done-date"></span></p>
                            <p><strong>Time:</strong> <span id="done-time"></span></p>
                            <p><strong>Full Name:</strong> <span id="done-name"></span></p>
                            <p><strong>Email:</strong> <span id="done-email"></span></p>
                            <p><strong>Phone:</strong> <span id="done-phone"></span></p>
                            <p><strong>Payment Method:</strong> <span id="done-payment-method"></span></p>
                            <div id="done-card-details" style="display: none;">
                                <p><strong>Card Number:</strong> <span id="done-card-number"></span></p>
                                <p><strong>Expiry Date:</strong> <span id="done-expiry-date"></span></p>
                                <p><strong>CVV:</strong> <span id="done-cvv"></span></p>
                            </div>
                            <button type="button" class="btn btn-secondary"
                                onclick="previousSection('payment-section')">Back</button>
                            <button type="submit" class="btn btn-success">Confirm Booking</button>
                        </div>
                    </form>
                </div>
                <div class="col-md-4">
                    <div class="confirmation-summary active" id="confirmation-summary">
                        <h5>Summary</h5>
                        <div class="summary-content">
                            <p><strong>Location:</strong> <span id="summary-location"></span></p>
                            <p><strong>Service Type:</strong> <span id="summary-service-type"></span></p>
                            <p><strong>Sub Service:</strong> <span id="summary-sub-service"></span></p>
                            <p><strong>Number Of Hours:</strong> <span id="summary-hours"></span></p>
                            <p><strong>Number of Workers:</strong> <span id="summary-workers"></span></p>
                            <p><strong>Date:</strong> <span id="summary-date"></span></p>
                            <p><strong>Time:</strong> <span id="summary-time"></span></p>
                            <p><strong>Full Name:</strong> <span id="summary-name"></span></p>
                            <p><strong>Email:</strong> <span id="summary-email"></span></p>
                            <p><strong>Phone:</strong> <span id="summary-phone"></span></p>
                            <p><strong>Payment Method:</strong> <span id="summary-payment-method"></span></p>
                            <div id="summary-card-details" style="display: none;">
                                <p><strong>Card Number:</strong> <span id="summary-card-number"></span></p>
                                <p><strong>Expiry Date:</strong> <span id="summary-expiry-date"></span></p>
                                <p><strong>CVV:</strong> <span id="summary-cvv"></span></p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </main>
    <script>
        function loadSubServices() {
            var serviceType = document.getElementById('service-type').value;
            var subService = document.getElementById('sub-service');
            subService.innerHTML = ''; // Clear existing options
            if (serviceType === 'AC Service') {
                subService.innerHTML = '<option value="AC Repair">AC Repair</option><option value="AC Maintenance">AC Maintenance</option>';
            } else if (serviceType === 'Cleaning') {
                subService.innerHTML = '<option value="Home Cleaning">Home Cleaning</option><option value="Office Cleaning">Office Cleaning</option>';
            }
        }

        function updateSummary() {
            document.getElementById('summary-location').textContent = document.getElementById('location').value;
            document.getElementById('done-location').textContent = document.getElementById('location').value;

            document.getElementById('summary-service-type').textContent = document.getElementById('service-type').value;
            document.getElementById('done-service-type').textContent = document.getElementById('service-type').value;

            document.getElementById('summary-sub-service').textContent = document.getElementById('sub-service').value;
            document.getElementById('done-sub-service').textContent = document.getElementById('sub-service').value;

            document.getElementById('summary-hours').textContent = document.getElementById('hours').value;
            document.getElementById('done-hours').textContent = document.getElementById('hours').value;

            document.getElementById('summary-workers').textContent = document.getElementById('workers').value;
            document.getElementById('done-workers').textContent = document.getElementById('workers').value;

            document.getElementById('summary-date').textContent = document.getElementById('date').value;
            document.getElementById('done-date').textContent = document.getElementById('date').value;

            document.getElementById('summary-time').textContent = document.getElementById('time').value;
            document.getElementById('done-time').textContent = document.getElementById('time').value;

            document.getElementById('summary-name').textContent = document.getElementById('Cname').value;
            document.getElementById('done-name').textContent = document.getElementById('Cname').value;

            document.getElementById('summary-email').textContent = document.getElementById('email').value;
            document.getElementById('done-email').textContent = document.getElementById('email').value;

            document.getElementById('summary-phone').textContent = document.getElementById('phone').value;
            document.getElementById('done-phone').textContent = document.getElementById('phone').value;

            document.getElementById('summary-payment-method').textContent = document.getElementById('payment-method').value;
            document.getElementById('done-payment-method').textContent = document.getElementById('payment-method').value;

            if (document.getElementById('payment-method').value !== 'cod') {
                document.getElementById('summary-card-number').textContent = document.getElementById('card-number').value;
                document.getElementById('done-card-number').textContent = document.getElementById('card-number').value;

                document.getElementById('summary-expiry-date').textContent = document.getElementById('expiry-date').value;
                document.getElementById('done-expiry-date').textContent = document.getElementById('expiry-date').value;

                document.getElementById('summary-cvv').textContent = document.getElementById('cvv').value;
                document.getElementById('done-cvv').textContent = document.getElementById('cvv').value;

                document.getElementById('summary-card-details').style.display = 'block';
                document.getElementById('done-card-details').style.display = 'block';
            } else {
                document.getElementById('summary-card-details').style.display = 'none';
                document.getElementById('done-card-details').style.display = 'none';
            }
        }


        function nextSection(nextId) {
            const sections = ['service-section', 'extras-section', 'time-section', 'details-section', 'payment-section', 'done-section'];
            sections.forEach(id => document.getElementById(id).classList.remove('active'));
            document.getElementById(nextId).classList.add('active');
            const progress = (sections.indexOf(nextId) + 1) * 100 / sections.length;
            document.getElementById('progress-bar').style.width = `${progress}%`;
            document.querySelectorAll('.progress-bar-step').forEach((step, index) => {
                step.classList.toggle('active', index === sections.indexOf(nextId));
            });
            document.getElementById('confirmation-summary').classList.toggle('active', nextId !== 'done-section');
            document.getElementById('done-section').classList.toggle('hidden', nextId !== 'done-section');
            document.getElementById('confirmation-summary').classList.toggle('hidden', nextId == 'done-section');
            document.getElementById('done-section').classList.toggle('active', nextId == 'done-section');
            updateSummary();
        }

        function previousSection(prevId) {
            const sections = ['service-section', 'extras-section', 'time-section', 'details-section', 'payment-section', 'done-section'];
            sections.forEach(id => document.getElementById(id).classList.remove('active'));
            document.getElementById(prevId).classList.add('active');
            const progress = (sections.indexOf(prevId) + 1) * 100 / sections.length;
            document.getElementById('progress-bar').style.width = `${progress}%`;
            document.querySelectorAll('.progress-bar-step').forEach((step, index) => {
                step.classList.toggle('active', index === sections.indexOf(prevId));
            });
            document.getElementById('confirmation-summary').classList.toggle('active', prevId !== 'done-section');
            updateSummary();
        }

        function togglePaymentFields() {
            const paymentMethod = document.getElementById('payment-method').value;
            if (paymentMethod === 'credit_card' || paymentMethod === 'debit_card') {
                document.getElementById('credit-card-details').style.display = 'block';
            } else {
                document.getElementById('credit-card-details').style.display = 'none';
            }
        }

        // Display the first section and the side panel when the page first loads
        document.addEventListener("DOMContentLoaded", function () {
            updateSummary();
            document.getElementById('confirmation-summary').classList.add('active');
            document.getElementById('service-section').classList.add('active');
        });
    </script>
</body>

</html>