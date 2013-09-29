<?php
	include '../class/class.manageusers.php';
	$manageData = new manageusers();
	//table name for vertical menu
	$table_name = 'city';
	
	if($_SERVER["REQUEST_METHOD"] == "POST")
	{
		$city_id = $_POST['city_id'];
	}
	
	if(isset($city_id) && !empty($city_id))
	{
		$result = $manageData->deleteValue($table_name,'id',$city_id);
		//echo $result;
	}
	
	header("Location:../../admin.php?value=manageCity");

?>