<?php
	include('../class/class.manageusers.php');
	$manageUsers = new manageusers();

	$description = $_POST['description'];
	$keywords = $_POST['keywords'];
	$page = $_POST['page'];
	
	if(isset($description)){
		echo $count  = $manageUsers->saveMetatags('description',$description,$page);
	}
	else if(isset($keywords)){
		echo $count = $manageUsers->saveMetatags('keywords',$keywords,$page);
	}
	
	header('location: ../../admin.php?value=seo');


?>