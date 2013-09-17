// JavaScript Document
//for form validation author ANAND
//function for form validations
function validateRequiredField(id_name)
{
	var x = document.getElementById(id_name).value;
	if(x == "")
	{
		//make the background color red
		document.getElementById(id_name).style.backgroundColor = '#F6D3D3';
		result = 0;
	}
	else
	{
		//make the background color normal if valid
		document.getElementById(id_name).style.backgroundColor = '#ffffff';
		result = 1;
	}
}
//function for checking valid email
function validateEmail(id_name)
{
	var textbx = document.getElementById(id_name);
	var input_value = document.getElementById(id_name).value;
	//check the field is empty
	if(input_value == "")
	{
		textbx.style.backgroundColor = '#F6D3D3';
		result = 0;
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
			result = 0;
  		}
		else
		{
			textbx.style.backgroundColor = '#ffffff';
			result = 1;
		}
	}
}
function checkResult(alert_value)
{
	if(result == 0)
	{
		alert('Please check '+alert_value);
		document.getElementById('btn_submit').disabled = 'true';
		exit();
	}
}
function checkEmptyField(id_name_1)
{
	var y = document.getElementById(id_name_1).value;
	if(y != "")
	{
		document.getElementById(id_name_1).style.backgroundColor = "#ffffff";
		document.getElementById('btn_submit').disabled = '';
		
	}
}
function validateForm(form_name)
{
	validateRequiredField('c_name');
	checkResult('name');
	validateRequiredField('c_company_name');
	checkResult('company');
	validateRequiredField('c_city');
	checkResult('city');
	validateEmail('c_email');
	checkResult('Email');
	validateRequiredField('c_telephone');
	checkResult('telephone number.');
	validateRequiredField('c_comment');
	checkResult('comment.');
	validateRequiredField('c_captcha');
	checkResult('captcha.');
	//submit the contact form
	document.getElementById(form_name).submit();
}