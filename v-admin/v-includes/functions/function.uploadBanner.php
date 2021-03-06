<?php
	include '../class/class.upload_file.php';
	//object or uploading image
	$uploadImage = new FileUpload();
	include '../class/class.manageusers.php';
	//object for managing data
	$manageData = new manageusers();
	//filename is a varriable which contains the name of the banner image
	$filename = '';
	if($_SERVER['REQUEST_METHOD'] == 'POST')
	{
		$banner_h_1 = $_POST['banner_h_1'];
		$banner_h_2 = $_POST['banner_h_2'];
		$banner_h_3 = $_POST['banner_h_3'];
		$banner_h_4 = $_POST['banner_h_4'];
		$banner_w_1 = $_POST['banner_w_1'];
		$banner_w_2 = $_POST['banner_w_2'];
		$banner_w_3 = $_POST['banner_w_3'];
		$banner_w_4 = $_POST['banner_w_4'];
		//it contains the output of input type files
		$banner_image_1 = $_FILES['banner_image_1']['name'];
		$banner_image_2 = $_FILES['banner_image_2']['name'];
		$banner_image_3 = $_FILES['banner_image_3']['name'];
		$banner_image_4 = $_FILES['banner_image_4']['name'];
		//it contains input of banner status and links
		$banner_status_1 = $_POST['banner_status_1'];
		$banner_status_2 = $_POST['banner_status_2'];
		$banner_status_3 = $_POST['banner_status_3'];
		$banner_status_4 = $_POST['banner_status_4'];
		$banner_link_1 = $_POST['banner_link_1'];
		$banner_link_2 = $_POST['banner_link_2'];
		$banner_link_3 = $_POST['banner_link_3'];
		$banner_link_4 = $_POST['banner_link_4'];
		//codes for home page dynamic ads
		$dynamic_banner_1 = mysql_escape_string($_POST['dynamic_banner_1']);
		$dynamic_banner_2 = mysql_escape_string($_POST['dynamic_banner_2']);
	}
	//check wheather banner image are uploaded or not if yes upload the file
	if(!empty($banner_image_1))
	{
		$filename = 'ban_1';
		$result = $uploadImage->upload_file($filename,'banner_image_1','../../../images/');
		$result1 = $manageData->updateValue('banner_info','banner_image',$result,1);
		//echo $result1;
	}
	if(!empty($banner_image_2))
	{
		$filename = 'ban_2';
		$result = $uploadImage->upload_file($filename,'banner_image_2','../../../images/');
		$result1 = $manageData->updateValue('banner_info','banner_image',$result,2);
		//echo $result1;
	}
	if(!empty($banner_image_3))
	{
		//echo 'ban_3';
		$filename = 'ban_3';
		$result = $uploadImage->upload_file($filename,'banner_image_3','../../../images/');
		$result1 = $manageData->updateValue('banner_info','banner_image',$result,3);
		//echo $result1;
	}
	if(!empty($banner_image_4))
	{
		$filename = 'ban_4';
		$result = $uploadImage->upload_file($filename,'banner_image_4','../../../images/');
		$result1 = $manageData->updateValue('banner_info','banner_image',$result,4);
		//echo $result1;
	}
	//update the height 
	if(isset($banner_h_1) && $banner_h_1 != "")
	{
		$result = $manageData->updateValue('banner_info','banner_height',$banner_h_1,1);
		//echo $result;
	}
	if(isset($banner_h_2) && $banner_h_2 != "")
	{
		$result = $manageData->updateValue('banner_info','banner_height',$banner_h_2,2);
		//echo $result;
	}
	if(isset($banner_h_3) && $banner_h_3 != "")
	{
		$result = $manageData->updateValue('banner_info','banner_height',$banner_h_3,3);
		//echo $result;
	}
	if(isset($banner_h_4) && $banner_h_4 != "")
	{
		$result = $manageData->updateValue('banner_info','banner_height',$banner_h_4,4);
		//echo $result;
	}
	//update width
	if(isset($banner_w_1) && $banner_w_1 != "")
	{
		$result = $manageData->updateValue('banner_info','banner_width',$banner_w_1,1);
		//echo $result;
	}
	if(isset($banner_w_2) && $banner_w_2 != "")
	{
		$result = $manageData->updateValue('banner_info','banner_width',$banner_w_2,2);
		//echo $result;
	}
	if(isset($banner_w_3) && $banner_w_3 != "")
	{
		$result = $manageData->updateValue('banner_info','banner_width',$banner_w_3,3);
		//echo $result;
	}
	if(isset($banner_w_4) && $banner_w_4 != "")
	{
		$result = $manageData->updateValue('banner_info','banner_width',$banner_w_4,4);
		//echo $result;
	}
	//update banner_link
	if(isset($banner_link_1) && $banner_link_1 != "")
	{
		$result = $manageData->updateValue('banner_info','banner_link',$banner_link_1,1);
	}
	if(isset($banner_link_2) && $banner_link_2 != "")
	{
		$result = $manageData->updateValue('banner_info','banner_link',$banner_link_2,2);
	}
	if(isset($banner_link_3) && $banner_link_3 != "")
	{
		$result = $manageData->updateValue('banner_info','banner_link',$banner_link_3,3);
	}
	if(isset($banner_link_4) && $banner_link_4 != "")
	{
		$result = $manageData->updateValue('banner_info','banner_link',$banner_link_4,4);
	}
	//update banner_status
	if(isset($banner_status_1) && $banner_status_1 != "")
	{
		$result = $manageData->updateValue('banner_info','banner_status',$banner_status_1,1);
	}
	if(isset($banner_status_2) && $banner_status_2 != "")
	{
		$result = $manageData->updateValue('banner_info','banner_status',$banner_status_2,2);
	}
	if(isset($banner_status_3) && $banner_status_3 != "")
	{
		$result = $manageData->updateValue('banner_info','banner_status',$banner_status_3,3);
	}
	if(isset($banner_status_4) && $banner_status_4 != "")
	{
		$result = $manageData->updateValue('banner_info','banner_status',$banner_status_4,4);
	}
	//update the dynamic ads for home page === 1 
	if(isset($dynamic_banner_1) && $dynamic_banner_1 != "")
	{
		$result = $manageData->updateValue('banner_info','banner_image',$dynamic_banner_1,5);
	}
	//update the dynamic ads for home page === 2
	if(isset($dynamic_banner_2) && $dynamic_banner_2 != "")
	{
		$result = $manageData->updateValue('banner_info','banner_image',$dynamic_banner_2,6);
	}
	
	header('Location:../../admin.php?value=uploadBanner');
?>