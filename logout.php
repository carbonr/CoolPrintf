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
destroy_slrememberme($_SESSION[USERNAME]);
$_SESSION['USERID']="";
$_SESSION['EMAIL']="";
$_SESSION['USERNAME']="";
$_SESSION['VERIFIED']="";
$_SESSION['FB']="";
header("location: $config[baseurl]/");
?>
