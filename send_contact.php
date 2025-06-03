<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $recaptcha_secret = '6LcOW0grAAAAAHF_Wf5rn4vFkQXCFN08yI7NgeMN';
$recaptcha_response = $_POST['g-recaptcha-response'] ?? '';

// Verify reCAPTCHA with Google
$verify = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret={$recaptcha_secret}&response={$recaptcha_response}");
$responseData = json_decode($verify);

if (!$responseData->success) {
    echo "reCAPTCHA verification failed. Please try again.";
    exit;
}


    $name = $_POST['name'] ?? '';
    $email = $_POST['email'] ?? '';
    $subject = $_POST['subject'] ?? '';
    $message = $_POST['message'] ?? '';

    $mail = new PHPMailer(true);

    try {
        $mail->isSMTP();
        $mail->Host = 'smtp.hostinger.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'sales@avenuelock.ca';
        $mail->Password = 'Avenuelock123@';
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
        $mail->Port = 465;

        $mail->setFrom('sales@avenuelock.ca', 'Website Contact Form');
        $mail->addReplyTo($email, $name);
        $mail->addAddress('sales@avenuelock.ca');

        $mail->isHTML(true);
        $mail->Subject = "Website Contact Form: $subject";
        $mail->Body = "
            <h3>New Contact Form Submission</h3>
            <p><strong>Name:</strong> $name</p>
            <p><strong>Email:</strong> $email</p>
            <p><strong>Subject:</strong> $subject</p>
            <p><strong>Message:</strong><br>$message</p>
        ";

        $mail->send();
        echo "Success";
    } catch (Exception $e) {
        echo "Mailer Error: {$mail->ErrorInfo}";
    }
}
