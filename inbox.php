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
	if($_POST['subarc'] == "1")
	{
		$auid = intval(cleanit($_REQUEST['auid']));
		if($auid > 0)
		{
			$query="INSERT INTO archive SET USERID='".mysql_real_escape_string($_SESSION['USERID'])."', AID='".mysql_real_escape_string($auid)."'";
			$results=$conn->execute($query);	
			$message = $lang['244'];
		}
	}
	
	$templateselect = "inbox.tpl";
	$pagetitle = $lang['28'];
	STemplate::assign('pagetitle',$pagetitle);
	
	$s = cleanit($_REQUEST['s']);
	if($s == "" || $s == "all")
	{
		$s = "all";
	}
	elseif($s == "unread")
	{
		$s = "unread";
	}
	elseif($s == "archived")
	{
		$s = "archived";
	}
	STemplate::assign('s',$s);
	
	$a = cleanit($_REQUEST['a']);
	if($a != "1")
	{
		$a = "0";	
	}
	STemplate::assign('a',$a);
	$o = cleanit($_REQUEST['o']);
	if($o == "" || $o == "time")
	{
		$o = "time";
		if($a == "1")
		{
			$addsql2 = "time asc";
		}
		else
		{
			$addsql2 = "time desc";
		}
	}
	elseif($o == "name")
	{
		$o = "name";
		if($a == "1")
		{
			$addsql2 = "B.username asc";
		}
		else
		{
			$addsql2 = "B.username desc";
		}
	}
	STemplate::assign('o',$o);
	
	$u = intval(cleanit($_REQUEST['u']));
	if($u > 0)
	{
		$addsql3 = "AND B.USERID='".mysql_real_escape_string($u)."'";	
	}
	STemplate::assign('u',$u);
	
	$query="SELECT AID FROM archive WHERE USERID='".mysql_real_escape_string($_SESSION['USERID'])."'";
	$results=$conn->execute($query);
	$arc = $results->getrows();
	STemplate::assign('arc',$arc);
	
	$query = "select max(A.time) as time, max(A.unread) as unread, B.username, B.USERID from inbox A, members B where ((A.MSGFROM='".mysql_real_escape_string($_SESSION['USERID'])."' AND A.MSGTO=B.USERID) OR (A.MSGTO='".mysql_real_escape_string($_SESSION['USERID'])."' AND A.MSGFROM=B.USERID)) $addsql3 GROUP BY B.username order by $addsql2";
	$results=$conn->execute($query);
	$m = $results->getrows();
	STemplate::assign('m',$m);
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