<?php
// fetch_data.php

// Handle POST request
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $requestData = json_decode(file_get_contents('php://input'), true);
    $sql = $requestData['sql'];

    // Execute SQL query (example using MySQLi)
    $connection = new mysqli('localhost', 'username', 'password', 'database_name');
    if ($connection->connect_error) {
        die("Connection failed: " . $connection->connect_error);
    }

    $result = $connection->query($sql);
    $data = [];

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $data[] = $row;
        }
    }

    $connection->close();

    // Return data as JSON
    header('Content-Type: application/json');
    echo json_encode($data);
    exit;
}
?>
