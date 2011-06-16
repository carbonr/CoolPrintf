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

$username = cleanit($_REQUEST['username']);

if($username != "")
{
	if(!ereg("^[a-zA-Z0-9]*$",$username))
	{
		echo $lang['24'];
	}
	else
	{
		if(verify_email_username($username))
		{
			echo "OK";
		}
		else
		{
			echo $lang['14'];	
		}
	}
}

?>