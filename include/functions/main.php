<?php

function insert_get_packs($a)
{
    global $config,$conn;
	$query = "select ID,pprice from packs order by pprice asc"; 
	$results = $conn->execute($query);
	$returnthis = $results->getrows();
	return $returnthis;
}

function insert_get_seo_profile($a)
{
        $uname = $a['username'];
		//$uname = preg_replace('/[^a-z0-9-_* ]/i', '', $uname);
		echo "user/".$uname;
}

function get_seo_profile($uname)
{
		//$uname = preg_replace('/[^a-z0-9-_* ]/i', '', $uname);
		return "user/".$uname;
}

function insert_get_seo_convo($a)
{
        $uname = $a['username'];
		//$uname = preg_replace('/[^a-z0-9-_* ]/i', '', $uname);
		echo "conversations/".$uname;
}

function insert_add_plus($a)
{
	global $lang, $config;
	$p = $a['price'];
    $tt = $lang['62']."+".$a['topic']."+".$lang['63'].$p;
	$tt = str_replace(' ', '+', $tt);
	echo $tt;
}

function insert_get_percent($a)
{
	global $conn;
	$query = "select good, bad from ratings where USERID='".mysql_real_escape_string($a[userid])."'"; 
	$results=$conn->execute($query);
	$f = $results->getrows();
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
	$g = $grat;
	$b = $brat;
	$t = $g + $b;
	if($t > 0)
	{
		$r = (($g / $t) * 100);
		return round($r, 1);
	}
	else
	{
		return 0;
	}
}

function insert_get_percent2($a)
{
    global $conn;
	$query = "select good, bad from ratings where USERID='".mysql_real_escape_string($_SESSION[USERID])."'"; 
	$results=$conn->execute($query);
	$f = $results->getrows();
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
	$g = $grat;
	$b = $brat;
	$t = $g + $b;
	if($t > 0)
	{
		$r = (($g / $t) * 100);
		return round($r, 1);
	}
	else
	{
		return 0;
	}
}

function insert_get_rating($a)
{
	$g = $a['g'];
	$b = $a['b'];
	$t = $g + $b;
	if($t > 0)
	{
		$r = (($g / $t) * 100);
		return round($r, 1);
	}
	else
	{
		return 0;
	}
}

function insert_get_rating2($a)
{
    global $conn;
	$query = "select A.good, A.bad from ratings A, members B where A.PID='".mysql_real_escape_string($a[pid])."' AND A.RATER=B.USERID and B.status='1'"; 
	$results=$conn->execute($query);
	$f = $results->getrows();
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
	$g = $grat;
	$b = $brat;
	$t = $g + $b;
	if($t > 0)
	{
		$r = (($g / $t) * 100);
		return round($r, 1);
	}
	else
	{
		return 0;
	}
}

function insert_get_gtitle($a)
{
    global $conn;
	$query = "select A.gtitle from posts A, orders B where B.OID='".mysql_real_escape_string($a[oid])."' AND B.PID=A.PID"; 
	$executequery=$conn->execute($query);
	$gtitle = $executequery->fields['gtitle'];
	return $gtitle;
}

function insert_last_unread($a)
{
    global $conn;
	$mto = intval($a['uid']);
	$mfr = intval($_SESSION['USERID']);
	$query = "select MSGTO, unread from inbox where ((MSGTO='".mysql_real_escape_string($mto)."' AND MSGFROM='".mysql_real_escape_string($mfr)."') OR (MSGTO='".mysql_real_escape_string($mfr)."' AND MSGFROM='".mysql_real_escape_string($mto)."')) order by MID desc limit 1"; 
	$executequery=$conn->execute($query);
	$unread = $executequery->fields['unread'];
	$MSGTO = $executequery->fields['MSGTO'];
	if($MSGTO == $mfr)
	{
		return $unread;
	}
	else
	{
		return 0;	
	}
}

function insert_last_email($a)
{
    global $conn;
	$mto = intval($a['uid']);
	$mfr = intval($_SESSION['USERID']);
	$query = "select message from inbox where ((MSGTO='".mysql_real_escape_string($mto)."' AND MSGFROM='".mysql_real_escape_string($mfr)."') OR (MSGTO='".mysql_real_escape_string($mfr)."' AND MSGFROM='".mysql_real_escape_string($mto)."')) order by MID desc limit 1"; 
	$executequery=$conn->execute($query);
	$message = $executequery->fields['message'];
	return $message;

}

function insert_last_delivery($a)
{
    global $conn;
	$oid = intval($a['oid']);
	$query = "select MID from inbox2 where OID='".mysql_real_escape_string($oid)."' AND action='delivery' order by MID desc limit 1"; 
	$executequery=$conn->execute($query);
	$MID = $executequery->fields['MID'];
	return $MID;

}

function insert_get_status($a)
{
    global $conn;
	$oid = intval($a['oid']);
	$query = "select status from orders where OID='".mysql_real_escape_string($oid)."'"; 
	$executequery=$conn->execute($query);
	$status = $executequery->fields['status'];
	return $status;

}

function insert_fback($a)
{
    global $conn;
	$oid = intval($a['oid']);
	$query = "select count(*) as total from ratings where OID='".mysql_real_escape_string($oid)."' AND RATER='".mysql_real_escape_string($_SESSION[USERID])."'"; 
	$executequery=$conn->execute($query);
	$total = $executequery->fields['total']+0;
	return $total;

}

