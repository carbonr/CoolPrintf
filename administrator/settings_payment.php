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

if($_POST['submitform'] == "1")
{
	$arr = array("paypal_email", "notify_email", "price_mode", "price", "commission", "days_before_withdraw", "currency", "commission_percent");
	foreach ($arr as $value)
	{
		$sql = "update config set value='".mysql_real_escape_string($_POST[$value])."' where setting='$value'";
		$conn->execute($sql);
		Stemplate::assign($value,strip_mq_gpc($_POST[$value]));
	}
	$message = "Payment Settings Successfully Saved.";
	Stemplate::assign('message',$message);
}

$mainmenu = "2";
$submenu = "4";
Stemplate::assign('mainmenu',$mainmenu);
Stemplate::assign('submenu',$submenu);
STemplate::display("administrator/global_header.tpl");
STemplate::display("administrator/settings_payment.tpl");
STemplate::display("administrator/global_footer.tpl");
?>