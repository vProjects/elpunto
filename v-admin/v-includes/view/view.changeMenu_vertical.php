<?php
	header('Content-Type: text/html; charset=iso-8859-1');
	session_start();
	include '../class/class.manageusers.php';
	$manage_UI = new manageusers();
	
	$menus = $manage_UI->getMenu_sorted('vertical_navbar','*','level',0);
?>
             

<div id="dashboard">
	<div id="mailbox" style="height:1300px">
    	<!--form for inserting menu-->
    	<blockquote>
          <p>Create Vertical Menu of your site</p>
          <small>It will help <cite title="Source Title">you category changes</cite></small>
        </blockquote>
		<div class="container_navbar_manage">
        <form class="meta_tag" action="v-includes/functions/function_verticalMenu/function.insert_verticalmenu.php" method="get">
        	<label class="label1" style="margin-right:0px;">Menu Name:</label><input type="text" class="input1" name="menu_name" placeholder="Enter Menu Name" style="width: 200px; margin-right:30px;">
            <label class="label1" style="margin-right:0px;">Menu Link:</label><input type="text" class="input1" name="menu_link" placeholder="Enter Menu Link" style="width: 200px; margin-right:30px;">
            <?php if(isset($result)) echo $result ?>
            <button type="submit" class="btn btn-primary" onClick="" style="float:right;margin-right: 42px;">Create</button> 
        </form>
		</div><!--form for inserting menu ends here-->
        
        <!--update menu details start here-->
        <blockquote>
          <p>Update Vertical Menu of your site</p>
          <small>It will help <cite title="Source Title">you category changes</cite></small>
        </blockquote>
        <div class="container_navbar_manage" style="height: 130px;">
        <form class="meta_tag" action="v-includes/functions/function_verticalMenu/function.upadate_menu.php" method="get">
        	<label class="label1" style="margin-right:0px;">Select Menu</label>
            <select class="input1" name="menu_id" style="width:587px;">
             	<?php
					//get the select element value of menu dynamically
					foreach($menus as $menu)
					{
						echo '<option value="'.$menu['id'].'">'.$menu['menu_name'].'</option>';
					}
				?>
            </select>
        	<label class="label1" style="margin-right:0px;">Menu Name:</label><input type="text" class="input1" name="menu_name" placeholder="Enter Menu Name" style="width: 200px; margin-right:30px;">
            <label class="label1" style="margin-right:0px;">Menu Link:</label><input type="text" class="input1" name="menu_link" placeholder="Enter Menu Link" style="width: 200px; margin-right:30px;">
            <label class="label1" style="margin-right:0px;">Menu Position:</label><input type="text" class="input1" name="menu_position" placeholder="Enter Menu Position" style="width: 200px; margin-right:30px;">
            
            <?php if(isset($result)) echo $result ?>
            <button type="submit" class="btn btn-primary" onClick="" style="float:right;margin-right: 42px;">Update</button> 
        </form>
		</div> 
        
        <!--create new sub menu form--->
        <blockquote>
          <p>Create Vertical Sub Menu of your site</p>
          <small>It will help <cite title="Source Title">you category changes</cite></small>
        </blockquote>
		<div class="container_navbar_manage">
        <form class="meta_tag" action="v-includes/functions/function_verticalMenu/function.insert_verticalsubmenu.php" method="get">
        	<label class="label1" style="margin-right:0px;">Select Menu</label>
            <select class="input1" name="menu_id" style="width:587px;">
                <?php
					//get the select element value of menu dynamically
					foreach($menus as $menu)
					{
						echo '<option value="'.$menu['id'].'">'.html_entity_decode($menu['menu_name'],ENT_QUOTES, "utf-8").'</option>';
					}
				?>
            </select>
        	<label class="label1" style="margin-right:0px;">Sub Menu Name:</label><input type="text" class="input1" name="submenu_name" placeholder="Enter Menu Name" style="width: 200px; margin-right:30px;">
            <label class="label1" style="margin-right:0px;">Sub Menu Link:</label><input type="text" class="input1" name="submenu_link" placeholder="Enter Menu Link" style="width: 200px; margin-right:30px;">
            <?php if(isset($result)) echo $result ?>
            <button type="submit" class="btn btn-primary" onClick="" style="float:right;margin-right: 42px;">Create</button> 
        </form>
		</div><!--sub menu create form ends here-->
       
       <!--update vertical submenu--> 
	  <blockquote>
      <p>Update Vertical Sub Menu of your site</p>
          <small>It will help <cite title="Source Title">you category changes</cite></small>
        </blockquote>
        <div class="container_navbar_manage" style="height:150px;">
        <form class="meta_tag" action="v-includes/functions/function_verticalMenu/function.upadate_submenu.php" method="get">
        	<label class="label1" style="margin-right:0px;">Select Menu</label>
            <select class="input1" name="menu_id" style="width:587px;" onchange="showSubmenu(this.value,'showsubmenu','vertical')">
            <?php
				//get the select element value of menu dynamically
				foreach($menus as $menu)
				{
					echo '<option value="'.$menu['id'].'" >'.$menu['menu_name'].'</option>';
				}
			?>
            </select>
           	<label class="label1" style="margin-right:0px;">Select Sub Menu</label>
            <div id="showsubmenu">
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
            </div>  
       	  <label class="label1" style="margin-right:0px;">Sub Menu Name:</label><input type="text" class="input1" name="submenu_name" placeholder="Enter Menu Name" style="width: 200px; margin-right:30px;">
            <label class="label1" style="margin-right:0px;">Sub Menu Link:</label><input type="text" class="input1" name="submenu_link" placeholder="Enter Menu Link" style="width: 200px; margin-right:30px;">
            <label class="label1" style="margin-right:0px;">Sub Menu Position:</label><input type="text" class="input1" name="submenu_position" placeholder="Enter Menu Position" style="width: 200px; margin-right:30px;">
            
            <?php if(isset($result)) echo $result ?>
            <button type="submit" class="btn btn-primary" onClick="" style="float:right;margin-right: 42px;">Update</button> 
        </form>
		</div> <!--update vertical submenu ends here--> 
        
        <!--delete vertical menu form-->
        <blockquote>
      		<p>Delete Vertical Menu of your site</p>
          	<small>It will help <cite title="Source Title">you category changes</cite></small>
        </blockquote>
        <div class="container_navbar_manage">
        <form class="meta_tag" action="v-includes/functions/function_verticalMenu/function.delete_verticalmenu.php" method="get">
        	<label class="label1" style="margin-right:0px;">Select Menu</label>
            <select class="input1" name="menu_id" style="width:587px;">
            <?php
				//get the select element value of menu dynamically
				foreach($menus as $menu)
				{
					echo '<option value="'.$menu['id'].'">'.$menu['menu_name'].'</option>';
				}
			?>
            </select>
            <?php if(isset($result)) echo $result ?>
            <button type="submit" class="btn btn-primary" onClick="" style="float:right;margin-right: 42px;">Delete</button> 
        </form>
        </div><!--delete vertical menu form ends here-->
        
        <blockquote>
      		<p>Delete Vertical Sub Menu of your site</p>
          	<small>It will help <cite title="Source Title">you category changes</cite></small>
        </blockquote>
        <div class="container_navbar_manage" >
        <form class="meta_tag" action="v-includes/functions/function_verticalMenu/function.delete_verticalsubmenu.php" method="get">
        	<label class="label1" style="margin-right:0px;">Select Menu</label>
            	<select class="input1" name="menu_id" style="width:587px;" onchange="showSubmenu(this.value,'showsubmenudown','vertical')">
                	<option value="#">Select One</option>
                  <?php
						//get the select element value of menu dynamically
						foreach($menus as $menu)
						{
							echo '<option value="'.$menu['id'].'">'.$menu['menu_name'].'</option>';
						}
					?>
                </select>
           	<label class="label1" style="margin-right:0px;">Select Sub Menu</label>
            <div id="showsubmenudown">
            	<select class="input1" name="submenu_id" style="width:587px;">
                  <option value="#">Select One</option>
                  <?php
				  	//codes for generating submenu dynamically
					foreach($submenus as $submenu)
					{
						echo '<option value="'.$submenu['id'].'" >'.$submenu['menu_name'].'</option>';
					}
				  ?>
                </select>
                </div>
            <?php if(isset($result)) echo $result ?>
            <button type="submit" class="btn btn-primary" onClick="" style="float:right;margin-right: 42px;">Delete</button> 
        </form>
        </div>
        
        
    </div>
    
    
</div>