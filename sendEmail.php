<?php
session_start();

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Load PHPMailer via Composer
require 'vendor/autoload.php';

if(isset($_POST['submitContact'])){

    // === SANITIZE & VALIDATE FORM INPUT ===
    function sanitize($data) {
        return htmlspecialchars(trim($data), ENT_QUOTES, 'UTF-8');
    }

    $name    = sanitize($_POST['name'] ?? '');
    $email   = filter_var($_POST['email'] ?? '', FILTER_SANITIZE_EMAIL);
    $phone = sanitize($_POST['phone'] ?? '');
    $message = sanitize($_POST['message'] ?? '');

    // Validate required fields
    if (!$name || !$email || !$phone) {
        die("Please fill out all required fields.");
    }

    // Validate email
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        die("Invalid email address.");
    }

    // === PHPMailer CONFIGURATION ===
    $mail = new PHPMailer(true);

    try {
        // SMTP Setup
        $mail->isSMTP();
        $mail->Host       = 'smtp.gmail.com';
        $mail->SMTPAuth   = true;
        $mail->Username   = 'mark.estareja.me@gmail.com';        // Change to your Gmail
        $mail->Password   = 'iihcfazntikgoduh';           // Use Gmail App Password or env var
        $mail->SMTPSecure = 'tls';
        $mail->Port       = 587;

        // Sender and recipient
        $mail->setFrom('mark.estareja.me@gmail.com', 'Portfolio Website Inquiry');
        $mail->addAddress('mark.estareja.me@gmail.com');        // Change to your receiving email
        $mail->addReplyTo($email, $name);                  // Reply to sender

        // Email content
        $mail->isHTML(true);
        $mail->Subject = "New Inquiry in your website";
        $mail->Body    = "
            <h2>New Portfolio Website Inquiry</h2>
            <p><strong>Name:</strong> {$name}</p>
            <p><strong>Email:</strong> {$email}</p>
            <p><strong>Contact Number:</strong> {$phone}</p>
            <p><strong>Message:</strong><br>{$message}</p>
        ";
        $mail->AltBody = 
            "New Inquiry\n" .
            "Name: $name\n" .
            "Email: $email\n" .
            "Contact: $phone\n" .
            "Message:\n$message";

        // Send the email

        if($mail->send())
        {
            $_SESSION['status'] = "Thank you! Will get back to you as soon as possible";
            header("Location: {$_SERVER["HTTP_REFERER"]}");
            exit(0);    
        }
        else
        {
            $_SESSION['status'] = "PHPMailer error: " . $mail->ErrorInfo;
            header("Location: contact.php");
            exit(0);
        }
        
    } catch (Exception $e) {
        error_log("PHPMailer error: " . $mail->ErrorInfo);
        echo "Something went wrong. Please try again later.";
    }
}
else{
    header("Location: contact.php");
    exit(0);
}

?>
