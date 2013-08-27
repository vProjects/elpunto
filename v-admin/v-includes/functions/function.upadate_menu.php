<?php
	include '../class/class.manageusers.php';
	//create an object manageUsers class
	$manageData = new manageusers();
	//teble name for update is vertical navbar
	$table_name = 'vertical_navbar';
	if($_SERVER['REQUEST_METHOD'] == 'GET')
	{
		$menu_name = $_GET['menu_name'];
		$menu_link = $_GET['menu_link'];
		$menu_id = $_GET['menu_id'];
		$menu_position = $_GET['menu_position'];
	}
	//update only menu name
	if(isset($menu_name) && $menu_name != "" && isset($menu_id) && $menu_id != "")
	{
		$result = $manageData->updateValue($table_name,'menu_name',$menu_name,$menu_id);
		echo $result.'menu name';
	}
	//update only menu link
	if(isset($menu_link) && $menu_link != "" && isset($menu_id) && $menu_id != "")
	{
		$result = $manageData->updateValue($table_name,'menu_link',$menu_link,$menu_id);
		echo $result.'menu link';
	}
	//update menu position
	if(isset($menu_position) && $menu_position != "" && isset($menu_id) && $menu_id != "")
	{
		//get current menu position
		$menu_position_present = $manageData->getValue_where($table_name,'position','id',$menu_id);
		//current menu position =  $menu_position_present[0]['position']
		$navbar_menus = $manageData->getMenu_sorted($table_name,'*','level',0);
		
		//when entered position is less than current position
		if($menu_position_present[0]['position'] > $menu_position)
		{	
			echo 'less';
			foreach($navbar_menus as $navbar_menu)
			{
				//get the position is less than or equal to current position and greater than postion entered
				if($navbar_menu['position'] <= $menu_position_present[0]['position'] && $navbar_menu['position'] > $menu_position)
				{
					echo $navbar_menu['position'].'<br/>';
				}
			}
		}
		//when entered position is greater than current position
		if($menu_position_present[0]['position'] < $menu_position)
		{
			echo 'greater';
			foreach($navbar_menus as $navbar_menu)
			{
				//get the value greater than current position and less than or equal to postion entered
				if($navbar_menu['position'] > $menu_position_present[0]['position'] && $navbar_menu['position'] <= $menu_position)
				{
					echo $navbar_menu['position'].'<br/>';
				}
			}
		}
		if($menu_position == $menu_position_present[0]['position'])
		{
			echo 'equal';
		}
	}
	
?>