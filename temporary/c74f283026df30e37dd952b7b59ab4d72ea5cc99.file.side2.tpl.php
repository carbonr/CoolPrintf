<?php /* Smarty version Smarty-3.0.7, created on 2011-06-15 15:50:09
         compiled from "/Applications/MAMP/htdocs/fiverr/themes/side2.tpl" */ ?>
<?php /*%%SmartyHeaderCode:5091098484df90cf1a6a8f8-30917646%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c74f283026df30e37dd952b7b59ab4d72ea5cc99' => 
    array (
      0 => '/Applications/MAMP/htdocs/fiverr/themes/side2.tpl',
      1 => 1287863334,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5091098484df90cf1a6a8f8-30917646',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
                    <div class="sidebar">
                    	<form name="langselecten" id="langselecten" method="post" style="padding:0; margin:0">
                        <input type="hidden" name="language" value="english" />
                        </form>
                        <form name="langselectes" id="langselectes" method="post" style="padding:0; margin:0">
                        <input type="hidden" name="language" value="spanish" />
                        </form>
                        <form name="langselectfr" id="langselectfr" method="post" style="padding:0; margin:0">
                        <input type="hidden" name="language" value="french" />
                        </form>
                        <a href="#" onclick="document.langselecten.submit();"><img src="<?php echo $_smarty_tpl->getVariable('imageurl')->value;?>
/flag_en.png" /></a>
                        <a href="#" onclick="document.langselectfr.submit();"><img src="<?php echo $_smarty_tpl->getVariable('imageurl')->value;?>
/flag_fr.png" /></a>
                        <a href="#" onclick="document.langselectes.submit();"><img src="<?php echo $_smarty_tpl->getVariable('imageurl')->value;?>
/flag_es.png" /></a>
                        <div class="add-nav-title">
                            <div class="t">&nbsp;</div>
                            <div class="c"><?php echo $_smarty_tpl->getVariable('lang152')->value;?>
</div>
                            <div class="b">&nbsp;</div>
                        </div>
                        <div class="add-nav">
                            <div class="t">&nbsp;</div>
                            <div class="c">
                              <ul>
                                <li <?php if ($_smarty_tpl->getVariable('sm1')->value=="1"){?>class="active"<?php }?>><a href="<?php echo $_smarty_tpl->getVariable('baseurl')->value;?>
/manage_gigs"><?php echo $_smarty_tpl->getVariable('lang153')->value;?>
</a></li>
                                <li <?php if ($_smarty_tpl->getVariable('sm2')->value=="1"){?>class="active"<?php }?>><a href="<?php echo $_smarty_tpl->getVariable('baseurl')->value;?>
/manage_orders"><?php echo $_smarty_tpl->getVariable('lang154')->value;?>
</a></li>
                                <li <?php if ($_smarty_tpl->getVariable('sm3')->value=="1"){?>class="active"<?php }?>><a href="<?php echo $_smarty_tpl->getVariable('baseurl')->value;?>
/balance?tab=sales"><?php echo $_smarty_tpl->getVariable('lang155')->value;?>
 </a></li>
                              </ul>
                            </div>
                            <div class="b">&nbsp;</div>
                        </div>
                    	<div class="feedback-positive"><?php echo $_smarty_tpl->getVariable('lang151')->value;?>
 <?php $_smarty_tpl->assign('percent' , insert_get_percent2 (array('value' => 'a'),$_smarty_tpl), true);?><?php echo $_smarty_tpl->getVariable('percent')->value;?>
&#37; <?php echo $_smarty_tpl->getVariable('lang139')->value;?>
</div>
                    	<br/>
                    	<br/>
                    	<div class="share ideas-box">
                    		<div class="t">&nbsp;</div>
                            <div class="c">
                              <div class="holder">
                                <h3><?php echo $_smarty_tpl->getVariable('lang150')->value;?>
</h3>
                                <div class="ideas">
                                  <p><?php echo $_smarty_tpl->getVariable('lang149')->value;?>
:</p>
                                  <ul>
                                    <?php $_smarty_tpl->assign('wants' , insert_get_wants (array('value' => 'var'),$_smarty_tpl), true);?>
                                    <?php unset($_smarty_tpl->tpl_vars['smarty']->value['section']['i']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['name'] = 'i';
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'] = is_array($_loop=$_smarty_tpl->getVariable('wants')->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
                                    <li><?php echo stripslashes($_smarty_tpl->getVariable('wants')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['want']);?>
 (by <a href="<?php echo $_smarty_tpl->getVariable('baseurl')->value;?>
/<?php echo insert_get_seo_profile(array('value' => 'a', 'username' => stripslashes($_smarty_tpl->getVariable('wants')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['username'])),$_smarty_tpl);?>
"><?php echo stripslashes($_smarty_tpl->getVariable('wants')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['username']);?>
</a>)</li>
                                    <?php endfor; endif; ?>
                                  </ul>
                                </div>
                              </div>
                            </div>
                    		<div class="b">&nbsp;</div>
                    	</div>
                    </div>