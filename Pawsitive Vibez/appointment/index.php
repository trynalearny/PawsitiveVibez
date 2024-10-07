<?php

include __DIR__ . '/../utils/common.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Appointment</title>
    <link rel="stylesheet" href="<?= getLocalURL('public/css/appointment.css') ?>">
    <script src="https://js.stripe.com/v3/"></script>
</head>
<body>
<?php
include __DIR__ . '/../layouts/navbar.php'
?>

    <div class="background">
        <div class="booking-form">
            <h2>Schedule Appointment</h2>
            <form action="<?= getLocalURL('utils/appointment.php') ?>" method="post" id="appointmentForm">
                <label for="name">Name:</label>
                <input type="text" name="name" id="name" required><br>
        
                <label for="email">Email:</label>
                <input type="email" name="email" id="email" required><br>
                
                <p>Which type of pet do you have?</p>
                <input type="radio" id="radio1" name="pet_type" value="Dog" required>
                <label for="option1">Dogs</label>
                <input type="radio" id="radio2" name="pet_type" value="Cat" required>
                <label for="option2">Cats</label><br>

                <label for="options">Select services which you want:</label>
                <select id="options" name="options" required>
                    <option value="Nail Trimming">Nail Trimming</option>
                    <option value="Haircut">Haircut</option>
                    <option value="Teeth Cleaning">Teeth Cleaning</option>
                    <option value="Pet Walking">Pet Walking</option>
                </select><br>

                <label for="date">Select Date:</label>
                <input type="date" id="date" name="date" required><br>
                
                <label for="time">Select Time:</label>
                <input type="time" id="time" name="time" required><br>

                <div>
                    <label for="payment-method">Choose a payment method:</label><br>
                    <input type="radio" name="payment_method" value="pay-at-store" required> Pay at Store<br>
                    <input type="radio" name="payment_method" value="credit-card" required> Credit Card<br>
                </div>
                <div id="credit-card-details" >
                    <label for="card-number">Card Number:</label>
                    <input type="text" id="card-number" name="card_number"><br>
            
                    <label for="expiry-date">Expiry Date:</label>
                    <input type="text" id="expiry-date" name="expiry_date" placeholder="MM/YY"><br>
            
                    <label for="cvv">CVV:</label>
                    <input type="text" id="cvv" name="cvv"><br>
                </div>

                <button type="submit">Book Now</button>
            </form>
        </div>
    </div>

<?php include __DIR__ . '/../layouts/footer.php'; ?>
   
    <script src="<?= getLocalURL('public/js/appointment.js') ?>"></script>
    <script>
        const baseUrl = "<?= getLocalURL() ?>";
        document.getElementById('appointmentForm').onsubmit = function() {
            alert('Form submitted!');
        };
    </script>
</body>
</html>
