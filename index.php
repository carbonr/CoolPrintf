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
	$dby = "A.rating desc";	
}
elseif($s == "rz")
{
	$dby = "A.rating asc";	
}
elseif($s == "p")
{
	$dby = "A.viewcount desc";	
}
elseif($s == "pz")
{
	$dby = "A.viewcount asc";	
}
elseif($s == "c")
{
	$dby = "A.price asc";	
}
elseif($s == "cz")
{
	$dby = "A.price desc";	
}
elseif($s == "dz")
{
	$dby = "A.PID asc";	
}
else
{
	$dby = "A.PID desc";	
}

$query1 = "SELECT count(*) as total from posts where active='1' $addsql order by PID desc limit $config[maximum_results]";
$query2 = "SELECT A.*, B.seo, C.username from posts A, categories B, members C where A.active='1' AND A.category=B.CATID AND A.USERID=C.USERID order by A.feat desc, $dby limit $pagingstart, $config[items_per_page]";
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
			$pagelinks.="<li class='prev'><a href='$thebaseurl/?page=$theprevpage$adds'>$theprevpage</a></li>&nbsp;";
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
			$pagelinks.="<li><a href='$thebaseurl/?page=$lowercount$adds'>$lowercount</a></li>&nbsp;";
			$lowercount++;
			$counter++;
		}
		$pagelinks.="<li><span class='active'>$currentpage</span></li>&nbsp;";
		$uppercounter = $currentpage+1;
		while (($uppercounter < $currentpage+10-$counter) && ($uppercounter<=$toppage))
		{
			$pagelinks.="<li><a href='$thebaseurl/?page=$uppercounter$adds'>$uppercounter</a></li>&nbsp;";
			$uppercounter++;
		}
		if($currentpage < $toppage) 
		{
			$pagelinks.="<li class='next'><a href='$thebaseurl/?page=$thenextpage$adds'>$thenextpage</a></li>";
		}
		else
		{
			$pagelinks.="<li><span class='next'>next page</span></li>";
		}
	}
}
if($_POST['sugsub'] == "1")
{
	if(intval($_SESSION['USERID']) > "0")
	{
		$sugcontent = cleanit($_REQUEST['sugcontent']);	
		$sugcat = intval(cleanit($_REQUEST['sugcat']));
		if($sugcontent != "" && $sugcat != "")
		{
			$approve_suggests = $config['approve_suggests'];
			if($approve_suggests == "1")
			{
				$active = "0";
			}
			else
			{
				$active = "1";
			}
			$query="INSERT INTO wants SET USERID='".mysql_real_escape_string($_SESSION['USERID'])."', want='".mysql_real_escape_string($sugcontent)."', category='".mysql_real_escape_string($sugcat)."', time_added='".time()."', date_added='".date("Y-m-d")."', active='$active'";
			$result=$conn->execute($query);
			$message = $lang['121'];	
		}
	}
}
$templateselect = "index.tpl";
//TEMPLATES BEGIN
STemplate::assign('pagetitle',stripslashes($config['site_slogan']));
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