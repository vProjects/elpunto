<?php
	session_start();
	


?>

<div id="dashboard">
	<div id="mailbox">
    	<blockquote>
          <p>Manage Meta tags of your site</p>
          <small>It will help <cite title="Source Title">you in SEO</cite></small>
        </blockquote>
		<div class="element1">
        <form class="meta_tag" action="v-includes/functions/function.changepassword.php" method="post">
        	<label class="label1">Old Password:</label><input type="text" class="input1" name="oldPassword" placeholder="Enter Old Password" style="width: 447px;">
            <label class="label1">Old Password:</label><input type="text" class="input1" name="oldPassword1" placeholder="Enter Old Password" style="width: 447px;">
            <label class="label1">New Password:</label><input type="text" class="input1" name="newPassword" placeholder="Enter New Password" style="width: 447px;">
            <label class="label1">New Password:</label><input type="text" class="input1" name="newPassword1" placeholder="Enter New Password" style="width: 447px;">
            <?php if(isset($result)) echo $result ?>
            <button type="submit" class="btn btn-primary" onClick="">submit</button> 
        
        </form>
		</div>
    
    
    
    </div>


</div>