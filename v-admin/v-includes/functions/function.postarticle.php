<?php
	include('../class/class.manageusers.php');
	$manageUsers = new manageusers();
	$date = date("m.d.y");;
	
	print_r($GLOBALS['_POST']);
	if($GLOBALS['_POST']['submit']){
		if( $GLOBALS['_POST']['editor2'] == '' || 
			$GLOBALS['_POST']['article_heading'] == '' || 
			$GLOBALS['_POST']['aerticle_author'] == '' || 
			$GLOBALS['_POST']['brief']=='') {
				
			 header('Location: ../../admin.php?value=afail');
		 }
		 else {
		 	$manageUsers->insertArticle($GLOBALS['_POST']['article_heading'],$GLOBALS['_POST']['aerticle_author'],
										$GLOBALS['_POST']['brief'],$GLOBALS['_POST']['editor2']);
										
			 header('Location: ../../admin.php?value=apass');
		 }
	}
	

?>