function insert_wdreq($a)
{
    global $conn;
	$oid = intval($a['oid']);
	$query = "select count(*) as total from withdraw_requests where USERID='".mysql_real_escape_string($_SESSION[USERID])."'"; 
	$executequery=$conn->execute($query);
	$total = $executequery->fields['total']+0;
	return $total;

}

function insert_fback2($a)
{
    global $conn;
	$oid = intval($a['oid']);
	$sid = intval($a['sid']);
	$query = "select count(*) as total from ratings where OID='".mysql_real_escape_string($oid)."' AND RATER='".mysql_real_escape_string($sid)."'"; 
	$executequery=$conn->execute($query);
	$total = $executequery->fields['total']+0;
	return $total;

}

function insert_gig_details($a)
{
    global $conn;
	$query = "SELECT A.*, B.seo from posts A, categories B where A.active='1' AND A.category=B.CATID AND A.PID='".mysql_real_escape_string($a[pid])."' limit 1";
	$results = $conn->execute($query);
	$w = $results->getrows();
	return $w;
}

function insert_file_details($a)
{
    global $conn;
	$query = "SELECT FID, fname, s from files where FID='".mysql_real_escape_string($a[fid])."' limit 1";
	$results = $conn->execute($query);
	$w = $results->getrows();
	return $w;
}

function insert_gfs($a)
{
	global $conn, $config;
	$query = "select fname,s from files where FID='".mysql_real_escape_string($a[fid])."' limit 1"; 
	$executequery=$conn->execute($query);
	$s = $executequery->fields['s'];
	$fname = $executequery->fields['fname'];
    $path = $config['basedir'].'/files/';
	$cf = md5($a['fid']).$s;
	$saveme = $path.$cf;
	$file_loc = $saveme."/".$fname; 
	return formatBytes(filesize($file_loc), 1);
}

function formatBytes($bytes, $precision = 2) 
{
    $units = array('B', 'KB', 'MB', 'GB', 'TB');
    $bytes = max($bytes, 0);
    $pow = floor(($bytes ? log($bytes) : 0) / log(1024));
    $pow = min($pow, count($units) - 1);
    $bytes /= pow(1024, $pow);
    return round($bytes, $precision) . ' ' . $units[$pow];
} 

function insert_mark_read($a)
{
    global $conn;
	$query = "UPDATE inbox SET unread='0' WHERE MID='".mysql_real_escape_string($a[mid])."'";
	$conn->execute($query);
}

function escape($data)
{
    if (ini_get('magic_quotes_gpc'))
	{
    	$data = stripslashes($data);
    }
    return mysql_real_escape_string($data);
}

function insert_get_wants($var)
{
	global $conn, $config;
	$query="SELECT B.username, A.want FROM wants A, members B WHERE A.active='1' AND A.USERID=B.USERID order by rand() limit $config[max_suggest]";
	$results = $conn->execute($query);
	$w = $results->getrows();
	return $w;
}

function insert_get_categories($a)
{
    global $config,$conn;
	$query = "select * from categories order by name asc"; 
	$results = $conn->execute($query);
	$returnthis = $results->getrows();
	return $returnthis;
}

function insert_like_cnt($var)
{
    global $conn;
	$query = "select count(*) as total from bookmarks where USERID='".mysql_real_escape_string($_SESSION[USERID])."' AND PID='".mysql_real_escape_string($var[pid])."'"; 
	$executequery=$conn->execute($query);
	$cnt = $executequery->fields['total'];
	if($cnt > 0)
	{
		return "1";
	}
	else
	{
		return "0";
	}
}

function insert_active_orders($a)
{
    global $conn;
	$query = "select count(*) as total from orders where PID='".mysql_real_escape_string($a[PID])."' AND (status='0' OR status='1' OR status='6')"; 
	$executequery=$conn->execute($query);
	$cnt = $executequery->fields['total'];
	return $cnt;

}

function insert_done_orders($a)
{
    global $conn;
	$query = "select count(*) as total from orders where PID='".mysql_real_escape_string($a[PID])."' AND status='5'"; 
	$executequery=$conn->execute($query);
	$cnt = $executequery->fields['total'];
	return $cnt;

}

function insert_gig_cnt($var)
{
    global $conn;
	$query = "select count(*) as total from posts where USERID='".mysql_real_escape_string($_SESSION[USERID])."'"; 
	$executequery=$conn->execute($query);
	$cnt = $executequery->fields['total'];
	if($cnt > 0)
	{
		return "1";
	}
	else
	{
		return "0";
	}
}

function insert_msg_cnt($var)
{
    global $conn;
	$query = "select count(*) as total from inbox where MSGTO='".mysql_real_escape_string($_SESSION[USERID])."' AND unread='1'"; 
	$executequery=$conn->execute($query);
	$cnt = $executequery->fields['total'];
	return $cnt;
}

function insert_get_advertisement($var)
{
        global $conn;
        $query="SELECT code FROM advertisements WHERE AID='".mysql_real_escape_string($var[AID])."' AND active='1' limit 1";
        $executequery=$conn->execute($query);
        $getad = $executequery->fields[code];
		echo strip_mq_gpc($getad);
}

