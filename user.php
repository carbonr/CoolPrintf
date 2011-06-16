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
$thebaseurl = $config['baseurl'];

$uname = cleanit($_REQUEST['uname']);
if($uname != "")
{
	STemplate::assign('uname',$uname);
	$query = "select USERID, addtime, description from members where username='".mysql_real_escape_string($uname)."' AND status='1'"; 
	$executequery=$conn->execute($query);
	$USERID = $executequery->fields['USERID'];
	$addtime = $executequery->fields['addtime'];
	STemplate::assign('addtime',$addtime);
	$desc = $executequery->fields['description'];
	STemplate::assign('desc',$desc);
	if($USERID > 0)
	{
		STemplate::assign('USERID',$USERID);
		$query = "SELECT A.*, B.name, B.seo, C.username from posts A, categories B, members C where A.active='1' AND A.category=B.CATID AND A.USERID=C.USERID AND A.USERID='".mysql_real_escape_string($USERID)."' order by A.PID desc";
		$results=$conn->execute($query);
		$posts = $results->getrows();
		STemplate::assign('posts',$posts);
		STemplate::assign('pagetitle',$uname);
		$t = 'user.tpl';
	}
	else
	{
		$t = 'error.tpl';
	}
}

//TEMPLATES BEGIN
STemplate::assign('message',$message);
STemplate::display('header.tpl');
STemplate::display($t);
STemplate::display('footer.tpl');
//TEMPLATES END
?>