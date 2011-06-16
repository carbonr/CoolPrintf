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
$showmax = "25";

$CATID = intval($_REQUEST['c']);
if($CATID > 0)
{
	$addcat = " AND A.category='".mysql_real_escape_string($CATID)."'";
}

$query = "SELECT A.*, B.seo, B.name, C.username from posts A, categories B, members C where A.active='1' $addcat AND A.category=B.CATID AND A.USERID=C.USERID order by A.feat desc, A.PID desc limit $showmax";
$showtitle = $lang['108'];
$link   = $config['baseurl']."/rss"; 

header("Content-Type: text/xml"); 
header("Expires: 0"); 
print "<?xml version=\"1.0\" encoding=\"utf-8\" ?>\n"; 
print "<rss version=\"2.0\" xmlns:media=\"http://search.yahoo.com/mrss\">\n"; 
print "<channel>\n"; 
print "<title>".$showtitle." - ".$config['site_name']."</title>\n"; 
print "<link>$link</link>\n"; 
print "<description>".$showtitle."</description>\n"; 

$db=mysql_connect ($DBHOST,$DBUSER,$DBPASSWORD) or die ('I cannot connect to the database because: ' . mysql_error());
mysql_select_db ($DBNAME); 
@mysql_query("SET NAMES 'UTF8'");
$result = mysql_query($query) or die ('Query Error: ' . mysql_error()); 
while ($results = mysql_fetch_array($result)) 
{ 
  $description = htmlspecialchars($results['gdesc'], ENT_QUOTES);
  $gtitle = htmlspecialchars($results['gtitle'], ENT_QUOTES);
  $seo = htmlspecialchars($results['seo'], ENT_QUOTES);
  $mylink       = $config['baseurl']."/".$seo."/".$results['PID']."/".seo_clean_titles($gtitle); 
  $clink       = $config['baseurl']."/categories/".$seo;
  $getusername = htmlspecialchars($results['username'], ENT_QUOTES);
	print "<item>\n"; 
	print "  <title><![CDATA[".stripslashes($gtitle)."]]></title>\n";
	print "  <link><![CDATA[".$mylink."]]></link>\n"; 
	print "  <description>\n"; 
	print "    <![CDATA["; 
	print stripslashes($description)."<br><br>".$lang['414'].": <a href=\"$config[baseurl]/".get_seo_profile($getusername)."\">$getusername</a>"; 
	print "<br />".$lang['360'].": ";
	$list=explode('-',$results['date_added']);
	print_r($list[2]);print_r('-');
	print_r($list[1]);print_r('-');
	print_r($list[0]);
	$category = $results['name'];
	print "<br>".$lang['66'].": <a href='".$clink."'>$category</a>"; 
	print "<br>".$lang['181'].": $results[viewcount]";	
	print "<br/><br/><br /><hr>"; 
	print "    ]]>\n"; 
	print "  </description>\n"; 
	print "  <author>".$getusername."</author>\n"; 
	print "</item>\n"; 
} 
mysql_close(); 
print "</channel>\n"; 
print "</rss>"; 
?> 