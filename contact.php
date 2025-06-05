<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name    = htmlspecialchars($_POST['name']);
    $email   = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    $to      = "nabihaqadir424@gmail.com";  
    $subject = "New Message from Portfolio Website";
    $body    = "Name: $name\nEmail: $email\n\nMessage:\n$message";

    $headers = "From: $email";

    if (mail($to, $subject, $body, $headers)) {
        echo "<script>alert('Message sent successfully!'); window.history.back();</script>";
    } else {
        echo "<script>alert('Message sending failed. Please try again.'); window.history.back();</script>";
    }
}
?>
