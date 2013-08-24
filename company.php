<?php
	include('v-includes/captcha/captchaVerify.php');
	$page_title = "El Punto de Venta";
	include 'v-template/header.php';
	
	$company_name = $_GET['comp_name'];
	$ad_details = $getData_UI->getAd_details($company_name);
?>
    <!--body main div-->
    <div id="body_main_div">
    	<!--nav_bar_container starts here-->
        <div id="nav_bar_container">
        	<div id="login">
                <a href="#"><img src="images/icon_login.png" alt="login" />&nbsp;&nbsp;LOGIN</a>
            </div>
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
            
            <!--company content holder starts here-->
            <div class="company_content_holder">
            	<!--left_container starts here-->
            	<div class="left_container">
                	<h2><?php echo $ad_details[0]['company_name']; ?></h2>
                    <div class="company_img"><img id="change_image" src="<?php echo $ad_details[0]['company_logo']; ?>" style="width:100%;height:100%;" /></div>
                    <div class="company_img_scroller">

                            <div class="image_carousel">
                                <div id="foo2">
                                    <img src="images/small/basketball.jpg" alt="basketball" width="70" height="70" onclick="changeImage(this.src)" />
                                    <img src="images/small/beachtree.jpg" alt="beachtree" width="70" height="70" />
                                    <img src="images/small/cupcackes.jpg" alt="cupcackes" width="70" height="70" />
                                    <img src="images/small/hangmat.jpg" alt="hangmat" width="70" height="70" />
                                    <img src="images/small/new_york.jpg" alt="new york" width="70" height="70" />
                                    <img src="images/small/laundry.jpg" alt="laundry" width="70" height="70" />
                                    <img src="images/small/mom_son.jpg" alt="mom son" width="70" height="70" />
                                    <img src="images/small/picknick.jpg" alt="picknick" width="70" height="70" />
                                    <img src="images/small/shoes.jpg" alt="shoes" width="70" height="70" />
                                    <img src="images/small/paris.jpg" alt="paris" width="70" height="70" />
                                    <img src="images/small/sunbading.jpg" alt="sunbading" width="70" height="70" />
                                    <img src="images/small/yellow_couple.jpg" alt="yellow couple" width="70" height="70" />
                                </div>
                                <div class="clearfix"></div>
                                <a class="prev" id="foo2_prev" href="#"><span>prev</span></a>
                                <a class="next" id="foo2_next" href="#"><span>next</span></a>
                            </div>
                    
                     </div>
                    <div class="company_logo"><img src="<?php echo $ad_details[0]['company_logo']; ?>" style="width:100%;height:100%;" /></div>
                    <div class="company_info"><?php echo $ad_details[0]['company_address']; ?></div>
                    <div class="company_info"><?php echo $ad_details[0]['company_city']; ?></div>
                    <div class="company_info"><?php echo $ad_details[0]['company_website']; ?></div>
                </div><!--#left_container ends here-->
                <!--right_container starts here-->
            	<div class="right_container">
                	<div class="company_description"><?php echo $ad_details[0]['company_description']; ?></div>
				<h3>Contacte al proveedor</h3>
                <form class="company_contact_form" action="v-includes/captcha/captchaVerify.php" method="post">
                	<div class="form_element">
                    	<div class="form_text">Nombre / Apellido:</div>
                    	<input id="" type="text" value="" name="" class="textbx_1">
                    </div>
                	<div class="form_element">
                    	<div class="form_text">Empresa: </div>
                    	<input id="" type="text" value="" name="" class="textbx_1">
                    </div>
                    <div class="form_element">
                    	<div class="form_text">Departamento <br />/ Ciudad: </div>
                    	<input id="" type="text" value="" name="" class="textbx_1">
                    </div>
                    <div class="form_element">
                    	<div class="form_text">Email: </div>
                    	<input id="" type="text" value="" name="" class="textbx_1">
                    </div>
                    <div class="form_element">
                    	<div class="form_text">Telefono: </div>
                    	<input id="" type="text" value="" name="" class="textbx_1">
                    </div>
                    <div class="form_element">
                    	<div class="form_text">Comentarios:  </div><br/>
                    	<textarea class="textarea_1"></textarea>
                    </div>
                    <div class="form_element">
                    	<div class="form_text">Cual es el resultado? </div><br/>
                        <div class="captcha_img">
        <img src="v-includes/captcha/image.php" alt="Click to reload image" title="Click to reload image" id="captcha" onclick="javascript:reloadCaptcha()" />
                        </div><br/>
                    	<input id="" type="text" name="secure" value="what's the result?" onclick="this.value=''" style="float:right;">
                    </div>
                    <input type="submit" value="Enviar" name="Enviar" class="btn_1"/>
                </form>
                </div><!--#right_container ends here-->
            </div><!--#company content holder-->
           
            <!--horizontal menu starts here-->
            <div id="hori_nav_container">
            	<div id="hori_nav" style="top:-90px;">
                	<?php
						//get the vertical search from the template folder 
						include 'v-template/vertical_search.php' 
					?>
                    <!--nav_elements-->
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
