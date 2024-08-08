<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .welcome-message {
            margin-top: 50px;
            text-align: center;
        }
        .welcome-message p {
            font-size: 16px;
        }
        .welcome-message a {
            color: #007bff;
            font-weight: bold;
        }
        .welcome-message a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <?php include 'check_login.php'; ?>
    
    <div class="container">
        <div class="welcome-message">
            <h1 class="display-4">Welcome, <?php echo htmlspecialchars($_SESSION['username']); ?>!</h1>
            <p class="lead">You have successfully registered with the email: <?php echo htmlspecialchars($_SESSION['email']); ?>.</p>
            <p class="mt-4">To proceed with booking, please <a href="login.php">log in here</a> using the username and password you created.</p>
        </div>
    </div>
</body>
</html>
