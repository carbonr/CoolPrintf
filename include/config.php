<?
$config = array();

// Begin Configuration
$config['basedir']     =  '/Applications/MAMP/htdocs/fiverr';
$config['baseurl']     =  'http://localhost/fiverr';

$DBTYPE = 'mysql';
$DBHOST = 'localhost';
$DBUSER = 'root';
$DBPASSWORD = 'root';
$DBNAME = 'fiverr';
// End Configuration

session_start();
date_default_timezone_set('America/New_York');

$config['adminurl']      =  $config['baseurl'].'/administrator';
$config['cssurl']      =  $config['baseurl'].'/css';
$config['imagedir']      =  $config['basedir'].'/images';
$config['imageurl']      =  $config['baseurl'].'/images';
$config['pdir']      =  $config['basedir'].'/pics';
$config['purl']      =  $config['baseurl'].'/pics';
$config['membersprofilepicdir']      =  $config['imagedir'].'/membersprofilepic';
$config['membersprofilepicurl']      =  $config['imageurl'].'/membersprofilepic';

require_once($config['basedir'].'/smarty/libs/Smarty.class.php');
require_once($config['basedir'].'/libraries/mysmarty.class.php');
require_once($config['basedir'].'/libraries/SConfig.php');
require_once($config['basedir'].'/libraries/SError.php');
require_once($config['basedir'].'/libraries/adodb/adodb.inc.php');
require_once($config['basedir'].'/libraries/phpmailer/class.phpmailer.php');
require_once($config['basedir'].'/libraries/SEmail.php');

function strip_mq_gpc($arg)
{
  if (get_magic_quotes_gpc())
  {
  	$arg = str_replace('"',"'",$arg);
  	$arg = stripslashes($arg);
    return $arg;
  } 
  else
  {
    $arg = str_replace('"',"'",$arg);
    return $arg;
  }
}

$conn = &ADONewConnection($DBTYPE);
$conn->PConnect($DBHOST, $DBUSER, $DBPASSWORD, $DBNAME);
@mysql_query("SET NAMES 'UTF8'");
$sql = "SELECT * from config";
$rsc = $conn->Execute($sql);

if($rsc){while(!$rsc->EOF)
{
$field = $rsc->fields['setting'];
$config[$field] = $rsc->fields['value'];
STemplate::assign($field, strip_mq_gpc($config[$field]));
@$rsc->MoveNext();
}}

if ($_REQUEST['language'] != "")
{
	if ($_REQUEST['language'] == "english")
	{
		$_SESSION['language'] = "english";
	}
	elseif ($_REQUEST['language'] == "spanish")
	{
		$_SESSION['language'] = "spanish";
	}
	elseif ($_REQUEST['language'] == "french")
	{
		$_SESSION['language'] = "french";
	}
}

if ($_SESSION['language'] == "")
{
	$_SESSION['language'] = "english";
}

if ($_SESSION['language'] == "english")
{
include("lang/english.php");
}
elseif ($_SESSION['language'] == "spanish")
{
include("lang/spanish.php");
}
elseif ($_SESSION['language'] == "french")
{
include("lang/french.php");
}
else
{
include("lang/english.php");
}

for ($i=0; $i<count($lang); $i++)
{
	STemplate::assign('lang'.$i, $lang[$i]);
}

STemplate::assign('baseurl',       $config['baseurl']);
STemplate::assign('basedir',       $config['basedir']);
STemplate::assign('adminurl',       $config['adminurl']);
STemplate::assign('cssurl',       $config['cssurl']);
STemplate::assign('imagedir',        $config['imagedir']);
STemplate::assign('imageurl',        $config['imageurl']);
STemplate::assign('pdir',        $config['pdir']);
STemplate::assign('purl',        $config['purl']);
STemplate::assign('membersprofilepicdir',        $config['membersprofilepicdir']);
STemplate::assign('membersprofilepicurl',        $config['membersprofilepicurl']);
STemplate::setCompileDir($config['basedir']."/temporary");
STemplate::setTplDir($config['basedir']."/themes");

if($sban != "1")
{
	$bquery = "SELECT count(*) as total from bans_ips WHERE ip='".mysql_real_escape_string($_SERVER['REMOTE_ADDR'])."'";
	$bresult = $conn->execute($bquery);
	$bcount = $bresult->fields['total'];
	if($bcount > "0")
	{
		$brdr = $config['baseurl']."/banned.php";
		header("Location:$brdr");
		exit;
	}
}

function create_slrememberme() {
        $key = md5(uniqid(rand(), true));
        global $conn;
        $sql="update members set remember_me_time='".date('Y-m-d H:i:s')."', remember_me_key='".$key."' WHERE username='".mysql_real_escape_string($_SESSION[USERNAME])."'";
        $conn->execute($sql);
        setcookie('slrememberme', gzcompress(serialize(array($_SESSION[USERNAME], $key)), 9), time()+60*60*24*30);
}

function destroy_slrememberme($username) {
        if (strlen($username) > 0) {
                global $conn;
                $sql="update members set remember_me_time=NULL, remember_me_key=NULL WHERE username='".mysql_real_escape_string($username)."'";
                $conn->execute($sql);
        }
        setcookie ("slrememberme", "", time() - 3600);
}

