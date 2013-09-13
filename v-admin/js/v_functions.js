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