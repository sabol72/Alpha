<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body, html {
            height: 100%;
            margin: 0;
            color: white;
        }
        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }
        .login-card {
            position: relative;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            width: 100%;
            max-width: 400px;
            border-radius: 8px;
            overflow: hidden;
        }
        .login-image {
            background: url('welcome-back.png') no-repeat center center;
            background-size: cover;
            height: 100%;
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            z-index: 1;
        }
        .overlay {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: #0000007d;
            z-index: 2;
        }
        .login-form {
            position: relative;
            z-index: 3;
            padding: 20px;
            width: 100%;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }
        .form-control:focus {
            box-shadow: none;
        }
        hr {
            border: none;
            height: 2px;
            background: linear-gradient(to right, #ff7e5f, #86c9ff, #42a5f5);
            margin: 20px 0;
        }
        .btn-primary {
            background: linear-gradient(50deg, #42a5f5, #86c9ff, #ff7e5f);
            color: #000000eb;
            border: none;
            transition: transform 0.3s ease, font-size 0.3s ease;
        }
        .btn-primary:hover {
            background: linear-gradient(50deg, #ff7e5f, #86c9ff, #42a5f5);
            transform: scale(1.05);
            font-size: 1.1em;
        }

        .btn-outline-primary {
            border-color: #42a5f5;
            color: #42a5f5;
            background: transparent;
            transition: background-color 0.3s, color 0.3s;
        }

        .btn-outline-primary:hover {
            background: linear-gradient(50deg, #42a5f5, #86c9ff, #ff7e5f);
            color: white;
            border: none;            
        }

        .text-light a {
            color: #86c9ff;
        }
        form a{
            color: #007bff;
            text-decoration: none;
            transition: transform 0.3s ease, font-size 0.3s ease;
        }
        form a:hover{
            color: #ff0000c4;
            text-decoration: none;
            font-size: 1.1em;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="login-card">
            <div class="login-image"></div>
            <div class="overlay"></div>
            <div class="login-form p-4">
                <h2 class="text-center">Login</h2>
                <form action="lr-verification.php" method="post">
                    <hr>
                    <div class="form-group">
                        <input type="text" class="form-control" name="usernameOrEmail" placeholder="Username or Email" required>
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" name="password" placeholder="Password" required>
                    </div>
                    <button type="submit" class="btn btn-primary btn-block">Login</button>
                    <p class="text-center mt-3">Or login with</p>
                    <div class="d-flex justify-content-center">
                        <button type="button" class="btn btn-outline-primary mr-2"><i class="fab fa-google"></i> Google</button>
                        <button type="button" class="btn btn-outline-primary"><i class="fab fa-facebook-f"></i> Facebook</button>
                    </div>
                    <p class="text-center mt-3">Create a new account <a href="register.php">Register</a></p>
                </form>
            </div>
        </div>
    </div>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
