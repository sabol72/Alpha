<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Handle AJAX requests separately
    if (isset($_POST['ajax'])) {
        if (isset($_POST['service'])) {
            $_SESSION['selectedService'] = $_POST['service'];
        }
        if (isset($_POST['serviceType'])) {
            $_SESSION['selectedServiceType'] = $_POST['serviceType'];
        }

        // Return a response to the AJAX call
        echo json_encode([
            'status' => 'success',
            'selectedService' => $_SESSION['selectedService'] ?? 'None',
            'selectedServiceType' => $_SESSION['selectedServiceType'] ?? 'None'
        ]);
        exit();
    } 
    // Handle regular form submission
    else {
        if (isset($_POST['service'])) {
            $_SESSION['selectedService'] = $_POST['service'];
            // Redirect to the appropriate page based on the selected service
            if ($_POST['service'] == 'Air Conditioner') {
                header('Location: ac-service.php');
            } elseif ($_POST['service'] == 'Cleaning') {
                header('Location: clean-service.php');
            }
            exit();
        } elseif (isset($_POST['serviceType'])) {
            $_SESSION['selectedServiceType'] = $_POST['serviceType'];
            // Redirect to the booking page
            header('Location: ../book-service/booking.php');
            exit();
        }
    }
}
?>
