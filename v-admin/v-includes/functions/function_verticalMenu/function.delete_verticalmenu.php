<?php
	include '../../class/class.manageusers.php';
	$manageData = new manageusers();
	$table_name = 'vertical_navbar';
	
	if($_SERVER['REQUEST_METHOD'] == 'GET')
	{
		$menu_id = $_GET['menu_id'];
	}
	
	if(isset($menu_id) && $menu_id != "")
	{
		//get the value of sub menu with parent id = menu id
		$submenus_parentid = $manageData->getMenu_sorted($table_name,'*','parent_id',$menu_id);
		//delete menu where id = menu_id
		$delete_status = $manageData->deleteValue($table_name,'id',$menu_id);
		//echo $delete_status.'menu<br />';
		//codes for deletion the sub menus of the menu
		if(isset($submenus_parentid) && $submenus_parentid != "")
		{
			foreach($submenus_parentid as $submenu_parentid)
			{
				$delete_status = $manageData->deleteValue($table_name,'id',$submenu_parentid['id']);
			}
		}	
	}
	
	header("Location:../../../admin.php?value=vertical_menu");
?>