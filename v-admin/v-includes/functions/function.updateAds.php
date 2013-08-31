<?php
	include '../class/class.manageusers.php';
	$manageData = new manageusers();
	//table name for the company information
	$table_name = 'company_info';
		
	if($_SERVER['REQUEST_METHOD'] == 'POST')
	{
		$name = $_POST['name'];
		$company_name = $_POST['company_name'];
		$company_city = $_POST['company_city'];
		$company_email = $_POST['company_email'];
		$company_phone = $_POST['company_phone'];
		$company_website = $_POST['company_website'];
		$company_description = $_POST['company_description'];
		$end_date = $_POST['end_date'];
		$ad_status = $_POST['ad_status'];
		$no_category = $_POST['no_category'];
		$ad_categorys = $_POST['ad_category'];
		$id = $_POST['id'];
	}
	echo $id;
	//update owner name
	if(isset($name) && $name != "")
	{
		$result = $manageData->updateValue($table_name,'owner_name',$name,$id);
		if($result == 1)
		{
			echo 'name successfully updated<br/>';
		}
		else
		{
			echo 'update name failed<br/>';
		}
	}
	//update company name
	if(isset($company_name) && $company_name != "")
	{
		$result = $manageData->updateValue($table_name,'company_name',$company_name,$id);
		if($result == 1)
		{
			echo 'company company name successfully updated<br/>';
		}
		else
		{
			echo 'company company name failed<br/>';
		}
	}
	//update company city
	if(isset($company_city) && $company_city != "")
	{
		$result = $manageData->updateValue($table_name,'company_city',$company_city,$id);
		if($result == 1)
		{
			echo 'company city successfully updated<br/>';
		}
		else
		{
			echo 'company city failed<br/>';
		}
	}
	//update company email
	if(isset($company_email) && $company_email != "")
	{
		$result = $manageData->updateValue($table_name,'company_email',$company_email,$id);
		if($result == 1)
		{
			echo 'company email successfully updated<br/>';
		}
		else
		{
			echo 'company email failed<br/>';
		}
	}
	//update company phone
	if(isset($company_phone) && $company_phone != "")
	{
		$result = $manageData->updateValue($table_name,'company_tel',$company_phone,$id);
		if($result == 1)
		{
			echo 'company phone successfully updated<br/>';
		}
		else
		{
			echo 'company phone failed<br/>';
		}
	}
	//update company website
	if(isset($company_website) && $company_website != "")
	{
		$result = $manageData->updateValue($table_name,'company_website',$company_website,$id);
		if($result == 1)
		{
			echo 'company website successfully updated<br/>';
		}
		else
		{
			echo 'company website failed<br/>';
		}
	}
	//update company description
	if(isset($company_description) && $company_description != "")
	{
		$result = $manageData->updateValue($table_name,'company_description',$company_description,$id);
		if($result == 1)
		{
			echo 'company description successfully updated<br/>';
		}
		else
		{
			echo 'company description failed<br/>';
		}
	}
	//update company status
	if(isset($ad_status) && $ad_status != "")
	{
		$result = $manageData->updateValue($table_name,'status',$ad_status,$id);
		if($result == 1)
		{
			echo 'company status successfully updated<br/>';
		}
		else
		{
			echo 'company status failed<br/>';
		}
	}
	//update end date
	if(isset($end_date) && $end_date != "")
	{
		$result = $manageData->updateValue($table_name,'end_date',$end_date,$id);
		if($result == 1)
		{
			echo 'end_date successfully updated<br/>';
		}
		else
		{
			echo 'end_date status failed<br/>';
		}
	}
	//update category which are used as keyword for searching
	if(isset($ad_categorys) && $ad_categorys != "" && isset($no_category) && $no_category != "")
	{
		//set the no. of category using $i
		$i = 1;
		//define $ad_keyword as null
		$ad_keyword = "";
		//get category array and convert it into keyword string
		if($no_category == 3)
		{
			foreach($ad_categorys as $ad_category)
			{
				$ad_keyword =$ad_keyword.','.$ad_category;
				if($i == 3)
				{
					break;
				}
				$i++;
			}
		}
		elseif($no_category == 6)
		{
			foreach($ad_categorys as $ad_category)
			{
				$ad_keyword =$ad_keyword.','.$ad_category;
				if($i == 6)
				{
					break;
				}
				$i++;
			}
		}
		$result = $manageData->updateValue($table_name,'company_keywords',$ad_keyword,$id);
		if($result == 1)
		{
			echo 'ad_categorys successfully updated<br/>';
		}
		else
		{
			echo 'ad_categorys status failed<br/>';
		}
	}
?>