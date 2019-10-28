<?php
// Файлы phpmailer
require 'class.phpmailer.php';
require 'class.smtp.php';

$name = $_POST['name'];
$email = $_POST['email'];
$tel = $_POST['tel'];
// $message = $_POST['message'];

// Настройки
$mail = new PHPMailer;

$mail->isSMTP(); 
$mail->Host = 'smtp.gmail.com';  
$mail->SMTPAuth = true;                      
$mail->Username = 'lego.angar'; // Ваш логин в Яндексе. Именно логин, без @yandex.ru
$mail->Password = 'maine186'; // Ваш пароль
$mail->SMTPSecure = 'ssl';                            
$mail->Port = 465;
$mail->setFrom('lego.angar@gmail.com'); // Ваш Email
$mail->addAddress('oskarmetal2008@gmail.com'); // Email получателя
// $mail->addAddress('infoangar2008@gmail.com'); // Еще один email, если нужно.

// Письмо
$mail->isHTML(true); 
$mail->Subject = "LEGO-ANGAR-ZAPROS"; // Заголовок письма
$mail->Body    = "Имя $name . Телефон $tel . Почта $email"; // Текст письма

// Результат
if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    echo 'ok';
}
?>