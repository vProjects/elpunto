<?php
	header('Content-Type: text/html; charset=utf-8');
	session_start();
	include '../class/class.manageusers.php';
	$manageData = new manageusers();
	
	if($_SERVER['REQUEST_METHOD'] == 'POST')
	{
		$fb_link = $_POST['fb_link'];
		$t_link = $_POST['t_link'];
		$l_link = $_POST['l_link'];
		$google = $_POST['google'];
	}
	
	if(isset($fb_link) && $fb_link != "")
	{
		$result = $manageData->updateValue('social_links','facebook',$fb_link,1);
	}
	if(isset($t_link) && $t_link != "")
	{
		$result = $manageData->updateValue('social_links','twitter',$t_link,1);
	}
	if(isset($l_link) && $l_link != "")
	{
		$result = $manageData->updateValue('social_links','linkedin',$l_link,1);
	}
	if(isset($google) && $google != "")
	{
		$result = $manageData->updateValue('social_links','google',$google,1);
	}
	
	header('Location:../../admin.php?value=updateSocial');
?>