function verify_login_admin()
{
        global $config,$conn;
        if($_SESSION['ADMINID'] != "" && is_numeric($_SESSION['ADMINID']) && $_SESSION['ADMINUSERNAME'] != "" && $_SESSION['ADMINPASSWORD'] != "")
        {
			$query="SELECT * FROM administrators WHERE username='".mysql_real_escape_string($_SESSION['ADMINUSERNAME'])."' AND password='".mysql_real_escape_string($_SESSION['ADMINPASSWORD'])."' AND ADMINID='".mysql_real_escape_string($_SESSION['ADMINID'])."'";
        	$executequery=$conn->execute($query);
			
			if(mysql_affected_rows()==1)
			{
			
			}
			else
			{
				header("location:$config[adminurl]/index.php");
            	exit;
			}
			
        }
		else
		{
			header("location:$config[adminurl]/index.php");
            exit;
		}
}

function verify_email_username($usernametocheck)
{
    global $config,$conn;
	$query = "select count(*) as total from members where username='".mysql_real_escape_string($usernametocheck)."' limit 1"; 
	$executequery = $conn->execute($query);
	$totalu = $executequery->fields[total];
	if ($totalu >= 1)
	{
		return false;
	}
	else
	{
		return true;
	}
}

function verify_valid_email($emailtocheck)
{
       $eregicheck = "^([-!#\$%&'*+./0-9=?A-Z^_`a-z{|}~])+@([-!#\$%&'*+/0-9=?A-Z^_`a-z{|}~]+\\.)+[a-zA-Z]{2,4}\$";
       return eregi($eregicheck, $emailtocheck);
}

function verify_email_unique($emailtocheck)
{
    global $config,$conn;
	$query = "select count(*) as total from members where email='".mysql_real_escape_string($emailtocheck)."' limit 1"; 
	$executequery = $conn->execute($query);
	$totalemails = $executequery->fields[total];
	if ($totalemails >= 1)
	{
		return false;
	}
	else
	{
		return true;
	}
}

function mailme($sendto,$sendername,$from,$subject,$sendmailbody,$bcc="")
{
	global $SERVER_NAME;
	$subject = nl2br($subject);
	$sendmailbody = nl2br($sendmailbody);
	$sendto = $sendto;
	if($bcc!="")
	{
		$headers = "Bcc: ".$bcc."\n";
	}
	$headers = "MIME-Version: 1.0\n";
	$headers .= "Content-type: text/html; charset=utf-8 \n";
	$headers .= "X-Priority: 3\n";
	$headers .= "X-MSMail-Priority: Normal\n";
	$headers .= "X-Mailer: PHP/"."MIME-Version: 1.0\n";
	$headers .= "From: " . $from . "\n";
	$headers .= "Content-Type: text/html\n";
	mail("$sendto","$subject","$sendmailbody","$headers");
}

function get_cat_seo($cid)
{
        global $conn;
        $query="SELECT seo FROM categories WHERE CATID='".mysql_real_escape_string($cid)."' limit 1";
        $executequery=$conn->execute($query);
        $seo = $executequery->fields['seo'];
		return $seo;
}

function get_cat($cid)
{
        global $conn;
        $query="SELECT name FROM categories WHERE CATID='".mysql_real_escape_string($cid)."' limit 1";
        $executequery=$conn->execute($query);
        $name = $executequery->fields[name];
		return $name;
}

function insert_get_cat($var)
{
        global $conn;
        $query="SELECT name FROM categories WHERE CATID='".mysql_real_escape_string($var[CATID])."' limit 1";
        $executequery=$conn->execute($query);
        $name = $executequery->fields[name];
		echo $name;
}

function insert_get_stripped_phrase($a)
{
	$stripper = $a[details]; 
	$stripper = str_replace("\\n", "<br>", $stripper);
	$stripper = str_replace("\\r", "", $stripper);
	$stripper = str_replace("\\", "", $stripper);
	return $stripper;
}

function insert_get_stripped_phrase2($a)
{
	$stripper = $a[details]; 
	$stripper = str_replace("\\n", "\n", $stripper);
	$stripper = str_replace("\\r", "\r", $stripper);
	return $stripper;
}

function listdays($selected)
{
	$days = "";
    for($i=1;$i<=31;$i++)
    {
    	if($i == $selected)
		{
        	$days .= "<option value=\"$i\" selected>$i</option>";
        }
        else
		{
        	$days .= "<option value=\"$i\">$i</option>";
        }
    }
    return $days;
}

function listmonths($selected)
{
    $months = "";
    $allmonths = array("","January","February","March","April","May","June","July","August","September","October","November","December");
    for($i=1;$i<=12;$i++)
    {
        if($i == $selected)
		{
        	$months .= "<option value=\"$i\" selected>$allmonths[$i]</option>";
        }
        else
		{
        	$months .= "<option value=\"$i\">$allmonths[$i]</option>";
        }
    }
    return $months;
}

function listyears($selected)
{
        $years = "";
        $thisyear = date("Y");
        for($i=$thisyear-100+13;$i<=$thisyear-13;$i++)
        {
                if($i == $selected)
                        $years .= "<option value=\"$i\" selected>$i</option>";
                else
                        $years .= "<option value=\"$i\">$i</option>";
        }
        return $years;
}

