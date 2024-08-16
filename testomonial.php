<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Testimonial</title>
    
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <style>
        .testimonial-container {
            margin: 50px auto;
            width: 800px;
            height: 400px;
            background-color: #fff;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
            border-radius: 10px;
            overflow: hidden;
            position: relative;
            display: flex;
        }

        .testimonial-image {
            flex: 1;
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            height: 100%;
        }

        .testimonial-content {
            flex: 1;
            padding: 40px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            position: relative;
        }

        .customer-statement {
            font-size: 14px;
            color: #ffcc00;
            font-weight: bold;
            margin-bottom: 10px;
        }

        .testimonial-content h2 {
            color: #333;
            margin: 0 0 20px;
            font-size: 20px;
        }

        #testimonial-text-container {
            transition: opacity 0.5s ease-in-out;
        }

        .testimonial-content p {
            color: #666;
            font-size: 14px;
            margin: 0 0 20px;
            line-height: 1.6;
        }

        .customer-info {
            display: flex;
            align-items: center;
            margin-top: 20px;
        }

        .customer-info img {
            border-radius: 50%;
            width: 50px;
            height: 50px;
            margin-right: 15px;
        }

        .customer-info span {
            font-size: 18px;
            color: #333;
            font-weight: bold;
        }

        .color-buttons {
            display: flex;
            flex-direction: column;
            position: absolute;
            right: 10px;
            top: 50%;
            transform: translateY(-50%);
        }

        .color-button {
            width: 40px;
            height: 40px;
            margin: 5px 0;
            cursor: pointer;
            background-color: #ccc;
            display: flex;
            justify-content: center;
            align-items: center;
            border-radius: 50%;
        }

        .arrow-icon {
            font-size: 16px;
        }
    </style>
</head>
<body>

    <div class="container mt-5">
        <!-- <div class="row"> -->
            <div class="col-lg-8 mx-auto">
                <div class="testimonial-container">
                    <div class="testimonial-image" style="background-image: url('assets/img/testimonial-img-1.jpg');"></div>
                    <div class="testimonial-content">
                        <div class="customer-statement">Customer Statement</div>
                        <h2>Our Client Feedback</h2>
                        <div id="testimonial-text-container">
                            <p id="testimonial-text">“Amazing company with absolutely great staff! I have a regular staff member and she is extremely professional, punctual and great at what she does.”</p>
                            <div class="customer-info">
                                <img src="assets/img/author-2.png" alt="Customer Image" id="customer-img">
                                <span id="customer-name">yama pradeep</span>
                            </div>
                        </div>
                    </div>
                    <div class="color-buttons">
                        <div class="color-button" style="background-color: #ffcc00;" onclick="changeTestimonial(1)">
                            <i class="fas fa-arrow-up arrow-icon"></i>
                        </div>
                        <div class="color-button" style="background-color: #cbced3;" onclick="changeTestimonial(2)">
                            <i class="fas fa-arrow-down arrow-icon"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS and jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <script>
        function changeTestimonial(option) {
            const testimonialText = document.getElementById('testimonial-text');
            const customerImg = document.getElementById('customer-img');
            const customerName = document.getElementById('customer-name');

            const testimonials = {
                1: {
                    text: '“Amazing company with absolutely great staff! I have a regular staff member and she is extremely professional, punctual and great at what she does.”',
                    img: 'assets/img/author-3.png',
                    name: 'yama pradeep'
                },
                2: {
                    text: '“Another amazing feedback from a satisfied client. The staff are friendly, efficient, and always go above and beyond.”',
                    img: 'assets/img/author-2.png',
                    name: 'Rajesh Dai'
                }
            };

            const selectedTestimonial = testimonials[option];

            testimonialText.style.opacity = '0';
            customerImg.style.opacity = '0';
            customerName.style.opacity = '0';

            setTimeout(() => {
                testimonialText.innerText = selectedTestimonial.text;
                customerImg.src = selectedTestimonial.img;
                customerName.innerText = selectedTestimonial.name;

                testimonialText.style.opacity = '1';
                customerImg.style.opacity = '1';
                customerName.style.opacity = '1';
            }, 500);
        }
    </script>
</body>
</html>