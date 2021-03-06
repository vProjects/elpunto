<?php
	if(!class_exists('ManageContent_DAL'))include 'class.DAL.php';
	if(!class_exists('utility'))include 'class.utility.php';
	if(!class_exists('Mail'))include 'class.mail.php';
	
	
	class BLL_manageData
	{
		public $manage_content;
		public $mail_function;
		
		function __construct()
		{	
			$this->mail_function = new Mail();
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
									<img src="'.$searchValue['company_logo'].'" />    
								</div>
								<div class="a_company_name">'.$searchValue['company_name'].'</div>
							</div>
						</a>';
				}
			}
			else
			{
				if( $keyword != 'Home' )
				{
					echo "No se encontraron resultados para la busqueda realizada";
				}
			}
		}
		//get ads accordnig to username(emails)
		function getAds_email($email)
		{
			$seachValues = $this->manage_content->getValue_email('company_info','*','company_email',$email);
			if($seachValues != "")
			{
				foreach($seachValues as $searchValue)
				{
					echo '<!--container for adds to be repeated-->
						<a href="manage_ads.php?comp_name='.$searchValue['company_name'].'">
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
				echo "No se encontraron resultados para la busqueda realizada";
			}
		}
		//funtion to get full categories
		function get_categories()
		{
			$categories = $this->manage_content->getValue('vertical_navbar','menu_name');
			return $categories;
		}
		
		//get company details
		function getAd_details_owner($company_name)
		{
			$adDetails = $this->manage_content->getValue_where('company_info','*','company_name',$company_name);
			if($adDetails[0]['status'] == 1)
			return $adDetails;
			
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
						<ul style="width:650px;">';
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
			echo '<div class="auth_info"><a href="article.php"><h4>TODO</h4><a><ul>';
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
				//check the expiry date of the article
				if($article['end_date'] >= date('Y-m-d'))
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
		}
		
		function getArticles_byAuthor($author)
		{
			$articles = $this->manage_content->getValue_latest_where('article_info','*','article_author',$author);
			foreach($articles as $article)
			{
				//check the expiry date of the article
				if($article['end_date'] >= date('Y-m-d'))
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
			echo '<meta name="keywords" content="'.$metaTags[0]['keyword'].'" />
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
		function getUserData($companyName){
				$date = date('Y-m-d H:i:s');  // getting the date when a user visits this page
				$ip = $_SERVER['REMOTE_ADDR'];
				$time_of_click = date("H:i:s");
				$utility = new utility();
				$userData= $utility->getBrowser();
				$userInfo = array(
					"company_name"=> $companyName,
					"browserName" => $userData['name'],
					"OS" => $userData['platform'],
					"broswerVersion" => $userData['version'],
					"date" => $date,
				);
	
			$this->manage_content->insertTrackingValues($userInfo['company_name'],$userInfo['browserName'],
														$userInfo['OS'],$userInfo['broswerVersion'],$userInfo['date'],$ip,$time_of_click);	 
				
	
		}
	
		
		
		
		
		//function for getting the category details
		function getCategory_details($category_name)
		{
			$details = $this->manage_content->getValue_where('vertical_navbar','*','menu_name',$category_name);
			echo '<div class="category_header">'.$details[0]['menu_name'].'</div>
                <br /><br/>
                <div class="category_description">'.$details[0]['description'].'</div>';
		}
		//function to get banners table banner_info
		function getbanners()
		{
			$banners = $this->manage_content->getValue('banner_info','*');
			echo '<div id="add_space">';
			foreach($banners as $banner)
			{
				if($banner['banner_status'] == 1)
				{
					echo '<a href="'.$banner['banner_link'].'">';
					echo '<div class="add_section"><img src="images/'.$banner['banner_image'].'" style="height:'.$banner['banner_height'].'px;width:'.$banner['banner_width'].'px;float:left;"/></div></a>';
				}
			}
			echo '</div>';
		}
		//get dynamic ad for homepage
		function getDynamicAds()
		{
			$dynamicBanner_1 = $this->manage_content->getValue_where('banner_info','banner_image','id',5);
			$dynamicBanner_2 = $this->manage_content->getValue_where('banner_info','banner_image','id',6);
			//print_r($dynamicBanner[0]['banner_image']);
			//get dynamic banner 1
			if($dynamicBanner_1[0]['banner_image'] == 'NULL')
			{
				echo '';
			}
			else
			{
				echo '<div class="dynamic_banner">'.$dynamicBanner_1[0]['banner_image'].'</div>';
			}
			//get the dynamic banner 2
			if($dynamicBanner_2[0]['banner_image'] == 'NULL')
			{
				echo '';
			}
			else
			{
				echo '<div class="dynamic_banner">'.$dynamicBanner_2[0]['banner_image'].'</div>';
			}
		}
		//get social links
		function getSocial_links($social_name)
		{
			$social_links = $this->manage_content->getValue('social_links','*');
			print_r($social_links[0][$social_name]);
		}
		
		//function for getting slider images
		function getSlider_images()
		{
			$slider_images = $this->manage_content->getValue('slider_info','*');
			foreach($slider_images as $slider_image)
			{
				if($slider_image['slider_status'] == 1)
				{
					echo '<a href="'.$slider_image["slider_link"].'"><img src="images/'.$slider_image["slider_image"].'" style="width:692px;height:210px;"/></a>';
				}
			}
		}
		function login_owner($username,$password)
		{
			if(isset($password) && $password != "" && isset($username) && $username != "")
			{
				$password_db = $this->manage_content->getValue_where('owner_info','password','owner_email',$username);
				if($password_db != 0)
				{
					if($password_db[0]['password'] == $password)
					{
						$_SESSION['elpunto'] = $username;
						echo "<script>window.location = 'user.php';</script>";
					}
					else
					{
						session_destroy();
						return "Please check username and password.";
					}
				}
				else
				{
					session_destroy();
					return "Please check username and password.";
				}
			}
			else 
			{
				session_destroy();
				return "Please enter username and password";
			}
		}
		//function for updating password
		function updatePassword($old_password,$new_password,$new_password_r,$email)
		{
			if(isset($new_password) && $new_password != "" && isset($new_password_r) && $new_password_r != "" && isset($old_password) && $old_password != "")
			{
				//both the new password matches each other or not
				if($new_password == $new_password_r)
				{
					//get the password using the email(email is username)
					$password_db = $this->manage_content->getValue_where('owner_info','password','owner_email',$email);
					//check the password entered matches with the entered password
					if($password_db[0]['password'] == $old_password )
					{
						//update the old password
						$result = $this->manage_content->updateValue_email_owner('owner_info','password',$new_password,$email);
						//print successful
						if($result == 1)
						{
							return "Update successful.";
						}
					}
					else 
					{
						return "Incorrect password.";
					}
				}
				else
				{
					return "New password dont match.";
				}
			}
			else
			{
				return "Please fill the form properly.";
			}
		}
		//function update ad details
		function updateDetails_ads($contact_no,$ad_categories,$comp_name)
		{
			if(isset($ad_categories) && !empty($ad_categories))
			{
				//set the no. of category using $i
				$i = 1;
				//total number of elements in the category array
				$count_category = count($ad_categories);
				//define $ad_keyword as null
				$ad_keyword = "";
				
				foreach($ad_categories as $ad_category)
				{
					$ad_keyword =$ad_keyword.','.$ad_category;
					if($i == $count_category)
					{
						break;
					}
					$i++;
				}
				$ad_keyword = htmlentities($ad_keyword, ENT_QUOTES, "utf-8");
				$result = $this->manage_content->updateValue_email_company('company_info','company_keywords',$ad_keyword,$comp_name);
				//print result
				if($result != 0)
				return "Update successful.";
				
			}
			if(isset($contact_no) && $contact_no != "")
			{
				$result = $this->manage_content->updateValue_email_company('company_info','company_tel',$contact_no,$comp_name);
				//print result
				if($result != 0)
				return "Update successful.";
			}
			if($result == 0)
			{
				return "Update unsuccessful";
			}
			
		}
		//function to get the list of the cities avialable
		function getCity()
		{
			$cities = $this->manage_content->getValue('city','city_name');
			foreach($cities as $city)
			{
				echo '<option value="'.$city['city_name'].'">'.$city['city_name'].'</option>';
			}
		}
		
		
		// function to send the users password in case he/she forgets the old one
		function validateAndSend($user_email){
			$userPassword = $this->manage_content->getValue_email('owner_info','password','owner_email',$user_email);
			if(isset($userPassword[0]['password']))
			{	
				$message = "Your password for the account is".$userPassword[0]['password'];
				$mailsent = $this->mail_function->sendMail($user_email,$message,$user_email);
				return $mailsent;	
			}
			else
			{
				return "Invalid user.";
			}

		}
		
		
		function getCompanyEmail(){
			$company_email = $this->manage_content->getValue('admin_profile','email_add');
			return $company_email[0]['email_add'];
		}
		//function to send email to the ad owner and admin from company.php
		function sendInformation($name,$company_name,$city,$email,$phone_no,$comments,$company_email)
		{
			//email will be sent to both the ad owners and admin
			//emaill of admin
			$email_admin = $this->manage_content->getValue('admin_profile','email_add');
			//get email from array $email_admin[0]['email_add']
			$sendMail_admin = $this->mail_function->contactToAdmin($name,$company_name,$city,$email,$phone_no,$comments,$email_admin[0]['email_add']);
			//send email to ad owner from company.php
			$sendMail_adOwner = $this->mail_function->contactToAdmin($name,$company_name,$city,$email,$phone_no,$comments,$company_email);
		}
		
		//function to send info to admin from the contact page
		function sentInfoContactForm($name,$company_name,$city,$email,$phone_no,$comments)
		{
			//email will be sent to admin
			//emaill of admin
			$email_admin = $this->manage_content->getValue('admin_profile','email_add');
			//get email from array $email_admin[0]['email_add']
			$sendMail_admin = $this->mail_function->contactToAdmin($name,$company_name,$city,$email,$phone_no,$comments,$email_admin[0]['email_add']);
		}
	}
	

?>