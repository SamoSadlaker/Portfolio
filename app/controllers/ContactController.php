<?php

    function plain($str)
    {
        return htmlspecialchars($str, ENT_QUOTES);
    }

    function sendMail($name, $email, $subject, $message)
    {
        $to = "dev@samosadlaker.eu";
        $subject = "Spárava z webu: " . $subject;

        $message = "";
        $headers = array(
          'From' => 'no-reply@samosadlaker.eu',
          'Content-Type' => "text/html; charset=utf8",
          'X-Mailer' => 'PHP/' . phpversion()
        );
        mail($to, $subject, $message, $headers);
    }
