<?php
	header('Content-Type: text/html; charset=utf-8');
	session_start();
	include '../class/class.manageusers.php';
	$manage_UI = new manageusers();
	//get value for fetching
	$search_value = htmlentities($_GET['keyword'],ENT_QUOTES,"utf-8");
	if($search_value == 'all')
	{
		$company_infos = $manage_UI->getValue('company_info');
	}
	else
	{
		//get value according to the search result
		$company_infos = $manage_UI->getvalue_search('company_info','*','company_name',$search_value);
	}
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
          <input type="text" class="form-control" name="first_believe" id="search_keyword" placeholder="Enter Company Name or Owner Name" style="width:275px">
          <input type="button" class="btn btn-warning" value="search" style="margin-top:-11px;" onclick="serach_ads_a('search_keyword')"/>
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
                        	<?php 
								if($company_infos != "")
								{
									foreach($company_infos as $company_info)
									{
										echo '<tr>
												<td onclick="loadFile(\'view.updateAds.php?keyword='.$company_info['company_name'].'\')">'.$company_info['company_name'].'</td>
												<td>'.$company_info['ad_duration'].'</td>
												<td>'.$company_info['start_date'].'</td>
												<td>'.$company_info['end_date'].'</td>
												<td>';
										if($company_info['status'] == 1)
										{
											echo 'Active';
										}
										else
										{
											echo 'In-active';
										}
										echo '</td></tr>';
									}
								}
								else
								{
									echo "No result Found.";
								}
							?>
                        </tbody>
                    </table> 		
		</div>
	</div>
</div>