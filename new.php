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
	if($_POST['subform'] == "1")
	{
		$gtitle = cleanit($_REQUEST['gtitle']);	
		$gcat = intval(cleanit($_REQUEST['gcat']));
		$gdesc = cleanit($_REQUEST['gdesc']);	
		$ginst = cleanit($_REQUEST['ginst']);	
		$gtags = cleanit($_REQUEST['gtags']);	
		$gdays = intval(cleanit($_REQUEST['gdays']));
		$gyoutube = cleanit($_REQUEST['gyoutube']);
		
		if($gtitle == "")
		{
			$error = "<li>".$lang['92']."</li>";
		}
		
		if($config['price_mode'] == "1")
		{
			$price = intval(cleanit($_REQUEST['gprice']));
			if($price == "0")
			{
				$error = "<li>".$lang['127']."</li>";
			}
			$comper = intval($config['commission_percent']);
			$count1 = $comper / 100;
			$count2 = $count1 * $price;
			$ctp = number_format($count2, 0);
		}
		elseif($config['price_mode'] == "3")
		{
			$PACID = intval(cleanit($_REQUEST['gprice']));
			$query = "select pprice,pcom from packs where ID='".mysql_real_escape_string($PACID)."'"; 
			$executequery=$conn->execute($query);
			$price = intval(cleanit($executequery->fields['pprice']));
			$comper = intval(cleanit($executequery->fields['pcom']));
			if($price == "0")
			{
				$error = "<li>".$lang['435']."</li>";
			}
			$count1 = $comper / 100;
			$count2 = $count1 * $price;
			$ctp = number_format($count2, 0);
			
		}
		elseif($config['price_mode'] == "2")
		{
			$price = intval($config['price']);
			$comper = intval($config['commission_percent']);
			$count1 = $comper / 100;
			$count2 = $count1 * $price;
			$ctp = number_format($count2, 0);
		}
		else
		{
			$price = intval($config['price']);
			$ctp = intval($config['commission']);
		}
		
		if($gcat == "0")
		{
			$error .= "<li>".$lang['93']."</li>";
		}
		if($gdesc == "")
		{
			$error .= "<li>".$lang['94']."</li>";
		}
		if($ginst == "")
		{
			$error .= "<li>".$lang['95']."</li>";
		}
		if($gtags == "")
		{
			$error .= "<li>".$lang['96']."</li>";
		}
		if($gdays == "0")
		{
			$error .= "<li>".$lang['97']."</li>";
		}
		
		$gphoto = $_FILES['gphoto']['tmp_name'];
		if($gphoto != "")
		{
			$ext = substr(strrchr($_FILES['gphoto']['name'], '.'), 1);
			$ext2 = strtolower($ext);
			if($ext2 == "jpeg" || $ext2 == "jpg" || $ext2 == "gif" || $ext2 == "png")
			{
				$theimageinfo = getimagesize($gphoto);
				if($theimageinfo[2] != 1 && $theimageinfo[2] != 2 && $theimageinfo[2] != 3)
				{
					$error .= "<li>".$lang['100']."</li>";
				}
			}
			else
			{
				$error .= "<li>".$lang['100']."</li>";
			}
		}
		else
		{
			$error .= "<li>".$lang['101']."</li>";
		}
		
		if($gyoutube != "")
		{
			$pos = strpos($gyoutube, "http://www.youtube.com/watch?v=");
			if ($pos === false)
			{
				$error .= "<li>".$lang['133']."</li>";
			}
		}
				
		if($error == "")
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
			$query="INSERT INTO posts SET USERID='".mysql_real_escape_string($_SESSION['USERID'])."', gtitle='".mysql_real_escape_string($gtitle)."',gtags='".mysql_real_escape_string($gtags)."', gdesc='".mysql_real_escape_string($gdesc)."', ginst='".mysql_real_escape_string($ginst)."', days='".mysql_real_escape_string($gdays)."', youtube='".mysql_real_escape_string($gyoutube)."', category='".mysql_real_escape_string($gcat)."', price='".mysql_real_escape_string($price)."', time_added='".time()."', date_added='".date("Y-m-d")."', pip='".$_SERVER['REMOTE_ADDR']."', active='$active', ctp='".mysql_real_escape_string($ctp)."'";
			$result=$conn->execute($query);
			$pid = mysql_insert_id();
			
			if($gphoto != "")
			{
				$thepp = $pid."-1";
				if($theimageinfo[2] == 1)
				{
					$thepp .= ".gif";
				}
				elseif($theimageinfo[2] == 2)
				{
					$thepp .= ".jpg";
				}
				elseif($theimageinfo[2] == 3)
				{
					$thepp .= ".png";
				}
				if($error == "")
				{
					$myvideoimgnew=$config['pdir']."/".$thepp;
					if(file_exists($myvideoimgnew))
					{
						unlink($myvideoimgnew);
					}
					move_uploaded_file($gphoto, $myvideoimgnew);
					do_resize_image($myvideoimgnew, "380", "265", false, $config['pdir']."/t/".$thepp);
					do_resize_image($myvideoimgnew, "102", "72", false, $config['pdir']."/t2/".$thepp);
					if(file_exists($config['pdir']."/".$thepp))
					{
						$query = "UPDATE posts SET p1='$thepp' WHERE PID='".mysql_real_escape_string($pid)."'";
						$conn->execute($query);
					}
				}
			}
			$gphoto2 = $_FILES['gphoto2']['tmp_name'];
			if($gphoto2 != "")
			{
				$ext = substr(strrchr($_FILES['gphoto2']['name'], '.'), 1);
				$ext2 = strtolower($ext);
				if($ext2 == "jpeg" || $ext2 == "jpg" || $ext2 == "gif" || $ext2 == "png")
				{
					$theimageinfo = getimagesize($gphoto2);
					if($theimageinfo[2] != 1 && $theimageinfo[2] != 2 && $theimageinfo[2] != 3)
					{
						$gstop = "1";
					}
					else
					{
						$gstop = "0";
					}
				}
				if($gstop == "0")
				{
					$thepp = $pid."-2";
					if($theimageinfo[2] == 1)
					{
						$thepp .= ".gif";
					}
					elseif($theimageinfo[2] == 2)
					{
						$thepp .= ".jpg";
					}
					elseif($theimageinfo[2] == 3)
					{
						$thepp .= ".png";
					}

					$myvideoimgnew=$config['pdir']."/".$thepp;
					if(file_exists($myvideoimgnew))
					{
						unlink($myvideoimgnew);
					}
					move_uploaded_file($gphoto2, $myvideoimgnew);
					do_resize_image($myvideoimgnew, "380", "265", false, $config['pdir']."/t/".$thepp);
					do_resize_image($myvideoimgnew, "102", "72", false, $config['pdir']."/t2/".$thepp);
					if(file_exists($config['pdir']."/".$thepp))
					{
						$query = "UPDATE posts SET p2='$thepp' WHERE PID='".mysql_real_escape_string($pid)."'";
						$conn->execute($query);
					}
				}
			}
			$gphoto3 = $_FILES['gphoto3']['tmp_name'];
			if($gphoto3 != "")
			{
				$ext = substr(strrchr($_FILES['gphoto3']['name'], '.'), 1);
				$ext2 = strtolower($ext);
				if($ext2 == "jpeg" || $ext2 == "jpg" || $ext2 == "gif" || $ext2 == "png")
				{
					$theimageinfo = getimagesize($gphoto3);
					if($theimageinfo[2] != 1 && $theimageinfo[2] != 2 && $theimageinfo[2] != 3)
					{
						$gstop = "1";
					}
					else
					{
						$gstop = "0";
					}
				}
				if($gstop == "0")
				{
					$thepp = $pid."-3";
					if($theimageinfo[2] == 1)
					{
						$thepp .= ".gif";
					}
					elseif($theimageinfo[2] == 2)
					{
						$thepp .= ".jpg";
					}
					elseif($theimageinfo[2] == 3)
					{
						$thepp .= ".png";
					}

					$myvideoimgnew=$config['pdir']."/".$thepp;
					if(file_exists($myvideoimgnew))
					{
						unlink($myvideoimgnew);
					}
					move_uploaded_file($gphoto3, $myvideoimgnew);
					do_resize_image($myvideoimgnew, "380", "265", false, $config['pdir']."/t/".$thepp);
					do_resize_image($myvideoimgnew, "102", "72", false, $config['pdir']."/t2/".$thepp);
					if(file_exists($config['pdir']."/".$thepp))
					{
						$query = "UPDATE posts SET p3='$thepp' WHERE PID='".mysql_real_escape_string($pid)."'";
						$conn->execute($query);
					}
				}
			}
			if($approve_stories == "1")
			{
				$message = $lang['126'];
			}
			else
			{
				$gurl = $config['baseurl']."/".get_cat_seo($gcat)."/".$pid."/".seo_clean_titles($gtitle);
				header("Location:$gurl");exit;
			}
		}
		else
		{
			STemplate::assign('gtitle',$gtitle);
			STemplate::assign('gcat',$gcat);
			STemplate::assign('gdesc',$gdesc);
			STemplate::assign('ginst',$ginst);
			STemplate::assign('gtags',$gtags);
			STemplate::assign('gdays',$gdays);
			STemplate::assign('gyoutube',$gyoutube);
		}
	}
	else
	{
		$gtitle = cleanit($_REQUEST['quicktitle']);
		STemplate::assign('gtitle',$gtitle);
	}
	
	$templateselect = "new.tpl";
	$pagetitle = $lang['61'];
	STemplate::assign('pagetitle',$pagetitle);
}
else
{
	header("Location:$config[baseurl]/");exit;
}

//TEMPLATES BEGIN
STemplate::assign('error',$error);
STemplate::assign('message',$message);
STemplate::display('header.tpl');
STemplate::display($templateselect);
STemplate::display('footer.tpl');
//TEMPLATES END
?>