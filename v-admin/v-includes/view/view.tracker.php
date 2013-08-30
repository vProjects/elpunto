<?php
	header('Content-Type: text/html; charset=iso-8859-1');
	include('../class/class.manageusers.php');
	$manageUsers = new manageusers();
	$id = $_GET['id'];
	$loopIterator = $id;  // this will help to iterate the loop and show the active tab
	$totalRow = $manageUsers->allRow('tracking');    // this returns the total no of row in a table
	$trackingResults = $manageUsers->getTrackingResult($_GET['id'],$totalRow,'tracking'); // this returns 10 ros form last with some logic..
	$categories = $manageUsers->getCategroy();
?>
<div id="dashboard">
	<div id="tracker">
        <blockquote>
          <p>Check how your pages are getting visited</p>
          <small>It will help <cite title="Source Title">you to check the traffic for every </cite></small>
        </blockquote>
		<div class="element1" style="height:auto">
        <form class="meta_tag tracker" action="v-includes/functions/function.downloadexcel.php" method="post">
            <label class="label1">Select the Category</label>
            	<select class="input1" name="category">
                  <option value="Portapendones">Portapendones</option>
                  <option value="Grafti Cartt">Grafti Cartt</option>
                  <option value="Asesores en Internet S.A.S.">Asesores en Internet S.A.S.</option>
                <?php foreach($categories as $category){ ?>
                  <option value="<?php echo $category['menu_name'] ?>"><?php echo $category['menu_name'] ?></option>
                <?php } ?>
                </select>
            <label class="label1">Download data</label>
            	<select class="input1" name="duration">
                  <option value="7">For 1 week</option>
                  <option value="30">For 1 month</option>
                  <option value="60">For 2 month</option>
                  <option value="90">For 3 month</option>
                  <option value="180">For 6 month</option>
                  <option value="365">For 1 year</option>
                </select>
            <button type="submit" class="btn btn-primary excel" onClick="">Download As Excel</button> 
        
        </form>
        
        <table class="table">  
        <thead>  
          <tr>  
            <th>Browser</th>  
            <th>Date Time</th>  
            <th>IP</th>  
            <th>Catagory</th>  
          </tr>  
        </thead>  
        <tbody>
        <?php
			foreach($trackingResults as $trackingResult){ ?> 
          <tr>  
            <td><?php echo $trackingResult['browsername'].$trackingResult['id']?></td>  
            <td><?php echo $trackingResult['date']; echo '->'; echo $trackingResult['time']; ?></td>  
            <td><?php echo $trackingResult['ip']?></td>  
            <td><?php echo $trackingResult['category']?></td>  
          </tr>  
        <?php } ?>
        </tbody>  
      </table>  
      
      <div class="pagination">
          <ul>
            <li class="<?php if($id==1) echo 'disabled'; else echo ''; ?>"><a  onclick="loadFile('view.tracker.php?id=<?php echo $id-1; ?>')" >Prev</a></li>
            <?php for($i=$loopIterator;$i<=$loopIterator+5;$i++){ ?>
            <li class="<?php if($i==$_GET['id']) echo 'active'; else echo '';?>"><a  onclick="loadFile('view.tracker.php?id=<?php echo $id; ?>')"><?php echo $id++; ?></a></li>
            <?php } ?>
            <li ><a onclick="loadFile('view.tracker.php?id=<?php echo $id; ?>')">Next</a></li>
          </ul>
    </div>
        
        
		</div>
    </div>
</div>