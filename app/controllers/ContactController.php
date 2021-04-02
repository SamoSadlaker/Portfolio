<?php
    use PHPMailer\PHPMailer\PHPMailer;

    require_once realpath(dirname(__DIR__) . "/..") . "/app/controllers/phpmailer/PHPMailer.php";
    require_once realpath(dirname(__DIR__) . "/..") . "/app/controllers/phpmailer/Exception.php";
    require_once realpath(dirname(__DIR__) . "/..") . "/app/controllers/phpmailer/SMTP.php";

class ContactController
{
    public function sendMail($name, $subject, $email, $message)
    {
        require_once $_SERVER['DOCUMENT_ROOT'] . "/app/settings.php";
        $mail = new PHPMailer(true);
        $year = Date("Y");
        try {
            $mail->isSMTP();
            $mail->Host = $sftp->host;
            $mail->SMTPAuth = true;
            $mail->Username = $sftp->username;
            $mail->Password = $sftp->password;
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
            $mail->Port = $sftp->port;

            $mail->setFrom($sftp->username, "System");
            $mail->addAddress($sftp->address);
            $mail->addReplyTo($email, $name);

            $mail->isHTML(true);
            $mail->CharSet = "UTF-8";
            $mail->Subject = "New message from website";
            $mail->Body = "<!DOCTYPE html PUBLIC '-//W3C//DTD XHTML 1.0 Transitional//EN' 'http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd'><html xmlns='http://www.w3.org/1999/xhtml'><head> <meta http-equiv='Content-Type' content='text/html; charset=utf-8'/> <meta http-equiv='X-UA-Compatible' content='IE=edge'/> <meta name='viewport' content='width=device-width, initial-scale=1.0'> <meta http–equiv=“Content-Type” content=“text/html; charset=utf-8”> <meta http–equiv=“X-UA-Compatible” content=“IE=edge”> <meta name=“viewport” content=“width=device-width, initial-scale=1.0 “> <meta name=“format-detection” content=“telephone=no”> <link rel='preconnect' href='https://fonts.gstatic.com'> <link href='https://fonts.googleapis.com/css2?family=Source+Sans+Pro&family=Ubuntu:wght@500&display=swap' rel='stylesheet'> <style>body{padding: 0; margin: 0; background-color: #f6f9fc;}table{border-spacing: 0;}td{padding: 0;}.wrapper{width: 100%; table-layout: fixed; background-color: #f6f9fc; padding-bottom: 40px;}.webkit{max-width: 600px; background-color: #ffffff;}.table{margin: 0 auto; width: 100%; max-width: 600px; border-spacing: 0; font-family: 'Source Sans Pro', sans-serif; color: #4a4a4a;}p, a{font-family: 'Source Sans Pro', sans-serif; font-weight: 400;}.ubuntu{font-family: 'Ubuntu', sans-serif;}</style></head><body> <center class='wrapper'> <div class='webkit'> <table class='table' align='center'> <tr> <td> <table width='100%' style='border-spacing:0;border-bottom:2px solid #747474;'> <tr> <td style='background-color:#E5E5E5;padding:15px;text-align:center;vertical-align:middle;'> <a href='https://samosadlaker.eu'><img height='40px' src='https://samosadlaker.eu/assets/img/logo.png' alt='Logo' title='Logo'></a> <p class='ubuntu' style='font-size:20px;text-decoration:none;font-weight:500;color:#0A87EA; margin:0;'> Message from portfolio</p></td></tr></table> </td></tr><tr> <td> <table width='100%' style='border-spacing:0;'> <tr> <td style='padding: 10px 30px'> <p><b>From:</b> {$email}</p><p><b>Subject:</b> {$subject}</p><p><b>Name:</b> {$name}</p></td></tr></table> </td></tr><tr> <td> <table width='100%' style='border-spacing:0;'> <tr> <td style='padding: 10px 30px'> <p><b>Message:</b> {$message}</p></td></tr></table> </td></tr><tr> <td> <table width='100%' style='border-spacing:0;'> <tr> <td style='text-align: center;padding: 15px 30px;'> Copyright © {$year} samosadlaker.eu </td></tr></table> </td></tr></table> </div></center></body></html>";


            $mail->send();
        } catch (Exception $e) {
            die(json_encode([
            "status" => "error",
            "message" => $e->getMessage()
        ]));
        }
    }
}
