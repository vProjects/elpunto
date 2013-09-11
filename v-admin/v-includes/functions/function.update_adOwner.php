<?php
	include '../class/class.manageusers.php';
	$manage_data = new manageusers();
	
	if($_SERVER['REQUEST_METHOD'] == 'POST')
	{
		$email_previous = $_POST['email_previous'];
		$new_email = $_POST['new_email'];
		//$email_previous = $_POST['email_previous'];
	}
	
	//get old email of the owner and replace with the new one
	if(isset($email_previous) && $email_previous != "" && isset($new_email) && $new_email != "")
	{
		$result = $manage_data->update_byColumn('company_info','company_email',$new_email,'company_email',$email_previous);
		echo $result;
		$result = $manage_data->update_byColumn('owner_info','owner_email',$new_email,'owner_email',$email_previous);
		echo $result;
		
	}
?>