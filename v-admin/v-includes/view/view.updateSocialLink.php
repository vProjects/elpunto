<?php
	header('Content-Type: text/html; charset=utf-8');
	session_start();
	include '../class/class.manageusers.php';
	$manage_UI = new manageusers();
?>

<div id="dashboard">
	<div id="mailbox" style="height:500px">
    
     <blockquote>
          <p>Update Social Link of your site</p>
          <small>It will help <cite title="Source Title">you in social link changes</cite></small>
      </blockquote>
      
      <div class="container_navbar_manage">
      	<form action="v-includes/functions/function.updateSocial.php" class="meta_tag" method="post">
         <div style="float:left;height:30px;margin:8px 35px 0px 80px; width:38px;"><img src="img/facebook.png" height="100%" width="100%"></div>
         <input type="text" class="form-control" name="fb_link" id="exampleInputEmail" placeholder="Enter Facebook Link" style="width:500px;margin-top:10px;">
         <div style="float:left;height:30px;margin:8px 35px 0px 80px;width:38px;"><img src="img/linkedin.png" height="100%" width="100%"></div>
         <input type="text" class="form-control" name="t_link" id="exampleInputEmail" placeholder="Enter Facebook Link" style="width:500px;margin-top:10px;">
         <div style="float:left;height:30px;margin:8px 35px 0px 80px;width:38px;"><img src="img/twitter.png" height="100%" width="100%"></div>
         <input type="text" class="form-control" name="l_link" id="exampleInputEmail" placeholder="Enter Facebook Link" style="width:500px;margin-top:10px;">
          <button type="submit" class="btn btn-primary" onClick="" style="float:right;margin-right: 94px;">Update</button>
        </form>
      </div>
    </div>
</div>