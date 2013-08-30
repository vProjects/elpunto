<?php
	include('../class/class.manageusers.php');
	$manageUsers = new manageusers();
	$category = $_POST['category'];
	header("Content-type: application/vnd.ms-excel");
	header("Content-type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet");
	header("Content-Disposition: attachment; filename= category.xls");
	header("Pragma: no-cache");
	header("Expires: 0");
	
	
	$duration = $_POST['duration'];
	$today = substr(date('Y-m-d H:i:s'),0,10);
	$timeDifference = date('Y-m-d',strtotime(date("Y-m-d", mktime()) . " + $duration day"));
	$trackingInfo = $manageUsers->getTrackingByTime('tracking',$today,$timeDifference,$_POST['category']);
	

	


?>
        <table class="table" style="background-color:red">  
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
			foreach($trackingInfo as $trackedData){ ?> 
          <tr>  
            <td><?php echo $trackedData['browsername'] ?></td>  
            <td><?php echo $trackedData['date']; echo '->'; echo $trackedData['time']; ?></td>  
            <td><?php echo $trackedData['ip']?></td>  
            <td><?php echo $trackedData['category']?></td>  
          </tr>  
        <?php } ?>
        </tbody>  
      </table>  
	


