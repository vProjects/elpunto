<?php
	header('Content-Type: text/html; charset=utf-8');
	session_start();
	include '../class/class.manageusers.php';
	$manage_UI = new manageusers();
	
	$menus = $manage_UI->getMenu_sorted('vertical_navbar','*','level',0);
	$submenus = $manage_UI->getMenu_sorted('vertical_navbar','*','level',1);
?>
             

<div id="dashboard">
	<div id="mailbox" style="height:500px">
		<!--create new sub menu form--->
        <blockquote>
          <p>Insert Image of the ads</p>
          <small>It will help <cite title="Source Title">insert image for your ads</cite></small>
        </blockquote>
		<div class="container_navbar_manage">
        <form class="meta_tag" action="v-includes/functions/function.update_categoryDescription.php" method="get">
        	<div class="form_element_v">
            	<label class="label1" style="margin-right:0px;margin-top:5px;">Comapny Logo:</label>
                <input type="file" class="browse_style" style="width:560px;"/>
            </div>
            <div class="form_element_v">
            	<label class="label1" style="margin-right:0px;margin-top:5px;">Secondary Image 1:</label>
                <input type="file" class="browse_style" style="width:560px;"/>
            </div>
            <div class="form_element_v">
            	<label class="label1" style="margin-right:0px;margin-top:5px;">Secondary Image 2:</label>
                <input type="file" class="browse_style" style="width:560px;"/>
            </div>
            <div class="form_element_v">
            	<label class="label1" style="margin-right:0px;margin-top:5px;">Secondary Image 3:</label>
                <input type="file" class="browse_style" style="width:560px;"/>
            </div>
            <div class="form_element_v">
            	<label class="label1" style="margin-right:0px;margin-top:5px;">Secondary Image 4:</label>
                <input type="file" class="browse_style" style="width:560px;"/>
            </div>
            <div class="form_element_v">
            	<label class="label1" style="margin-right:0px;margin-top:5px;">Secondary Image 5:</label>
                <input type="file" class="browse_style" style="width:560px;"/>
            </div>
            <div class="form_element_v">
            	<label class="label1" style="margin-right:0px;margin-top:5px;">Secondary Image 6:</label>
                <input type="file" class="browse_style" style="width:560px;"/>
            </div>
            <?php if(isset($result)) echo $result ?>
            <button type="submit" class="btn btn-primary" onClick="" style="float:right;margin-right: 45px;margin-top: 10px;">Update</button> 
        </form>
		</div><!--sub menu create form ends here-->     
    </div>   
</div>