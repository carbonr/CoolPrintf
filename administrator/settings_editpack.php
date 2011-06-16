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
$adminurl = $config['adminurl'];

$ID = intval($_REQUEST[ID]);
if($ID > 0)
{
	if($_POST['submitform'] == "1")
	{
		$pprice = $_POST['pprice'];
		$pcom = $_POST['pcom'];
		
		if($pprice == "")
		{
			$error = "Error: Please enter a price.";
		}
		elseif($pcom == "")
		{
			$error = "Error: Please enter a percentage commission.";
		}
		else
		{
	
			$sql = "update packs set pprice='".mysql_real_escape_string($pprice)."', pcom='".mysql_real_escape_string($pcom)."' WHERE ID='".mysql_real_escape_string($ID)."'";
			$conn->execute($sql);
			$message = "Price Pack Successfully Edited.";
			Stemplate::assign('message',$message);
	
		}
	}

	$query = $conn->execute("select * from packs where ID='".mysql_real_escape_string($ID)."' limit 1");
	$p = $query->getrows();
	Stemplate::assign('p', $p[0]);
}

$mainmenu = "2";
$submenu = "1";
Stemplate::assign('mainmenu',$mainmenu);
Stemplate::assign('submenu',$submenu);
Stemplate::assign('sorthow',$sorthow);
Stemplate::assign('sortby',$sortby);
Stemplate::assign('currentpage',$currentpage);
STemplate::display("administrator/global_header.tpl");
STemplate::assign('beginning',$beginning);
STemplate::assign('ending',$ending);
STemplate::assign('pagelinks',$pagelinks);
STemplate::assign('total',$total+0);
STemplate::assign('results',$results);
Stemplate::assign('error',$error);
STemplate::display("administrator/settings_editpack.tpl");
STemplate::display("administrator/global_footer.tpl");
?>