<?php
	session_start();
	include '../class/class.manageusers.php';
	$manage_data = new manageusers();
	
	if($_SERVER['REQUEST_METHOD'] == 'POST')
	{
		$present_email = $_POST['present_email'];
		$new_email = $_POST['new_email'];
		//$email_previous = $_POST['email_previous'];
	}
	
	//get old email of the owner and replace with the new one
	if(isset($new_email) && $new_email != "" )
	{
		$result = $manage_data->update_byColumn('admin_profile','email_add',$new_email,'email_add',$present_email);
		echo $result;
		
	}
	//codes for update result using session
	if($result > 0)
	{
		$_SESSION['result'] = "Update Successful.";
	}
	else
	{
		$_SESSION['result'] = "Please fill the form properly and try again.";
	}
	//redirection varriable insertAds_owner
	header('location: ../../admin.php?value=updateContact');
?>