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
        .progress {
            height: 40px;
            position: relative;
        }
        .progress-bar {
            height: 100%;
            position: relative;
            z-index: 2;
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
            line-height: 40px;
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
        }
        .progress-bar-step.active::before {
            background: #007bff;
        }
    </style>
</head>
<body>
<div class="container mt-5">
    <h2 class="text-center">Booking System</h2>
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
        <div id="service-section">
            <h4>Please select your service</h4>
            <div class="form-group">
                <label for="location">Location</label>
                <select class="form-control" id="location" required>
                    <option value="">Select City</option>
                    <option value="Dubai">Dubai</option>
                    <option value="Abu Dhabi">Abu Dhabi</option>
                    <option value="Sharjah">Sharjah</option>
                </select>
            </div>
            <div class="form-group">
                <label for="service-type">Service Type</label>
                <select class="form-control" id="service-type" required onchange="loadSubServices()">
                    <option value="">Select Service</option>
                    <option value="AC Service">AC Service</option>
                    <option value="Cleaning">Cleaning</option>
                </select>
            </div>
            <div class="form-group">
                <label for="sub-service">Sub Service</label>
                <select class="form-control" id="sub-service" required>
                    <option value="">Select Sub Service</option>
                </select>
            </div>
            <button type="button" class="btn btn-primary" onclick="nextSection('extras-section')">Next</button>
        </div>
        <!-- Extras Section -->
        <div id="extras-section" style="display: none;">
            <h4>Extras</h4>
            <div class="form-group">
                <label for="extras">Select Extras</label>
                <select multiple class="form-control" id="extras">
                    <option value="Extra 1">Extra 1</option>
                    <option value="Extra 2">Extra 2</option>
                    <option value="Extra 3">Extra 3</option>
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
                <input type="date" class="form-control" id="date" required>
            </div>
            <div class="form-group">
                <label for="time">Select Time</label>
                <input type="time" class="form-control" id="time" required>
            </div>
            <button type="button" class="btn btn-secondary" onclick="previousSection('extras-section')">Back</button>
            <button type="button" class="btn btn-primary" onclick="nextSection('details-section')">Next</button>
        </div>
        <!-- Details Section -->
        <div id="details-section" style="display: none;">
            <h4>Details</h4>
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" id="name" required>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" required>
            </div>
            <div class="form-group">
                <label for="phone">Phone</label>
                <input type="tel" class="form-control" id="phone" required>
            </div>
            <button type="button" class="btn btn-secondary" onclick="previousSection('time-section')">Back</button>
            <button type="button" class="btn btn-primary" onclick="nextSection('payment-section')">Next</button>
        </div>
        <!-- Payment Section -->
        <div id="payment-section" style="display: none;">
            <h4>Payment</h4>
            <div class="form-group">
                <label for="card-number">Card Number</label>
                <input type="text" class="form-control" id="card-number" required>
            </div>
            <div class="form-group">
                <label for="expiry-date">Expiry Date</label>
                <input type="text" class="form-control" id="expiry-date" required>
            </div>
            <div class="form-group">
                <label for="cvv">CVV</label>
                <input type="text" class="form-control" id="cvv" required>
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
            <p><strong>Extras:</strong> <span id="confirm-extras"></span></p>
            <p><strong>Date:</strong> <span id="confirm-date"></span></p>
            <p><strong>Time:</strong> <span id="confirm-time"></span></p>
            <p><strong>Name:</strong> <span id="confirm-name"></span></p>
            <p><strong>Email:</strong> <span id="confirm-email"></span></p>
            <p><strong>Phone:</strong> <span id="confirm-phone"></span></p>
            <p><strong>Card Number:</strong> <span id="confirm-card-number"></span></p>
            <button type="button" class="btn btn-secondary" onclick="previousSection('payment-section')">Back</button>
            <button type="submit" class="btn btn-success">Confirm Booking</button>
        </div>
    </form>
</div>

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

    function displayConfirmation() {
        document.getElementById('confirm-location').textContent = document.getElementById('location').value;
        document.getElementById('confirm-service-type').textContent = document.getElementById('service-type').value;
        document.getElementById('confirm-sub-service').textContent = document.getElementById('sub-service').value;
        document.getElementById('confirm-extras').textContent = Array.from(document.getElementById('extras').selectedOptions).map(option => option.text).join(', ');
        document.getElementById('confirm-date').textContent = document.getElementById('date').value;
        document.getElementById('confirm-time').textContent = document.getElementById('time').value;
        document.getElementById('confirm-name').textContent = document.getElementById('name').value;
        document.getElementById('confirm-email').textContent = document.getElementById('email').value;
        document.getElementById('confirm-phone').textContent = document.getElementById('phone').value;
        document.getElementById('confirm-card-number').textContent = document.getElementById('card-number').value;
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
