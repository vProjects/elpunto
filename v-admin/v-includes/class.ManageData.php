<?php
	//This file contains the database details and dbConnection class
	include "class.database.php";
	
	class ManageData
	{
		public $link;
		
		//construct function
		function __construct()
		{
			$db_Connection = new dbConnection();
			$this->link = $db_Connection->connect();
			return $this->link;
		}
		
		function getValue($table_name,$value,$row_value,$value_entered)
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
		
		function insert_generalInfo($table_name,$l_name,$f_name,$street_address,$city,$state,$zipcode,$cell_number,$work_number,$other_number,$preffered,$email_1,$email_2,$skills,$goal,$careerplan_5,$careerplan_10,$question_forus,$upload_photo,$upload_resume,$upload_application)
		{
			$query = $this->link->prepare("INSERT INTO $table_name (`l_name`, `f_name`, `street_address`, `city`, `state`, `zipcode`, `cell_num`, `work_num`, `other_num`, `preffered_num`, `email_1`, `email_2`, `skill`, `goal`, `careerplan_5`, `careerplan_10`, `question_forus`, `uploaded_photo`, `uploaded_resume`, `uploaded_doc`) VALUES(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)");
			$values = array($l_name,$f_name,$street_address,$city,$state,$zipcode,$cell_number,$work_number,$other_number,$preffered,$email_1,$email_2,$skills,$goal,$careerplan_5,$careerplan_10,$question_forus,$upload_photo,$upload_resume,$upload_application);
			
			$query->execute($values);
			$counts = $query->rowCount();
			return $counts; 
		}
		function insert_educationInfo($table_name,$id,$hs_name,$hs_date,$hs_degree,$college_name,$college_date,$college_degree,$other_name,$other_date,$other_degree,$current_status)
		{
			$query = $this->link->prepare("INSERT INTO $table_name ( `id`,`hs_name`, `hs_date`, `hs_degree`, `college_name`, `college_date`, `college_degree`, `other_name`, `other_date`, `other_degree`, `current_status`) VALUES(?,?,?,?,?,?,?,?,?,?,?)");
			$values = array($id,$hs_name,$hs_date,$hs_degree,$college_name,$college_date,$college_degree,$other_name,$other_date,$other_degree,$current_status);
			$query->execute($values);
			$counts = $query->rowCount();
			return $counts; 
		}
		
		function insert_employmentInfo($table_name,$id,$em_name,$em_address,$em_doe,$em_position,$em_resposiblity,$em_rol,$em_c_name,$em_c_address,$em_c_doe,$em_c_position,$em_c_resposiblity,$em_c_rol)
		{
			$query = $this->link->prepare("INSERT INTO $table_name  (`id`, `em_name`, `em_address`, `em_doe`, `em_position`, `em_responsiblities`, `em_rol`, `em_c_name`, `em_c_address`, `em_c_doe`, `em_c_position`, `em_c_responsiblities`, `em_c_rol`) VALUES(?,?,?,?,?,?,?,?,?,?,?,?,?)");
			$values = array($id,$em_name,$em_address,$em_doe,$em_position,$em_resposiblity,$em_rol,$em_c_name,$em_c_address,$em_c_doe,$em_c_position,$em_c_resposiblity,$em_c_rol);
			$query->execute($values);
			$counts = $query->rowCount();
			return $counts; 
		}
		
	}

?>