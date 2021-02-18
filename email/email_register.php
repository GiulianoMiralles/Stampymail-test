<?php
// Import PHPMailer classes into global namespace
// They should be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

// Load the Composer autoloader
require 'vendor/autoload.php';

// Instantiating and passing `true` allows exceptions
$mail = new PHPMailer(true);

try {
    // Server configuration
    $mail->SMTPDebug = SMTP::DEBUG_SERVER; // Enable verbose debug output
    $mail->isSMTP(); // Send using SMTP
    $mail->Host = 'smtp.gmail.com'; // Configure the SMTP server to send via
    $mail->SMTPAuth = true; // Enable SMTP authentication
    $mail->Username = 'efi.php.2019.gmiralles@gmail.com'; // SMTP username
    $mail->Password = 'efiphp2019'; // SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS; // Enable TLS encryption; `PHPMailer :: ENCRYPTION_SMTPS` also accepted
    $mail->Port = 587; // TCP port to connect

    // Recipients
    $mail->setFrom('efi.php.2019.gmiralles@gmail.com');
    $mail->addAddress($email, $email); // Add a recipient


    // Contents
    $mail->isHTML(true); // Set email format to HTML
    $mail->Subject = 'Welcome to the Stampymail technical test - author Giuliano Miralles';
    $mail->Body = "Thank you for your registration, below are your access data for your new account.
                *User (E-mail): {$email}   
                *Password: {$password_for_email}";

    $mail->AltBody = ' ';
    $mail->SMTPDebug = 0; // Disable debugging mode
    $mail->send(); // Success / error message
    echo '';
} catch (Exception $e) {
    echo "The message could not be sent. Send Error: {$mail->ErrorInfo}";
}
