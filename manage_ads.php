<?php
	session_start();
	//assume the login status to be yes
	$login_status = 1;
	//check if login or not
	if(!isset($_SESSION['elpunto']) || $_SESSION['elpunto'] == "")
	{
		session_destroy();
		//change login status
		$login_status = 0;
		header('Location: login.php');
	}
	include('v-includes/captcha/captchaVerify.php');
	$page_title = "USER INFORMATION";
	$metaName = 'announce';
	include 'v-template/header.php';
	//codes for form submit action
	if($_SERVER['REQUEST_METHOD'] == 'POST')
	{
		$contact_no = $_POST['contact_no'];
		$ad_categories = $_POST['ad_categories'];
		$update_result = $getData_UI->updateDetails_ads($contact_no,$ad_categories,$_GET['comp_name']);
	}
	
	$adsData = $getData_UI->getAd_details_owner($_GET['comp_name']);
	$categories = $getData_UI->get_categories();
	
?>
    
    <!--body main div-->
    <div id="body_main_div">
    <!--nav_bar_container starts here-->
        <div id="nav_bar_container">
        	<?php
			//include nav bar
			include 'v-template/sidebar.php';
			?>
        </div><!--#nav_bar_container ends here-->

        <!--body container starts here-->
        <div id="body_container">
            <!--page index-->
            
            
           <!--page_content for text of every page-->
            <div class="user_page_content">
                <!--contact form starts here-->
                <form class="user_form" action="" method="post">
                	<h3>Manage Ads:</h3>
                    <div class="form_element">
                        <div class="form_text" >Status:</div>
                        <div class="user_info_right" style="margin:0;"><?php if($adsData[0]['status'] == 1){echo 'Active';}else{echo 'Inactive';} ?></div>
                    </div>
                    <div class="form_element">
                        <div class="form_text" > Company:</div>
                        <div class="user_info_right" style="margin:0;"><?php echo $adsData[0]['company_name']; ?></div>
                    </div>
                    <div class="form_element">
                        <div class="form_text" > Start Date:</div>
                        <div class="user_info_right" style="margin:0;"><?php echo $adsData[0]['start_date']; ?></div>
                    </div>
                    <div class="form_element">
                        <div class="form_text"> End Date:</div>
                        <div class="user_info_right" style="margin:0;"><?php echo $adsData[0]['end_date']; ?></div>
                    </div>
                    <div class="form_element">
                        <div class="form_text">Contact No: </div>
                        <input id="" type="text" value="<?php echo $adsData[0]['company_tel']; ?>" name="contact_no" class="textbx_1">
                    </div>
                    <div class="form_element">
                        <div class="form_text">Category: </div>
                        <textarea id="" type="text"name="" class="multi_selectbx" readonly="readonly" style="background-color:#D4D4D4;"><?php echo $adsData[0]['company_keywords']; ?></textarea>
                    </div>
                    <div class="form_element">
                        <div class="form_text"> </div>
                        <select class="multi_selectbx" name="ad_categories[]" multiple="multiple">
                        	<!--<option value="home">Home</option>-->
                            <?php
								foreach($categories as $category)
								{
									echo '<option value="'.$category['menu_name'].'">'.$category['menu_name'].'</option>';
								}
							?>
                        </select>
                    </div>
                    
                    <input type="submit" value="Update" class="btn_1"/>
                    <div style="font-size:10px;color:red;margin-top:20px;float:left;"><?php if(isset($update_result)){echo $update_result;} ?></div>
                </form><!--contact form ends here-->
            </div><!--#page_content ends here-->
           <!------- user_info_outline starts here------------->
            <div class="user_info_outline">
            	<div class="form_element">
                	<div class="user_info_left"> Email:</div>
                    <div class="user_info_right"><?php echo $_SESSION['elpunto']; ?></div>
                </div>
                <div class="form_element">
                    <a href="user.php"><div class="user_info_left">All Ads</div></a>
                </div>
                <div class="form_element">
                    <a href="owner_pwd.php"><div class="user_info_left">Change Password</div></a>
                </div>
            </div>
            <!------- user_info_outline ends here------------->
             <div class="clear"></div>
        
        </div><!--body container ends here-->
    </div><!--body_main_div-->
    
<?php
//include nav bar
include 'v-template/footer.php';
?>
