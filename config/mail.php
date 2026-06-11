<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require_once __DIR__ . '/../vendor/autoload.php';

function sendContactEmail(string $name, string $email, string $subject, string $message): bool
{
    $config = parse_ini_file(__DIR__ . '/../.env');

    $mail = new PHPMailer(true); // true = enable exceptions

    try {
        // ── Server Settings ──────────────────────────────
        $mail->isSMTP();
        $mail->Host       = $config['MAIL_HOST'];   
        $mail->SMTPAuth   = true;
        $mail->Username   = $config['MAIL_USER'];   
        $mail->Password   = $config['MAIL_PASS'];   
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS; 
        $mail->Port       = (int) $config['MAIL_PORT']; 

        // ── Who It's From / To ───────────────────────────
        $mail->setFrom('noreply@shyji-john.netmatters-scs.co.uk', 'Portfolio Contact Form');
        $mail->addAddress($config['MAIL_TO']);       
        $mail->addReplyTo($email, $name);          

        // ── Email Content ─────────────────────────────────
        $mail->isHTML(true);
        $mail->Subject = $subject ?: "New Contact Form Submission from {$name}";
        $mail->Body    = "
            <h2>New Contact Form Submission</h2>
            <p><strong>Name:</strong> {$name}</p>
            <p><strong>Email:</strong> {$email}</p>
            <p><strong>Subject:</strong> {$subject}</p>
            <p><strong>Message:</strong></p>
            <p>{$message}</p>
        ";
        // Plain text fallback for email clients that don't support HTML
        $mail->AltBody = "Name: {$name}\nEmail: {$email}\nSubject: {$subject}\n\nMessage:\n{$message}";

        $mail->send();
        return true;

    } catch (Exception $e) {
        // Log the error rather than exposing it to the user
        error_log("Mailer Error: " . $mail->ErrorInfo);
        return false;
    }
}
