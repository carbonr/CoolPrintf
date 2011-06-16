<?php
/**************************************************************************************************
| Fiverr Script
| http://www.fiverrscript.com
| webmaster@fiverrscript.com
|
|**************************************************************************************************
|
| By using this software you agree that you have read and acknowledged our End-User License 
| Agreement available at http://www.fiverrscript.com/eula.html and to be bound by it.
|
| Copyright (c) 2011 FiverrScript.com. All rights reserved.
|**************************************************************************************************/

include("include/config.php");
include("include/functions/import.php");

if ($_SESSION['USERID'] != "" && $_SESSION['USERID'] >= 0 && is_numeric($_SESSION['USERID']))
{	
	if($_REQUEST['new'] == "1")
	{
		$message = $lang['413'];
	}
	$s = cleanit($_REQUEST['s']);
	if($s == "cancelled")
	{
		$addme = " AND (A.status='2' OR A.status='3' OR A.status='7')";
	}
	elseif($s == "completed")
	{
		$addme = " AND A.status='5'";
	}
	elseif($s == "review")
	{
		$addme = " AND A.status='4'";
	}
	else
	{
		$addme = " AND (A.status='0' OR A.status='1' OR A.status='6')";
		$s = "active";
	}
	STemplate::assign('s',$s);
	$b = cleanit($_REQUEST['b']);
	if($b == "date")
	{
		$addme2 = "A.time_added";
	}
	elseif($b == "status")
	{
		$addme2 = "A.status";
	}
	else
	{
		$addme2 = "A.OID";
		$b = "id";
	}
	STemplate::assign('b',$b);
	$a = cleanit($_REQUEST['a']);
	if($a == "asc")
	{
		$addme3 = "asc";	
	}
	else
	{
		$addme3 = "desc";
		$a = "desc";
	}
	STemplate::assign('a',$a);
	
	$templateselect = "orders.tpl";
	$pagetitle = $lang['157'];
	STemplate::assign('pagetitle',$pagetitle);
	
	$query="SELECT A.OID, A.time_added, A.status, A.stime, B.gtitle, B.days FROM orders A, posts B WHERE A.USERID='".mysql_real_escape_string($_SESSION['USERID'])."' AND B.PID=A.PID $addme order by $addme2 $addme3";
	$results=$conn->execute($query);
	$o = $results->getrows();
	STemplate::assign('o',$o);
}
else
{
	header("Location:$config[baseurl]/");exit;
}

//TEMPLATES BEGIN
STemplate::assign('message',$message);
STemplate::display('header.tpl');
STemplate::display($templateselect);
STemplate::display('footer.tpl');
//TEMPLATES END
?>