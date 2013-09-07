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
	}
	echo 'anand';
	//check wheather banner image are uploaded or not if yes upload the file
	if(isset($slider_1) && $slider_1 != 1)
	{
		echo 'anand';
		$filename = 'banner_1';
		$result = $uploadImage->upload_file($filename,'slider_1','../../../images/');
		$result1 = $manageData->updateValue('slider_info','slider_image',$result,1);
		echo $result;
	}
?>