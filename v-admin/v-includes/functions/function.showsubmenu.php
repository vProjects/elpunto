<?php

	include '../class/class.manageusers.php';
	$manage_UI = new manageusers();


	if(count($GLOBALS['_GET'])!=0){
		if(isset($_GET['submenu']) && $_GET['submenu'] != '')
		{
			$menu_id = $_GET['submenu'];
		}
		$submenus = $manage_UI->getMenu_sorted('vertical_navbar','*','parent_id',$menu_id);
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
