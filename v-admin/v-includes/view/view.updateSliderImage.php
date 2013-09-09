<?php
	header('Content-Type: text/html; charset=utf-8');
	session_start();
	include '../class/class.manageusers.php';
	$manage_UI = new manageusers();
	$getSliders = $manage_UI->getValue('slider_info');
?>

<div id="dashboard">
	<div id="mailbox" style="height:562px">
    
     <blockquote>
          <p>Update Slider Image of your site</p>
          <small>It will help <cite title="Source Title">you in slider image changes</cite></small>
      </blockquote>
      
      <div class="container_navbar_manage">
      	<form class="meta_tag" action="v-includes/functions/function.updateSlider.php" method="post" enctype="multipart/form-data">
        	<div class="form_element_v" style="margin:12px 0px;">
            	<label class="label1" style="margin-right:0px;margin-top:5px;">Slider Image 1:</label>
                <input type="file" class="browse_style" style="width:560px;" name="slider_1" value=""/>
            </div>
            <div class="form_element_v">
                <input type="text" class="form-control textbx_css" style="width:277px;" name="slider_link_1">
            	<label class="label1" style="margin-right:0px;float:right;margin-top:5px;">Slider1 Link:</label>
                <select class="input1" name="slider_status_1" style="float:right;width:126px;margin-right:15px;">
                    <option value="1" <?php if($getSliders[0]['slider_status'] == '1'){echo 'selected="selected"';} ?>>Active</option>
                    <option value="0" <?php if($getSliders[0]['slider_status'] == '0'){echo 'selected="selected"';} ?>>In-active</option>
                </select>
            </div>
            <div class="form_element_v" style="margin:12px 0px;">
            	<label class="label1" style="margin-right:0px;margin-top:5px;">Slider Image 2:</label>
                <input type="file" class="browse_style" style="width:560px;" name="slider_2" value=""/>
            </div>
            <div class="form_element_v">
                <input type="text" class="form-control textbx_css" style="width:277px;" name="slider_link_2">
            	<label class="label1" style="margin-right:0px;float:right;margin-top:5px;">Slider2 Link:</label>
                <select class="input1" name="slider_status_2" style="float:right;width:126px;margin-right:15px;">
                    <option value="1" <?php if($getSliders[1]['slider_status'] == '1'){echo 'selected="selected"';} ?>>Active</option>
                    <option value="0" <?php if($getSliders[1]['slider_status'] == '0'){echo 'selected="selected"';} ?>>In-active</option>
                </select>
            </div>
            <div class="form_element_v" style="margin:12px 0px;">
            	<label class="label1" style="margin-right:0px;margin-top:5px;">Slider Image 3:</label>
                <input type="file" class="browse_style" style="width:560px;" name="slider_3" value=""/>
            </div>
            <div class="form_element_v">
                <input type="text" class="form-control textbx_css" style="width:277px;" name="slider_link_3">
            	<label class="label1" style="margin-right:0px;float:right;margin-top:5px;">Slider3 Link:</label>
                <select class="input1" name="slider_status_3" style="float:right;width:126px;margin-right:15px;">
                    <option value="1" <?php if($getSliders[2]['slider_status'] == '1'){echo 'selected="selected"';} ?>>Active</option>
                    <option value="0" <?php if($getSliders[2]['slider_status'] == '0'){echo 'selected="selected"';} ?>>In-active</option>
                </select>
            </div>
            <div class="form_element_v" style="margin:12px 0px;">
            	<label class="label1" style="margin-right:0px;margin-top:5px;">Slider Image 4:</label>
                <input type="file" class="browse_style" style="width:560px;" name="slider_4" value=""/>
            </div>
            <div class="form_element_v">
                <input type="text" class="form-control textbx_css" style="width:277px;" name="slider_link_4">
            	<label class="label1" style="margin-right:0px;float:right;margin-top:5px;">Slider Link:</label>
                <select class="input1" name="slider_status_4" style="float:right;width:126px;margin-right:15px;">
                    <option value="1" <?php if($getSliders[3]['slider_status'] == '1'){echo 'selected="selected"';} ?>>Active</option>
                    <option value="0" <?php if($getSliders[3]['slider_status'] == '0'){echo 'selected="selected"';} ?>>In-active</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary" onClick="" style="float:right;margin-right: 45px;margin-top: 10px;">Update</button>
        </form>
      </div>
    </div>
</div>    