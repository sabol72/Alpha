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
        .container {
            background: #ffffff;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
            padding: 30px;
        }
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
    <form id="booking-form" action="store_booking.php" method="POST">
    <!-- Service Section -->
    <div id="service-section">
        <h4>Please select your service</h4>
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
            <select class="form-control" id="service-type" name="service-type" required onchange="loadSubServices()">
                <option value="">Select Service</option>
                <option value="AC Service">AC Service</option>
                <option value="Cleaning">Cleaning</option>
            </select>
        </div>
        <div class="form-group">
            <label for="sub-service">Sub Service</label>
            <select class="form-control" id="sub-service" name="sub-service" required>
                <option value="">Select Sub Service</option>
            </select>
        </div>
        <button type="button" class="btn btn-primary" onclick="nextSection('extras-section')">Next</button>
    </div>
    <!-- Extras Section -->
    <div id="extras-section" style="display: none;">
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
        <button type="button" class="btn btn-secondary" onclick="previousSection('service-section')">Back</button>
        <button type="button" class="btn btn-primary" onclick="nextSection('time-section')">Next</button>
    </div>
    <!-- Time Section -->
    <div id="time-section" style="display: none;">
        <h4>Time</h4>
        <div class="form-group">
            <label for="date">Select Date</label>
            <input type="date" class="form-control" id="date" name="date" required>
        </div>
        <div class="form-group">
            <label for="time">Select Time</label>
            <input type="time" class="form-control" id="time" name="time" required>
        </div>
        <button type="button" class="btn btn-secondary" onclick="previousSection('extras-section')">Back</button>
        <button type="button" class="btn btn-primary" onclick="nextSection('details-section')">Next</button>
    </div>
    <!-- Details Section -->
    <div id="details-section" style="display: none;">
        <h4>Details</h4>
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control" id="name" name="name" required>
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" id="email" name="email" required>
        </div>
        <div class="form-group">
            <label for="phone">Phone</label>
            <input type="tel" class="form-control" id="phone" name="phone" required>
        </div>
        <button type="button" class="btn btn-secondary" onclick="previousSection('time-section')">Back</button>
        <button type="button" class="btn btn-primary" onclick="nextSection('payment-section')">Next</button>
    </div>
    <!-- Payment Section -->
    <div id="payment-section" style="display: none;">
        <h4>Payment Method</h4>
        <div class="form-group">
            <label for="payment-method">Select Payment Method</label>
            <select class="form-control" id="payment-method" name="payment-method" onchange="togglePaymentFields()">
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
        <button type="button" class="btn btn-secondary" onclick="previousSection('details-section')">Back</button>
        <button type="button" class="btn btn-primary" onclick="nextSection('done-section')">Next</button>
    </div>

    <!-- Done Section -->
    <div id="done-section" style="display: none;">
        <h4>Confirm Booking</h4>
        <p><strong>Location:</strong> <span id="confirm-location"></span></p>
        <p><strong>Service Type:</strong> <span id="confirm-service-type"></span></p>
        <p><strong>Sub Service:</strong> <span id="confirm-sub-service"></span></p>
        <p><strong>Number Of Hours:</strong> <span id="confirm-hours"></span></p>
        <p><strong>Number of Workers:</strong> <span id="confirm-workers"></span></p>
        <p><strong>Date:</strong> <span id="confirm-date"></span></p>
        <p><strong>Time:</strong> <span id="confirm-time"></span></p>
        <p><strong>Name:</strong> <span id="confirm-name"></span></p>
        <p><strong>Email:</strong> <span id="confirm-email"></span></p>
        <p><strong>Phone:</strong> <span id="confirm-phone"></span></p>
        <p><strong>Payment Method:</strong> <span id="confirm-payment-method"></span></p>
        <p id="card-details-section" style="display: none;">
            <strong>Card Number:</strong> <span id="confirm-card-number"></span>
        </p>
        <button type="button" class="btn btn-secondary" onclick="previousSection('payment-section')">Back</button>
        <button type="submit" class="btn btn-success">Confirm Booking</button>
    </div>
</form>

