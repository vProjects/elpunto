<?php
	header('Content-Type: text/html; charset=utf-8');
	session_start();
	include '../class/class.manageusers.php';
	$manage_UI = new manageusers();
	
	$menus = $manage_UI->getMenu_sorted('vertical_navbar','*','level',0);
	$submenus = $manage_UI->getMenu_sorted('vertical_navbar','*','level',1);
?>
             

<div id="dashboard">
	<div id="mailbox" style="height:562px">
		<!--create new sub menu form--->
        <blockquote>
          <p>Update Category Description of your site</p>
          <small>It will help <cite title="Source Title">you in category changes</cite></small>
        </blockquote>
		<div class="container_navbar_manage">
        <form class="meta_tag" action="v-includes/functions/function.uploadBanner.php" method="post" enctype="multipart/form-data">
        	<div class="form_element_v">
            	<label class="label1" style="margin-right:0px;margin-top:5px;">Banner Image 1:</label>
                <input type="file" class="browse_style" style="width:560px;" name="banner_image_1" value=""/>
            </div>
            <div class="form_element_v">
                <input type="text" class="form-control textbx_css" name="banner_h_1">
            	<label class="label1" style="margin-right:0px;float:right;margin-top:5px;">Banner1 Height:</label>
                <input type="text" class="form-control textbx_css" name="banner_w_1">
                <label class="label1" style="margin-right:0px;float:right;margin-top:5px;">Banner1 Width:</label>
                <select class="input1" name="banner_status_1" style="float:right;width:126px;margin-right:15px;">
                	<option value="">Select Status</option>
                    <option value="1">Active</option>
                    <option value="0">In-active</option>
                </select>
            </div>
            <div class="form_element_v">
                <input type="text" class="form-control textbx_css" style="width:277px;" name="banner_link_1">
            	<label class="label1" style="margin-right:0px;float:right;margin-top:5px;">Banner1 Link:</label>
            </div>
            <div class="form_element_v">
            	<label class="label1" style="margin-right:0px;margin-top:5px;">Banner Image 2:</label>
                <input type="file" class="browse_style" style="width:560px;" name="banner_image_2" value=""/>
            </div>
            <div class="form_element_v">
                <input type="text" class="form-control textbx_css" name="banner_h_2">
            	<label class="label1" style="margin-right:0px;float:right;margin-top:5px;">Banner2 Height:</label>
                <input type="text" class="form-control textbx_css" name="banner_w_2">
                <label class="label1" style="margin-right:0px;float:right;margin-top:5px;">Banner2 Width:</label>
                <select class="input1" name="banner_status_2" style="float:right;width:126px;margin-right:15px;">
                    <option value="">Select Status</option>
                    <option value="1">Active</option>
                    <option value="0">In-active</option>
                </select>
            </div>
            <div class="form_element_v">
                <input type="text" class="form-control textbx_css" style="width:277px;" name="banner_link_2">
            	<label class="label1" style="margin-right:0px;float:right;margin-top:5px;">Banner2 Link:</label>
            </div>
            <div class="form_element_v">
            	<label class="label1" style="margin-right:0px;margin-top:5px;">Banner Image 3:</label>
                <input type="file" class="browse_style" style="width:560px;" name="banner_image_3" value=""/>
            </div>
            <div class="form_element_v">
                <input type="text" class="form-control textbx_css" name="banner_h_3">
            	<label class="label1" style="margin-right:0px;float:right;margin-top:5px;">Banner3 Height:</label>
                <input type="text" class="form-control textbx_css" name="banner_w_3">
                <label class="label1" style="margin-right:0px;float:right;margin-top:5px;">Banner3 Width:</label>
                <select class="input1" name="banner_status_3" style="float:right;width:126px;margin-right:15px;">
                    <option value="">Select Status</option>
                    <option value="1">Active</option>
                    <option value="0">In-active</option>
                </select>
            </div>
            <div class="form_element_v">
                <input type="text" class="form-control textbx_css" style="width:277px;" name="banner_link_3">
            	<label class="label1" style="margin-right:0px;float:right;margin-top:5px;">Banner3 Link:</label>
            </div>
            <div class="form_element_v">
            	<label class="label1" style="margin-right:0px;margin-top:5px;">Banner Image 4:</label>
                <input type="file" class="browse_style" style="width:560px;" name="banner_image_4" value=""/>
            </div>
            <div class="form_element_v">
                <input type="text" class="form-control textbx_css" name="banner_h_4">
            	<label class="label1" style="margin-right:0px;float:right;margin-top:5px;">Banner4 Height:</label>
                <input type="text" class="form-control textbx_css" name="banner_w_4">
                <label class="label1" style="margin-right:0px;float:right;margin-top:5px;">Banner4 Width:</label>
                <select class="input1" name="banner_status_4" style="float:right;width:126px;margin-right:15px;">
                    <option value="">Select Status</option>
                    <option value="1">Active</option>
                    <option value="0">In-active</option>
                </select>
            </div>
            <div class="form_element_v">
                <input type="text" class="form-control textbx_css" style="width:277px;" name="banner_link_4">
            	<label class="label1" style="margin-right:0px;float:right;margin-top:5px;">Banner4 Link:</label>
            </div>
            <button type="submit" class="btn btn-primary" onClick="" style="float:right;margin-right: 45px;margin-top: 10px;">Update</button> 
        </form>
		</div><!--sub menu create form ends here-->     
    </div>   
</div>