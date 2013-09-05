<?php
	header('Content-Type: text/html; charset=utf-8');
	session_start();
	include '../class/class.manageusers.php';
	$manage_UI = new manageusers();
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
            <div class="form_element_v" style="margin:12px 0px;">
            	<label class="label1" style="margin-right:0px;margin-top:5px;">Slider Image 2:</label>
                <input type="file" class="browse_style" style="width:560px;" name="slider_2" value=""/>
            </div>
            <div class="form_element_v" style="margin:12px 0px;">
            	<label class="label1" style="margin-right:0px;margin-top:5px;">Slider Image 3:</label>
                <input type="file" class="browse_style" style="width:560px;" name="slider_3" value=""/>
            </div>
            <div class="form_element_v" style="margin:12px 0px;">
            	<label class="label1" style="margin-right:0px;margin-top:5px;">Slider Image 4:</label>
                <input type="file" class="browse_style" style="width:560px;" name="slider_4" value=""/>
            </div>
            <button type="submit" class="btn btn-primary" onClick="" style="float:right;margin-right: 45px;margin-top: 10px;">Update</button>
        </form>
      </div>
    </div>
</div>    