<?php
	$page_title = "ARTICLE OF INTEREST";
	include 'v-includes/BLL.Article.php';
	$article = new BLL_Article();
	$article_no = $_GET['article_no'];
	include 'v-template/header.php';
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
            
            <!--page index-->
            <div class="page_index">Inicio » Article of interest » Article Name</div>
            
            <!--page_content for text of every page-->
            <div class="page_content">
            	<!--right author nav-->
            	<?php $article->getAuthor_sidebar(); ?>
                
                <h1>Article Name</h1>
                <!--article_container starts here-->
                <div class="article_full">
                <!--get article flong description-->
                <?php $article->getFullArticle($article_no); ?>
                </div><!--#article container ends here-->
            </div><!--#page_content ends here-->
            
           
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
include 'v-template/footer.php';
?>
