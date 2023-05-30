<?php
require 'PHPMailer-master/src/PHPMailer.php';
require 'PHPMailer-master/src/SMTP.php';
require 'PHPMailer-master/src/Exception.php';

//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->isSMTP();                                            //Send using SMTP
    $mail->CharSet    = 'UTF-8';
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'allenwhsu@gmail.com';                     //SMTP username
    $mail->Password   = 'nelzrkcebotqbprp';                               //SMTP password
    $mail->SMTPSecure = 'tls';            //Enable implicit TLS encryption
    $mail->Port       = 587;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom($_POST['email'], 'Submission');
    $mail->addAddress('allen@notbyai.fyi');               //Name is optional

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'New Contact Entry';
    $mail->Body    = '<b>Email</b>: ' . $_POST['email'] . '<br><b>Name</b>: ' . $_POST['name'] . '<br><b>Message</b>: ' . $_POST['message'] . '<br><b>Marketing Permission</b>: ' . $_POST['marketing'];

    $mail->send();
    echo '<script>window.location.href = "https://notbyai.fyi/thank-you-for-contacting-us";</script>';
} catch (Exception $e) {
    echo "Looks like something is wrong. But that's ok, we are all humans. Here is the error: {$mail->ErrorInfo}";
}
?>