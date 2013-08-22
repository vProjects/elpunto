<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
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
	
</script>
</head>

<body>
	<!--#header_container starts here-->
	<div id="header_container">
    	<!--header main container-->
    	<div id="header_main">
        	<div id="logo_container">
            	<a href="index.php"><img src="images/logo_elpunto.png" alt="elpunto logo" /></a>
            </div>
            <!--search box-->
            <div id="seacrch_box">Seleccione su ciudad
            	<select>
                	<option value="">Todas</option>
                    <option value="Bello">Bello</option>
                    <option value="boavita">Boavita</option>
                    <option value="cali">Cali</option>
                    <option value="envigado">Envigado</option>
                    <option value="medell�n">Medell&iacute;n</option>Nocaima
                    <option value="nocaima">Nocaima</option>
                    <option value="santafe">Santaf&eacute; de Bogot&aacute;</option>
                </select>
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