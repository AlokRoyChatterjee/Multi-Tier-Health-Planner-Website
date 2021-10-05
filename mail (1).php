<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require_once __DIR__ . '/vendor/phpmailer/src/Exception.php';
require_once __DIR__ . '/vendor/phpmailer/src/PHPMailer.php';
require_once __DIR__ . '/vendor/phpmailer/src/SMTP.php';

$mail = new PHPMailer(true);

try {
    $mail->SMTPDebug =4; 
    $mail->isSMTP();
    $name = $_POST['name'];
    $email= $_POST['email'];
    $message= $_POST['message'];
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port = 587;

    $mail->Username = 'ttt559575@gmail.com'; // email
    $mail->Password = 'ttt#123456'; // password

    $mail->setFrom('ttt559575@gmail.com', 'HealthPlannerWebsiteApp');  //sender and title
    $mail->addAddress($email, 'personuser');

    $mail->IsHTML(false);
    $mail->Subject = "HealthPlannerWebsiteApp: ".$name."'s Recommended Exercises Reminders!";
    $mail->Body = $name."'s Recommended Exercises Reminders: ".$message;

    $mail->send();
    echo "<script>window.location.href='exerciselist.php';</script>";
} catch (Exception $e) {
    
}

?>


