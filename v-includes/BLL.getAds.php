<?php
	include 'class.DAL.php';
	
	class BLL_manageData
	{
		public $manage_content;
		
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
		
		function get_navbar_horizontal()
		{
			$navbar_menus = $this->manage_content->getValue('navbar_menu','*');
			
			echo '<div id="nav_bar">
					<div class="navbar_horizontal">
						<ul>';
			foreach($navbar_menus as $navbar_menu)
			{
				echo '<li><a href="'.$navbar_menu['menu_href'].'">'.$navbar_menu['menu_name'].'</a>';
				$total_submenu = $navbar_menu['num_sub_menu'];				
				if($navbar_menu['sub_menu_present'] == 1 && $total_submenu != 0)
				{
					echo '<ul>';
					$col_submenu_name = 'submenu_'.$navbar_menu['id'];
					$col_submenu_href = $col_submenu_name.'_href';
					$col_submenu_ord = $col_submenu_name.'_ord';
					//intialise $i to manipulate no of rotation of foreach loop
					$i = 0;
					$navbar_submenus = $this->manage_content->getSubmenu_ordered('navbar_submenu','*',$col_submenu_ord);
					foreach($navbar_submenus as $navbar_submenu)
					{
						echo '<li><a href="'.$navbar_submenu[$col_submenu_href].'">'.$navbar_submenu[$col_submenu_name].'</a></li>';
						$i++;
						if($i == $total_submenu)
						{
							break;
						}
					}
					echo "</ul></li>";
				}
				
			}
			echo '</ul>
				</div>
			</div>';
		}
	}

?>