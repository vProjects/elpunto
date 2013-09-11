<?php
	if(!isset($login_status) || empty($login_status))
	{
		//varriable used to check the login ststus
		$login_status = 0;
	}
	if($login_status == 0)
	{
		echo '<div id="login"><a href="login.php">&nbsp;&nbsp;LOGIN</a></div>';
		//get horizontal nav bar
		$getData_UI->get_navbar_horizontal(); 				
	}
	elseif($login_status == 1)
	{
		echo '<div id="login"><a href="v-includes/logout.php">&nbsp;&nbsp;LOGOUT</a></div>';
	}
?>
     
