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
    $phone = $_POST['phone'] ?? '';
    $service = $_POST['service'] ?? '';
    $address = $_POST['address'] ?? '';
    $preferred = $_POST['preferred'] ?? '';
    $message = $_POST['message'] ?? '';

    $mail = new PHPMailer(true);

    try {
        $mail->isSMTP();
        $mail->Host = 'smtp.hostinger.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'sales@avenuelock.ca'; // Your Hostinger email
        $mail->Password = 'Avenuelock123@'; // Your email's password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS; // Use SMTPS for SSL
        $mail->Port = 465;

        $mail->setFrom('sales@avenuelock.ca', 'Website Contact Form');
        $mail->addReplyTo($email, $name); // so you can reply directly to the user's address
        $mail->addAddress('sales@avenuelock.ca');

        // Content
        $mail->isHTML(true);
        $mail->Subject = 'New Quote Request from Website';

        $mail->Body = "
            <h2>New Quote Request</h2>
            <p><strong>Name:</strong> $name</p>
            <p><strong>Email:</strong> $email</p>
            <p><strong>Phone:</strong> $phone</p>
            <p><strong>Service:</strong> $service</p>
            <p><strong>Address:</strong> $address</p>
            <p><strong>Preferred Date/Time:</strong> $preferred</p>
            <p><strong>Message:</strong><br>$message</p>
        ";

        $mail->send();
        echo "Success";


    } catch (Exception $e) {
        echo "Error: {$mail->ErrorInfo}";
    }
}
