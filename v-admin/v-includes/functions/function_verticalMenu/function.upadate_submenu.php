<?php
	include '../class/class.manageusers.php';
	//create an object manageUsers class
	$manageData = new manageusers();
	//table name for update is vertical navbar
	$table_name = 'vertical_navbar';
	if($_SERVER['REQUEST_METHOD'] == 'GET')
	{
		$menu_id = $_GET['menu_id'];
		$submenu_name = $_GET['submenu_name'];
		$submenu_link = $_GET['submenu_link'];
		$submenu_id = $_GET['submenu_id'];
		$submenu_position = $_GET['submenu_position'];
	}
	echo $submenu_name.'<br/>';
	echo $submenu_id.'<br/>';
	//update the sub menu name
	if(isset($submenu_name) && $submenu_name != "" && isset($submenu_id) && $submenu_id != "")
	{
		$result = $manageData->updateValue($table_name,'menu_name',$submenu_name,$submenu_id);
		echo $result.'menu name';
	}
	//update the sub menu link
	if(isset($submenu_link) && $submenu_link != "" && isset($submenu_id) && $submenu_id != "")
	{
		$result = $manageData->updateValue($table_name,'menu_link',$submenu_link,$submenu_id);
		echo $result.'menu link';
	}
	//update position of submenu
	if(isset($submenu_position) && $submenu_position != "" && isset($menu_id) && $menu_id != "")
	{
		//get id of the selected position
		$id_selected_pos = $manageData->getValue_where_menu($table_name,'id','position',$submenu_position,$menu_id);
		
		//get current menu position
		$submenu_position_present = $manageData->getValue_where($table_name,'position','id',$submenu_id);
		//current menu position =  $menu_position_present[0]['position']
		//id of selected position = $id_selected_pos[0]['id'];
		
		print_r($id_selected_pos);
		echo '<br/>';
		print_r($submenu_position_present);
		
		//get sub menu according to parent id
		$navbar_submenus = $manageData->getMenu_sorted($table_name,'*','parent_id',$menu_id);
		
		echo '<br/>';
		print_r($navbar_submenus);
		//when entered position is less than current position
		if($submenu_position_present[0]['position'] > $submenu_position)
		{
			foreach($navbar_submenus as $navbar_submenu)
			{
				//get the position is less than current position and greater than or equal to postion entered
				if($navbar_submenu['position'] < $submenu_position_present[0]['position'] && $navbar_submenu['position'] >= $submenu_position)
				{
					$update_pos_all = $manageData->updateValue($table_name,'position',($navbar_submenu['position']+1),$navbar_submenu['id']);
					//echo $navbar_menu['position'].'<br/>';
				}
			}
			//update the menu position of the selected menu to move the selected menu to desired place
			$update_pos = $manageData->updateValue($table_name,'position',$submenu_position,$submenu_id);
			echo $update_pos.'-->updated pos'.'<br />';
		}
		//when entered position is greater than current position
		if($submenu_position_present[0]['position'] < $submenu_position)
		{
			echo 'greater';
			foreach($navbar_submenus as $navbar_submenu)
			{
				//get the position is less than current position and greater than or equal to postion entered
				if($navbar_submenu['position'] > $submenu_position_present[0]['position'] && $navbar_submenu['position'] <= $submenu_position)
				{
					$update_pos_all = $manageData->updateValue($table_name,'position',($navbar_submenu['position']-1),$navbar_submenu['id']);
					//echo $navbar_menu['position'].'<br/>';
				}
			}
			//update the menu position of the selected menu to move the selected menu to desired place
			$update_pos = $manageData->updateValue($table_name,'position',$submenu_position,$submenu_id);
			echo $update_pos.'-->updated pos'.'<br />';
		}
		
		if($submenu_position == $submenu_position_present[0]['position'])
		{
			echo 'please enter a valid position';
		}
	}
?>