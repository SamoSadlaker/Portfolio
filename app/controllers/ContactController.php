<?php
    use PHPMailer\PHPMailer\PHPMailer;

    require_once $_SERVER['DOCUMENT_ROOT'] . "/app/controllers/phpmailer/PHPMailer.php";
    require_once $_SERVER['DOCUMENT_ROOT'] . "/app/controllers/phpmailer/Exception.php";
    require_once $_SERVER['DOCUMENT_ROOT'] . "/app/controllers/phpmailer/SMTP.php";

class ContactController
{
    public function sendMail($name, $subject, $email, $message)
    {
        require_once $_SERVER['DOCUMENT_ROOT'] . "/app/settings.php";
        $mail = new PHPMailer(true);
        try {
            $mail->isSMTP();
            $mail->Host = $sftp->host;
            $mail->SMTPAuth = true;
            $mail->Username = $sftp->username;
            $mail->Password = $sftp->password;
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
            $mail->Port = $sftp->port;

            $mail->setFrom($sftp->username);
            $mail->addAddress($sftp->address);

            $mail->isHTML(true);
            $mail->CharSet = "UTF-8";
            $mail->Subject = "New message from website";
            $mail->Body = "<body><h5>New message from {$name}</h5><span><b>From:</b> {$email}</span><br><span><b>Name:</b> {$name}</span><br><span><b>Subject:</b> {$subject}</span><br><br><p><b>Message</b></p><br><article>{$message}</article>
            </body>
            ";

            $mail->send();
        } catch (Exception $e) {
            die(json_encode([
            "status" => "error",
            "message" => $e->getMessage()
        ]));
        }
    }
}
