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
	
	// this section impplements the functionality of deleting the articles
	if(isset($GLOBALS['_POST']['submit'])){
		echo $GLOBALS['_POST']['abc'];
	}
	// get the article id ==> $GLOBALS['_GET']['article_id'];
	//get the article details from aricle info table
	$getArticle = $manageUsers->getValue_where('article_info','*','id',$GLOBALS['_GET']['article_id']);
?>


<div id="dashboard">
	<div id="post_article" style=" height: 650px;">
    	<blockquote>
          <p>Update An Article Here</p>
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
        	<form class="meta_tag" action="v-includes/functions/function.updateArticle.php" method="post">
            	<input type="hidden" value="<?php echo $GLOBALS['_GET']['article_id']; ?>" name="article_id"/>
                <label class="label1">Article Heading:</label>
                	<input type="text" class="input1" value="<?php echo $getArticle[0]['article_title'];?>" name="article_heading" placeholder="Enter Article Heading" style="width: 447px;">
                <label class="label1">Author:</label>
                	<input type="text" class="input1" value="<?php echo $getArticle[0]['article_author'];?>" name="article_author" placeholder="Enter Article Author" style="width: 447px;">
                <label class="label1">End Date:</label>
                	<input type="text" class="input1" name="article_end" value="<?php echo $getArticle[0]['end_date'];?>" placeholder="YYYY-MM-DD" style="width: 447px;" value="<?php echo $date = date('Y-m-d'); ?>">
                <label class="label1">Brief:</label> 
               		<textarea id="" name="brief" placeholder="type the brief here" style="width:447px" ><?php echo $getArticle[0]['article_brief'];?></textarea>
                	<textarea class="ckeditor" id="editor7" name="editor7" ><?php echo $getArticle[0]['article_description'];?></textarea>
                <input type="submit" value="UPDATE" name="submit" class="btn btn-success btn-large nbutton"/>
            </form>
        
	</div>   
    </div>
</div>    
