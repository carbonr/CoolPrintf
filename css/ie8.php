<?php
header('Content-type: text/css');
include("../include/config.php");
$imageurl = $config['imageurl'];
?>
.side-nav ul li.active {
	background:url(<?php echo $imageurl; ?>/bg-category-active.png) no-repeat 0 2px;
}
