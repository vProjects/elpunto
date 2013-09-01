<?php
	//include class of BLL for data fetching
	include 'v-includes/BLL.getData.php';
	$getData_UI = new BLL_manageData();
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php $getData_UI->getMetaTags($metaName); // this code fetches the meta tags for every page?>   
<title><?php echo $page_title;?></title>
<link href="css/style.css" type="text/css" rel="stylesheet" />
<!-- Attach slider CSS -->
<link rel="stylesheet" href="css/orbit-1.2.3.css">
<link rel="stylesheet" href="css/carousel.css">

<!-- js added for company.php -->
<script type="text/javascript" language="javascript" src="js/jquery-1.8.2.min.js"></script>
<script type="text/javascript" language="javascript" src="js/jquery.carouFredSel-6.2.1-packed.js"></script>
<!-- Attach slider JS -->
<script type="text/javascript" src="js/jquery.orbit-1.2.3.min.js"></script>

<!--[if IE]>
     <style type="text/css">
         .timer { display: none !important; }
         div.caption { background:transparent; filter:progid:DXImageTransform.Microsoft.gradient(startColorstr=#99000000,endColorstr=#99000000);zoom: 1; }
    </style>
<![endif]-->
		
<!--Slider plugin -->
<script type="text/javascript">
    $(window).load(function() {
        $('#featured').orbit();
    });
	
$(document).ready(function() {

$("#foo2").carouFredSel({
	circular: false,
	infinite: false,
	auto 	: false,
	prev	: {	
		button	: "#foo2_prev",
		key		: "left"
	},
	next	: { 
		button	: "#foo2_next",
		key		: "right"
	},
	pagination	: "#foo2_pag"
});
});

function changeImage(value){
	document.getElementById('change_image').src = value ;
}
function reloadCaptcha()
{
	document.getElementById('captcha').src = document.getElementById('captcha').src+ '?' +new Date();
}
/*function showmenubox(){
	document.getElementById('login_box').style.display = 'block';
	return false;
}*/
function hidemenu(){
	document.getElementById('login_box').style.display = 'none';
}


$(document).ready(function(){
  $("#login").click(function(){
    $("#login_box").slideToggle("slow");
  });
});
	
</script>
<!--JS code for search of ads-->
<script src="js/search_function.js" type="text/javascript"></script>
</head>

<body>
	<!--#header_container starts here-->
	<div id="header_container" onclick="hidemenu()">
    	<!--header main container-->
    	<div id="header_main">
        	
            <!--search box-->
            <div id="seacrch_box">Seleccione su ciudad
            	<select onchange="search_ads_city(this.value)">
                	<option value="">Select One</option>
                	<option value="default">Todas</option>
                    <option value="Bello">Bello</option>
                    <option value="boavita">Boavita</option>
                    <option value="cali">Cali</option>
                    <option value="envigado">Envigado</option>
                    <option value="medellín">Medell&iacute;n</option>Nocaima
                    <option value="nocaima">Nocaima</option>
                    <option value="santafe">Santaf&eacute; de Bogot&aacute;</option>
                </select>
            </div>
            <div id="logo_container">
            	<a href="index.php"><img src="images/logo_elpunto.png" alt="elpunto logo" /></a>
            </div>
            <div class="social_icon_container">
                  	<div class="follow_us">Follow us:</div>
                    <!--Facebook Icon-->
                    <div class="social_icon">
                    	<a href="#"><img src="images/facebook.png" alt="facebook" style="width:100%;height:100%;"/></a>
                    </div>
                    <!--Twitter Icon-->
                    <div class="social_icon">
                    	<a href="#"><img src="images/twitter.png" alt="twitter" style="width:100%;height:100%;"/></a>
                    </div>
                    <!--Linkdin Icon-->
                    <div class="social_icon">
                    	<a href="#"><img src="images/linkedin.png" alt="linkedin" style="width:100%;height:100%;"/></a>
                    </div>
                  </div>
        </div><!--#header_main ends-->
    </div><!--#header_container ends-->