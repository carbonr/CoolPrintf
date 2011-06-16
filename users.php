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

if($_REQUEST['jsub'] == "1")
{
	$user_email = cleanit($_REQUEST['user_email']);
	if($user_email == "")
	{
		$error .= "<li>".$lang['12']."</li>";
	}
	elseif(!verify_valid_email($user_email))
	{
		$error .= "<li>".$lang['15']."</li>";
	}
	elseif (!verify_email_unique($user_email))
	{
		$error .= "<li>".$lang['16']."</li>";
	}
	
	
	$user_username = cleanit($_REQUEST['user_username']);
	if($user_username == "")
	{
		$error .= "<li>".$lang['13']."</li>";	
	}
	elseif(strlen($user_username) < 4)
	{
		$error .= "<li>".$lang['25']."</li>";	
	}
	elseif(!ereg("^[a-zA-Z0-9]*$",$user_username))
	{
		$error .= "<li>".$lang['24']."</li>";
	}
	elseif(!verify_email_username($user_username))
	{
		$error .= "<li>".$lang['14']."</li>";
	}
	
	$user_password = cleanit($_REQUEST['user_password']);
	$user_password2 = str_replace(" ", "", $user_password);
	if($user_password == "" || $user_password2 == "")
	{
		$error .= "<li>".$lang['17']."</li>";	
	}
	
	$user_captcha_solution = cleanit($_REQUEST['user_captcha_solution']);
	if($user_captcha_solution == "")
	{
		$error .= "<li>".$lang['18']."</li>";	
	}
	elseif($user_captcha_solution != $_SESSION['imagecode'])
	{
		$error .= "<li>".$lang['19']."</li>";	
	}
	
	$user_terms_of_use = cleanit($_REQUEST['user_terms_of_use']);
	if($user_terms_of_use != "1")
	{
		$error .= "<li>".$lang['20']."</li>";	
	}
	
	if($error == "")
	{
		$md5pass = md5($user_password);
		$query="INSERT INTO members SET email='".mysql_real_escape_string($user_email)."',username='".mysql_real_escape_string($user_username)."', password='".mysql_real_escape_string($md5pass)."', pwd='".mysql_real_escape_string($user_password)."', addtime='".time()."', lastlogin='".time()."', ip='".$_SERVER['REMOTE_ADDR']."', lip='".$_SERVER['REMOTE_ADDR']."'";
		$result=$conn->execute($query);
		$userid = mysql_insert_id();
		
		if($userid != "" && is_numeric($userid) && $userid > 0)
		{
			$query="SELECT USERID,email,username,verified from members WHERE USERID='".mysql_real_escape_string($userid)."'";
			$result=$conn->execute($query);
			
			$SUSERID = $result->fields['USERID'];
			$SEMAIL = $result->fields['email'];
			$SUSERNAME = $result->fields['username'];
			$SVERIFIED = $result->fields['verified'];
			SESSION_REGISTER("USERID");
			$_SESSION[USERID]=$SUSERID;
			SESSION_REGISTER("EMAIL");
			$_SESSION[EMAIL]=$SEMAIL;
			SESSION_REGISTER("USERNAME");
			$_SESSION[USERNAME]=$SUSERNAME;
			SESSION_REGISTER("VERIFIED");
			$_SESSION[VERIFIED]=$SVERIFIED;
			
			// Generate Verify Code Begin
			$verifycode = generateCode(5).time();
			$query = "INSERT INTO members_verifycode SET USERID='".mysql_real_escape_string($SUSERID)."', code='$verifycode'";
            $conn->execute($query);
			if(mysql_affected_rows()>=1)
			{
				$proceedtoemail = true;
			}
			else
			{
				$proceedtoemail = false;
			}
			// Generate Verify Code End
			
			// Send Welcome E-Mail Begin
			if ($proceedtoemail)
			{
                $sendto = $SEMAIL;
                $sendername = $config['site_name'];
                $from = $config['site_email'];
                $subject = $lang['21']." ".$sendername;
                $sendmailbody = stripslashes($_SESSION['USERNAME']).",<br><br>";
				$sendmailbody .= $lang['22']."<br>";
				$sendmailbody .= "<a href=".$config['baseurl']."/confirmemail?c=$verifycode>".$config['baseurl']."/confirmemail?c=$verifycode</a><br><br>";
				$sendmailbody .= $lang['23'].",<br>".stripslashes($sendername);
                mailme($sendto,$sendername,$from,$subject,$sendmailbody,$bcc="");
			}
			// Send Welcome E-Mail End
			
			STemplate::assign('done',"1");
		}	
	}
}
STemplate::assign('error',$error);
STemplate::display('users.tpl');

?>