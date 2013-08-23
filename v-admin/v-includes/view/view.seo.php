<?php
print_r($GLOBALS);

?>

<div id="dashboard">
	<div id="mailbox">
    	<blockquote>
          <p>Manage Meta tags of your site</p>
          <small>It will help <cite title="Source Title">you in SEO</cite></small>
        </blockquote>
		<div class="element1">
        <form class="meta_tag" action="v-includes/functions/function.addmetatag.php" method="post">
        	<label class="label1">Enter Discription:</label><input type="text" class="input1" name="description" placeholder="Enter Discription" style="width: 447px;">
            <label class="label1">Select the Page</label>
            	<select class="input1" name="page">
                  <option value="index">Home Page</option>
                  <option value="portfolio">Portfolio</option>
                  <option value="login">Login</option>
                  <option value="services">Services</option>
                  <option value="about">About</option>
                  <option value="contact">Contact</option>
                </select>
            <button type="submit" class="btn btn-primary" onClick="">submit</button> 
        
        </form>
        <form class="meta_tag" action="v-includes/functions/function.addmetatag.php" method="post">
        	<label class="label1">Enter Keywords:</label><input type="text" class="input1"  name="keywords" placeholder="Enter Keywords" style="width: 447px;">
            <label class="label1">Select the Page</label>
            	<select class="input1" name="page">
                  <option value="index">Home Page</option>
                  <option value="portfolio">Portfolio</option>
                  <option value="login">Login</option>
                  <option value="services">Services</option>
                  <option value="about">About</option>
                  <option value="contact">Contact</option>
                </select>
            <button type="submit" class="btn btn-primary" onClick="">submit</button> 
        
        </form>
		</div>
    
    
    
    </div>


</div>