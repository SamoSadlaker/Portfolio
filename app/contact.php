<?php

require_once "./controllers/ContactController.php";

$name = trim(plain($_POST['name']));
$email = trim(plain($_POST['email']));
$subject = trim(plain($_POST['subject']));
$message = trim(plain($_POST['message']));

if (empty($name) || empty($email) || empty($subject) || empty($message)) {
    die("error");
} else {
    $name = filter_var($name, FILTER_SANITIZE_STRING);
    $email = filter_var($email, FILTER_SANITIZE_EMAIL);
    $subject = filter_var($subject, FILTER_SANITIZE_STRING);
    $message = filter_var($message, FILTER_SANITIZE_STRING);

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        die("error");
    }


    
    // sendMail($name, $email, $subject, $message);
    
    die("success");
}
