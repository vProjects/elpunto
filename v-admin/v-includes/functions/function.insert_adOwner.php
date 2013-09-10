<?php
	include '../class/class.manageusers.php';
	$manageData = new manageusers();
	
	if($_SERVER['REQUEST_METHOD'] == 'POST')
	{
		$owner_email = $_POST['owner_email'];
		$owner_password = $_POST['owner_password'];
		$owner_password_r = $_POST['owner_password_r'];
	}
	
	if(isset($owner_email) && $owner_email != "" && isset($owner_password) && $owner_password != "" && isset($owner_password_r) && $owner_password_r != "" )
	{
		if($owner_password == $owner_password_r)
		{
			$result = $manageData->insert_adOwner($owner_email,$owner_password);
			echo $result;
		}
		else
		{
			$result = "Password Don't match";
			echo $result;
		}
	}
	else
	{
		$result = "Please fill the form properly";
		echo $result;
	}
?>