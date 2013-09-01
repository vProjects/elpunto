<?php
	header('Content-Type: text/html; charset=utf-8');
	include '../class/class.manageusers.php';
	$manageData = new manageusers();
		
	if($_SERVER['REQUEST_METHOD'] == 'POST')
	{
		$name = $_POST['name'];
		$company_name = $_POST['company_name'];
		$company_city = $_POST['company_city'];
		$company_email = $_POST['company_email'];
		$company_phone = $_POST['company_phone'];
		$company_website = $_POST['company_website'];
		$company_description = $_POST['company_description'];
		$ad_duration = $_POST['ad_duration'];
		$ad_status = $_POST['ad_status'];
		$no_category = $_POST['no_category'];
		$ad_categorys = $_POST['ad_category'];
	}
	
		if(isset($company_name) && $company_name != "" && isset($company_email) && $company_email != "" && isset($ad_duration) && $ad_duration != "" && isset($ad_status) && $ad_status != "" )
		{
			//get todays date
			$c_start_date = date('Y-m-d');
			//get expiration date
			if($ad_duration == '6_months')
			{
				$c_end_date = date('Y-m-d',strtotime(date("Y-m-d", time()) . " + 182 day"));
			}
			elseif($ad_duration == '1_year')
			{
				$c_end_date = date('Y-m-d',strtotime(date("Y-m-d", time()) . " + 365 day"));
			}
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
			$result = $manageData->insertAds_details($company_name,$company_phone,$company_city,$company_email,$company_website,$name,$company_description,$ad_keyword,$c_start_date,$c_end_date,$ad_status,$ad_duration);
			echo $result;
		}
		else
		{
			$result = 'Please fill the form properly';
			echo $result;
		}
?>

<a href="../../admin.php?value=insertAds">Redirect</a>