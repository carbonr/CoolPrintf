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

// DELETE BEGIN
if($_REQUEST[delete]=="1")
{
	$DID = intval($_REQUEST['ID']);
	if($DID > 0)
	{
		$sql="DELETE FROM packs WHERE ID='".mysql_real_escape_string($DID)."'";
		$conn->Execute($sql);
		$message = "Payment Pack Successfully Deleted.";
		Stemplate::assign('message',$message);
	}
}
// DELETE END

if($_REQUEST['sortby']=="pprice")
{
	$sortby = "pprice";
	$sort =" order by pprice";
	$add1 = "&sortby=pprice";
}
elseif($_REQUEST['sortby']=="pcom")
{
	$sortby = "pcom";
	$sort =" order by pcom";
	$add1 = "&sortby=pcom";
}
else
{
	$sortby = "ID";
	$sort =" order by ID";
	$add1 = "&sortby=ID";
}

if($_REQUEST['sorthow']=="desc")
{
	$sorthow ="desc";
	$add1 .= "&sorthow=desc";
}
else
{
	$sorthow ="asc";
	$add1 .= "&sorthow=asc";
}

//Search
$fromid = intval($_REQUEST['fromid']);
$toid = intval($_REQUEST['toid']);
$pprice = $_REQUEST['pprice'];
$pcom = $_REQUEST['pcom'];
$add1 .= "&fromid=$fromid&toid=$toid&pprice=$pprice&pcom=$pcom";
if($_POST['submitform'] == "1" || ($_REQUEST['fromid']!="" || $toid>0 || $pprice!="" || $pcom!=""))
{
	if($fromid > 0)
	{
		$addtosql = "WHERE ID>='".mysql_real_escape_string($fromid)."'";
		Stemplate::assign('fromid',$fromid);
	}
	else
	{
		$addtosql = "WHERE ID>'".mysql_real_escape_string($fromid)."'";
	}
	if($toid > 0)
	{
		$addtosql .= "AND ID<='".mysql_real_escape_string($toid)."'";
		Stemplate::assign('toid',$toid);
	}
	if($pprice != "")
	{
		$addtosql .= "AND pprice='".mysql_real_escape_string($pprice)."'";
		Stemplate::assign('pprice',$pprice);
	}
	if($pcom != "")
	{
		$addtosql .= "AND pcom='".mysql_real_escape_string($pcom)."'";
		Stemplate::assign('pcom',$pcom);
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

$queryselected = "select ID from packs $addtosql $sort $sorthow limit $config[maximum_results]";
$query2 = "select * from packs $addtosql $sort $sorthow limit $pagingstart, $config[items_per_page]";
$executequeryselected = $conn->Execute($queryselected);
$totalvideos = $executequeryselected->rowcount();	
if ($totalvideos > 0)
{
	if($totalvideos<=$config[maximum_results])
	{
		$total = $totalvideos;
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
			$pagelinks.="<a href='$adminurl/settings_packs.php?page=1$add1' title='first page'>First</a>&nbsp;";
			$pagelinks.="<a href='$adminurl/settings_packs.php?page=$theprevpage$add1'>Previous</a>&nbsp;";
		};
		$counter=0;
		$lowercount = $currentpage-5;
		if ($lowercount <= 0) $lowercount = 1;
		while ($lowercount < $currentpage)
		{
			$pagelinks.="<a href='$adminurl/settings_packs.php?page=$lowercount$add1'>$lowercount</a>&nbsp;";
			$lowercount++;
			$counter++;
		}
		$pagelinks.=$currentpage."&nbsp;";
		$uppercounter = $currentpage+1;
		while (($uppercounter < $currentpage+10-$counter) && ($uppercounter<=$toppage))
		{
			$pagelinks.="<a href='$adminurl/settings_packs.php?page=$uppercounter$add1'>$uppercounter</a>&nbsp;";
			$uppercounter++;
		}
		if($currentpage < $toppage) 
		{
			$pagelinks.="<a href='$adminurl/settings_packs.php?page=$thenextpage$add1'>Next</a>&nbsp;";
			$pagelinks.="<a href='$adminurl/settings_packs.php?page=$toppage$add1' title='last page'>Last</a>&nbsp;";
		};
	}
}
else
{
	$error = "Sorry, no payment packs were found.";
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
STemplate::display("administrator/settings_packs.tpl");
STemplate::display("administrator/global_footer.tpl");
?>