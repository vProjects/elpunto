<?php
	include('../class/class.manageusers.php');
	$manageUsers = new manageusers();
	
	if(isset($GLOBALS['_POST']['aboutus'])){
		$manageUsers->updateOtherPage('aboutus', $GLOBALS['_POST']['editor1']);
		header('Location: ../../admin.php?value=otherpage');
	}
	if(isset($GLOBALS['_POST']['announcing'])){
		$manageUsers->updateOtherPage('announcing', $GLOBALS['_POST']['editor2']);	
		header('Location: ../../admin.php?value=otherpage');
	}
	if(isset($GLOBALS['_POST']['terms'])){
		$manageUsers->updateOtherPage('terms', $GLOBALS['_POST']['editor3']);	
		header('Location: ../../admin.php?value=otherpage');
	}
	if(isset($GLOBALS['_POST']['contact'])){
		$manageUsers->updateOtherPage('contact', $GLOBALS['_POST']['editor4']);	
		header('Location: ../../admin.php?value=otherpage');
	}
?>