if (!isset($_SESSION["USERNAME"]) && isset($_COOKIE['slrememberme'])) 
{
        $sql="update members set remember_me_time=NULL and remember_me_key=NULL WHERE remember_me_time<'".date('Y-m-d H:i:s', mktime(0, 0, 0, date("m")-1, date("d"),   date("Y")))."'";
        $conn->execute($sql);
        list($username, $key) = @unserialize(gzuncompress(stripslashes($_COOKIE['slrememberme'])));
        if (strlen($username) > 0 && strlen($key) > 0)
		{
        	$sql="SELECT status,USERID,email,username,verified from members WHERE username='".mysql_real_escape_string($username)."' and remember_me_key='".mysql_real_escape_string($key)."'";
          	$rs=$conn->execute($sql);
          	if($rs->recordcount()<1)
			{
				$error = "Error: Could not locate your account.";
			}
		    elseif($rs->fields['status'] == "0")
			{
				$error = "Error: Your account has been disabled by the administrator.";
			}
    		if($error=="")
			{				
				$_SESSION['USERID']=$rs->fields['USERID'];
				$_SESSION['EMAIL']=$rs->fields['email'];
				$_SESSION['USERNAME']=$rs->fields['username'];
				$_SESSION['VERIFIED']=$rs->fields['verified'];
      			create_slrememberme();
        	}
			else
			{
                destroy_slrememberme($username);
        	}
        }
}

function generateCode($length) 
{
	$chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPRQSTUVWXYZ0123456789";
    $code = "";
    $clen = strlen($chars) - 1;
    while (strlen($code) < $length) {
        $code .= $chars[mt_rand(0,$clen)];
    }
    return $code;
}
if($config['enable_fc'] == "1")
{
	if($_SESSION['USERID'] == "")
	{
		$A = $config['FACEBOOK_APP_ID'];
		$B = $config['FACEBOOK_SECRET'];
		define('FACEBOOK_APP_ID', $A);
		define('FACEBOOK_SECRET', $B);
		STemplate::assign('FACEBOOK_APP_ID',$A);
		STemplate::assign('FACEBOOK_SECRET',$B);
		
		function get_facebook_cookie($app_id, $application_secret) {
		  $args = array();
		  parse_str(trim($_COOKIE['fbs_' . $app_id], '\\"'), $args);
		  ksort($args);
		  $payload = '';
		  foreach ($args as $key => $value) {
			if ($key != 'sig') {
			  $payload .= $key . '=' . $value;
			}
		  }
		  if (md5($payload . $application_secret) != $args['sig']) {
			return null;
		  }
		  return $args;
		}
		
		$cookie = get_facebook_cookie(FACEBOOK_APP_ID, FACEBOOK_SECRET);
		
		$fid = $cookie['uid'];
		
		if(isset($fid))
		{
			$femail = json_decode(file_get_contents('https://graph.facebook.com/me?access_token='.$cookie['access_token']))->email;
			$fname = json_decode(file_get_contents('https://graph.facebook.com/me?access_token='.$cookie['access_token']))->name;
			$fname = htmlentities(strip_tags($fname), ENT_COMPAT, "UTF-8");
			$femail = htmlentities(strip_tags($femail), ENT_COMPAT, "UTF-8");
			
			$query="SELECT USERID FROM members WHERE email='".mysql_real_escape_string($femail)."' limit 1";
			$executequery=$conn->execute($query);
			$FUID = intval($executequery->fields['USERID']);
			if($FUID > 0)
			{									
				$query="SELECT USERID,email,username,verified from members WHERE USERID='".mysql_real_escape_string($FUID)."' and status='1'";
				$result=$conn->execute($query);
				if($result->recordcount()>0)
				{
					$query="update members set lastlogin='".time()."', lip='".$_SERVER['REMOTE_ADDR']."' WHERE USERID='".mysql_real_escape_string($FUID)."'";
					$conn->execute($query);
					$_SESSION['USERID']=$result->fields['USERID'];
					$_SESSION['EMAIL']=$result->fields['email'];
					$_SESSION['USERNAME']=$result->fields['username'];
					$_SESSION['VERIFIED']=$result->fields['verified'];
					$_SESSION['FB']="1";			
					header("Location:$config[baseurl]/");exit;
				}
			}
			else
			{
				$md5pass = md5(generateCode(5).time());
				
				if($fname != "" && $femail != "")
				{
					$query="INSERT INTO members SET email='".mysql_real_escape_string($femail)."',username='".mysql_real_escape_string($fname)."', password='".mysql_real_escape_string($md5pass)."', addtime='".time()."', lastlogin='".time()."', ip='".$_SERVER['REMOTE_ADDR']."', lip='".$_SERVER['REMOTE_ADDR']."', verified='1'";
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
						$_SESSION['USERID']=$SUSERID;
						$_SESSION['EMAIL']=$SEMAIL;
						$_SESSION['USERNAME']=$SUSERNAME;
						$_SESSION['VERIFIED']=$SVERIFIED;
						$_SESSION['FB']="1";				
						header("Location:$config[baseurl]/");exit;
					}
				}
			}
		}
	}
}
?>