<?php
	include '../class/class.upload_file.php';
	//object or uploading image
	$uploadImage = new FileUpload();
	
	if($_SERVER['REQUEST_METHOD'] == 'POST')
	{
		//it contains the output of input type files
		$slider_1 = $_FILES['slider_1']['name'];
		$slider_2 = $_FILES['slider_2']['name'];
		$slider_3 = $_FILES['slider_3']['name'];
		$slider_4 = $_FILES['slider_4']['name'];
	}
	
	//check wheather banner image are uploaded or not if yes upload the file
	if($slider_1 == 1)
	{
		$filename = 'banner_1';
		$result = $uploadImage->upload_file($filename,'slider_1','../../../images/');
		echo $result;
	}
?>