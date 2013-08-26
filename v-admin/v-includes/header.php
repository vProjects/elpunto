<!doctype html>
<html>
<head>
<meta charset="utf-8">
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
<title><?php echo $pageTitle ?></title>
<script>

	google.load("visualization", "1", {"packages": ["corechart"]});
	<!-- google.setOnLoadCallback(drawChart); This function is not getting used since I am calling this function on load--> 
	  function loadchart(){
          drawChart();
	  }
      function drawChart(pagename) {
        var data = google.visualization.arrayToDataTable([
          ['Day', 'visits', 'clicks'],
          ['Today',  1000,      400],
          ['date',  1170,      460],
          ['date',  660,       1120],
          ['date',  1030,      540]
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
					if(variable == 'view.services.php'){
						CKEDITOR.replace( 'editor1' );   // this is used to load cke-edtior on any page
						CKEDITOR.replace( 'editor2' );   // this is used to load cke-edtior on any page
						CKEDITOR.replace( 'editor3' );   // this is used to load cke-edtior on any page
						CKEDITOR.replace( 'editor4' );   // this is used to load cke-edtior on any page
						CKEDITOR.replace( 'editor5' );   // this is used to load cke-edtior on any page
					}
					if(variable == 'view.postArticle.php')
						CKEDITOR.replace( 'editor2' );   // this is used to load cke-edtior on any page
				}
			  }
			xmlhttp.open("GET","v-includes/view/"+variable,true);
			xmlhttp.send();

	 }
	 
//	  function myFunction() {
//		  for (var i = 0; i < arguments.length; i++)
//			alert(arguments[i]);
//		}
//		
//		myFunction(1, 2, "three",4,"five");

	 
	 
</script>


</head>

<body>

<div class="container" id="wrap">
