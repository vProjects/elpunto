<?php
	include 'class.DAL.php';
	
	class BLL_manageData
	{
		private $manage_content;
		
		function __construct()
		{
			$this->manage_content = new ManageContent_DAL;
			return $this->manage_content;
		}
		
		function getSearch($keyword)
		{
			$seachValues = $this->manage_content->getvalue_search('company_info','*','company_keywords',$keyword);
			foreach($seachValues as $searchValue)
			{
				echo '<!--container for adds to be repeated-->
					<a href="company.php?comp_name='.$searchValue['company_name'].'">
						<div class="a_content">
							<div class="a_image">
								<img src="'.$searchValue['company_logo'].'" alt="grafti cartt" />    
							</div>
							<div class="a_company_name">'.$searchValue['company_name'].'</div>
						</div>
					</a>';
			}
		}
		
		function getAd_details($company_name)
		{
			$adDetails = $this->manage_content->getValue_where('company_info','*','company_name',$company_name);
			if($adDetails[0]['status'] == 1)
			{
				return $adDetails;
			}
			else
			{
				return 'Ad not active';
			}
		}
		
	}

?>