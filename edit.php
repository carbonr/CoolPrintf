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

$SID = $_SESSION['USERID'];
$EID = intval(cleanit($_REQUEST['id']));
if($EID > 0)
{
	if ($SID != "" && $SID >= 0 && is_numeric($SID))
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
				$query="UPDATE posts SET gtitle='".mysql_real_escape_string($gtitle)."',gtags='".mysql_real_escape_string($gtags)."', gdesc='".mysql_real_escape_string($gdesc)."', ginst='".mysql_real_escape_string($ginst)."', days='".mysql_real_escape_string($gdays)."', youtube='".mysql_real_escape_string($gyoutube)."', category='".mysql_real_escape_string($gcat)."', pip='".$_SERVER['REMOTE_ADDR']."', active='$active' WHERE USERID='".mysql_real_escape_string($SID)."' AND PID='".mysql_real_escape_string($EID)."'";
				$result=$conn->execute($query);
				$pid = $EID;
				$gstop = "1";
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
							$gstop = "1";
						}
						else
						{
							$gstop = "0";	
						}
					}
				}
				if($gstop == "0")
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
				$gstop = "1";
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
				$gstop = "1";
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
					$message = $lang['145'];
				}
				else
				{
					$message = $lang['146'];
				}
			}
		}
		
		$query="SELECT * FROM posts WHERE USERID='".mysql_real_escape_string($SID)."' AND PID='".mysql_real_escape_string($EID)."'";
		$results=$conn->execute($query);
		$g = $results->getrows();
		STemplate::assign('g',$g[0]);
		
		$pagetitle = $lang['141'];
		STemplate::assign('pagetitle',$pagetitle);
	}
	else
	{
		header("Location:$config[baseurl]/");exit;
	}
}
else
{
	$message = $lang['144'];
}

//TEMPLATES BEGIN
STemplate::assign('sm1',"1");
STemplate::assign('error',$error);
STemplate::assign('message',$message);
STemplate::display('header.tpl');
STemplate::display('edit.tpl');
STemplate::display('footer.tpl');
//TEMPLATES END
?>