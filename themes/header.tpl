<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xmlns:fb="http://www.facebook.com/2008/fbml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>{if $pagetitle ne ""}{$pagetitle} - {/if}{$site_name}</title>
	<meta name="description" content="{if $pagetitle ne ""}{$pagetitle} - {/if}{if $metadescription ne ""}{$metadescription} - {/if}{$site_name}">
	<meta name="keywords" content="{if $pagetitle ne ""}{$pagetitle},{/if}{if $metakeywords ne ""}{$metakeywords},{/if}{$site_name}">    
    <link href="{$baseurl}/css/style.php" media="screen" rel="stylesheet" type="text/css" />
    <!--[if lte IE 8]><link href="{$baseurl}/css/ie8.php" media="screen" rel="stylesheet" type="text/css" /><![endif]-->
    <!--[if lte IE 7]><link href="{$baseurl}/css/ie7.php" media="screen" rel="stylesheet" type="text/css" /><![endif]-->
    <link href="{$baseurl}/css/uploadify.css" media="screen" rel="stylesheet" type="text/css" />
    <script type="text/javascript">
    var base_url = "{$baseurl}";
	</script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js" type="text/javascript"></script>
	<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.2/jquery-ui.min.js" type="text/javascript"></script>
	<script src="{$baseurl}/js/ie-hover-pack.js" type="text/javascript"></script>
	<script src="{$baseurl}/js/main.js" type="text/javascript"></script>
	<script src="{$baseurl}/js/topmenu.js" type="text/javascript"></script>
	<script src="{$baseurl}/js/jquery.cookie.js" type="text/javascript"></script>
	<script src="{$baseurl}/js/facebook_share.js" type="text/javascript"></script>    
    <script src="{$baseurl}/js/jquery.tools.min.js" type="text/javascript"></script>
    <script src="{$baseurl}/js/jquery.uploadify.v2.1.0.min.js" type="text/javascript"></script>
	<script src="{$baseurl}/js/swfobject.js" type="text/javascript"></script>
	<script src="{$baseurl}/js/jquery.corner.js" type="text/javascript"></script>
    <link rel="icon" href="{$baseurl}/favicon.ico" />
    <link rel="shortcut icon" href="{$baseurl}/favicon.ico" />
    <meta http-equiv="X-UA-Compatible" content="IE=8" />
</head>
<body class="inner">
<div id="loadme"></div>
{if $enable_fc eq "1"}
<div id="fb-root"></div>
{literal}
<script src="http://connect.facebook.net/en_US/all.js"></script>
<script>
  FB.init({appId: '{/literal}{$FACEBOOK_APP_ID}{literal}', status: true,
           cookie: true, xfbml: true});
  FB.Event.subscribe('auth.login', function(response) {
    window.location.reload();
  });	  
