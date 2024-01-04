<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php'; // Path to PHPMailer autoload.php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $walkerID = $_POST['walkerID'];
    $email = $_POST['email'];

    // Save data to a text file
    $file = 'form_data.txt';
    $current = file_get_contents($file);
    $current .= "Walker ID: $walkerID, Email: $email\n";
    file_put_contents($file, $current);

    // Send email using PHPMailer
    $mail = new PHPMailer(true);

    try {
        $mail->isSMTP();
        $mail->Host = 'live.smtp.mailtrap.io'; // Your SMTP server
        $mail->SMTPAuth = true;
        $mail->Username = 'api'; // Your email
        $mail->Password = 'cd339b16fedbb50179a7de13568b9600'; // Your email password
        $mail->SMTPSecure = 'tls';
        $mail->Port = 587;

        $mail->setFrom('no-reply@album.walkerworld.repl.co', 'No Reply');
        $mail->addAddress($email);
        $mail->Subject = 'Subject of the Email';
        $mail->Body = '474nxw41k3r5';

        $mail->send();

        // Redirect to a thank you page
        header('Location: thank_you.html');
        exit();
    } catch (Exception $e) {
        echo 'Email could not be sent. Mailer Error: ', $mail->ErrorInfo;
    }
}
?>
