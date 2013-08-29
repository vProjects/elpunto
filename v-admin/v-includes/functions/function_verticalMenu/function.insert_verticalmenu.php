<?php
	include '../../class/class.Manageusers.php';
	$manageData = new manageusers();
	//table name for vertical menu
	$table_name = 'vertical_navbar';
	
	if($_SERVER["REQUEST_METHOD"] == "GET")
	{
		$menu_name = $_GET['menu_name'];
		$menu_link = $_GET['menu_link'];
	}
	
	if(isset($menu_link) && isset($menu_name) && $menu_link != "" && $menu_name != "")
	{
		$position = $manageData->getMenu_sorted_DESC($table_name,'*','level',"0");
		$result = $manageData->insertValue_menu($table_name,$menu_name,$menu_link,'0',$position[0]['position']+1,'0');
		
	}
	
	header("Location:../../../admin.php?value=vertical_menu");

?>