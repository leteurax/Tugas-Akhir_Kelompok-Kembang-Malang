<?php
    ini_set( 'display_errors', 1 );   
    error_reporting( E_ALL );    
    $from = "testing@domainanda.com"; 
    $to = $_SESSION['email'];    
    $subject = "Checking PHP mail";    
    $message = "PHP mail berjalan dengan baik";   
    $headers = "From:" . $from;    
    mail($to,$subject,$message, $headers);    
    header('location:../../index.php');
?><?php
require 'PHPMailer/PHPMailerAutoload.php';
$mail = new PHPMailer;

// Konfigurasi SMTP
$mail->isSMTP();
$mail->Host = 'smtp.gmail.com';
$mail->SMTPAuth = true;
$mail->Username = 'emailmu@gmail.com';
$mail->Password = 'passwordmu';
$mail->SMTPSecure = 'tls';
$mail->Port = 587;

$mail->setFrom('fauzenvebby@gmail.com', 'Codingan');
$mail->addReplyTo('fauzenvebby@gmail.com', 'Codingan');

// Menambahkan penerima
$mail->addAddress('penerima@contoh.com');

// Menambahkan cc atau bcc 
$mail->addCC('cc@contoh.com');
$mail->addBCC('bcc@contoh.com');

// Subjek email
$mail->Subject = 'Script PHP Kirim Email Dari Localhost menggunakan PHPMailer';

// Mengatur format email ke HTML
$mail->isHTML(true);

// Konten/isi email
$mailContent = "<h1>Mengirim Email HTML menggunakan SMTP di PHP</h1>
    <p>Ini adalah email percobaan yang dikirim menggunakan email server SMTP dengan PHPMailer.</p>";
$mail->Body = $mailContent;

// Kirim email
if(!$mail->send()){
    echo 'Pesan tidak dapat dikirim.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
}else{
    echo 'Pesan telah terkirim';
}
?>