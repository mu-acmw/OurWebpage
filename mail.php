<?php
require 'PHPMailerAutoload.php';
$mail = new PHPMailer;
$mail->isSMTP();
$mail->Host='smtp.gmail.com';
$mail->SMTPAuth = true;
$mail->Username = 'acm-w@miamioh.edu';
$mail->Password = '*****!';
$mail->SMTPSecure = 'tls';
$mail->Port = '587';
$mail->From = 'acm-w@miamioh.edu';
$mail->addAddress('acm-w@miamioh.edu');
$mail->addReplyTo('acm-w@miamioh.edu');

$mail->Subject = 'Comment Submission Website';
$mail->Body = 'From: '.$_POST['name'].'Email: '.$_POST['email'].'Message:'.$_POST['message'];

if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: '.$mail->ErrorInfo;
} else {
    echo 'Message has been sent';
}

?>
