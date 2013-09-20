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
                  <option value="inicio">Inicio</option>
                  <option value="about">About</option>
                  <option value="announce">Article List</option>
                  <option value="fullarticle">Full Article</option>
                  <option value="terms">Terms</option>
                  <option value="contact">Contact</option>
                  <option value="company">Company</option>
                  <option value="articlebyauth">Article By Author</option>
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
          <p>Create Ad Owner</p>
          <small>Easily Create <cite title="Source Title">Ad Owner from here</cite></small>
        </blockquote>
        <div class="element">
        		<form class="polls" action="v-includes/functions/function.insert_adOwner.php" method="post" style="padding:17px 0px 0px 0px;">
                  <fieldset>
                    <div class="form-group">
                      <input type="hidden" name="believe" value="believe" />
                      <label for="exampleInputEmail" class="polllabel" style="width:140px;">Email</label>
                      <input type="text" class="form-control" name="owner_email" id="input_email" placeholder="Enter Email" style="width:300px" onblur="validateEmail('input_email','id_button')">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail" class="polllabel" style="width:140px;">Password</label>
                      <input type="text" class="form-control" name="owner_password" id="exampleInputEmail" placeholder="Enter Password" style="width:300px">

                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail" class="polllabel" style="width:140px;">Re Type Password</label>
                      <input type="text" class="form-control" name="owner_password_r" id="exampleInputEmail" placeholder="Re Enter Password" style="width:300px">

                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail" class="polllabel" style="width:140px;">Address 1</label>
                      <input type="text" class="form-control" name="add_line_1" id="exampleInputEmail" placeholder="Enter Password" style="width:300px">

                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail" class="polllabel" style="width:140px;">Address 2</label>
                      <input type="text" class="form-control" name="add_line_2" id="exampleInputEmail" placeholder="Enter Password" style="width:300px">

                    </div>
                    <div class="error_result"><?php if(isset($_SESSION['result'])){echo $_SESSION['result']; unset($_SESSION['result']);}?></div>
                    <button type="submit" class="btn btn-primary" id="id_button" style="margin-right:153px;float:right;">Create</button>
                  </fieldset>
                </form> 
        
        
			</div>

    </div>
    <div class="clearfix"></div>





</div>