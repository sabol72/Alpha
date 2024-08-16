    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
    $(document).ready(function() {
        $.ajax({
    type: 'POST',
    url: '../indbooking/redirect.php',
    data: {
        ajax: true,
        service: 'Air Conditioner',
        serviceType: 'ac instfkdhf;hhallation'
    },
    success: function(response) {
        var data = JSON.parse(response);
        console.log('Service:', data.selectedService);
        console.log('Service Type:', data.selectedServiceType);
    },
    error: function() {
        console.log('Failed to send data');
    }
});

        });

    </script>
<!--donot forget to change the name of each service and servicetype -->
<!-- also make sure all the book-now buttons redirect to ../book-service/booking.php -->