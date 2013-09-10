<?php
	header('Content-Type: text/html; charset=utf-8');
	session_start();
	include '../class/class.manageusers.php';
	$manage_UI = new manageusers();
	
	$menus = $manage_UI->getMenu_sorted('vertical_navbar','*','level',0);
	$submenus = $manage_UI->getMenu_sorted('vertical_navbar','*','level',1);
	
	$getEmails = $manage_UI->getValue_sorted('owner_info','*','owner_email');
?>

<div id="dashboard">
	<div id="homepage">
    	<blockquote>
        	<p>Create Ads for Elpunto de Venta</p>
        	<small>It will help <cite title="Source Title">you to create ads for your site</cite></small>
        </blockquote>
		<div id="managePageContent">
        		<form class="polls" action="v-includes/functions/function.insertAds.php" method="post" enctype="multipart/form-data">
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
                      <select class="input1" name="company_email" style="margin-right: 88px;width: 514px;">
                            <option value="">Select One</option>
                            <?php
								foreach($getEmails as $email)
								{
									echo '<option value="'.$email["owner_email"].'">'.$email["owner_email"].'</option>';
								}
							?>
                        </select>

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
                      <label for="exampleInputEmail" class="polllabel" >Category</label>
                      <select class="input1" name="ad_category[]" style="margin-right: 88px;width: 514px;height: 161px" multiple="multiple">
                      		<option value="home">Home</option>
                            <?php
								//get the select element value of menu dynamically
								foreach($menus as $menu)
								{
									echo '<option value="'.html_entity_decode($menu['menu_name'],ENT_QUOTES, "utf-8").'">'.html_entity_decode($menu['menu_name'],ENT_QUOTES, "utf-8").'</option>';
								}
							?>
                            <?php
								//get the select element value of menu dynamically
								foreach($submenus as $submenu)
								{
									echo '<option value="'.html_entity_decode($submenu['menu_name'],ENT_QUOTES, "utf-8").'">'.html_entity_decode($submenu['menu_name'],ENT_QUOTES, "utf-8").'</option>';
								}
							?>
                        </select>
                    </div>
                    <!--section for uploading images-->
                    <div class="form_element_v">
                        <label class="label1" style="margin-right:0px;margin-top:5px;">Comapny Logo:</label>
                        <input type="file" class="browse_style" style="width:477px;" name="company_logo"/>
                    </div>
                    <div class="form_element_v">
                        <label class="label1" style="margin-right:0px;margin-top:5px;">Secondary Image 1:</label>
                        <input type="file" class="browse_style" style="width:477px;" name="sec_image_1"/>
                    </div>
                    <div class="form_element_v">
                        <label class="label1" style="margin-right:0px;margin-top:5px;">Secondary Image 2:</label>
                        <input type="file" class="browse_style" style="width:477px;" name="sec_image_2"/>
                    </div>
                    <div class="form_element_v">
                        <label class="label1" style="margin-right:0px;margin-top:5px;">Secondary Image 3:</label>
                        <input type="file" class="browse_style" style="width:477px;" name="sec_image_3"/>
                    </div>
                    <div class="form_element_v">
                        <label class="label1" style="margin-right:0px;margin-top:5px;">Secondary Image 4:</label>
                        <input type="file" class="browse_style" style="width:477px;" name="sec_image_4"/>
                    </div>
                    <div class="form_element_v">
                        <label class="label1" style="margin-right:0px;margin-top:5px;">Secondary Image 5:</label>
                        <input type="file" class="browse_style" style="width:477px;" name="sec_image_5"/>
                    </div>
                    <div class="form_element_v">
                        <label class="label1" style="margin-right:0px;margin-top:5px;">Secondary Image 6:</label>
                        <input type="file" class="browse_style" style="width:477px;" name="sec_image_6"/>
                    </div>
                    <button type="submit" class="btn btn-primary" style="margin-left:220px;">Submit</button>
                  </fieldset>
                </form>  		
		</div>
	</div>
</div>