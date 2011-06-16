<?php /* Smarty version Smarty-3.0.7, created on 2011-06-16 00:42:05
         compiled from "/Applications/MAMP/htdocs/fiverr/themes/log_out.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2179814404df9899d20df67-90475707%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '815c7afa25c76e87be785d78440fe015d407de62' => 
    array (
      0 => '/Applications/MAMP/htdocs/fiverr/themes/log_out.tpl',
      1 => 1278718828,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2179814404df9899d20df67-90475707',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xmlns:fb="http://www.facebook.com/2008/fbml"> 
<head>
</head>

<body>

<div id="fb-root"></div>
<?php if ($_smarty_tpl->getVariable('enable_fc')->value=="1"&&$_SESSION['FB']=="1"){?>

<script src="http://connect.facebook.net/en_US/all.js"></script>
<script>
  FB.init({appId: '<?php echo $_smarty_tpl->getVariable('FACEBOOK_APP_ID')->value;?>
', status: true,
           cookie: true, xfbml: true});	 
  FB.logout(function(response) {
	window.location = "<?php echo $_smarty_tpl->getVariable('baseurl')->value;?>
/logout"
  });
  
</script>

<?php }else{ ?>

<script>
	window.location = "<?php echo $_smarty_tpl->getVariable('baseurl')->value;?>
/logout"  
</script>

<?php }?>

</body>
</html>