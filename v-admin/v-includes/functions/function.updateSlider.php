<?php
	include '../class/class.upload_file.php';
	//object or uploading image
	$uploadImage = new FileUpload();
	include '../class/class.manageusers.php';
	//object for managing data
	$manageData = new manageusers();
	
	if($_SERVER['REQUEST_METHOD'] == 'POST')
	{
		//it contains the output of input type files
		$slider_1 = $_FILES['slider_1']['name'];
		$slider_2 = $_FILES['slider_2']['name'];
		$slider_3 = $_FILES['slider_3']['name'];
		$slider_4 = $_FILES['slider_4']['name'];
		//get values of the slider link
		$slider_link_1 = $_POST['slider_link_1'];
		$slider_link_2 = $_POST['slider_link_2'];
		$slider_link_3 = $_POST['slider_link_3'];
		$slider_link_4 = $_POST['slider_link_4'];
		//get values of the status
		$slider_status_1 = $_POST['slider_status_1'];
		$slider_status_2 = $_POST['slider_status_2'];
		$slider_status_3 = $_POST['slider_status_3'];
		$slider_status_4 = $_POST['slider_status_4'];
	}
	//check wheather banner image are uploaded or not if yes upload the file
	if(!empty($slider_1))
	{
		$filename = 'banner_1';
		$result = $uploadImage->upload_file($filename,'slider_1','../../../images/');
		$result1 = $manageData->updateValue('slider_info','slider_image',$result,1);
		echo $result;
	}
	if(!empty($slider_2))
	{
		$filename = 'banner_2';
		$result = $uploadImage->upload_file($filename,'slider_2','../../../images/');
		$result1 = $manageData->updateValue('slider_info','slider_image',$result,2);
		echo $result;
	}
	if(!empty($slider_3))
	{
		$filename = 'banner_3';
		$result = $uploadImage->upload_file($filename,'slider_3','../../../images/');
		$result1 = $manageData->updateValue('slider_info','slider_image',$result,3);
		echo $result;
	}
	if(!empty($slider_4))
	{
		$filename = 'banner_4';
		$result = $uploadImage->upload_file($filename,'slider_4','../../../images/');
		$result1 = $manageData->updateValue('slider_info','slider_image',$result,4);
		echo $result;
	}
	//update the slider the links
	if(isset($slider_link_1) && $slider_link_1 != "")
	{
		$result = $manageData->updateValue('slider_info','slider_link',$slider_link_1,1);
		echo $result;
	}
	if(isset($slider_link_2) && $slider_link_2 != "")
	{
		$result = $manageData->updateValue('slider_info','slider_link',$slider_link_2,2);
		echo $result;
	}
	if(isset($slider_link_3) && $slider_link_3 != "")
	{
		$result = $manageData->updateValue('slider_info','slider_link',$slider_link_3,3);
		echo $result;
	}
	if(isset($slider_link_4) && $slider_link_4 != "")
	{
		$result = $manageData->updateValue('slider_info','slider_link',$slider_link_4,4);
		echo $result;
	}
	//update the slider status
	if(isset($slider_status_1) && $slider_status_1 != "")
	{
		$result = $manageData->updateValue('slider_info','slider_status',$slider_status_1,1);
		echo $result;
	}
	if(isset($slider_status_2) && $slider_status_2 != "")
	{
		$result = $manageData->updateValue('slider_info','slider_status',$slider_status_2,2);
		echo $result;
	}
	if(isset($slider_status_3) && $slider_status_3 != "")
	{
		$result = $manageData->updateValue('slider_info','slider_status',$slider_status_3,3);
		echo $result;
	}
	if(isset($slider_status_4) && $slider_status_4 != "")
	{
		$result = $manageData->updateValue('slider_info','slider_status',$slider_status_4,4);
		echo $result;
	}
?>