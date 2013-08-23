<?php
	include('../class/class.manageusers.php');
	if($_SERVER['REQUEST_METHOD'] == 'POST'){
		$email = $_POST['email'];
		$password = $_POST['password'];
	}
	else{
		$username = '';
		$password = '';
	}
	
	$manageusers = new manageusers();
	$rowcount = $manageusers->login_admin($email, $password);

	if($rowcount==1){
		session_start();
		$_SESSION['code'] = 'JW3QM4Pq990lHYH115It9kIczy2IWzy9';
		$_SESSION['adminemail'] = $email;
		header('Location: ../../admin.php');
		
	}
	else{
		header('Location: ../../index.php?error=login_error');
	}
	


?>
