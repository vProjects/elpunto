<?php
	include '../class/class.manageusers.php';
	//create an object manageUsers class
	$manageData = new manageusers();
	//teble name for update is vertical navbar
	$table_name = 'vertical_navbar';
	if($_SERVER['REQUEST_METHOD'] == 'GET')
	{
		$category_description = htmlentities($_GET['category_description'],ENT_QUOTES, "utf-8");
		$menu_id = $_GET['menu_id'];
	}
	//update only menu description
	if(isset($category_description) && $category_description != "" && isset($menu_id) && $menu_id != "")
	{
		$result = $manageData->updateValue($table_name,'description',$category_description,$menu_id);
		echo $result;
	}
?>