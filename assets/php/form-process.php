<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone_number = $_POST['phone_number'];
    $subject = $_POST['msg_subject'];
    $message = $_POST['message'];

    // Example email logic (update as needed)
    $to = "sparshmedia349@gmail.com";
    $headers = "From: " . $email;
    $body = "Name: $name\nEmail: $email\nPhone: $phone_number\nSubject: $subject\nMessage: $message";

    if (mail($to, $subject, $body, $headers)) {
        echo "Message sent!";
    } else {
        echo "Failed to send message.";
    }
} else {
    echo "No POST data received.";
}
?>