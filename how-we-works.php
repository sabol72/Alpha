<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BBC FAQ</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-4sFotDITofvA5+6oLdkXNciqF4C2XyFREbHrD1P2Kc5eZcQqBbUMxR/0hN2eF6uJU3GlIcPmnOFbvJ5SoWWXTg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        .how-we-work {
            text-align: center;
            padding: 10px 10px;
            background-color: #f9f9f9;
        }

        .how-we-work h2 {
            font-size: 2em;
            color: #000;
            margin-bottom: 30px;
        }

        .step {
            background-color: #6dac49;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            text-align: center;
            margin-bottom: 20px;
            display: flex;
            flex-direction: column; /* Align icon and content vertically */
            align-items: center; /* Center items horizontally */
            color: #fff;
            transition: transform 0.3s ease, box-shadow 0.3s ease, background-color 0.3s ease;
            position: relative; /* Ensure relative positioning for child elements */
        }

        .step:hover {
            background-color: yellow; /* Background color changes to yellow on hover */
            transform: scale(1.05); /* Slight scale up on hover */
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2); /* Box shadow on hover */
        }

        .step:hover .icon img {
            background-color: green; /* Background color of img changes to green on hover */
            transform: rotate(360deg); /* Rotate image 360 degrees on hover */
        }

        .step:hover p {
            color: rgba(0, 0, 0, 0.8); /* Light black text color on hover */
        }

        .step .icon {
            border-radius: 50%;
            padding: 20px; /* Increased padding for larger icon */
            margin-bottom: 15px;
        }

        .step .icon img {
            width: 100px; /* Adjust width of image */
            height: auto; /* Maintain aspect ratio */
            transition: transform 0.3s ease, background-color 0.3s ease; /* Transition effects for img */
            border-radius: 50%;
        }

        .step h3 {
            margin-top: 0;
            margin-bottom: 10px;
        }

        .step p {
            margin-bottom: 0;
        }
    </style>
</head>
<body>

<!-- How we work section -->
<section class="how-we-work py-5 section-title">
    <div class="container">
        <h2>How we work!!!</h2>
        <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="step">
                    <div class="icon">
                        <img src="img/contact-us.png" alt="Contact Us Icon">
                    </div>
                    <div>
                        <h3>Contact Us</h3>
                        <p>Contact us to schedule your cleaning service, date & time.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="step">
                    <div class="icon">
                        <img src="img/clean-step2.png" alt="Get Cleaning Icon">
                    </div>
                    <div>
                        <h3>Get Cleaning</h3>
                        <p>Our professional cleaner/team comes over and cleans.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="step">
                    <div class="icon">
                        <img src="img/relax.png" alt="Just Be Relax Icon">
                    </div>
                    <div>
                        <h3>Just Be Relax</h3>
                        <p>Be Relax. Find your home/office sparkling clean.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End How we work section -->

<!-- Bootstrap JS and jQuery -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>
