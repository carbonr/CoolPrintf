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
$tag = stripslashes(strip_tags($_REQUEST['query']));

STemplate::assign('tag',$tag);
STemplate::assign('pagetitle',$tag." ".$lang['124']);

$s = stripslashes(strip_tags($_REQUEST['s']));
STemplate::assign('s',$s);

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

if($s == "r")
{
	$dby = "A.rating";	
}
elseif($s == "r")
{
	$dby = "A.viewcount";	
}
else
{
	$dby = "A.PID";	
}

$query1 = "SELECT count(*) as total from posts where active='1' AND (gtitle like'%".mysql_real_escape_string($tag)."%' OR gdesc like'%".mysql_real_escape_string($tag)."%' OR gtags like'%".mysql_real_escape_string($tag)."%') $addsql order by PID desc limit $config[maximum_results]";
$query2 = "SELECT A.*, B.seo, C.username from posts A, categories B, members C where A.active='1' AND (gtitle like'%".mysql_real_escape_string($tag)."%' OR gdesc like'%".mysql_real_escape_string($tag)."%' OR gtags like'%".mysql_real_escape_string($tag)."%') $addsql2 AND A.category=B.CATID AND A.USERID=C.USERID order by A.feat desc, $dby desc limit $pagingstart, $config[items_per_page]";
$executequery1 = $conn->Execute($query1);
$scriptolution = $executequery1->fields['total'];
if ($scriptolution > 0)
{
	if($executequery1->fields['total']<=$config[maximum_results])
	{
		$total = $executequery1->fields['total'];
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
	$posts = $executequery2->getrows();
	$beginning=$pagingstart+1;
	$ending=$pagingstart+$executequery2->recordcount();
	$pagelinks="";
	$k=1;
	$theprevpage=$currentpage-1;
	$thenextpage=$currentpage+1;
	if($s != "")
	{
		$adds = "&s=$s";
	}
	if ($currentpage > 0)
	{
		if($currentpage > 1) 
		{
			$pagelinks.="<li class='prev'><a href='$thebaseurl/search?query=$tag&page=$theprevpage$adds'>$theprevpage</a></li>&nbsp;";
		}
		else
		{
			$pagelinks.="<li><span class='prev'>previous page</span></li>&nbsp;";
		}
		$counter=0;
		$lowercount = $currentpage-5;
		if ($lowercount <= 0) $lowercount = 1;
		while ($lowercount < $currentpage)
		{
			$pagelinks.="<li><a href='$thebaseurl/search?query=$tag&page=$lowercount$adds'>$lowercount</a></li>&nbsp;";
			$lowercount++;
			$counter++;
		}
		$pagelinks.="<li><span class='active'>$currentpage</span></li>&nbsp;";
		$uppercounter = $currentpage+1;
		while (($uppercounter < $currentpage+10-$counter) && ($uppercounter<=$toppage))
		{
			$pagelinks.="<li><a href='$thebaseurl/search?query=$tag&page=$uppercounter$adds'>$uppercounter</a></li>&nbsp;";
			$uppercounter++;
		}
		if($currentpage < $toppage) 
		{
			$pagelinks.="<li class='next'><a href='$thebaseurl/search?query=$tag&page=$thenextpage$adds'>$thenextpage</a></li>";
		}
		else
		{
			$pagelinks.="<li><span class='next'>next page</span></li>";
		}
	}
}
$templateselect = "search.tpl";

//TEMPLATES BEGIN
STemplate::assign('message',$message);
STemplate::assign('beginning',$beginning);
STemplate::assign('ending',$ending);
STemplate::assign('pagelinks',$pagelinks);
STemplate::assign('total',$total);
STemplate::assign('posts',$posts);
STemplate::display('header.tpl');
STemplate::display($templateselect);
STemplate::display('footer.tpl');
//TEMPLATES END
?>