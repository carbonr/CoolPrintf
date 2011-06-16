<?php /* Smarty version Smarty-3.0.7, created on 2011-06-15 15:51:13
         compiled from "/Applications/MAMP/htdocs/fiverr/themes/inbox.tpl" */ ?>
<?php /*%%SmartyHeaderCode:7301521444df90d31421679-20446047%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e64d0119d7713beae9e923a24a83dbccf0c31982' => 
    array (
      0 => '/Applications/MAMP/htdocs/fiverr/themes/inbox.tpl',
      1 => 1298474012,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7301521444df90d31421679-20446047',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_modifier_truncate')) include '/Applications/MAMP/htdocs/fiverr/smarty/libs/plugins/modifier.truncate.php';
?>              <div class="main-wrapper">
                <div id="main">
                  <div class="content">
                  <?php if ($_smarty_tpl->getVariable('message')->value!=''){?>
                  <?php $_template = new Smarty_Internal_Template("error.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>
                  <?php }?>
					
                    <div class="wrapper">
                      <div class="page-title">
                        <h2><?php echo $_smarty_tpl->getVariable('lang226')->value;?>
<span><?php echo $_smarty_tpl->getVariable('lang227')->value;?>
</span></h2>
                      </div>
                      <div class="metadata">
                        <ul class="filters">
                        	<?php if ($_smarty_tpl->getVariable('s')->value=="all"||$_smarty_tpl->getVariable('s')->value==''){?>
                            <li><span><?php echo $_smarty_tpl->getVariable('lang187')->value;?>
</span></li>
                            <?php }else{ ?>
                            <li><a href="<?php echo $_smarty_tpl->getVariable('baseurl')->value;?>
/inbox?o=<?php echo $_smarty_tpl->getVariable('o')->value;?>
&a=<?php echo $_smarty_tpl->getVariable('a')->value;?>
"><span><?php echo $_smarty_tpl->getVariable('lang187')->value;?>
</span></a></li>
                            <?php }?>
                            <?php if ($_smarty_tpl->getVariable('s')->value=="unread"){?>
                            <li><span><?php echo $_smarty_tpl->getVariable('lang228')->value;?>
</span></li>
                            <?php }else{ ?>
                            <li><a href="<?php echo $_smarty_tpl->getVariable('baseurl')->value;?>
/inbox?s=unread&o=<?php echo $_smarty_tpl->getVariable('o')->value;?>
&a=<?php echo $_smarty_tpl->getVariable('a')->value;?>
"><span><?php echo $_smarty_tpl->getVariable('lang228')->value;?>
</span></a></li>
                            <?php }?>
                            <?php if ($_smarty_tpl->getVariable('s')->value=="archived"){?>
                            <li class="last"><span><?php echo $_smarty_tpl->getVariable('lang229')->value;?>
</span></li>
                            <?php }else{ ?>
                            <li class="last"><a href="<?php echo $_smarty_tpl->getVariable('baseurl')->value;?>
/inbox?s=archived&o=<?php echo $_smarty_tpl->getVariable('o')->value;?>
&a=<?php echo $_smarty_tpl->getVariable('a')->value;?>
"><span><?php echo $_smarty_tpl->getVariable('lang229')->value;?>
</span></a></li>
                            <?php }?>
                            <li class="quick-nav">
                          	<select id="conversations_quick_navigation">
                            	<?php if ($_smarty_tpl->getVariable('u')->value>"0"){?>
                                <option value="o=<?php echo $_smarty_tpl->getVariable('o')->value;?>
&a=<?php echo $_smarty_tpl->getVariable('a')->value;?>
&s=<?php echo $_smarty_tpl->getVariable('s')->value;?>
"><?php echo $_smarty_tpl->getVariable('lang230')->value;?>
</option>
                                <?php unset($_smarty_tpl->tpl_vars['smarty']->value['section']['i']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['name'] = 'i';
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'] = is_array($_loop=$_smarty_tpl->getVariable('m')->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
                                <option style="font-weight: bold;" value="o=<?php echo $_smarty_tpl->getVariable('o')->value;?>
&a=<?php echo $_smarty_tpl->getVariable('a')->value;?>
&s=<?php echo $_smarty_tpl->getVariable('s')->value;?>
&u=<?php echo stripslashes($_smarty_tpl->getVariable('m')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['USERID']);?>
" selected="selected"><?php echo stripslashes($_smarty_tpl->getVariable('m')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['username']);?>
</option>
                                <?php endfor; endif; ?>
                                <?php }else{ ?>
                            	<option><?php echo $_smarty_tpl->getVariable('lang230')->value;?>
</option>
                                <?php unset($_smarty_tpl->tpl_vars['smarty']->value['section']['i']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['name'] = 'i';
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'] = is_array($_loop=$_smarty_tpl->getVariable('m')->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
                                <option style="font-weight: bold;" value="o=<?php echo $_smarty_tpl->getVariable('o')->value;?>
&a=<?php echo $_smarty_tpl->getVariable('a')->value;?>
&s=<?php echo $_smarty_tpl->getVariable('s')->value;?>
&u=<?php echo stripslashes($_smarty_tpl->getVariable('m')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['USERID']);?>
"><?php echo stripslashes($_smarty_tpl->getVariable('m')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['username']);?>
</option>
                                <?php endfor; endif; ?>
                                <?php }?>
                            </select>
                          </li>
                        </ul>    
                      </div>
                      <div class="tabs">
                        <div class="table-container yellow index conversation">
                        	<?php if (count($_smarty_tpl->getVariable('m')->value)==0){?>
                        	<div class="empty-data">
                              <h3><?php echo $_smarty_tpl->getVariable('lang234')->value;?>
</h3>
                              <p></p>
                            </div>
							<?php }else{ ?>
                            <table width="100%">
                              <thead class="topics">
                                <tr>
                                  <td class="first"><a href="<?php echo $_smarty_tpl->getVariable('baseurl')->value;?>
/inbox?o=name&s=<?php echo $_smarty_tpl->getVariable('s')->value;?>
<?php if ($_smarty_tpl->getVariable('a')->value=="1"){?>&a=0<?php }else{ ?>&a=1<?php }?>" <?php if ($_smarty_tpl->getVariable('o')->value=="name"){?>class="<?php if ($_smarty_tpl->getVariable('a')->value=="1"){?>descending<?php }else{ ?>ascending<?php }?>"<?php }?>><?php if ($_smarty_tpl->getVariable('o')->value=="name"){?><?php if ($_smarty_tpl->getVariable('a')->value=="1"){?>&#9650;<?php }else{ ?>&#9660;<?php }?><?php }?>&nbsp;<?php echo $_smarty_tpl->getVariable('lang231')->value;?>
</a></td>
                                  <td class="last"><a href="<?php echo $_smarty_tpl->getVariable('baseurl')->value;?>
/inbox?o=time&s=<?php echo $_smarty_tpl->getVariable('s')->value;?>
<?php if ($_smarty_tpl->getVariable('a')->value=="1"){?>&a=0<?php }else{ ?>&a=1<?php }?>" <?php if ($_smarty_tpl->getVariable('o')->value=="time"){?>class="<?php if ($_smarty_tpl->getVariable('a')->value=="1"){?>descending<?php }else{ ?>ascending<?php }?>"<?php }?>><?php if ($_smarty_tpl->getVariable('o')->value=="time"){?><?php if ($_smarty_tpl->getVariable('a')->value=="1"){?>&#9650;<?php }else{ ?>&#9660;<?php }?><?php }?>&nbsp;<?php echo $_smarty_tpl->getVariable('lang232')->value;?>
</a></td>
                                </tr>
                              </thead>
                              <tbody>
                              	<?php if ($_smarty_tpl->getVariable('s')->value=="all"){?>
                                    <?php unset($_smarty_tpl->tpl_vars['smarty']->value['section']['i']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['name'] = 'i';
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'] = is_array($_loop=$_smarty_tpl->getVariable('m')->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
                                    <?php $_smarty_tpl->tpl_vars["show"] = new Smarty_variable(1, null, null);?>
                                    <?php unset($_smarty_tpl->tpl_vars['smarty']->value['section']['j']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['j']['name'] = 'j';
$_smarty_tpl->tpl_vars['smarty']->value['section']['j']['loop'] = is_array($_loop=$_smarty_tpl->getVariable('arc')->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['j']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['j']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['j']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['j']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['j']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['j']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['j']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['j']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['j']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['j']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['j']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['j']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['j']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['j']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['j']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['j']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['j']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['j']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['j']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['j']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['j']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['j']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['j']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['j']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['j']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['j']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['j']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['j']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['j']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['j']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['j']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['j']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['j']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['j']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['j']['total']);
?>
                                    <?php if ($_smarty_tpl->getVariable('arc')->value[$_smarty_tpl->getVariable('smarty')->value['section']['j']['index']]['AID']==$_smarty_tpl->getVariable('m')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['USERID']){?>
                                    <?php $_smarty_tpl->tpl_vars["show"] = new Smarty_variable(0, null, null);?>
                                    <?php }?>
                                    <?php endfor; endif; ?>
                                    <?php $_smarty_tpl->assign('lur' , insert_last_unread (array('value' => 'a', 'uid' => $_smarty_tpl->getVariable('m')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['USERID']),$_smarty_tpl), true);?>
                                    <?php if ($_smarty_tpl->getVariable('show')->value=="1"||$_smarty_tpl->getVariable('lur')->value=="1"){?>
                                    <tr class="entry <?php if ($_smarty_tpl->getVariable('lur')->value=="1"){?>unread<?php }else{ ?>read<?php }?>">
                                        <td <?php if ($_smarty_tpl->getVariable('smarty')->value['section']['i']['iteration']=="0"){?>class="first"<?php }?>>
                                            <div class="gig-entry">
                                                <div class="extended-data"><a href="<?php echo $_smarty_tpl->getVariable('baseurl')->value;?>
/<?php $_smarty_tpl->assign('cvseo' , insert_get_seo_convo (array('value' => 'a', 'username' => stripslashes($_smarty_tpl->getVariable('m')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['username'])),$_smarty_tpl), true);?><?php echo $_smarty_tpl->getVariable('cvseo')->value;?>
"><b class="username"><?php echo stripslashes($_smarty_tpl->getVariable('m')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['username']);?>
<em>&raquo;</em></b><span class="gig-title"><?php $_smarty_tpl->assign('lem' , insert_last_email (array('value' => 'a', 'uid' => $_smarty_tpl->getVariable('m')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['USERID']),$_smarty_tpl), true);?><?php echo smarty_modifier_truncate(stripslashes($_smarty_tpl->getVariable('lem')->value),50,"...",true);?>
</span></a></div>
                                                <?php if ($_smarty_tpl->getVariable('lur')->value=="1"){?><div class="unread-message" title="New message!"><span><?php echo $_smarty_tpl->getVariable('lang233')->value;?>
</span></div><?php }?>
                                            </div>
                                        </td>
                                        <td class="datetime last"><div><?php echo insert_get_time_to_days_ago(array('value' => 'a', 'time' => $_smarty_tpl->getVariable('m')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['time']),$_smarty_tpl);?>
</div></td>
                                    </tr>
                                    <?php }?>
                                    <?php endfor; endif; ?>
                                 <?php }elseif($_smarty_tpl->getVariable('s')->value=="unread"){?>
                                 	<?php unset($_smarty_tpl->tpl_vars['smarty']->value['section']['i']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['name'] = 'i';
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'] = is_array($_loop=$_smarty_tpl->getVariable('m')->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
                                    <?php $_smarty_tpl->tpl_vars["show"] = new Smarty_variable(1, null, null);?>
                                    <?php unset($_smarty_tpl->tpl_vars['smarty']->value['section']['j']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['j']['name'] = 'j';
$_smarty_tpl->tpl_vars['smarty']->value['section']['j']['loop'] = is_array($_loop=$_smarty_tpl->getVariable('arc')->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['j']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['j']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['j']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['j']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['j']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['j']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['j']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['j']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['j']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['j']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['j']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['j']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['j']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['j']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['j']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['j']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['j']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['j']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['j']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['j']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['j']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['j']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['j']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['j']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['j']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['j']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['j']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['j']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['j']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['j']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['j']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['j']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['j']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['j']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['j']['total']);
?>
                                    <?php if ($_smarty_tpl->getVariable('arc')->value[$_smarty_tpl->getVariable('smarty')->value['section']['j']['index']]['AID']==$_smarty_tpl->getVariable('m')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['USERID']){?>
                                    <?php $_smarty_tpl->tpl_vars["show"] = new Smarty_variable(0, null, null);?>
                                    <?php }?>
                                    <?php endfor; endif; ?>
                                    <?php $_smarty_tpl->assign('lur' , insert_last_unread (array('value' => 'a', 'uid' => $_smarty_tpl->getVariable('m')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['USERID']),$_smarty_tpl), true);?>
                                    <?php if ($_smarty_tpl->getVariable('show')->value=="1"&&$_smarty_tpl->getVariable('lur')->value=="1"){?>
                                    <tr class="entry <?php if ($_smarty_tpl->getVariable('lur')->value=="1"){?>unread<?php }else{ ?>read<?php }?>">
                                        <td <?php if ($_smarty_tpl->getVariable('smarty')->value['section']['i']['iteration']=="0"){?>class="first"<?php }?>>
                                            <div class="gig-entry">
                                                <div class="extended-data"><a href="<?php echo $_smarty_tpl->getVariable('baseurl')->value;?>
/<?php $_smarty_tpl->assign('cvseo' , insert_get_seo_convo (array('value' => 'a', 'username' => stripslashes($_smarty_tpl->getVariable('m')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['username'])),$_smarty_tpl), true);?><?php echo $_smarty_tpl->getVariable('cvseo')->value;?>
"><b class="username"><?php echo stripslashes($_smarty_tpl->getVariable('m')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['username']);?>
<em>&raquo;</em></b><span class="gig-title"><?php $_smarty_tpl->assign('lem' , insert_last_email (array('value' => 'a', 'uid' => $_smarty_tpl->getVariable('m')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['USERID']),$_smarty_tpl), true);?><?php echo smarty_modifier_truncate(stripslashes($_smarty_tpl->getVariable('lem')->value),50,"...",true);?>
</span></a></div>
                                                <?php if ($_smarty_tpl->getVariable('lur')->value=="1"){?><div class="unread-message" title="New message!"><span><?php echo $_smarty_tpl->getVariable('lang233')->value;?>
</span></div><?php }?>
                                            </div>
                                        </td>
                                        <td class="datetime last"><div><?php echo insert_get_time_to_days_ago(array('value' => 'a', 'time' => $_smarty_tpl->getVariable('m')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['time']),$_smarty_tpl);?>
</div></td>
                                    </tr>
                                    <?php }?>
                                    <?php endfor; endif; ?>
                                 <?php }elseif($_smarty_tpl->getVariable('s')->value=="archived"){?>
                                 	<?php unset($_smarty_tpl->tpl_vars['smarty']->value['section']['i']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['name'] = 'i';
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'] = is_array($_loop=$_smarty_tpl->getVariable('m')->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
                                    <?php $_smarty_tpl->tpl_vars["show"] = new Smarty_variable(0, null, null);?>
                                    <?php unset($_smarty_tpl->tpl_vars['smarty']->value['section']['j']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['j']['name'] = 'j';
$_smarty_tpl->tpl_vars['smarty']->value['section']['j']['loop'] = is_array($_loop=$_smarty_tpl->getVariable('arc')->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['j']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['j']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['j']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['j']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['j']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['j']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['j']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['j']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['j']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['j']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['j']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['j']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['j']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['j']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['j']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['j']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['j']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['j']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['j']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['j']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['j']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['j']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['j']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['j']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['j']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['j']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['j']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['j']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['j']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['j']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['j']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['j']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['j']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['j']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['j']['total']);
?>
                                    <?php if ($_smarty_tpl->getVariable('arc')->value[$_smarty_tpl->getVariable('smarty')->value['section']['j']['index']]['AID']==$_smarty_tpl->getVariable('m')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['USERID']){?>
                                    <?php $_smarty_tpl->tpl_vars["show"] = new Smarty_variable(1, null, null);?>
                                    <?php }?>
                                    <?php endfor; endif; ?>
                                    <?php $_smarty_tpl->assign('lur' , insert_last_unread (array('value' => 'a', 'uid' => $_smarty_tpl->getVariable('m')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['USERID']),$_smarty_tpl), true);?>
                                    <?php if ($_smarty_tpl->getVariable('show')->value=="1"&&$_smarty_tpl->getVariable('lur')->value=="0"){?>
                                    <tr class="entry <?php if ($_smarty_tpl->getVariable('lur')->value=="1"){?>unread<?php }else{ ?>read<?php }?>">
                                        <td <?php if ($_smarty_tpl->getVariable('smarty')->value['section']['i']['iteration']=="0"){?>class="first"<?php }?>>
                                            <div class="gig-entry">
                                                <div class="extended-data"><a href="<?php echo $_smarty_tpl->getVariable('baseurl')->value;?>
/<?php $_smarty_tpl->assign('cvseo' , insert_get_seo_convo (array('value' => 'a', 'username' => stripslashes($_smarty_tpl->getVariable('m')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['username'])),$_smarty_tpl), true);?><?php echo $_smarty_tpl->getVariable('cvseo')->value;?>
"><b class="username"><?php echo stripslashes($_smarty_tpl->getVariable('m')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['username']);?>
<em>&raquo;</em></b><span class="gig-title"><?php $_smarty_tpl->assign('lem' , insert_last_email (array('value' => 'a', 'uid' => $_smarty_tpl->getVariable('m')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['USERID']),$_smarty_tpl), true);?><?php echo smarty_modifier_truncate(stripslashes($_smarty_tpl->getVariable('lem')->value),50,"...",true);?>
</span></a></div>
                                                <?php if ($_smarty_tpl->getVariable('lur')->value=="1"){?><div class="unread-message" title="New message!"><span><?php echo $_smarty_tpl->getVariable('lang233')->value;?>
</span></div><?php }?>
                                            </div>
                                        </td>
                                        <td class="datetime last"><div><?php echo insert_get_time_to_days_ago(array('value' => 'a', 'time' => $_smarty_tpl->getVariable('m')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['time']),$_smarty_tpl);?>
</div></td>
                                    </tr>
                                    <?php }?>
                                    <?php endfor; endif; ?>
                                 <?php }?>                             
                              </tbody>
                            </table>
                            <?php }?>
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