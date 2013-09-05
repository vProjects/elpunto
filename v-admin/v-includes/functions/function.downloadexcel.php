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
	$duration = intval($duration);
	$today = substr(date('Y-m-d H:i:s'),0,10);
	$timeDifference = date('Y-m-d',strtotime(date("Y-m-d", time()) . " - $duration day"));
	$trackingInfo = $manageUsers->getTrackingByTime('tracking',$today,$timeDifference,$_POST['category']);
	

	


?>
        <table class="table">  
        <thead>  
          <tr>  
            <th>BrowserVer</th>  
            <th>OS</th>  
            <th>BrowserName</th>  
            <th>IP</th>
            <th>Company Name</th> 
            <th>Date and Time</th>  
          </tr>  
        </thead>  
        <tbody>
        <?php
			foreach($trackingInfo as $trackingResult){ ?> 
          <tr>  
            <td><?php echo $trackingResult['browserversion'].$trackingResult['id']?></td>  
            <td><?php echo $trackingResult['os']; ?></td>  
            <td><?php echo $trackingResult['browsername']?></td>  
            <td><?php echo $trackingResult['ip']?></td>  
            <td><?php echo $trackingResult['category']?></td>  
            <td><?php echo $trackingResult['date']; echo '->'; echo $trackingResult['time'];?></td>  
          </tr>  
        <?php } ?>
        </tbody>  
      </table>  
	


