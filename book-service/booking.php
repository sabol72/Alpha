<?php
session_start();
$selectedService = isset($_SESSION['selectedService']) ? $_SESSION['selectedService'] : 'None';
$selectedServiceType = isset($_SESSION['selectedServiceType']) ? $_SESSION['selectedServiceType'] : 'None';
?>
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
    <link rel="stylesheet" href="style.css">
    <style>
        .form-group-container {
            display: flex;
            flex-wrap: wrap;
            gap: 15px;
        }
        .form-group {
            flex: 1;
        }
    </style>
</head>
<body class="index-page">
<main class="main">
<div class="container mt-5" data-aos="fade-up">
    <h2>Book your service now!!</h2>
    <div class="progress my-4">
        <div class="progress-bar bg-success" role="progressbar" style="width: 16.6%;" id="progress-bar"></div>
        <div class="progress-bar-steps d-flex justify-content-between">
            <div class="progress-bar-step active">Service</div>
            <div class="progress-bar-step">Extras</div>
            <div class="progress-bar-step">Time</div>
            <div class="progress-bar-step">Details</div>
            <div class="progress-bar-step">Payment</div>
            <div class="progress-bar-step">Done</div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-8">
            <form id="booking-form" action="store_booking.php" method="POST">
                <!-- Service Section -->
                    <div id="service-section" class="form-section active">
                        <h4>Please select your service</h4>
                        <div class="form-group-row">
                            <div class="form-group">
                                <label for="location">Location</label>
                                <select class="form-control" id="location" name="location" required>
                                    <option value="">Select City</option>
                                    <option value="Dubai">Dubai</option>
                                    <option value="Abu Dhabi">Abu Dhabi</option>
                                    <option value="Sharjah">Sharjah</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="service-type">Service Type</label>
                                    <input type="text" class="form-control" id="service-type" name="service-type" value="<?php echo htmlspecialchars($selectedService); ?>" readonly>
                                </div>

                            <div class="form-group">
                                <label for="sub-service">Sub Service</label>
                                <input type="text" class="form-control" id="sub-service" name="sub-service" value="<?php echo htmlspecialchars($selectedServiceType); ?>" readonly>
                            </div>

                        </div>
                        <div class="btn-grp">
                            <button type="button" class="btn btn-primary" onclick="nextSection('extras-section')">Next</button>
                        </div>
                    </div>
                    <!-- Extras Section -->
                    <div id="extras-section" class="form-section">
                        <h4>Extras</h4>
                        <div class="form-group-row">
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
                        </div>
                        <div class="btn-grp">
                        <button type="button" class="btn btn-secondary" onclick="previousSection('service-section')">Back</button>
                        <button type="button" class="btn btn-primary" onclick="nextSection('time-section')">Next</button>
                        </div>  
                    </div>
                    <!-- Time Section -->
                    <div id="time-section" class="form-section">
                        <h4>Time</h4>
                        <div class="form-group-row">
                            <div class="form-group">
                                <label for="date">Select Date</label>
                                <input type="date" class="form-control" id="date" name="date" required>
                            </div>
                            <div class="form-group">
                                <label for="time">Select Time</label>
                                <input type="time" class="form-control" id="time" name="time" required>
                            </div>
                        </div>
                        <div class="btn-grp">
                        <button type="button" class="btn btn-secondary" onclick="previousSection('extras-section')">Back</button>
                        <button type="button" class="btn btn-primary" onclick="nextSection('details-section')">Next</button>
                        </div>
                    </div>
                    <!-- Details Section -->
                    <div id="details-section" class="form-section">
                        <h4>Details</h4>
                        <div class="form-group-row">
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
                        </div>
                        <div class="btn-grp">
                        <button type="button" class="btn btn-secondary" onclick="previousSection('time-section')">Back</button>
                        <button type="button" class="btn btn-primary" onclick="nextSection('payment-section')">Next</button>
                        </div>
                    </div>

                    <!-- Payment Section -->
                    <div id="payment-section" class="form-section">
                        <h4>Payment Method</h4>
                        <div class="form-group-row">
                            <div class="form-group">
                                <label for="payment-method">Select Payment Method</label>
                                <select class="form-control" id="payment-method" name="payment-method" onchange="togglePaymentFields()">
                                    <option value="credit_card">Credit Card</option>
                                    <option value="debit_card">Debit Card</option>
                                    <option value="cod">Cash on Delivery (COD)</option>
                                </select>
                            </div>
                        </div>
                        <div id="credit-card-details" style="display: none;" class="form-group-row">
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
                        <div class="btn-grp">
                        <button type="button" class="btn btn-secondary" onclick="previousSection('details-section')">Back</button>
                        <button type="button" class="btn btn-primary" onclick="nextSection('done-section')">Next</button>
                        </div>
                    </div>

                    <!-- Done Section -->
                    <div id="done-section" class="form-section">
                        <h5>Confirm Your details</h5>
                        <p><strong>Location:</strong> <span id="done-location"></span></p>
                        <p><strong>Service Type:</strong> <span id="done-service-type"></span></p>
                        <p><strong>Sub Service:</strong> <span id="done-sub-service"></span></p>
                        <p><strong>Hours:</strong> <span id="done-hours"></span></p>
                        <p><strong>Workers:</strong> <span id="done-workers"></span></p>
                        <p><strong>Date:</strong> <span id="done-date"></span></p>
                        <p><strong>Time:</strong> <span id="done-time"></span></p>
                        <p><strong>Name:</strong> <span id="done-name"></span></p>
                        <p><strong>Email:</strong> <span id="done-email"></span></p>
                        <p><strong>Phone:</strong> <span id="done-phone"></span></p>
                        <p><strong>Payment Method:</strong> <span id="done-payment-method"></span></p>
                        <p><strong>Card Number:</strong> <span id="done-card-number"></span></p>
                        <p><strong>Expiry Date:</strong> <span id="done-expiry-date"></span></p>
                        <div class="btn-grp">
                        <button type="button" class="btn btn-secondary" onclick="previousSection('payment-section')">Back</button>
                        <button type="submit" class="btn btn-success">Confirm Booking</button>
                        </div>
                    </div>
                </form>
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-header bg-dark text-white">Booking Summary</div>
                <div class="card-body">
                    <div class="form-group-row">
                        <div class="form-group">
                            <p><strong>Location:</strong> <br><span id="summary-location"></span></p>
                            <p><strong>Service Type:</strong><br> <span id="summary-service-type"></span></p>
                            <p><strong>Sub Service:</strong><br> <span id="summary-sub-service"></span></p>
                            <p><strong>Hours:</strong><br> <span id="summary-hours"></span></p>
                            <p><strong>Workers:</strong> <br><span id="summary-workers"></span></p>
                            <p><strong>Date:</strong> <br><span id="summary-date"></span></p>
                            <p><strong>Time:</strong> <br><span id="summary-time"></span></p>
                        </div>
                        <div class="form-group">
                            <p><strong>Full Name:</strong><br> <span id="summary-name"></span></p>
                            <p><strong>Email:</strong> <br><span id="summary-email"></span></p>
                            <p><strong>Phone:</strong><br><span id="summary-phone"></span></p>
                            <p><strong>Payment Method:</strong> <br><span id="summary-payment-method"></span></p>
                            <p><strong>Card Number:</strong> <br><span id="summary-card-number"></span></p>
                            <p><strong>Expiry Date:</strong> <br><span id="summary-expiry-date"></span></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</main>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const bookingForm = document.getElementById('booking-form');
        const formSections = document.querySelectorAll('.form-section');
        const progressBar = document.getElementById('progress-bar');
        const progressBarSteps = document.querySelectorAll('.progress-bar-step');
        let currentSectionIndex = 0;

        function updateProgressBar() {
            const progressPercentage = ((currentSectionIndex + 1) / formSections.length) * 100;
            progressBar.style.width = `${progressPercentage}%`;
            progressBarSteps.forEach((step, index) => {
                if (index <= currentSectionIndex) {
                    step.classList.add('active');
                } else {
                    step.classList.remove('active');
                }
            });
        }

        function showSection(index) {
            formSections.forEach((section, i) => {
                if (i === index) {
                    section.classList.add('active');
                } else {
                    section.classList.remove('active');
                }
            });
            currentSectionIndex = index;
            updateProgressBar();
        }

        function nextSection(nextSectionId) {
            const currentSection = document.querySelector('.form-section.active');
            const nextSection = document.getElementById(nextSectionId);
            const index = Array.from(formSections).indexOf(nextSection);
            if (index !== -1) {
                showSection(index);
            }
            updateSummary();
        }

        function previousSection(prevSectionId) {
            const currentSection = document.querySelector('.form-section.active');
            const prevSection = document.getElementById(prevSectionId);
            const index = Array.from(formSections).indexOf(prevSection);
            if (index !== -1) {
                showSection(index);
            }
        }

        function updateSummary() {
            document.getElementById('summary-location').textContent = document.getElementById('location').value;
            document.getElementById('summary-service-type').textContent = document.getElementById('service-type').value;
            document.getElementById('summary-sub-service').textContent = document.getElementById('sub-service').value;
            document.getElementById('summary-hours').textContent = document.getElementById('hours').value;
            document.getElementById('summary-workers').textContent = document.getElementById('workers').value;
            document.getElementById('summary-date').textContent = document.getElementById('date').value;
            document.getElementById('summary-time').textContent = document.getElementById('time').value;
            document.getElementById('summary-name').textContent = document.getElementById('Cname').value;
            document.getElementById('summary-email').textContent = document.getElementById('email').value;
            document.getElementById('summary-phone').textContent = document.getElementById('phone').value;
            document.getElementById('summary-payment-method').textContent = document.getElementById('payment-method').value;
            document.getElementById('summary-card-number').textContent = document.getElementById('card-number').value;
            document.getElementById('summary-expiry-date').textContent = document.getElementById('expiry-date').value;

            // Update "Done" section
            document.getElementById('done-location').textContent = document.getElementById('location').value;
            document.getElementById('done-service-type').textContent = document.getElementById('service-type').value;
            document.getElementById('done-sub-service').textContent = document.getElementById('sub-service').value;
            document.getElementById('done-hours').textContent = document.getElementById('hours').value;
            document.getElementById('done-workers').textContent = document.getElementById('workers').value;
            document.getElementById('done-date').textContent = document.getElementById('date').value;
            document.getElementById('done-time').textContent = document.getElementById('time').value;
            document.getElementById('done-name').textContent = document.getElementById('Cname').value;
            document.getElementById('done-email').textContent = document.getElementById('email').value;
            document.getElementById('done-phone').textContent = document.getElementById('phone').value;
            document.getElementById('done-payment-method').textContent = document.getElementById('payment-method').value;
            document.getElementById('done-card-number').textContent = document.getElementById('card-number').value;
            document.getElementById('done-expiry-date').textContent = document.getElementById('expiry-date').value;
        }

        function togglePaymentFields() {
            const paymentMethod = document.getElementById('payment-method').value;
            const creditCardDetails = document.getElementById('credit-card-details');
            if (paymentMethod === 'credit_card' || paymentMethod === 'debit_card') {
                creditCardDetails.style.display = 'block';
            } else {
                creditCardDetails.style.display = 'none';
            }
        }

        window.nextSection = nextSection;
        window.previousSection = previousSection;
        window.togglePaymentFields = togglePaymentFields;
        // bookingForm.addEventListener('submit', function (e) {
        //     e.preventDefault();
        //     alert('Booking Confirmed!');
        //     bookingForm.reset();
        //     showSection(0);
        //     updateSummary();
        // });

        // Initialize first section
        showSection(0);
    });

    function loadSubServices() {
        const serviceType = document.getElementById('service-type').value;
        const subService = document.getElementById('sub-service');
        subService.innerHTML = ''; // Clear existing options
        if (serviceType === 'AC Service') {
            subService.innerHTML = `
                <option value="AC Installation">AC Installation</option>
                <option value="AC Repair">AC Repair</option>
                <option value="AC Maintenance">AC Maintenance</option>
            `;
        } else if (serviceType === 'Cleaning') {
            subService.innerHTML = `
                <option value="Home Cleaning">Home Cleaning</option>
                <option value="Office Cleaning">Office Cleaning</option>
                <option value="Deep Cleaning">Deep Cleaning</option>
            `;
        }
    }
</script>
<script src="script.js"></script>
</body>
</html>