// JavaScript Document
//Author Anand K. Singh
//Copyright Vyrazu Labs
function serach_ads_f(search_id)
{
	alert('anand');
	var search_keyword=document.getElementById(search_id).value;
	alert(search_keyword);
	if(search_keyword != '')
	{
		window.location = 'admin.php?value=updateAds&keyword='+search_keyword;
	}
	else
	{
		alert('Please enter a value!');
	}
}
function serach_ads_a(search_id)
{
	alert('anand');
	var search_keyword=document.getElementById(search_id).value;
	alert(search_keyword);
	if(search_keyword != '')
	{
		window.location = 'admin.php?value=allads&keyword='+search_keyword;
	}
	else
	{
		alert('Please enter a value!');
	}
}
function search_ads_city(search_keyword)
{
	if(search_keyword != '')
	{
		window.location = 'index.php?keyword='+search_keyword;
	}
}
//function to give a hint while creating a category link-->only valid for creating the vertical menus
function categoryLink(id_field,id_field_link){
	var x = document.getElementById(id_field).value;
	if( x != "")
	{
		var prescribed_link = "search-result.php?keyword="+x;
		document.getElementById(id_field_link).value = prescribed_link;
	}
}
//form validation codes starts from here
//global varriable which will contain the validation output
var validation_result = "" ;
//function for form validations
function validateRequiredField(input_value,id_name)
{
	var x = document.getElementById(id_name).value;
	if(input_value == "")
	{
		//make the background color red
		document.getElementById(id_name).style.backgroundColor = '#F6D3D3';
		//update the validation result
		validation_result = "invalid";
		alert(validation_result);
	}
	else
	{
		//make the background color normal if valid
		document.getElementById(id_name).style.backgroundColor = '#ffffff';
		validation_result = "valid";
		alert(validation_result);
	}
}
//function for checking valid email
function validateEmail(id_name,id_button)
{
	var textbx = document.getElementById(id_name);
	var input_value = document.getElementById(id_name).value;
	var btn = document.getElementById(id_button);
	//check the field is empty
	if(input_value == "")
	{
		alert("Mandatory Field.");
		textbx.style.backgroundColor = '#F6D3D3';
		btn.disabled = 'true';
	}
	//If not empty then check for email validation
	else
	{
		var x=input_value;
		var atpos=x.indexOf("@");
		var dotpos=x.lastIndexOf(".");
		if (atpos<1 || dotpos<atpos+2 || dotpos+2>=x.length)
		{
			alert("Invalid Email");
			textbx.style.backgroundColor = '#F6D3D3';
			btn.disabled = 'true';
  		}
		else
		{
			textbx.style.backgroundColor = '#ffffff';
			btn.disabled = '';
		}
	}
}