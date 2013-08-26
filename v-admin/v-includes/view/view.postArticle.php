<?php
	session_start();

?>


<div id="dashboard">
	<div id="post_article">
    	<blockquote>
          <p>Post An Article Here</p>
        </blockquote>
        
        <div class="element1">
        	<form class="meta_tag" action="#" method="post">
            	<label class="label1">Article Heading:</label><input type="text" class="input1" name="article_heading" placeholder="Enter Article Heading" style="width: 447px;">
            <label class="label1">Author:</label><input type="text" class="input1" name="aerticle_author" placeholder="Enter Article Author" style="width: 447px;">
            <label class="label1">Description:</label> <textarea class="ckeditor" id="editor1" name="editor1"></textarea>
            <textarea class="ckeditor" id="editor2" name="editor2"></textarea>
            <input type="submit" value="submit" class="btn btn-success btn-large nbutton"/>
            </form>
        </div>   
    </div>
</div>    
