<?php
require "../db_Connect.php";

$sql = "SELECT id, customer_name, booking_date, service_type, sub_service FROM bookings Where service_type='AC Service'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo '<table class="table bg-white rounded shadow-sm table-hover">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Customer Name</th>
                    <th>Booking Date</th>
                    <th>Service Type</th>
                    <th>Sub_Service</th>
                    
                </tr>
            </thead>
            <tbody>';
    while ($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>{$row['id']}</td>
                <td>{$row['customer_name']}</td>
                <td>{$row['booking_date']}</td>
                <td>{$row['service_type']}</td>
                <td>{$row['sub_service']}</td>
              </tr>";
    }
    echo '</tbody>
          </table>';
} else {
    echo "<p>No data found</p>";
}

$conn->close();
?>
