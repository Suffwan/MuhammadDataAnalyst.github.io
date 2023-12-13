<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $message = htmlspecialchars($_POST["message"]);

    // Replace this email address with your own
    $to = "suffwanbaig@yahoo.com";
    $subject = "New Message from Your Website";

    // Build the email message
    $email_message = "Message: $message";

    // Send the email
    mail($to, $subject, $email_message);

    // Redirect back to the form or a thank you page
    header("Location: thank_you.html");
    exit();
}
?>
