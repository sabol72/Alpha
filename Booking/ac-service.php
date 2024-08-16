<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Choosing Service Type</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <link href="Style.css" rel="stylesheet">
    <link href="../assets/css/main.css" rel="stylesheet">

</head>
<body>
<header></header>
<main>
<div class="container mt-5 title-section" data-aos="fade-up">
    <h2>Choose your service</h2>
    <div class="row">
        <div class="col-md-6">
            <form method="POST" action="redirect.php">
                <div class="mb-3">
                    <button type="submit" name="serviceType" value="Ac Install" class="gbutton btn btn-primary btn-block custom-btn-lg">Ac Install</button>
                </div>
                <div class="mb-3">
                    <button type="submit" name="serviceType" value="Ac Cleaning" class="gbutton btn btn-primary btn-block custom-btn-lg">Ac Cleaning</button>
                </div>
            </form>
        </div>
        <div class="col-md-6">
            <form method="POST" action="redirect.php">
                <div class="mb-3">
                    <button type="submit" name="serviceType" value="Ac Duct Cleaning" class="gbutton btn btn-primary btn-block custom-btn-lg">Ac Duct Cleaning</button>
                </div>
                <div class="mb-3">
                    <button type="submit" name="serviceType" value="Ac Repair" class="gbutton btn btn-primary btn-block custom-btn-lg">Ac Repair</button>
                </div>
            </form>
        </div>
    </div>
    <a href="#" class="btn btn-primary back-button" onclick="window.history.back(); return false;">&laquo; Back</a>

</div>


</main>
<script src="Script.js"></script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

</body>
</html>
