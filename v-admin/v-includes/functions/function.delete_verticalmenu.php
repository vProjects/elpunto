<?php
	include '../class/class.manageusers.php';
	$manageData = new manageusers();
	$table_name = 'vertical_navbar';
	
	if($_SERVER['REQUEST_METHOD'] == 'GET')
	{
		$menu_id = $_GET['menu_id'];
	}
	echo $menu_id;
	
	if(isset($menu_id) && $menu_id != "")
	{
		//get the value of ub menu with parent id = menu id
		$submenus_parentid = $manageData->getMenu_sorted($table_name,'*','parent_id',$menu_id);
		print_r($submenus_parentid);
		//delete menu where id = menu_id
		$delete_status = $manageData->deleteValue($table_name,'id',$menu_id);
		//echo $delete_status.'menu<br />';
		if(isset($submenus_parentid) && $submenus_parentid != "")
		{
			foreach($submenus_parentid as $submenu_parentid)
			{
				$delete_status = $manageData->deleteValue($table_name,'id',$submenu_parentid['id']);
			}
		}
		
		
	}
?>