function listcountries($selected)
{
    $country="";
    $countries = array("Afghanistan","Albania","Algeria","American Samoa","Andorra","Angola","Anguilla","Antartica","Antigua and Barbuda","Argentina","Armenia","Aruba","Ascension Island","Australia","Austria","Azerbaijan","Bahamas","Bahrain","Bangladesh","Barbados","Belarus","Belgium","Belize","Benin","Bermuda","Bhutan","Bolivia","Botswana","Bouvet Island","Brazil","Brunei Darussalam","Bulgaria","Burkina Faso","Burundi","Cambodia","Cameroon","Canada","Cape Verde Islands","Cayman Islands","Chad","Chile","China","Christmas Island","Colombia","Comoros","Cook Islands","Costa Rica","Cote d Ivoire","Croatia/Hrvatska","Cyprus","Czech Republic","Denmark","Djibouti","Dominica","Dominican Republic","East Timor","Ecuador","Egypt","El Salvador","Equatorial Guinea","Eritrea","Estonia","Ethiopia","Falkland Islands","Faroe Islands","Fiji","Finland","France","French Guiana","French Polynesia","Gabon","Gambia","Georgia","Germany","Ghana","Gibraltar","Greece","Greenland","Grenada","Guadeloupe","Guam","Guatemala","Guernsey","Guinea","Guinea-Bissau","Guyana","Haiti","Honduras","Hong Kong","Hungary","Iceland","India","Indonesia","Iran","Ireland","Isle of Man","Israel","Italy", "Jamaica", "Japan", "Jersey", "Jordan", "Kazakhstan", "Kenya", "Kiribati", "Korea", "Kuwait", "Kyrgyzstan", "Laos", "Latvia", "Lebanon", "Lesotho", "Liberia", "Libya", "Liechtenstein", "Lithuania", "Luxembourg", "Macau", "Macedonia", "Madagascar", "Malawi", "Malaysia", "Maldives", "Mali", "Malta", "Marshall Islands", "Martinique", "Mauritania", "Mauritius", "Mayotte Island", "Mexico", "Micronesia", "Moldova", "Monaco", "Mongolia", "Montserrat", "Morocco", "Mozambique", "Myanmar", "Namibia", "Nauru", "Nepal", "Netherlands", "Netherlands Antilles", "New Caledonia", "New Zealand", "Nicaragua", "Niger", "Nigeria", "Niue", "Norfolk Island", "Norway", "Oman", "Pakistan", "Palau", "Panama", "Papua New Guinea", "Paraguay", "Peru", "Philippines", "Pitcairn Island", "Poland", "Portugal", "Puerto Rico", "Qatar", "Reunion Island", "Romania", "Russian Federation", "Rwanda", "Saint Helena", "Saint Lucia", "San Marino", "Saudi Arabia", "Senegal", "Seychelles", "Sierra Leone", "Singapore", "Slovak Republic", "Slovenia", "Solomon Islands", "Somalia", "South Africa", "South Georgia", "Spain", "Sri Lanka", "Suriname", "Svalbard", "Swaziland", "Sweden", "Switzerland", "Syria", "Taiwan", "Tajikistan", "Tanzania", "Thailand", "Togo", "Tokelau", "Tonga Islands", "Trinidad and Tobago", "Tunisia", "Turkey", "Turkmenistan", "Tuvalu", "Uganda", "Ukraine", "United Kingdom", "United States", "Uruguay", "Uzbekistan", "Vanuatu", "Vatican City", "Venezuela", "Vietnam", "Western Sahara", "Western Samoa", "Yemen", "Yugoslavia", "Zambia","Zimbabwe");
    for($i=0;$i<count($countries);$i++)
    {
    	if($selected == $countries[$i])
        {
			$country .="<option value=\"$countries[$i]\" selected>$countries[$i]</option>";
		}
        else
		{
			$country .="<option value=\"$countries[$i]\">$countries[$i]</option>";
		}
	}
    return $country;
}

function insert_get_member_profilepicture($var)
{
        global $conn;
        $query="SELECT profilepicture FROM members WHERE USERID='".mysql_real_escape_string($var[USERID])."' limit 1";
        $executequery=$conn->execute($query);
		$results = $executequery->fields[profilepicture];
		if ($results == "")
			return "noprofilepicture.gif";
		else
			return $results;
}

function insert_get_fav_status($var)
{
    global $conn;
	$query="SELECT count(*) as total FROM posts_favorited WHERE USERID='".mysql_real_escape_string($_SESSION[USERID])."' AND PID='".intval($var[PID])."'";
	$executequery=$conn->execute($query);
	$total = $executequery->fields[total];
	return intval($total);
}

function insert_com_count($var)
{
    global $conn;
	$query="SELECT count(*) as total FROM posts_comments WHERE PID='".intval($var[PID])."'";
	$executequery=$conn->execute($query);
	$total = $executequery->fields[total];
	return intval($total);
}

function does_post_exist($a)
{
	global $conn, $config;
    $query="SELECT USERID FROM posts WHERE PID='".mysql_real_escape_string($a)."'";
    $executequery=$conn->execute($query);
    if ($executequery->recordcount()>0)
        return true;
    else
		return false;
}

function update_last_viewed($a)
{
        global $conn;
		$query = "UPDATE posts SET last_viewed='".time()."' WHERE PID='".mysql_real_escape_string($a)."'";
        $executequery=$conn->execute($query);
}

function update_your_viewed ($a)
{
        global $conn;
		$query = "UPDATE members SET yourviewed  = yourviewed  + 1 WHERE USERID='".mysql_real_escape_string($a)."'";
        $executequery=$conn->execute($query);
}

function update_you_viewed($a)
{
        global $conn;
		$query = "UPDATE members SET youviewed = youviewed + 1 WHERE USERID='".mysql_real_escape_string($a)."'";
        $executequery=$conn->execute($query);
}

