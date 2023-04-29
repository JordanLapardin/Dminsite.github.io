<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $to = $_POST["to"];
    $subject = $_POST["subject"];
    $message = $_POST["message"];

    // Set additional headers if needed
    $headers = "From: sender@example.com" . "\r\n" .
        "Reply-To: sender@example.com" . "\r\n" .
        "Content-Type: text/html; charset=UTF-8" . "\r\n";

    // Send the email
    if (mail($to, $subject, $message, $headers)) {
        echo "Email sent successfully!";
    } else {
        echo "Failed to send email.";
    }
}
?>
