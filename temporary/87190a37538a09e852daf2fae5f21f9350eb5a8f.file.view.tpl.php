<?php /* Smarty version Smarty-3.0.7, created on 2011-06-15 15:46:01
         compiled from "/Applications/MAMP/htdocs/fiverr/themes/view.tpl" */ ?>
<?php /*%%SmartyHeaderCode:8688430944df90bf93b3355-64619359%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '87190a37538a09e852daf2fae5f21f9350eb5a8f' => 
    array (
      0 => '/Applications/MAMP/htdocs/fiverr/themes/view.tpl',
      1 => 1297036832,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8688430944df90bf93b3355-64619359',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_modifier_replace')) include '/Applications/MAMP/htdocs/fiverr/smarty/libs/plugins/modifier.replace.php';
?>            <?php $_smarty_tpl->assign('title' , insert_seo_clean_titles (array('value' => 'a', 'title' => $_smarty_tpl->getVariable('p')->value['gtitle']),$_smarty_tpl), true);?>
            <div class="main-wrapper">
                <div id="main">
                    <div class="content">  
                  	                  
                    <script type="text/javascript">
					$(document).ready(function(){
					  $("#photo1").click(function(){
						var img = new Image();
						$(img).load(function () {
							$('#big-image').hide();
							$('#big-image').attr('src', '<?php echo $_smarty_tpl->getVariable('purl')->value;?>
/t/<?php echo $_smarty_tpl->getVariable('p')->value['p1'];?>
?<?php echo time();?>
');	
							$('#big-image').fadeIn();
						}).error(function() {
						}).attr('src', '<?php echo $_smarty_tpl->getVariable('purl')->value;?>
/t/<?php echo $_smarty_tpl->getVariable('p')->value['p1'];?>
?<?php echo time();?>
');
					  });
					  
					  <?php if ($_smarty_tpl->getVariable('p')->value['p2']!=''){?>
					  
					  $("#photo2").click(function(){
						var img = new Image();
						$(img).load(function () {
							$('#big-image').hide();
							$('#big-image').attr('src', '<?php echo $_smarty_tpl->getVariable('purl')->value;?>
/t/<?php echo $_smarty_tpl->getVariable('p')->value['p2'];?>
?<?php echo time();?>
');	
							$('#big-image').fadeIn();
						}).error(function() {
						}).attr('src', '<?php echo $_smarty_tpl->getVariable('purl')->value;?>
/t/<?php echo $_smarty_tpl->getVariable('p')->value['p2'];?>
?<?php echo time();?>
');
					  });
					  
					  <?php }?>
					  <?php if ($_smarty_tpl->getVariable('p')->value['p2']!=''){?>
					  
					  $("#photo3").click(function(){
						var img = new Image();
						$(img).load(function () {
							$('#big-image').hide();
							$('#big-image').attr('src', '<?php echo $_smarty_tpl->getVariable('purl')->value;?>
/t/<?php echo $_smarty_tpl->getVariable('p')->value['p3'];?>
?<?php echo time();?>
');	
							$('#big-image').fadeIn();
						}).error(function() {
						}).attr('src', '<?php echo $_smarty_tpl->getVariable('purl')->value;?>
/t/<?php echo $_smarty_tpl->getVariable('p')->value['p3'];?>
?<?php echo time();?>
');
					  });
					  
					  <?php }?>
					  
					});
					$(document).ready( function() {
					 $('.gig-desc').linkify();
						$(".gig-desc a").each(function() {
							$(this).attr("target", "_blank");
						});
					});
					</script>
                    					
                    <div class="section">
                        <div class="c">
                            <div class="article">
                                <div class="article-promo">
                                    <div class="article-txt">
                                        <div class="seller">
                                            <div class="holder">
                                                <div class="gig-header">						  
                                                    <div class="usr-img">
                                                    	<?php $_smarty_tpl->assign('profilepicture' , insert_get_member_profilepicture (array('value' => 'var', 'USERID' => $_smarty_tpl->getVariable('p')->value['USERID']),$_smarty_tpl), true);?>
                                                        <div class="up-userimage"><img alt="<?php echo stripslashes($_smarty_tpl->getVariable('p')->value['username']);?>
" src="<?php echo $_smarty_tpl->getVariable('membersprofilepicurl')->value;?>
/thumbs/<?php echo $_smarty_tpl->getVariable('profilepicture')->value;?>
?<?php echo time();?>
" /></div>
                                                    </div>
                                                    <div class="gig-title-g">
                                                        <h1><a href="<?php echo $_smarty_tpl->getVariable('baseurl')->value;?>
/<?php echo insert_get_seo_profile(array('value' => 'a', 'username' => stripslashes($_smarty_tpl->getVariable('p')->value['username'])),$_smarty_tpl);?>
"><?php echo stripslashes($_smarty_tpl->getVariable('p')->value['username']);?>
</a>: <?php echo $_smarty_tpl->getVariable('lang62')->value;?>
 <?php echo stripslashes($_smarty_tpl->getVariable('p')->value['gtitle']);?>
 <?php echo $_smarty_tpl->getVariable('lang63')->value;?>
<?php echo stripslashes($_smarty_tpl->getVariable('p')->value['price']);?>
</h1>
                                                        <p><?php echo $_smarty_tpl->getVariable('lang119')->value;?>
: <b><a href="<?php echo $_smarty_tpl->getVariable('baseurl')->value;?>
/categories/<?php echo stripslashes($_smarty_tpl->getVariable('p')->value['seo']);?>
"><?php echo stripslashes($_smarty_tpl->getVariable('p')->value['name']);?>
</a></b> &bull; <?php echo $_smarty_tpl->getVariable('lang130')->value;?>
 <strong>~<?php echo Stripslashes($_smarty_tpl->getVariable('p')->value['days']);?>
 <?php if ($_smarty_tpl->getVariable('p')->value['days']=="1"){?><?php echo $_smarty_tpl->getVariable('lang132')->value;?>
<?php }else{ ?><?php echo $_smarty_tpl->getVariable('lang131')->value;?>
<?php }?></strong></p>
                                                        <ul class="gig-meta">
                                                            <li class="positive">
                                                            	<?php if (count($_smarty_tpl->getVariable('f')->value)=="0"){?>
                                                                <em><?php echo $_smarty_tpl->getVariable('lang138')->value;?>
</em>
                                                                <?php }else{ ?>
                                                                <?php $_smarty_tpl->assign('percent' , insert_get_rating (array('value' => 'a', 'b' => $_smarty_tpl->getVariable('brat')->value, 'g' => $_smarty_tpl->getVariable('grat')->value),$_smarty_tpl), true);?>
                                                                <span>positive</span><em><?php echo $_smarty_tpl->getVariable('percent')->value;?>
&#37; <?php echo $_smarty_tpl->getVariable('lang139')->value;?>
</em>
                                                                <?php }?>
                                                            </li>	
                                                            <?php if ($_SESSION['USERID']>"0"){?>
                                                            <?php $_smarty_tpl->assign('liked' , insert_like_cnt (array('value' => 'var', 'pid' => $_smarty_tpl->getVariable('p')->value['PID']),$_smarty_tpl), true);?>
                                                            <li id="removebookmark" class="like active" <?php if ($_smarty_tpl->getVariable('liked')->value!="1"){?>style="display:none"<?php }?>><a href="<?php echo $_smarty_tpl->getVariable('baseurl')->value;?>
/bookmark?id=<?php echo stripslashes($_smarty_tpl->getVariable('p')->value['PID']);?>
&do=rem" class="removebookmark"><?php echo $_smarty_tpl->getVariable('lang148')->value;?>
</a></li>
                                                            <li id="addbookmark" class="like" <?php if ($_smarty_tpl->getVariable('liked')->value=="1"){?>style="display:none"<?php }?>><a href="<?php echo $_smarty_tpl->getVariable('baseurl')->value;?>
/bookmark?id=<?php echo stripslashes($_smarty_tpl->getVariable('p')->value['PID']);?>
&do=add" class="addbookmark"><?php echo $_smarty_tpl->getVariable('lang147')->value;?>
</a></li>
                                                            <?php }?>
                                                        </ul>
                                                    </div>
                                                    <div class="orderNow">   
                                                    	<?php if ($_SESSION['USERID']==$_smarty_tpl->getVariable('p')->value['USERID']){?>   
                                                        <a href="<?php echo $_smarty_tpl->getVariable('baseurl')->value;?>
/edit?id=<?php echo $_smarty_tpl->getVariable('p')->value['PID'];?>
" class="order-now-g" style="padding-left:10px;padding-right:10px;padding-top:5px;padding-bottom:5px; background-color:#666; color:#FFF;"><?php echo $_smarty_tpl->getVariable('lang141')->value;?>
</a>
                                                        <?php }elseif($_SESSION['USERID']>"0"){?>
                                                        <a href="<?php echo $_smarty_tpl->getVariable('baseurl')->value;?>
/order?id=<?php echo $_smarty_tpl->getVariable('p')->value['PID'];?>
" class="order-now-g" style="padding-left:10px;padding-right:10px;padding-top:5px;padding-bottom:5px; background-color:#666; color:#FFF;"><?php echo $_smarty_tpl->getVariable('lang140')->value;?>
</a>
                                                        <?php }else{ ?>
                                                        <a href="#" class="login-link order-now-g" rel="#register-spotlight" style="padding-left:10px;padding-right:10px;padding-top:5px;padding-bottom:5px; background-color:#666; color:#FFF;"><?php echo $_smarty_tpl->getVariable('lang140')->value;?>
</a>
                                                        <?php }?>
                                                    </div>												
                                                </div>
									  			<br clear="all"/>
												<div class="gig-desc">
													<?php echo stripslashes($_smarty_tpl->getVariable('p')->value['gdesc']);?>

                                                    
													<script type="text/javascript">
													$(document).ready( function() {
														$('a#fbsharer').click(function (){ 
															url = encodeURIComponent('<?php echo $_smarty_tpl->getVariable('baseurl')->value;?>
/<?php echo stripslashes($_smarty_tpl->getVariable('p')->value['seo']);?>
/<?php echo stripslashes($_smarty_tpl->getVariable('p')->value['PID']);?>
/<?php echo smarty_modifier_replace($_smarty_tpl->getVariable('title')->value,"'",'');?>
?viewmode=1');
															title = encodeURIComponent('<?php echo stripslashes($_smarty_tpl->getVariable('p')->value['username']);?>
: <?php echo $_smarty_tpl->getVariable('lang62')->value;?>
 <?php echo smarty_modifier_replace(stripslashes($_smarty_tpl->getVariable('p')->value['gtitle']),"'",'');?>
 <?php echo $_smarty_tpl->getVariable('lang63')->value;?>
<?php echo stripslashes($_smarty_tpl->getVariable('p')->value['price']);?>
.');
															fbshare_url = 'http://www.facebook.com/sharer.php?u=' + url + '&t=' + title;
															openCenteredWindow(fbshare_url);
															return false;
														});
													});
													</script>
                                                    
                                                    <ul class="share-control">
                                                        <li>
                                                            <?php echo $_smarty_tpl->getVariable('lang135')->value;?>
:
                                                        </li>
                                                        <li>
                                                            <a id="fbsharer" href='#'><img alt="Btn-facebook" src="<?php echo $_smarty_tpl->getVariable('imageurl')->value;?>
/btn-facebook.png" />&nbsp; facebook</a>
                                                        </li>
                                                        <li>
                                                            <a href="mailto:?subject=<?php echo $_smarty_tpl->getVariable('lang62')->value;?>
 <?php echo stripslashes($_smarty_tpl->getVariable('p')->value['gtitle']);?>
 <?php echo $_smarty_tpl->getVariable('lang63')->value;?>
<?php echo stripslashes($_smarty_tpl->getVariable('p')->value['price']);?>
&amp;body=<?php echo $_smarty_tpl->getVariable('baseurl')->value;?>
/<?php echo stripslashes($_smarty_tpl->getVariable('p')->value['seo']);?>
/<?php echo stripslashes($_smarty_tpl->getVariable('p')->value['PID']);?>
/<?php echo $_smarty_tpl->getVariable('title')->value;?>
" target="_blank"><img alt="Btn-email" src="/images/btn-email.png?1283617092" /></a>&nbsp;
                                                            <a href="mailto:?subject=<?php echo $_smarty_tpl->getVariable('lang62')->value;?>
 <?php echo stripslashes($_smarty_tpl->getVariable('p')->value['gtitle']);?>
 <?php echo $_smarty_tpl->getVariable('lang63')->value;?>
<?php echo stripslashes($_smarty_tpl->getVariable('p')->value['price']);?>
&amp;body=<?php echo $_smarty_tpl->getVariable('baseurl')->value;?>
/<?php echo stripslashes($_smarty_tpl->getVariable('p')->value['seo']);?>
/<?php echo stripslashes($_smarty_tpl->getVariable('p')->value['PID']);?>
/<?php echo $_smarty_tpl->getVariable('title')->value;?>
">email</a>
                                                        </li>
                                                        <li>
                                                        	<?php if ($_smarty_tpl->getVariable('short_urls')->value=="1"){?>
                                                            <?php $_smarty_tpl->assign('takento' , insert_get_short_url (array('value' => 'a', 'PID' => $_smarty_tpl->getVariable('p')->value['PID'], 'seo' => $_smarty_tpl->getVariable('p')->value['seo'], 'short' => $_smarty_tpl->getVariable('posts')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['short'], 'title' => $_smarty_tpl->getVariable('title')->value),$_smarty_tpl), true);?>
                                                            <a href="http://twitter.com/share" class="twitter-share-button" data-url="<?php echo $_smarty_tpl->getVariable('takento')->value;?>
" data-via="<?php echo $_smarty_tpl->getVariable('twitter')->value;?>
" data-text="<?php echo $_smarty_tpl->getVariable('lang62')->value;?>
 <?php echo stripslashes($_smarty_tpl->getVariable('p')->value['gtitle']);?>
 <?php echo $_smarty_tpl->getVariable('lang63')->value;?>
<?php echo stripslashes($_smarty_tpl->getVariable('p')->value['price']);?>
" data-count="horizontal">Tweet</a>
                                                            <?php }else{ ?>
                                                            <a href="http://twitter.com/share" class="twitter-share-button" data-url="<?php echo $_smarty_tpl->getVariable('baseurl')->value;?>
/<?php echo smarty_modifier_replace(stripslashes($_smarty_tpl->getVariable('p')->value['seo']),' ','+');?>
/<?php echo stripslashes($_smarty_tpl->getVariable('p')->value['PID']);?>
/<?php echo $_smarty_tpl->getVariable('title')->value;?>
" data-via="<?php echo $_smarty_tpl->getVariable('twitter')->value;?>
" data-text="<?php echo $_smarty_tpl->getVariable('lang62')->value;?>
 <?php echo stripslashes($_smarty_tpl->getVariable('p')->value['gtitle']);?>
 <?php echo $_smarty_tpl->getVariable('lang63')->value;?>
<?php echo stripslashes($_smarty_tpl->getVariable('p')->value['price']);?>
" data-count="horizontal">Tweet</a>
                                                            <?php }?>
															<script type="text/javascript" src="http://platform.twitter.com/widgets.js"></script>
                                                        </li>
                                                        <li>
                                                            <a class="addthis_button" addthis:url="<?php echo $_smarty_tpl->getVariable('baseurl')->value;?>
/<?php echo stripslashes($_smarty_tpl->getVariable('p')->value['seo']);?>
/<?php echo stripslashes($_smarty_tpl->getVariable('p')->value['PID']);?>
/<?php echo $_smarty_tpl->getVariable('title')->value;?>
" addthis:title="<?php echo $_smarty_tpl->getVariable('lang62')->value;?>
 <?php echo stripslashes($_smarty_tpl->getVariable('p')->value['gtitle']);?>
 <?php echo $_smarty_tpl->getVariable('lang63')->value;?>
<?php echo stripslashes($_smarty_tpl->getVariable('p')->value['price']);?>
" href="http://www.addthis.com/bookmark.php?v=250&amp;pub="><img src="http://s7.addthis.com/static/btn/sm-share-en.gif" width="83" height="16" alt="Bookmark and Share"></a>
                                                            
                                                            <script type="text/javascript">
                                                            var addthis_config = {
                                                                services_exclude: 'email, facebook, twitter, print'
                                                            }
                                                            </script>
                                                            <script type="text/javascript" src="http://s7.addthis.com/js/250/addthis_widget.js#pub="></script>
                                                            
                                                        </li>
                                                        
                                                    </ul>
                                                    <div style="padding-top:15px;">
                                                    <?php if ($_SESSION['USERID']!=$_smarty_tpl->getVariable('p')->value['USERID']){?>
                                                    <?php if ($_SESSION['USERID']>"0"){?>
                                                        <a href="<?php echo $_smarty_tpl->getVariable('baseurl')->value;?>
/<?php $_smarty_tpl->assign('cvseo' , insert_get_seo_convo (array('value' => 'a', 'username' => stripslashes($_smarty_tpl->getVariable('p')->value['username'])),$_smarty_tpl), true);?><?php echo $_smarty_tpl->getVariable('cvseo')->value;?>
?id=<?php echo stripslashes($_smarty_tpl->getVariable('p')->value['PID']);?>
"><?php echo $_smarty_tpl->getVariable('lang142')->value;?>
</a>
                                                    <?php }else{ ?>
                                                        <a href="#" class="login-link" rel="#register-spotlight"><?php echo $_smarty_tpl->getVariable('lang142')->value;?>
</a>
                                                    <?php }?>
                                                    <?php }?>
                                                    </div>
												</div>
												<div class="image-box-holder">
													<div class="image-box">
														<img alt="<?php echo stripslashes($_smarty_tpl->getVariable('p')->value['gtitle']);?>
" id="big-image" src="<?php echo $_smarty_tpl->getVariable('purl')->value;?>
/t/<?php echo $_smarty_tpl->getVariable('p')->value['p1'];?>
?<?php echo time();?>
" />
														<ul class="tags">
                                                        	<?php unset($_smarty_tpl->tpl_vars['smarty']->value['section']['i']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['name'] = 'i';
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'] = is_array($_loop=$_smarty_tpl->getVariable('tags')->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total']);
?>
															<li><span><a href="<?php echo $_smarty_tpl->getVariable('baseurl')->value;?>
/tags/<?php echo stripslashes($_smarty_tpl->getVariable('p')->value['seo']);?>
/<?php echo stripslashes($_smarty_tpl->getVariable('tags')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]);?>
"><?php echo stripslashes($_smarty_tpl->getVariable('tags')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]);?>
</a></span></li>
															<?php endfor; endif; ?>
														</ul>
													</div>														
                                                    <div id="photo1"><img alt="<?php echo stripslashes($_smarty_tpl->getVariable('p')->value['gtitle']);?>
" src="<?php echo $_smarty_tpl->getVariable('purl')->value;?>
/t2/<?php echo $_smarty_tpl->getVariable('p')->value['p1'];?>
?<?php echo time();?>
" /></div>	
                                                    <?php if ($_smarty_tpl->getVariable('p')->value['p2']!=''){?><div id="photo2"><img alt="<?php echo stripslashes($_smarty_tpl->getVariable('p')->value['gtitle']);?>
" src="<?php echo $_smarty_tpl->getVariable('purl')->value;?>
/t2/<?php echo $_smarty_tpl->getVariable('p')->value['p2'];?>
?<?php echo time();?>
" /></div>	<?php }?>
                                                    <?php if ($_smarty_tpl->getVariable('p')->value['p3']!=''){?><div id="photo3"><img alt="<?php echo stripslashes($_smarty_tpl->getVariable('p')->value['gtitle']);?>
" src="<?php echo $_smarty_tpl->getVariable('purl')->value;?>
/t2/<?php echo $_smarty_tpl->getVariable('p')->value['p3'];?>
?<?php echo time();?>
" /></div>	<?php }?>
												</div>
											</div>
										</div>
										<div class="spacer plus10"></div>
											<?php if ($_smarty_tpl->getVariable('p')->value['youtube']!=''){?><p><a href="<?php echo stripslashes($_smarty_tpl->getVariable('p')->value['youtube']);?>
" target="_blank"><?php echo $_smarty_tpl->getVariable('lang134')->value;?>
</a></p><?php }?>											
										</div>
									</div>
									<div class="article-info">
                                    
                                    <?php if (count($_smarty_tpl->getVariable('f')->value)>0){?>
                                    <div class="feedback">
                                        <h3><?php echo $_smarty_tpl->getVariable('lang143')->value;?>
</h3>
                                        <ul>
                                        	<?php unset($_smarty_tpl->tpl_vars['smarty']->value['section']['i']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['name'] = 'i';
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'] = is_array($_loop=$_smarty_tpl->getVariable('f')->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total']);
?>
                                            <li>
                                                <div>
                                                    <a href="<?php echo $_smarty_tpl->getVariable('baseurl')->value;?>
/<?php echo insert_get_seo_profile(array('value' => 'a', 'username' => stripslashes($_smarty_tpl->getVariable('f')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['username'])),$_smarty_tpl);?>
"><?php echo stripslashes($_smarty_tpl->getVariable('f')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['username']);?>
</a>                                                    
                                                        <img src="<?php echo $_smarty_tpl->getVariable('imageurl')->value;?>
/thumb_<?php if ($_smarty_tpl->getVariable('f')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['good']=="1"){?>up<?php }else{ ?>down<?php }?>.png" align="absmiddle" border="0"/>
                                                    <div>
                                                    <p><?php echo stripslashes($_smarty_tpl->getVariable('f')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['comment']);?>
</p>
                                                    </div>
                                                </div>
                                            </li>
                                            <?php endfor; endif; ?>
                                        </ul>
                                    </div>
                                    <?php }?>
				
                                    <div class="other-gigs">
                                        <h3><?php echo $_smarty_tpl->getVariable('lang137')->value;?>
 <strong><a href="<?php echo $_smarty_tpl->getVariable('baseurl')->value;?>
/<?php echo insert_get_seo_profile(array('value' => 'a', 'username' => stripslashes($_smarty_tpl->getVariable('p')->value['username'])),$_smarty_tpl);?>
"><?php echo stripslashes($_smarty_tpl->getVariable('p')->value['username']);?>
</a></strong></h3>
                                        <ul>                    
                    					<?php unset($_smarty_tpl->tpl_vars['smarty']->value['section']['i']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['name'] = 'i';
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'] = is_array($_loop=$_smarty_tpl->getVariable('u')->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total']);
?>
                                        <?php $_smarty_tpl->assign('utitle' , insert_seo_clean_titles (array('value' => 'a', 'title' => $_smarty_tpl->getVariable('u')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['gtitle']),$_smarty_tpl), true);?>
                                        <li class="other-gig-box">
                                            <a href="<?php echo $_smarty_tpl->getVariable('baseurl')->value;?>
/<?php echo stripslashes($_smarty_tpl->getVariable('u')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['seo']);?>
/<?php echo stripslashes($_smarty_tpl->getVariable('u')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['PID']);?>
/<?php echo $_smarty_tpl->getVariable('utitle')->value;?>
"><img alt="<?php echo stripslashes($_smarty_tpl->getVariable('u')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['gtitle']);?>
" src="<?php echo $_smarty_tpl->getVariable('purl')->value;?>
/t2/<?php echo $_smarty_tpl->getVariable('u')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['p1'];?>
?<?php echo time();?>
" /></a>
                                            <div>
                                            <p><a href="<?php echo $_smarty_tpl->getVariable('baseurl')->value;?>
/<?php echo stripslashes($_smarty_tpl->getVariable('u')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['seo']);?>
/<?php echo stripslashes($_smarty_tpl->getVariable('u')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['PID']);?>
/<?php echo $_smarty_tpl->getVariable('utitle')->value;?>
"><?php echo $_smarty_tpl->getVariable('lang62')->value;?>
 <?php echo stripslashes($_smarty_tpl->getVariable('u')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['gtitle']);?>
 <?php echo $_smarty_tpl->getVariable('lang63')->value;?>
<?php echo stripslashes($_smarty_tpl->getVariable('u')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['price']);?>
</a></p>
                                            <p class="category-label"><a href="<?php echo $_smarty_tpl->getVariable('baseurl')->value;?>
/categories/<?php echo stripslashes($_smarty_tpl->getVariable('u')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['seo']);?>
"><?php echo stripslashes($_smarty_tpl->getVariable('u')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['name']);?>
</a></p>
                                            </div>
                                        </li>
										<?php endfor; endif; ?>
                                        </ul>
                                    </div>

										<div class="related-gigs">
											<h3><?php echo $_smarty_tpl->getVariable('lang136')->value;?>
</h3>
											<ul>
                                            	<?php unset($_smarty_tpl->tpl_vars['smarty']->value['section']['i']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['name'] = 'i';
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'] = is_array($_loop=$_smarty_tpl->getVariable('r')->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total']);
?>
                                                <?php $_smarty_tpl->assign('rtitle' , insert_seo_clean_titles (array('value' => 'a', 'title' => $_smarty_tpl->getVariable('r')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['gtitle']),$_smarty_tpl), true);?>
                                                <li class="other-gig-box">
                                                    <a href="<?php echo $_smarty_tpl->getVariable('baseurl')->value;?>
/<?php echo stripslashes($_smarty_tpl->getVariable('r')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['seo']);?>
/<?php echo stripslashes($_smarty_tpl->getVariable('r')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['PID']);?>
/<?php echo $_smarty_tpl->getVariable('rtitle')->value;?>
"><img alt="<?php echo stripslashes($_smarty_tpl->getVariable('r')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['gtitle']);?>
" src="<?php echo $_smarty_tpl->getVariable('purl')->value;?>
/t2/<?php echo $_smarty_tpl->getVariable('r')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['p1'];?>
?<?php echo time();?>
" /></a>
                                                    <div>
                                                    <p><a href="<?php echo $_smarty_tpl->getVariable('baseurl')->value;?>
/<?php echo stripslashes($_smarty_tpl->getVariable('r')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['seo']);?>
/<?php echo stripslashes($_smarty_tpl->getVariable('r')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['PID']);?>
/<?php echo $_smarty_tpl->getVariable('rtitle')->value;?>
"><?php echo $_smarty_tpl->getVariable('lang62')->value;?>
 <?php echo stripslashes($_smarty_tpl->getVariable('r')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['gtitle']);?>
 <?php echo $_smarty_tpl->getVariable('lang63')->value;?>
<?php echo stripslashes($_smarty_tpl->getVariable('r')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['price']);?>
</a></p>
                                                    <p class="category-label"><a href="<?php echo $_smarty_tpl->getVariable('baseurl')->value;?>
/categories/<?php echo stripslashes($_smarty_tpl->getVariable('r')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['seo']);?>
"><?php echo stripslashes($_smarty_tpl->getVariable('r')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['name']);?>
</a></p>
                                                
                                                    </div>
                                                </li>
                                                <?php endfor; endif; ?>
											</ul>
										</div>
									
                                    </div>
                                </div>
                            </div>
                        </div>
					</div>									  
					<?php $_template = new Smarty_Internal_Template("side.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>