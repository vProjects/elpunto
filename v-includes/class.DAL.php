<?php
	//include class library of database connecton
	if(!class_exists('dbConnection')){include 'class.database.php';}
	class ManageContent_DAL
	{
		public $link;
		
		//construct function
		function __construct()
		{
			$db_Connection = new dbConnection();
			$this->link = $db_Connection->connect();
			return $this->link;
		}
		
		
		function getValue($table_name,$value)
		{
			$query = $this->link->query("SELECT $value from $table_name");
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
		
		function getValue_distinct($table_name,$value)
		{
			$query = $this->link->query("SELECT DISTINCT $value from $table_name");
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
		
		function getValue_where($table_name,$value,$row_value,$value_entered)
		{
			try{
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
			catch(Exception $e)
			{
				throw "Result Not Found";
			}
		}
		//get all the latest aricles 
		function getValue_latest($table_name,$value)
		{
			$query = $this->link->query("SELECT $value from $table_name pet ORDER BY `article_date` DESC");
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
		//get latest article according to the author
		function getValue_latest_where($table_name,$value,$row_value,$value_entered)
		{
			$query = $this->link->query("SELECT $value from $table_name where $row_value='$value_entered' ORDER BY `article_date` DESC");
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
		
		//function for search functionality
		function getvalue_search($table_name,$value,$row_value,$value_entered)
		{
			//$value_entered = htmlentities($value_entered);
			$query = $this->link->query("SELECT $value from $table_name WHERE (( $row_value LIKE '%".$value_entered."%') OR (`company_city` LIKE '%".$value_entered."%') OR (`company_name` LIKE '%".$value_entered."%')) AND (`status` = '1') AND (`end_date` >= CURDATE()) ORDER BY RAND()");
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
		//get ads according to email(username)
		function getValue_email($table_name,$value,$row_value,$value_entered)
		{
			//$value_entered = htmlentities($value_entered);
			$query = $this->link->query("SELECT $value from $table_name WHERE $row_value LIKE '".$value_entered."'");
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
		//get submenus according to the position
		function getSubmenu_ordered($table_name,$value,$order)
		{
			$query = $this->link->query("SELECT $value from $table_name HAVING $order > 0  ORDER BY $order ASC");
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
		//get vertical nav sorted by parent_id and position
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
		
		// function to store user tracking results


		function insertTrackingValues($companyName,$browserName,$OS,$browserVersion,$date,$ip,$time){
			
			$query = $this->link->prepare("INSERT INTO `tracking`(`browserversion`, `os`, `browsername`, `ip`, `category`, `date`, `time`) VALUES (?,?,?,?,?,?,?)");
			$values = array($browserVersion,$OS,$browserName,$ip,$companyName,$date,$time);
			
			$query->execute($values);
		}
		//function for update of values
		function updateValue_email_owner($table_name,$column_name,$column_value,$email)
		{
			$query = $this->link->prepare("UPDATE `$table_name` SET `$column_name` = '$column_value' WHERE `owner_email` = '$email'");
			$query->execute();
			$count = $query->rowCount();
			return $count;
		}
		//function for update of values
		function updateValue_email_company($table_name,$column_name,$column_value,$email)
		{
			$query = $this->link->prepare("UPDATE `$table_name` SET `$column_name` = '$column_value' WHERE `company_name` = '$email'");
			$query->execute();
			$count = $query->rowCount();
			return $count;
		}
		
	}
?>