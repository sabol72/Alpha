<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking Form</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="../assets/css/main.css">

</head>
<body>
    <div class="booking-form container section-title">
        <div class="step">
            <h2>Home Cleaning</h2>
            <label>How many cleaners do you need?</label>
            <select id="num-cleaners">
                <option value="1">1 Cleaner</option>
                <option value="2">2 Cleaners</option>
                <option value="3">3 Cleaners</option>
                <option value="4">4 Cleaners</option>
            </select>
            
            <label>How many hours should they stay?</label>
            <select id="num-hours">
                <option value="2">2 Hours</option>
                <option value="3">3 Hours</option>
                <option value="4">4 Hours</option>
                <option value="5">5 Hours</option>
                <option value="6">6 Hours</option>
            </select>
            
            <label>How often do you need cleaning?</label>
            <select id="frequency">
                <option value="once">Once</option>
                <option value="weekly">Weekly</option>
            </select>
            
            <button onclick="nextStep()">Next</button>
        </div>
        
        <!-- Add more steps here -->
        
        <div class="step">
            <h2>Date & Time</h2>
            <label>Date:</label>
            <input type="date" id="date">
            
            <label>Start Time:</label>
            <input type="time" id="time">
            
            <button onclick="nextStep()">Next</button>
        </div>
        
        <div class="step">
            <h2>Address</h2>
            <input type="text" id="address" placeholder="Enter your address">
            
            <button onclick="nextStep()">Next</button>
        </div>
        
        <div class="step">
            <h2>Payment Method</h2>
            <label>
                <input type="radio" name="payment" value="credit-card"> Credit Card
            </label>
            <label>
                <input type="radio" name="payment" value="apple-pay"> Apple Pay
            </label>
            <label>
                <input type="radio" name="payment" value="cash-on-delivery"> Cash on Delivery
            </label>
            
            <button onclick="confirmBooking()">Confirm Booking</button>
        </div>
        
        <div class="step summary">
            <h2>Summary</h2>
            <p>Review your booking details and confirm your booking.</p>
            
            <!-- Display booking details here -->
            
            <button onclick="bookNow()">Book Now</button>
        </div>
    </div>

    <script src="script.js"></script>
</body>
</html>
