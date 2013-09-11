<?php
	header('Content-Type: text/html; charset=utf-8');
	session_start();
	include '../class/class.manageusers.php';
	$manage_UI = new manageusers();
	
	$getEmails = $manage_UI->getValue_sorted('owner_info','*','owner_email');
?>
<div id="dashboard">
	<div id="homepage">
    	<blockquote>
        	<p>Update an Ad Owner</p>
        </blockquote>
        		<form class="polls" action="v-includes/functions/function.update_adOwner.php" method="post">
                  <fieldset>
                    <div class="form-group">
                      <label for="exampleInputEmail" class="polllabel" style="width:140px;">Email</label>
                      <select class="input1" name="email_previous" style="margin-right: 88px;width: 514px;">
                            <option value="">Select One</option>
                            <?php
								foreach($getEmails as $email)
								{
									echo '<option value="'.$email["owner_email"].'">'.$email["owner_email"].'</option>';
								}
							?>
                        </select>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail" class="polllabel" style="width:140px;">New Email</label>
                      <input type="text" class="form-control" name="new_email" id="exampleInputEmail" placeholder="Enter Password" style="width:500px">

                    </div>
                    
                    <button type="submit" class="btn btn-primary" style="margin-right:153px;float:right;">Update</button>
                  </fieldset>
                </form> 



		</div>
	</div>
</div>