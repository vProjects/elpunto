<?php
	session_start();
	


?>

<div id="dashboard">
	<div id="mailbox" style="height:840px">
    	<blockquote>
          <p>Create Vertical Menu of your site</p>
          <small>It will help <cite title="Source Title">you category changes</cite></small>
        </blockquote>
		<div class="container_navbar_manage">
        <form class="meta_tag" action="v-includes/functions/function.changepassword.php" method="post">
        	<label class="label1" style="margin-right:0px;">Menu Name:</label><input type="text" class="input1" name="oldPassword" placeholder="Enter Menu Name" style="width: 200px; margin-right:30px;">
            <label class="label1" style="margin-right:0px;">Menu Link:</label><input type="text" class="input1" name="oldPassword1" placeholder="Enter Menu Link" style="width: 200px; margin-right:30px;">
            <?php if(isset($result)) echo $result ?>
            <button type="submit" class="btn btn-primary" onClick="" style="float:right;margin-right: 42px;">Create</button> 
        </form>
		</div> 
        <blockquote>
          <p>Update Vertical Menu of your site</p>
          <small>It will help <cite title="Source Title">you category changes</cite></small>
        </blockquote>
        <div class="container_navbar_manage" style="height: 130px;">
        <form class="meta_tag" action="v-includes/functions/function.changepassword.php" method="post">
        	<label class="label1" style="margin-right:0px;">Select Menu</label>
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
        
        <blockquote>
          <p>Create Vertical Sub Menu of your site</p>
          <small>It will help <cite title="Source Title">you category changes</cite></small>
        </blockquote>
		<div class="container_navbar_manage">
        <form class="meta_tag" action="v-includes/functions/function.changepassword.php" method="post">
        	<label class="label1" style="margin-right:0px;">Menu Name:</label><input type="text" class="input1" name="oldPassword" placeholder="Enter Menu Name" style="width: 200px; margin-right:30px;">
            <label class="label1" style="margin-right:0px;">Menu Link:</label><input type="text" class="input1" name="oldPassword1" placeholder="Enter Menu Link" style="width: 200px; margin-right:30px;">
            <?php if(isset($result)) echo $result ?>
            <button type="submit" class="btn btn-primary" onClick="" style="float:right;margin-right: 42px;">Create</button> 
        </form>
		</div> 
        <blockquote>
          <p>Update Vertical Sub Menu of your site</p>
          <small>It will help <cite title="Source Title">you category changes</cite></small>
        </blockquote>
        <div class="container_navbar_manage">
        <form class="meta_tag" action="v-includes/functions/function.changepassword.php" method="post">
        	<label class="label1" style="margin-right:0px;">Select Menu</label>
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
    </div>
    
    
</div>