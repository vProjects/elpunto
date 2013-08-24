<?php
print_r($GLOBALS);

?>

<?php 
	include('../class/class.manageusers.php');
	$manageUsers = new manageusers();
	
	$services =  $manageUsers->pageContent('services');
	
?>


<div id="dashboard">
	<div id="homepage">
    	<blockquote>
        	<p>Manage Services Page Content of your site</p>
        	<small>It will help <cite title="Source Title">you to manage content for the Services page</cite></small>
        </blockquote>
		<div id="managePageContent">
        
        
    	<blockquote>
        	<p>Manage Services Page Top Content of your site</p>
        </blockquote>

             <div class="form-group">
                <form action="v-includes/functions/function.manageservices.php" name="bannertext" method="post">
                	<input type="hidden" name="topcontent" value="topcontent" />
                    <textarea class="ckeditor" id="editor1" name="editor1"><?php echo $services[0]['content'] ?></textarea>
                    <input type="submit" value="submit" class="btn btn-success btn-large nbutton"/>
                </form>
			 </div>
             
    	<blockquote>
        	<p>Manage Left section service Page Content of your site</p>
        </blockquote>
           
             <div class="form-group">
                <form action="v-includes/functions/function.manageservices.php" name="bannertext" method="post">
                	<input type="hidden" name="leftcontent" value="leftcontent" />
                    <textarea class="ckeditor" id="editor2" name="editor2"><?php echo $services[1]['content'] ?></textarea>
                    <input type="submit" value="submit" class="btn btn-success btn-large nbutton"/>
                </form>
			 </div>

    	<blockquote>
        	<p>Manage Right section service Page Content of your site</p>
        </blockquote>

              <div class="form-group">
                <form action="v-includes/functions/function.manageservices.php" name="bannertext" method="post">
                	<input type="hidden" name="rightcontent" value="rightcontent" />
                    <textarea class="ckeditor" id="editor3" name="editor3"><?php echo $services[2]['content'] ?></textarea>
                    <input type="submit" value="submit" class="btn btn-success btn-large nbutton"/>
                </form>
			 </div>

    	<blockquote>
        	<p>Manage Login Page Content of your site</p>
        </blockquote>

              <div class="form-group">
                <form action="v-includes/functions/function.manageservices.php" name="bannertext" method="post">
                	<input type="hidden" name="login" value="login" />
                    <textarea class="ckeditor" id="editor3" name="editor4"><?php echo $services[3]['content'] ?></textarea>
                    <input type="submit" value="submit" class="btn btn-success btn-large nbutton"/>
                </form>
			 </div>

    	<blockquote>
        	<p>Manage About Us Page Content of your site</p>
        </blockquote>

              <div class="form-group">
                <form action="v-includes/functions/function.manageservices.php" name="bannertext" method="post">
                	<input type="hidden" name="about" value="about" />
                    <textarea class="ckeditor" id="editor5" name="editor5"><?php echo $services[4]['content'] ?></textarea>
                    <input type="submit" value="submit" class="btn btn-success btn-large nbutton"/>
                </form>
			 </div>
        
		</div>
     </div>
</div>