function session_verification()
{
    if ($_SESSION[USERID] != "")
	{
		if (is_numeric($_SESSION[USERID]))
		{
        	return true;
		}
    }
	else
		return false;
}
function insert_get_username_from_userid($var)
{
        global $conn;
        $query="SELECT username FROM members WHERE USERID='".mysql_real_escape_string($var[USERID])."'";
        $executequery=$conn->execute($query);
        $getusername = $executequery->fields[username];
		return "$getusername";
}

function does_profile_exist($a)
{
	global $conn;
    global $config;
    $query="SELECT username FROM members WHERE USERID='".mysql_real_escape_string($a)."'";
    $executequery=$conn->execute($query);
    if ($executequery->recordcount()>0)
        return true;
    else
		return false;
}

function update_viewcount_profile($a)
{
        global $conn;
		$query = "UPDATE members SET profileviews = profileviews + 1 WHERE USERID='".mysql_real_escape_string($a)."'";
        $executequery=$conn->execute($query);
}

function update_viewcount($a)
{
        global $conn;
		$query = "UPDATE posts SET viewcount = viewcount + 1 WHERE PID='".mysql_real_escape_string($a)."'";
        $executequery=$conn->execute($query);
}

function insert_get_member_comments_count($var)
{
        global $conn;
        $query="SELECT count(*) as total FROM posts_comments WHERE USERID='".mysql_real_escape_string($var[USERID])."'";
        $executequery=$conn->execute($query);
        $results = $executequery->fields[total];
		echo "$results";
}

function insert_get_posts_count($var)
{
        global $conn;
        $query="SELECT count(*) as total FROM posts WHERE USERID='".mysql_real_escape_string($var[USERID])."'";
        $executequery=$conn->execute($query);
        $results = $executequery->fields[total];
		echo "$results";
}

function insert_get_static($var)
{
        global $conn;
        $query="SELECT $var[sel] FROM static WHERE ID='".mysql_real_escape_string($var[ID])."'";
        $executequery=$conn->execute($query);
        $returnme = $executequery->fields[$var[sel]];
		$returnme = strip_mq_gpc($returnme);
		echo "$returnme";
}

function insert_strip_special($a)
{
	$text = $a['text'];
	$text = str_replace(",", " ", $text);
	$text = str_replace(".", " ", $text);
	$text=nl2br($text);
	$text = str_replace("\n", " ", $text);
	$text = str_replace("\r", " ", $text);
	$text = str_replace("<br />", " ", $text);
	$text = str_replace("  ", " ", $text);
	$clean = preg_replace("/^[^a-z0-9]?(.*?)[^a-z0-9]?$/i", "$1", $text);
	return $clean;
}

function insert_clickable_link($var)
{
	$text = $var['text'];
	$text = preg_replace('#(script|about|applet|activex|chrome):#is', "\\1:", $text);
	$ret = ' ' . $text;
	$ret = preg_replace("#(^|[\n ])([\w]+?://[\w\#$%&~/.\-;:=,?@\[\]+]*)#is", "\\1<a href=\"\\2\" target=\"_blank\">\\2</a>", $ret);
	$ret = preg_replace("#(^|[\n ])((www|ftp)\.[\w\#$%&~/.\-;:=,?@\[\]+]*)#is", "\\1<a href=\"http://\\2\" target=\"_blank\">\\2</a>", $ret);
	$ret = preg_replace("#(^|[\n ])([a-z0-9&\-_.]+?)@([\w\-]+\.([\w\-\.]+\.)*[\w]+)#i", "\\1<a href=\"mailto:\\2@\\3\">\\2@\\3</a>", $ret);
	$ret = substr($ret, 1);
	return $ret;
}

function firstDayOfMonth2($uts=null)
{
    $today = is_null($uts) ? getDate() : getDate($uts);
    $first_day = getdate(mktime(0,0,0,$today['mon'],1,$today['year']));
    return $first_day[0];
} 

function firstDayOfYear2($uts=null)
{
    $today = is_null($uts) ? getDate() : getDate($uts);
    $first_day = getdate(mktime(0,0,0,1,1,$today['year']));
    return $first_day[0];
}

function cleanit($text)
{
	return htmlentities(strip_tags(stripslashes($text)), ENT_COMPAT, "UTF-8");
}

