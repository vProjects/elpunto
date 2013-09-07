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
        	<label class="label1">Password:</label><input type="text" class="input1" name="oldPassword" placeholder="Enter Old Password" style="width: 447px;">
            <label class="label1">New Password:</label><input type="text" class="input1" name="newPassword" placeholder="Enter New Password" style="width: 447px;">
            <label class="label1">New Password:</label><input type="text" class="input1" name="newPassword1" placeholder="Enter New Password" style="width: 447px;">
            
            <button type="submit" class="btn btn-primary" onClick="">submit</button> 
        <?php if(isset($_SESSION['result'])) {echo $_SESSION['result']; unset($_SESSION['result']); }?>
        </form>
		</div>
    
    
    
    </div>


</div>