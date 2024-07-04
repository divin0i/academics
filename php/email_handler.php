<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

function sendReminderEmail($to, $subject, $body) {
    $mail = new PHPMailer(true);
    try {
        $mail->isSMTP();
        $mail->Host = 'example.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'example@gmail.com';
        $mail->Password = '-----';
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port = 587;
        $mail->setFrom('example@gmail.com', 'Task Reminder');
        $mail->addAddress($to);
        $mail->isHTML(true);
        $mail->Subject = $subject;
        $mail->Body = $body;
        $mail->send();
        echo 'Message has been sent';
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
}
?>