function do_resize_image($file, $width = 0, $height = 0, $proportional = false, $output = 'file')
{
	if($height <= 0 && $width <= 0)
	{
	  return false;
	}
	
	$info = getimagesize($file);
	$image = '';

	$final_width = 0;
	$final_height = 0;
	list($width_old, $height_old) = $info;

	if($proportional) 
	{
	  if ($width == 0) $factor = $height/$height_old;
	  elseif ($height == 0) $factor = $width/$width_old;
	  else $factor = min ( $width / $width_old, $height / $height_old);   
	  
	  $final_width = round ($width_old * $factor);
	  $final_height = round ($height_old * $factor);
		  
	  if($final_width > $width_old && $final_height > $height_old)
	  {
	  	  $final_width = $width_old;
		  $final_height = $height_old;

	  }
	}
	else 
	{
	  $final_width = ( $width <= 0 ) ? $width_old : $width;
	  $final_height = ( $height <= 0 ) ? $height_old : $height;
	}
	
	switch($info[2]) 
	{
	  case IMAGETYPE_GIF:
		$image = imagecreatefromgif($file);
	  break;
	  case IMAGETYPE_JPEG:
		$image = imagecreatefromjpeg($file);
	  break;
	  case IMAGETYPE_PNG:
		$image = imagecreatefrompng($file);
	  break;
	  default:
		return false;
	}

	$image_resized = imagecreatetruecolor( $final_width, $final_height );

	if(($info[2] == IMAGETYPE_GIF) || ($info[2] == IMAGETYPE_PNG))
	{
	  $trnprt_indx = imagecolortransparent($image);
	
	  if($trnprt_indx >= 0)
	  {
		$trnprt_color    = imagecolorsforindex($image, $trnprt_indx);
		$trnprt_indx    = imagecolorallocate($image_resized, $trnprt_color['red'], $trnprt_color['green'], $trnprt_color['blue']);
		imagefill($image_resized, 0, 0, $trnprt_indx);
		imagecolortransparent($image_resized, $trnprt_indx);	
	  } 
	  elseif($info[2] == IMAGETYPE_PNG) 
	  {
		imagealphablending($image_resized, false);
		$color = imagecolorallocatealpha($image_resized, 0, 0, 0, 127);
		imagefill($image_resized, 0, 0, $color);
		imagesavealpha($image_resized, true);
	  }
	}
	imagecopyresampled($image_resized, $image, 0, 0, 0, 0, $final_width, $final_height, $width_old, $height_old);

	switch( strtolower($output))
	{
	  case 'browser':
		$mime = image_type_to_mime_type($info[2]);
		header("Content-type: $mime");
		$output = NULL;
	  break;
	  case 'file':
		$output = $file;
	  break;
	  case 'return':
		return $image_resized;
	  break;
	  default:
	  break;
	}
	
	if(file_exists($output))
	{
		@unlink($output);
	}

	switch($info[2])
	{
	  case IMAGETYPE_GIF:
		imagegif($image_resized, $output);
	  break;
	  case IMAGETYPE_JPEG:
		imagejpeg($image_resized, $output);
	  break;
	  case IMAGETYPE_PNG:
		imagepng($image_resized, $output);
	  break;
	  default:
		return false;
	}
	return true;
}

function insert_seo_clean_titles($a)
{
	$title2 = explode(" ", $a['title']);
	$i = 0;
	foreach($title2 as $line)
	{
		if($i < 15)
		{
			$title .= $line."-";
			$i++;
		}
	}
    $title = str_replace(array(":", ".", "^", "*", ",", ";", "~", "[", "]", "<", ">", "\\", "/", "=", "+", "%"),"", $title);
	$last = substr($title, -1);
	if($last == "-")
	{
		$title = substr($title, 0, -1);
	}
	$title = str_replace(" ", "-", $title);
	return $title;
}

function seo_clean_titles($a)
{
	$title2 = explode(" ", $a);
	$i = 0;
	foreach($title2 as $line)
	{
		if($i < 15)
		{
			$title .= $line."-";
			$i++;
		}
	}
    $title = str_replace(array(":", ".", "^", "*", ",", ";", "~", "[", "]", "<", ">", "\\", "/", "=", "+", "%"),"", $title);
	$last = substr($title, -1);
	if($last == "-")
	{
		$title = substr($title, 0, -1);
	}
	$title = str_replace(" ", "-", $title);
	return $title;
}

function delete_gig($PID)
{
	global $config, $conn;
	$PID = intval($PID);
	if($PID > 0)
	{		
		$query = "select p1,p2,p3 from posts WHERE PID='".mysql_real_escape_string($PID)."' AND USERID='".mysql_real_escape_string($_SESSION['USERID'])."'"; 
		$results = $conn->execute($query);
		$p1=$results->fields['p1'];
		$p2=$results->fields['p2'];
		$p3=$results->fields['p3'];
		if($p1 != "")
		{
			$dp1 = $config['pdir']."/".$p1;
			@chmod($dp1, 0777);
			if (file_exists($dp1))
			{
				@unlink($dp1);
			}
			$dp1 = $config['pdir']."/t/".$p1;
			@chmod($dp1, 0777);
			if (file_exists($dp1))
			{
				@unlink($dp1);
			}
			$dp1 = $config['pdir']."/t2/".$p1;
			@chmod($dp1, 0777);
			if (file_exists($dp1))
			{
				@unlink($dp1);
			}
		}
		if($p2 != "")
		{
			$dp2 = $config['pdir']."/".$p2;
			@chmod($dp2, 0777);
			if (file_exists($dp2))
			{
				@unlink($dp2);
			}
			$dp2 = $config['pdir']."/t/".$p2;
			@chmod($dp2, 0777);
			if (file_exists($dp2))
			{
				@unlink($dp2);
			}
			$dp2 = $config['pdir']."/t2/".$p2;
			@chmod($dp2, 0777);
			if (file_exists($dp2))
			{
				@unlink($dp2);
			}
		}
		if($p3 != "")
		{
			$dp3 = $config['pdir']."/".$p3;
			@chmod($dp3, 0777);
			if (file_exists($dp3))
			{
				@unlink($dp3);
			}
			$dp3 = $config['pdir']."/t/".$p3;
			@chmod($dp3, 0777);
			if (file_exists($dp3))
			{
				@unlink($dp3);
			}
			$dp3 = $config['pdir']."/t2/".$p3;
			@chmod($dp3, 0777);
			if (file_exists($dp3))
			{
				@unlink($dp3);
			}
		}

		$query = "DELETE FROM posts WHERE PID='".mysql_real_escape_string($PID)."' AND USERID='".mysql_real_escape_string($_SESSION['USERID'])."'";
		$conn->Execute($query);		
	}
}

