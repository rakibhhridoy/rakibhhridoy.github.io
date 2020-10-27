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
	$mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
	$mail->SMTPAuth = true;                               // Enable SMTP authentication
	$mail->Username = 'mailrakibhhridoy@gmail.com';                 // SMTP username
	$mail->Password = 'Set';                           // SMTP password
	$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
	$mail->Port = 587;                                    // TCP port to connect to

	$mail->setFrom($email, $name);
	$mail->addAddress('mailrakibhhridoy@gmail.com');     // Add a recipient      	
	$mail->Subject = ('$email ($form_subject)')
	$mail->Body    = $msg

	if(!$mail->send()) {
		$status = 'Message could not be sent.';
		$response =  'Mail Error: ' . $mail->ErrorInfo;
	} else {
		$status =  'Message has been sent';
	}

	exit(json_encode(array('status'=> $status, 'response' => $response)));







}


?>
