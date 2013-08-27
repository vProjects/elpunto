<?php 
	header('Content-Type: text/html; charset=iso-8859-1');
	include('../class/class.manageusers.php');
	$manageUsers = new manageusers();
	
	$otherpages =  $manageUsers->pageContent('otherpage');
	
?>


<div id="dashboard">
	<div id="homepage">
    	<blockquote>
        	<p>Manage Content of your site</p>
        	<small>It will help <cite title="Source Title">you to manage content for your site</cite></small>
        </blockquote>
		<div id="managePageContent">
        
        
    	<blockquote>
        	<p>Manage About Us Page Content of your site</p>
        </blockquote>

             <div class="form-group">
                <form action="v-includes/functions/function.manageotherpages.php" name="bannertext" method="post">
                	<input type="hidden" name="aboutus" value="aboutus" />
                    <textarea class="ckeditor" id="editor1" name="editor1"><?php echo $otherpages[0]['content'] ?></textarea>
                    <input type="submit" value="submit" class="btn btn-success btn-large nbutton"/>
                </form>
			 </div>
             
    	<blockquote>
        	<p>Manage Announcing page Content of your site</p>
        </blockquote>
           
             <div class="form-group">
                <form action="v-includes/functions/function.manageotherpages.php" name="bannertext" method="post">
                	<input type="hidden" name="announcing" value="announcing" />
                    <textarea class="ckeditor" id="editor2" name="editor2"><?php echo $otherpages[1]['content'] ?></textarea>
                    <input type="submit" value="submit" class="btn btn-success btn-large nbutton"/>
                </form>
			 </div>

    	<blockquote>
        	<p>Manage Terms and condition Page Content of your site</p>
        </blockquote>

              <div class="form-group">
                <form action="v-includes/functions/function.manageotherpages.php" name="bannertext" method="post">
                	<input type="hidden" name="terms" value="terms" />
                    <textarea class="ckeditor" id="editor3" name="editor3"><?php echo $otherpages[2]['content'] ?></textarea>
                    <input type="submit" value="submit" class="btn btn-success btn-large nbutton"/>
                </form>
			 </div>

    	<blockquote>
        	<p>Manage Contact Us page Content of your site</p>
        </blockquote>

              <div class="form-group">
                <form action="v-includes/functions/function.manageotherpages.php" name="bannertext" method="post">
                	<input type="hidden" name="contact" value="contact" />
                    <textarea class="ckeditor" id="editor3" name="editor4"><?php echo $otherpages[3]['content'] ?></textarea>
                    <input type="submit" value="submit" class="btn btn-success btn-large nbutton"/>
                </form>
			 </div>

        
		</div>
     </div>
</div>