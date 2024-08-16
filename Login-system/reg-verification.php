<?php
session_start();
include('db_connect.php'); // Include the database connection file

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data
    $first_name = $_POST['firstName'];
    $last_name = $_POST['lastName'];
    $gender = $_POST['gender'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $dob = $_POST['dob'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $privacy_policy = isset($_POST['privacyPolicy']) ? 1 : 0;

    // Hash the password
    $hashed_password = password_hash($password, PASSWORD_BCRYPT);

    // Insert data
    $sql = "INSERT INTO users (first_name, last_name, gender, username, email, password, dob, phone, address, privacy_policy)
            VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

    // Prepare and bind
    if ($stmt = $conn->prepare($sql)) {
        $stmt->bind_param("sssssssssi", $first_name, $last_name, $gender, $username, $email, $hashed_password, $dob, $phone, $address, $privacy_policy);

        try {
            if ($stmt->execute()) {
                // Set the session timeout to 30 minutes (1800 seconds)
                $timeout_duration = 604800;

                // Ensure the session cookie lasts as long as the session data
                ini_set('session.gc_maxlifetime', $timeout_duration);
                session_set_cookie_params($timeout_duration);

                // Start a new session and store user information
                session_start(); // Ensure a new session is started if it was destroyed previously
                $_SESSION['username'] = $username;
                $_SESSION['email'] = $email;

                // Redirect to welcome page
                header("Location: index.php");
                exit();
            }
        } catch (mysqli_sql_exception $e) {
            // Check for duplicate entry error
            if ($e->getCode() == 1062) {
                $duplicateField = (strpos($e->getMessage(), 'username') !== false) ? 'username' : 'email';
                $errorMessage = ($duplicateField == 'username') ? 'Username not available' : 'Email already used';

                // Preserve form data in session
                $_SESSION['form_data'] = $_POST;

                // Redirect back to the registration page with an error message
                header("Location: register.php?error=" . urlencode($errorMessage));
                exit();
            } else {
                echo "Error: " . $e->getMessage();
            }
        }

        $stmt->close();
    } else {
        echo "Error preparing statement: " . $conn->error;
    }

    // Close connection
    $conn->close();
}
?>
