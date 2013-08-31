<?php
	header('Content-Type: text/html; charset=iso-8859-1');
	session_start();
	include '../class/class.manageusers.php';
	$manage_UI = new manageusers();
	
	$menus = $manage_UI->getMenu_sorted('vertical_navbar','*','level',0);
	$submenus = $manage_UI->getMenu_sorted('vertical_navbar','*','level',1);
	
	//get value for fetching
	//$search_value = $_GET['keyword'];
	//get value according to the search result
	$company_details = $manage_UI->getvalue_search('company_info','*','company_name','Vyrazu');
?>

<div id="dashboard">
	<div id="homepage">
    	<blockquote>
        	<p>Update Ads for Elpunto de Venta</p>
        	<small>It will help <cite title="Source Title">you to update ads for your site</cite></small>
        </blockquote>
        <!--search box-->
        <div class="form-group" style="margin-top:20px;">
        	<form name="search_ads_update">
              <label for="exampleInputEmail" class="polllabel" style="width:auto;margin-left:50px;">Search by Company or Owner name</label>
              <input type="text" class="form-control" name="search_value" id="exampleInputEmail" placeholder="Enter Company Name or Owner Name" style="width:275px" value="<?php //echo $search_value; ?>">
              <input type="button" class="btn btn-warning" value="search" style="margin-top:-11px;" onclick="serach_ads_f()"/>
          	</form>
        </div>
        
		<div id="managePageContent">
        		<form class="polls" action="v-includes/functions/function.updateAds.php" method="post">
                  <fieldset>
                    <div class="form-group">
                      <label for="exampleInputEmail" class="polllabel" >Name</label>
                      <input type="text" class="form-control" name="name" id="exampleInputEmail" placeholder="Owner Name" value="<?php echo $company_details[0]['owner_name']; ?>" style="width:500px">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail" class="polllabel" >Company Name</label>
                      <input type="text" class="form-control" name="company_name" id="exampleInputEmail" placeholder="Company Name" style="width:500px" value="<?php echo $company_details[0]['company_name']; ?>">

                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail" class="polllabel" >City</label>
                      <input type="text" class="form-control" name="company_city" id="exampleInputEmail" placeholder="Your City" style="width:500px" value="<?php echo $company_details[0]['company_city']; ?>">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail" class="polllabel" >Email</label>
                      <input type="text" class="form-control" name="company_email" id="exampleInputEmail" placeholder="Email" style="width:500px" value="<?php echo $company_details[0]['company_email']; ?>">

                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail" class="polllabel" >Phone</label>
                      <input type="text" class="form-control" name="company_phone" id="exampleInputEmail" placeholder="Phone No." style="width:500px" value="<?php echo $company_details[0]['company_tel']; ?>">

                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail" class="polllabel" >Website</label>
                      <input type="text" class="form-control" name="company_website" id="exampleInputEmail" placeholder="Phone No." style="width:500px" value="<?php echo $company_details[0]['company_website']; ?>">

                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail" class="polllabel" >Description</label>
                      <textarea id="" class="ckeditor" placeholder="type the brief here" name="company_description" style="width:500px;" ><?php echo $company_details[0]['company_description']; ?></textarea>

                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail" class="polllabel" >Duration</label>
                      <input type="text" class="form-control" name="ad_duration" id="exampleInputEmail" readonly="readonly" style="width:500px" value="<?php if($company_details[0]['ad_duration'] == '6_months'){echo '6 months';} else{echo '1 year';} ?>">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail" class="polllabel" >Start Date</label>
                      <input type="text" class="form-control" name="start_date" id="exampleInputEmail" style="width:500px" value="<?php echo $company_details[0]['start_date']; ?>" readonly="readonly">

                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail" class="polllabel" >End Date</label>
                      <input type="text" class="form-control" name="end_date" id="exampleInputEmail" style="width:500px" value="<?php echo $company_details[0]['end_date']; ?>">

                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail" class="polllabel" >Status</label>
                      <select class="input1" name="ad_status" style="margin-right: 88px;width: 514px;">
                            <option value="1" <?php if($company_details[0]['status'] == '1'){echo 'selected="selected"';} ?>>Active</option>
                            <option value="0" <?php if($company_details[0]['status'] == '0'){echo 'selected="selected"';} ?>>In-active</option>
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
                      <input type="text" class="form-control" id="exampleInputEmail" placeholder="Phone No." style="width:500px" value="<?php echo $company_details[0]['company_keywords']; ?>" readonly="readonly">
                      <select class="input1" name="ad_category[]" style="margin-left: 116px;width: 514px;height: 161px" multiple="multiple">
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
                    <input type="hidden" value="<?php echo $company_details[0]['id']; ?>" name="id"/>
                    <button type="submit" class="btn btn-primary" style="margin-left:220px;">Update</button>
                  </fieldset>
                </form>  		
		</div>
	</div>
</div>