<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];
   
    $to = "rkazisr@gmail.com"; // Replace with your email address
    $subject = "Contact Form Submission from $name";
    $message = "Name: $name\nEmail: $email\nSubject: Messages from portfolio\nMessage: $message";
   
    // Additional headers for formatting (optional)
    $headers = "From: $email" . "\r\n" . "Reply-To: $email" . "\r\n";
   
    // Send the email
    mail($to, $subject, $message, $headers);
   
    // Redirect to a thank you page
    header("Location: thank_you.html"); // Create this page
    exit;
}
?>
