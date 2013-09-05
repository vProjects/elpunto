<?php
	include('../class/class.manageusers.php');
	$manageUsers = new manageusers();
	$date = date('Y-m-d');
	
	print_r($GLOBALS['_POST']);
	if($GLOBALS['_POST']['submit']){
		if( $GLOBALS['_POST']['editor2'] == '' || 
			$GLOBALS['_POST']['article_heading'] == '' || 
			$GLOBALS['_POST']['aerticle_author'] == '' || 
			$GLOBALS['_POST']['brief']=='') {
				
			 header('Location: ../../admin.php?value=afail');
		 }
		 else {
		 	$manageUsers->insertArticle(htmlentities($GLOBALS['_POST']['article_heading'],ENT_QUOTES, "utf-8"),htmlentities($GLOBALS['_POST']['aerticle_author'],ENT_QUOTES, "utf-8"),htmlentities($GLOBALS['_POST']['brief'],ENT_QUOTES, "utf-8"),htmlentities($GLOBALS['_POST']['editor2'],ENT_QUOTES, "utf-8"),$date);
										
			 header('Location: ../../admin.php?value=apass');
		 }
	}
	if($GLOBALS['_POST']['delete']){
		$manageUsers->deleteValue('article_info','id',$GLOBALS['_POST']['id']);
		header('Location: ../../admin.php?value=adel');
		}

?>