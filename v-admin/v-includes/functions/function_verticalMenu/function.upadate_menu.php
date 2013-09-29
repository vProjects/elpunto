<?php
	include '../../class/class.manageusers.php';
	//create an object manageUsers class
	$manageData = new manageusers();
	//teble name for update is vertical navbar
	$table_name = 'vertical_navbar';
	if($_SERVER['REQUEST_METHOD'] == 'GET')
	{
		$menu_name = htmlentities($_GET['menu_name'],ENT_QUOTES, "utf-8");;
		$menu_link = htmlentities($_GET['menu_link'],ENT_QUOTES, "utf-8");;
		$menu_id = $_GET['menu_id'];
		$menu_position = $_GET['menu_position'];
	}
	//update only menu name
	if(isset($menu_name) && $menu_name != "" && isset($menu_id) && $menu_id != "")
	{
		$result = $manageData->updateValue($table_name,'menu_name',$menu_name,$menu_id);
	}
	//update only menu link
	if(isset($menu_link) && $menu_link != "" && isset($menu_id) && $menu_id != "")
	{
		$result = $manageData->updateValue($table_name,'menu_link',$menu_link,$menu_id);
	}
	
	//update menu position
	if(isset($menu_position) && $menu_position != "" && isset($menu_id) && $menu_id != "")
	{
		//get id of the selected position
		$id_selected_pos = $manageData->getValue_where_menu($table_name,'id','position',$menu_position,0);
		
		//get current menu position
		$menu_position_present = $manageData->getValue_where($table_name,'position','id',$menu_id);
		//current menu position =  $menu_position_present[0]['position']
		//id of selected position = $id_selected_pos[0]['id'];
		
		//get all the navbar table elements
		$navbar_menus = $manageData->getMenu_sorted($table_name,'*','level',0);
		
		//when entered position is less than current position
		if($menu_position_present[0]['position'] > $menu_position)
		{
			foreach($navbar_menus as $navbar_menu)
			{
				//get the position is less than current position and greater than or equal to postion entered
				if($navbar_menu['position'] < $menu_position_present[0]['position'] && $navbar_menu['position'] >= $menu_position)
				{
					$update_pos_all = $manageData->updateValue($table_name,'position',($navbar_menu['position']+1),$navbar_menu['id']);
					//echo $navbar_menu['position'].'<br/>';
				}
			}
			//update the menu position of the selected menu to move the selected menu to desired place
			$update_pos = $manageData->updateValue($table_name,'position',$menu_position,$menu_id);
		}
		//when entered position is greater than current position
		if($menu_position_present[0]['position'] < $menu_position)
		{
			foreach($navbar_menus as $navbar_menu)
			{
				//get the position is less than current position and greater than or equal to postion entered
				if($navbar_menu['position'] > $menu_position_present[0]['position'] && $navbar_menu['position'] <= $menu_position)
				{
					$update_pos_all = $manageData->updateValue($table_name,'position',($navbar_menu['position']-1),$navbar_menu['id']);
					//echo $navbar_menu['position'].'<br/>';
				}
			}
			//update the menu position of the selected menu to move the selected menu to desired place
			$update_pos = $manageData->updateValue($table_name,'position',$menu_position,$menu_id);
		}
		if($menu_position == $menu_position_present[0]['position'])
		{
			//echo 'please enter a valid position';
		}
	}
	
	header("Location:../../../admin.php?value=vertical_menu");
	
?>