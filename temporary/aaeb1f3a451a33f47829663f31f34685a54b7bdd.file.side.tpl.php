<?php /* Smarty version Smarty-3.0.7, created on 2011-06-15 06:27:03
         compiled from "/Applications/MAMP/htdocs/fiverr/themes/side.tpl" */ ?>
<?php /*%%SmartyHeaderCode:17240626044df888f7ea8f04-93004720%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'aaeb1f3a451a33f47829663f31f34685a54b7bdd' => 
    array (
      0 => '/Applications/MAMP/htdocs/fiverr/themes/side.tpl',
      1 => 1287750652,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17240626044df888f7ea8f04-93004720',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
				<div class="sidebar">
                    <div class="side-nav">
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
                
                      <div class="t"></div>
                      <div class="c">
                        <form action="<?php echo $_smarty_tpl->getVariable('baseurl')->value;?>
/search" id="search_form" method="get">      
                        	<div class="search">
                            	<input class="text swap-value-small-search" id="query" name="query" type="text" value="" />
                            	<input type="image" src="<?php echo $_smarty_tpl->getVariable('imageurl')->value;?>
/btn-go02.gif" alt="Go" class="button" />
                          	</div>
                        </form>
                        <ul>
                          <li ><strong><a href="<?php echo $_smarty_tpl->getVariable('baseurl')->value;?>
/" style="color:green;"><?php echo $_smarty_tpl->getVariable('lang115')->value;?>
</a></strong></li>                          
                              <?php $_smarty_tpl->assign('c' , insert_get_categories (array(),$_smarty_tpl), true);?>
                              <?php unset($_smarty_tpl->tpl_vars['smarty']->value['section']['i']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['name'] = 'i';
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'] = is_array($_loop=$_smarty_tpl->getVariable('c')->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
                              <li <?php if ($_smarty_tpl->getVariable('catselect')->value==$_smarty_tpl->getVariable('c')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['CATID']){?>class="active"<?php }?>><a href="<?php echo $_smarty_tpl->getVariable('baseurl')->value;?>
/categories/<?php echo stripslashes($_smarty_tpl->getVariable('c')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['seo']);?>
"><?php echo stripslashes($_smarty_tpl->getVariable('c')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['name']);?>
</a></li>
                              <?php endfor; endif; ?>
                        </ul>                        
                      </div>
                      <div class="b">&nbsp;</div>
                    </div>
                    
                    <div style="padding-bottom:10px;"></div>
	
                    <div class="suggest">
                      <div class="c">
                        <form action="<?php echo $_smarty_tpl->getVariable('baseurl')->value;?>
/" id="suggest_form" method="post">                        
                        <div class="suggest-form">
                          <h3 style="margin-bottom:4px;"><?php echo $_smarty_tpl->getVariable('lang116')->value;?>
</h3>
                          <label><?php echo $_smarty_tpl->getVariable('lang117')->value;?>
</label>
                          <textarea class="suggestion-box" cols="20" id="suggestion_content" maxlength="80" name="sugcontent" rows="3"></textarea>
                          <br clear="both"/>
                            <div class="suggest-category-select">
                                <div class="in"><?php echo $_smarty_tpl->getVariable('lang119')->value;?>
</div>
                                <div class="category">
                                  <select id="suggestion_category_id" name="sugcat">
                                  <?php unset($_smarty_tpl->tpl_vars['smarty']->value['section']['i']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['name'] = 'i';
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'] = is_array($_loop=$_smarty_tpl->getVariable('c')->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
                                  <li ><a href="<?php echo $_smarty_tpl->getVariable('baseurl')->value;?>
/categories/<?php echo stripslashes($_smarty_tpl->getVariable('c')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['seo']);?>
"><?php echo stripslashes($_smarty_tpl->getVariable('c')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['name']);?>
</a></li>
                                  <option value="<?php echo stripslashes($_smarty_tpl->getVariable('c')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['CATID']);?>
"><?php echo stripslashes($_smarty_tpl->getVariable('c')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['name']);?>
</option>
                                  <?php endfor; endif; ?>
                                  </select>
                                </div>
                            </div>
                          <div class="errors-for-suggestions"></div> 
                          <?php if ($_SESSION['USERID']==''){?>
                          <a href="#" class="login-link" style="float:right; text-decoration:none;" rel="#register-spotlight"><input type="button" value="<?php echo $_smarty_tpl->getVariable('lang118')->value;?>
" style="padding-left:5px;padding-right:5px;padding-top:3px;padding-bottom:3px;float:right;" /></a>
                          <?php }else{ ?>
                          <input type="submit" value="<?php echo $_smarty_tpl->getVariable('lang118')->value;?>
" class="button" style="padding-left:5px;padding-right:5px;padding-top:3px;padding-bottom:3px;float:right;" />  
                          <?php }?>
                          <div class="suggest-progress-indicator-icon-message"><?php echo $_smarty_tpl->getVariable('lang120')->value;?>
</div>                      
                          <input type="hidden" name="sugsub" value="1" />
                        </div>
                        </form>
                        <div class="recent-suggestions">
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
                            <li><span class="user-wants"> <a href="<?php echo $_smarty_tpl->getVariable('baseurl')->value;?>
/<?php echo insert_get_seo_profile(array('value' => 'a', 'username' => stripslashes($_smarty_tpl->getVariable('wants')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['username'])),$_smarty_tpl);?>
"><?php echo stripslashes($_smarty_tpl->getVariable('wants')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['username']);?>
</a> <?php echo $_smarty_tpl->getVariable('lang122')->value;?>
:</span><br/><?php echo stripslashes($_smarty_tpl->getVariable('wants')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['want']);?>

                                <br/>                                
                            </li>
                            <?php endfor; endif; ?>
                          </ul>
                        </div>
                    
                      </div>
                      <div class="b">&nbsp;</div>
                      
                    <div style="padding-top:10px;">
                    <center>
                    <?php echo insert_get_advertisement(array('AID' => 2),$_smarty_tpl);?>

                    </center>
                    </div>
                    </div>
				</div>