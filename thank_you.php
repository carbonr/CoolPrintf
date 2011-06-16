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

if(isset($_REQUEST['g']) && isset($_POST['item_number']))
{
	header("Location:$config[baseurl]/thank_you?g=".cleanit($_REQUEST['g']));exit;	
}
if ($_SESSION['USERID'] != "" && $_SESSION['USERID'] >= 0 && is_numeric($_SESSION['USERID']))
{	
	$templateselect = "thank_you.tpl";
	$pagetitle = $lang['23'];
	STemplate::assign('pagetitle',$pagetitle);
	
	$PID = intval(base64_decode(cleanit($_REQUEST['g'])));
	if($PID > 0)
	{
		$query = "select OID from orders where PID='".mysql_real_escape_string($PID)."' AND USERID='".mysql_real_escape_string($_SESSION['USERID'])."' order by OID desc limit 1"; 
		$executequery=$conn->execute($query);
		$OID = $executequery->fields['OID'];
		STemplate::assign('OID',$OID);
	}
	else
	{
		header("Location:$config[baseurl]/orders");exit;
	}
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