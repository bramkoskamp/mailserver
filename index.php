<?php
$email = "bramkoskamp@gmail.com";
$subject = "Hello World";
$message = "Dit is het eerste mail bericht via PHP";

// Recipient email address
$to = 'net24pveltman.gc-webhosting.nl';

// Email headers
$headers = 'From: ' . $email . "\r\n" .
    'Reply-To: ' . $email . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

// Sending email
if (mail($to, $subject, $message, $headers)) {
    echo '<p class="success">Your message has been sent successfully!</p>';
} else {
    echo '<p class="error">Unable to send email. Please try again!</p>';
}
?>