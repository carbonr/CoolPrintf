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
	$OID = intval(cleanit($_REQUEST['id']));
	if($OID > 0)
	{
		$pagetitle = $lang['260']." #".$OID;
		STemplate::assign('pagetitle',$pagetitle);
		
		$query="SELECT A.*, B.gtitle, B.p1, B.price, B.USERID AS owner, B.days, B.ginst, C.username, D.seo, E.username as buyer FROM orders A, posts B, members C, categories D, members E WHERE C.USERID=B.USERID AND B.category=D.CATID AND E.USERID=A.USERID AND A.OID='".mysql_real_escape_string($OID)."' AND B.PID=A.PID limit 1";
		$results=$conn->execute($query);
		$o = $results->getrows();
		STemplate::assign('o',$o[0]);
		$owner = $o[0]['owner'];
		$buyer = $o[0]['USERID'];
		$me = $_SESSION['USERID'];
		$PID = $o[0]['PID'];
		$rprice = $o[0]['price'];
		
		if($owner == $me)
		{
			$v = "owner";	
			STemplate::assign('sm2',"1");
			$templateselect = "track2.tpl";
			$UID = $buyer;
		}
		elseif($buyer == $me)
		{
			$v = "buyer";
			$templateselect = "track.tpl";
			$UID = $owner;
			
			if($_POST['subrat'] == "1")
			{
				$ratingvalue = cleanit($_POST['ratingvalue']);
				if($ratingvalue == "1")
				{
					$rad = ", good='1'";
				}
				elseif($ratingvalue == "0")
				{
					$rad = ", bad='1'";
				}
				$ratingcomment = cleanit($_POST['ratingcomment']);
				$query="INSERT INTO ratings SET USERID='".mysql_real_escape_string($owner)."', PID='".mysql_real_escape_string($PID)."', OID='".mysql_real_escape_string($OID)."', RATER='".mysql_real_escape_string($_SESSION['USERID'])."', comment='".mysql_real_escape_string($ratingcomment)."', time_added='".time()."' $rad";
				$results=$conn->execute($query);
				$message = $lang['312'];
				$query="UPDATE orders SET status='5', cltime='".time()."' WHERE OID='".mysql_real_escape_string($OID)."' AND USERID='".mysql_real_escape_string($_SESSION['USERID'])."' limit 1";
				$results=$conn->execute($query);
				$query="SELECT A.*, B.gtitle, B.p1, B.price, B.USERID AS owner, B.days, B.ginst, C.username, D.seo, E.username as buyer FROM orders A, posts B, members C, categories D, members E WHERE C.USERID=B.USERID AND B.category=D.CATID AND E.USERID=A.USERID AND A.OID='".mysql_real_escape_string($OID)."' AND B.PID=A.PID limit 1";
				$results=$conn->execute($query);
				$o = $results->getrows();
				STemplate::assign('o',$o[0]);
				send_update_email($owner, $OID);
			}
		}
		else
		{
			header("Location:$config[baseurl]/");exit;
		}
		if($_POST['subabort'] == "1")
		{
			$AMID = intval(cleanit($_POST['AMID']));
			if($AMID > 0)
			{
				$query="UPDATE inbox2 SET cancel='1', ctime='".time()."', CID='".mysql_real_escape_string($_SESSION['USERID'])."' WHERE MID='".mysql_real_escape_string($AMID)."' AND cancel='0' AND MSGFROM='".mysql_real_escape_string($_SESSION['USERID'])."' limit 1";
				$results=$conn->execute($query);
			}
		}
		if($_POST['subdecline'] == "1")
		{
			$DMID = intval(cleanit($_POST['DMID']));
			if($DMID > 0)
			{
				$query="UPDATE inbox2 SET cancel='1', ctime='".time()."', CID='".mysql_real_escape_string($_SESSION['USERID'])."' WHERE MID='".mysql_real_escape_string($DMID)."' AND cancel='0' AND MSGTO='".mysql_real_escape_string($_SESSION['USERID'])."' limit 1";
				$results=$conn->execute($query);
			}
		}
		if($_POST['subaccept'] == "1")
		{
			$AMID = intval(cleanit($_POST['AMID']));
			if($AMID > 0)
			{
				$query="UPDATE inbox2 SET cancel='2', ctime='".time()."', CID='".mysql_real_escape_string($_SESSION['USERID'])."' WHERE MID='".mysql_real_escape_string($AMID)."' AND cancel='0' AND MSGTO='".mysql_real_escape_string($_SESSION['USERID'])."' limit 1";
				$results=$conn->execute($query);
				issue_refund($buyer,$OID,$rprice);
				$query="UPDATE orders SET status='2' WHERE OID='".mysql_real_escape_string($OID)."' limit 1";
				$results=$conn->execute($query);
				cancel_revenue($OID);
				$query="SELECT A.*, B.gtitle, B.p1, B.price, B.USERID AS owner, B.days, B.ginst, C.username, D.seo, E.username as buyer FROM orders A, posts B, members C, categories D, members E WHERE C.USERID=B.USERID AND B.category=D.CATID AND E.USERID=A.USERID AND A.OID='".mysql_real_escape_string($OID)."' AND B.PID=A.PID limit 1";
				$results=$conn->execute($query);
				$o = $results->getrows();
				STemplate::assign('o',$o[0]);
			}
		}
		$query="SELECT DISTINCT A.username AS mto, C.username AS mfrom, B.* FROM members A, inbox2 B, members C WHERE A.USERID=B.MSGTO AND C.USERID=B.MSGFROM AND ((B.MSGTO='".mysql_real_escape_string($_SESSION['USERID'])."' AND B.MSGFROM='".mysql_real_escape_string($UID)."') OR (B.MSGTO='".mysql_real_escape_string($UID)."' AND B.MSGFROM='".mysql_real_escape_string($_SESSION['USERID'])."')) AND B.OID='".mysql_real_escape_string($OID)."' order by B.MID asc";
		$results=$conn->execute($query);
		$m = $results->getrows();
		STemplate::assign('m',$m);
		STemplate::assign('v',$v);
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