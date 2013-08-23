<?php
	include('../class/class.manageusers.php');
	session_start();

	$newPassword = $_POST['newPassword'];
	$newPassword1 = $_POST['newPassword1'];
	
	$oldPassword1 = $_POST['oldPassword1'];
	$oldPassword = $_POST['oldPassword'];
	
	if($oldPassword ==  $oldPassword1){
		if($newPassword == $newPassword1){
			$manageUsers = new manageusers();
			$rowCount = $manageUsers->changeAdminPassword($newPassword);
			if($rowCount == 1){
				$_SESSION['result'] = 'true';
				header('location: ../../admin.php?value=admin');
			}
			else{
				$_SESSION['result'] = 'false';
				header('location: ../../admin.php?value=admin');
			}
		}
	}
	else if($oldPassword != $oldPassword1){
		$_SESSION['result'] = 'false';
		header('location: ../../admin.php?value=admin');
	}
	else if($newPassword != $newPassword1){
		$_SESSION['result'] = 'false';
		header('location: ../../admin.php?value=admin');
	}
	else{
		$_SESSION['result'] = 'false';
		header('location: ../../admin.php?value=admin');

	}
	


?>