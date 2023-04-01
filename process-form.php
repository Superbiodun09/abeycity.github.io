<?php
// Get form data
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

// Set recipient email address
$to = "superbiodun090@gmail.com";

// Set email subject
$subject = "New message from portfolio website";

// Compose email message
$body = "Name: $name\nEmail: $email\n\n$message";

// Set email headers
$headers = "From: $name <$email>" . "\r\n";

// Send email
mail($to, $subject, $body, $headers);

// Redirect to thank-you page
header('Location: thank-you.html');
?>