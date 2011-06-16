<?php /* Smarty version Smarty-3.0.7, created on 2011-06-15 15:22:16
         compiled from "/Applications/MAMP/htdocs/fiverr/themes/cat.tpl" */ ?>
<?php /*%%SmartyHeaderCode:9048060434df90668d50e88-38294880%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f6a50e11f1750754e0e38167e40bff655bc937ed' => 
    array (
      0 => '/Applications/MAMP/htdocs/fiverr/themes/cat.tpl',
      1 => 1298473728,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9048060434df90668d50e88-38294880',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
              <div class="main-wrapper">
                <div id="main">
                  <div class="content">
                  <?php if ($_smarty_tpl->getVariable('message')->value!=''){?>
                  <?php $_template = new Smarty_Internal_Template("error.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>
                  <?php }?>
                  	<?php if ($_SESSION['USERID']!=''){?>
                    <?php $_template = new Smarty_Internal_Template("sub_bit.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>
                    <?php }else{ ?>
                    <div class="welcomebox">
                      <div style="position:relative;"></div>
                      <h1><?php echo $_smarty_tpl->getVariable('lang102')->value;?>
<br /><?php echo $_smarty_tpl->getVariable('lang103')->value;?>
</h1>
                      <h2><?php echo $_smarty_tpl->getVariable('lang104')->value;?>
</h2>
                    </div>
					<?php }?>
					<div class="darkenBackground"></div>
                    
                    <div class="category-tags">
                    <?php unset($_smarty_tpl->tpl_vars['smarty']->value['section']['i']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['name'] = 'i';
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'] = is_array($_loop=$_smarty_tpl->getVariable('tags')->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['max'] = (int)10;
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show'] = true;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['max'] < 0)
    $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'] = min(ceil(($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'] > 0 ? $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['start'] : $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['start']+1)/abs($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'])), $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['max']);
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
                    <?php if ($_smarty_tpl->getVariable('tags')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]!=''){?><a href="<?php echo $_smarty_tpl->getVariable('baseurl')->value;?>
/tags/<?php echo $_smarty_tpl->getVariable('cid')->value;?>
/<?php echo stripslashes($_smarty_tpl->getVariable('tags')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]);?>
" class="tag" title="logo">&nbsp;<?php echo stripslashes($_smarty_tpl->getVariable('tags')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]);?>
&nbsp;</a><?php }?>
                    <?php endfor; endif; ?>
                    </div>

                    <div class="featured">   
                    	<div class="gig_filters bordertop">
                          <div class="ul bg-f-a">
                            <div class="li"><span class="helptext"><?php echo $_smarty_tpl->getVariable('lang109')->value;?>
</span></div>
                            	<?php if ($_smarty_tpl->getVariable('s')->value=="d"||$_smarty_tpl->getVariable('s')->value==''){?>
                                <div class="li sep-right"><a href="<?php echo $_smarty_tpl->getVariable('baseurl')->value;?>
/categories/<?php echo $_smarty_tpl->getVariable('cid')->value;?>
?s=dz" class="current"><?php echo $_smarty_tpl->getVariable('lang110')->value;?>
</a></div>
                                <?php }else{ ?>
                                <div class="li sep-right"><a href="<?php echo $_smarty_tpl->getVariable('baseurl')->value;?>
/categories/<?php echo $_smarty_tpl->getVariable('cid')->value;?>
?s=d" <?php if ($_smarty_tpl->getVariable('s')->value=="d"||$_smarty_tpl->getVariable('s')->value=="dz"||$_smarty_tpl->getVariable('s')->value==''){?>class="current"<?php }?>><?php echo $_smarty_tpl->getVariable('lang110')->value;?>
</a></div>
                                <?php }?>
                                <?php if ($_smarty_tpl->getVariable('s')->value=="p"){?>
                                <div class="li sep-right"><a href="<?php echo $_smarty_tpl->getVariable('baseurl')->value;?>
/categories/<?php echo $_smarty_tpl->getVariable('cid')->value;?>
?s=pz" class="current"><?php echo $_smarty_tpl->getVariable('lang111')->value;?>
</a></div>
                                <?php }else{ ?>
                                <div class="li sep-right"><a href="<?php echo $_smarty_tpl->getVariable('baseurl')->value;?>
/categories/<?php echo $_smarty_tpl->getVariable('cid')->value;?>
?s=p" <?php if ($_smarty_tpl->getVariable('s')->value=="p"||$_smarty_tpl->getVariable('s')->value=="pz"){?>class="current"<?php }?>><?php echo $_smarty_tpl->getVariable('lang111')->value;?>
</a></div>
                                <?php }?>
                                <?php if ($_smarty_tpl->getVariable('s')->value=="r"){?>
                                <div class="li sep-right"><a href="<?php echo $_smarty_tpl->getVariable('baseurl')->value;?>
/categories/<?php echo $_smarty_tpl->getVariable('cid')->value;?>
?s=rz" class="current"><?php echo $_smarty_tpl->getVariable('lang112')->value;?>
</a></div>
                                <?php }else{ ?>
                                <div class="li sep-right"><a href="<?php echo $_smarty_tpl->getVariable('baseurl')->value;?>
/categories/<?php echo $_smarty_tpl->getVariable('cid')->value;?>
?s=r" <?php if ($_smarty_tpl->getVariable('s')->value=="r"||$_smarty_tpl->getVariable('s')->value=="rz"){?>class="current"<?php }?>><?php echo $_smarty_tpl->getVariable('lang112')->value;?>
</a></div>
                                <?php }?>
                                <?php if ($_smarty_tpl->getVariable('s')->value=="c"){?>
                                <div class="li last"><a href="<?php echo $_smarty_tpl->getVariable('baseurl')->value;?>
/categories/<?php echo $_smarty_tpl->getVariable('cid')->value;?>
?s=cz" class="current"><?php echo $_smarty_tpl->getVariable('lang436')->value;?>
</a></div>
                                <?php }else{ ?>
                                <div class="li last"><a href="<?php echo $_smarty_tpl->getVariable('baseurl')->value;?>
/categories/<?php echo $_smarty_tpl->getVariable('cid')->value;?>
?s=c" <?php if ($_smarty_tpl->getVariable('s')->value=="c"||$_smarty_tpl->getVariable('s')->value=="cz"){?>class="current"<?php }?>><?php echo $_smarty_tpl->getVariable('lang436')->value;?>
</a></div>
                                <?php }?>
                          </div>
                        </div>                
                        <?php $_template = new Smarty_Internal_Template("bit.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>
                    </div>
                    
  					<div class="paging">
                    	<div class="p1">
                        	<ul>
                            	<?php echo $_smarty_tpl->getVariable('pagelinks')->value;?>

                            </ul>
                        </div>
                    </div>
					<div class="rss-link"><a href="<?php echo $_smarty_tpl->getVariable('baseurl')->value;?>
/rss?c=<?php echo $_smarty_tpl->getVariable('catselect')->value;?>
"><?php echo $_smarty_tpl->getVariable('lang108')->value;?>
</a></div>
                  </div>
                  <?php $_template = new Smarty_Internal_Template("side.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>