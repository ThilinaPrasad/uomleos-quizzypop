<?php
require 'PHPMailer/PHPMailerAutoload.php';

function sendMail($email,$subject, $bodyContent)
{
    $mail = new PHPMailer;
    $mail->isSMTP();                                   // Set mailer to use SMTP
    $mail->Host = 'mail.uomleos.org';                    // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                            // Enable SMTP authentication
    $mail->Username = '<Email Goes Here>';          // SMTP username
    $mail->Password = '<Password Goes Here>';            // SMTP password
    $mail->SMTPSecure = 'ssl';                         // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 465;                                 // TCP port to connect to

    $mail->setFrom('<Email>', '<Sender Name>');
    $mail->addReplyTo('<Reply Email>', '<Reply Emai Name>');
    $mail->addAddress($email);   // Add a recipient
    //$mail->addCC('cc@example.com');
    //$mail->addBCC('bcc@example.com');

    $mail->isHTML(true);  // Set email format to HTML

    $mail->Subject = $subject;
    $mail->Body = $bodyContent;
    $checker= $mail->send();
    if (!$checker) {
        return true;
    } else {
        return false;
    }
}

?>


		
