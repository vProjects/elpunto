<?php
	header('Content-Type: text/html; charset=utf-8');
	session_start();
	include '../class/class.manageusers.php';
	$manage_UI = new manageusers();
	
	$company_name = $_GET['company_name'];
	echo $company_name;
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
        	<label class="label1" style="margin-right:0px;">Comapny Logo:</label>
            <input type="file" name="company_logo" class="input_file"/>
            <!--<label class="label1" style="margin-right:0px;">Secondary Image 1:</label>
            <input type="file" name="company_logo" style="width:580px;border:1px solid #C4C4C4;background-color: inactiveborder;float:right;"/>
            <label class="label1" style="margin-right:0px;">Secondary Image 2:</label>
            <input type="file" name="company_logo" style="width:580px;border:1px solid #C4C4C4;background-color: inactiveborder;float:right;"/>
            <label class="label1" style="margin-right:0px;">Secondary Image 3:</label>
            <input type="file" name="company_logo" style="width:580px;border:1px solid #C4C4C4;background-color: inactiveborder;float:right;"/>
            <label class="label1" style="margin-right:0px;">Secondary Image 4:</label>
            <input type="file" name="company_logo" style="width:580px;border:1px solid #C4C4C4;background-color: inactiveborder;float:right;"/>
            <label class="label1" style="margin-right:0px;">Secondary Image 5:</label>
            <input type="file" name="company_logo" style="width:580px;border:1px solid #C4C4C4;background-color: inactiveborder;float:right;"/>
            <label class="label1" style="margin-right:0px;">Secondary Image 6:</label>
            <input type="file" name="company_logo" style="width:580px;border:1px solid #C4C4C4;background-color: inactiveborder;float:right;"/>-->
            <?php if(isset($result)) echo $result ?>
            <button type="submit" class="btn btn-primary" onClick="" style="float:right;margin-right: 42px;">Update</button> 
        </form>
		</div><!--sub menu create form ends here-->     
    </div>   
</div>