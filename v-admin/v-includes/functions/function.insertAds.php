<?php
	include '../class/class.manageusers.php';
	$manageData = new manageusers();
	include '../class/class.upload_file.php';
	//object or uploading image
	$uploadImage = new FileUpload();
		
	if($_SERVER['REQUEST_METHOD'] == 'POST')
	{
		$name = htmlentities($_POST['name'],ENT_QUOTES, "utf-8");
		$company_name = htmlentities($_POST['company_name'],ENT_QUOTES, "utf-8");
		$company_city = htmlentities($_POST['company_city'],ENT_QUOTES, "utf-8");
		$company_email = htmlentities($_POST['company_email'],ENT_QUOTES, "utf-8");
		$company_phone = htmlentities($_POST['company_phone'],ENT_QUOTES, "utf-8");
		$company_website = htmlentities($_POST['company_website'],ENT_QUOTES, "utf-8");
		$company_description = htmlentities($_POST['company_description'],ENT_QUOTES, "utf-8");
		$ad_duration = htmlentities($_POST['ad_duration'],ENT_QUOTES, "utf-8");
		$ad_status = htmlentities($_POST['ad_status'],ENT_QUOTES, "utf-8");
		$ad_categorys = $_POST['ad_category'];
		//varriables for getting images
		$company_logo = $_FILES['company_logo']['name'];
		$sec_image_1 = $_FILES['sec_image_1']['name'];
		$sec_image_2 = $_FILES['sec_image_2']['name'];
		$sec_image_3 = $_FILES['sec_image_3']['name'];
		$sec_image_4 = $_FILES['sec_image_4']['name'];
		$sec_image_5 = $_FILES['sec_image_5']['name'];
		$sec_image_6 = $_FILES['sec_image_6']['name'];
	}
	
	if(isset($company_name) && $company_name != "" && isset($company_email) && $company_email != "" && isset($ad_duration) && $ad_duration != "" && isset($ad_status) && $ad_status != "" )
	{
		//get todays date
		$c_start_date = date('Y-m-d');
		//get expiration date
		if($ad_duration == '6_months')
		{
			$c_end_date = date('Y-m-d',strtotime(date("Y-m-d", mktime()) . " + 182 day"));
		}
		elseif($ad_duration == '1_year')
		{
			$c_end_date = date('Y-m-d',strtotime(date("Y-m-d", mktime()) . " + 365 day"));
		}
		//set the no. of category using $i
		$i = 1;
		//total number of elements in the category array
		$count_category = count($ad_categorys);
		//define $ad_keyword as null
		$ad_keyword = "";
		
		foreach($ad_categorys as $ad_category)
		{
			$ad_keyword =$ad_keyword.','.$ad_category;
			if($i == $count_category)
			{
				break;
			}
			$i++;
		}
		
		$ad_keyword = htmlentities($ad_keyword, ENT_QUOTES, "utf-8");
		//$ad_keyword = htmlentities($ad_keyword, ENT_QUOTES, "cp1252");
		echo $ad_keyword;
		$result = $manageData->insertAds_details($company_name,$company_phone,$company_city,$company_email,$company_website,$name,$company_description,$ad_keyword,$c_start_date,$c_end_date,$ad_status,$ad_duration);
		echo $result;
	}
	else
	{
		$result = 'Please fill the form properly';
		echo $result;
	}
	//get the id of inserted element
	$get_id = $manageData->getValue_where('company_info','id','company_name',$company_name);
	echo $get_id[0]['id'];	
	//image upload section
	//check wheather image are uploaded or not if yes upload the file
	if(!empty($company_logo))
	{
		$filename = $company_name.'_logo';
		$result = $uploadImage->upload_file($filename,'company_logo','../../../images/company_logo/');
		$image_link = 'images/company_logo/'.$result;
		
		$result1 = $manageData->updateValue('company_info','company_logo',$image_link,$get_id[0]['id']);
		echo $result1;
	}
	if(!empty($sec_image_1))
	{
		$filename = $company_name.'_sec_image_1';
		$result = $uploadImage->upload_file($filename,'sec_image_1','../../../images/company_secondary_image/');
		$image_link = 'images/company_secondary_image/'.$result;
		
		$result1 = $manageData->updateValue('company_info','sec_image_1',$image_link,$get_id[0]['id']);
		echo $result1;
	}
	if(!empty($sec_image_2))
	{
		$filename = $company_name.'_sec_image_2';
		$result = $uploadImage->upload_file($filename,'sec_image_2','../../../images/company_secondary_image/');
		$image_link = 'images/company_secondary_image/'.$result;
		
		$result1 = $manageData->updateValue('company_info','sec_image_2',$image_link,$get_id[0]['id']);
		echo $result1;
	}
	if(!empty($sec_image_3))
	{
		$filename = $company_name.'_sec_image_3';
		$result = $uploadImage->upload_file($filename,'sec_image_3','../../../images/company_secondary_image/');
		$image_link = 'images/company_secondary_image/'.$result;
		
		$result1 = $manageData->updateValue('company_info','sec_image_3',$image_link,$get_id[0]['id']);
		echo $result1;
	}
	if(!empty($sec_image_4))
	{
		$filename = $company_name.'_sec_image_4';
		$result = $uploadImage->upload_file($filename,'sec_image_4','../../../images/company_secondary_image/');
		$image_link = 'images/company_secondary_image/'.$result;
		
		$result1 = $manageData->updateValue('company_info','sec_image_4',$image_link,$get_id[0]['id']);
		echo $result1;
	}
	if(!empty($sec_image_5))
	{
		$filename = $company_name.'_sec_image_5';
		$result = $uploadImage->upload_file($filename,'sec_image_5','../../../images/company_secondary_image/');
		$image_link = 'images/company_secondary_image/'.$result;
		
		$result1 = $manageData->updateValue('company_info','sec_image_5',$image_link,$get_id[0]['id']);
		echo $result1;
	}
	if(!empty($sec_image_6))
	{
		$filename = $company_name.'_sec_image_6';
		$result = $uploadImage->upload_file($filename,'sec_image_6','../../../images/company_secondary_image/');
		$image_link = 'images/company_secondary_image/'.$result;
		
		$result1 = $manageData->updateValue('company_info','sec_image_6',$image_link,$get_id[0]['id']);
		echo $result1;
	}
	
	header('location: ../../admin.php?value=insertAds');
?>
