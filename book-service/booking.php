<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Booking System</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <style>
        body {
            background-color: #f8f9fa;
        }
<<<<<<< HEAD
=======
        .container {
            background: #ffffff;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
            padding: 30px;
        }
>>>>>>> 58768f48b377f23035a8f459db9bcaf23143e2e5
        h2, h4 {
            color: #343a40;
        }
        .progress {
            height: 30px;
            position: relative;
        }
        .progress-bar {
            height: 100%;
            position: relative;
            z-index: 2;
            background-color: #28a745;
            transition: width 0.4s ease;
        }
        .progress-bar-steps {
            position: absolute;
            top: 0;
            width: 100%;
            height: 100%;
            display: flex;
            justify-content: space-between;
            z-index: 1;
        }
        .progress-bar-step {
            flex: 1;
            text-align: center;
            line-height: 30px;
            color: #6c757d;
        }
        .progress-bar-step.active {
            color: #ffffff;
            font-weight: bold;
        }
        .progress-bar-step:not(:first-child)::before {
            content: "";
            width: 100%;
            height: 100%;
            position: absolute;
            left: 0;
            top: 0;
            background: #e9ecef;
            z-index: -1;
            transition: background 0.4s ease;
        }
        .progress-bar-step.active::before {
            background: #007bff;
        }
        .form-group {
            margin-bottom: 1.5rem;
        }
        .form-control {
            border-radius: 20px;
            padding: 10px 15px;
            font-size: 0.9rem;
            transition: all 0.3s ease;
        }
        .form-control:focus {
            border-color: #007bff;
            box-shadow: 0 0 8px rgba(0, 123, 255, 0.25);
        }
        button {
            border-radius: 20px;
            padding: 10px 20px;
            transition: all 0.3s ease;
        }
        button:focus, button:hover {
            box-shadow: 0 0 10px rgba(0, 123, 255, 0.25);
        }
        .btn-primary {
            background-color: #007bff;
            border: none;
        }
        .btn-secondary {
            background-color: #6c757d;
            border: none;
        }
        .btn-success {
            background-color: #28a745;
            border: none;
        }
        .form-section {
            display: none;
            opacity: 0;
            transition: opacity 0.4s ease;
        }
        .form-section.active {
            display: block;
            opacity: 1;
        }
        .invalid-feedback {
            display: none;
            color: red;
            margin-top: 5px;
        }
        .form-control.is-invalid + .invalid-feedback {
            display: block;
        }
    </style>
</head>
<body>

