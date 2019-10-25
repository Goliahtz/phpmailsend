<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'src/Exception.php';
require 'src/PHPMailer.php';
require 'src/SMTP.php';

$mail = new PHPMailer(true);
try {
    
    $mail->setLanguage('tr'); // my country , you should change according to yourself
    //$mail->SMTPDebug = 2;
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'test@gmail.com'; // You must write email here
    $mail->Password = 'zm%Laswe{Qqkk'; // You must write your email password here
    $mail->SMTPSecure = 'tls';
    $mail->Port = 587;
    $mail->CharSet = 'UTF-8'; // content-type: html; doesnt work.. u should write this code for ç ş i specific charecter.

    // mail sender

    $mail->setFrom('udemytest123erbilen@gmail.com', 'Udemy Tayfun Erbilen');
    $mail->addAddress('serifhaniskl@gmail.com');
    $mail->addAddress('tatlirumeysa@gmail.com');
    $mail->addReplyTo('sertat@gmail.com', 'Uzman Cevap'); //User click to reply , this adress will show in info box.

	//for document
    $mail->addAttachment('PHPMailer-master.zip', 'howtousemailinphp.zip');
	// mail content
    $mail->isHTML(true);
    $mail->Subject = 'testing';
    $mail->Body = 'testing here';

    $mail->send();//last method

    echo "Mail send succesfully";

} catch (Exception $e){
    echo $e->errorMessage();
}