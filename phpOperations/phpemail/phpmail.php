<?php
require 'PHPMailer/PHPMailerAutoload.php';

function sendMail($email,$subject, $bodyContent)
{
    $mail = new PHPMailer;
    $mail->isSMTP();                                   // Set mailer to use SMTP
    $mail->Host = 'mail.uomleos.org';                    // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                            // Enable SMTP authentication
    $mail->Username = 'quizzypop@uomleos.org';          // SMTP username
    $mail->Password = 'bestleos2017';            // SMTP password
    $mail->SMTPSecure = 'ssl';                         // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 465;                                 // TCP port to connect to

    $mail->setFrom('quizzypop@uomleos.org', 'QuizzyPop');
    $mail->addReplyTo('uomleoclub@gmail.com', 'UoM Leos');
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


		