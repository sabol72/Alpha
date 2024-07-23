<?php
require "../db_Connect.php";

$sql = "SELECT id, location, sub_service, hours, customer_name, customer_email, customer_phone, payment_method, card_number, payment_status
        FROM bookings"; // Replace 'bookings' with your actual table name
$result = $conn->query($sql);

if ($result === false) {
    // Handle query error
    die("Error: " . $conn->error);
}

if ($result->num_rows > 0) {
    echo '<div class="table-responsive">
            <table class="table table-striped table-bordered">
                <thead class="thead-dark">
                    <tr>
                        <th>ID</th>
                        <th>Location</th>
                        <th>Sub Service</th>
                        <th>Hours</th>
                        <th>Customer Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Payment Method</th>
                        <th>Card Number</th>
                        <th>Payment Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>';
    while ($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>{$row['id']}</td>
                <td>{$row['location']}</td>
                <td>{$row['sub_service']}</td>
                <td>{$row['hours']}</td>
                <td>{$row['customer_name']}</td>
                <td>{$row['customer_email']}</td>
                <td>{$row['customer_phone']}</td>
                <td>{$row['payment_method']}</td>
                <td>{$row['card_number']}</td>
                <td>{$row['payment_status']}</td>
                <td>
                    <button class='btn btn-sm btn-primary change-status' data-id='{$row['id']}'>Change Status</button>
                    <button class='btn btn-sm btn-danger delete-record' data-id='{$row['id']}'><i class='fa fa-trash'></i></button>
                </td>
              </tr>";
    }
    echo '</tbody>
          </table>
          </div>';
} else {
    echo "<p>No bookings found</p>";
}

$conn->close();
?>
