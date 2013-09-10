	
    <div id="login">
           <a><img src="images/icon_login.png" alt="login" />&nbsp;&nbsp;LOGIN</a>
     </div>
     <form id="login_box" style="display:none" action="#">
		
		<div class="login_form_section">
        	<div id="close" onclick="hidemenu()">X</div>
            <div class="clear"></div>        
     	</div>
        
        <div class="login_form_section">
        	<div class="login_username"> Username</div>
            <input type="text" class="login_textbox" name=""/>
            <div class="clear"></div>
      	</div>
        
        <div class="login_form_section">
        	<div class="login_username"> Password</div>
            <input type="text" class="login_textbox" name=""/>
            <div class="clear"></div>
      	</div>
        
         <div class="login_form_section">
         	<input type="submit" id="login_submit" value="SUBMIT" />
         	<div class="clear"></div>
         </div>
      </form>  
    
<?php 
	//get horizontal nav bar
	$getData_UI->get_navbar_horizontal(); 
?> 