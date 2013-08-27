<?php
	session_start();
	$result = 3;  // default value to remove undefined variable error
	if(isset($GLOBALS['_GET']['status'])){
		if($GLOBALS['_GET']['status'] == 'fail'){
			$result = 0;
		}
		else if($GLOBALS['_GET']['status'] == 'pass'){
			$result = 1;
		}
	
			 
	}
?>


<div id="dashboard">
	<div id="post_article">
    	<blockquote>
          <p>Post An Article Here</p>
        </blockquote>
        
        <div class="element1">
        <?php
			if($result == 0)
				echo '<div class="alert alert-error">
					  <button type="button" class="close" data-dismiss="alert">×</button>
					  <strong>Oh snap!</strong> Please fill all the elements
					</div>';
			else if($result == 1)
				echo '<div class="alert alert-success">
				  <button type="button" class="close" data-dismiss="alert">×</button>
				  <strong>Well done!</strong> You have successfully written your new article.
				</div>';
			

				
		?>
        	<form class="meta_tag" action="v-includes/functions/function.postarticle.php" method="post">
                <label class="label1">Article Heading:</label>
                	<input type="text" class="input1" name="article_heading" placeholder="Enter Article Heading" style="width: 447px;">
                <label class="label1">Author:</label>
                	<input type="text" class="input1" name="aerticle_author" placeholder="Enter Article Author" style="width: 447px;">
                <label class="label1">Brief:</label> 
               		<textarea class="ckeditor" id="" name="brief" placeholder="type the brief here" style="width:447px" ></textarea>
                	<textarea class="ckeditor" id="editor2" name="editor2" ></textarea>
                <input type="submit" value="submit" name="submit" class="btn btn-success btn-large nbutton"/>
            </form>
        </div>   
    </div>
</div>    
