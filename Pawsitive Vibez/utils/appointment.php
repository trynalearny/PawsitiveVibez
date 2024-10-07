<?php
include __DIR__ . '/connect.php';
include __DIR__ . '/common.php';

// Handle the form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = filter_var($_POST['name'], FILTER_SANITIZE_STRING);
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    $pet_type = filter_var($_POST['pet_type'], FILTER_SANITIZE_STRING);
    $service = filter_var($_POST['options'], FILTER_SANITIZE_STRING);
    $date = $_POST['date']; // Ensure this matches your table column
    $time = $_POST['time']; // Ensure this matches your table column
    $payment_method = $_POST['payment_method'];

  

    // Prepare and bind the SQL statement
    $stmt = $conn->prepare("INSERT INTO appointments (name, email, pet_type, service, appointment_date, appointment_time, payment_method) VALUES (?, ?, ?, ?, ?, ?, ?)");
    if (!$stmt) {
        die("Prepare failed: " . $conn->error);
    }

    $stmt->bind_param("sssssss", $name, $email, $pet_type, $service, $date, $time, $payment_method);

    // Execute the statement
    if ($stmt->execute()) {
        // Redirect to confirmation page
        header("Location: ". getLocalURL("confirmation/"));
        exit();
    } else {
        echo "Error: " . $stmt->error;
    }

    // Close the statement and connection
    $stmt->close();
    $conn->close();
}
?>
