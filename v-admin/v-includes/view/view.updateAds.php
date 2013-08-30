<?php
	header('Content-Type: text/html; charset=iso-8859-1');
	session_start();
	include '../class/class.manageusers.php';
	$manage_UI = new manageusers();
	
	$menus = $manage_UI->getMenu_sorted('vertical_navbar','*','level',0);
	$submenus = $manage_UI->getMenu_sorted('vertical_navbar','*','level',1);
?>

<div id="dashboard">
	<div id="homepage">
    	<blockquote>
        	<p>Update Ads for Elpunto de Venta</p>
        	<small>It will help <cite title="Source Title">you to update ads for your site</cite></small>
        </blockquote>
        <!--search box-->
        <div class="form-group" style="margin-top:20px;">
          <label for="exampleInputEmail" class="polllabel" style="width:auto;margin-left:50px;">Search by Company or Owner name</label>
          <input type="text" class="form-control" name="first_believe" id="exampleInputEmail" placeholder="Enter 1st believe" style="width:275px">
          <input type="button" class="btn btn-warning" value="search" style="margin-top:-11px;"/>
        </div>
        
		<div id="managePageContent">
        		<form class="polls" action="v-includes/functions/function.managehomepage.php" method="post">
                  <fieldset>
                    <div class="form-group">
                      <input type="hidden" name="believe" value="believe" />
                      <label for="exampleInputEmail" class="polllabel" >Name</label>
                      <input type="text" class="form-control" name="first_believe" id="exampleInputEmail" placeholder="Enter 1st believe" style="width:500px">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail" class="polllabel" >Company Name</label>
                      <input type="text" class="form-control" name="second_believe" id="exampleInputEmail" placeholder="Enter 2nd Believe" style="width:500px">

                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail" class="polllabel" >City</label>
                      <input type="text" class="form-control" name="third_believe" id="exampleInputEmail" placeholder="Enter 3rd Believe" style="width:500px">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail" class="polllabel" >Email</label>
                      <input type="text" class="form-control" name="fourth_believe" id="exampleInputEmail" placeholder="Enter 4th Believe" style="width:500px">

                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail" class="polllabel" >Phone</label>
                      <input type="text" class="form-control" name="fourth_believe" id="exampleInputEmail" placeholder="Enter 4th Believe" style="width:500px">

                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail" class="polllabel" >Description</label>
                      <textarea id="" class="ckeditor" placeholder="type the brief here" name="brief" style="width:500px;"></textarea>

                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail" class="polllabel" >Duration</label>
                      <select class="input1" name="page" style="margin-right: 88px;width: 514px;">
                            <option value="">Select One</option>
                            <option value="6_months">6 Months</option>
                            <option value="1_year">1 year</option>
                        </select>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail" class="polllabel" >Status</label>
                      <select class="input1" name="page" style="margin-right: 88px;width: 514px;">
                            <option value="active">Active</option>
                            <option value="in_active">In-active</option>
                        </select>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail" class="polllabel" >Category</label>
                      <select class="input1" name="page" style="margin-right: 88px;width: 514px;" multiple="multiple">
                            <?php
								//get the select element value of menu dynamically
								foreach($menus as $menu)
								{
									echo '<option value="'.$menu['id'].'">'.$menu['menu_name'].'</option>';
								}
							?>
                        </select>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail" class="polllabel" >Sub Categories</label>
                      <select class="input1" name="page" style="margin-right: 88px;width: 514px;" multiple="multiple">
                            <?php
								//get the select element value of menu dynamically
								foreach($submenus as $submenu)
								{
									echo '<option value="'.$submenu['id'].'">'.$submenu['menu_name'].'</option>';
								}
							?>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary" style="margin-left:220px;">Update</button>
                  </fieldset>
                </form>  		
		</div>
	</div>
</div>