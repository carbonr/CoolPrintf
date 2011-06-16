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
	$DWID = intval($_REQUEST['WID']);
	if($DWID > 0)
	{
		$sql="DELETE FROM wants WHERE WID='".mysql_real_escape_string($DWID)."'";
		$conn->Execute($sql);
		$message = "Want Successfully Deleted.";
		Stemplate::assign('message',$message);
	}
}
// DELETE END

//ACTIVE
if($_POST['asub']=="1")
{
	$AWID = $_POST['AWID'];
	$aval = $_POST['aval'];
	if($aval == "0")
	{
		$aval2 = "1";
		$message = "Want Successfully Activated.";
	}
	else
	{
		$aval2 = "0";
		$message = "Want Successfully Deactivated.";
	}
	$sql="UPDATE wants SET active='".intval($aval2)."' WHERE WID='".mysql_real_escape_string($AWID)."'";
	$conn->Execute($sql);
	Stemplate::assign('message',$message);
}
//ACTIVE

if($_REQUEST['sortby']=="want")
{
	$sortby = "want";
	$sort =" order by A.want";
	$add1 = "&sortby=want";
}
elseif($_REQUEST['sortby']=="username")
{
	$sortby = "username";
	$sort =" order by B.username";
	$add1 = "&sortby=username";
}
else
{
	$sortby = "WID";
	$sort =" order by A.WID";
	$add1 = "&sortby=WID";
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
$want = htmlentities(strip_tags($_REQUEST['want']), ENT_COMPAT, "UTF-8");
$username = htmlentities(strip_tags($_REQUEST['username']), ENT_COMPAT, "UTF-8");
$add1 .= "&fromid=$fromid&toid=$toid&want=$want&username=$username";
if($_POST['submitform'] == "1" || ($_REQUEST['fromid']!="" || $toid>0 || $want!="" || $username!=""))
{
	if($fromid > 0)
	{
		$addtosql = "AND A.WID>='".mysql_real_escape_string($fromid)."'";
		Stemplate::assign('fromid',$fromid);
	}
	else
	{
		$addtosql = "AND A.WID>'".mysql_real_escape_string($fromid)."'";
	}
	if($toid > 0)
	{
		$addtosql .= "AND A.WID<='".mysql_real_escape_string($toid)."'";
		Stemplate::assign('toid',$toid);
	}
	if($want != "")
	{
		$addtosql .= "AND A.want like'%".mysql_real_escape_string($want)."%'";
		Stemplate::assign('want',$want);
	}
	if($username != "")
	{
		$addtosql .= "AND B.username like'%".mysql_real_escape_string($username)."%'";
		Stemplate::assign('username',$username);
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

$queryselected = "select A.WID,B.username from wants A, members B WHERE A.USERID=B.USERID AND A.active='0' $addtosql $sort $sorthow limit $config[maximum_results]";
$query2 = "select A.*,B.username from wants A, members B WHERE A.USERID=B.USERID AND A.active='0' $addtosql $sort $sorthow limit $pagingstart, $config[items_per_page]";
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
			$pagelinks.="<a href='$adminurl/wants_validate.php?page=1$add1' title='first page'>First</a>&nbsp;";
			$pagelinks.="<a href='$adminurl/wants_validate.php?page=$theprevpage$add1'>Previous</a>&nbsp;";
		};
		$counter=0;
		$lowercount = $currentpage-5;
		if ($lowercount <= 0) $lowercount = 1;
		while ($lowercount < $currentpage)
		{
			$pagelinks.="<a href='$adminurl/wants_validate.php?page=$lowercount$add1'>$lowercount</a>&nbsp;";
			$lowercount++;
			$counter++;
		}
		$pagelinks.=$currentpage."&nbsp;";
		$uppercounter = $currentpage+1;
		while (($uppercounter < $currentpage+10-$counter) && ($uppercounter<=$toppage))
		{
			$pagelinks.="<a href='$adminurl/wants_validate.php?page=$uppercounter$add1'>$uppercounter</a>&nbsp;";
			$uppercounter++;
		}
		if($currentpage < $toppage) 
		{
			$pagelinks.="<a href='$adminurl/wants_validate.php?page=$thenextpage$add1'>Next</a>&nbsp;";
			$pagelinks.="<a href='$adminurl/wants_validate.php?page=$toppage$add1' title='last page'>Last</a>&nbsp;";
		};
	}
}
else
{
	$error = "Sorry, no wants were found.";
}

$mainmenu = "9";
$submenu = "2";
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
STemplate::display("administrator/wants_validate.tpl");
STemplate::display("administrator/global_footer.tpl");
?>