<?php
// Include database connection
include '../db_connect.php';

// Check if filter parameter is set
if (isset($_GET['filter'])) {
    $filter = $_GET['filter'];

    // Initialize SQL query based on filter
    switch ($filter) {
        case 'dashboard':
            $sql = "SELECT * FROM bookings";
            break;
        case 'ac_services':
            $sql = "SELECT * FROM bookings WHERE service_type = 'Maintenance'";
            break;
        case 'cleaning_services':
            $sql = "SELECT * FROM bookings WHERE service_type = 'Cleaning'";
            break;
            case 'new_booking':
                $sql = "SELECT * FROM bookings  ORDER BY id ASC";
                break;
            case 'old_booking':
                $sql = "SELECT * FROM bookings  ORDER BY id DESC";
                break;
        default:
            // Default query if filter is not recognized
            $sql = "SELECT * FROM bookings";
            break;
    }

    // Execute SQL query and fetch data
    $result = $conn->query($sql);

    // Fetch data into an array
    $data = array();
    while ($row = $result->fetch_assoc()) {
        $data[] = $row;
    }

    // Close database connection
    $conn->close();

    // Return data as JSON
    echo json_encode($data);
    exit;
}

// If filter parameter is not set, return empty response or handle error
echo json_encode(array('error' => 'Filter parameter not provided'));
exit;
?>
