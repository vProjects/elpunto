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
			if($seachValues != "")
			{
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
			else
			{
				echo "No result found";
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
			$horizontalMenus = $this->manage_content->getMenu_sorted('horizontal_navbar','*','level',"0");
			echo '<div id="nav_bar">
					<div class="navbar_horizontal">
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
			echo '</ul></div></div>';
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
			$verticalMenus = $this->manage_content->getMenu_sorted('vertical_navbar','*','level',"0");
			echo '<!--nav_elements-->
                    <ul>';
			foreach($verticalMenus as $verticalMenu)
			{
				echo '<li><a href="'.$verticalMenu['menu_link'].'">'.$verticalMenu['menu_name'].'</a>';
				$vertical_subMenus = $this->manage_content->getMenu_sorted('vertical_navbar','*','level',"1");
				if(isset($vertical_subMenus) && $vertical_subMenus != "")
				{
					echo '<ul>';
					foreach($vertical_subMenus as $vertical_subMenu)
					{
						if($verticalMenu['id'] == $vertical_subMenu['parent_id'])
						{
							echo '<li><a href="'.$vertical_subMenu['menu_link'].'">'.$vertical_subMenu['menu_name'].'</a></li>';
						}
					}
					echo '</ul>';
				}
				echo '</li>';
			}
			echo '</ul>';
		}
		
		
		/**
		* function used to return the meta tags for every reqested page. argument provided is the page name
		* @returns the meta tags (keyword and description)
		*/
		function getMetaTags($pageName){
			$metaTags = $this->manage_content->getValue_where('meta_tags','*','page',$pageName);
			echo '<meta name="description" content="'.$metaTags[0]['keyword'].'" />
<meta name="description" content="'.$metaTags[0]['description'].'" />';
		}
		
		/**
		* function used to return the page content
		* @returns the contents of any page (text appears on the page)
		*/
		
		function getPageContent($pageName){
			$pageContent = $this->manage_content->getValue_where('otherpage','*','page',$pageName);
			echo $pageContent[0]['content'];
		}
		
		/**
		* function used to collect tracking data for users
		*/
		function trackViewers(){
			$date = date('Y-m-d H:i:s');  // getting the date when a user visits this page
			$category = $_GET['comp_name'];						// category requested
			$_SERVER['REMOTE_ADDR'];				   // getting the IP address of the remote user
 			$browser = get_browser(null, true);		// geting full browser info
			$browser['browser'];                      // getting the browser name
			
			$this->manage_content->insertTrackingValues($browser['browser'],$_SERVER['REMOTE_ADDR'],$category,$date);	 
		}
		
		//function for getting the category details
		function getCategory_details($category_name)
		{
			$details = $this->manage_content->getValue_where('vertical_navbar','*','menu_name',$category_name);
			echo '<div class="category_header">'.$details[0]['menu_name'].'</div>
                <br /><br/>
                <div class="category_description">'.$details[0]['description'].'</div>';
		}
		
	}

?>