<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

/** SEND EMAIL FUNCTION USING  PHPMAILER LIBRARY */

if (!function_exists('sendEmail')) {
    function sendEmail($mailConfig)
    {
        require 'PHPMailer/src/Exception.php';
        require 'PHPMailer/src/PHPMailer.php';
        require 'PHPMailer/src/SMTP.php';

        $email = new PHPMailer(true);
        $email->SMTPDebug = 0;
        $email->isSMTP();
        $email->Host = env('MAIL_HOST');
        $email->SMTPAuth = true;
        $email->Username = env('MAIL_USERNAME');
        $email->Password = env('MAIL_PASSWORD');
        $email->SMTPSecure = env('MAIL_ENCRYPTION');
        $email->Port = env('MAIL_PORT');
        $email->setFrom($mailConfig['mail_from_email'], $mailConfig['mail_from_name']);
        $email->addAddress($mailConfig['mail_recipient_email'], $mailConfig['mail_recipient_name']);
        $email->isHTML(true);
        $email->Subject = $mailConfig['mail_subject'];
        $email->Body = $mailConfig['mail_body'];

        try {
            $email->send();
            return true;
        } catch (Exception $e) {
            return false;
        }
    }
}
