<?php
	include '../../class/class.manageusers.php';
	$manageData = new manageusers();
	$table_name = 'horizontal_navbar';
	
	if($_SERVER['REQUEST_METHOD'] == 'GET')
	{
		$menu_id = $_GET['menu_id'];
		$submenu_id = $_GET['submenu_id'];
	}
	
	if(isset($submenu_id) && $submenu_id != "")
	{
		$result = $manageData->deleteValue($table_name,'id',$submenu_id);
	}
	
	header("Location:../../../admin.php?value=horizontal_menu");
?>