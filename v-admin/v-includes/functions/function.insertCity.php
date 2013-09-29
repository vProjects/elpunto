<?php
	include '../class/class.manageusers.php';
	$manageData = new manageusers();
	//table name for vertical menu
	$table_name = 'city';
	
	if($_SERVER["REQUEST_METHOD"] == "POST")
	{
		$city_name = htmlentities($_POST['city_name'],ENT_QUOTES, "utf-8");
	}
	
	if(isset($city_name) && !empty($city_name))
	{
		$result = $manageData->insert_city($city_name);
		//echo $result;
	}
	
	header("Location:../../admin.php?value=manageCity");

?>