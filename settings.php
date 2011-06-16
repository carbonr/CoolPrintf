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
if ($SID != "" && $SID >= 0 && is_numeric($SID))
{	
	$SID = intval($_SESSION['USERID']);
	if($_POST['subform'] == "1")
	{
		$fname = cleanit($_REQUEST['fname']);	
		$user_email = cleanit($_REQUEST['email']);	
		$paypal = cleanit($_REQUEST['paypal']);	
		$details = cleanit($_REQUEST['details']);		

		if($user_email == "")
		{
			$error .= "<li>".$lang['12']."</li>";
		}
		elseif(!verify_valid_email($user_email))
		{
			$error .= "<li>".$lang['15']."</li>";
		}
		else
		{
			$query = "select count(*) as total from members where email='".mysql_real_escape_string($user_email)."' AND USERID!='".mysql_real_escape_string($SID)."' limit 1"; 
			$executequery = $conn->execute($query);
			$te = $executequery->fields[total]+0;
			if($te > 0)
			{
				$error .= "<li>".$lang['16']."</li>";
			}
		}
		
		if($paypal == "")
		{
			$error .= "<li>".$lang['170']."</li>";
		}
		elseif(!verify_valid_email($paypal))
		{
			$error .= "<li>".$lang['171']."</li>";
		}
				
		if($error == "")
		{			
			$query="UPDATE members SET fullname='".mysql_real_escape_string($fname)."',email='".mysql_real_escape_string($user_email)."', pemail='".mysql_real_escape_string($paypal)."', description='".mysql_real_escape_string($details)."' WHERE USERID='".mysql_real_escape_string($SID)."' AND status='1'";
			$result=$conn->execute($query);
			$pid = $SID;
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
				$thepp = $pid;
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
					$myvideoimgnew=$config['membersprofilepicdir']."/o/".$thepp;
					if(file_exists($myvideoimgnew))
					{
						unlink($myvideoimgnew);
					}
					move_uploaded_file($gphoto, $myvideoimgnew);
					$myvideoimgnew2=$config['membersprofilepicdir']."/".$thepp;
					do_resize_image($myvideoimgnew, "100", "100", false, $myvideoimgnew2);
					$myvideoimgnew3=$config['membersprofilepicdir']."/thumbs/".$thepp;
					do_resize_image($myvideoimgnew, "50", "50", false, $myvideoimgnew3);
					if(file_exists($config['membersprofilepicdir']."/o/".$thepp))
					{
						$query = "UPDATE members SET profilepicture='$thepp' WHERE USERID='".mysql_real_escape_string($SID)."'";
						$conn->execute($query);
					}
				}
			}
			$message = $lang['172'];
		}
	}
	if($_POST['subpass'] == "1")
	{
		$pass = cleanit($_REQUEST['pass']);	
		$pass2 = cleanit($_REQUEST['pass2']);		
		if($pass == "")
		{
			$error .= "<li>".$lang['173']."</li>";
		}
		if($pass2 == "")
		{
			$error .= "<li>".$lang['174']."</li>";
		}
		if($pass != "" && $pass2 != "")
		{
			if($pass == $pass2)
			{
				$mp = md5($pass);
				$query = "UPDATE members SET password='".mysql_real_escape_string($mp)."', pwd='".mysql_real_escape_string($pass)."' WHERE USERID='".mysql_real_escape_string($SID)."' AND status='1'";
				$conn->execute($query);
				$message = $lang['176'];
			}
			else
			{
				$error .= "<li>".$lang['175']."</li>";
			}
		}
	}
	STemplate::assign('pagetitle',$lang['31']);
	$query="SELECT * FROM members WHERE USERID='".mysql_real_escape_string($SID)."' AND status='1'";
	$results=$conn->execute($query);
	$p = $results->getrows();
	STemplate::assign('p',$p[0]);
}
else
{
	header("Location:$config[baseurl]/");exit;
}

//TEMPLATES BEGIN
STemplate::assign('error',$error);
STemplate::assign('message',$message);
STemplate::display('header.tpl');
STemplate::display('settings.tpl');
STemplate::display('footer.tpl');
//TEMPLATES END
?>