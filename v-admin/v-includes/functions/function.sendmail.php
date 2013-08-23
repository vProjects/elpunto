<?php
	include('../class/class.mail.php');
	
	$receivers_email = $_POST['receivers_email'];
	$message = $_POST['message'];
	
	$mail = new Mail();
	$whetherMailSent = $mail->sendMail($receivers_email,$message);
	
	header('Location: ../../admin.php');	
	


?>