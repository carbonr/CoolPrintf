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
	$templateselect = "order.tpl";
	$pagetitle = $lang['258'];
	STemplate::assign('pagetitle',$pagetitle);
	
	$id = intval(cleanit($_REQUEST['id']));
	if($id > 0)
	{
		$query="SELECT PID, price, gtitle FROM posts WHERE PID='".mysql_real_escape_string($id)."'";
		$results=$conn->execute($query);
		$p = $results->getrows();
		STemplate::assign('p',$p[0]);
		$eid = base64_encode($p[0]['PID']);
		STemplate::assign('eid',$eid);
		
		$query = "select funds from members where USERID='".mysql_real_escape_string($_SESSION['USERID'])."'"; 
		$executequery=$conn->execute($query);
		$funds = $executequery->fields['funds'];
		STemplate::assign('funds',$funds);
		
		if($_POST['subbal'] == "1")
		{
			$price = $p[0]['price'];
			if($funds >= $price)
			{
				$query1 = "UPDATE members SET funds=funds-$price WHERE USERID='".mysql_real_escape_string($_SESSION['USERID'])."'"; 
				$executequery1=$conn->execute($query1);
				
				$query = "INSERT INTO orders SET USERID='".mysql_real_escape_string($_SESSION['USERID'])."', PID='".mysql_real_escape_string($id)."', time_added='".time()."', status='0', price='".mysql_real_escape_string($price)."'"; 
				$executequery=$conn->execute($query);
				$order_id = mysql_insert_id();
				if($order_id > 0)
				{
					$query = "INSERT INTO payments SET USERID='".mysql_real_escape_string($_SESSION['USERID'])."', OID='".mysql_real_escape_string($order_id)."', time='".time()."', price='".mysql_real_escape_string($price)."', t='1'"; 
					$executequery=$conn->execute($query);
					
					$query = "UPDATE posts SET rev=rev+$price WHERE PID='".mysql_real_escape_string($id)."'"; 
					$executequery=$conn->execute($query);
				
					header("Location:$config[baseurl]/thank_you?g=".$eid);exit;
				}
			}
		}
	}
	else
	{
		header("Location:$config[baseurl]/");exit;
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