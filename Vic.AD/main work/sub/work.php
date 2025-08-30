<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Get form values and sanitize them to avoid security issues
    $name = htmlspecialchars($_POST["name"]);
    $email = htmlspecialchars($_POST["email"]);
    $message = htmlspecialchars($_POST["message"]);

    // Set your email address (where the form will send the submissions)
    $to = "oluvictor32@gmail.com"; // Your email address
    $subject = "New Contact Form Submission from $name";
    
    // Construct the email body
    $body = "You have received a new message from the contact form on your website:\n\n";
    $body .= "Name: $name\n";
    $body .= "Email: $email\n";
    $body .= "Message:\n$message\n";

    // Set the email headers
    $headers = "From: no-reply@yourdomain.com"; // You can change this to your own domain or leave it as is

    // Send the email
    if (mail($to, $subject, $body, $headers)) {
        echo "Thank you for contacting us! We will get back to you soon."; // Success message
    } else {
        echo "Something went wrong, please try again."; // Failure message
    }
}
?>
