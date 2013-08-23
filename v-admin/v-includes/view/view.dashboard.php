<div id="dashboard">
	
	<div class="dashboard_elements"> 
    	<blockquote>
          <p>Manage Meta tags of your site</p>
          <small>It will help <cite title="Source Title">you in SEO</cite></small>
        </blockquote>
    	<div class="element">
        <form class="meta_tag" action="v-includes/functions/function.addmetatag.php" method="post">
        	<label class="label">Enter Keywords:</label><input type="text" class="input" name="keywords" placeholder="Enter Keywords">
            <label class="label">Select the Page</label>
            	<select class="input" name="page">
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
    <div style="width:25px; height:300px; float:left"></div>
    <div class="dashboard_elements"> 
    	<blockquote>
          <p>Visits graphs for your site</p>
          <small>Check your <cite title="Source Title">Site stats</cite></small>
        </blockquote>
     	<div class="element">
        	<div id="chart_div"></div>  <!-- div responsible to load chart and 
            								you can manipulate chart by changing the home page variable of google charts -->
        </div>
    </div>
    <div class="dashboard_elements"> 
    	<blockquote>
          <p>Send Mail to your customers</p>
          <small>Send mail to your customer or <cite title="Source Title">Any one you want</cite></small>
    	</blockquote>
        <div class="element">
        <form class="meta_tag" action="v-includes/functions/function.sendmail.php" method="post">
        	<label class="label">Enter recievers email:</label><input type="text" name="receivers_email" class="input" placeholder="Enter email">
            <label class="label">Enter The Message</label>
            	<textarea rows="3" class="input" name="message"></textarea>
            <button type="submit" class="btn btn-primary" onClick="">submit</button> 
        
        </form>
        </div>

    </div>
    <div style="width:25px; height:300px; float:left"></div>
    <div class="dashboard_elements"> 
    	<blockquote>
          <p>Lorem ipsum dolor </p>
          <small>Someone famous <cite title="Source Title">Source Title</cite></small>
        </blockquote>
        <div class="element">
        	<div id="chart_div1"></div>  <!-- div responsible to load chart and 
            								you can manipulate chart by changing the home page variable of google charts -->
			</div>

    </div>
    <div class="clearfix"></div>





</div>