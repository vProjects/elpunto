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
        	<p>Create Ads for Elpunto de Venta</p>
        	<small>It will help <cite title="Source Title">you to create ads for your site</cite></small>
        </blockquote>
		<div id="managePageContent">
        		<form class="polls" action="v-includes/functions/function.insertAds.php" method="post">
                  <fieldset>
                    <div class="form-group">
                      <label for="exampleInputEmail" class="polllabel" >Name</label>
                      <input type="text" class="form-control" name="name" id="exampleInputEmail" placeholder="Owner Name" style="width:500px">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail" class="polllabel" >Company Name</label>
                      <input type="text" class="form-control" name="company_name" id="exampleInputEmail" placeholder="Company Name" style="width:500px">

                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail" class="polllabel" >City</label>
                      <input type="text" class="form-control" name="company_city" id="exampleInputEmail" placeholder="Your City" style="width:500px">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail" class="polllabel" >Email</label>
                      <input type="text" class="form-control" name="company_email" id="exampleInputEmail" placeholder="Email" style="width:500px">

                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail" class="polllabel" >Phone</label>
                      <input type="text" class="form-control" name="company_phone" id="exampleInputEmail" placeholder="Phone No." style="width:500px">

                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail" class="polllabel" >Website</label>
                      <input type="text" class="form-control" name="company_website" id="exampleInputEmail" placeholder="Phone No." style="width:500px">

                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail" class="polllabel" >Description</label>
                      <textarea id="" class="ckeditor" placeholder="type the brief here" name="company_description" style="width:500px;"></textarea>

                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail" class="polllabel" >Duration</label>
                      <select class="input1" name="ad_duration" style="margin-right: 88px;width: 514px;">
                            <option value="6_months">6 Months</option>
                            <option value="1_year">1 year</option>
                        </select>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail" class="polllabel" >Status</label>
                      <select class="input1" name="ad_status" style="margin-right: 88px;width: 514px;">
                            <option value="1">Active</option>
                            <option value="0">In-active</option>
                        </select>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail" class="polllabel" style="width:auto;">No.of Categories</label>
                      <select class="input1" name="no_category" style="margin-right: 88px;width: 509px;;">
                            <option value="3">3</option>
                            <option value="6">6</option>
                        </select>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail" class="polllabel" >Category</label>
                      <select class="input1" name="ad_category[]" style="margin-right: 88px;width: 514px;height: 161px" multiple="multiple">
                            <?php
								//get the select element value of menu dynamically
								foreach($menus as $menu)
								{
									echo '<option value="'.$menu['menu_name'].'">'.$menu['menu_name'].'</option>';
								}
							?>
                            <?php
								//get the select element value of menu dynamically
								foreach($submenus as $submenu)
								{
									echo '<option value="'.$submenu['menu_name'].'">'.$submenu['menu_name'].'</option>';
								}
							?>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary" style="margin-left:220px;">Submit</button>
                  </fieldset>
                </form>  		
		</div>
	</div>
</div>