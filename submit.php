<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php'; // Composer's autoload

if (isset($_POST['submit'])) {
    $email = $_POST['email'];    // assuming email is also collected in the form
    $number = $_POST['number'];
    $message = $_POST['message'];  
    // $name = $_POST['name'];       // assuming name is also collected

    // Now call the function with proper parameters
    send_email($email, $number, $message);
}

function send_email($email, $number, $message) {
    $mail = new PHPMailer(true);

    try {
        // Server settings
        $mail->isSMTP();                                            
        $mail->Host       = 'smtp.gmail.com';                        
        $mail->SMTPAuth   = true;                                   
        $mail->Username   = 'mohammadfaijansari6@gmail.com';         
        $mail->Password   = 'zqxe vtgs rokv kgtd'; // App password (never share this publicly)                  
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;           
        $mail->Port       = 465;                                    

        // Recipients
        $mail->setFrom('mohammadfaijansari6@gmail.com', 'Portfolio');
        $mail->addAddress($email, 'User');     

        // Content
        $mail->isHTML(true);                                 
        $mail->Subject = nl2br($message);
        $mail->Body    = $number; // Convert line breaks to <br>

        $mail->send();
        echo 'Message has been sent';
        $code=1;
        $code1=1;
        if($code==$code1){
            header("Location:index.php");
        }
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
}
