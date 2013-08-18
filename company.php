<?php
	$page_title = "HOME";
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
            
            <!--company content holder starts here-->
            <div class="company_content_holder">
            	<!--left_container starts here-->
            	<div class="left_container">
                	<h2>Company Name</h2>
                    <div class="company_img"></div>
                    <div class="company_img_scroller"></div>
                    <div class="company_logo"></div>
                    <div class="company_info">(1234) 1234 258</div>
                    <div class="company_info">Lorem IPSUM</div>
                    <div class="company_info">Lorem IPSUM</div>
                </div><!--#left_container ends here-->
                <!--right_container starts here-->
            	<div class="right_container">
                	<div class="company_description">
Para nadie es un secreto nuestro éxito en estos  9 años: Personas y talentos comprometidos en crear una de las mejores empresas de Colombia en un mediano plazo.<br/><br/>Desde nuestra fundación en el 2003, TRENDIX ha tenido un crecimiento constante gracias también a nuestros clientes, proveedores y amigos quienes han confiado en nuestra empresa.<br/><br/>Hoy en día hemos consolidado el mercado nacional y también hemos expandido nuestro mercado a los hermanos paises de Venezuela, Ecuador, Perú y Chile.
				</div>
				<h3>Contacte al proveedor</h3>
                <form class="company_contact_form">
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
                </form>
                </div><!--#right_container ends here-->
            </div><!--#company content holder-->
           
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
