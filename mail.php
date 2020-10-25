<?php

use PHPMailer\PHPMailer\PHPMailer;

if(asset($_POST['submit']){
	$name=$_POST['name'];
	$email=$_POST['email'];
	$msg=$_POST['msg'];
	$form_subject=$_POST['subject'];

	require_once 'PHPMailer/src/PHPMailer.php';
	require_once 'PHPMailer/src/SMTP.php';
	require_once 'PHPMailer/src/Exception.php';

	$mail = new PHPMailer;

	//$mail->SMTPDebug = 3;                               // Enable verbose debug output

	$mail->isSMTP();                                      // Set mailer to use SMTP
	$mail->Host = 'smtp1.example.com;smtp2.example.com';  // Specify main and backup SMTP servers
	$mail->SMTPAuth = true;                               // Enable SMTP authentication
	$mail->Username = 'user@example.com';                 // SMTP username
	$mail->Password = 'secret';                           // SMTP password
	$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
	$mail->Port = 587;                                    // TCP port to connect to

	$mail->setFrom($email, $name);
	$mail->addAddress('joe@example.net', 'Joe User');     // Add a recipient      	
	$mail->Subject = ('$email ($form_subject)')
	$mail->Body    = 'This is the HTML message body <b>in bold!</b>';

	if(!$mail->send()) {
	echo 'Message could not be sent.';
	echo 'Mailer Error: ' . $mail->ErrorInfo;
	} else {
	echo 'Message has been sent';
	}







}


?>
