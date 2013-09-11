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
	$page_title = "USER INFORMATION";
	$metaName = 'announce';
	include 'v-template/header.php';
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
                <?php
					//get ads by email
					$getData_UI->getAds_email($_SESSION['elpunto']);
				?>
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
