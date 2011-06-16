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
$pid = stripslashes(strip_tags($_REQUEST['id']));
if($pid != "")
{
	$query="SELECT A.*, B.name, B.seo, C.username, C.rating, C.ratingcount FROM posts A, categories B, members C WHERE A.PID='".mysql_real_escape_string($pid)."' AND A.category=B.CATID AND A.USERID=C.USERID AND A.active>'0'";
	$executequery = $conn->Execute($query);
	$p = $executequery->getrows();
	$fnd = count($p);
	$title = stripslashes($p[0]['gtitle']);
	$uname = stripslashes($p[0]['username']);
	$PD = stripslashes($p[0]['PID']);
	$gtags = stripslashes($p[0]['gtags']);
	$uid = stripslashes($p[0]['USERID']);
	STemplate::assign('pagetitle', $lang['62']." ".$title." ".$lang['63'].$p[0]['price']." : ".$uname);
	if(is_numeric($PD) && $PD > 0)
	{
		$tags = explode(" ", $p[0]['gtags']);
		STemplate::assign('tags',$tags);
		for($i=0;$i<count($tags);$i++)
		{
			$addme .= " OR A.gtags like '%".mysql_real_escape_string($tags[$i])."%'";	
		}
		$query="SELECT A.PID, A.gtitle, A.p1, A.price, B.name, B.seo FROM posts A, categories B WHERE A.PID!='".mysql_real_escape_string($pid)."' AND A.category=B.CATID and A.active='1' AND (A.gtags like '%".mysql_real_escape_string($gtags)."%' $addme) order by rand() limit $config[view_rel_max]";
		$results=$conn->execute($query);
		$r = $results->getrows();
		STemplate::assign('r',$r);
		
		$query="SELECT A.PID, A.gtitle, A.p1, A.price, B.name, B.seo FROM posts A, categories B WHERE A.PID!='".mysql_real_escape_string($pid)."' AND A.category=B.CATID and A.active='1' AND A.USERID='".mysql_real_escape_string($uid)."' order by rand() limit $config[view_more_max]";
		$results=$conn->execute($query);
		$u = $results->getrows();
		STemplate::assign('u',$u);
		
		$query="SELECT A.comment, A.good, A.bad, B.username FROM ratings A, members B WHERE A.PID='".mysql_real_escape_string($PD)."' AND A.RATER=B.USERID and B.status='1' order by A.RID desc";
		$results=$conn->execute($query);
		$f = $results->getrows();
		STemplate::assign('f',$f);
		$grat = 0;
		$brat = 0;
		for($i=0;$i<count($f);$i++)
		{
			$tgood = $f[$i]['good'];
			$tbad = $f[$i]['bad'];
			if($tgood == "1")
			{
				$grat++;	
			}
			elseif($tbad == "1")
			{
				$brat++;	
			}
		}
		STemplate::assign('grat',$grat);
		STemplate::assign('brat',$brat);
	}
	update_viewcount($pid);
	if($fnd > 0)
	{
		$theme = "view.tpl";
	}
	else
	{
		$theme = "view2.tpl";
	}
}

//TEMPLATES BEGIN
STemplate::assign('p',$p[0]);
STemplate::display('header.tpl');
STemplate::display($theme);
STemplate::display('footer.tpl');
//TEMPLATES END
?>