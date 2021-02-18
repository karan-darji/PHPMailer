<?php
/*
Author: Karan Darji
*/
require_once('src/PHPMailer.php');
require_once('src/SMTP.php');
require_once('src/Exception.php');

function sendmail($to, $subject, $message, $name)
{
    $mail = new PHPMailer\PHPMailer\PHPMailer();
    $body = $message;
    $mail->IsSMTP();
    $mail->Host = "smtp.gmail.com";
    $mail->SMTPAuth = true;
    $mail->Host = "smtp.gmail.com";
    $mail->Port = 587;
    $mail->Username = "smtp user name";
    $mail->Password = "smtp password";
    $mail->SMTPSecure = 'tls';
    $mail->SetFrom('From Email', 'From Name');
    $mail->AddReplyTo("Reply Email", "Reply Name");
    $mail->Subject = $subject;
    $mail->MsgHTML($body);
    $address = $to;
    $mail->AddAddress($address, $name);
    var_dump($mail->Send()); exit;
    if (!$mail->Send()) {
        return $mail->ErrorInfo;
    } else {
        return true;
    }
}

?>