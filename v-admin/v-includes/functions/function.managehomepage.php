<?php
	include('../class/class.manageusers.php');
	$manageUsers = new manageusers();
	
	if(isset($GLOBALS['_POST']['believe'])){
		
		$manageUsers->manageHomePageContent($GLOBALS['_POST']['believe'],$GLOBALS['_POST']['first_believe'],$GLOBALS['_POST']['second_believe'],$GLOBALS['_POST']['third_believe'],$GLOBALS['_POST']['fourth_believe']);
		
		header('Location: ../../admin.php?value=homepage');
		
	}
	else if(isset($GLOBALS['_POST']['services'])){
		$manageUsers->manageHomePageContent($GLOBALS['_POST']['services'],$GLOBALS['_POST']['first_service'],$GLOBALS['_POST']['second_service'],$GLOBALS['_POST']['third_service'],$GLOBALS['_POST']['fourth_service']);
		
		header('Location: ../../admin.php?value=homepage');
		
	}
	
	else if(isset($GLOBALS['_POST']['testimonial'])){
		
		
		$manageUsers->manageHomePageContent($GLOBALS['_POST']['testimonial'],$GLOBALS['_POST']['first_testimonial'],$GLOBALS['_POST']['second_testimonial'],$GLOBALS['_POST']['third_testimonial'],$GLOBALS['_POST']['fourth_testimonial']);
		
		header('Location: ../../admin.php?value=homepage');
	}

	
?>