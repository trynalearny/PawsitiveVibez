<?php
include __DIR__ . '/../utils/common.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Appointment Confirmation</title>
    <link rel="stylesheet" href="<?= getLocalURL('public/css/appointment.css') ?>"> 
    <style>
       
        .button {
            display: inline-block;
            padding: 5px 10px;
            margin: 10px 0;
            background-color: #007BFF; 
            color: white;
            text-decoration: none;
            border-radius: 3px; 
            font-size: 14px; 
            transition: background-color 0.3s;
        }

        .button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="background">
        <div class="booking-form">
            <h2>Appointment Confirmed</h2>
            <p>Your appointment has been successfully booked, and the payment has been processed!</p>
            <p>We look forward to seeing you and your pet.</p>
        
            <!-- Link to book another appointment -->
            <a href="<?= getLocalURL('appointment/') ?>" class="button">Book Another Appointment</a>
        
            <!-- Link to go back to home page -->
            <a href="<?= getLocalURL('') ?>" class="button">Back to Home</a>
        </div>
    </div>

    <footer>
        <div class="footer__container">
            <p>Contact us: pawsitivevibez@gmail.com | +91 8722362923</p>
            <div class="social__icons">
                <a href="/" aria-label="Facebook"><i class="fab fa-facebook"></i></a>
                <a href="/" aria-label="Instagram"><i class="fab fa-instagram"></i></a>
                <a href="/" aria-label="Twitter"><i class="fab fa-twitter"></i></a>
                <a href="/" aria-label="YouTube"><i class="fab fa-youtube"></i></a>
            </div>
        </div>
    </footer>
</body>
</html>
