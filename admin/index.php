<?php
session_start();

// Check if the user is logged in
if (!isset($_SESSION['admin_logged_in']) || $_SESSION['admin_logged_in'] !== true) {
    // Redirect to login page
    header("Location: adminlogin.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link rel="stylesheet" href="admin1.css" />
    <title>BBC admin dashboard</title>
</head>

<body>
    <div class="d-flex" id="wrapper">
        <!-- Sidebar -->
        <div class="bg-white" id="sidebar-wrapper">
            <div class="sidebar-heading text-center py-4 primary-text fs-4 fw-bold text-uppercase border-bottom"><i
                    class="fas fa-user-secret me-2"></i>BBC.Service</div>
            <div class="list-group list-group-flush my-3">
                    <a href="#" class="btn btn-outline-secondary btn-sidebar active" data-filter="dashboard"><i class="fas fa-tachometer-alt me-2"></i>Dashboard</a>
                    <a href="#" class="btn btn-outline-secondary btn-sidebar" data-filter="ac_services"><i class="fas fa-project-diagram me-2"></i>AC Services</a>
                    <a href="#" class="btn btn-outline-secondary btn-sidebar" data-filter="cleaning_services"><i class="fas fa-chart-line me-2"></i>Cleaning Services</a>
                    <a href="#" class="btn btn-outline-secondary btn-sidebar" data-filter="new_booking"><i class="fas fa-paperclip me-2"></i>New Booking</a>
                    <a href="#" class="btn btn-outline-secondary btn-sidebar" data-filter="old_booking"><i class="fas fa-shopping-cart me-2"></i>Old Booking</a>
                    <a href="logout.php" class="list-group-item list-group-item-action bg-transparent text-danger fw-bold"><i
                        class="fas fa-power-off me-2"></i>Logout</a>
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

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle second-text fw-bold" href="#" id="navbarDropdown"
                                role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="fas fa-user me-2"></i>Admin
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="#">Profile</a></li>
                                <li><a class="dropdown-item" href="#">Settings</a></li>
                                <li><a class="dropdown-item" href="logout.php">Logout</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>

            <div class="container-fluid px-4">
                <div class="row g-3 my-2">
                    <div class="col-md-3">
                        <div class="p-3 bg-white shadow-sm d-flex justify-content-around align-items-center rounded">
                            <div>
                                <h3 class="fs-2">200</h3>
                                <p class="fs-5">Products</p>
                            </div>
                            <i class="fas fa-gift fs-1 primary-text border rounded-full secondary-bg p-3"></i>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="p-3 bg-white shadow-sm d-flex justify-content-around align-items-center rounded">
                            <div>
                                <h3 class="fs-2">1000</h3>
                                <p class="fs-5">Sales</p>
                            </div>
                            <i
                                class="fas fa-hand-holding-usd fs-1 primary-text border rounded-full secondary-bg p-3"></i>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="p-3 bg-white shadow-sm d-flex justify-content-around align-items-center rounded">
                            <div>
                                <h3 class="fs-2">1500</h3>
                                <p class="fs-5">Delivery</p>
                            </div>
                            <i class="fas fa-truck fs-1 primary-text border rounded-full secondary-bg p-3"></i>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="p-3 bg-white shadow-sm d-flex justify-content-around align-items-center rounded">
                            <div>
                                <h3 class="fs-2">%15</h3>
                                <p class="fs-5">Increase</p>
                            </div>
                            <i class="fas fa-chart-line fs-1 primary-text border rounded-full secondary-bg p-3"></i>
                        </div>
                    </div>
                </div>

                <div class="row my-5">
                    <h3 class="fs-4 mb-3">Recent Orders</h3>
                    <div class="col">
                        <table class="table bg-white rounded shadow-sm  table-hover">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Location</th>
                                    <th>Service</th>
                                    <th>Hours</th>
                                    <th>Workers</th>
                                    <th>phone</th>
                                    <th>email</th>
                                    <th>payment method</th>
                                    <th>Prefered_time</th>
                                    <th>Prefered_date</th>
                                    <!-- Add more headers as needed -->
                                </tr>
                            </thead>
                            <tbody>
                                <!-- Table body will be populated dynamically -->
                            </tbody>
                        </table>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- /#page-content-wrapper -->
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        var el = document.getElementById("wrapper");
        var toggleButton = document.getElementById("menu-toggle");

        toggleButton.onclick = function () {
            el.classList.toggle("toggled");
        };

        document.addEventListener('DOMContentLoaded', function () {
            // Select all sidebar buttons
            const sidebarButtons = document.querySelectorAll('.btn-sidebar');

            // Function to handle button click
            function handleButtonClick(event) {
                event.preventDefault();

                // Remove active class from all buttons
                sidebarButtons.forEach(btn => btn.classList.remove('active'));

                // Add active class to the clicked button
                this.classList.add('active');

                // Get the filter value
                const filter = this.getAttribute('data-filter');

                // AJAX request to fetch data
                fetch('fetch_data.php?filter=' + filter)
                    .then(response => response.json())
                    .then(data => {
                        // Clear existing table rows
                        const tableBody = document.querySelector('tbody');
                        tableBody.innerHTML = '';

                        // Populate table with fetched data
                        data.forEach(row => {
                            const tr = document.createElement('tr');
                            // Adjust these according to your actual column names from the database
                            tr.innerHTML = `<td>${row.customer_name}</td><td>${row.location}</td><td>${row.sub_service}</td><td>${row.hours} Hours</td><td>${row.workers} Workers</td><td>+971 ${row.customer_phone}</td><td><a href="mailto:${row.customer_email}">${row.customer_email}</a></td><td>${row.payment_method}</td><td>${row.booking_time}</td><td>${row.booking_date}</td>`;
                            tableBody.appendChild(tr);
                        });
                    })
                    .catch(error => console.error('Error fetching data:', error));
            }

            // Attach click event listener to each sidebar button
            sidebarButtons.forEach(btn => {
                btn.addEventListener('click', handleButtonClick);
            });

            // Trigger click on the active button to load initial data (optional)
            const activeButton = document.querySelector('.btn-sidebar.active');
            if (activeButton) {
                activeButton.click();
            }
        });
    </script>
</body>

</html>
