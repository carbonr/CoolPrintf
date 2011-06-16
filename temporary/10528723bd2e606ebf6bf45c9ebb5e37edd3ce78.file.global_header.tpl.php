<?php /* Smarty version Smarty-3.0.7, created on 2011-06-15 06:27:37
         compiled from "/Applications/MAMP/htdocs/fiverr/themes/administrator/global_header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:19588749954df8891943d1e5-15607871%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '10528723bd2e606ebf6bf45c9ebb5e37edd3ce78' => 
    array (
      0 => '/Applications/MAMP/htdocs/fiverr/themes/administrator/global_header.tpl',
      1 => 1289768670,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19588749954df8891943d1e5-15607871',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_modifier_date_format')) include '/Applications/MAMP/htdocs/fiverr/smarty/libs/plugins/modifier.date_format.php';
if (!is_callable('smarty_block_php')) include '/Applications/MAMP/htdocs/fiverr/smarty/libs/plugins/block.php.php';
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
    <title>Admin Panel - <?php echo $_smarty_tpl->getVariable('site_name')->value;?>
</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<script type="text/javascript">
        var BLANK_URL = '<?php echo $_smarty_tpl->getVariable('adminurl')->value;?>
/js/blank.html';
        var BLANK_IMG = '<?php echo $_smarty_tpl->getVariable('adminurl')->value;?>
/js/spacer.gif';
        var BASE_URL = '<?php echo $_smarty_tpl->getVariable('adminurl')->value;?>
/index.php';
        var SKIN_URL = '<?php echo $_smarty_tpl->getVariable('adminurl')->value;?>
/js/';
    </script>
    <script src="<?php echo $_smarty_tpl->getVariable('adminurl')->value;?>
/js/prototype.js" type="text/javascript"></script>
    <script src="<?php echo $_smarty_tpl->getVariable('adminurl')->value;?>
/js/events.js" type="text/javascript"></script>
    <script src="<?php echo $_smarty_tpl->getVariable('adminurl')->value;?>
/js/tabs.js" type="text/javascript"></script>
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
    <link type="text/css" rel="stylesheet" href="<?php echo $_smarty_tpl->getVariable('adminurl')->value;?>
/css/below_ie7.css" media="all"></link>
    <![endif]-->
    <!--[if IE 7]>
    <link type="text/css" rel="stylesheet" href="<?php echo $_smarty_tpl->getVariable('adminurl')->value;?>
/css/ie7.php" media="all"></link>
    <![endif]-->
</head>

<body id="html-body">

	<div class="wrapper">
        <div class="header">
        
            <div class="header-top">
    			<a href="<?php echo $_smarty_tpl->getVariable('adminurl')->value;?>
/home.php"><img src="<?php echo $_smarty_tpl->getVariable('adminurl')->value;?>
/images/logo.png" alt="Logo" class="logo"/></a>
    			<div class="header-right">
                    <p class="super">
                        Logged in as <?php echo $_SESSION['ADMINUSERNAME'];?>
<span class="separator">|</span><?php echo smarty_modifier_date_format(time(),"%A, %B %e, %Y");?>
<span class="separator">|</span><a href="logout.php" class="link-logout">Log Out</a>
                    </p>
            	</div>
			</div>
            
        	<div class="clear"></div>

            <div class="nav-bar">
            	<ul id="nav">
                	<li  class="  <?php if ($_smarty_tpl->getVariable('mainmenu')->value==''||$_smarty_tpl->getVariable('mainmenu')->value=="1"){?>active<?php }?>  level0"> <a href="home.php" class="active"><span>Home</span></a></li>
                    <li onmouseover="Element.addClassName(this,'over')" onmouseout="Element.removeClassName(this,'over')" class="<?php if ($_smarty_tpl->getVariable('mainmenu')->value=="2"){?>active<?php }?> parent level0"> <a href="#" onclick="return false" class=""><span>Settings</span></a>
                    	<ul >
                    		<li  class="   level1"> <a href="settings_general.php" class=""><span>General Settings</span></a></li>
                    		<li  class="   level1"> <a href="settings_meta.php"   class=""><span>Meta Settings</span></a></li>
                            <li  class="   level1"> <a href="settings_static.php"   class=""><span>Static Pages</span></a></li>
                            <li  class="   level1"> <a href="settings_payment.php"   class=""><span>Payment Settings</span></a></li>
                            <li  class="   last level1"> <a href="settings_packs.php"   class=""><span>Payment Packs</span></a></li>
                        </ul>
                    </li>
                    <li onmouseover="Element.addClassName(this,'over')" onmouseout="Element.removeClassName(this,'over')" class="<?php if ($_smarty_tpl->getVariable('mainmenu')->value=="3"){?>active<?php }?>   parent level0"> <a href="#"  onclick="return false" class=""><span>Categories</span></a>
                    	<ul >
                            <li  class="   level1"> <a href="cat_manage.php"   class=""><span>Manage Categories</span></a></li>
                            <li  class="   last level1"> <a href="cat_add.php"   class=""><span>Add Category</span></a></li>
                        </ul>
                    </li>
                    <li onmouseover="Element.addClassName(this,'over')" onmouseout="Element.removeClassName(this,'over')" class="<?php if ($_smarty_tpl->getVariable('mainmenu')->value=="4"){?>active<?php }?>   parent level0"> <a href="#"  onclick="return false" class=""><span>Gigs</span></a>
                    	<ul >
                            <li  class="   level1"> <a href="gigs_manage.php"   class=""><span>Manage Gigs</span></a></li>
                            <li  class="   last level1"> <a href="gigs_validate.php"   class=""><span>Validate Gigs</span></a></li>
                        </ul>
                    </li>
                    <li onmouseover="Element.addClassName(this,'over')" onmouseout="Element.removeClassName(this,'over')" class="<?php if ($_smarty_tpl->getVariable('mainmenu')->value=="5"){?>active<?php }?>   parent level0"> <a href="#"  onclick="return false" class=""><span>Orders</span></a>
                    	<ul >
                            <li  class="   last level1"> <a href="orders_manage.php"   class=""><span>Manage Orders</span></a></li>
                        </ul>
                    </li>
                    <li onmouseover="Element.addClassName(this,'over')" onmouseout="Element.removeClassName(this,'over')" class="<?php if ($_smarty_tpl->getVariable('mainmenu')->value=="6"){?>active<?php }?>   parent level0"> <a href="#"  onclick="return false" class=""><span>Payments</span></a>
                    	<ul >
                            <li  class="   level1"> <a href="payments_manage.php"   class=""><span>Manage Payments</span></a></li>
                            <li  class="   last level1"> <a href="payments_clear.php"   class=""><span>Clear Payments</span></a></li>
                        </ul>
                    </li>
                    <li onmouseover="Element.addClassName(this,'over')" onmouseout="Element.removeClassName(this,'over')" class="<?php if ($_smarty_tpl->getVariable('mainmenu')->value=="8"){?>active<?php }?>   parent level0"> <a href="#"  onclick="return false" class=""><span>Withdrawals</span></a>
                    	<ul >
                            <li  class="   last level1"> <a href="wd_validate.php"   class=""><span>Validate Withdrawals</span></a></li>
                        </ul>
                    </li>
                    <li onmouseover="Element.addClassName(this,'over')" onmouseout="Element.removeClassName(this,'over')" class="<?php if ($_smarty_tpl->getVariable('mainmenu')->value=="9"){?>active<?php }?>   parent level0"> <a href="#"  onclick="return false" class=""><span>Wants</span></a>
                    	<ul >
                            <li  class="   level1"> <a href="wants_manage.php"   class=""><span>Manage Wants</span></a></li>
                            <li  class="   last level1"> <a href="wants_validate.php"   class=""><span>Validate Wants</span></a></li>
                        </ul>
                    </li>
                    <li onmouseover="Element.addClassName(this,'over')" onmouseout="Element.removeClassName(this,'over')" class="<?php if ($_smarty_tpl->getVariable('mainmenu')->value=="7"){?>active<?php }?>   parent level0"> <a href="#"  onclick="return false" class=""><span>Members</span></a>
                    	<ul >
                            <li  class="   last level1"> <a href="members_manage.php"   class=""><span>Manage Members</span></a></li>
                        </ul>
                    </li>
                    <li onmouseover="Element.addClassName(this,'over')" onmouseout="Element.removeClassName(this,'over')" class="<?php if ($_smarty_tpl->getVariable('mainmenu')->value=="11"){?>active<?php }?>   parent level0"> <a href="#"  onclick="return false" class=""><span>Advertisements</span></a>
                    	<ul >
                            <li  class="   level1"> <a href="ads_manage.php"   class=""><span>Standard Ads</span></a></li>
                            <li  class="   last level1"> <a href="ads_create.php"   class=""><span>Create Standard Ad</span></a></li>
                        </ul>
                    </li>
					<li onmouseover="Element.addClassName(this,'over')" onmouseout="Element.removeClassName(this,'over')" class="<?php if ($_smarty_tpl->getVariable('mainmenu')->value=="12"){?>active<?php }?>   parent level0"> <a href="#"  onclick="return false" class=""><span>Administrators</span></a>
                    	<ul >
                            <li  class="   level1"> <a href="admins_manage.php"   class=""><span>Manage Administrators</span></a></li>
                            <li  class="   last level1"> <a href="admins_create.php"   class=""><span>Create Administrator</span></a></li>
                        </ul>
                    </li>
                </ul>
			</div>
        </div>
		
        <?php $_smarty_tpl->smarty->_tag_stack[] = array('php', array()); $_block_repeat=true; smarty_block_php(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
global $config; echo @file_get_contents("http://www.scriptolution.com/updates/fiver/index.php?v=".$config['ver']); <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_php(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
