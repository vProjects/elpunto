<?php
	include('../class/class.manageusers.php');
	$manageUsers = new manageusers();
	session_start();
	if($_SERVER['REQUEST_METHOD'] == 'POST')
	{
		$newPassword = $_POST['newPassword'];
		$newPassword1 = $_POST['newPassword1'];
		$oldPassword = $_POST['oldPassword'];
	}
	if($oldPassword != "" && isset($oldPassword) && isset($newPassword) && isset($newPassword1) && $newPassword != "" && $newPassword1 !="")
	{
		$password_db = $manageUsers->getValue_where('admin_profile','password','id',1);
		if($newPassword == $newPassword1)
		{
			if($oldPassword == $password_db[0]['password'])
			{
				$rowCount = $manageUsers->changeAdminPassword($newPassword);
				if($rowCount == 1)
				{
					$_SESSION['result'] = "Password successfully changed";
				}
				else
				{
					$_SESSION['result'] = "Passord change Failed";
				}
			}
			else
			{
				$_SESSION['result'] = "Wrong Password";
			}
		}
		else
		{
			$_SESSION['result'] = "New passwords don't match.";
		}
	}
	else
	{
		$_SESSION['result'] = "Please fill he form properly";
	}
	
	header('location: ../../admin.php?value=changePassword');
?>