<?php 
	$pageTitle = 'WC admin';
	session_start();  //starts the session for this page
	
	//checks whether user is logged in or not
	if(isset($_SESSION['code'])){
		if($_SESSION['code'] == 'JW3QM4Pq990lHYH115It9kIczy2IWzy9'){
			header('Location: admin.php');
		}
	}
	


	include('v-includes/header.php');
	include('v-includes/nav.php');
?>
  <div class="form_signin">
  <div class="product_image"><img src="img/header_logo.png" alt="burnagram"> </div>
   <h3 class="login_form"> Please Log in </h3>
    <form class="form-horizontal" action="v-includes/functions/function.login.php" method="post">
      <div class="control-group">
        <label class="control-label login_form" for="inputEmail">Email</label>
        <div class="controls">
          <input type="text" name="email" id="inputEmail" placeholder="Email">
        </div>
      </div>
      <div class="control-group">
        <label class="control-label login_form" for="inputPassword">Password</label>
        <div class="controls">
          <input type="password" name="password" id="inputPassword" placeholder="Password">
        </div>
      </div>
      <?php 
	  if(0){
      print '<div class="alert">
  		<button type="button" class="close" data-dismiss="alert">&times;</button>
  		<strong>Warning!</strong> Best check yo self.
	  </div>';
	  }
	 ?>
      <div class="control-group">
        <div class="controls">
          <label class="checkbox login_form">
            <input type="checkbox"> Remember me
          </label>
          <button type="submit" class="btn btn-primary">Sign in</button>
        </div>
      </div>
    </form>
    <ul class="login_form">
    	
        <li><a href="#"> Powered by Vyrazu.com</a></li>
    </ul>
    </div>
<?php include('v-includes/footer.php'); ?>
