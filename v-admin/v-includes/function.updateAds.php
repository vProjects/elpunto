<?php
	include '../class/class.manageusers.php';
	$manageData = new manageusers();
	//table name for the company information
	include '../class/class.upload_file.php';
	//object or uploading image
	$uploadImage = new FileUpload();
	$table_name = 'company_info';
		
	if($_SERVER['REQUEST_METHOD'] == 'POST')
	{
		$name = htmlentities($_POST['name'],ENT_QUOTES, "utf-8");
		$company_name = htmlentities($_POST['company_name'],ENT_QUOTES, "utf-8");
		$company_city = htmlentities($_POST['company_city'],ENT_QUOTES, "utf-8");
		$company_email = htmlentities($_POST['company_email'],ENT_QUOTES, "utf-8");
		$company_phone = htmlentities($_POST['company_phone'],ENT_QUOTES, "utf-8");
		$company_website = htmlentities($_POST['company_website'],ENT_QUOTES, "utf-8");
		$company_description = htmlentities($_POST['company_description'],ENT_QUOTES, "utf-8");
		$end_date = $_POST['end_date'];
		$id = $_POST['id'];
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
		//get values which has to be updated in owner info table
		$owner_address_1 = htmlentities($_POST['owner_address_1'],ENT_QUOTES, "utf-8");
		$owner_address_2 = htmlentities($_POST['owner_address_2'],ENT_QUOTES, "utf-8");
		//codes for company specific ads
		$company_ads = mysql_escape_string($_POST['company_ads']);
	}
	//update owner name
	if(isset($name) && $name != "")
	{
		$result = $manageData->updateValue($table_name,'owner_name',$name,$id);
		if($result == 1)
		{
			$result_update = 'name successfully updated<br/>';
		}
		else
		{
			$result_update =  'update name failed<br/>';
		}
	}
	//update company name
	if(isset($company_name) && $company_name != "")
	{
		$result = $manageData->updateValue($table_name,'company_name',$company_name,$id);
		if($result == 1)
		{
			$result_update =  'company company name successfully updated<br/>';
		}
		else
		{
			$result_update =  'company company name failed<br/>';
		}
	}
	//update company city
	if(isset($company_city) && $company_city != "")
	{
		$result = $manageData->updateValue($table_name,'company_city',$company_city,$id);
		if($result == 1)
		{
			$result_update =  'company city successfully updated<br/>';
		}
		else
		{
			$result_update =  'company city failed<br/>';
		}
	}
	//update company email
	if(isset($company_email) && $company_email != "")
	{
		$result = $manageData->updateValue($table_name,'company_email',$company_email,$id);
		if($result == 1)
		{
			$result_update =  'company email successfully updated<br/>';
		}
		else
		{
			$result_update =  'company email failed<br/>';
		}
	}
	//update company phone
	if(isset($company_phone) && $company_phone != "")
	{
		$result = $manageData->updateValue($table_name,'company_tel',$company_phone,$id);
		if($result == 1)
		{
			$result_update =  'company phone successfully updated<br/>';
		}
		else
		{
			$result_update =  'company phone failed<br/>';
		}
	}
	//update company website
	if(isset($company_website) && $company_website != "")
	{
		$result = $manageData->updateValue($table_name,'company_website',$company_website,$id);
		if($result == 1)
		{
			$result_update =  'company website successfully updated<br/>';
		}
		else
		{
			$result_update =  'company website failed<br/>';
		}
	}
	//update company description
	if(isset($company_description) && $company_description != "")
	{
		$result = $manageData->updateValue($table_name,'company_description',$company_description,$id);
		if($result == 1)
		{
			$result_update =  'company description successfully updated<br/>';
		}
		else
		{
			$result_update =  'company description failed<br/>';
		}
	}
	//update company status
	if(isset($ad_status) && $ad_status != "")
	{
		$result = $manageData->updateValue($table_name,'status',$ad_status,$id);
		if($result == 1)
		{
			$result_update =  'company status successfully updated<br/>';
		}
		else
		{
			$result_update =  'company status failed<br/>';
		}
	}
	//update end date
	if(isset($end_date) && $end_date != "")
	{
		$result = $manageData->updateValue($table_name,'end_date',$end_date,$id);
		if($result == 1)
		{
			$result_update =  'end_date successfully updated<br/>';
		}
		else
		{
			$result_update =  'end_date status failed<br/>';
		}
	}
	//update category which are used as keyword for searching
	if(isset($ad_categorys) && $ad_categorys != "")
	{
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
		//support for special characters
		$ad_keyword = htmlentities($ad_keyword, ENT_QUOTES, "utf-8");
		$result = $manageData->updateValue($table_name,'company_keywords',$ad_keyword,$id);
		if($result == 1)
		{
			$result_update =  'ad_categorys successfully updated<br/>';
		}
		else
		{
			$result_update =  'ad_categorys status failed<br/>';
		}
	
	
	//image upload section
	//check wheather image are uploaded or not if yes upload the file
	if(!empty($company_logo))
	{
		$filename = $company_name.'_logo';
		$result = $uploadImage->upload_file($filename,'company_logo','../../../images/company_logo/');
		$image_link = 'images/company_logo/'.$result;
		
		$result1 = $manageData->updateValue('company_info','company_logo',$image_link,$id);
	}
	if(!empty($sec_image_1))
	{
		$filename = $company_name.'_sec_image_1';
		$result = $uploadImage->upload_file($filename,'sec_image_1','../../../images/company_secondary_image/');
		$image_link = 'images/company_secondary_image/'.$result;
		
		$result1 = $manageData->updateValue('company_info','sec_image_1',$image_link,$id);
	}
	if(!empty($sec_image_2))
	{
		$filename = $company_name.'_sec_image_2';
		$result = $uploadImage->upload_file($filename,'sec_image_2','../../../images/company_secondary_image/');
		$image_link = 'images/company_secondary_image/'.$result;
		
		$result1 = $manageData->updateValue('company_info','sec_image_2',$image_link,$id);
	}
	if(!empty($sec_image_3))
	{
		$filename = $company_name.'_sec_image_3';
		$result = $uploadImage->upload_file($filename,'sec_image_3','../../../images/company_secondary_image/');
		$image_link = 'images/company_secondary_image/'.$result;
		
		$result1 = $manageData->updateValue('company_info','sec_image_3',$image_link,$id);
	}
	if(!empty($sec_image_4))
	{
		$filename = $company_name.'_sec_image_4';
		$result = $uploadImage->upload_file($filename,'sec_image_4','../../../images/company_secondary_image/');
		$image_link = 'images/company_secondary_image/'.$result;
		
		$result1 = $manageData->updateValue('company_info','sec_image_4',$image_link,$id);
	}
	if(!empty($sec_image_5))
	{
		$filename = $company_name.'_sec_image_5';
		$result = $uploadImage->upload_file($filename,'sec_image_5','../../../images/company_secondary_image/');
		$image_link = 'images/company_secondary_image/'.$result;
		
		$result1 = $manageData->updateValue('company_info','sec_image_5',$image_link,$id);
	}
	
	if(!empty($sec_image_6))
	{
		$filename = $company_name.'_sec_image_6';
		$result = $uploadImage->upload_file($filename,'sec_image_6','../../../images/company_secondary_image/');
		$image_link = 'images/company_secondary_image/'.$result;
		
		$result1 = $manageData->updateValue('company_info','sec_image_6',$image_link,$id);
	}
	}
	//update value in owner info table
	//get email according to id for updation
	$owner_email = $manageData->getValue_where('company_info','company_email','id',$id);
	//update the add owner address line 1
	if(isset($owner_address_1) && $owner_address_1 != "")
	{
		$result = $manageData->update_byColumn('owner_info','owner_address_1',$owner_address_1,'owner_email',$owner_email[0]['company_email']);
	}
	//update the add owner address line 2
	if(isset($owner_address_2) && $owner_address_2 != "")
	{
		$result = $manageData->update_byColumn('owner_info','owner_address_2',$owner_address_2,'owner_email',$owner_email[0]['company_email']);
	}
	$keyword = ""; 
	if(!isset($company_name) || empty($company_name))
	{
		$keyword = 'none';
	}
	if(isset($company_ads) && $company_ads != "")
	{
		$result = $manageData->updateValue('company_info','company_ads',$company_ads,$id);
	}
	header('Location:../../admin.php?value=updateAds&keyword='.$company_name);
?>