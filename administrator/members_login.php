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

include("../include/config.php");
include_once("../include/functions/import.php");
verify_login_admin();

$USERID = intval($_REQUEST['USERID']);
if($USERID > 0)
{
	$query="SELECT status,USERID,email,username,verified from members WHERE USERID='".mysql_real_escape_string($USERID)."'";
	$result=$conn->execute($query);
	
	if($result->recordcount()<1)
	{
		echo "Error: User not found.";
	}
	else
	{
		$_SESSION['USERID']=$result->fields['USERID'];
		$_SESSION['EMAIL']=$result->fields['email'];
		$_SESSION['USERNAME']=$result->fields['username'];
		$_SESSION['VERIFIED']=$result->fields['verified'];
		header("Location:$config[baseurl]/");exit;
	}
}
?>