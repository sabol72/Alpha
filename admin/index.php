<?php require "../db_Connect.php"; ?>
<?php

// session_start();
// session_destroy();

// // Check if the user is logged in
// if (!isset($_SESSION['admin_logged_in']) || $_SESSION['admin_logged_in'] !== true) {
//     // Redirect to login page
//     header("Location: adminlogin.php");
//     exit();
// }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link rel="stylesheet" href="admin.css" />
    <title>BBC Admin Dashboard</title>
</head>
<body>
    <div class="d-flex" id="wrapper">
        <!-- Sidebar -->
        <div class="bg-white" id="sidebar-wrapper">
            <div class="sidebar-heading text-center py-4 primary-text fs-4 fw-bold text-uppercase border-bottom"><i class="fas fa-user-secret me-2"></i>BBC.Service</div>
            <div class="list-group list-group-flush my-3">
                <button class="list-group-item list-group-item-action bg-transparent second-text fw-bold" onclick="loadPage('allbookings.php')"><i class="fas fa-gift me-2"></i>All Bookings</button>
                <button class="list-group-item list-group-item-action bg-transparent second-text fw-bold" onclick="loadPage('ac_services.php')"><i class="fas fa-project-diagram me-2"></i>AC Services</button>
                <button class="list-group-item list-group-item-action bg-transparent second-text fw-bold" onclick="loadPage('cleaning_services.php')"><i class="fas fa-chart-line me-2"></i>Cleaning Services</button>
                <button class="list-group-item list-group-item-action bg-transparent second-text fw-bold" onclick="loadPage('new_booking.php')"><i class="fas fa-paperclip me-2"></i>New Booking</button>
                <button class="list-group-item list-group-item-action bg-transparent second-text fw-bold" onclick="loadPage('old_booking.php')"><i class="fas fa-shopping-cart me-2"></i>Old Booking</button>
                <a href="addAdmin.php" class="list-group-item list-group-item-action bg-transparent text-success fw-bold">
                    <i class="fas fa-user-plus me-2"></i>Add Admin
                </a>
                <a href="logout.php" class="list-group-item list-group-item-action bg-transparent text-danger fw-bold"><i class="fas fa-power-off me-2"></i>Logout</a>
            </div>
        </div>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id="page-content-wrapper">
            <nav class="navbar navbar-expand-lg navbar-light bg-transparent py-4 px-4">
                <div class="d-flex align-items-center">
                    <i class="fas fa-align-left primary-text fs-4 me-3" id="menu-toggle"></i>
                    <h2 class="fs-2 m-0">Dashboard</h2>
                </div>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle second-text fw-bold" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="fas fa-user me-2"></i>
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="#">Profile</a></li>
                                <li><a class="dropdown-item" href="#">Settings</a></li>
                                <li><a class="dropdown-item" href="#">Logout</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>

            <div class="container-fluid px-4">
                <div class="row my-5">
                    <div class="col" id="content">
                        <!-- Content will be loaded here -->
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        function loadPage(page) {
            fetch(page)
                .then(response => response.text())
                .then(data => {
                    document.getElementById('content').innerHTML = data;
                })
                .catch(error => console.error('Error:', error));
        }

        // Load a default page on initial load
        document.addEventListener("DOMContentLoaded", function() {
            loadPage('allbookings.php');
        });
    </script>
</body>
</html>
