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
			case 'password':{
				echo "<script> loadFile('view.changepassword.php') </script>";
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
   		<h1> Welcome to WC Group </h1>
        <h2> A site developed by vyrazu labs</h2>
        <button type="button" class="btn btn-primary intro_button" onClick="loadFile(\'view/view.dashboard.php\')">Enter to edit your site</button> 
    </div> '; ?>
    
   </div>
   <!-- iframe section ends here -->
   
   
 </div>  
<?php include('v-includes/footer.php'); ?>
    

