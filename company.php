<?php
	include('v-includes/captcha/captchaVerify.php');
	$company_name = $_GET["comp_name"];
	if (strpos($company_name, "'") != false)
	{
		echo '<script>
				alert("Invalid search");
				window.location = "index.php";
			</script>';
	}
	$metaName = 'company';
	//automated title from keyword
	$page_title = $company_name ." | Elpunto de Venta";
	include 'v-template/header.php';
	
	
	$ad_details = $getData_UI->getAd_details($company_name);

	$getData_UI->getUserData($company_name);
	
	
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
            
            <!--company content holder starts here-->
            <div class="company_content_holder">
            	<!--left_container starts here-->
            	<div class="left_container">
                	
				<?php
					//check if the output is zero or not if zero display null------------->(1)
					if($ad_details != 'Ad not active' )
					{
				?>
                	<h2><?php echo $ad_details[0]['company_name']; ?></h2>
                    <div class="company_img"><img id="change_image" src="<?php echo $ad_details[0]['company_logo']; ?>" style="width:100%;height:100%;" /></div>
                    <div class="company_img_scroller">

                            <div class="image_carousel">
                                <div id="foo2">
                                	<?php 
										//codes for getting secondary images
										for($i = 1 ; $i <=6 ;$i++)
										{
											$varriable_name = 'sec_image_'.$i;
											if($ad_details[0][$varriable_name] != "")
											{
												echo '<img src="'.$ad_details[0][$varriable_name].'" alt="6" width="70" height="70" onclick="changeImage(this.src)" />';
											}
										}
									?>
                                </div>
                                <div class="clearfix"></div>
                                <a class="prev" id="foo2_prev" href="#"><span>prev</span></a>
                                <a class="next" id="foo2_next" href="#"><span>next</span></a>
                            </div>
                    
                     </div>
                    <div class="company_logo"><img src="<?php echo $ad_details[0]['company_logo']; ?>" style="width:100%;height:100%;" /></div>
                    <div class="company_info"><?php echo $ad_details[0]['company_address']; ?></div>
                    <div class="company_info"><?php echo $ad_details[0]['company_city']; ?></div>
                    <div class="company_info"><a href="<?php echo 'http://'.$ad_details[0]['company_website']; ?>"><?php echo $ad_details[0]['company_website']; ?></a></div>
                    <!--Random ads container-->
                   	<!--<div class="a_random_container">
                    	<div class="a_random">
                        	<img src="images/ban_1.jpg" alt="random_ads"/>
                        </div>
                    </div>-->
                </div><!--#left_container ends here-->
                <!--right_container starts here-->
            	<div class="right_container">
                	<div class="company_description"><?php echo $ad_details[0]['company_description']; ?></div>
				<h3>Contacte al proveedor</h3>
                
                <form class="company_contact_form" action="v-includes/captcha/captchaVerify.php" method="post">
                	<input type="hidden" name="id" value="1" />
                	<div class="form_element">
                    	<div class="form_text">Nombre / Apellido:</div>
                    	<input id="" type="text" value="" name="name" class="textbx_1">
                    </div>
                	<div class="form_element">
                    	<div class="form_text">Empresa: </div>
                    	<input id="" type="text" value="" name="company_name" class="textbx_1">
                    </div>
                    <div class="form_element">
                    	<div class="form_text">Departamento <br />/ Ciudad: </div>
                    	<input id="" type="text" value="" name="city" class="textbx_1">
                    </div>
                    <div class="form_element">
                    	<div class="form_text">Email: </div>
                    	<input id="" type="text" value="" name="email" class="textbx_1">
                    </div>
                    <div class="form_element">
                    	<div class="form_text">Telefono: </div>
                    	<input id="" type="text" value="" name="phone_no" class="textbx_1">
                    </div>
                    <div class="form_element">
                    	<div class="form_text">Comentarios:  </div><br/>
                    	<textarea class="textarea_1" name="comments"></textarea>
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
                <?php
					//for the above condition checkinf------------->(1)
						}
						else
						{
							echo "No ads for the search.Try again with some other keyword.";
						}
				?>
                </div><!--#right_container ends here-->
            </div><!--#company content holder-->
           
            <!--horizontal menu starts here-->
            <div class="hori_nav_modification">
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
            <div class="clear"></div>
        </div><!--body container ends here-->
    </div><!--body_main_div-->
    
<?php
//include nav bar
include 'v-template/footer.php';
?>
