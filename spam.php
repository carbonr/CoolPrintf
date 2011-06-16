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
	$spamid = intval($_REQUEST['id']);
	if($spamid > 0)
	{
		$query="INSERT INTO inbox_reports SET USERID='".mysql_real_escape_string($_SESSION['USERID'])."', time='".time()."', MID='".mysql_real_escape_string($spamid)."'";
		$result=$conn->execute($query);
		echo "document.getElementById('spam_message' + ".$spamid.").innerHTML = '&nbsp;".$lang['247']."';";
	}
}
?>