<?php
require_once "./controllers/DataController.php";
require_once "./controllers/ContactController.php";
$data = new DataController();
$contact = new ContactController();

if (!$data->isAjax()) {
    die(json_encode([
        "status" => "error",
        "message" => "Error, this request is not valid!"
    ]));
}

if (empty($_POST['name']) || empty($_POST['email']) || empty($_POST['subject']) || empty($_POST['message'])) {
    die(json_encode([
        "status" => "error",
        "message" => "Error, this request is empty!"
    ]));
}

if (strlen(trim($_POST['name']))<3) {
    die(json_encode([
        "status" => "validate",
        "message" => "Error, your name is too short!"
    ]));
}

if (strlen(trim($_POST['subject']))<3) {
    die(json_encode([
        "status" => "validate",
        "message" => "Error, subject is too short!"
    ]));
}

if (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
    die(json_encode([
        "status" => "validate",
        "message" => "Error, this email is wrong!"
    ]));
}

if (strlen(trim($_POST['message']))<10) {
    die(json_encode([
        "status" => "validate",
        "message" => "Error, your message is too short!"
    ]));
}

$name = filter_var(trim($_POST["name"]), FILTER_SANITIZE_STRING, FILTER_FLAG_NO_ENCODE_QUOTES);
$subject = filter_var(trim($_POST["subject"]), FILTER_SANITIZE_STRING, FILTER_FLAG_NO_ENCODE_QUOTES);
$email = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL, FILTER_FLAG_NO_ENCODE_QUOTES);
$message = filter_var($_POST["message"], FILTER_SANITIZE_STRING, FILTER_FLAG_NO_ENCODE_QUOTES);

$contact->sendMail($name, $subject, $email, $message);

die(json_encode([
    "status" => "success",
    "message" => "Success, you have successfully contacted me"
]));
