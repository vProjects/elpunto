<?php
	header('Content-Type: text/html; charset=utf-8');
	session_start();
	include '../class/class.manageusers.php';
	$manage_UI = new manageusers();
	
	$getEmails = $manage_UI->getValue('admin_profile','email_add');
?>
<div id="dashboard">
	<div id="homepage">
    	<blockquote>
        	<p>Update Contact Email</p>
        </blockquote>
        		<form class="polls" action="v-includes/functions/function.updateContactEmail.php" method="post">
                  <fieldset>
                    <div class="form-group">
                      <label for="exampleInputEmail" class="polllabel" style="width:140px;">Present Email</label>
                      <input type="text" class="form-control" name="present_email" readonly="readonly" placeholder="Enter Password" style="width:500px" value="<?php echo $getEmails[0]['email_add'];?>">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail" class="polllabel" style="width:140px;">New Email</label>
                      <input type="text" class="form-control" name="new_email" id="new_email" onblur="validateEmail('new_email','btn_submit')" placeholder="Enter Password" style="width:500px">
                    </div>
                    <div class="error_result"><?php if(isset($_SESSION['result'])){echo $_SESSION['result']; unset($_SESSION['result']);}?></div>
                    <button type="submit" class="btn btn-primary" id="btn_submit" style="margin-right:153px;float:right;">Update</button>
                  </fieldset>
                </form> 



		</div>
	</div>
</div>