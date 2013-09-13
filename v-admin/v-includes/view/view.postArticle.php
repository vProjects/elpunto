<?php
	include('../class/class.manageusers.php');
	$manageUsers = new manageusers();
	session_start();
	$result = 3;  // default value to remove undefined variable error
	if(isset($GLOBALS['_GET']['status'])){
		if($GLOBALS['_GET']['status'] == 'fail'){
			$result = 0;
		}
		else if($GLOBALS['_GET']['status'] == 'pass'){
			$result = 1;
		}
		else if($GLOBALS['_GET']['status'] == 'adel'){
			$result = 2;
		}
	
			 
	}
	$articleList = $manageUsers->getValue('article_info');
	
	// this section impplements the functionality of deleting the articles
	if(isset($GLOBALS['_POST']['submit'])){
		echo $GLOBALS['_POST']['abc'];
	}
?>


<div id="dashboard">
	<div id="post_article" style=" height: 650px;">
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
                <label class="label1">End Date:</label>
                	<input type="text" class="input1" name="article_end" placeholder="YYYY-MM-DD" style="width: 447px;" value="<?php echo $date = date('Y-m-d'); ?>">
                <label class="label1">Brief:</label> 
               		<textarea id="" name="brief" placeholder="type the brief here" style="width:447px" ></textarea>
                	<textarea class="ckeditor" id="editor4" name="editor4" ></textarea>
                <input type="submit" value="submit" name="submit" class="btn btn-success btn-large nbutton"/>
            </form>
        <?php
		if($result == 2)
				echo '<div class="alert alert-success">
				  <button type="button" class="close" data-dismiss="alert">×</button>
				  <strong>OOPS!!!</strong> You have deleted an article. Dont worry write a new one..by using the form above :)
				</div>';
		?>
		    
              
        <table class="table table-hover table-bordered newslettertable" >  
        <caption><h4>Article</h4></caption>
        <thead>
        <tr><td><h4>Article Info</h4></td></tr>  
          <tr>  
            <th>Article Heading</th>  
            <th>Author</th>  
            <th>Brief</th> 
            <th>End Date</th> 
            <th>Delete</th>  
          </tr>  
        </thead>  
        <tbody>
        <?php
			foreach($articleList as $article ){ ?> 
          <tr>  
            <td><?php echo $article['article_title'] ?></td>  
            <td><?php echo $article['article_author'] ?></td>  
            <td><?php echo $article['article_brief'] ?></td> 
            <td><?php echo $article['end_date'] ?></td> 
            <td><form method="post" action="v-includes/functions/function.postarticle.php">
            	<input type="hidden" name="id" value="<?php echo $article['id'] ?>" />
            	<input type="submit" value="delete" name="delete" />
                </form>
            </td>  
          </tr>  
        <?php } ?>
        </tbody>  
      </table>  
	</div>   
    </div>
</div>    
