<?php
	include('../class/class.manageusers.php');
	$manageUsers = new manageusers();
	
	$categoryDesc = $manageUsers->getValue_where('vertical_navbar','description','id',$GLOBALS['_GET']['cat']) ;
?>
	<textarea id="" class="ckeditor" style="width:573px; height: 200px;" name="category_description" placeholder="type the brief here"><?php echo $categoryDesc[0]['description'] ?></textarea>
