<?php
	$metaName = 'fullarticle';
	$search_keyword = htmlentities($_GET['keyword'],ENT_QUOTES,"utf-8");
	//automated title from keyword
	$page_title = $search_keyword." | Elpunto de Venta";
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
            
            <!--page_content for text of every page-->
            <div class="page_content">
                <?php
					//get category details
					$getData_UI->getCategory_details($search_keyword);					
				?>
            </div><!--#page_content ends here-->
           
            <!--horizontal menu starts here-->
            <div class="hori_nav_modification">
            	<div id="hori_nav">
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
           
            <!--Add_container-->
            <div id="a_container">                
                <?php 
					//get adds according to the keywords
					$getData_UI->getSearch($search_keyword); 
				?>   
            </div><!--#add_container ends here-->
            
           
           
            <div class="clear"></div>
        </div><!--body container ends here-->
    </div><!--body_main_div-->
    
<?php
//include nav bar
include 'v-template/footer.php';
?>
