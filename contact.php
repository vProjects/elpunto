<?php
	session_start();
	$metaName = 'contact';
	$page_title = "CONTACT US";
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
            <div class="page_index">Inicio » Contact us</div>
            
             <!--page_content for text of every page-->
            <div class="page_content">
				<?php $getData_UI->getPageContent('contact') ?>
            </div><!--#page_content ends here-->
            
             <!--horizontal menu starts here-->
            <div class="hori_nav_modification">
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
            
            <!--contact form starts here-->
            <form class="contact_form" action="v-includes/captcha/captchaVerify.php" method="post" id="contact_form">
            	<input type="hidden" name="form_name" value="contact_form" />
                <div class="form_element">
                    <div class="form_text">Nombre / Apellido:</div>
                    <input type="text" value="" name="name" class="textbx_1" id="c_name" onblur="checkEmptyField('c_name')">
                </div>
                <div class="form_element">
                    <div class="form_text">Empresa: </div>
                    <input id="c_company_name" type="text" value="" name="company_name" class="textbx_1" onblur="checkEmptyField('c_company_name')">
                </div>
                <div class="form_element">
                    <div class="form_text">Departamento / Ciudad: </div>
                    <input id="c_city" type="text" value="" name="city" class="textbx_1" onblur="checkEmptyField('c_city')">
                </div>
                <div class="form_element">
                    <div class="form_text">Email: </div>
                    <input id="c_email" type="text" value="" name="email" class="textbx_1" onblur="checkEmptyField('c_email')">
                </div>
                <div class="form_element">
                    <div class="form_text">Telefono: </div>
                    <input id="c_telephone" type="text" value="" name="phone_no" class="textbx_1" onblur="checkEmptyField('c_telephone')">
                </div>
                <div class="form_element">
                    <div class="form_text">Comentarios:  </div><br/>
                    <textarea class="textarea_1" name="comments" id="c_comment" onblur="checkEmptyField('c_comment')"></textarea>
                </div>
                <div class="form_element">
                    <div class="form_text">Cual es el resultado? </div><br/>
                    <div class="captcha_img">
        <img src="v-includes/captcha/image.php" alt="Click to reload image" title="Click to reload image" id="captcha" onclick="javascript:reloadCaptcha()" />
                    </div><br/>
                    <input id="c_captcha" onblur="checkEmptyField('c_captcha')" type="text"  name="secure" placeholder="what's the result?" onclick="this.value=''"  class="textbx_1">
                </div>
                <input type="button" value="Enviar" class="btn_1" id="btn_submit" onclick="validateForm('contact_form')"/>
            </form><!--contact form ends here-->
           
           
            <div class="clear"></div>
        </div><!--body container ends here-->
    </div><!--body_main_div-->
    
<?php
//include nav bar
include 'v-template/footer.php';
?>
