<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require __DIR__ . "/vendor/autoload.php";




// Looking to send emails in production? Check out our Email API/SMTP product!
$mail = new PHPMailer(true);
// $mail = new PHPMailer();
// $mail->SMTPDebug = SMTP::DEBUG_SERVER;
$mail->isSMTP();
$mail->Host = 'smtp.gmail.com';
$mail->SMTPAuth = true;
$mail->SMTPSecure = 'ssl';
$mail->Port = 465;
$mail->Username = 'jaybeelarn@gmail.com';
$mail->Password = 'JB@13231450';

$mail->isHTML(true);

return $mail;