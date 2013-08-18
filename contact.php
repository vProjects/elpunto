<?php
	$page_title = "CONTACT US";
	include 'v-includes/header.php';
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
			include 'v-includes/sidebar.php';
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
            	 En El Punto de Venta somos como usted:<strong>Cero tolerantes con el spam</strong>, por ello, nunca recibira un correo publicitario nuestro y no suministraremos sus datos a ninguna empresa 
            </div><!--#page_content ends here-->
            
            <!--contact form starts here-->
            <form class="contact_form">
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
                    <div class="form_text">Comentarios:  </div><br/>
                    <textarea class="textarea_1"></textarea>
                </div>
                <div class="form_element">
                    <div class="form_text">Cual es el resultado? </div><br/>
                    <div class="captcha_img"></div><br/>
                    <input id="" type="text" value="" name="" class="textbx_1">
                </div>
                <input type="submit" value="Enviar" class="btn_1"/>
            </form><!--contact form ends here-->
           
            <!--horizontal menu starts here-->
            <div id="hori_nav_container">
            	<div id="hori_nav" style="top:-90px;">
                	<!--horiz search container-->
                    <div class="hori_search_container">
                    	<form action="#" method="get">
                        	<input type="text" class="search_txtbx" placeholder="Search..."/>
                            <input type="submit" class="search_button" value=""/>
                        </form>
                    </div>
                    <!--nav_elements-->
                    <ul>
                    	<li><a href="#">Adecuación Punto de Venta</a></li>
                        <li><a href="#">Avisos y Señalización</a></li>
                        <li><a href="#">Banco de imágenes</a></li>
                        <li><a href="#">Branding</a></li>
                        <li><a href="#">Decoración Espacios</a></li>
                        <li><a href="#">E-marketing</a></li>
                        <li><a href="#">Estanterías y Góndolas</a></li>
                        <li><a href="#">Exhibición Portátil</a></li>
                        <li><a href="#">Impresión Gran Formato</a></li>
                        <li><a href="#">Logística de Eventos</a></li>
                        <li><a href="#">Merchandising - POP</a></li>
                        <li><a href="#">Muebles y Panelería</a></li>
                        <li><a href="#">Otros servicios</a></li>
                        <li><a href="#">Software / hardware</a></li>
                        <li><a href="#">Vitrinas Interactivas</a></li>
                        <li><a href="#">new section</a></li>
                    </ul>
                </div>
            </div><!--hori meu ends here-->
            
        </div><!--body container ends here-->
    </div><!--body_main_div-->
    
<?php
//include nav bar
include 'v-includes/footer.php';
?>
