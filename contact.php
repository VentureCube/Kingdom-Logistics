<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $companyName = htmlspecialchars($_POST['company_name']);
    $yourName = htmlspecialchars($_POST['your_name']);
    $yourEmail = htmlspecialchars($_POST['your_email']);
    $phoneNumber = htmlspecialchars($_POST['phone_number']);
    $cargoInfo = htmlspecialchars($_POST['cargo_info']);

    // Prepare email details
    $to = "harishthirumal@gmail.com";
    $subject = "New Contact Form Submission - Kingdom Logistics";
    $message = "
        <html>
        <head>
        <title>New Contact Form Submission</title>
        </head>
        <body>
        <h2>Contact Form Details</h2>
        <p><strong>Company Name:</strong> $companyName</p>
        <p><strong>Your Name:</strong> $yourName</p>
        <p><strong>Your Email:</strong> $yourEmail</p>
        <p><strong>Phone Number:</strong> $phoneNumber</p>
        <p><strong>Cargo Information:</strong> $cargoInfo</p>
        </body>
        </html>
    ";

    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
    $headers .= "From: <$yourEmail>" . "\r\n";

    // Send email
    if (mail($to, $subject, $message, $headers)) {
        echo "Thank you! Your message has been sent.";
    } else {
        echo "Sorry! Something went wrong. Please try again.";
    }
}
?>