function delete_gig_admin($PID)
{
	global $config, $conn;
	$PID = intval($PID);
	if($PID > 0)
	{		
		$query = "select p1,p2,p3 from posts WHERE PID='".mysql_real_escape_string($PID)."'"; 
		$results = $conn->execute($query);
		$p1=$results->fields['p1'];
		$p2=$results->fields['p2'];
		$p3=$results->fields['p3'];
		if($p1 != "")
		{
			$dp1 = $config['pdir']."/".$p1;
			@chmod($dp1, 0777);
			if (file_exists($dp1))
			{
				@unlink($dp1);
			}
			$dp1 = $config['pdir']."/t/".$p1;
			@chmod($dp1, 0777);
			if (file_exists($dp1))
			{
				@unlink($dp1);
			}
			$dp1 = $config['pdir']."/t2/".$p1;
			@chmod($dp1, 0777);
			if (file_exists($dp1))
			{
				@unlink($dp1);
			}
		}
		if($p2 != "")
		{
			$dp2 = $config['pdir']."/".$p2;
			@chmod($dp2, 0777);
			if (file_exists($dp2))
			{
				@unlink($dp2);
			}
			$dp2 = $config['pdir']."/t/".$p2;
			@chmod($dp2, 0777);
			if (file_exists($dp2))
			{
				@unlink($dp2);
			}
			$dp2 = $config['pdir']."/t2/".$p2;
			@chmod($dp2, 0777);
			if (file_exists($dp2))
			{
				@unlink($dp2);
			}
		}
		if($p3 != "")
		{
			$dp3 = $config['pdir']."/".$p3;
			@chmod($dp3, 0777);
			if (file_exists($dp3))
			{
				@unlink($dp3);
			}
			$dp3 = $config['pdir']."/t/".$p3;
			@chmod($dp3, 0777);
			if (file_exists($dp3))
			{
				@unlink($dp3);
			}
			$dp3 = $config['pdir']."/t2/".$p3;
			@chmod($dp3, 0777);
			if (file_exists($dp3))
			{
				@unlink($dp3);
			}
		}

		$query = "DELETE FROM posts WHERE PID='".mysql_real_escape_string($PID)."'";
		$conn->Execute($query);		
	}
}

function issue_refund($buyer,$OID,$rprice)
{
    global $conn;
	if($buyer > 0 && $OID > 0 && $rprice > 0)
	{
		$query = "select status, price from orders where OID='".mysql_real_escape_string($OID)."' AND USERID='".mysql_real_escape_string($buyer)."'"; 
		$executequery=$conn->execute($query);
		$status = $executequery->fields['status'];
		$price = $executequery->fields['price'];
		if($price > 0)
		{
			if($price == $rprice)
			{
				if($status != "2" && $status != "3" && $status != "5" && $status != "7")
				{
					$query = "INSERT INTO payments SET USERID='".mysql_real_escape_string($buyer)."', OID='".mysql_real_escape_string($OID)."', time='".time()."', price='".mysql_real_escape_string($rprice)."', t='0'"; 
					$executequery=$conn->execute($query);
					$transid = mysql_insert_id();
					if($transid > 0)
					{
						$query = "UPDATE payments SET cancel='1' WHERE OID='".mysql_real_escape_string($OID)."' AND t='1' AND cancel='0' limit 1"; 
						$executequery=$conn->execute($query);
						
						$query = "UPDATE members SET funds=funds+$rprice WHERE USERID='".mysql_real_escape_string($buyer)."' limit 1"; 
						$executequery=$conn->execute($query);
					}
				}
			}
		}
	}
}

function insert_get_time_to_days_ago($a)
{
	$td = date("d-m-Y");
	$timestamp = strtotime($td);
	//$currenttime = time();
	//$timediff = $currenttime - $a[time];
	//$oneday = 60 * 60 * 24;
	//$dayspassed = floor($timediff/$oneday);
	//if ($dayspassed == "0")
	if($a[time] > $timestamp)
	{
		return date("g:i",$a[time]);
	}
	else
	{
		return date("M j",$a[time]);
	}
}

function insert_get_deadline($a)
{
	$days = intval($a['days']);
	$time = intval($a['time']);
	$ctime = $days * 24 * 60 * 60;
	$utime = $time + $ctime;
	return date("M j, Y",$utime);
}

function count_days($a, $b)
{
	$gd_a = getdate( $a );
	$gd_b = getdate( $b );
	$a_new = mktime( 12, 0, 0, $gd_a['mon'], $gd_a['mday'], $gd_a['year'] );
	$b_new = mktime( 12, 0, 0, $gd_b['mon'], $gd_b['mday'], $gd_b['year'] );
	return round( abs( $a_new - $b_new ) / 86400 );
}

function insert_countdown($a)
{
	global $lang;
	$days = intval($a['days']);
	$time = intval($a['time']);
	$ctime = $days * 24 * 60 * 60;
	$f_timestamp = $time + $ctime;
	$c_timestamp = time();
	if($f_timestamp > $c_timestamp)
	{
		$days = floor( ($f_timestamp-$c_timestamp)/(60*60*24) );
		$f_timestamp = $f_timestamp - ($days*60*60*24);
		$hours = floor( ($f_timestamp-$c_timestamp)/(60*60) );
		$f_timestamp = $f_timestamp - ($hours*60*60);
		$minutes = floor( ($f_timestamp-$c_timestamp)/(60) );
		$f_timestamp = $f_timestamp - ($minutes*60);
		$seconds = $f_timestamp-$c_timestamp;
		$go = "(<b> ";
		if($days > 0)
		{
			$go .= 	$days." ";
			if($days == "1")
			{
				$go .= 	$lang['281']." ";
			}
			else
			{
				$go .= 	$lang['280']." ";
			}
		}
		if($hours > 0)
		{
			$go .= 	$hours." ";
			if($hours == "1")
			{
				$go .= 	$lang['285']." ";
			}
			else
			{
				$go .= 	$lang['284']." ";
			}
		}
		if($minutes > 0)
		{
			$go .= 	$minutes." ";
			if($minutes == "1")
			{
				$go .= 	$lang['283']." ";
			}
			else
			{
				$go .= 	$lang['282']." ";
			}
		}
		$go .= "</b>)";
		return $go;	
	}
}

