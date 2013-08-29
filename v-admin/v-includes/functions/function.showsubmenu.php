<?php

	include '../class/class.manageusers.php';
	$manage_UI = new manageusers();
	if($_GET['type'] == 'horizontal')
	{
		$table_name = 'horizontal_navbar';
	}
	elseif($_GET['type'] == 'vertical')
	{
		$table_name = 'vertical_navbar';
	}

	if(count($GLOBALS['_GET'])!=0){
		if(isset($_GET['submenu']) && $_GET['submenu'] != '')
		{
			$menu_id = $_GET['submenu'];
		}
		$submenus = $manage_UI->getMenu_sorted($table_name,'*','parent_id',$menu_id);
	}

?>

<select class="input1" name="submenu_id" style="width:587px;">
  <option value="index">Select One</option>
  <?php
    //codes for generating submenu dynamically
    foreach($submenus as $submenu)
    {
        echo '<option value="'.$submenu['id'].'" >'.$submenu['menu_name'].'</option>';
    }
  ?>
</select>
