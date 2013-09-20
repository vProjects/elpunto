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
	function insertArticle($aHeading, $aAuthor,$aEndDate, $aBrief, $aDesc,$date){
		$query = $this->link->prepare("INSERT INTO `article_info`(`article_title`, `article_author`, `end_date`, `article_brief`, `article_description` , `article_date`) VALUES (?,?,?,?,?,?)");
		$values = array($aHeading,$aAuthor,$aEndDate,$aBrief,$aDesc,$date);
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
	
	/*
	 * Function use to check whether ad_owner exist or not
	 */
	 function checkMail($owner_email){
	 	$query = $this->link->prepare("SELECT `password` FROM `owner_info` WHERE `owner_email` = '$owner_email'");
		$query->execute();
		$pwd = $query->fetchALL(PDO::FETCH_ASSOC);
		if(count($pwd)>0){
				return 'Email Exist';
			}
			else{
				return '';
			}
		
	 }
	 
	 
	 function getvalue_search_sorted($table_name,$value,$row_value,$value_entered,$order_by)
	{
		$query = $this->link->query("SELECT $value from $table_name WHERE ( $row_value LIKE '%".$value_entered."%') OR (`owner_name` LIKE '%".$value_entered."%') AND `status` = '1' ORDER BY $order_by ASC");
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
	 
	 
		
/* ------------------------------------ CODES ADDED BY VASU NAMAN ENDS HERE---------------------------------------------------------- */		
/*-----Author Anand-----*/
	function insertValue_menu($table_name,$menu_name,$menu_link,$parent_id,$position,$level)
	{		
		$query = $this->link->prepare("INSERT INTO `$table_name`(`menu_name`, `menu_link`, `parent_id`, `position`, `level`) VALUES (?,?,?,?,?)");
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
	
	//get email sorted according to alphabetical orders
	function getValue_sorted($table_name,$value,$order_by)
	{
		$query = $this->link->query("SELECT $value from $table_name ORDER BY $order_by ASC");
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
	//function get value 
	function getValue($table_name)
	{	
		$query = $this->link->query("SELECT * from $table_name");
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
	
	
	//function to get 10 consecutive values for tracking from the end
	/* get values id and total no of tables in table name returns last 10 rows in the consecutive orders
	*/
	function getTrackingResult($id,$totalRows,$tableName){
		
		if($id == 1){
			$from = $totalRows - 10;
			$to = $totalRows;
		}else{
			$from = $totalRows - $id*10;
			$to = $totalRows - ($id - 1)*10;
		}
		$query = $this->link->prepare("SELECT * FROM $tableName WHERE id BETWEEN '$from' AND $to order by date,time desc");
		$query->execute();
		return $query->fetchALL(PDO::FETCH_ASSOC);
		
	}
	
	//function to return total no of row
	function allRow($tableName){
		$query = $this->link->prepare("SELECT count(*) FROM $tableName");
		$query->execute();
		$noOfRows = $query->fetchALL(PDO::FETCH_ASSOC);
		return $noOfRows[0]['count(*)'];
	}
	
	function getCategroy(){
		$query = $this->link->prepare("SELECT menu_name FROM vertical_navbar");
		$query->execute();
		return $categories = $query->fetchALL(PDO::FETCH_ASSOC);

	}
	
	
	function getTrackingByTime($tableName,$today,$timeDifference,$category){
		$query = $this->link->prepare("SELECT * FROM $tableName 
										WHERE date BETWEEN '$timeDifference' AND '$today'
										AND category = '$category' order by date, time desc");
		$query->execute();
		return $query->fetchAll(PDO::FETCH_ASSOC);
	}
	//insert the ads
	function insertAds_details($c_name,$c_phone,$c_city,$c_email,$c_website,$c_owner,$c_desciption,$c_keywords,$c_start,$c_end,$c_status,$c_duration,$company_ads){
		$query = $this->link->prepare("INSERT INTO `company_info`( `company_name`, `company_tel`, `company_city`,  `company_email`,`company_website`, `owner_name`,`company_description`, `company_keywords`, `start_date`, `end_date`, `status`, `ad_duration`, `company_ads`) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?)");
		$values = array($c_name,$c_phone,$c_city,$c_email,$c_website,$c_owner,$c_desciption,$c_keywords,$c_start,$c_end,$c_status,$c_duration,$company_ads);
		
		$query->execute($values);
	}
	
	//get value according to the search result and search in the 'owner_name' and 'company_name'
	function getvalue_search($table_name,$value,$row_value,$value_entered)
	{
		$query = $this->link->query("SELECT $value from $table_name WHERE ( $row_value LIKE '%".$value_entered."%') OR (`owner_name` LIKE '%".$value_entered."%') AND `status` = '1'");
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
	//insert value of ad owner
	function insert_adOwner($owner_email,$password)
	{
		$query = $this->link->prepare("INSERT INTO `owner_info`(`owner_email`, `password`) VALUES (?,?)");
		$values = array($owner_email,$password);
		
		$query->execute($values);
		$rowcount = $query->rowCount();
		return $rowcount;
	}
	//update using the email
	function update_byColumn($table_name,$column_name,$column_value,$where_column,$where_value)
	{
		$query = $this->link->prepare("UPDATE `$table_name` SET `$column_name` = '$column_value' WHERE `$where_column` = '$where_value'");
		$query->execute();
		$count = $query->rowCount();
		return $count;
	}
	
	function getTrackingCount($tableName,$today,$timeDifference){
		$query = $this->link->prepare("SELECT count(*) FROM $tableName 
										WHERE date BETWEEN '$timeDifference' AND '$today'");
		$query->execute();
		return $query->fetchAll(PDO::FETCH_ASSOC);
	}
	
	/* functions to show stats for the click and views takes input as days
	*  and returns an array
	*/
	
	function stats($sevenDay, $fifDay, $thDay){
		//calculate the time difference
		$today = substr(date('Y-m-d H:i:s'),0,10);
		$sevenDay = date('Y-m-d',strtotime(date("Y-m-d", time()) . " - $sevenDay day"));
		$fifDay =   date('Y-m-d',strtotime(date("Y-m-d", time()) . " - $fifDay day"));
		$thDay = date('Y-m-d',strtotime(date("Y-m-d", time()) . " - $thDay day"));
		
		//takes the time difference value in variables
		$todaysTrackingInfo = $this->getTrackingCount('tracking',$today,$today);
		$sevendaytrackingInfo = $this->getTrackingCount('tracking',$today,$sevenDay);
		$fifdaytrackingInfo = $this->getTrackingCount('tracking',$today,$fifDay);
		$thdaytrackingInfo = $this->getTrackingCount('tracking',$today,$thDay);
		
		// assigning final values in an array
		$tracking = array(
						"today" => $todaysTrackingInfo[0]['count(*)'],
						"7 day" => $sevendaytrackingInfo[0]['count(*)'],
						"15 day" => $fifdaytrackingInfo[0]['count(*)'],
						"30 day" => $thdaytrackingInfo[0]['count(*)']
						);
						
		return $tracking;
	}

}
?>