function insert_late($a)
{
	$days = intval($a['days']);
	$time = intval($a['time']);
	$ctime = $days * 24 * 60 * 60;
	$utime = $time + $ctime;
	$now = time();
	if($now > $utime)
	{
		return "1";	
	}
	else
	{
		return "0";	
	}
}

function insert_get_days_withdraw($a)
{
	global $config;
	$dbw = intval($config['days_before_withdraw']);
	$n = time();
	$wtime = $dbw * 24 * 60 * 60;
	$t = intval($a['t']) + $wtime;
	if($t > $n)
	{
		return count_days($t, $n);
	}
	else
	{
		return "0";	
	}
}

function get_days_withdraw($a)
{
	global $config;
	$dbw = intval($config['days_before_withdraw']);
	$n = time();
	$wtime = $dbw * 24 * 60 * 60;
	$t = intval($a) + $wtime;
	if($t > $n)
	{
		return count_days($t, $n);
	}
	else
	{
		return "0";	
	}
}

function insert_get_yprice($a)
{
	global $config;
	$p = intval($a['p']);
	$c = intval($a['c']);
	if($c == "0")
	{
		$c = intval($config['commission']);
	}
	if($p > $c)
	{
		return ($p - $c);
	}
	else
	{
		return "0";	
	}
}

function get_yprice($a)
{
	global $config;
	$c = intval($config['commission']);
	$p = intval($a);
	if($p > $c)
	{
		return ($p - $c);
	}
	else
	{
		return "0";	
	}
}

function get_yprice2($a, $b)
{
	global $config;
	$c = intval($b);
	$p = intval($a);
	if($p > $c)
	{
		return ($p - $c);
	}
	else
	{
		return "0";	
	}
}

function insert_get_explode($a)
{
	$tags = explode(" ", $a['gtags']);
	return $tags;
}

function send_update_email($msgto, $oid)
{
	if($msgto > 0 && $oid > 0)
	{
		global $config, $conn, $lang;
		$query = "select username,email from members where USERID='".mysql_real_escape_string($msgto)."'"; 
		$executequery=$conn->execute($query);
		$sendto = $executequery->fields['email'];
		$sendname = $executequery->fields['username'];
		if($sendto != "")
		{
			$sendername = $config['site_name'];
			$from = $config['site_email'];
			$subject = $lang['407'];
			$sendmailbody = stripslashes($sendname).",<br><br>";
			$sendmailbody .= $lang['408']." ".$lang['409']."<br>";
			$sendmailbody .= "<a href=".$config['baseurl']."/track?id=$oid>".$config['baseurl']."/track?id=$oid</a><br><br>";
			$sendmailbody .= $lang['23'].",<br>".stripslashes($sendername);
			mailme($sendto,$sendername,$from,$subject,$sendmailbody,$bcc="");
		}
	}
}

function cancel_revenue($OID)
{
    global $config,$conn;
	if($OID > 0)
	{
		$query = "select PID from orders where OID='".mysql_real_escape_string($OID)."'"; 
		$executequery=$conn->execute($query);
		$PID = $executequery->fields['PID'];
		if($PID > 0)
		{
			$query = "select price from posts where PID='".mysql_real_escape_string($PID)."'"; 
			$executequery=$conn->execute($query);
			$price = $executequery->fields['price'];
			if($price > 0)
			{
				$query = "UPDATE posts SET rev=rev-$price WHERE PID='".mysql_real_escape_string($PID)."'"; 
				$executequery=$conn->execute($query);
			}
		}
	}
}

function insert_get_short_url($a)
{
    global $conn, $config;
	$SPID = intval($a['PID']);
	$stitle = stripslashes($a['title']);
	$sshort = stripslashes($a['short']);
	$SSEO = stripslashes($a['seo']);
	$SSEO = str_replace(" ", "+", $SSEO);
	$scriptolution_url = $config['baseurl']."/".$SSEO."/".$SPID."/".$stitle;
	if($SPID > 0)
	{
		if($sshort == "")
		{
			$takenurl =  file_get_contents("http://www.taken.to/scriptolution.php?url=".$scriptolution_url);
			if($takenurl != "")
			{
				$sshort = str_replace("http://www.taken.to/", "", $takenurl);
				if($sshort != "")
				{
					$query = "UPDATE posts SET short='".mysql_real_escape_string($sshort)."' WHERE PID='".mysql_real_escape_string($SPID)."'";
					$conn->execute($query);
					$rme = 	"http://www.taken.to/".$sshort;
				}
				else
				{
					$rme = 	$scriptolution_url;	
				}
			}
			else
			{
				$rme = 	$scriptolution_url;
			}
			
		}
		else
		{
			$rme = 	"http://www.taken.to/".$sshort;
		}
	}
	else
	{
		$rme = 	$scriptolution_url;
	}
	return $rme;
} 
?>