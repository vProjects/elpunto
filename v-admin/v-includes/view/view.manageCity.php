<?php
	header('Content-Type: text/html; charset=utf-8');
	session_start();
	include '../class/class.manageusers.php';
	$manage_UI = new manageusers();
	//get social links
	$cities = $manage_UI->getValue('city');
	//print_r($cities);
?>

<div id="dashboard">
	<div id="mailbox" style="height:500px">
    
     <blockquote>
          <p>Add City of your site</p>
          <small>It will help <cite title="Source Title">you in city changes</cite></small>
      </blockquote>
      
      <div class="container_navbar_manage">
      	<form action="v-includes/functions/function.insertCity.php" class="meta_tag" method="post">
       		<div class="form-group">
              <label for="exampleInputEmail" class="polllabel" style="width:140px;">City</label>
              <input type="text" class="form-control" name="city_name" id="exampleInputEmail" placeholder="Add a city" style="width:500px">
			</div>
        
          <button type="submit" class="btn btn-primary" onClick="" style="float:right;margin-right: 94px;">Add</button>
        </form>
       
          <p>Delete City of your site</p>
         
     
        
        <form action="v-includes/functions/function.deleteCity.php" class="meta_tag" method="post">
       		<div class="form-group">
              <label for="exampleInputEmail" class="polllabel" style="width:140px;">City</label>
              	
                <select class="input1" name="city_id" style="width:514px;">
                    <option value="">Select One</option>
                    <?php
                        //get the select element value of menu dynamically
                        foreach($cities as $city)
                        {
                            echo '<option value="'.$city['id'].'">'.$city['city_name'].'</option>';
                        }
                    ?>
                </select>
               <!-- <input type="text" class="form-control" name="city_name" id="exampleInputEmail" placeholder="update city" style="width:500px;margin-left: 155px;">-->
			</div>
        
          <button type="submit" class="btn btn-primary" onClick="" style="float:right;margin-right: 94px;">Delete</button>
        </form>
      </div>
    </div>
</div>