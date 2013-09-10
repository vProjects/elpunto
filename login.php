<?php
	$page_title = "ARTICLE OF INTEREST";
	$metaName = '';
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
        	<div class="valla_img">
                <img src="images/btn_encuentre_valla.png" alt="de villa" />
            </div>
            
            <!--page index-->
            <div class="page_index"></div>
            
            <!--page_content for text of every page-->
            <div class="page_content">
            	<!--right author nav-->
            <div id="attract_user">
            </div>
                 <form id="login_box" style="display:block" action="#">
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
                
            </div><!--#page_content ends here-->
           
            <!--horizontal menu starts here-->
            <div id="hori_nav_container">
            	<div id="hori_nav" style="top:-90px;">
                	<?php
						//get the vertical search from the template folder 
						include 'v-template/vertical_search.php' 
					?>
                    <?php
                        //get the vertical navbar 
                        $getData_UI->get_navbar_vertical(); 
                    ?> 
                </div>
            </div><!--hori meu ends here-->
            
        </div><!--body container ends here-->
    </div><!--body_main_div-->
 
























<?php
//include nav bar
include 'v-template/footer.php';
?>