<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
    <title>Admin Panel - {$site_name}</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<script type="text/javascript">
        var BLANK_URL = '{$adminurl}/js/blank.html';
        var BLANK_IMG = '{$adminurl}/js/spacer.gif';
        var BASE_URL = '{$adminurl}/index.php';
        var SKIN_URL = '{$adminurl}/js/';
    </script>
    <script src="{$adminurl}/js/prototype.js" type="text/javascript"></script>
    <script src="{$adminurl}/js/events.js" type="text/javascript"></script>
    <script src="{$adminurl}/js/tabs.js" type="text/javascript"></script>
    <link type="text/css" rel="stylesheet" href="{$adminurl}/css/reset.css" media="all"></link>
    <link type="text/css" rel="stylesheet" href="{$adminurl}/css/boxes.php" media="all"></link>
    <link type="text/css" rel="stylesheet" href="{$adminurl}/css/menu.php" media="screen, projection"></link>
    <!--[if IE]>
    <link type="text/css" rel="stylesheet" href="{$adminurl}/css/iestyles.css" media="all"></link>
    <![endif]-->
    <!--[if lt IE 7]>
    <link type="text/css" rel="stylesheet" href="{$adminurl}/css/below_ie7.css" media="all"></link>
    <![endif]-->
    <!--[if IE 7]>
    <link type="text/css" rel="stylesheet" href="{$adminurl}/css/ie7.php" media="all"></link>
    <![endif]-->
</head>

