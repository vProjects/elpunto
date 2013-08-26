<?php 
	include ('class.dbconnection.php');
	$error ='';
	
class manageusers{
	
	/*
	* link used to store the database connectivity throuhout manage user class
	*/
	
	public $link;
	
	/*
	* basic constructor which enables the database connectivity 
	*/
	
	function __construct(){
		$dbconnection = new dbconnnection();
		$this->link = $dbconnection->ConnectToDb('secure');
		
	}
	
	/*
	* Function use to lgoin users into the website
	*/
	
	function login_admin($email,$password){
		$query = $this->link->prepare("SELECT * FROM admin_profile 
										WHERE email = '$email' and password ='$password'");
		$query->execute();
		$rowcount = $query->rowcount();
		return $rowcount;
		}

	/*
	* Function use to save the meta tags returns
	* no of rows from sql query
	*/

	function saveMetatags($type,$value,$page){
		if($type == 'keywords'){
			$query = $this->link->prepare("update meta_tags set keyword = '$value' where page = '$page'");
		}
		else
			$query = $this->link->prepare("update meta_tags set description = '$value' where page = '$page'");
		$query->execute();
		$rowCount = $query->rowCount();
		return $rowCount;
	}
	
	
	
	
	/*
	* Function use to save the meta tags
	* @returns whether password is changed or not
	*/
	function changeAdminPassword($newPassword){
		$query = $this->link->prepare("update admin_profile set password = '$newPassword'");
		$query->execute();
		$rowCount =  $query->rowCount();
		return $rowCount;
	}
	
/* ------------------------------------ CODES ADDED BY VASU NAMAN ---------------------------------------------------------- */		

	/*
	* Function use to update the content for the home page
	* @returns update count
	*/

	function manageHomePageContent($value,$firstValue,$secondValue,$thirdValue,$fourthValue){
		if($value == 'believe'){
			echo 'I am inside believe';
			$query = $this->link->prepare("UPDATE `homepage` SET `firstvalue`='$firstValue',`secondvalue`='$secondValue',`thirdvalue`='$thirdValue',`fourthvalue`='$fourthValue' WHERE id=1");
		}
		
		else if($value == 'services'){
			$query = $this->link->prepare("UPDATE `homepage` SET `firstvalue`='$firstValue',`secondvalue`='$secondValue',`thirdvalue`='$thirdValue',`fourthvalue`='$fourthValue' WHERE id=2");
			
		}
		
		else if($value == 'testimonial'){
			$query = $this->link->prepare("UPDATE `homepage` SET `firstvalue`='$firstValue',`secondvalue`='$secondValue',`thirdvalue`='$thirdValue',`fourthvalue`='$fourthValue' WHERE id=3");
			
		}
		$query->execute();
	}

	/*
	* Function use to get the content for the home page and the other pages
	* @returns home page content
	*/
		function pageContent($page){
			if($page == 'index')
				$query = $this->link->prepare("select * from homepage");
			else if($page == 'services')
				$query = $this->link->prepare("select * from services");
				
			$query->execute();
			$pageContent = $query->fetchALL(PDO::FETCH_ASSOC);
			return $pageContent;
		}

	/*
	* Function use to update the content of the services pages
	* @returns whether updated or not
	*/
	function addServices($value,$content){
		if($value=='topcontent')
			$query = $this->link->prepare("update `services` SET `content` = '$content' where id = 1");
		else if($value == 'leftcontent')
			$query = $this->link->prepare("update `services` SET `content` = '$content' where id = 2");
		else if($value == 'rightcontent')
			$query = $this->link->prepare("update `services` SET `content` = '$content' where id = 3");
		else if($value == 'login')
			$query = $this->link->prepare("update `services` SET `content` = '$content' where id = 4");
		else if($value == 'about')
			$query = $this->link->prepare("update `services` SET `content` = '$content' where id = 5");
		$query->execute();
	}

	/*
	* Function use to search the users
	* @returns whether updated or not
	*/
	
	function searchUser($tableName, $searchElement, $searchValue){
			$query = $this->link->prepare("select * from $tableName where $searchElement LIKE '%$searchValue%'");
			$query->execute();
			return $searchResult = $query->fetchALL(PDO::FETCH_ASSOC);
	}	
/* ------------------------------------ CODES ADDED BY VASU NAMAN ENDS HERE---------------------------------------------------------- */		
}
?>