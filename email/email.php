<?php
// Import PHPMailer classes into global namespace
// They should be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;


require 'vendor/autoload.php'; // Load the Composer autoloader
include('../includes/newpassword_includes.php'); // I receive the new password generated in the new password file in the includes folder

// Instantiating and passing `true` allows exceptions
$mail = new PHPMailer(true);

try {
    // Server configuration
    $mail->SMTPDebug = SMTP::DEBUG_SERVER; // Enable verbose debug output
    $mail->isSMTP(); /// Send using SMTP
    $mail->Host = 'smtp.gmail.com'; // Configure the SMTP server to send via
    $mail->SMTPAuth = true; // Enable SMTP authentication
    $mail->Username = 'efi.php.2019.gmiralles@gmail.com'; // SMTP username
    $mail->Password = 'efiphp2019'; // SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS; // Enable TLS encryption; `PHPMailer :: ENCRYPTION_SMTPS` also accepted
    $mail->Port = 587; // TCP port to connect

    //Recipients
    $mail->setFrom('efi.php.2019.gmiralles@gmail.com');
    $mail->addAddress($email, $email); // Add a recipient


    // Contenido
    $mail->isHTML(true); // Set email format to HTML
    $mail->Subject = 'Technical Test for Stampymail - Password Recovery Request';
    $mail->Body = "You have requested a new password for your account, which is ---> {$new_password}";
    $mail->AltBody = '';

    $mail->SMTPDebug = 0; // Disable debugging mode
    $mail->send(); // Success / error message
    echo '';
} catch (Exception $e) {
    echo "The message could not be sent. Send Error: {$mail->ErrorInfo}";
}
