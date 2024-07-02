<?php
session_start();

// Include the database connection file
include '../db_Connect.php';
// Process form submission for login
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

<<<<<<< HEAD
    // Check if the entered credentials match the hardcoded credentials
    if ($username === $adminUsername && $password === $adminPassword) {
        // Set session variable to indicate the admin is logged in
        $_SESSION['admin_logged_in'] = true;
        // Redirect to the index page
        header("Location: index.php");
        exit();
=======
    // Query the database for the admin user
    $sql = "SELECT * FROM admin_users WHERE username = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows == 1) {
        $row = $result->fetch_assoc();
        // Verify the password
        if (password_verify($password, $row['password'])) {
            // Set session variable to indicate the admin is logged in
            $_SESSION['admin_logged_in'] = true;
            // Redirect to the booking information page
            header("Location: index.php");
            exit();
        } else {
            $error = "Invalid username or password.";
        }
>>>>>>> 89e57b4387190c5627f2f4219e77da38dc8de3f7
    } else {
        $error = "Invalid username or password.";
    }

    $stmt->close();
}
$conn->close();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
    <!-- Bootstrap CSS -->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/main.css" rel="stylesheet">
    <style>
      .container {
    max-width: 400px;
    margin: 50px auto;
    padding: 20px;
    background: #fff;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

h2 {
    text-align: center;
    margin-bottom: 20px;
}

.form-group {
    margin-bottom: 15px;
}

label {
    display: block;
    margin-bottom: 5px;
}

input[type="text"],
input[type="password"] {
    width: 100%;
    padding: 8px;
    font-size: 16px;
    border: 1px solid #ccc;
    border-radius: 4px;
}

button {
    width: 100%;
    padding: 10px;
    background-color: #4CAF50;
    color: white;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    font-size: 16px;
}

button:hover {
    background-color: #45a049;
}

button:active {
    background-color: #3e8e41;

        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <h2 class="mb-4">Admin Login</h2>
        <?php if (isset($error)): ?>
        <p><?php echo $error; ?></p>
    <?php endif; ?>
        <form method="post">
            <div class="mb-3">
                <label for="username" class="form-label">Username</label>
                <input type="text" class="form-control" id="username" name="username" required>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" id="password" name="password" required>
            </div>
            <button type="submit" class="btn btn-primary">Login</button>
        </form>
    </div>
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
