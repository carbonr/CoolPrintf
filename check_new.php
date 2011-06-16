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

$last_id = intval(cleanit($_REQUEST['last_id']));
$UID = intval(cleanit($_REQUEST['uid']));
if ($_SESSION['USERID'] != "" && $_SESSION['USERID'] >= 0 && is_numeric($_SESSION['USERID']))
{	
	if($UID > 0)
	{
		$query="SELECT DISTINCT count(*) as total FROM members A, inbox B, members C WHERE A.USERID=B.MSGTO AND C.USERID=B.MSGFROM AND (B.MSGTO='".mysql_real_escape_string($_SESSION['USERID'])."' AND B.MSGFROM='".mysql_real_escape_string($UID)."') AND B.MID>'".mysql_real_escape_string($last_id)."'";
		$executequery=$conn->execute($query);
		$cnt = $executequery->fields['total']+0;
		echo $cnt;
	}
	else
	{
		echo "0";
	}
}
else
{
	echo "0";
}
?>