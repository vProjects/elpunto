<?php
	header('Content-Type: text/html; charset=utf-8');
	session_start();
	include '../class/class.manageusers.php';
	$manage_UI = new manageusers();
	
	$menus = $manage_UI->getMenu_sorted('vertical_navbar','*','level',0);
	$submenus = $manage_UI->getMenu_sorted('vertical_navbar','*','level',1);
	
	//get value for fetching
	$search_value = htmlentities($_GET['keyword'],ENT_QUOTES,"utf-8");
	//get value according to the search result
	$company_details = $manage_UI->getvalue_search('company_info','*','company_name',$search_value);
	//get the emails for the email field from owner_info table
	$getEmails = $manage_UI->getValue_sorted('owner_info','*','owner_email');
	if(!empty($company_details[0]['company_email']))
	{
		//getDetails according to email from owner info table according to email
		$getDetails = $manage_UI->getValue_where('owner_info',"*",'owner_email',$company_details[0]['company_email']);
	}
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
              <input type="text" class="form-control" name="search_value" id="search_keyword" placeholder="Enter Company Name or Owner Name" style="width:275px" value="<?php echo $search_value; ?>">
              <input type="button" class="btn btn-warning" value="search" style="margin-top:-11px;" onclick="serach_ads_f('search_keyword')"/>
        </div>
        
		<div id="managePageContent">
        		<form class="polls" action="v-includes/functions/function.updateAds.php" method="post" enctype="multipart/form-data">
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
                      <select class="input1" name="company_email" style="margin-right: 88px;width: 514px;">
                            <option value="">Select One</option>
                            <?php
								foreach($getEmails as $email)
								{
									echo '<option value="'.$email["owner_email"].'"';
									if($email["owner_email"] == $company_details[0]['company_email'])
									{
										echo 'selected="selected"';
									}
									echo '>'.$email["owner_email"].'</option>';
								}
							?>
                      </select>

                    </div>
                    <!--values fetched from owner info table-->
                    <div class="form-group">
                      <label for="exampleInputEmail" class="polllabel" style="font-size:12px;">Owner Address 1</label>
                      <input type="text" class="form-control" name="owner_address_1" id="exampleInputEmail" placeholder="Owner Address 1" style="width:500px" value="<?php if(isset($getDetails)){echo $getDetails[0]['owner_address_1'];} ?>">

                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail" class="polllabel" style="font-size:12px;">Owner Address 2</label>
                      <input type="text" class="form-control" name="owner_address_2" id="exampleInputEmail" placeholder="Owner Address 2" style="width:500px" value="<?php if(isset($getDetails)){echo $getDetails[0]['owner_address_2'];} ?>">

                    </div>
                    <!--values fetched from owner info table ends here-->
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
                      <label for="exampleInputEmail" class="polllabel" >Category</label>
                      <input type="text" class="form-control" id="exampleInputEmail" placeholder="Phone No." style="width:500px" value="<?php echo $company_details[0]['company_keywords']; ?>" readonly="readonly">
                      <select class="input1" name="ad_category[]" style="margin-left: 116px;width: 514px;height: 161px" multiple="multiple">
                      		<option value="home">Home</option>
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
                    <div class="form-group">
                      <label for="exampleInputEmail" class="polllabel" >Company Ads</label>
                      <input type="text" class="form-control" value='<?php echo $company_details[0]['company_ads']; ?>' name="company_ads" id="exampleInputEmail" placeholder="Put your codes here." style="width:500px" >
                    </div>
                    <input type="hidden" value="<?php echo $company_details[0]['id']; ?>" name="id"/>
                    <button type="submit" class="btn btn-primary" style="margin-left:220px;">Update</button>
                  </fieldset>
                </form>  		
		</div>
	</div>
</div>