<?php /* Smarty version Smarty-3.0.7, created on 2011-06-15 06:27:03
         compiled from "/Applications/MAMP/htdocs/fiverr/themes/header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:17252821794df888f75b6fb6-34164413%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ad655fdf9accbcd74f55a73a65928a1f1b1cee95' => 
    array (
      0 => '/Applications/MAMP/htdocs/fiverr/themes/header.tpl',
      1 => 1297030782,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17252821794df888f75b6fb6-34164413',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xmlns:fb="http://www.facebook.com/2008/fbml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title><?php if ($_smarty_tpl->getVariable('pagetitle')->value!=''){?><?php echo $_smarty_tpl->getVariable('pagetitle')->value;?>
 - <?php }?><?php echo $_smarty_tpl->getVariable('site_name')->value;?>
</title>
	<meta name="description" content="<?php if ($_smarty_tpl->getVariable('pagetitle')->value!=''){?><?php echo $_smarty_tpl->getVariable('pagetitle')->value;?>
 - <?php }?><?php if ($_smarty_tpl->getVariable('metadescription')->value!=''){?><?php echo $_smarty_tpl->getVariable('metadescription')->value;?>
 - <?php }?><?php echo $_smarty_tpl->getVariable('site_name')->value;?>
">
	<meta name="keywords" content="<?php if ($_smarty_tpl->getVariable('pagetitle')->value!=''){?><?php echo $_smarty_tpl->getVariable('pagetitle')->value;?>
,<?php }?><?php if ($_smarty_tpl->getVariable('metakeywords')->value!=''){?><?php echo $_smarty_tpl->getVariable('metakeywords')->value;?>
,<?php }?><?php echo $_smarty_tpl->getVariable('site_name')->value;?>
">    
    <link href="<?php echo $_smarty_tpl->getVariable('baseurl')->value;?>
/css/style.php" media="screen" rel="stylesheet" type="text/css" />
    <!--[if lte IE 8]><link href="<?php echo $_smarty_tpl->getVariable('baseurl')->value;?>
/css/ie8.php" media="screen" rel="stylesheet" type="text/css" /><![endif]-->
    <!--[if lte IE 7]><link href="<?php echo $_smarty_tpl->getVariable('baseurl')->value;?>
/css/ie7.php" media="screen" rel="stylesheet" type="text/css" /><![endif]-->
    <link href="<?php echo $_smarty_tpl->getVariable('baseurl')->value;?>
/css/uploadify.css" media="screen" rel="stylesheet" type="text/css" />
    <script type="text/javascript">
    var base_url = "<?php echo $_smarty_tpl->getVariable('baseurl')->value;?>
";
	</script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js" type="text/javascript"></script>
	<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.2/jquery-ui.min.js" type="text/javascript"></script>
	<script src="<?php echo $_smarty_tpl->getVariable('baseurl')->value;?>
/js/ie-hover-pack.js" type="text/javascript"></script>
	<script src="<?php echo $_smarty_tpl->getVariable('baseurl')->value;?>
/js/main.js" type="text/javascript"></script>
	<script src="<?php echo $_smarty_tpl->getVariable('baseurl')->value;?>
/js/topmenu.js" type="text/javascript"></script>
	<script src="<?php echo $_smarty_tpl->getVariable('baseurl')->value;?>
/js/jquery.cookie.js" type="text/javascript"></script>
	<script src="<?php echo $_smarty_tpl->getVariable('baseurl')->value;?>
/js/facebook_share.js" type="text/javascript"></script>    
    <script src="<?php echo $_smarty_tpl->getVariable('baseurl')->value;?>
/js/jquery.tools.min.js" type="text/javascript"></script>
    <script src="<?php echo $_smarty_tpl->getVariable('baseurl')->value;?>
/js/jquery.uploadify.v2.1.0.min.js" type="text/javascript"></script>
	<script src="<?php echo $_smarty_tpl->getVariable('baseurl')->value;?>
/js/swfobject.js" type="text/javascript"></script>
	<script src="<?php echo $_smarty_tpl->getVariable('baseurl')->value;?>
/js/jquery.corner.js" type="text/javascript"></script>
    <link rel="icon" href="<?php echo $_smarty_tpl->getVariable('baseurl')->value;?>
/favicon.ico" />
    <link rel="shortcut icon" href="<?php echo $_smarty_tpl->getVariable('baseurl')->value;?>
/favicon.ico" />
    <meta http-equiv="X-UA-Compatible" content="IE=8" />
</head>
<body class="inner">
<div id="loadme"></div>
<?php if ($_smarty_tpl->getVariable('enable_fc')->value=="1"){?>
<div id="fb-root"></div>

<script src="http://connect.facebook.net/en_US/all.js"></script>
<script>
  FB.init({appId: '<?php echo $_smarty_tpl->getVariable('FACEBOOK_APP_ID')->value;?>
', status: true,
           cookie: true, xfbml: true});
  FB.Event.subscribe('auth.login', function(response) {
    window.location.reload();
  });	  
</script>

<?php }?>
    <div id="main-wrapper">
      <div id="wrapper">
        <div class="main-area">
          <div class="main-content">
            <div class="abs">
              <div class="logo-placer">
                <strong class="logo"><a href="<?php echo $_smarty_tpl->getVariable('baseurl')->value;?>
/"><?php echo $_smarty_tpl->getVariable('site_name')->value;?>
</a></strong>
              </div>
            </div>
            <div class="main-content">
              <div id="header">
                    
                    <script type="text/javascript">
                    $(document).ready(function() {	
                        var overlayObject = $("a[rel]").overlay({ 
                            top: 50,
                            expose: {
                                    color: '#232323',
                                    closeOnClick: true
                                    },
                                    
                                    onClose:function() {   
                                                        $('#reg-login').hide();
                                                        $('#reg-register').hide();
                                                        },
                            effect:'apple'
                        });	
                    
                        $('#show-register').click(function() {
                            $('#reg-login').hide('slow');
                            $('#reg-register').show('fast');
                            return false;
                        });
                    
                    
                        $('#show-login').click(function() {
                            $('#reg-register').hide('slow');
                            $('#reg-login').show('fast');
                            return false;
                        });
                        
                        
                        $('#join').click(function() {
                            $('#reg-register').show();
                            $('#reg-login').hide();
                            return true;
                        });
                    
                        $('#login').click(function() {
                            $('#reg-login').show();
                            $('#reg-register').hide();
                            return true;
                        });
                    
                        $('.login-link').click(function() {
                            $('#reg-login').show();
                            $('#reg-register').hide();
                            return true;
                        });
                        
                    });	
                    </script>
                    
                    
                    <?php if ($_SESSION['USERID']!=''){?>
                    
					<script type="text/javascript">
                    function loadContent(elementSelector, sourceURL) {
                    $(""+elementSelector+"").load(""+sourceURL+"");
                    }
                    </script>
                    
                    <div class="menu-holder">
                        <div class="holder">
                            <div class="menu-r"></div>
                            <div class="menu-c wide">
                                <p class="welcome"><?php echo $_smarty_tpl->getVariable('lang26')->value;?>
 <a href="<?php echo $_smarty_tpl->getVariable('baseurl')->value;?>
/<?php echo insert_get_seo_profile(array('value' => 'a', 'username' => stripslashes($_SESSION['USERNAME'])),$_smarty_tpl);?>
"><?php echo stripslashes($_SESSION['USERNAME']);?>
</a> - <a href="javascript:loadContent('#loadme', '<?php echo $_smarty_tpl->getVariable('baseurl')->value;?>
/log_out');"><?php echo $_smarty_tpl->getVariable('lang27')->value;?>
</a></p>
                                <div id="scriptolutiontopmenu" class="topmenu">
                                    <ul>
                                        <li><a href="<?php echo $_smarty_tpl->getVariable('baseurl')->value;?>
/"><?php echo $_smarty_tpl->getVariable('lang0')->value;?>
</a></li>
                                        <?php $_smarty_tpl->assign('msgc' , insert_msg_cnt (array('value' => 'var'),$_smarty_tpl), true);?>
                                        <li><a href="<?php echo $_smarty_tpl->getVariable('baseurl')->value;?>
/inbox"><?php echo $_smarty_tpl->getVariable('lang28')->value;?>
<?php if ($_smarty_tpl->getVariable('msgc')->value>"0"){?><b><span class='unread-count'><?php echo $_smarty_tpl->getVariable('msgc')->value;?>
</span></b><?php }?></a></li>
                                        <li><a href="<?php echo $_smarty_tpl->getVariable('baseurl')->value;?>
/<?php echo insert_get_seo_profile(array('value' => 'a', 'username' => stripslashes($_SESSION['USERNAME'])),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->getVariable('lang29')->value;?>
</a>
                                            <ul>
                                                <li><a href="<?php echo $_smarty_tpl->getVariable('baseurl')->value;?>
/bookmarks"><?php echo $_smarty_tpl->getVariable('lang30')->value;?>
</a></li>
                                                <li><a href="<?php echo $_smarty_tpl->getVariable('baseurl')->value;?>
/settings"><?php echo $_smarty_tpl->getVariable('lang31')->value;?>
</a></li>
                                            </ul>
                                        </li>
                                        <?php $_smarty_tpl->assign('tgs' , insert_gig_cnt (array('value' => 'var'),$_smarty_tpl), true);?>
                                        <?php if ($_smarty_tpl->getVariable('tgs')->value=="0"){?>
                                        <li><a href="<?php echo $_smarty_tpl->getVariable('baseurl')->value;?>
/manage_gigs" class="start-selling-first"><?php echo $_smarty_tpl->getVariable('lang32')->value;?>
</a></li>
                                        <?php }else{ ?>
                                        <li><a href="<?php echo $_smarty_tpl->getVariable('baseurl')->value;?>
/manage_gigs"><?php echo $_smarty_tpl->getVariable('lang156')->value;?>
</a>
                                          <ul>
                                          	<li><a href="<?php echo $_smarty_tpl->getVariable('baseurl')->value;?>
/new"><?php echo $_smarty_tpl->getVariable('lang55')->value;?>
</a></li>
                                            <li><a href="<?php echo $_smarty_tpl->getVariable('baseurl')->value;?>
/manage_gigs"><?php echo $_smarty_tpl->getVariable('lang153')->value;?>
</a></li>
                                            <li><a href="<?php echo $_smarty_tpl->getVariable('baseurl')->value;?>
/manage_orders"><?php echo $_smarty_tpl->getVariable('lang154')->value;?>
</a></li>
                                            <li><a href="<?php echo $_smarty_tpl->getVariable('baseurl')->value;?>
/balance?tab=sales"><?php echo $_smarty_tpl->getVariable('lang155')->value;?>
</a></li>
                                          </ul>
                                        </li>
                                        <?php }?>
                                        <li class="shopping"><a href="<?php echo $_smarty_tpl->getVariable('baseurl')->value;?>
/balance"><?php echo $_smarty_tpl->getVariable('lang158')->value;?>
</a>
                                            <ul>
                                              <li><a href="<?php echo $_smarty_tpl->getVariable('baseurl')->value;?>
/orders"><?php echo $_smarty_tpl->getVariable('lang157')->value;?>
</a></li>
                                              <li><a href="<?php echo $_smarty_tpl->getVariable('baseurl')->value;?>
/balance"><?php echo $_smarty_tpl->getVariable('lang159')->value;?>
</a></li>
                                            </ul>
                                      	</li>                       
                                    </ul>
                                    <br style="clear: left" />
                                </div>
                            </div>			
                            <div class="menu-l"></div>
                        </div>
					</div>              
					<?php }else{ ?>
                    <div class="menu-holder">
                        <div class="abs"></div> 
                        <div class="holder">
                            <div class="menu-r" ></div>
                            <div class="menu-c guest">
                                <div id="scriptolutiontopmenu" class="topmenu">
                                    <ul>                    
                                        <li class="top-menu-spacer">&nbsp;</li>
                                        <li><a href="<?php echo $_smarty_tpl->getVariable('baseurl')->value;?>
/"><?php echo $_smarty_tpl->getVariable('lang0')->value;?>
</a></li>
                                        <li><a href="#" id="join" rel="#register-spotlight"><?php echo $_smarty_tpl->getVariable('lang1')->value;?>
</a></li>
                                        <li><a href="#" class="login-link" rel="#register-spotlight"><?php echo $_smarty_tpl->getVariable('lang2')->value;?>
</a></li>
                                    </ul>
                                    <div style=" margin-left:300px; position:absolute; padding-top:6px;"><?php if ($_smarty_tpl->getVariable('enable_fc')->value=="1"){?><fb:login-button perms="email,user_birthday"></fb:login-button><?php }?></div>
                                    <br class="cl" />
                                </div>
                            </div>
                            <div class="menu-l"></div>
                        </div>
                    </div>
                    <?php }?>
                    <div class="register-popup apple_overlay" id="register-spotlight" style="display:none;">
                        <div class="entry-wrapper" id="reg-register" style="display:none;">
                            <div class="t"></div>
                            <div id="joinFormHolder" class="c">
                                <div class="close">
                                    <a href="#" class="spotlight-close"><?php echo $_smarty_tpl->getVariable('lang3')->value;?>
</a>
                                </div>
                                <div class="join">
                                    <div class="holder"> 
                                        <form action="<?php echo $_smarty_tpl->getVariable('baseurl')->value;?>
/users" class="new_user" id="join_form" method="post">
										<div id="joinresults"></div>
                                        <div class="row01">
                                            <label><?php echo $_smarty_tpl->getVariable('lang4')->value;?>
</label>
                                            <input class="text" id="user_email" name="user_email" size="30" type="text" />
                                        </div>
                                        <div class="row01">
                                            <label><?php echo $_smarty_tpl->getVariable('lang5')->value;?>
</label>
                                            <input class="text username" id="user_username" maxlength="15" name="user_username" size="15" type="text" />
                                            <div id="status" class="username-validation"></div>
                                        </div>
                                        <div class="row01 lastrow" style="margin-bottom:0;">
                                            <label class="style3"><?php echo $_smarty_tpl->getVariable('lang6')->value;?>
</label>
                                            <label class="style1"><?php echo $_smarty_tpl->getVariable('lang7')->value;?>
</label>
                                        </div>
                                        <div class="row01 lastrow">
                                            <input class="text style1" id="user_password" name="user_password" size="30" type="password" value="" />
                                            <div class="captcha">
                                                <span><img src="<?php echo $_smarty_tpl->getVariable('baseurl')->value;?>
/include/captcha.php" style="border: 0px; margin:0px; padding:0px" id="cimg" /></span> <input class="text style2" id="user_captcha_solution" name="user_captcha_solution" size="30" type="text" /> 
                                            </div>
                                            <label class="style2">
                                            <input class="checkbox" id="user_terms_of_use" name="user_terms_of_use" type="checkbox" value="1" /> <a href="<?php echo $_smarty_tpl->getVariable('baseurl')->value;?>
/terms_of_service" target="_blank"><?php echo $_smarty_tpl->getVariable('lang8')->value;?>
</a></label> 
                                            <input type="submit" value="<?php echo $_smarty_tpl->getVariable('lang1')->value;?>
" class="button" style="padding-left:10px;padding-right:10px;padding-top:5px;padding-bottom:5px;" />
                                            <div class="progress-indicator-icon-join"><?php echo $_smarty_tpl->getVariable('lang9')->value;?>
</div>
                                            <input type="hidden" name="jsub" id="jsub" value="1" />
                                        </div>
                                        </form>
                                    </div>
                    			</div>
                                <div class="spacer"></div>
                                <div class="is-member"><strong><?php echo $_smarty_tpl->getVariable('lang10')->value;?>
 <a href="#" id="show-login"><?php echo $_smarty_tpl->getVariable('lang2')->value;?>
</a></strong></div>
                            </div>
                            <div class="b"></div>
                        </div>
                        <div class="entry-wrapper" id="reg-login" style="display:none;">
                            <div class="t"></div>
                            <div id="loginFormHolder" class="c">
                                <div class="close">
                                    <a href="#" class="spotlight-close"><?php echo $_smarty_tpl->getVariable('lang3')->value;?>
</a>
                                </div>
                                <div class="login">
                                    <div >
                                        <div class="loginwrapper">
                                            <form action="<?php echo $_smarty_tpl->getVariable('baseurl')->value;?>
/login" class="new_user_session" id="session_form" method="post">
                                            <div class="row">
                                            	<div id="logresults"></div>
                                            </div>
                                            <div style="margin:0;padding:0;display:inline"></div>
                                            <div class="row">
                                                <label for="l_username"><?php echo $_smarty_tpl->getVariable('lang36')->value;?>
</label>
                                                <label for="l_password"><?php echo $_smarty_tpl->getVariable('lang37')->value;?>
</label>
                                            </div>
                                            <div class="row">
                                                <input class="text" id="l_username" name="l_username" size="30" type="text" />
                                                <input class="text" id="l_password" name="l_password" size="30" type="password" />
                                            </div>
                                            <div class="row">
                                                <div class="pin">
                                                    <div class="abs remember">
                                                        <input class="checkbox" id="l_remember_me" name="l_remember_me" type="checkbox" value="1" /><?php echo $_smarty_tpl->getVariable('lang38')->value;?>

                                                    </div>
                                                    <div class="abs forget">
                                                        <a href="#" class="forgotpassword"><?php echo $_smarty_tpl->getVariable('lang39')->value;?>
</a>
                                                    </div>
                                                    <input type="submit" value="<?php echo $_smarty_tpl->getVariable('lang40')->value;?>
" class="button" style="padding-left:10px;padding-right:10px;padding-top:5px;padding-bottom:5px;" />                                                    <div class="progress-indicator-icon-login"><?php echo $_smarty_tpl->getVariable('lang41')->value;?>
...</div>
                                					<input type="hidden" name="jlog" id="jlog" value="1" />
                                                </div>
                                            </div>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="forgotpasswordform" style="display:none;">
                                    <form action="<?php echo $_smarty_tpl->getVariable('baseurl')->value;?>
/forgot" id="forgot_password_form" method="post">
                                    	<div class="row">
                                            <div id="fpresults"></div>
                                        </div>
                                        <div class="row">
                                            <label class="longlabel"><?php echo $_smarty_tpl->getVariable('lang44')->value;?>
</label>
                                        </div>
                                        <div class="row">
                                            <input class="textlong" id="email" name="email" type="text" />
                                        </div>
                                        <div class="row">
                                            <a href="#" class="backtologin"><?php echo $_smarty_tpl->getVariable('lang45')->value;?>
</a> 
                                            <input type="submit" value="<?php echo $_smarty_tpl->getVariable('lang46')->value;?>
" class="button" style="padding-left:10px;padding-right:10px;padding-top:5px;padding-bottom:5px;" />
                                            <div class="progress-indicator-icon-login"><?php echo $_smarty_tpl->getVariable('lang47')->value;?>
</div>
                                        </div>
                                        <input type="hidden" name="fpsub" id="fpsub" value="1" />
                                    </form>
                                    </div>
                    			</div>
                                <div class="spacer"></div>
                                <div class="is-member"><strong><?php echo $_smarty_tpl->getVariable('lang48')->value;?>
 <a href="#" id="show-register"><?php echo $_smarty_tpl->getVariable('lang49')->value;?>
</a></strong></div>
                            </div>
                            <div class="b"></div>
                        </div>
                    </div>
				<div class="darkenBackground"></div>
              </div>