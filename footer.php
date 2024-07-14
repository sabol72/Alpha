<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Document</title>
   <style>
      body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
}
.footer {
    background-color: var(--main-color);
    color: white;
    padding: 40px 20px;
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between;
    margin-top: 20px;
    box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1); /* Adjust shadow values as needed */
}

.footer .column {
    flex: 1;
    min-width: 220px;
    margin: 0 10px;
}
.footer .column.logo {
    flex: 1 1 220px;
    margin: 0 10px 20px 10px;
}
.footer h3 {
    border-bottom: 2px solid yellow;
    display: inline-block;
    margin-bottom: 10px;
    color: white;
}
.footer a {
    color: white;
    text-decoration: none;
    display: block;
    margin: 5px 0;
}
.footer a:hover {
    text-decoration: underline;
}
.footer .logo img {
    width: 100%;
    max-width: 200px;
    height: auto;
    margin-bottom: 10px;
}
.footer .contact-info div {
    margin: 5px 0;
}
.footer .social-icons {
    display: flex;
    margin-top: 10px;
}
.footer .social-icons a {
    background-color: #7BAC41;
    color: white;
    border-radius: 50%;
    text-align: center;
    width: 30px;
    height: 30px;
    line-height: 30px;
    margin-right: 10px;
    text-decoration: none;
    font-size: 16px;
    display: flex;
    justify-content: center;
    align-items: center;
}
.footer .social-icons a:hover {
    background-color: #4CAF50;
}
.footer .column h3 {
    margin-bottom: 15px;
}
.footer .column a {
    margin-bottom: 5px;
}


.footer .social-icons {
    display: flex;
    margin-top: 5px;
}
.footer .social-icons .social-icon {
    background-color: #7BAC41;
    color: white;
    border-radius: 50%;
    width: 30px;
    height: 30px;
    text-align: center;
    line-height: 30px;
    margin-right: 5px; /* Adjusted margin */
    text-decoration: none;
    font-size: 16px;
    display: inline-block;
}

.footer .social-icons .social-icon:hover {
    background-color: #4CAF50;
}





   </style>
</head>
<body>

    <div class="footer">
        <div class="column logo">
            <img src="assets/img/logo.png" alt="Company Logo">
            <div class="contact-info">
                <div>📞 +971 (04) 357 2148</div>
                <div>📞 +971 50 307 8180</div>
                <div>📧 info@bbcmaintenance.com</div>
                <div>📍 Amwaj Building, Burdubai, Office No. G19, P.O Box: 46777</div>
            </div>
            <div class="social-icons">
                <div class="social-icons">
                    <a href="#" class="social-icon"><i class="fab fa-facebook"></i></a>
                    <a href="#" class="social-icon"><i class="fab fa-twitter"></i></a>
                    <a href="#" class="social-icon"><i class="fab fa-instagram-square"></i></a>
                    <a href="#" class="social-icon"><i class="fab fa-google-plus-g"></i></a>
                </div>
                
                
            </div>
        </div>
        <div class="column">
            <h3>Quick Links</h3>
            <a href="#">Home</a>
            <a href="#">About Us</a>
            <a href="#">Contact Us</a>
            <a href="#">Book Now</a>
        </div>
        <div class="column">
            <h3>Cleaning Services</h3>
            <a href="#">Deep Cleaning Service</a>
            <a href="#">HVAC Air Duct Cleaning Service</a>
            <a href="#">Water Tank Cleaning & Disinfection</a>
            <a href="#">Facade / Window Glass Cleaning</a>
            <a href="#">Upholstery Sofa Steam Cleaning</a>
            <a href="#">Villa and House Cleaning – Post Construction</a>
            <a href="#">Mattress Cleaning</a>
            <a href="#">Carpet Cleaning</a>
            <a href="#">Pool Cleaning</a>
            <a href="#">Cleaning & Sanitization</a>
        </div>
        <div class="column">
            <h3>Maintenance Services</h3>
            <a href="#">Painting Service</a>
            <a href="#">Carpentry Services</a>
            <a href="#">Electrician Services</a>
            <a href="#">Tiling Service</a>
            <a href="#">AC Service</a>
            <a href="#">Plumbing Service</a>
            <a href="#">Bathroom Renovation</a>
        </div>
    </div>

</body>
</html>

</body>
</html>