<script>
    let currentSection = 'service-section';
    const sections = ['service-section', 'extras-section', 'time-section', 'details-section', 'payment-section', 'done-section'];
    const progress = document.getElementById('progress-bar');

    function nextSection(sectionId) {
        document.getElementById(currentSection).style.display = 'none';
        document.getElementById(sectionId).style.display = 'block';
        currentSection = sectionId;
        updateProgressBar();
        if (sectionId === 'done-section') {
            displayConfirmation();
        }
    }

    function previousSection(sectionId) {
        document.getElementById(currentSection).style.display = 'none';
        document.getElementById(sectionId).style.display = 'block';
        currentSection = sectionId;
        updateProgressBar();
    }

    function updateProgressBar() {
        const currentIndex = sections.indexOf(currentSection);
        const percentage = ((currentIndex + 1) / sections.length) * 100;
        progress.style.width = percentage + '%';
        document.querySelectorAll('.progress-bar-step').forEach((step, index) => {
            if (index <= currentIndex) {
                step.classList.add('active');
            } else {
                step.classList.remove('active');
            }
        });
    }

    function loadSubServices() {
        const serviceType = document.getElementById('service-type').value;
        const subServiceSelect = document.getElementById('sub-service');

        subServiceSelect.innerHTML = '<option value="">Select Sub Service</option>';

        if (serviceType === 'AC Service') {
            const acServices = ['Installation', 'Maintenance', 'Repair', 'Duct-cleaning'];
            acServices.forEach(service => {
                const option = document.createElement('option');
                option.value = service;
                option.textContent = service;
                subServiceSelect.appendChild(option);
            });
            


        } else if (serviceType === 'Cleaning') {
            const cleaningServices = ['Deep Cleaning', 'HVAC Air Duct Cleaning', 'Upholstery Sofa Steam Cleaning','Villa & House Cleaning', 'Water Tank Cleaning & Disinfection',
'Window Glass Cleaning', 'Mattress Cleaning', 'Carpet Cleaning', 'Pool Cleaning'];
            cleaningServices.forEach(service => {
                const option = document.createElement('option');
                option.value = service;
                option.textContent = service;
                subServiceSelect.appendChild(option);
            });
        }
    }

    function togglePaymentFields() {
    var paymentMethod = document.getElementById('payment-method').value;
    var creditCardDetails = document.getElementById('credit-card-details');

    if (paymentMethod === 'credit_card' || paymentMethod === 'debit_card') {
        creditCardDetails.style.display = 'block';
    } else {
        creditCardDetails.style.display = 'none';
    }
}

function displayConfirmation() {
    document.getElementById('confirm-location').textContent = document.getElementById('location').value;
    document.getElementById('confirm-service-type').textContent = document.getElementById('service-type').value;
    document.getElementById('confirm-sub-service').textContent = document.getElementById('sub-service').value;
    document.getElementById('confirm-hours').textContent = Array.from(document.getElementById('hours').selectedOptions).map(option => option.text).join(', ');
    document.getElementById('confirm-workers').textContent = Array.from(document.getElementById('workers').selectedOptions).map(option => option.text).join(', ');
    document.getElementById('confirm-date').textContent = document.getElementById('date').value;
    document.getElementById('confirm-time').textContent = document.getElementById('time').value;
    document.getElementById('confirm-name').textContent = document.getElementById('name').value;
    document.getElementById('confirm-email').textContent = document.getElementById('email').value;
    document.getElementById('confirm-phone').textContent = document.getElementById('phone').value;
    
    var paymentMethod = document.getElementById('payment-method').value;
    var confirmPaymentMethod = document.getElementById('confirm-payment-method');
    var cardDetailsSection = document.getElementById('card-details-section');
    var cardNumberInput = document.getElementById('card-number');
    
    confirmPaymentMethod.textContent = paymentMethod;
    
    if (paymentMethod === 'CreditCard' || paymentMethod === 'DebitCard') {
        cardDetailsSection.style.display = 'block';
        document.getElementById('confirm-card-number').textContent = cardNumberInput.value;
    } else {
        cardDetailsSection.style.display = 'none';
    }
}

    
    // Display payment method and related details
    confirmPaymentMethod.textContent = getPaymentMethodText(paymentMethod);
    
    if (paymentMethod === 'credit_card' || paymentMethod === 'debit_card') {
        confirmCardNumber.textContent = cardNumberInput.value.replace(/\d(?=\d{4})/g, "*"); // Masking card number for display
    } else {
        confirmCardNumber.textContent = "Not applicable";
    }


// Function to return text based on payment method value
function getPaymentMethodText(method) {
    switch (method) {
        case 'credit_card':
            return 'Credit Card';
        case 'debit_card':
            return 'Debit Card';
        case 'cod':
            return 'Cash on Delivery (COD)';
        default:
            return 'Not specified';
    }
}



    document.getElementById('booking-form').addEventListener('submit', function(event) {
        event.preventDefault();
        alert('Booking Confirmed!');
        // Here you would normally send the form data to the server using AJAX
        // For example:
        // fetch('path/to/your/admin/panel', {
        //     method: 'POST',
        //     body: new FormData(this)
        // }).then(response => response.json()).then(data => {
        //     console.log(data);
        // });
    });
</script>
</body>
</html>
