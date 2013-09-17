<?php
	$page_title = "ARTICLE OF INTEREST";
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
        	<div class="valla_img">
                <img src="images/btn_encuentre_valla.png" alt="de villa" />
            </div>
            
            <!--page index-->
            <div class="page_index">Inicio » Announcing Here</div>
            
           <!--page_content for text of every page-->
            <div class="page_content">
				<?php $getData_UI->getPageContent('announcing') ?>
            	 <!--Es muy sencillo.<br/><br/><br/>Diligencie el siguiente formulario y una vez su anuncio esté publicado le enviaremos la factura.<br/><br/><br/>Si despues de publicado el aviso cambia de opinión, no hay ningun problema, lo retiramos y usted no habra incurrido en ningún gasto ni habra adquirido ningún compromiso<br/><br/><br/>Es MUY económico.  Adquiéralo ahora  e incremente sus ventas !!<br/><br/>
                 <div class="policy_container_1">
                     <ul>
                        <li>6 meses :$ 250.000 + IVA</li>
                        <li style="margin-top:80px;">1 año :$ 430.000 + IVA</li>
                     </ul>
                 </div>
                 <div class="policy_container_2">
                     <ul>
                        <li>Su anuncio en tres (3 ) secciones</li>
                        <li>3 fotos de productos o servicios</li>
                        <li>Sus palabras claves para posicionar su anuncio en google</li>
                        <li>Formulario de contacto directo</li>
                        <li>Link a su pagina web</li>
                        <li>Estadisticas de visita</li>
                    </ul>
                    <ul>
                        <li>Su anuncio en cinco ( 5 ) secciones</li>
                        <li>6 fotos de productos o servicios</li>
                        <li>2 envios de correo masivo</li>
                        <li>Sus palabras claves para posicionar su anuncio en google</li>
                        <li>Formulario de contacto directo</li>
                        <li>Link a su pagina web</li>
                        <li>Estadisticas de visita</li>
                    </ul>
            	</div>
                
                <div class="content_form">Como pagar?  Tambien Muy fácil: Con Tarjeta Crédito  / Débito / Consignación</div>-->
            
                <!--contact form starts here-->
                
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
            <div class="clear"></div>
        </div><!--body container ends here-->
    </div><!--body_main_div-->
    
<?php
//include nav bar
include 'v-template/footer.php';
?>
