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

// DELETE 
if($_REQUEST['acancel']=="1")
{
	$DOID = intval($_REQUEST['OID']);
	if($DOID > 0)
	{
		$query = "select USERID, price from orders where OID='".mysql_real_escape_string($DOID)."'"; 
		$executequery=$conn->execute($query);
		$RUSERID = $executequery->fields['USERID'];
		$rprice = $executequery->fields['price'];
		issue_refund($RUSERID,$DOID,$rprice);
		cancel_revenue($DOID);
		$sql="UPDATE orders SET status='7' WHERE OID='".mysql_real_escape_string($DOID)."'";
		$conn->Execute($sql);
		$message = "Order Successfully Cancelled.";
		Stemplate::assign('message',$message);
	}
}
// DELETE 

if($_REQUEST['sortby']=="gtitle")
{
	$sortby = "gtitle";
	$sort =" order by C.gtitle";
	$add1 = "&sortby=gtitle";
}
elseif($_REQUEST['sortby']=="username")
{
	$sortby = "username";
	$sort =" order by B.username";
	$add1 = "&sortby=username";
}
elseif($_REQUEST['sortby']=="time_added")
{
	$sortby = "time_added";
	$sort =" order by A.time_added";
	$add1 = "&sortby=time_added";
}
elseif($_REQUEST['sortby']=="status")
{
	$sortby = "status";
	$sort =" order by A.status";
	$add1 = "&sortby=status";
}
else
{
	$sortby = "OID";
	$sort =" order by A.OID";
	$add1 = "&sortby=OID";
}

if($_REQUEST['sorthow']=="asc")
{
	$sorthow ="asc";
	$add1 .= "&sorthow=asc";
}
else
{
	$sorthow ="desc";
	$add1 .= "&sorthow=desc";
}

//Search
$fromid = intval($_REQUEST['fromid']);
$toid = intval($_REQUEST['toid']);
$gtitle = htmlentities(strip_tags($_REQUEST['gtitle']), ENT_COMPAT, "UTF-8");
$username = htmlentities(strip_tags($_REQUEST['username']), ENT_COMPAT, "UTF-8");
$status = htmlentities(strip_tags($_REQUEST['status']), ENT_COMPAT, "UTF-8");
$add1 .= "&fromid=$fromid&toid=$toid&gtitle=$gtitle&username=$username&status=$status";
if($_POST['submitform'] == "1" || ($_REQUEST['fromid']!="" || $toid>0 || $gtitle!="" || $username!="" || $status!=""))
{
	if($fromid > 0)
	{
		$addtosql = "AND A.OID>='".mysql_real_escape_string($fromid)."'";
		Stemplate::assign('fromid',$fromid);
	}
	else
	{
		$addtosql = "AND A.OID>'".mysql_real_escape_string($fromid)."'";
	}
	if($toid > 0)
	{
		$addtosql .= "AND A.OID<='".mysql_real_escape_string($toid)."'";
		Stemplate::assign('toid',$toid);
	}
	if($gtitle != "")
	{
		$addtosql .= "AND C.gtitle like'%".mysql_real_escape_string($gtitle)."%'";
		Stemplate::assign('gtitle',$gtitle);
	}
	if($username != "")
	{
		$addtosql .= "AND B.username like'%".mysql_real_escape_string($username)."%'";
		Stemplate::assign('username',$username);
	}
	if($status != "")
	{
		$addtosql .= "AND A.status='".mysql_real_escape_string($status)."'";
		Stemplate::assign('status',$status);
	}
	Stemplate::assign('search',"1");
}
//Search End

$page = intval($_REQUEST['page']);
if($page=="")
{
	$page = "1";
}
$currentpage = $page;

if ($page >=2)
{
	$pagingstart = ($page-1)*$config['items_per_page'];
}
else
{
	$pagingstart = "0";
}

$queryselected = "select A.OID,B.username, C.gtitle, C.days from orders A, members B, posts C WHERE A.OID>0 AND A.USERID=B.USERID AND C.PID=A.PID $addtosql $sort $sorthow limit $config[maximum_results]";
$query2 = "select A.*,B.username, C.gtitle, C.days from orders A, members B, posts C WHERE A.OID>0 AND A.USERID=B.USERID AND C.PID=A.PID $addtosql $sort $sorthow limit $pagingstart, $config[items_per_page]";
$executequeryselected = $conn->Execute($queryselected);
$totalposts = $executequeryselected->rowcount();	
if ($totalposts > 0)
{
	if($totalposts<=$config[maximum_results])
	{
		$total = $totalposts;
	}
	else
	{
		$total = $config[maximum_results];
	}
	$toppage = ceil($total/$config[items_per_page]);
	if($toppage==0)
	{
		$xpage=$toppage+1;
	}
	else
	{
		$xpage = $toppage;
	}
	$executequery2 = $conn->Execute($query2);	
	$results = $executequery2->getrows();
	$beginning=$pagingstart+1;
	$ending=$pagingstart+$executequery2->recordcount();
	$pagelinks="";
	$k=1;
	$theprevpage=$currentpage-1;
	$thenextpage=$currentpage+1;
	if ($currentpage > 0)
	{	
		if($currentpage > 1) 
		{
			$pagelinks.="<a href='$adminurl/orders_manage.php?page=1$add1' title='first page'>First</a>&nbsp;";
			$pagelinks.="<a href='$adminurl/orders_manage.php?page=$theprevpage$add1'>Previous</a>&nbsp;";
		};
		$counter=0;
		$lowercount = $currentpage-5;
		if ($lowercount <= 0) $lowercount = 1;
		while ($lowercount < $currentpage)
		{
			$pagelinks.="<a href='$adminurl/orders_manage.php?page=$lowercount$add1'>$lowercount</a>&nbsp;";
			$lowercount++;
			$counter++;
		}
		$pagelinks.=$currentpage."&nbsp;";
		$uppercounter = $currentpage+1;
		while (($uppercounter < $currentpage+10-$counter) && ($uppercounter<=$toppage))
		{
			$pagelinks.="<a href='$adminurl/orders_manage.php?page=$uppercounter$add1'>$uppercounter</a>&nbsp;";
			$uppercounter++;
		}
		if($currentpage < $toppage) 
		{
			$pagelinks.="<a href='$adminurl/orders_manage.php?page=$thenextpage$add1'>Next</a>&nbsp;";
			$pagelinks.="<a href='$adminurl/orders_manage.php?page=$toppage$add1' title='last page'>Last</a>&nbsp;";
		};
	}
}
else
{
	$error = "Sorry, no orders were found.";
}

$mainmenu = "5";
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
STemplate::display("administrator/orders_manage.tpl");
STemplate::display("administrator/global_footer.tpl");
?>