<?php
if (isset($_POST['submit'])) {
    // Getting user data
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);

    // Recipient email, replace with your email address
    $mailTo = 'joyelmiranda@gmail.com';

    // Email subject and message
    $subject = htmlspecialchars($_POST['subject']);
    $message = htmlspecialchars($_POST['message']);

    // Email message body
    $htmlContent = '<h2>Email Request Received</h2>
    <p><b>Client Name:</b> ' . $name . '</p>
    <p><b>Email:</b> ' . $email . '</p>
    <p><b>Subject:</b> ' . $subject . '</p>
    <p><b>Message:</b> ' . $message . '</p>';

    // Headers for sender info
    $headers = "From: " . $name . " <" . $email . ">\r\n";
    $headers .= "Reply-To: " . $email . "\r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/html; charset=UTF-8\r\n";

    // PHP mailer function
    $result = mail($mailTo, $subject, $htmlContent, $headers);

    // Error checking
    if ($result) {
        $success = "The message was sent successfully!";
        echo "message has sent";
    } else {
        $failed = "Error: Message was not sent. Please try again later.";
    }
}
?>
 