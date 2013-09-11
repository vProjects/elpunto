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
	
	if($_SERVER['REQUEST_METHOD'] == 'POST')
	{
		$old_password = $_POST['old_password'];
		$new_password = $_POST['new_password'];
		$new_password_r = $_POST['new_password_r'];
		$update_result = $getData_UI->updatePassword($old_password,$new_password,$new_password_r,$_SESSION['elpunto']);
	}
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
                	<h3>Change your password:</h3>
                    <div class="form_element">
                        <div class="form_text">Old Password:</div>
                        <input id="" type="text" name="old_password" class="textbx_1">
                    </div>
                    <div class="form_element">
                        <div class="form_text">New Password: </div>
                        <input id="" type="text" name="new_password" class="textbx_1">
                    </div>
                    <div class="form_element">
                        <div class="form_text">Re-type Password: </div>
                        <input id="" type="text" name="new_password_r" class="textbx_1">
                    </div>
                    <input type="submit" value="Enviar" class="btn_1"/>
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
                    <a href="#"><div class="user_info_left">Change Password</div></a>
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
