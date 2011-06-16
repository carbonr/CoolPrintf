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
	if($_POST['submg'] == "1")
	{
		$msgto = intval(cleanit($_REQUEST['msgto']));
		$FID = intval(cleanit($_REQUEST['message_message_attachment_id']));
		$message_body = cleanit($_REQUEST['message_body']);
		$oid = intval(cleanit($_REQUEST['oid']));
		$scriptolution = cleanit($_REQUEST['message_message_format']);
		STemplate::assign('oid',$oid);
		$who = cleanit($_REQUEST['who']);
		STemplate::assign('who',$who);
		
		$query = "select USERID, PID, status, price from orders where OID='".mysql_real_escape_string($oid)."'"; 
		$executequery=$conn->execute($query);
		$USERID = $executequery->fields['USERID'];
		STemplate::assign('USERID',$USERID);
		$PID = $executequery->fields['PID'];
		$status = $executequery->fields['status'];
		$rprice = $executequery->fields['price'];
		if($status != "2" && $status != "3" && $status != "7")
		{
			if($status == "0")
			{
				$asql = ", start='1'";	
			}
			$query = "select days from posts where PID='".mysql_real_escape_string($PID)."'"; 
			$executequery=$conn->execute($query);
			$days = $executequery->fields['days'];
			STemplate::assign('days',$days);
			
			if($scriptolution == "mutual_cancellation_request")
			{
				$asql2 = ", action='".mysql_real_escape_string($scriptolution)."'";	
			}
			elseif($scriptolution == "seller_cancellation")
			{
				$asql2 = ", action='".mysql_real_escape_string($scriptolution)."', ctime='".time()."'";
				issue_refund($USERID,$oid,$rprice);
				$query="UPDATE orders SET status='3' WHERE OID='".mysql_real_escape_string($oid)."' AND PID='".mysql_real_escape_string($PID)."' limit 1";
				$results=$conn->execute($query);
				send_update_email($msgto, $oid);
				cancel_revenue($oid);
				$query = "select USERID from posts where PID='".mysql_real_escape_string($PID)."'"; 
				$executequery=$conn->execute($query);
				$SID = $executequery->fields['USERID'];
		
				$query="INSERT INTO ratings SET USERID='".mysql_real_escape_string($SID)."', bad='1', time_added='".time()."', OID='".mysql_real_escape_string($oid)."'";
				$results=$conn->execute($query);
			}
			elseif($scriptolution == "delivery")
			{
				$asql2 = ", action='".mysql_real_escape_string($scriptolution)."'";
				$query="UPDATE orders SET status='4' WHERE OID='".mysql_real_escape_string($oid)."' AND PID='".mysql_real_escape_string($PID)."' limit 1";
				$results=$conn->execute($query);
				send_update_email($msgto, $oid);
			}
			elseif($scriptolution == "rejection")
			{
				$asql2 = ", action='".mysql_real_escape_string($scriptolution)."'";
				$query="UPDATE orders SET status='6' WHERE OID='".mysql_real_escape_string($oid)."' AND PID='".mysql_real_escape_string($PID)."' limit 1";
				$results=$conn->execute($query);
				$query="UPDATE inbox2 SET reject='1' WHERE OID='".mysql_real_escape_string($oid)."' AND action='delivery' AND MSGTO='".mysql_real_escape_string($_SESSION['USERID'])."'";
				$results=$conn->execute($query);
				send_update_email($msgto, $oid);
			}
			
			if($msgto > 0 && $message_body != "")
			{
				$query="INSERT INTO inbox2 SET MSGFROM='".mysql_real_escape_string($_SESSION['USERID'])."', MSGTO='".mysql_real_escape_string($msgto)."',message='".mysql_real_escape_string($message_body)."', FID='".mysql_real_escape_string($FID)."', OID='".mysql_real_escape_string($oid)."', time='".time()."' $asql $asql2";
				$result=$conn->execute($query);
				$mid = mysql_insert_id();
				if($mid > 0)
				{
					$UID = $msgto;
					$query="SELECT DISTINCT A.username AS mto, C.username AS mfrom, B.* FROM members A, inbox2 B, members C WHERE A.USERID=B.MSGTO AND C.USERID=B.MSGFROM AND ((B.MSGTO='".mysql_real_escape_string($_SESSION['USERID'])."' AND B.MSGFROM='".mysql_real_escape_string($UID)."') OR (B.MSGTO='".mysql_real_escape_string($UID)."' AND B.MSGFROM='".mysql_real_escape_string($_SESSION['USERID'])."')) AND B.OID='".mysql_real_escape_string($oid)."' order by B.MID asc";
					$results=$conn->execute($query);
					$m = $results->getrows();
					STemplate::assign('m',$m);
					
					if($status == "0")
					{
						$query = "UPDATE orders SET status='1', stime='".time()."' WHERE OID='".mysql_real_escape_string($oid)."' AND USERID='".mysql_real_escape_string($_SESSION['USERID'])."' limit 1"; 
						$conn->execute($query);
					}
					send_update_email($msgto, $oid);
				}
			}
		}
		else
		{
			$UID = $msgto;
			$query="SELECT DISTINCT A.username AS mto, C.username AS mfrom, B.* FROM members A, inbox2 B, members C WHERE A.USERID=B.MSGTO AND C.USERID=B.MSGFROM AND ((B.MSGTO='".mysql_real_escape_string($_SESSION['USERID'])."' AND B.MSGFROM='".mysql_real_escape_string($UID)."') OR (B.MSGTO='".mysql_real_escape_string($UID)."' AND B.MSGFROM='".mysql_real_escape_string($_SESSION['USERID'])."')) AND B.OID='".mysql_real_escape_string($oid)."' order by B.MID asc";
			$results=$conn->execute($query);
			$m = $results->getrows();
			STemplate::assign('m',$m);
		}
	}
}

//TEMPLATES BEGIN
STemplate::assign('message',$message);
STemplate::display('send_track.tpl');
//TEMPLATES END
?>