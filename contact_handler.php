<?php
require_once 'config/db.php';
require 'config/mail.php';
header('Content-Type: application/json');

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    echo json_encode(['errors' => ['Invalid request']]);
    exit;
}

$errors    = [];
$firstName = trim($_POST['first_name'] ?? '');
$lastName  = trim($_POST['last_name'] ?? '');
$email     = trim($_POST['email'] ?? '');
$subject   = trim($_POST['subject'] ?? '');
$message   = trim($_POST['message'] ?? '');

if (empty($firstName)) $errors[] = 'First name is required';
if (empty($lastName))  $errors[] = 'Last name is required';
if (empty($email))     $errors[] = 'Email is required';
elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) $errors[] = 'Please enter a valid email';


if (!empty($errors)) {
    echo json_encode(['errors' => $errors]);
    exit;
}

 // 1. Save to database
 try
 {
    $stmt = $pdo->prepare(
        "INSERT INTO contacts (first_name, last_name, email, subject, message)
        VALUES (:first_name, :last_name, :email, :subject, :message)"
    );
    $stmt->execute([
        ':first_name' => $firstName,
        ':last_name'  => $lastName,
        ':email'      => $email,
        ':subject'    => $subject,
        ':message'    => $message,
    ]);
 }
 catch (Exception $e) {
    error_log("DB Error: " . $e->getMessage());
    echo json_encode(['errors' => ['Failed to save your message. Please try again.']]);
    exit;
}

// 2. Send email
        $emailSent = sendContactEmail($firstName . ' ' . $lastName, $email, $subject, $message);

        // Show success regardless of email result
        // (data is saved to DB even if email fails)
        $success = true;

        if (!$emailSent) {
            // Optionally log or show a soft warning
            error_log("Email failed for submission from: $email");
        }

echo json_encode(['success' => true]);
