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
$thebaseurl = $config['baseurl'];

$query = "SELECT A.OID, B.MID, B.time from orders A, inbox2 B where A.status='4' AND A.OID=B.OID AND B.reject='0' AND B.action='delivery' order by B.MID desc";
$executequery = $conn->Execute($query);
$g = $executequery->getrows();
for($i=0; $i<count($g);$i++)
{
	$OID = $g[$i]['OID'];
	$MID = $g[$i]['MID'];
	$atime = $g[$i]['time'];
	$time = time();
	$d = count_days($atime, $time);
	if($d >= 3)
	{
		$query="UPDATE orders SET status='5', cltime='".time()."' WHERE OID='".mysql_real_escape_string($OID)."' limit 1";
		$results=$conn->execute($query);
	}
}

$two_days = 2 * 24 * 60 * 60;
$query = "SELECT A.OID, B.MID, B.time, B.MSGTO from orders A, inbox2 B where A.status='1' AND A.OID=B.OID AND B.cancel='0' AND B.action='mutual_cancellation_request' order by B.MID desc";
$executequery = $conn->Execute($query);
$h = $executequery->getrows();
for($i=0; $i<count($h);$i++)
{
	$OID = $h[$i]['OID'];
	$MID = $h[$i]['MID'];
	$atime = $h[$i]['time'];
	$MSGTO = $h[$i]['MSGTO'];
	$time = time();
	$two_time = $atime + $two_days;
	if($time > $two_time)
	{
		$AMID = $MID;
		if($AMID > 0)
		{
			$query="UPDATE inbox2 SET cancel='2', ctime='".time()."', CID='".mysql_real_escape_string($MSGTO)."' WHERE MID='".mysql_real_escape_string($AMID)."' AND cancel='0' AND MSGTO='".mysql_real_escape_string($MSGTO)."' limit 1";
			$results=$conn->execute($query);
			$query = "select USERID, price from orders where OID='".mysql_real_escape_string($OID)."'"; 
			$executequery=$conn->execute($query);
			$RUSERID = $executequery->fields['USERID'];
			$rprice = $executequery->fields['price'];
			issue_refund($RUSERID,$OID,$rprice);
			$query="UPDATE orders SET status='2' WHERE OID='".mysql_real_escape_string($OID)."' limit 1";
			$results=$conn->execute($query);
			cancel_revenue($OID);
		}
	}
}

	
?>