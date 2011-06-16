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
	if($_POST['subme'] == "1")
	{
		$suspend = intval(cleanit($_REQUEST['suspend']));
		$activate = intval(cleanit($_REQUEST['activate']));
		$delete = intval(cleanit($_REQUEST['delete']));
		if($suspend == "1")
		{
			$gig = $_POST['gig'];
			$gcnt = count($gig);
			for ($i = 0; $i < $gcnt; $i++)
			{
				$tgig = intval($gig[$i]);
				if ($tgig > 0)
				{
					$query="UPDATE posts SET active='2' WHERE USERID='".mysql_real_escape_string($_SESSION['USERID'])."' AND PID='".mysql_real_escape_string($tgig)."'";
					$result=$conn->execute($query);
					$message = $lang['177'];
				}
			}
		}
		elseif($activate == "1")
		{
			$gig = $_POST['gig'];
			$gcnt = count($gig);
			for ($i = 0; $i < $gcnt; $i++)
			{
				$tgig = intval($gig[$i]);
				if ($tgig > 0)
				{
					$approve_stories = $config['approve_stories'];
					if($approve_stories == "1")
					{
						$active = "0";
					}
					else
					{
						$active = "1";
					}
					$query="UPDATE posts SET active='".mysql_real_escape_string($active)."' WHERE USERID='".mysql_real_escape_string($_SESSION['USERID'])."' AND PID='".mysql_real_escape_string($tgig)."'";
					$result=$conn->execute($query);
					$message = $lang['178'];
				}
			}
		}
		elseif($delete == "1")
		{
			$gig = $_POST['gig'];
			$gcnt = count($gig);
			for ($i = 0; $i < $gcnt; $i++)
			{
				$tgig = intval($gig[$i]);
				if ($tgig > 0)
				{
					delete_gig($tgig);
					$message = $lang['179'];
				}
			}
		}
	}
	
	$query = "select count(*) as total from posts where USERID='".mysql_real_escape_string($_SESSION[USERID])."'"; 
	$executequery=$conn->execute($query);
	$cnt = $executequery->fields['total'];
	if($cnt > 0)
	{
		$templateselect = "manage_gigs2.tpl";
		$pagetitle = $lang['153'];
		STemplate::assign('pagetitle',$pagetitle);
		
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
		
		$query1 = "SELECT count(*) as total from posts A, members B where B.USERID='".mysql_real_escape_string($_SESSION['USERID'])."' AND A.USERID=B.USERID order by A.PID desc limit $config[maximum_results]";
		$query2 = "SELECT A.*, B.seo, C.username from posts A, categories B, members C where A.category=B.CATID AND A.USERID=C.USERID AND C.USERID='".mysql_real_escape_string($_SESSION['USERID'])."' AND C.USERID=A.USERID order by A.PID desc limit $pagingstart, $config[items_per_page]";
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
					$pagelinks.="<li class='prev'><a href='$thebaseurl/manage_gigs?page=$theprevpage'>$theprevpage</a></li>&nbsp;";
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
					$pagelinks.="<li><a href='$thebaseurl/manage_gigs?page=$lowercount'>$lowercount</a></li>&nbsp;";
					$lowercount++;
					$counter++;
				}
				$pagelinks.="<li><span class='active'>$currentpage</span></li>&nbsp;";
				$uppercounter = $currentpage+1;
				while (($uppercounter < $currentpage+10-$counter) && ($uppercounter<=$toppage))
				{
					$pagelinks.="<li><a href='$thebaseurl/manage_gigs?page=$uppercounter'>$uppercounter</a></li>&nbsp;";
					$uppercounter++;
				}
				if($currentpage < $toppage) 
				{
					$pagelinks.="<li class='next'><a href='$thebaseurl/manage_gigs?page=$thenextpage'>$thenextpage</a></li>";
				}
				else
				{
					$pagelinks.="<li><span class='next'>next page</span></li>";
				}
			}
		}
		STemplate::assign('beginning',$beginning);
		STemplate::assign('ending',$ending);
		STemplate::assign('pagelinks',$pagelinks);
		STemplate::assign('total',$total);
		STemplate::assign('posts',$posts);
	}
	else
	{
		$templateselect = "manage_gigs.tpl";
		$pagetitle = $lang['32'];
		STemplate::assign('pagetitle',$pagetitle);
	}
}
else
{
	header("Location:$config[baseurl]/");exit;
}

//TEMPLATES BEGIN
STemplate::assign('message',$message);
STemplate::assign('sm1',"1");
STemplate::display('header.tpl');
STemplate::display($templateselect);
STemplate::display('footer.tpl');
//TEMPLATES END
?>