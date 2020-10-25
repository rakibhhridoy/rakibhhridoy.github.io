<?php
	if(asset($_POST['submit']){
		$name=$_POST['name'];
		$email=$_POST['email'];
		$phone=$_POST['phone'];
        $msg=$_POST['msg'];
        $form_subject=$_POST['subject']

	$to='rakibhhridoy@yahoo.com';
	$subject=$form_subject
	$message='Name:'.$name.'\n'.'Phone: '.$phone.'\n'.'Wrote the following: '.'\n'.$msg;
	$headers='From: '.$email;
	
	if(mail($to,$subject,$message, $headers)){
		echo '<h1>Success</h1>';
		}
	}
?>