</script>
{/literal}
{/if}
    <div id="main-wrapper">
      <div id="wrapper">
        <div class="main-area">
          <div class="main-content">
            <div class="abs">
              <div class="logo-placer">
                <strong class="logo"><a href="{$baseurl}/">{$site_name}</a></strong>
              </div>
            </div>
            <div class="main-content">
              <div id="header">
                    {literal}
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
                    {/literal}
                    
                    {if $smarty.session.USERID ne ""}
                    {literal}
					<script type="text/javascript">
                    function loadContent(elementSelector, sourceURL) {
                    $(""+elementSelector+"").load(""+sourceURL+"");
                    }
                    </script>
                    {/literal}
                    <div class="menu-holder">
                        <div class="holder">
                            <div class="menu-r"></div>
                            <div class="menu-c wide">
                                <p class="welcome">{$lang26} <a href="{$baseurl}/{insert name=get_seo_profile value=a username=$smarty.session.USERNAME|stripslashes}">{$smarty.session.USERNAME|stripslashes}</a> - <a href="javascript:loadContent('#loadme', '{$baseurl}/log_out');">{$lang27}</a></p>
                                <div id="scriptolutiontopmenu" class="topmenu">
                                    <ul>
                                        <li><a href="{$baseurl}/">{$lang0}</a></li>
                                        {insert name=msg_cnt value=var assign=msgc}
                                        <li><a href="{$baseurl}/inbox">{$lang28}{if $msgc GT "0"}<b><span class='unread-count'>{$msgc}</span></b>{/if}</a></li>
                                        <li><a href="{$baseurl}/{insert name=get_seo_profile value=a username=$smarty.session.USERNAME|stripslashes}">{$lang29}</a>
                                            <ul>
                                                <li><a href="{$baseurl}/bookmarks">{$lang30}</a></li>
                                                <li><a href="{$baseurl}/settings">{$lang31}</a></li>
                                            </ul>
                                        </li>
                                        {insert name=gig_cnt value=var assign=tgs}
                                        {if $tgs eq "0"}
                                        <li><a href="{$baseurl}/manage_gigs" class="start-selling-first">{$lang32}</a></li>
                                        {else}
                                        <li><a href="{$baseurl}/manage_gigs">{$lang156}</a>
                                          <ul>
                                          	<li><a href="{$baseurl}/new">{$lang55}</a></li>
                                            <li><a href="{$baseurl}/manage_gigs">{$lang153}</a></li>
                                            <li><a href="{$baseurl}/manage_orders">{$lang154}</a></li>
                                            <li><a href="{$baseurl}/balance?tab=sales">{$lang155}</a></li>
                                          </ul>
                                        </li>
                                        {/if}
                                        <li class="shopping"><a href="{$baseurl}/balance">{$lang158}</a>
                                            <ul>
                                              <li><a href="{$baseurl}/orders">{$lang157}</a></li>
                                              <li><a href="{$baseurl}/balance">{$lang159}</a></li>
                                            </ul>
                                      	</li>                       
                                    </ul>
                                    <br style="clear: left" />
                                </div>
                            </div>			
                            <div class="menu-l"></div>
                        </div>
					</div>              
					{else}
                    <div class="menu-holder">
                        <div class="abs"></div> 
                        <div class="holder">
                            <div class="menu-r" ></div>
                            <div class="menu-c guest">
                                <div id="scriptolutiontopmenu" class="topmenu">
                                    <ul>                    
                                        <li class="top-menu-spacer">&nbsp;</li>
                                        <li><a href="{$baseurl}/">{$lang0}</a></li>
                                        <li><a href="#" id="join" rel="#register-spotlight">{$lang1}</a></li>
                                        <li><a href="#" class="login-link" rel="#register-spotlight">{$lang2}</a></li>
                                    </ul>
                                    <div style=" margin-left:300px; position:absolute; padding-top:6px;">{if $enable_fc eq "1"}{literal}<fb:login-button perms="email,user_birthday"></fb:login-button>{/literal}{/if}</div>
                                    <br class="cl" />
                                </div>
                            </div>
                            <div class="menu-l"></div>
                        </div>
                    </div>
                    {/if}
                    <div class="register-popup apple_overlay" id="register-spotlight" style="display:none;">
                        <div class="entry-wrapper" id="reg-register" style="display:none;">
                            <div class="t"></div>
                            <div id="joinFormHolder" class="c">
                                <div class="close">
                                    <a href="#" class="spotlight-close">{$lang3}</a>
                                </div>
                                <div class="join">
                                    <div class="holder"> 
                                        <form action="{$baseurl}/users" class="new_user" id="join_form" method="post">
										<div id="joinresults"></div>
                                        <div class="row01">
                                            <label>{$lang4}</label>
                                            <input class="text" id="user_email" name="user_email" size="30" type="text" />
                                        </div>
                                        <div class="row01">
                                            <label>{$lang5}</label>
                                            <input class="text username" id="user_username" maxlength="15" name="user_username" size="15" type="text" />
                                            <div id="status" class="username-validation"></div>
                                        </div>
                                        <div class="row01 lastrow" style="margin-bottom:0;">
                                            <label class="style3">{$lang6}</label>
                                            <label class="style1">{$lang7}</label>
                                        </div>
                                        <div class="row01 lastrow">
                                            <input class="text style1" id="user_password" name="user_password" size="30" type="password" value="" />
                                            <div class="captcha">
                                                <span><img src="{$baseurl}/include/captcha.php" style="border: 0px; margin:0px; padding:0px" id="cimg" /></span> <input class="text style2" id="user_captcha_solution" name="user_captcha_solution" size="30" type="text" /> 
                                            </div>
                                            <label class="style2">
                                            <input class="checkbox" id="user_terms_of_use" name="user_terms_of_use" type="checkbox" value="1" /> <a href="{$baseurl}/terms_of_service" target="_blank">{$lang8}</a></label> 
                                            <input type="submit" value="{$lang1}" class="button" style="padding-left:10px;padding-right:10px;padding-top:5px;padding-bottom:5px;" />
                                            <div class="progress-indicator-icon-join">{$lang9}</div>
                                            <input type="hidden" name="jsub" id="jsub" value="1" />
                                        </div>
                                        </form>
                                    </div>
                    			</div>
                                <div class="spacer"></div>
                                <div class="is-member"><strong>{$lang10} <a href="#" id="show-login">{$lang2}</a></strong></div>
                            </div>
                            <div class="b"></div>
                        </div>
                        <div class="entry-wrapper" id="reg-login" style="display:none;">
                            <div class="t"></div>
                            <div id="loginFormHolder" class="c">
                                <div class="close">
                                    <a href="#" class="spotlight-close">{$lang3}</a>
                                </div>
                                <div class="login">
                                    <div >
                                        <div class="loginwrapper">
                                            <form action="{$baseurl}/login" class="new_user_session" id="session_form" method="post">
                                            <div class="row">
                                            	<div id="logresults"></div>
                                            </div>
                                            <div style="margin:0;padding:0;display:inline"></div>
                                            <div class="row">
                                                <label for="l_username">{$lang36}</label>
                                                <label for="l_password">{$lang37}</label>
                                            </div>
                                            <div class="row">
                                                <input class="text" id="l_username" name="l_username" size="30" type="text" />
                                                <input class="text" id="l_password" name="l_password" size="30" type="password" />
                                            </div>
                                            <div class="row">
                                                <div class="pin">
                                                    <div class="abs remember">
                                                        <input class="checkbox" id="l_remember_me" name="l_remember_me" type="checkbox" value="1" />{$lang38}
                                                    </div>
                                                    <div class="abs forget">
                                                        <a href="#" class="forgotpassword">{$lang39}</a>
                                                    </div>
                                                    <input type="submit" value="{$lang40}" class="button" style="padding-left:10px;padding-right:10px;padding-top:5px;padding-bottom:5px;" />                                                    <div class="progress-indicator-icon-login">{$lang41}...</div>
                                					<input type="hidden" name="jlog" id="jlog" value="1" />
                                                </div>
                                            </div>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="forgotpasswordform" style="display:none;">
                                    <form action="{$baseurl}/forgot" id="forgot_password_form" method="post">
                                    	<div class="row">
                                            <div id="fpresults"></div>
                                        </div>
                                        <div class="row">
                                            <label class="longlabel">{$lang44}</label>
                                        </div>
                                        <div class="row">
                                            <input class="textlong" id="email" name="email" type="text" />
                                        </div>
                                        <div class="row">
                                            <a href="#" class="backtologin">{$lang45}</a> 
                                            <input type="submit" value="{$lang46}" class="button" style="padding-left:10px;padding-right:10px;padding-top:5px;padding-bottom:5px;" />
                                            <div class="progress-indicator-icon-login">{$lang47}</div>
                                        </div>
                                        <input type="hidden" name="fpsub" id="fpsub" value="1" />
                                    </form>
                                    </div>
                    			</div>
                                <div class="spacer"></div>
                                <div class="is-member"><strong>{$lang48} <a href="#" id="show-register">{$lang49}</a></strong></div>
                            </div>
                            <div class="b"></div>
                        </div>
                    </div>
				<div class="darkenBackground"></div>
              </div>