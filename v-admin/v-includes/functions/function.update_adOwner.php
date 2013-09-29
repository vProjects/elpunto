<?php
	session_start();
	include '../class/class.manageusers.php';
	$manage_data = new manageusers();
	
	if($_SERVER['REQUEST_METHOD'] == 'POST')
	{
		$email_previous = $_POST['email_previous'];
		$new_email = $_POST['new_email'];
		//$email_previous = $_POST['email_previous'];
		$ad_owner_name = $_POST['ad_owner_name'];
	}
	
	//get old email of the owner and replace with the new one
	if(isset($email_previous) && $email_previous != "" && isset($new_email) && $new_email != "")
	{
		$checkEmail = $manage_data->checkMail($new_email);
		if(empty($checkEmail)){
			$result = $manage_data->update_byColumn('company_info','company_email',$new_email,'company_email',$email_previous);
			$result1 = $manage_data->update_byColumn('owner_info','owner_email',$new_email,'owner_email',$email_previous);
		}
		else
		{
			$result_1 = "1";
		}
	}
	//update the add ad_owner_name
	if(isset($ad_owner_name) && $ad_owner_name != "")
	{
		$result = $manage_data->update_byColumn('owner_info','owner_name',$ad_owner_name,'owner_email',$owner_email);
	}
	//codes for update result using session
	if($result > 0 || $result1 > 0 )
	{
		$_SESSION['result'] = "Update Successful.";
	}
	else
	{
		$_SESSION['result'] = "Please fill the form properly and try again.";
	}
	if($result_1 == "1")
	{
		$_SESSION['result'] = "Email already exist.";
	}
	//redirection varriable insertAds_owner
	header('location: ../../admin.php?value=updateAds_owner&email='.$new_email);
?>