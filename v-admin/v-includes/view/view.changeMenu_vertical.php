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
        <form class="meta_tag" action="v-includes/functions/function.insert_verticalmenu.php" method="get">
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
        <form class="meta_tag" action="v-includes/functions/function.upadate_menu.php" method="get">
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
        <form class="meta_tag" action="v-includes/functions/function.insert_verticalsubmenu.php" method="get">
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
        	<label class="label1" style="margin-right:0px;">Sub Menu Name:</label><input type="text" class="input1" name="submenu_name" placeholder="Enter Menu Name" style="width: 200px; margin-right:30px;">
            <label class="label1" style="margin-right:0px;">Sub Menu Link:</label><input type="text" class="input1" name="submenu_link" placeholder="Enter Menu Link" style="width: 200px; margin-right:30px;">
            <?php if(isset($result)) echo $result ?>
            <button type="submit" class="btn btn-primary" onClick="" style="float:right;margin-right: 42px;">Create</button> 
        </form>
		</div><!--sub menu create form ends here-->
        
	  <blockquote>
      <p>Update Vertical Sub Menu of your site</p>
          <small>It will help <cite title="Source Title">you category changes</cite></small>
        </blockquote>
        <div class="container_navbar_manage" style="height:150px;">
        <form class="meta_tag" action="v-includes/functions/function.changepassword.php" method="post">
        	<label class="label1" style="margin-right:0px;">Select Menu</label>
            <select class="input1" name="page" style="width:587px;" onchange="showSubmenu(this.value)">
            <?php
				//get the select element value of menu dynamically
				foreach($menus as $menu)
				{
					echo '<option value="'.$menu['id'].'" >'.$menu['menu_name'].'</option>';
				}
			?>
            </select>
           	<label class="label1" style="margin-right:0px;">Select Sub Menu</label>
             <div id="pqr"></div>
            	<select class="input1" name="page" style="width:587px;">
                  <option value="index">Home Page</option>
                  <option value="portfolio">Portfolio</option>
                  <option value="login">Login</option>
                  <option value="services">Services</option>
                  <option value="about">About</option>
                  <option value="contact">Contact</option>
                </select>
              
       	  <label class="label1" style="margin-right:0px;">Menu Name:</label><input type="text" class="input1" name="oldPassword" placeholder="Enter Menu Name" style="width: 200px; margin-right:30px;">
            <label class="label1" style="margin-right:0px;">Menu Link:</label><input type="text" class="input1" name="oldPassword1" placeholder="Enter Menu Link" style="width: 200px; margin-right:30px;">
            <label class="label1" style="margin-right:0px;">Menu Position:</label><input type="text" class="input1" name="oldPassword1" placeholder="Enter Menu Position" style="width: 200px; margin-right:30px;">
            
            <?php if(isset($result)) echo $result ?>
            <button type="submit" class="btn btn-primary" onClick="" style="float:right;margin-right: 42px;">Update</button> 
        </form>
		</div> 
        
        <!--delete vertical menu form-->
        <blockquote>
      		<p>Delete Vertical Menu of your site</p>
          	<small>It will help <cite title="Source Title">you category changes</cite></small>
        </blockquote>
        <div class="container_navbar_manage">
        <form class="meta_tag" action="v-includes/functions/function.delete_verticalmenu.php" method="get">
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
        <form class="meta_tag" action="v-includes/functions/function.changepassword.php" method="post">
        	<label class="label1" style="margin-right:0px;">Select Menu</label>
            	<select class="input1" name="page" style="width:587px;">
                  <?php
						//get the select element value of menu dynamically
						foreach($menus as $menu)
						{
							echo '<option value="'.$menu['id'].'">'.$menu['menu_name'].'</option>';
						}
					?>
                </select>
           	<label class="label1" style="margin-right:0px;">Select Sub Menu</label>
            	<select class="input1" name="page" style="width:587px;">
                  <option value="index">Home Page</option>
                  <option value="portfolio">Portfolio</option>
                  <option value="login">Login</option>
                  <option value="services">Services</option>
                  <option value="about">About</option>
                  <option value="contact">Contact</option>
                </select>
            <?php if(isset($result)) echo $result ?>
            <button type="submit" class="btn btn-primary" onClick="" style="float:right;margin-right: 42px;">Update</button> 
        </form>
        </div>
        
        
    </div>
    
    
</div>