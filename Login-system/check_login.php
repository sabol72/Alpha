<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}

if (isset($_SESSION['loggedin'])) {
    echo '<script>alert("Login successful! Welcome, ' . htmlspecialchars($_SESSION['username']) . '!");</script>';
    unset($_SESSION['loggedin']); // Unset login success flag after displaying the alert
} else {
    echo '<script>console.log("Login success flag not set.");</script>';
}
?>
