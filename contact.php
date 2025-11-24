<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    //user input
    $name    = htmlspecialchars(trim($_POST['name']));
    $email   = htmlspecialchars(trim($_POST['email']));
    $subject = htmlspecialchars(trim($_POST['subject']));
    $message = htmlspecialchars(trim($_POST['message']));

    // Email settings
    $to = "xx@gmail.com"; 
    $email_subject = "New Contact Form Message: " . $subject;

    // Message body
    $email_body = "
    Name: $name
    Email: $email
    Subject: $subject
    Message:
    $message
    ";

    // Headers
    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";

    // Send email
    if (mail($to, $email_subject, $email_body, $headers)) {
        echo "success";
    } else {
        echo "error";
    }
}
?>