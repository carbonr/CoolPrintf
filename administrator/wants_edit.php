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

$WID = intval($_REQUEST[WID]);
if($WID > 0)
{
	if($_POST['submitform'] == "1")
	{
		$want = htmlentities(strip_tags($_REQUEST['want']), ENT_COMPAT, "UTF-8");
		$category = intval($_REQUEST['category']);
		$USERID = intval($_REQUEST['USERID']);
		$sql = "update wants set USERID='".mysql_real_escape_string($USERID)."', want='".mysql_real_escape_string($want)."', category='".mysql_real_escape_string($category)."' where WID='".mysql_real_escape_string($WID)."'";
		$conn->execute($sql);
		$message = "Want Successfully Edited.";
		Stemplate::assign('message',$message);
	}

	$query = $conn->execute("select * from wants where WID='".mysql_real_escape_string($WID)."' limit 1");
	$want = $query->getrows();
	Stemplate::assign('want', $want[0]);
}

$mainmenu = "9";
$submenu = "1";
Stemplate::assign('mainmenu',$mainmenu);
Stemplate::assign('submenu',$submenu);
STemplate::display("administrator/global_header.tpl");
STemplate::display("administrator/wants_edit.tpl");
STemplate::display("administrator/global_footer.tpl");
?>