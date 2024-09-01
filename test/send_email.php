<?php
// // Include PHPMailer autoload file
// require 'vendor/autoload.php'; // Adjust the path as needed

// use PHPMailer\PHPMailer\PHPMailer;
// use PHPMailer\PHPMailer\Exception;

// // Configuration

// $smtpUsername = 'ashishbhandari380@gmail.com';
// $smtpPassword = 'your_gmail_password';
// $senderEmail = 'ashishbhandari380@gmail.com';
// $senderName = 'Ashish Bhandari';
// $recipientEmail = 'bhandari12345ashish@gmail.com';
// $recipientName = 'Recipient Name';
// $subject = 'Test Email via PHPMailer';
// $body = 'This is a test email sent from PHP using PHPMailer.';

// // Instantiation and passing `true` enables exceptions
// $mail = new C:\xampp\htdocs\website\test\PHPMailer-6.9.1\PHPMailer-6.9.1\src\PHPMailer.php(true);

// try {
//     // Server settings
//     $mail->isSMTP(); // Set mailer to use SMTP
//     $mail->Host = 'smtp.gmail.com'; // Specify Gmail's SMTP server
//     $mail->SMTPAuth = true; // Enable SMTP authentication
//     $mail->Username = $smtpUsername; // SMTP username (your Gmail address)
//     $mail->Password = $smtpPassword; // SMTP password (your Gmail password)
//     $mail->SMTPSecure = 'tls'; // Enable TLS encryption; `ssl` also accepted
//     $mail->Port = 587; // TCP port to connect to

//     // Recipients
//     $mail->setFrom($senderEmail, $senderName);
//     $mail->addAddress($recipientEmail, $recipientName); // Add a recipient

//     // Content
//     $mail->isHTML(true); // Set email format to HTML
//     $mail->Subject = $subject;
//     $mail->Body = $body;

//     $mail->send();
//     echo 'Email has been sent successfully.';
// } catch (Exception $e) {
//     echo "Email could not be sent. Mailer Error: {$mail->ErrorInfo}";
// }
?>