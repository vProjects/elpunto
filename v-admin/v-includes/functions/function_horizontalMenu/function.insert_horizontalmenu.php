<?php
	include '../../class/class.Manageusers.php';
	$manageData = new manageusers();
	//table name for vertical menu
	$table_name = 'horizontal_navbar';
	
	if($_SERVER["REQUEST_METHOD"] == "GET")
	{
		$menu_name = $_GET['menu_name'];
		$menu_link = $_GET['menu_link'];
	}
	
	if(isset($menu_link) && isset($menu_name) && $menu_link != "" && $menu_name != "")
	{
		$position = $manageData->getMenu_sorted_DESC('horizontal_navbar','*','level',"0");
		$result = $manageData->insertValue_menu('horizontal_navbar',$menu_name,$menu_link,'0',$position[0]['position']+1,'0');
		
	}
	header("Location:../../../admin.php?value=horizontal_menu");

?>