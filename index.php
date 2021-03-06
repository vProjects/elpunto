<?php
	$metaName = 'inicio';
	$page_title = "HOME";
	$search_keyword = 'Home';
	
	//include header file
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
            <!--slider container starts-->
            <div id="slider_container">
                <div id="featured"> 
                	<?php
						$getData_UI->getSlider_images();
					?>
                </div>
            </div><!--slider container ends here-->
            
            
            
            <!--Add_container-->
            <div id="a_container">  
            	<?php
					//get dynamic banners
					$getData_UI->getDynamicAds();
					//get banner images
					$getData_UI->getbanners();
				?>
            	<?php
					
					//get ads according to the keywords
					$getData_UI->getSearch($search_keyword); 
				?>   
            </div><!--#add_container ends here-->
            
            <!--horizontal menu starts here-->
            <div id="hori_nav_container">
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
            <div class="clear"></div>
        </div><!--body container ends here-->
    </div><!--body_main_div-->
    
<?php
//include nav bar
include 'v-template/footer.php';
?>