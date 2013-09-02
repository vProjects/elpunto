<?php
	header('Content-Type: text/html; charset=utf-8');
	session_start();
	include '../class/class.manageusers.php';
	$manage_UI = new manageusers();
	
	
?>
             

<div id="dashboard">
	<div id="mailbox" style="height:500px">
		<!--create new sub menu form--->
        <blockquote>
          <p>Update Category Description of your site</p>
          <small>It will help <cite title="Source Title">you in category changes</cite></small>
        </blockquote>
		<div class="container_navbar_manage">
        <form class="meta_tag" action="v-includes/functions/function.update_categoryDescription.php" method="get">
        	<label class="label1" style="margin-right:0px;">Select Menu</label>
            
        	<label class="label1" style="margin-right:0px;">Category Description:</label>
            <textarea id="" class="ckeditor" style="width:573px;" name="category_description" placeholder="type the brief here"></textarea>
            <?php if(isset($result)) echo $result ?>
            <button type="submit" class="btn btn-primary" onClick="" style="float:right;margin-right: 42px;">Update</button> 
        </form>
		</div><!--sub menu create form ends here-->     
    </div>   
</div>