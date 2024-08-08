<?php
session_start();
include('db_connect.php'); // Include your database connection file

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $usernameOrEmail = $_POST['usernameOrEmail'];
    $password = $_POST['password'];

    // Check if input is an email
    if (filter_var($usernameOrEmail, FILTER_VALIDATE_EMAIL)) {
        // Input is an email
        $query = 'SELECT id, username, email, password FROM users WHERE email = ?';
    } else {
        // Input is a username
        $query = 'SELECT id, username, email, password FROM users WHERE username = ?';
    }

    // Create a prepared statement
    if ($stmt = $conn->prepare($query)) {
        // Bind parameters (s = string)
        $stmt->bind_param('s', $usernameOrEmail);
        $stmt->execute();
        $stmt->store_result();

        // Check if user exists
        if ($stmt->num_rows > 0) {
            $stmt->bind_result($id, $username, $email, $hashed_password);
            $stmt->fetch();
            // Verify password
            if (password_verify($password, $hashed_password)) {
                // Set the session timeout to 30 minutes (1800 seconds)
                $timeout_duration = 1800;

                // Ensure the session cookie lasts as long as the session data
                ini_set('session.gc_maxlifetime', $timeout_duration);
                session_set_cookie_params($timeout_duration);

                // User exists, create session
                $_SESSION['loggedin'] = TRUE;
                $_SESSION['id'] = $id;
                $_SESSION['username'] = $username;
                $_SESSION['email'] = $email;
                $_SESSION['timeout'] = time() + $timeout_duration;
                header('Location: ../indbooking/index.php ');
                exit();
            } else {
                // Incorrect password
                echo "<script>alert('Unable to login: Incorrect password'); window.location.href='login.php';</script>";
            }
        } else {
            // User doesn't exist
            echo "<script>alert('Unable to login: User does not exist'); window.location.href='login.php';</script>";
        }
        $stmt->close();
    }
}
?>
