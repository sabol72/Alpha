<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FAQ</title>

    <!-- Main CSS File -->
    <link href="../assets/css/main.css" rel="stylesheet">
    <style>
        .faq{
            min-height: 70vh;
            width: 100vw;
            text-align: center;
            padding: 0 2rem;
            background: url(../images/faq.jpg);
            background-repeat: no-repeat;
            background-size: cover;
        }
        
        .faq .row{
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 0 2rem;
        }
        
        .faq .row .accordion-container{
            width: 50%;
            text-align: left;
        }

        .faq .row .accordion{
            margin-left: 1rem;
            margin-right: 2rem;
        }
        
        .faq .row .accordion-container .accordion .accordion-header{
            background-color: #00bfff;
            margin: 1rem 0;
            box-shadow: .1rem .1rem .3rem rgba(0,0,0,.3);
            cursor: pointer;
            padding: 1rem;
            border-radius: 0.25rem;
        }
        
        .faq .row .accordion-container .accordion .accordion-header span{
            display: inline-block;
            text-align: center;
            height: 2rem; /* Adjusted for better alignment */
            width: 2rem; /* Adjusted for better alignment */
            line-height: 2rem;
            font-size: 1.5rem; /* Adjusted for better alignment */
            background: #333;
            color: #fff;
            clip-path: polygon(0% 0%,75% 0%,100% 50%,75% 100%,0% 100%); 
        }
        
        .faq .row .accordion-container .accordion .accordion-header h3{
            display: inline;
            color: #333;
            font-weight: 400;
            padding-left: .5rem;
            font-size: 1.25rem; /* Adjusted for better alignment */
        }
        
        .faq .row .accordion-container .accordion .accordion-body{
            padding: 1rem;
            color: #444;
            box-shadow: .1rem .1rem .3rem rgba(0,0,0,.3);
            background-color: #fff;
            font-size: 1.2rem; /* Adjusted for better alignment */
            display: none;
            margin-left: 1rem;
            margin-right: 2rem;
        }
        
        @media (max-width: 1200px){
            .faq{
                min-height: 70vh;
            }
        }        

        @media (max-width: 1000px){
            html{
                font-size: 50%;
            }
        }
    </style>
</head>
<body>
    <section class="faq">
        <!-- <div class="container"> -->
            <div class="section-title pb-3 pt-5">
                <h1 class="heading" style="margin-top: -2rem; color: #00bfff;" id="faq">FAQ</h1>
            </div>
            <div class="row">
                <div class="accordion-container">
                    <div class="accordion">
                        <div class="accordion-header">
                            <span>+</span>
                            <h3>What service do you offer?</h3>
                        </div>
                        <div class="accordion-body">
                            <p>We offer a wide range of home services, including plumbing, electrical work, handyman services, masonry, tiling, and AC technician services.</p>
                        </div>
                    </div>
                    <div class="accordion">
                        <div class="accordion-header">
                            <span>+</span>
                            <h3>How do I book your services?</h3>
                        </div>
                        <div class="accordion-body">
                            <p>You can book our services online by filling out our booking form on our website or by giving us a call. Our customer service team will be happy to assist you with any questions you may have.</p>
                        </div>
                    </div>
                    <div class="accordion">
                        <div class="accordion-header">
                            <span>+</span>
                            <h3>How much do your services cost?</h3>
                        </div>
                        <div class="accordion-body">
                            <p>The cost of our services varies depending on the type of service you require and the complexity of the job. However, we offer competitive pricing and always strive to make our services affordable for our clients.</p>
                        </div>
                    </div>
                    <div class="accordion">
                        <div class="accordion-header">
                            <span>+</span>
                            <h3>Are your technicians licensed and insured?</h3>
                        </div>
                        <div class="accordion-body">
                            <p>Yes, all of our technicians are licensed and insured. We only hire skilled professionals with years of experience in their respective fields, ensuring that our clients receive top-notch service.</p>
                        </div>
                    </div>
                    <div class="accordion">
                        <div class="accordion-header">
                            <span>+</span>
                            <h3>What forms of payment do you accept?</h3>
                        </div>
                        <div class="accordion-body">
                            <p>We accept cash and all major credit cards, including Visa, Mastercard, and American Express.</p>
                        </div>
                    </div>
                    <div class="accordion">
                        <div class="accordion-header">
                            <span>+</span>
                            <h3>How long does a typical service call take?</h3>
                        </div>
                        <div class="accordion-body">
                            <p>The length of a service call depends on the type of service you require and the complexity of the job. However, we always strive to complete our work in a timely and efficient manner.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            $('.accordion-header').click(function() {
                // Toggle the clicked accordion
                const $currentBody = $(this).next('.accordion-body');
                const isCurrentlyVisible = $currentBody.is(':visible');

                // Close all accordions
                $('.accordion-body').slideUp(300);
                $('.accordion-header span').text('+');
                
                // If the current accordion was not visible, open it
                if (!isCurrentlyVisible) {
                    $currentBody.slideDown(300);
                    $(this).children('span').text('-');
                }
            });
        });
    </script>
</body>
</html>