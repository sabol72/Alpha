<?php
session_start();
$form_data = isset($_SESSION['form_data']) ? $_SESSION['form_data'] : array();
$error_message = isset($_GET['error']) ? $_GET['error'] : '';
unset($_SESSION['form_data']);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body, html {
            height: 100%;
            margin: 0;
        }
        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .register-card {
            display: flex;
            justify-content: center;
            align-items: center;
            width: 100%;
            max-width: 1235px;
            height: 545px;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
            border-radius: 10px;
            overflow: hidden;
            position: relative;
            border: 2px solid grey;
            background-image: url('jclean.png');
            background-size: cover;
            background-position: center;
        }
        .register-form {
            position: relative;
            box-shadow: 0 4px 16px rgba(0, 0, 0, 0.2);
            background-color: white;
            padding: 20px;
            display: flex;
            flex-direction: column;
            z-index: 2;
            width: 100%;
            max-width: 445px;
            height: 100%;
            margin-left: 722px;
            overflow-y: auto;
        }
        .form-control:focus {
            box-shadow: none;
        }
        .btn-primary {
            background: linear-gradient(50deg, #42a5f5, #86c9ff, #ff7e5f);
            border: none;
        }
        .btn-primary:hover {
            transform: scale(1.1);
            font-size: 1.1em;
        }
        hr {
            border: none;
            height: 2px;
            background: linear-gradient(to right, #42a5f5, #86c9ff, #ff7e5f);
            margin: 20px 0;
        }
        .btn-outline-primary {
            color: #42a5f5;
            border-color: #42a5f5;
        }
        .btn-outline-primary:hover {
            background-color: #42a5f5;
            color: white;
            transform: scale(1.1);
        }
        @media (max-width: 768px) {
            .container {
                height: 100vh; /* Make sure the container fills the viewport height */
                padding: 0; /* Remove padding to avoid unwanted space around the content */
            }

            .register-card {
                flex-direction: column;
                background-image: none; /* Remove background image for better visibility on smaller screens */
                height: 100%; /* Ensure the card takes up full height of the container */
                max-height: none; /* Remove max-height to allow full expansion */
            }

            .register-form {
                background-color: rgba(255, 255, 255, 0.95);
                width: 100%; /* Make the form take up the full width */
                height: 100%; /* Make the form take up the full height of the card */
                margin: 0; /* Remove any margin */
                padding: 20px; /* Optional: Ensure padding is present for content spacing */
                box-sizing: border-box; /* Include padding and border in the element's total width and height */
                overflow-y: auto; /* Allow scrolling if content exceeds viewport height */
            }

            /* Optional: Adjust form field styles for smaller screens */
            .form-control {
                font-size: 1rem; /* Adjust font size for smaller screens */
                padding: 10px; /* Ensure padding is appropriate for touch targets */
            }

            .form-group select.form-control {
                font-size: 1rem; /* Adjust font size for select dropdowns */
                padding: 10px; /* Adjust padding for dropdowns */
            }

            .btn-primary, .btn-outline-primary {
                font-size: 1rem; /* Adjust button font size for smaller screens */
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="register-card">
            <div class="register-form">
                <h3 class="text-center">Register</h3>
                <?php if ($error_message): ?>
                    <div class="alert alert-danger" role="alert">
                        <?php echo htmlspecialchars($error_message); ?>
                    </div>
                <?php endif; ?>
                <form action="reg-verification.php" method="POST">
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="firstName">First Name</label>
                            <input type="text" class="form-control" id="firstName" name="firstName" value="<?php echo htmlspecialchars($form_data['firstName'] ?? ''); ?>" placeholder="Enter your first name" required>
                            <div class="invalid-feedback">
                                Please enter your first name.
                            </div>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="lastName">Last Name</label>
                            <input type="text" class="form-control" id="lastName" name="lastName" value="<?php echo htmlspecialchars($form_data['lastName'] ?? ''); ?>" placeholder="Enter your last name" required>
                            <div class="invalid-feedback">
                                Please enter your last name.
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="gender">Gender</label>
                        <select class="form-control" id="gender" name="gender" required>
                            <option value="">Select your gender</option>
                            <option value="male" <?php echo isset($form_data['gender']) && $form_data['gender'] == 'male' ? 'selected' : ''; ?>>Male</option>
                            <option value="female" <?php echo isset($form_data['gender']) && $form_data['gender'] == 'female' ? 'selected' : ''; ?>>Female</option>
                            <option value="other" <?php echo isset($form_data['gender']) && $form_data['gender'] == 'other' ? 'selected' : ''; ?>>Other</option>
                        </select>
                        <div class="invalid-feedback">
                            Please select your gender.
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="username">Username</label>
                            <input type="text" class="form-control" id="username" name="username" value="<?php echo htmlspecialchars($form_data['username'] ?? ''); ?>" placeholder="Choose a username" required>
                            <div class="invalid-feedback">
                                Please choose a username.
                            </div>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="email">Email address</label>
                            <input type="email" class="form-control" id="email" name="email" value="<?php echo htmlspecialchars($form_data['email'] ?? ''); ?>" placeholder="Enter your email" required>
                            <div class="invalid-feedback">
                                Please enter a valid email address.
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="password">Password</label>
                            <input type="password" class="form-control" id="password" name="password" placeholder="Enter a password" required>
                            <div class="invalid-feedback">
                                Please enter a password.
                            </div>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="confirmPassword">Confirm Password</label>
                            <input type="password" class="form-control" id="confirmPassword" name="confirmPassword" placeholder="Confirm your password" required>
                            <div class="invalid-feedback">
                                Please confirm your password.
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="dob">Date of birth</label>
                        <input type="date" class="form-control" id="dob" name="dob" value="<?php echo htmlspecialchars($form_data['dob'] ?? ''); ?>" placeholder="Enter your date of birth" required>
                        <div class="invalid-feedback">
                            Please enter your date of birth.
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="phone">Phone Number</label>
                        <input type="tel" class="form-control" id="phone" name="phone" value="<?php echo htmlspecialchars($form_data['phone'] ?? ''); ?>" placeholder="Enter your phone number" required>
                        <div class="invalid-feedback">
                            Please enter your phone number.
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="address">Address</label>
                        <textarea class="form-control" id="address" name="address" rows="3" placeholder="Enter your address" required><?php echo htmlspecialchars($form_data['address'] ?? ''); ?></textarea>
                        <div class="invalid-feedback">
                            Please enter your address.
                        </div>
                    </div>
                    <div class="form-group form-check">
                        <input type="checkbox" class="form-check-input" id="privacyPolicy" name="privacyPolicy" required>
                        <label class="form-check-label" for="privacyPolicy">Agree to Company's Privacy Policy</label>
                        <div class="invalid-feedback">
                            You must agree to the privacy policy.
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary btn-block">Register</button>
                </form>
                <hr>
                <p class="text-center">Or register with</p>
                <div class="d-flex justify-content-center">
                    <button type="button" class="btn btn-outline-primary mr-2"><i class="fab fa-google"></i> Google</button>
                    <button type="button" class="btn btn-outline-primary"><i class="fab fa-facebook-f"></i> Facebook</button>
                </div>
                <p class="text-center mt-3">Already have an account? <a href="login.php">Log in</a></p>
            </div>
        </div>
    </div>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
