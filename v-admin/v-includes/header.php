<?php
	include('class/class.manageusers.php');
	$manageUsers = new manageusers();
	$tracking = $manageUsers->stats('7','15','30');
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />

<link rel="stylesheet" href="css/bootstrap.css" />
<link rel="stylesheet" href="css/style.css" />
<link rel="stylesheet" href="css/contact_form_style.css"/>
<!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!-- [if lt IE 9]>
      <script src="js/html5shiv.js"></script>
    <![endif] -->
<script src="ckeditor/ckeditor.js"></script>
<script type="text/javascript" src="https://www.google.com/jsapi"></script>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
<script type="text/javascript" src="js/bootstrap.js"></script>
<script type="text/javascript" src="js/v_functions.js"></script>
<title><?php echo $pageTitle ?></title>
<script>

	google.load("visualization", "1", {"packages": ["corechart"]});
	<!-- google.setOnLoadCallback(drawChart); This function is not getting used since I am calling this function on load--> 
	  function loadchart(){
          drawChart();
	  }
      function drawChart(pagename) {
        var data = google.visualization.arrayToDataTable([
          ['Day', 'visits'],
          ['Today',  <?php echo $tracking['today'] ?>],
          ['7 days',  <?php echo $tracking['7 day'] ?>],
          ['15 days',  <?php echo $tracking['15 day'] ?>],
          ['30 days',  <?php echo $tracking['30 day'] ?>]
        ]);

        var options = {
          title: 'Daily Visit',
          hAxis: {title: 'Day', titleTextStyle: {color: 'red'}}
        };
			if(pagename == 'view.analytics.php'){
			var chart = new google.visualization.ColumnChart(document.getElementById('chart_div1'));
			chart.draw(data, options);
			
			var chart = new google.visualization.ColumnChart(document.getElementById('chart_div2'));
			chart.draw(data, options);
			
			var chart = new google.visualization.ColumnChart(document.getElementById('chart_div3'));
			chart.draw(data, options);
		  }
		  else if(pagename == 'view.dashborad.php'){
			var chart = new google.visualization.ColumnChart(document.getElementById('chart_div'));
			chart.draw(data, options);
			var chart = new google.visualization.ColumnChart(document.getElementById('chart_div1'));
			chart.draw(data, options);
	
		  }

	} 
	  <!-- specific function for Polls -->

	  <!-- specific function for Polls ends here -->
   

	 function loadFile(variable){
		
		 
		 var xmlhttp;
			if (window.XMLHttpRequest)
			  {// code for IE7+, Firefox, Chrome, Opera, Safari
			  xmlhttp=new XMLHttpRequest();
			  }
			else
			  {// code for IE6, IE5
			  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
			  }
			xmlhttp.onreadystatechange=function()
			  {
			  if (xmlhttp.readyState==4 && xmlhttp.status==200)
				{
					document.getElementById("pqr").innerHTML=xmlhttp.responseText;
					$('#pqr').hide();
					$('#pqr').fadeIn(1000);
					if(variable == 'view.dashboard.php'){
						drawChart('view.dashborad.php'); //used to load chat when pages loads fully
					}
					if(variable == 'view.analytics.php'){
						drawChart('view.analytics.php'); //used to load chat when pages loads fully
					}
					if(variable == 'view.homepage.php'){
						CKEDITOR.replace( 'editor1' );   // this is used to load cke-edtior on any page
					}
					if(variable == 'view.otherpages.php'){
						CKEDITOR.replace('editor1', { filebrowserBrowseUrl: 'ss/index.html'});
						CKEDITOR.replace('editor2', { filebrowserBrowseUrl: 'ss/index.html'});
						CKEDITOR.replace('editor3', { filebrowserBrowseUrl: 'ss/index.html'});
						CKEDITOR.replace('editor4', { filebrowserBrowseUrl: 'ss/index.html'});
					}
					if(variable == 'view.postArticle.php' || variable == 'view.postArticle.php?status=fail' 
					|| variable == 'view.postArticle.php?status=pass' || variable == 'view.postArticle.php?status=adel')
						CKEDITOR.replace('editor4', { filebrowserBrowseUrl: 'ss/index.html'});
						
						
						
					// this updateArticle Variable is checked to maintain the get request for the updateArticle page	
					updateArticle = variable.substr(0,22);	
					if(updateArticle == 'view.updateArticle.php' )
						CKEDITOR.replace('editor7', { filebrowserBrowseUrl: 'ss/index.html'});
						
					   // this update Variable is checked to maintain the get request on the
										
					var updateCat = variable.substr(0,34);	
					if(updateCat == 'view.updateCategoryDescription.php'){
						CKEDITOR.replace('editor6', { filebrowserBrowseUrl: 'ss/index.html'});
					}
				}
			  }
			xmlhttp.open("GET","v-includes/view/"+variable,true);
			xmlhttp.send();

	 }
	 
	 function showSubmenu(value,output_div,navbar){
		 var xmlhttp;
			if (window.XMLHttpRequest)
			  {// code for IE7+, Firefox, Chrome, Opera, Safari
			  xmlhttp=new XMLHttpRequest();
			  }
			else
			  {// code for IE6, IE5
			  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
			  }
			xmlhttp.onreadystatechange=function()
			  {
			  if (xmlhttp.readyState==4 && xmlhttp.status==200)
				{
					document.getElementById(output_div).innerHTML=xmlhttp.responseText;
					
				}
			  }
			xmlhttp.open("GET","v-includes/functions/function.showsubmenu.php?submenu="+value+"&type="+navbar,true);
			xmlhttp.send();
		 
		 
	 }
	 
	 
	 	 function showCategoryDec(value){
		 var xmlhttp;
			if (window.XMLHttpRequest)
			  {// code for IE7+, Firefox, Chrome, Opera, Safari
			  xmlhttp=new XMLHttpRequest();
			  }
			else
			  {// code for IE6, IE5
			  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
			  }
			xmlhttp.onreadystatechange=function()
			  {
			  if (xmlhttp.readyState==4 && xmlhttp.status==200)
				{	
					document.getElementById("catdesc").innerHTML=xmlhttp.responseText;
					
				}
			  }
			xmlhttp.open("GET","v-includes/functions/function.showcategorydesc.php?cat="+value,true);
			xmlhttp.send();
		 
		 
	 }
	 
	 
	 
	 function showCategoryDesc(value){
		 window.location.assign("admin.php?value=upc&cat="+value);
		 
		}
		
	//reloads the page and populates the add owner page
	function adOwnerInfo(owner_email)
	{
		window.location = 'admin.php?value=updateAds_owner&email='+owner_email;
	}

	 
	 
</script>

<script type="text/javascript">
<!-- this function works with ajax call -->
function get_result(result_select_id,select_id){
	//alert(menu);
	var xmlhttp;
	if (window.XMLHttpRequest)
	  {// code for IE7+, Firefox, Chrome, Opera, Safari
	  xmlhttp=new XMLHttpRequest();
	  }
	else
	  {// code for IE6, IE5
	  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
	  }
	xmlhttp.onreadystatechange=function()
	  {
	  if (xmlhttp.readyState==4 && xmlhttp.status==200)
		{
		document.getElementById(result_select_id).innerHTML=xmlhttp.responseText;
		}
	  }
	var submenu = document.getElementById(select_id).value;
	xmlhttp.open("GET","../v-includes/function.showsubmenu.php?submenu="+submenu,true);
	xmlhttp.send(null);
}
</script>

</head>

<body>

<div class="container" id="wrap">
