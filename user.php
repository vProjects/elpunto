<?php
	include('v-includes/captcha/captchaVerify.php');
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
                <!--contact form starts here-->
                <form class="user_form" action="v-includes/captcha/captchaVerify.php" method="post">
                    <div class="form_element">
                        <div class="form_text">Nombre / Apellido:</div>
                        <input id="" type="text" value="" name="" class="textbx_1">
                    </div>
                    <div class="form_element">
                        <div class="form_text">Empresa: </div>
                        <input id="" type="text" value="" name="" class="textbx_1">
                    </div>
                    <div class="form_element">
                        <div class="form_text">Departamento / Ciudad: </div>
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
                        <div class="form_text">Deseo pautar en las siguientes secciones: 
						</div>
						<div class="chkbox_1">
                        	<input id="" type="checkbox" value="" name="" style="float:left;">
                            Adecuación Punto de Venta
                        </div>
                        <div class="chkbox_1">
                        	<input id="" type="checkbox" value="" name="" style="float:left;">
                            Impresión Gran Formato
                        </div>
                    </div>
                    <div class="form_element_1">
                        <div class="chkbox_1">
                        	<input id="" type="checkbox" value="" name="" style="float:left;">
                            Vitrinas Interactivas
                        </div>
                    </div>
                    <div class="form_element_1">
                        <div class="chkbox_1">
                        	<input id="" type="checkbox" value="" name="" style="float:left;">
                            Branding
                        </div>
                    </div>
                    <div class="form_element_1">
                        <div class="chkbox_1">
                        	<input id="" type="checkbox" value="" name="" style="float:left;">
                            Decoración Espacios
                        </div>
                    </div>
                    <div class="form_element_1">
                        <div class="chkbox_1">
                        	<input id="" type="checkbox" value="" name="" style="float:left;">
                            Exhibición Portátil
                        </div>
                    </div>
                    <div class="form_element_1">
                        <div class="chkbox_1">
                        	<input id="" type="checkbox" value="" name="" style="float:left;">
                            Otros servicios
                        </div>
                    </div>
                    <div class="form_element_1">
                        <div class="chkbox_1">
                        	<input id="" type="checkbox" value="" name="" style="float:left;">
                            Estanterías y Góndolas
                        </div>
                    </div>
                    <div class="form_element_1">
                        <div class="chkbox_1">
                        	<input id="" type="checkbox" value="" name="" style="float:left;">
                            Avisos y Señalización
                        </div>
                    </div>
                    <div class="form_element_1">
                        <div class="chkbox_1">
                        	<input id="" type="checkbox" value="" name="" style="float:left;">
                            Software / hardware
                        </div>
                    </div>
                    <div class="form_element_1">
                        <div class="chkbox_1">
                        	<input id="" type="checkbox" value="" name="" style="float:left;">
                            Muebles y Panelería
                        </div>
                    </div>
                    <div class="form_element_1">
                        <div class="chkbox_1">
                        	<input id="" type="checkbox" value="" name="" style="float:left;">
                            Merchandising - POP
                        </div>
                    </div>
                    <div class="form_element_1">
                        <div class="chkbox_1">
                        	<input id="" type="checkbox" value="" name="" style="float:left;">
                            E-marketing
                        </div>
                    </div>
                    <div class="form_element_1">
                        <div class="chkbox_1">
                        	<input id="" type="checkbox" value="" name="" style="float:left;">
                            Banco de imágenes
                        </div>
                    </div>
                    <div class="form_element_1">
                        <div class="chkbox_1">
                        	<input id="" type="checkbox" value="" name="" style="float:left;">
                            Logística de Eventos
                        </div>
                    </div>
                    <div class="form_element_1">
                        <div class="chkbox_1">
                        	<input id="" type="checkbox" value="" name="" style="float:left;">
                            new section
                        </div>
                    </div>
                    <div class="form_element">
                        <div class="form_text">Deseo pautar en las siguientes secciones: 
						</div>
						<div class="chkbox_1">
                        	<input id="" type="radio" value="" name="plan" style="float:left;">
                            6 meses  $ 250.000 + IVA
                        </div>
                        <div class="chkbox_1">
                        	<input id="" type="radio" value="" name="plan" style="float:left;">
                            1 año  $ 430.000 + IVA
                        </div>
                    </div>
                    <div class="form_element">
                        <div class="form_text">Logo: </div>
                        <input id="" type="file" value="" name="" class="chkbox_1">
                    </div>
                    <div class="form_element">
                        <div class="form_text">Imágenes de productos:(máximo 3) </div>
                        <input id="" type="file" value="" name="" class="chkbox_1">
                    </div>
                    <div class="form_element">
                        <div class="form_text">Comentarios:  </div><br/>
                        <textarea class="textarea_1"></textarea>
                    </div>
                    <div class="form_element">
                        <div class="form_text">Cual es el resultado? </div><br/><br/>
                        <div class="captcha_img">
        <img src="v-includes/captcha/image.php" alt="Click to reload image" title="Click to reload image" id="captcha" onclick="javascript:reloadCaptcha()" />
                        </div><br/>
                        <input id="" type="text" name="secure" value="what's the result?" onclick="this.value=''" class="textbx_1">
                    </div>
                    <input type="submit" value="Enviar" class="btn_1"/>
                </form><!--contact form ends here-->
            </div><!--#page_content ends here-->
           <!------- user_info_outline starts here------------->
            <div class="user_info_outline">
            	<div class="form_element">
                	<div class="user_info_left"> Firstname:</div>
                    <div class="user_info_right"> Lorem Ipsum</div>
                </div>
                <div class="form_element">
                	<div class="user_info_left"> Lastname:</div>
                    <div class="user_info_right"> Lorem Ipsum</div>
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
