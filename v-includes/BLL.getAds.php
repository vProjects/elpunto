<?php
	include 'class.DAL.php';
	
	class BLL_searchResult
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
					<a href="company.php">
						<div class="a_content">
							<div class="a_image">
								<img src="'.$searchValue['company_logo'].'" alt="grafti cartt" />    
							</div>
							<div class="a_company_name">'.$searchValue['company_name'].'</div>
						</div>
					</a>';
			}
		}
		
	}

?>