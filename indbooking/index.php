<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Booking System</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">
    <link href="Style.css" rel="stylesheet">
    <link href="../assets/css/main.css" rel="stylesheet">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: "Poppins", sans-serif;
        }

        body {
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .floating-alert {
            position: fixed;
            bottom: 20px;
            right: 20px;
            z-index: 1050;
        }
    </style>
</head>
<body>

<!-- Modal for floating alert -->
<div class="modal fade floating-alert" id="floatingAlertModal" tabindex="-1" role="dialog" aria-labelledby="floatingAlertModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body text-center">
                <p class="mb-0">Learn more About the Services before Booking.</p>
            </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-primary" id="visitButton">Learn</button>
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<main>
    <div class="container mt-5 title-section" data-aos="fade-up">
        <h2>Choose your service</h2>
        <div class="buttons">
            <a class="gbutton" href="ac-service.php">Air Conditioner</a>
            <a class="gbutton" href="clean-service.php">Cleaning</a>
        </div>
    </div>
</main>

<!-- Scripts at the end of the body -->
<script src="Script.js"></script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

<script>
    // JavaScript to show the floating alert box
    $(document).ready(function() {
        $('#floatingAlertModal').modal('show');

        // Redirect when the button is clicked
        $('#visitButton').click(function() {
            window.location.href = '../Index.php#service';
        });
    });
</script>

</body>
</html>
