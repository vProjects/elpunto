<?php
	header('Content-Type: text/html; charset=utf-8');
	session_start();
	include '../class/class.manageusers.php';
	$manage_UI = new manageusers();
	
	$getEmails = $manage_UI->getValue_sorted('owner_info','*','owner_email');
	$getCompanyNames = $manage_UI->getValue_where('company_info','company_name','company_email',$GLOBALS['_GET']['email']);
	$getOwnerName = $manage_UI->getValue_where('owner_info','owner_name','owner_email',$GLOBALS['_GET']['email']);
?>
<div id="dashboard">
	<div id="homepage" style="height:600px;">
    	<blockquote>
        	<p>Update an Ad Owner</p>
        </blockquote>
        		<form class="polls" action="v-includes/functions/function.update_adOwner.php" method="post">
                  <fieldset>
                    <div class="form-group">
                      <label for="exampleInputEmail" class="polllabel" style="width:140px;">Email</label>
                      <select class="input1" name="email_previous" style="margin-right: 88px;width: 514px;" onchange="adOwnerInfo(this.value)">
                            <option value="">Select One</option>
                            <?php
								foreach($getEmails as $email)
								{
									echo '<option value="'.$email["owner_email"].'"';
									if($email["owner_email"] == $GLOBALS['_GET']['email']){echo 'selected="selected"';}
									echo '>'.$email["owner_email"].'</option>';
								}
							?>
                        </select>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail" class="polllabel" style="width:140px;">New Email</label>
                      <input type="text" class="form-control" name="new_email" id="new_email" onblur="validateEmail('new_email','btn_submit')" placeholder="Enter Password" style="width:500px">

                    </div>
                    <div class="error_result"><?php if(isset($_SESSION['result'])){echo $_SESSION['result']; unset($_SESSION['result']);}?></div>
                    <button type="submit" class="btn btn-primary" id="btn_submit" style="margin-right:153px;float:right;">Update</button>
                  </fieldset>
                </form> 
                <form class="polls" action="v-includes/functions/function.updateAdOwner_name.php" method="post">
                  <fieldset>
                    <div class="form-group">
                      <label for="exampleInputEmail" class="polllabel" style="width:140px;">Email</label>
                      <select class="input1" name="email_previous" style="margin-right: 88px;width: 514px;" onchange="adOwnerInfo(this.value)">
                            <option value="">Select One</option>
                            <?php
								foreach($getEmails as $email)
								{
									echo '<option value="'.$email["owner_email"].'"';
									if($email["owner_email"] == $GLOBALS['_GET']['email']){echo 'selected="selected"';}
									echo '>'.$email["owner_email"].'</option>';
								}
							?>
                        </select>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail" class="polllabel" style="width:140px;">Ad Owner Name</label>
                      <input type="text" class="form-control" name="ad_owner_name" value="<?php echo $getOwnerName[0]['owner_name']; ?>" style="width:500px">

                    </div>
                    <div class="error_result"><?php if(isset($_SESSION['result1'])){echo $_SESSION['result1']; unset($_SESSION['result1']);}?></div>
                    <button type="submit" class="btn btn-primary" id="btn_submit" style="margin-right:153px;float:right;">Update</button>
                  </fieldset>
                </form> 
				<div class="adowner_company">
                	<h3>Company Name</h3>
					<?php
						if(!empty($getCompanyNames))
						{
							//print the value of company name
							foreach($getCompanyNames as $getCompanyName)
							{
								echo $getCompanyName['company_name'].'<br/>';
							}
						}
						else
						{
							echo 'No company found.';
						}
					?>
                </div>
		</div>
	</div>
</div>