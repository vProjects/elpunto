<?php
	header('Content-Type: text/html; charset=iso-8859-1');
	session_start();
	include '../class/class.manageusers.php';
	$manage_UI = new manageusers();
	
	$menus = $manage_UI->getMenu_sorted('vertical_navbar','*','level',0);
	$submenus = $manage_UI->getMenu_sorted('vertical_navbar','*','level',1);
?>

<div id="dashboard">
	<div id="homepage">
    	<blockquote>
        	<p>Update Ads for Elpunto de Venta</p>
        	<small>It will help <cite title="Source Title">you to update ads for your site</cite></small>
        </blockquote>
        <!--search box-->
        <div class="form-group" style="margin-top:20px;">
          <label for="exampleInputEmail" class="polllabel" style="width:auto;margin-left:50px;">Search by Company or Owner name</label>
          <input type="text" class="form-control" name="first_believe" id="exampleInputEmail" placeholder="Enter 1st believe" style="width:275px">
          <input type="button" class="btn btn-warning" value="search" style="margin-top:-11px;"/>
        </div>
        
		<div id="managePageContent">
        		    <table class="table table-hover">
                    <caption>All Ads Present</caption>
                    <thead>
                        <tr>
                            <th>Company Name</th>
                            <th>Duration</th>
                            <th>Start Date</th>
                            <th>End Date Date</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                        <tbody>
                            <tr>
                                <td>Grafti Caart</td>
                                <td>1 Year</td>
                                <td>20-06-2013</td>
                                <td>20-06-2014</td>
                                <td>ACTIVE</td>
                            </tr>
                            <tr>
                                <td>Grafti Caart</td>
                                <td>1 Year</td>
                                <td>20-06-2013</td>
                                <td>20-06-2014</td>
                                <td>ACTIVE</td>
                            </tr>
                            <tr>
                                <td>Grafti Caart</td>
                                <td>1 Year</td>
                                <td>20-06-2013</td>
                                <td>20-06-2014</td>
                                <td>ACTIVE</td>
                            </tr>
                            <tr>
                                <td>Grafti Caart</td>
                                <td>1 Year</td>
                                <td>20-06-2013</td>
                                <td>20-06-2014</td>
                                <td>ACTIVE</td>
                            </tr>
                            <tr>
                                <td>Grafti Caart</td>
                                <td>1 Year</td>
                                <td>20-06-2013</td>
                                <td>20-06-2014</td>
                                <td>ACTIVE</td>
                            </tr>
                        </tbody>
                    </table> 		
		</div>
	</div>
</div>