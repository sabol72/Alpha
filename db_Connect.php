<?php
// Database configuration
$servername = "localhost";
$username = "root";
$password = "";
$database = "BBCMaintainance";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Example SQL query
$sql = "SELECT * FROM users WHERE username = ?";
$username = 'example_user';

// Prepare and bind parameters
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $username);

// Execute the statement
$stmt->execute();

// Get the result
$result = $stmt->get_result();

// Fetch the data
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        print_r($row);
    }
} else {
    echo "No user found with that username.";
}

// Close the statement
$stmt->close();

// Close the connection
$conn->close();
?>
