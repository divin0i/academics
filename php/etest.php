<?php
require 'email_handler.php';

// Replace with your email address for testing
$test_email = 'divinwest6@gmail.com';
$subject = 'Test Email';
$body = 'This is a test email from your To-Do app.';

sendReminderEmail($test_email, $subject, $body);
?>
