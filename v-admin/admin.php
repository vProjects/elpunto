<?php 
	$pageTitle = 'Admin Page';
	session_start();  //starts the session for this page
	
	//checks whether user is logged in or not
	if(!isset($_SESSION['code'])){
				header('Location: index.php');
	}
	

	
	include('v-includes/header.php');
	/*
	* Codes below loads the specific page when gets returned from a function file
	*/
	if(count($GLOBALS['_GET'])>=1){
		$value = $GLOBALS['_GET']['value'];
		
	
		switch($value){
			
			case 'seo':{
				echo "<script> loadFile('view.seo.php?abc=naman') </script>";
				break;
			}
			case 'admin':{
				echo "<script> loadFile('view.changepassword.php') </script>";
				break;
			}
			case 'homepage':{
				echo "<script> loadFile('view.homepage.php') </script>";
				break;
			}
			case 'services':{
				echo "<script> loadFile('view.services.php?abc=anand') </script>";
				break;
			}
			case 'changePassword':{
				echo "<script> loadFile('view.changepassword.php') </script>";
				break;
			}
			case 'otherpage':{
				echo "<script> loadFile('view.otherpages.php') </script>";
				break;
			}
			case 'afail':{
				echo "<script> loadFile('view.postArticle.php?status=fail') </script>";
				break;
			}
			case 'apass':{
				echo "<script> loadFile('view.postArticle.php?status=pass') </script>";
				break;
			}
			case 'adel':{
				echo "<script> loadFile('view.postArticle.php?status=adel') </script>";
				break;
			}
			case 'horizontal_menu':{
				echo "<script> loadFile('view.changeMenu_horizontal.php') </script>";
				break;
			}
			case 'vertical_menu':{
				echo "<script> loadFile('view.changeMenu_vertical.php') </script>";
				break;
			}
			case 'insertAds':{
				echo "<script> loadFile('view.insertAds.php') </script>";
				break;
			}
			case 'updateAds':{
				$searchKeyword = $_GET['keyword'];
				echo "<script> loadFile('view.updateAds.php?keyword=$searchKeyword') </script>";
				break;
			}
			case 'allads':{
				$searchKeyword = $_GET['keyword'];
				echo "<script> loadFile('view.allads.php?keyword=$searchKeyword') </script>";
				break;
			}
			case 'insertAds_img':{
				$company_name = $_GET['company_name'];
				echo "<script> loadFile('view.insertAds_img.php?company_name=$company_name') </script>";
				break;
			}
			case 'insertAds_owner':{
				echo "<script> loadFile('view.create_AdOwner.php') </script>";
				break;
			}
			case 'updateAds_owner':{
				$email = $GLOBALS['_GET']['email'];
				echo "<script> loadFile('view.update_AdOwner.php?email=$email') </script>";
				break;
			}
			case 'upc':{
				$cat = $_GET['cat'];
				echo "<script> loadFile('view.updateCategoryDescription.php?cat=$cat') </script>";
				break;
			}
			case 'updateSlider':{
				echo "<script> loadFile('view.updateSliderImage.php') </script>";
				break;
			}
			case 'updateCategoryDescription':{
				echo "<script> loadFile('view.updateCategoryDescription.php') </script>";
				break;
			}
			case 'uploadBanner':{
				echo "<script> loadFile('view.manageBanners.php') </script>";
				break;
			}
			case 'updateSocial':{
				echo "<script> loadFile('view.updateSocialLink.php') </script>";
				break;
			}
			case 'updateAds':{
				echo "<script> loadFile('view.updateAds.php') </script>";
				break;
			}
			case 'updateContact':{
				echo "<script> loadFile('view.update_contactEmail.php') </script>";
				break;
			}
			case 'aupdate':{
				$article_id = $_GET['article_id'];
				echo "<script> loadFile('view.updateArticle.php?article_id=$article_id') </script>";
				break;
			}
			case 'manageCity':{
				echo "<script> loadFile('view.manageCity.php') </script>";
				break;
			}

		}
	}
	// Page return codes ends here

	include('v-includes/nav.php');
?>
	<div class="container bodycontainer" id="main">
<?php
	include('v-includes/accordion.php');
?>
   <!-- iframe section -->
   <div id="pqr" class="span11 rightwindow">
   <?php if(count($GLOBALS['_GET'])>=1)
	   		echo '';
		else
   echo '<div id="introduction">
   		<h1> Welcome to Elpunto Da Venta </h1>
        <h2> A site developed by vyrazu labs</h2>
        <button type="button" class="btn btn-primary intro_button" onClick="loadFile(\'view.dashboard.php\')">Enter to edit your site</button> 
    </div> '; ?>
    
   </div>
   <!-- iframe section ends here -->
   
   
 </div>  
<?php include('v-includes/footer.php'); ?>
    

