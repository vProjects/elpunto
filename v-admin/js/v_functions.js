// JavaScript Document
//Author Anand K. Singh
//Copyright Vyrazu Labs
function serach_ads_f()
{
	alert('anand');
	var search_keyword=document.forms["search_ads_update"]["search_value"].value;
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
function search_ads_city(search_keyword)
{
	if(search_keyword != '')
	{
		window.location = 'index.php?keyword='+search_keyword;
	}
}