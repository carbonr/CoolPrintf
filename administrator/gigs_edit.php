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

function insert_get_all_cats()
{
    global $config,$conn;
	$query = "select CATID,name from categories order by name asc"; 
	$results = $conn->execute($query);
	$returnthis = $results->getrows();
	return $returnthis;
}

function insert_get_all_mems()
{
    global $config,$conn;
	$query = "select USERID,username from members order by username asc"; 
	$results = $conn->execute($query);
	$returnthis = $results->getrows();
	return $returnthis;
}

$PID = intval($_REQUEST['PID']);

if($_POST['submitform'] == "1")
{
	if($PID > 0)
	{
		$arr = array("USERID", "gtitle", "gtags", "gdesc", "ginst", "days", "youtube", "category", "active", "feat", "rating", "viewcount", "price");
		foreach ($arr as $value)
		{
			$sql = "update posts set $value='".mysql_real_escape_string($_POST[$value])."' where PID='".mysql_real_escape_string($PID)."'";
			$conn->execute($sql);
		}
		$message = "Gig Successfully Edited.";
		Stemplate::assign('message',$message);
	}
}

if($PID > 0)
{
	$query = $conn->execute("select * from posts where PID='".mysql_real_escape_string($PID)."' limit 1");
	$gig = $query->getrows();
	Stemplate::assign('gig', $gig[0]);
}

$mainmenu = "4";
$submenu = "1";
Stemplate::assign('mainmenu',$mainmenu);
Stemplate::assign('submenu',$submenu);
STemplate::display("administrator/global_header.tpl");
STemplate::display("administrator/gigs_edit.tpl");
STemplate::display("administrator/global_footer.tpl");
?>