<?php
	session_start();
?>
<div id="dashboard">
	<div id="homepage">
    	<blockquote>
        	<p>Create an Ad Owner</p>
        </blockquote>
        		<form class="polls" action="v-includes/functions/function.insert_adOwner.php" method="post">
                  <fieldset>
                    <div class="form-group">
                      <input type="hidden" name="believe" value="believe" />
                      <label for="exampleInputEmail" class="polllabel" style="width:140px;">Email</label>
                      <input type="text" class="form-control" name="owner_email" id="input_email" placeholder="Enter Email" style="width:500px" onblur="validateEmail('input_email','id_button')">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail" class="polllabel" style="width:140px;">Password</label>
                      <input type="text" class="form-control" name="owner_password" id="exampleInputEmail" placeholder="Enter Password" style="width:500px">

                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail" class="polllabel" style="width:140px;">Re Type Password</label>
                      <input type="text" class="form-control" name="owner_password_r" id="exampleInputEmail" placeholder="Re Enter Password" style="width:500px">

                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail" class="polllabel" style="width:140px;">Address 1</label>
                      <input type="text" class="form-control" name="add_line_1" id="exampleInputEmail" placeholder="Enter Password" style="width:500px">

                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail" class="polllabel" style="width:140px;">Address 2</label>
                      <input type="text" class="form-control" name="add_line_2" id="exampleInputEmail" placeholder="Enter Password" style="width:500px">

                    </div>
                    <div class="error_result"><?php if(isset($_SESSION['result'])){echo $_SESSION['result']; unset($_SESSION['result']);}?></div>
                    <button type="submit" class="btn btn-primary" id="id_button" style="margin-right:153px;float:right;">Create</button>
                  </fieldset>
                </form> 



		</div>
	</div>
</div>