<?php
	$page_title = "ARTICLE OF INTEREST";
	$metaName = 'fullarticle';
	$article_no = $_GET['article_no'];
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
            <div class="page_index">Inicio » Article of interest » Article Name</div>
            
            <!--page_content for text of every page-->
            <div class="page_content">
            	<!--right author nav-->
            	<?php $getData_UI->getAuthor_sidebar(); ?>
                
                
                <?php $getData_UI->getFullArticle($article_no); ?>
                
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
