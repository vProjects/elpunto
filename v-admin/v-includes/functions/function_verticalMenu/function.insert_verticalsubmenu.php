<?php
	include '../../class/class.manageusers.php';
	$manageData = new manageusers();
	//table name for vertical sub menu
	$table_name = 'vertical_navbar';
	
	if($_SERVER["REQUEST_METHOD"] == "GET")
	{
		$submenu_name = htmlentities($_GET['submenu_name'],ENT_QUOTES, "utf-8");
		$submenu_link = htmlentities($_GET['submenu_link'],ENT_QUOTES, "utf-8");
		$menu_id = htmlentities($_GET['menu_id'],ENT_QUOTES, "utf-8");
	}
	if(isset($submenu_name) && isset($submenu_link) && $submenu_name != "" && $submenu_link != "")
	{
		$position = $manageData->getMenu_sorted_DESC($table_name,'*','parent_id',$menu_id);
		//print_r($position[0]['position']+1);
		if($position != 0 || $position != "")
		{
			$result = $manageData->insertValue_menu($table_name,$submenu_name,$submenu_link,$menu_id,$position[0]['position']+1,'1');
		}
		else
		{
			$result = $manageData->insertValue_menu($table_name,$submenu_name,$submenu_link,$menu_id,1,'1');
		
		}
	}
	header("Location:../../../admin.php?value=vertical_menu");
	

?>