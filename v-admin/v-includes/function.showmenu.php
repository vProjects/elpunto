<?php
	include("class/class.manageusers.php");
	//create an object for obtaining menu
	$nav_object = new manageusers();
	//names of the table used in this file.
	$table_name_menu = "vertical_navbar";
	
	$submenu_get = $_GET["submenu"];
	
	//codes to get sub menu
	$submenus = $nav_object->getMenu_sorted($table_name_menu,'*','parent_id',$submenu_get);
	echo '<select class="input1" name="page" style="width:587px;">';
	foreach($submenus as $submenu)
	{
		echo  '<option value="'.$submenu['id'].'">'.$submenu['menu_name'].'</option>';
	}
	echo '</select>';
?>