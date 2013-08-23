<?php

	/*
	* utility class which holds the utility functions which can be used for specific purpose
	*/
	
	class utility{
		
		

	/*
	* function to get the url of the page 
	*/
	function curPageURL() {
		 $pageURL = 'http';
		 //if ($_SERVER["HTTPS"] == "on") {$pageURL .= "s";}
		 $pageURL .= "://";
		 if ($_SERVER["SERVER_PORT"] != "80") {
		  $pageURL .= $_SERVER["SERVER_NAME"].":".$_SERVER["SERVER_PORT"].$_SERVER["REQUEST_URI"];
		 } else {
		  $pageURL .= $_SERVER["SERVER_NAME"].$_SERVER["REQUEST_URI"];
		 }
		 return $pageURL;
		}
		
		
	}
?>