<div class="container mt-5 section-title" data-aos="fade-up">
        <h2>Book your service now!!</h2>
    <div class="progress my-4">
        <div class="progress-bar bg-success" role="progressbar" style="width: 16.6%;" id="progress-bar"></div>
        <div class="progress-bar-steps">
            <div class="progress-bar-step active">Service</div>
            <div class="progress-bar-step">Extras</div>
            <div class="progress-bar-step">Time</div>
            <div class="progress-bar-step">Details</div>
            <div class="progress-bar-step">Payment</div>
            <div class="progress-bar-step">Done</div>
        </div>
    </div>
    <form id="booking-form">
        <!-- Service Section -->
        <div id="service-section" class="form-section active">
            <h4>Please select your service</h4>
            <div class="form-group">
                <label for="location">Location</label>
                <select class="form-control" id="location" required>
                    <option value="">Select City</option>
                    <option value="Dubai">Dubai</option>
                    <option value="Abu Dhabi">Abu Dhabi</option>
                    <option value="Sharjah">Sharjah</option>
                </select>
                <div class="invalid-feedback">Please select a location.</div>
            </div>
            <div class="form-group">
                <label for="service-type">Service Type</label>
                <select class="form-control" id="service-type" required onchange="loadSubServices()">
                    <option value="">Select Service</option>
                    <option value="AC Service">AC Service</option>
                    <option value="Cleaning">Cleaning</option>
                </select>
                <div class="invalid-feedback">Please select a service type.</div>
            </div>
            <div class="form-group">
                <label for="sub-service">Sub Service</label>
                <select class="form-control" id="sub-service" required>
                    <option value="">Select Sub Service</option>
                </select>
                <div class="invalid-feedback">Please select a sub-service.</div>
            </div>
            <button type="button" class="btn btn-primary" onclick="validateSection('service-section', 'extras-section')">Next</button>
        </div>
        <!-- Extras Section -->
        <div id="extras-section" class="form-section">
            <h4>Extras</h4>
            <div class="form-group">
                <label for="hours">Select Number of Hours</label>
                <select class="form-control" id="hours" required>
                    <option value="">Select Hours</option>
                    <option value="1">1 Hour</option>
                    <option value="2">2 Hours</option>
                    <option value="3">3 Hours</option>
                    <option value="4">4 Hours</option>
                    <option value="5">5 Hours</option>
                    <option value="6">6 Hours</option>
                    <option value="7">7 Hours</option>
                    <option value="8">8 Hours</option>
                </select>
                <div class="invalid-feedback">Please select the number of hours.</div>
            </div>
            <div class="form-group">
                <label for="workers">Select Number of Workers</label>
                <select class="form-control" id="workers" required>
                    <option value="">Select Workers</option>
                    <option value="1">1 Worker</option>
                    <option value="2">2 Workers</option>
                    <option value="3">3 Workers</option>
                    <option value="4">4 Workers</option>
                    <option value="5">5 Workers</option>
                    <option value="6">6 Workers</option>
                    <option value="7">7 Workers</option>
                    <option value="8">8 Workers</option>
                </select>
                <div class="invalid-feedback">Please select the number of workers.</div>
            </div>
            <button type="button" class="btn btn-secondary" onclick="previousSection('service-section', 'extras-section')">Back</button>
            <button type="button" class="btn btn-primary" onclick="validateSection('extras-section', 'time-section')">Next</button>
        </div>
        <!-- Time Section -->
        <div id="time-section" class="form-section">
            <h4>Time</h4>
            <div class="form-group">
                <label for="date">Select Date</label>
                <input type="date" class="form-control" id="date" required>
                <div class="invalid-feedback">Please select a date.</div>
            </div>
            <div class="form-group">
                <label for="time">Select Time</label>
                <input type="time" class="form-control" id="time" required>
                <div class="invalid-feedback">Please select a time.</div>
            </div>
            <button type="button" class="btn btn-secondary" onclick="previousSection('extras-section', 'time-section')">Back</button>
            <button type="button" class="btn btn-primary" onclick="validateSection('time-section', 'details-section')">Next</button>
        </div>
        <!-- Details Section -->
        <div id="details-section" class="form-section">
            <h4>Details</h4>
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" id="name" required>
                <div class="invalid-feedback">Please enter your name.</div>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" required>
                <div class="invalid-feedback">Please enter a valid email address.</div>
            </div>
            <div class="form-group">
                <label for="phone">Phone Number</label>
                <input type="tel" class="form-control" id="phone" required>
                <div class="invalid-feedback">Please enter your phone number.</div>
            </div>
            <button type="button" class="btn btn-secondary" onclick="previousSection('time-section', 'details-section')">Back</button>
            <button type="button" class="btn btn-primary" onclick="validateSection('details-section', 'payment-section')">Next</button>
        </div>
        <!-- Payment Section -->
        <div id="payment-section" class="form-section">
            <h4>Payment</h4>
            <div class="form-group">
                <label for="payment-method">Payment Method</label>
                <select class="form-control" id="payment-method" required>
                    <option value="">Select Payment Method</option>
                    <option value="credit-card">Credit Card</option>
                    <option value="paypal">PayPal</option>
                    <option value="cash">Cash</option>
                </select>
                <div class="invalid-feedback">Please select a payment method.</div>
            </div>
            <button type="button" class="btn btn-secondary" onclick="previousSection('details-section', 'payment-section')">Back</button>
            <button type="button" class="btn btn-primary" onclick="validateSection('payment-section', 'done-section')">Next</button>
        </div>
        <!-- Done Section -->
        <div id="done-section" class="form-section">
            <h4>Done</h4>
            <p>Thank you for booking with us! We will contact you shortly to confirm the details.</p>
            <button type="button" class="btn btn-secondary" onclick="previousSection('payment-section', 'done-section')">Back</button>
        </div>
    </form>
</div>
<script>
    function nextSection(currentSection, nextSection) {
        document.getElementById(currentSection).classList.remove('active');
        document.getElementById(nextSection).classList.add('active');
        updateProgressBar(nextSection);
    }

    function previousSection(currentSection, previousSection) {
        document.getElementById(currentSection).classList.remove('active');
        document.getElementById(previousSection).classList.add('active');
        updateProgressBar(previousSection);
    }

    function validateSection(currentSection, nextSection) {
        let inputs = document.querySelectorAll('#' + currentSection + ' input, #' + currentSection + ' select');
        let valid = true;
        
        inputs.forEach(input => {
            if (!input.value) {
                input.classList.add('is-invalid');
                valid = false;
            } else {
                input.classList.remove('is-invalid');
            }
        });

        if (valid) {
            nextSection(currentSection, nextSection);
        }
    }

    function updateProgressBar(section) {
        let steps = ['service-section', 'extras-section', 'time-section', 'details-section', 'payment-section', 'done-section'];
        let progress = (steps.indexOf(section) + 1) / steps.length * 100;
        document.getElementById('progress-bar').style.width = progress + '%';

        let progressBarSteps = document.querySelectorAll('.progress-bar-step');
        progressBarSteps.forEach((step, index) => {
            if (index <= steps.indexOf(section)) {
                step.classList.add('active');
            } else {
                step.classList.remove('active');
            }
        });
    }

    function loadSubServices() {
        let serviceType = document.getElementById('service-type').value;
        let subServiceSelect = document.getElementById('sub-service');
        subServiceSelect.innerHTML = '<option value="">Select Sub Service</option>'; // Reset options

        if (serviceType === 'AC Service') {
            let acServices = ['AC Cleaning', 'AC Repair', 'AC Installation'];
            acServices.forEach(service => {
                let option = document.createElement('option');
                option.value = service;
                option.textContent = service;
                subServiceSelect.appendChild(option);
            });
        } else if (serviceType === 'Cleaning') {
            let cleaningServices = ['Deep Cleaning', 'General Cleaning', 'Carpet Cleaning'];
            cleaningServices.forEach(service => {
                let option = document.createElement('option');
                option.value = service;
                option.textContent = service;
                subServiceSelect.appendChild(option);
            });
        }
    }
</script>
</body>
</html>
