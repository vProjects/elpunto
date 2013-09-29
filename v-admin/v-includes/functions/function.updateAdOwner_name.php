<?php
	session_start();
	include '../class/class.manageusers.php';
	$manage_data = new manageusers();
	
	if($_SERVER['REQUEST_METHOD'] == 'POST')
	{
		$email_previous = $_POST['email_previous'];
		//$email_previous = $_POST['email_previous'];
		$ad_owner_name = $_POST['ad_owner_name'];
	}
	
	//update the add ad_owner_name
	if(isset($ad_owner_name) && $ad_owner_name != "")
	{
		$result = $manage_data->update_byColumn('owner_info','owner_name',$ad_owner_name,'owner_email',$email_previous);
		$result1 = $manage_data->update_byColumn('company_info','owner_name',$ad_owner_name,'company_email',$email_previous);
	}
	//codes for update result using session
	if($result > 0 || $result1 > 0)
	{
		$_SESSION['result1'] = "Update Successful.";
	}
	else
	{
		$_SESSION['result1'] = "Please fill the form properly and try again.";
	}
	//redirection varriable insertAds_owner
	header('location: ../../admin.php?value=updateAds_owner&email='.$email_previous);
?>