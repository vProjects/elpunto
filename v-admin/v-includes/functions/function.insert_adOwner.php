<?php
	session_start();
	include '../class/class.manageusers.php';
	$manageData = new manageusers();
	$resule = '';
	if($_SERVER['REQUEST_METHOD'] == 'POST')
	{
		$owner_email = $_POST['owner_email'];
		$owner_password = $_POST['owner_password'];
		$owner_password_r = $_POST['owner_password_r'];
		$add_line_1 = $_POST['add_line_1'];
		$add_line_2 = $_POST['add_line_2'];		
	}
	
	if(isset($owner_email) && $owner_email != "" && isset($owner_password) && $owner_password != "" && isset($owner_password_r) && $owner_password_r != "" )
	{
		/* this sections of code is added by Vasu Naman */
			$checkEmailExist = $manageData->checkMail($owner_email);
			
				if($checkEmailExist != 'Email Exist')
							
					{
				/* sections of code added by Vasu Naman ends here*/
						if($owner_password == $owner_password_r)
						{
								$result = $manageData->insert_adOwner($owner_email,$owner_password);
							//update the add owner address line 1
							if(isset($add_line_1) && $add_line_1 != "")
							{
								$result = $manageData->update_byColumn('owner_info','owner_address_1',$add_line_1,'owner_email',$owner_email);
							}
							//update the add owner address line 2
							if(isset($add_line_2) && $add_line_2 != "")
							{
								$result = $manageData->update_byColumn('owner_info','owner_address_2',$add_line_2,'owner_email',$owner_email);
							}
						}
						else
						{
							$_SESSION['result'] = "Password Don't match";
						}
				}
				else {
					$mailExist = 'mail exist';
				}
				//codes for update result using session
				
				if($result > 0)
				{
					$_SESSION['result'] = "Update Successful.";
				}
				
				if($mailExist == 'mail exist'){
					$_SESSION['result'] = 'Mail Exist';
				}
				
				
	}
	else
	{	
		$_SESSION['result'] = "Please fill the form properly";
	}
	
	
	
	//redirection varriable insertAds_owner
	header('location: ../../admin.php?value=insertAds_owner');
?>