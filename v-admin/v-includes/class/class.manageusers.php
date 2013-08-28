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
			if($page == 'otherpage')
				$query = $this->link->prepare("select * from otherpage");
				
			$query->execute();
			$pageContent = $query->fetchALL(PDO::FETCH_ASSOC);
			return $pageContent;
		}

	/*
	* Function use to update the content of different pages
	* @returns whether updated or not
	*/
	function updateOtherPage($page,$content){
		if($page=='aboutus')
			$query = $this->link->prepare("update `otherpage` SET `content` = '$content' where id = 1");
		else if($page == 'announcing')
			$query = $this->link->prepare("update `otherpage` SET `content` = '$content' where id = 2");
		else if($page == 'terms')
			$query = $this->link->prepare("update `otherpage` SET `content` = '$content' where id = 3");
		else if($page == 'contact')
			$query = $this->link->prepare("update `otherpage` SET `content` = '$content' where id = 4");
		$query->execute();
	}
	
	/*
	* Function use to update the content of different pages
	* @returns whether updated or not
	*/
	function insertArticle($aHeading, $aAuthor, $aBrief, $aDesc){
		$query = $this->link->prepare("INSERT INTO `article_info`(`article_title`, `article_author`, `article_brief`, `article_description`) VALUES (?,?,?,?)");
		$values = array($aHeading,$aAuthor,$aBrief,$aDesc);
		
		$query->execute($values);
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
/*-----Author Anand-----*/
	function insertValue_menu($table_name,$menu_name,$menu_link,$parent_id,$position,$level)
	{		
		$query = $this->link->prepare("INSERT INTO `vertical_navbar`(`menu_name`, `menu_link`, `parent_id`, `position`, `level`) VALUES (?,?,?,?,?)");
		$values = array($menu_name,$menu_link,$parent_id,$position,$level);
		$query->execute($values);
		$rowcount = $query->rowCount();
		return $rowcount;
	}
	//get vertical nav sorted by parent_id and position order asc
	function getMenu_sorted($table_name,$value,$order,$value_parent)
	{
		$query = $this->link->query("SELECT $value from $table_name HAVING $order = $value_parent ORDER BY $order,`parent_id`,`position` ASC");
		$query->execute();
		$rowcount = $query->rowCount();
		if($rowcount > 0){
			$result = $query->fetchAll(PDO::FETCH_ASSOC);
			return $result;
		}
		else{
			return $rowcount;
		}
	}
	//get vertical nav sorted by parent_id and position order desc
	function getMenu_sorted_DESC($table_name,$value,$order,$value_parent)
	{
		$query = $this->link->query("SELECT $value from $table_name HAVING $order = $value_parent ORDER BY $order,`parent_id`,`position` DESC");
		$query->execute();
		$rowcount = $query->rowCount();
		if($rowcount > 0){
			$result = $query->fetchAll(PDO::FETCH_ASSOC);
			return $result;
		}
		else{
			return $rowcount;
		}
	}
	
	//function for update of values
	function updateValue($table_name,$column_name,$column_value,$id)
	{
		$query = $this->link->prepare("UPDATE `$table_name` SET `$column_name` = '$column_value' WHERE `id` = $id");
		$query->execute();
		$count = $query->rowCount();
		return $count;
	}
	//function get value with where
	function getValue_where($table_name,$value,$row_value,$value_entered)
	{
		$query = $this->link->query("SELECT $value from $table_name where $row_value='$value_entered'");
		$query->execute();
		$rowcount = $query->rowCount();
		if($rowcount > 0){
			$result = $query->fetchAll(PDO::FETCH_ASSOC);
			return $result;
		}
		else{
			return $rowcount;
		}
	}
	function getValue_where_menu($table_name,$value,$row_value,$value_entered,$parent_id)
	{
		$query = $this->link->query("SELECT $value from $table_name where $row_value='$value_entered' AND `parent_id` = '$parent_id'");
		$query->execute();
		$rowcount = $query->rowCount();
		if($rowcount > 0){
			$result = $query->fetchAll(PDO::FETCH_ASSOC);
			return $result;
		}
		else{
			return $rowcount;
		}
	}
	function deleteValue($table_name,$column_name,$column_value)
	{
		$queryString = "DELETE FROM $table_name WHERE $column_name =$column_value";
		$query = $this->link->prepare($queryString);
		$query->execute();
		$count = $query->rowCount();
		return $count;
	}
}
?>