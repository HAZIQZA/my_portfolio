<?php
// Replace with your actual email
$receiving_email_address = 'abdulsalihaslah@gmail.com';

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $name = $_POST['name'] ?? '';
    $email = $_POST['email'] ?? '';
    $message = $_POST['message'] ?? '';

    $subject = "New message from your website";
    $content = "Name: $name\nEmail: $email\nMessage:\n$message";

    $headers = "From: $email";

    if (mail($receiving_email_address, $subject, $content, $headers)) {
        echo "OK";
    } else {
        echo "Error sending email.";
    }
} else {
    echo "Invalid request.";
}
?>
