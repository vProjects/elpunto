<?php
	include('../class/class.manageusers.php');
	$manageUsers = new manageusers();
	
	if($_SERVER['REQUEST_METHOD'] == 'POST')
	{
		$article_heading = htmlentities($_POST['article_heading'],ENT_QUOTES, "utf-8");
		$article_author = htmlentities($_POST['article_author'],ENT_QUOTES, "utf-8");
		$article_end = $_POST['article_end'];
		$brief = htmlentities($_POST['brief'],ENT_QUOTES, "utf-8");
		$article_description = $_POST['editor7'];
		$article_id = $_POST['article_id'];
	}
	//update article heading
	if(isset($article_heading) && !empty($article_heading))
	{
		$result = $manageUsers->updateValue('article_info','article_title',$article_heading,$article_id);
	}
	//update article article_author
	if(isset($article_author) && !empty($article_author))
	{
		$result = $manageUsers->updateValue('article_info','article_author',$article_author,$article_id);
	}
	//update article article_end
	if(isset($article_end) && !empty($article_end))
	{
		$result = $manageUsers->updateValue('article_info','end_date',$article_end,$article_id);
	}
	//update article brief
	if(isset($brief) && !empty($brief))
	{
		$result = $manageUsers->updateValue('article_info','article_brief',$brief,$article_id);
	}
	//update article article_description
	if(isset($article_description) && !empty($article_description))
	{
		$result = $manageUsers->updateValue('article_info','article_description',$article_description,$article_id);
	}
	
	header('Location: ../../admin.php?value=aupdate&article_id='.$article_id);
?>