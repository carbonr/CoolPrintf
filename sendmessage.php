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
	if($_POST['submg'] == "1")
	{
		$msgto = intval(cleanit($_REQUEST['msgto']));
		$FID = intval(cleanit($_REQUEST['message_message_attachment_id']));
		$message_body = cleanit($_REQUEST['message_body']);
		$aboutid = intval(cleanit($_REQUEST['aboutid']));
		if($msgto > 0 && $message_body != "")
		{
			$query="INSERT INTO inbox SET MSGFROM='".mysql_real_escape_string($_SESSION['USERID'])."', MSGTO='".mysql_real_escape_string($msgto)."',message='".mysql_real_escape_string($message_body)."', FID='".mysql_real_escape_string($FID)."', PID='".mysql_real_escape_string($aboutid)."', time='".time()."'";
			$result=$conn->execute($query);
			$mid = mysql_insert_id();
			if($mid > 0)
			{
				$UID = $msgto;
				$query="SELECT DISTINCT A.username AS mto, C.username AS mfrom, B.* FROM members A, inbox B, members C WHERE A.USERID=B.MSGTO AND C.USERID=B.MSGFROM AND ((B.MSGTO='".mysql_real_escape_string($_SESSION['USERID'])."' AND B.MSGFROM='".mysql_real_escape_string($UID)."') OR (B.MSGTO='".mysql_real_escape_string($UID)."' AND B.MSGFROM='".mysql_real_escape_string($_SESSION['USERID'])."')) order by B.MID asc";
				$results=$conn->execute($query);
				$m = $results->getrows();
				STemplate::assign('m',$m);
				
				$query="DELETE FROM archive WHERE AID='".mysql_real_escape_string($_SESSION['USERID'])."' AND USERID='".mysql_real_escape_string($msgto)."'";
				$result=$conn->execute($query);
				
				$query = "select username,email from members where USERID='".mysql_real_escape_string($msgto)."'"; 
				$executequery=$conn->execute($query);
				$sendto = $executequery->fields['email'];
				$sendname = $executequery->fields['username'];
				if($sendto != "")
				{
					$myname = stripslashes($_SESSION['USERNAME']);
					$sendername = $config['site_name'];
					$from = $config['site_email'];
					$subject = $lang['437'];
					$sendmailbody = stripslashes($sendname).",<br><br>".$myname." ";
					$sendmailbody .= $lang['438']."<br><br>".$lang['439'].": ".stripslashes($message_body)."<br><br>";
					$sendmailbody .= $lang['23'].",<br>".stripslashes($sendername);
					mailme($sendto,$sendername,$from,$subject,$sendmailbody,$bcc="");
				}
			}
		}
	}
}

//TEMPLATES BEGIN
STemplate::assign('message',$message);
STemplate::display('sendmessage.tpl');
//TEMPLATES END
?>