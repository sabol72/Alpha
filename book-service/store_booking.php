<?php
// Include database connection
include '../db_connect.php';

// Prepare and bind SQL statement
$stmt = $conn->prepare("INSERT INTO bookings (location, service_type, sub_service, hours, workers, booking_date, booking_time, customer_name, customer_email, customer_phone, payment_method, card_number) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
$stmt->bind_param("sssiississss", $location, $serviceType, $subService, $hours, $workers, $bookingDate, $bookingTime, $customerName, $customerEmail, $customerPhone, $paymentMethod, $cardNumber);

// Set parameters and execute
$location = $_POST['location'];
$serviceType = $_POST['service-type'];
$subService = $_POST['sub-service'];
$hours = $_POST['hours'];
$workers = $_POST['workers'];
$bookingDate = $_POST['date'];
$bookingTime = $_POST['time'];
$customerName = $_POST['name'];
$customerEmail = $_POST['email'];
$customerPhone = $_POST['phone'];
$paymentMethod = $_POST['payment-method'];

// Check if payment method is credit/debit card and set card number
if ($paymentMethod === 'credit_card' || $paymentMethod === 'debit_card') {
    $cardNumber = $_POST['card-number'];
} else {
    $cardNumber = null;
}

// Execute SQL statement
if ($stmt->execute()) {
    // Booking stored successfully, trigger JavaScript alert and redirect
    echo "<script>alert('Booking stored successfully!'); window.location.href = 'booking.php';</script>";
} else {
    echo "Error: " . $stmt->error;
}

// Close statement and database connection
$stmt->close();
$conn->close();
?>

