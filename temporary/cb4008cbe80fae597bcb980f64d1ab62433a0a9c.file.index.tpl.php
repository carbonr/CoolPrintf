<?php /* Smarty version Smarty-3.0.7, created on 2011-06-15 06:27:25
         compiled from "/Applications/MAMP/htdocs/fiverr/themes/administrator/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:21284608854df8890dce6c55-72679614%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cb4008cbe80fae597bcb980f64d1ab62433a0a9c' => 
    array (
      0 => '/Applications/MAMP/htdocs/fiverr/themes/administrator/index.tpl',
      1 => 1294957536,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '21284608854df8890dce6c55-72679614',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html lang="en">
<head>
    <title><?php echo $_smarty_tpl->getVariable('site_name')->value;?>
 Admin Panel</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" ></meta>
    <link type="text/css" rel="stylesheet" href="<?php echo $_smarty_tpl->getVariable('adminurl')->value;?>
/css/reset.css" media="all"></link>
    <link type="text/css" rel="stylesheet" href="<?php echo $_smarty_tpl->getVariable('adminurl')->value;?>
/css/boxes.php" media="all"></link>
    <link type="text/css" rel="stylesheet" href="<?php echo $_smarty_tpl->getVariable('adminurl')->value;?>
/css/menu.php" media="screen, projection"></link>
    <!--[if IE]>
    <link type="text/css" rel="stylesheet" href="<?php echo $_smarty_tpl->getVariable('adminurl')->value;?>
/css/iestyles.css" media="all"></link>
    <![endif]-->
    <!--[if lt IE 7]>
    <script src="<?php echo $_smarty_tpl->getVariable('adminurl')->value;?>
/js/iehover-fix.js" type="text/javascript"></script>
    <link type="text/css" rel="stylesheet" href="<?php echo $_smarty_tpl->getVariable('adminurl')->value;?>
/css/below_ie7.css" media="all"></link>
    <![endif]-->
    <!--[if IE 7]>
    <link type="text/css" rel="stylesheet" href="<?php echo $_smarty_tpl->getVariable('adminurl')->value;?>
/css/ie7.php" media="all"></link>
    <![endif]-->
</head>
<body id="page-login" onload="document.forms.loginForm.username.focus();">
    <div class="login-container">
        <div class="login-box">
            <form method="post" action="" id="loginForm">

                <fieldset class="login-form">
                    <h2>Log in to Admin Panel</h2>
                    <div id="messages">
                    	<?php if ($_smarty_tpl->getVariable('error')->value!=''){?>
                        <ul class="messages"><li class="error-msg"><ul><li><?php echo $_smarty_tpl->getVariable('error')->value;?>
</li></ul></li></ul> 
                        <?php }?>                   
                    </div>
                    <div class="input-box input-left"><label for="username">User Name:</label><br/>
                        <input type="text" id="username" name="username" value="" class="required-entry input-text"/></div>
                    <div class="input-box input-right"><label for="login">Password:</label><br/>

                        <input type="password" id="password" name="password" class="required-entry input-text" value="" /></div>
                    <div class="clear"></div>
                    <div class="form-buttons" style="margin-right:8px;">
                        <a class="left" href="<?php echo $_smarty_tpl->getVariable('baseurl')->value;?>
">[ Back To Fiverr Script ]</a>
                        <input onclick="loginForm.submit()" type="submit" name="login" id="login" class="form-button" src="<?php echo $_smarty_tpl->getVariable('adminurl')->value;?>
/images/btn_login.gif" value="Login"/></div>
                </fieldset>
                <p class="legal">Copyright &copy; 2011 FiverrScript.com.</p>
				<input type="hidden" name="login" value="Login" />
            </form>
            <div class="bottom"></div>
        </div>
    </div>
</body>
</html>