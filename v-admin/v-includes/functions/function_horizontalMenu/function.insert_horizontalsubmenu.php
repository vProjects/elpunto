<?php
	include '../../class/class.Manageusers.php';
	$manageData = new manageusers();
	//table name for vertical sub menu
	$table_name = 'horizontal_navbar';
	
	if($_SERVER["REQUEST_METHOD"] == "GET")
	{
		$submenu_name = $_GET['submenu_name'];
		$submenu_link = $_GET['submenu_link'];
		$menu_id = $_GET['menu_id'];
	}
	echo $menu_id;
	if(isset($submenu_name) && isset($submenu_link) && $submenu_name != "" && $submenu_link != "")
	{
		$position = $manageData->getMenu_sorted_DESC($table_name,'*','parent_id',$menu_id);
		print_r($position[0]['position']+1);
		if($position != 0 || $position != "")
		{
			$result = $manageData->insertValue_menu($table_name,$submenu_name,$submenu_link,$menu_id,$position[0]['position']+1,'1');
			echo 'previously '.$position[0]['position'].' elements';
		}
		else
		{
			$result = $manageData->insertValue_menu($table_name,$submenu_name,$submenu_link,$menu_id,1,'1');
			echo 'previously 0 elements';
		}
	}

?>