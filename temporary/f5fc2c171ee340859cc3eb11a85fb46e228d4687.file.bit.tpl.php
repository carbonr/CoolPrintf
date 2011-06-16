<?php /* Smarty version Smarty-3.0.7, created on 2011-06-15 06:27:03
         compiled from "/Applications/MAMP/htdocs/fiverr/themes/bit.tpl" */ ?>
<?php /*%%SmartyHeaderCode:9766515424df888f7c6c242-21812931%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f5fc2c171ee340859cc3eb11a85fb46e228d4687' => 
    array (
      0 => '/Applications/MAMP/htdocs/fiverr/themes/bit.tpl',
      1 => 1298473710,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9766515424df888f7c6c242-21812931',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_modifier_truncate')) include '/Applications/MAMP/htdocs/fiverr/smarty/libs/plugins/modifier.truncate.php';
if (!is_callable('smarty_modifier_replace')) include '/Applications/MAMP/htdocs/fiverr/smarty/libs/plugins/modifier.replace.php';
?>						<?php unset($_smarty_tpl->tpl_vars['smarty']->value['section']['i']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['name'] = 'i';
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'] = is_array($_loop=$_smarty_tpl->getVariable('posts')->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
                        <?php if ($_smarty_tpl->getVariable('smarty')->value['section']['i']['iteration']=="6"){?>
                        <div style="padding:5px;">
                        <center>
                        <?php echo insert_get_advertisement(array('AID' => 3),$_smarty_tpl);?>

                        </center>
                        </div>
                        <?php }?>
                        <?php $_smarty_tpl->assign('title' , insert_seo_clean_titles (array('value' => 'a', 'title' => $_smarty_tpl->getVariable('posts')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['gtitle']),$_smarty_tpl), true);?>
                        <div class="box">
                          <div class="c">
                            <div class="holder">                              
                                <?php if ($_smarty_tpl->getVariable('posts')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['feat']=="1"){?><span class="featured-label">featured</span><?php }?>
                              	<div class="frame-img">
                                	<a href="<?php echo $_smarty_tpl->getVariable('baseurl')->value;?>
/<?php echo stripslashes($_smarty_tpl->getVariable('posts')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['seo']);?>
/<?php echo stripslashes($_smarty_tpl->getVariable('posts')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['PID']);?>
/<?php echo $_smarty_tpl->getVariable('title')->value;?>
"><img alt="<?php echo stripslashes($_smarty_tpl->getVariable('posts')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['gtitle']);?>
" src="<?php echo $_smarty_tpl->getVariable('purl')->value;?>
/t2/<?php echo $_smarty_tpl->getVariable('posts')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['p1'];?>
?<?php echo time();?>
" /></a>
                              	</div>
                              	<div class="frame">
                                	<h2><a href="<?php echo $_smarty_tpl->getVariable('baseurl')->value;?>
/<?php echo stripslashes($_smarty_tpl->getVariable('posts')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['seo']);?>
/<?php echo stripslashes($_smarty_tpl->getVariable('posts')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['PID']);?>
/<?php echo $_smarty_tpl->getVariable('title')->value;?>
"><?php echo $_smarty_tpl->getVariable('lang62')->value;?>
 <?php echo smarty_modifier_truncate(stripslashes($_smarty_tpl->getVariable('posts')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['gtitle']),50,"...",true);?>
 <?php echo $_smarty_tpl->getVariable('lang63')->value;?>
<?php echo stripslashes($_smarty_tpl->getVariable('posts')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['price']);?>
</a></h2>
                                	<p><?php echo smarty_modifier_truncate(stripslashes($_smarty_tpl->getVariable('posts')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['gdesc']),140,"...",true);?>
<span>&nbsp;(<?php echo $_smarty_tpl->getVariable('lang414')->value;?>
 <a href="<?php echo $_smarty_tpl->getVariable('baseurl')->value;?>
/<?php echo insert_get_seo_profile(array('value' => 'a', 'username' => stripslashes($_smarty_tpl->getVariable('posts')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['username'])),$_smarty_tpl);?>
"><?php echo stripslashes($_smarty_tpl->getVariable('posts')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['username']);?>
</a>)</span></p>
	                                <ul class="control">
                                      <li>
                                        <a href="<?php echo $_smarty_tpl->getVariable('baseurl')->value;?>
/<?php echo stripslashes($_smarty_tpl->getVariable('posts')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['seo']);?>
/<?php echo stripslashes($_smarty_tpl->getVariable('posts')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['PID']);?>
/<?php echo $_smarty_tpl->getVariable('title')->value;?>
"><?php echo $_smarty_tpl->getVariable('lang105')->value;?>
</a>
                                      </li>
                                  		<li class="share">
                                        	<?php if ($_smarty_tpl->getVariable('short_urls')->value=="1"){?>
                                            <?php $_smarty_tpl->assign('takento' , insert_get_short_url (array('value' => 'a', 'PID' => $_smarty_tpl->getVariable('posts')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['PID'], 'seo' => $_smarty_tpl->getVariable('posts')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['seo'], 'short' => $_smarty_tpl->getVariable('posts')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['short'], 'title' => $_smarty_tpl->getVariable('title')->value),$_smarty_tpl), true);?>
                                            <a href="http://twitter.com/share" class="twitter-share-button" data-url="<?php echo $_smarty_tpl->getVariable('takento')->value;?>
" data-via="<?php echo $_smarty_tpl->getVariable('twitter')->value;?>
" data-text="<?php echo $_smarty_tpl->getVariable('lang62')->value;?>
 <?php echo stripslashes($_smarty_tpl->getVariable('posts')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['gtitle']);?>
 <?php echo $_smarty_tpl->getVariable('lang63')->value;?>
<?php echo stripslashes($_smarty_tpl->getVariable('posts')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['price']);?>
" data-count="horizontal">Tweet</a>
                                            <?php }else{ ?>
                                            <a href="http://twitter.com/share" class="twitter-share-button" data-url="<?php echo $_smarty_tpl->getVariable('baseurl')->value;?>
/<?php echo smarty_modifier_replace(stripslashes($_smarty_tpl->getVariable('posts')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['seo']),' ','+');?>
/<?php echo stripslashes($_smarty_tpl->getVariable('posts')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['PID']);?>
/<?php echo $_smarty_tpl->getVariable('title')->value;?>
" data-via="<?php echo $_smarty_tpl->getVariable('twitter')->value;?>
" data-text="<?php echo $_smarty_tpl->getVariable('lang62')->value;?>
 <?php echo stripslashes($_smarty_tpl->getVariable('posts')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['gtitle']);?>
 <?php echo $_smarty_tpl->getVariable('lang63')->value;?>
<?php echo stripslashes($_smarty_tpl->getVariable('posts')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['price']);?>
" data-count="horizontal">Tweet</a>
                                            <?php }?>											
											<script type="text/javascript" src="http://platform.twitter.com/widgets.js"></script>
                                            <a href="#" onclick="openCenteredWindow('http://www.facebook.com/sharer.php?u=<?php echo $_smarty_tpl->getVariable('baseurl')->value;?>
/<?php echo stripslashes($_smarty_tpl->getVariable('posts')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['seo']);?>
/<?php echo stripslashes($_smarty_tpl->getVariable('posts')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['PID']);?>
/<?php echo smarty_modifier_replace($_smarty_tpl->getVariable('title')->value,"'",'');?>
');"><img alt="Btn-facebook" src="<?php echo $_smarty_tpl->getVariable('imageurl')->value;?>
/btn-facebook.png" /></a>
                                  		</li>
                                	</ul>
                                	<div class="quick-order">
	                                    <a class="login-link" <?php if ($_SESSION['USERID']!=''){?>href="<?php echo $_smarty_tpl->getVariable('baseurl')->value;?>
/<?php echo stripslashes($_smarty_tpl->getVariable('posts')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['seo']);?>
/<?php echo stripslashes($_smarty_tpl->getVariable('posts')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['PID']);?>
/<?php echo $_smarty_tpl->getVariable('title')->value;?>
"<?php }else{ ?>href="#" rel="#register-spotlight"<?php }?>><?php echo $_smarty_tpl->getVariable('lang107')->value;?>
</a>                                  
                                	</div>
                            	</div>
                            </div>
                          </div>
                        </div>
                        <?php endfor; endif; ?>