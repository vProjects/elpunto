<?php
	include('../class/class.manageusers.php');
	$manageData = new manageusers();
	
	if($_SERVER['REQUEST_METHOD'] == 'POST')
	{
		$company_id = $_POST['id_company'];
	}
	
	if(!empty($company_id) && isset($company_id))
	{
		$result = $manageData->deleteValue('company_info','id',$company_id);
	}
	
	
	header('location: ../../admin.php?value=allads&keyword=')
?>