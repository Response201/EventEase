<?php
function mailer($selector, $token, $sub, $urlIn, $body)
{
    require './vendor/autoload.php';
    $smtphost = $_ENV['smtphost'] ?? '';
    $smtpport = $_ENV['smtpport'];
    $smtpusername = $_ENV['smtpusername'];
    $smtppassword = $_ENV['smtppassword'];
    $smtpsecure = $_ENV['smtpsecure'];
    $mail = new PHPMailer\PHPMailer\PHPMailer(true);
    $mail->isSMTP();
    $mail->Host = $smtphost;
    $mail->SMTPAuth = true;
    $mail->Username = $smtpusername;
    $mail->Password = $smtppassword;
    $mail->SMTPSecure = $smtpsecure;

    $mail->Port = $smtpport;
    $mail->From = "hello@EventEase.com";
    $mail->FromName = "Hello"; //To address and name 
    $mail->addAddress($_POST['email']); //Address to which recipient will reply 
    $mail->addReplyTo("noreply@EventEase.com", "No-Reply");
    $mail->isHTML(true);
    $mail->Subject = $sub;
    $url = $urlIn;
    $mail->Body = $body;
    $mail->send();
}
?>