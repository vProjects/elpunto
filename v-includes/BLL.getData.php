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
		
		function getAuthor_sidebar()
		{
			$authors = $this->manage_content->getValue_distinct('article_info','article_author');
			echo '<div class="auth_info"><h4>TODO</h4><ul>';
			foreach($authors as $author)
			{
				echo '<li><a href="article_by_auth.php?author='.$author['article_author'].'">'.$author['article_author'].'</a></li>';
			}
			echo '</ul></div>';
		}
		
		function getArticles()
		{
			$articles = $this->manage_content->getValue_latest('article_info','*');
			foreach($articles as $article)
			{
				echo '<!--article_container starts here-->
            	<div class="article_container">
                	<div class="article_header">'.$article['article_title'].'</div>
                    <div class="article_auth">Por:'.$article['article_author'].'</div>
                    <div class="article_brief">'.$article['article_brief'].'</div>
                    <div class="article_more"><a href="article_full.php?article_no='.$article['id'].'">Leer mas »</a></div>
                </div><!--#article container ends here-->';
			}
		}
		
		function getArticles_byAuthor($author)
		{
			$articles = $this->manage_content->getValue_latest_where('article_info','*','article_author',$author);
			foreach($articles as $article)
			{
				echo '<!--article_container starts here-->
            	<div class="article_container">
                	<div class="article_header">'.$article['article_title'].'</div>
                    <div class="article_auth">Por:'.$article['article_author'].'</div>
                    <div class="article_brief">'.$article['article_brief'].'</div>
                    <div class="article_more"><a href="article_full.php?article_no='.$article['id'].'">Leer mas »</a></div>
                </div><!--#article container ends here-->';
			}
		}
		
		function getFullArticle($id)
		{
			$article = $this->manage_content->getValue_where('article_info','*','id',$id);
			echo '<h1>'.$article[0]['article_title'].'</h1>
                <!--article_container starts here-->
                <div class="article_full">
                <!--get article flong description-->';
			echo '<div class="article_header">'.$article[0]['article_author'].'</div><br/><br/><br/>
                    <div class="article_auth">'.$article[0]['article_description'].'</div>';
			echo '</div><!--#article container ends here-->' ;
		}
		
		function get_navbar_vertical()
		{
			$horizontalMenus = $this->manage_content->getMenu_sorted('horizontal_navbar','*','level',"0");
			echo '<!--nav_elements-->
                    <ul>';
			foreach($horizontalMenus as $horizontalMenu)
			{
				echo '<li><a href="'.$horizontalMenu['menu_link'].'">'.$horizontalMenu['menu_name'].'</a>';
				$horizontal_subMenus = $this->manage_content->getMenu_sorted('horizontal_navbar','*','level',"1");
				if(isset($horizontal_subMenus) && $horizontal_subMenus != "")
				{
					echo '<ul>';
					foreach($horizontal_subMenus as $horizontal_subMenu)
					{
						if($horizontalMenu['id'] == $horizontal_subMenu['parent_id'])
						{
							echo '<li><a href="'.$horizontal_subMenu['menu_link'].'">'.$horizontal_subMenu['menu_name'].'</a></li>';
						}
					}
					echo '</ul>';
				}
				echo '</li>';
			}
			echo '</ul>';
		}
	}

?>