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

$SID = $_SESSION['USERID'];
if ($SID != "" && $SID >= 0 && is_numeric($SID))
{	
	STemplate::assign('pagetitle',$lang['30']);
	
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
	
	$query1 = "SELECT count(*) as total from posts A, bookmarks B where A.active='1' AND B.USERID='".mysql_real_escape_string($SID)."' AND A.PID=B.PID order by B.BID desc limit $config[maximum_results]";
	$query2 = "SELECT A.*, B.seo, C.username from posts A, categories B, members C, bookmarks D where A.active='1' AND A.category=B.CATID AND A.USERID=C.USERID AND D.USERID='".mysql_real_escape_string($SID)."' AND A.PID=D.PID order by D.BID desc limit $pagingstart, $config[items_per_page]";
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
		if ($currentpage > 0)
		{
			if($currentpage > 1) 
			{
				$pagelinks.="<li class='prev'><a href='$thebaseurl/bookmarks?page=$theprevpage'>$theprevpage</a></li>&nbsp;";
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
				$pagelinks.="<li><a href='$thebaseurl/bookmarks?page=$lowercount'>$lowercount</a></li>&nbsp;";
				$lowercount++;
				$counter++;
			}
			$pagelinks.="<li><span class='active'>$currentpage</span></li>&nbsp;";
			$uppercounter = $currentpage+1;
			while (($uppercounter < $currentpage+10-$counter) && ($uppercounter<=$toppage))
			{
				$pagelinks.="<li><a href='$thebaseurl/bookmarks?page=$uppercounter'>$uppercounter</a></li>&nbsp;";
				$uppercounter++;
			}
			if($currentpage < $toppage) 
			{
				$pagelinks.="<li class='next'><a href='$thebaseurl/bookmarks?page=$thenextpage'>$thenextpage</a></li>";
			}
			else
			{
				$pagelinks.="<li><span class='next'>next page</span></li>";
			}
		}
	}
	$templateselect = "bookmarks.tpl";
}
else
{
	header("Location:$config[baseurl]/");exit;
}

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