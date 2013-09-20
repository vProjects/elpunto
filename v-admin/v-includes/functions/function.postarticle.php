<?php
	include('../class/class.manageusers.php');
	$manageUsers = new manageusers();
	$date = date('Y-m-d');
	
	if($GLOBALS['_POST']['submit']){
		if( $GLOBALS['_POST']['editor4'] == '' || 
			$GLOBALS['_POST']['article_heading'] == '' || 
			$GLOBALS['_POST']['aerticle_author'] == '' || 
			$GLOBALS['_POST']['article_end'] == '' ||
			$GLOBALS['_POST']['brief']=='') {
				
			 header('Location: ../../admin.php?value=afail');
		 }
		 else {
			 $end_date = $GLOBALS['_POST']['article_end'];
		 	$manageUsers->insertArticle(htmlentities($GLOBALS['_POST']['article_heading'],ENT_QUOTES, "utf-8"),htmlentities($GLOBALS['_POST']['aerticle_author'],ENT_QUOTES, "utf-8"),$end_date,htmlentities($GLOBALS['_POST']['brief'],ENT_QUOTES, "utf-8"),$GLOBALS['_POST']['editor4'],$date);
										
			header('Location: ../../admin.php?value=apass');
		 }
	}
	if($GLOBALS['_POST']['delete']){
		$manageUsers->deleteValue('article_info','id',$GLOBALS['_POST']['id']);
		header('Location: ../../admin.php?value=adel');
	}

?>