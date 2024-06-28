<?php
include "db_Connect.php";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Query to fetch all bookings
$sql = "SELECT * FROM bookings";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo '<div class="container-fluid px-4">';
    echo '<h2 class="my-4">Booking Details</h2>';
    echo '<table class="table table-hover">';
    echo '<thead><tr><th>#</th><th>Location</th><th>Service Type</th><th>Sub Service</th><th>Hours</th><th>Workers</th><th>Booking Date</th><th>Booking Time</th><th>Customer Name</th><th>Customer Email</th><th>Customer Phone</th><th>Payment Method</th><th>Card Number</th></tr></thead>';
    echo '<tbody>';
    while ($row = $result->fetch_assoc()) {
        echo '<tr>';
        echo '<td>' . htmlspecialchars($row['id']) . '</td>';
        echo '<td>' . htmlspecialchars($row['location']) . '</td>';
        echo '<td>' . htmlspecialchars($row['service_type']) . '</td>';
        echo '<td>' . htmlspecialchars($row['sub_service']) . '</td>';
        echo '<td>' . htmlspecialchars($row['hours']) . '</td>';
        echo '<td>' . htmlspecialchars($row['workers']) . '</td>';
        echo '<td>' . htmlspecialchars($row['booking_date']) . '</td>';
        echo '<td>' . htmlspecialchars($row['booking_time']) . '</td>';
        echo '<td>' . htmlspecialchars($row['customer_name']) . '</td>';
        echo '<td>' . htmlspecialchars($row['customer_email']) . '</td>';
        echo '<td>' . htmlspecialchars($row['customer_phone']) . '</td>';
        echo '<td>' . htmlspecialchars($row['payment_method']) . '</td>';
        echo '<td>' . htmlspecialchars($row['card_number']) . '</td>';
        echo '</tr>';
    }
    echo '</tbody></table>';
    echo '</div>';
} else {
    echo '<p>No bookings found.</p>';
}

$conn->close();


?>