<body id="html-body">

	<div class="wrapper">
        <div class="header">
        
            <div class="header-top">
    			<a href="{$adminurl}/home.php"><img src="{$adminurl}/images/logo.png" alt="Logo" class="logo"/></a>
    			<div class="header-right">
                    <p class="super">
                        Logged in as {$smarty.session.ADMINUSERNAME}<span class="separator">|</span>{$smarty.now|date_format:"%A, %B %e, %Y"}<span class="separator">|</span><a href="logout.php" class="link-logout">Log Out</a>
                    </p>
            	</div>
			</div>
            
        	<div class="clear"></div>

            <div class="nav-bar">
            	<ul id="nav">
                	<li  class="  {if $mainmenu eq "" OR $mainmenu eq "1"}active{/if}  level0"> <a href="home.php" class="active"><span>Home</span></a></li>
                    <li onmouseover="Element.addClassName(this,'over')" onmouseout="Element.removeClassName(this,'over')" class="{if $mainmenu eq "2"}active{/if} parent level0"> <a href="#" onclick="return false" class=""><span>Settings</span></a>
                    	<ul >
                    		<li  class="   level1"> <a href="settings_general.php" class=""><span>General Settings</span></a></li>
                    		<li  class="   level1"> <a href="settings_meta.php"   class=""><span>Meta Settings</span></a></li>
                            <li  class="   level1"> <a href="settings_static.php"   class=""><span>Static Pages</span></a></li>
                            <li  class="   level1"> <a href="settings_payment.php"   class=""><span>Payment Settings</span></a></li>
                            <li  class="   last level1"> <a href="settings_packs.php"   class=""><span>Payment Packs</span></a></li>
                        </ul>
                    </li>
                    <li onmouseover="Element.addClassName(this,'over')" onmouseout="Element.removeClassName(this,'over')" class="{if $mainmenu eq "3"}active{/if}   parent level0"> <a href="#"  onclick="return false" class=""><span>Categories</span></a>
                    	<ul >
                            <li  class="   level1"> <a href="cat_manage.php"   class=""><span>Manage Categories</span></a></li>
                            <li  class="   last level1"> <a href="cat_add.php"   class=""><span>Add Category</span></a></li>
                        </ul>
                    </li>
                    <li onmouseover="Element.addClassName(this,'over')" onmouseout="Element.removeClassName(this,'over')" class="{if $mainmenu eq "4"}active{/if}   parent level0"> <a href="#"  onclick="return false" class=""><span>Gigs</span></a>
                    	<ul >
                            <li  class="   level1"> <a href="gigs_manage.php"   class=""><span>Manage Gigs</span></a></li>
                            <li  class="   last level1"> <a href="gigs_validate.php"   class=""><span>Validate Gigs</span></a></li>
                        </ul>
                    </li>
                    <li onmouseover="Element.addClassName(this,'over')" onmouseout="Element.removeClassName(this,'over')" class="{if $mainmenu eq "5"}active{/if}   parent level0"> <a href="#"  onclick="return false" class=""><span>Orders</span></a>
                    	<ul >
                            <li  class="   last level1"> <a href="orders_manage.php"   class=""><span>Manage Orders</span></a></li>
                        </ul>
                    </li>
                    <li onmouseover="Element.addClassName(this,'over')" onmouseout="Element.removeClassName(this,'over')" class="{if $mainmenu eq "6"}active{/if}   parent level0"> <a href="#"  onclick="return false" class=""><span>Payments</span></a>
                    	<ul >
                            <li  class="   level1"> <a href="payments_manage.php"   class=""><span>Manage Payments</span></a></li>
                            <li  class="   last level1"> <a href="payments_clear.php"   class=""><span>Clear Payments</span></a></li>
                        </ul>
                    </li>
                    <li onmouseover="Element.addClassName(this,'over')" onmouseout="Element.removeClassName(this,'over')" class="{if $mainmenu eq "8"}active{/if}   parent level0"> <a href="#"  onclick="return false" class=""><span>Withdrawals</span></a>
                    	<ul >
                            <li  class="   last level1"> <a href="wd_validate.php"   class=""><span>Validate Withdrawals</span></a></li>
                        </ul>
                    </li>
                    <li onmouseover="Element.addClassName(this,'over')" onmouseout="Element.removeClassName(this,'over')" class="{if $mainmenu eq "9"}active{/if}   parent level0"> <a href="#"  onclick="return false" class=""><span>Wants</span></a>
                    	<ul >
                            <li  class="   level1"> <a href="wants_manage.php"   class=""><span>Manage Wants</span></a></li>
                            <li  class="   last level1"> <a href="wants_validate.php"   class=""><span>Validate Wants</span></a></li>
                        </ul>
                    </li>
                    <li onmouseover="Element.addClassName(this,'over')" onmouseout="Element.removeClassName(this,'over')" class="{if $mainmenu eq "7"}active{/if}   parent level0"> <a href="#"  onclick="return false" class=""><span>Members</span></a>
                    	<ul >
                            <li  class="   last level1"> <a href="members_manage.php"   class=""><span>Manage Members</span></a></li>
                        </ul>
                    </li>
                    <li onmouseover="Element.addClassName(this,'over')" onmouseout="Element.removeClassName(this,'over')" class="{if $mainmenu eq "11"}active{/if}   parent level0"> <a href="#"  onclick="return false" class=""><span>Advertisements</span></a>
                    	<ul >
                            <li  class="   level1"> <a href="ads_manage.php"   class=""><span>Standard Ads</span></a></li>
                            <li  class="   last level1"> <a href="ads_create.php"   class=""><span>Create Standard Ad</span></a></li>
                        </ul>
                    </li>
					<li onmouseover="Element.addClassName(this,'over')" onmouseout="Element.removeClassName(this,'over')" class="{if $mainmenu eq "12"}active{/if}   parent level0"> <a href="#"  onclick="return false" class=""><span>Administrators</span></a>
                    	<ul >
                            <li  class="   level1"> <a href="admins_manage.php"   class=""><span>Manage Administrators</span></a></li>
                            <li  class="   last level1"> <a href="admins_create.php"   class=""><span>Create Administrator</span></a></li>
                        </ul>
                    </li>
                </ul>
			</div>
        </div>
		
        {php}global $config; echo @file_get_contents("http://www.scriptolution.com/updates/fiver/index.php?v=".$config['ver']); {/php}