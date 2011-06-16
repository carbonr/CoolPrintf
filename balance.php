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
	$templateselect = "balance.tpl";
	$pagetitle = $lang['205'];
	STemplate::assign('pagetitle',$pagetitle);
	
	$wdfunds = intval(cleanit($_POST['wdfunds']));
	if($wdfunds == "1")
	{	
		$query="INSERT INTO withdraw_requests SET USERID='".mysql_real_escape_string($_SESSION['USERID'])."', time_added='".time()."'";
		$conn->execute($query);
		$message = $lang['395'];
	}
	
	$query="SELECT OID, time, t, price FROM payments WHERE USERID='".mysql_real_escape_string($_SESSION['USERID'])."' order by ID desc";
	$results=$conn->execute($query);
	$o = $results->getrows();
	STemplate::assign('o',$o);
	
	$query = "select funds, afunds, withdrawn, used from members where USERID='".mysql_real_escape_string($_SESSION['USERID'])."'"; 
	$executequery=$conn->execute($query);
	$funds = $executequery->fields['funds'];
	STemplate::assign('funds',$funds);
	$afunds = $executequery->fields['afunds'];
	STemplate::assign('afunds',$afunds);
	$withdrawn = $executequery->fields['withdrawn'];
	STemplate::assign('withdrawn',$withdrawn);
	$used = $executequery->fields['used'];
	STemplate::assign('used',$used);
	
	$query="SELECT A.OID, A.time, A.price, A.cancel, A.wd, B.status, B.cltime, C.ctp FROM payments A, orders B, posts C WHERE A.OID=B.OID AND B.PID=C.PID AND C.USERID='".mysql_real_escape_string($_SESSION['USERID'])."' AND A.t='1' AND B.status>'0' order by A.ID desc";
	$results=$conn->execute($query);
	$p = $results->getrows();
	STemplate::assign('p',$p);
	
	$upcoming = "0";
	$app = "0";
	$clr = "0";
	for($i=0; $i<count($p);$i++)
	{
		$stat = $p[$i][status];
		$pce = $p[$i][price];
		$ctp = $p[$i][ctp];
		$pce = get_yprice2($p[$i][price], $ctp);
		$tme = $p[$i][cltime];
		if($stat == "5")
		{
			$dyz = get_days_withdraw($tme);
			if($dyz > 0)
			{
				$clr = $clr + $pce;
			}
			else
			{
				$iswd = $p[$i]['wd'];
				if($iswd == "0")
				{
					$app = $app + $pce;
				}
			}
		}
		elseif($stat == "2" || $stat == "3" || $stat == "7")
		{
		}
		else
		{
			$upcoming = $upcoming + $pce;	
		}
	}
	STemplate::assign('upcoming',$upcoming);
	STemplate::assign('app',$app);
	STemplate::assign('clr',$clr);
	$overall = $withdrawn + $upcoming + $app + $clr + $afunds;
	STemplate::assign('overall',$overall);
}
else
{
	header("Location:$config[baseurl]/");exit;
}

//TEMPLATES BEGIN
STemplate::assign('message',$message);
STemplate::assign('sm3',"1");
STemplate::display('header.tpl');
STemplate::display($templateselect);
STemplate::display('footer.tpl');
//TEMPLATES END
?>