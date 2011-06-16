<?php /* Smarty version Smarty-3.0.7, created on 2011-06-15 15:36:23
         compiled from "/Applications/MAMP/htdocs/fiverr/themes/new.tpl" */ ?>
<?php /*%%SmartyHeaderCode:18171726404df909b7ca0233-82682915%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6c6240b0e26454d13ec5662e8223e4a1131ee3b7' => 
    array (
      0 => '/Applications/MAMP/htdocs/fiverr/themes/new.tpl',
      1 => 1289855060,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18171726404df909b7ca0233-82682915',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
              <div class="main-wrapper">
                <div id="main">
                  <div class="content">
                  <?php if ($_smarty_tpl->getVariable('message')->value!=''){?>
                    <div class='flash_notice'>
                        <p><?php echo $_smarty_tpl->getVariable('message')->value;?>
</p>
                    </div>
                  <?php }?>
                        <div class="section">
                            <div class="edit-gig">
                            	
                                <script type="text/javascript">                        
                                  $(document).ready(function(){
                                    $("#toggle-additional-visuals").click(function(){
                                      $("#additional-visuals").toggle('slow');
                                      $('html, body').animate({
                                        scrollTop: $("#additional-visuals").offset().top
                                      }, 200);
                                    });
                                    $('textarea').focus(function() { $(this).parent().parent().find('p.tip-text').css('visibility','visible') });
                                    $('textarea').blur(function() { $(this).parent().parent().find('p.tip-text').css('visibility','hidden') });
                                  });
                                </script>
                        		
                                <form action="<?php echo $_smarty_tpl->getVariable('baseurl')->value;?>
/new" class="new_gig" enctype="multipart/form-data" id="new_gig" method="post">
                                    <div class="edit-gig-form-t"></div>
                                    <div class="edit-gig-form edit-gig-form-top">
                                      <div  class="row top">
                                        <div class="side-captions-left"><?php echo $_smarty_tpl->getVariable('lang62')->value;?>
 </div><input class="text-title" id="gig_title" maxlength="200" name="gtitle" size="200" type="text" value="<?php echo stripslashes($_smarty_tpl->getVariable('gtitle')->value);?>
" /><div class="side-captions-right"><?php echo $_smarty_tpl->getVariable('lang63')->value;?>
<?php if ($_smarty_tpl->getVariable('price_mode')->value=="0"||$_smarty_tpl->getVariable('price_mode')->value=="2"){?><?php echo $_smarty_tpl->getVariable('price')->value;?>
</div><?php }elseif($_smarty_tpl->getVariable('price_mode')->value=="1"){?></div><input class="price-title" id="gprice" maxlength="3" name="gprice" size="3" type="text" value="<?php echo stripslashes($_smarty_tpl->getVariable('gprice')->value);?>
" /><?php }elseif($_smarty_tpl->getVariable('price_mode')->value=="3"){?></div><?php $_smarty_tpl->assign('packs' , insert_get_packs (array('value' => 'a'),$_smarty_tpl), true);?><select name="gprice" id="gprice" style="font-size:24px"><?php unset($_smarty_tpl->tpl_vars['smarty']->value['section']['p']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['p']['name'] = 'p';
$_smarty_tpl->tpl_vars['smarty']->value['section']['p']['loop'] = is_array($_loop=$_smarty_tpl->getVariable('packs')->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['p']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['p']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['p']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['p']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['p']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['p']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['p']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['p']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['p']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['p']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['p']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['p']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['p']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['p']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['p']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['p']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['p']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['p']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['p']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['p']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['p']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['p']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['p']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['p']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['p']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['p']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['p']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['p']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['p']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['p']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['p']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['p']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['p']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['p']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['p']['total']);
?><option value="<?php echo stripslashes($_smarty_tpl->getVariable('packs')->value[$_smarty_tpl->getVariable('smarty')->value['section']['p']['index']]['ID']);?>
" <?php if ($_smarty_tpl->getVariable('gprice')->value==stripslashes($_smarty_tpl->getVariable('packs')->value[$_smarty_tpl->getVariable('smarty')->value['section']['p']['index']]['ID'])){?>selected="selected"<?php }?>><?php echo stripslashes($_smarty_tpl->getVariable('packs')->value[$_smarty_tpl->getVariable('smarty')->value['section']['p']['index']]['pprice']);?>
</option><?php endfor; endif; ?></select><?php }?>
                                        <p class="max-chars-top"><?php echo $_smarty_tpl->getVariable('lang64')->value;?>
: <span class="gigtitlemax">200</span> (<?php echo $_smarty_tpl->getVariable('lang65')->value;?>
: <span class="gigtitleused">0</span>)</p>
                                      </div>
                                    </div>
                                    <div class="edit-gig-form">
                                    	<?php if ($_smarty_tpl->getVariable('error')->value!=''){?>
                                    	<div id="errorExplanation">
                                        	<h2><?php echo $_smarty_tpl->getVariable('lang98')->value;?>
</h2>
                                            <p><?php echo $_smarty_tpl->getVariable('lang99')->value;?>
:</p>
                                            <ul>
                                            	<?php echo $_smarty_tpl->getVariable('error')->value;?>

                                            </ul>
                                        </div>
                                        <?php }?>
                                      <div class="row">
                                        <div class="column-l">
                                          <label class="editgigformtitle" for="gig_category"><?php echo $_smarty_tpl->getVariable('lang66')->value;?>
</label>
                                        </div>
                                        <div class="column-r">
                                          <select class="categoryselection" id="gig_category_id" name="gcat"><option value="0"><?php echo $_smarty_tpl->getVariable('lang67')->value;?>
</option>
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
                                            <option value="<?php echo stripslashes($_smarty_tpl->getVariable('c')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['CATID']);?>
" <?php if ($_smarty_tpl->getVariable('gcat')->value==$_smarty_tpl->getVariable('c')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['CATID']){?>selected="selected"<?php }?>><?php echo stripslashes($_smarty_tpl->getVariable('c')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['name']);?>
</option>
                                          <?php endfor; endif; ?>
                                          </select>
                                          <p class="tip-text"><?php echo $_smarty_tpl->getVariable('lang68')->value;?>
</p>
                                        </div>
                                      </div>
                                      <div class="row">
                                        <div class="column-l">
                                          <label class="editgigformtitle" for="gig_description"><?php echo $_smarty_tpl->getVariable('lang69')->value;?>
</label>
                                          <p class="tip-text-static"><?php echo $_smarty_tpl->getVariable('lang70')->value;?>
</p>
                                          <p class="tip-text"><?php echo $_smarty_tpl->getVariable('lang71')->value;?>
<br/><br/><?php echo $_smarty_tpl->getVariable('lang72')->value;?>
</p>
                                        </div>
                                        <div class="column-r">
                                          <textarea class="text" cols="74" id="gig_description" maxlength="450" name="gdesc" rows="10"><?php echo stripslashes($_smarty_tpl->getVariable('gdesc')->value);?>
</textarea>
                                          <p class="max-chars"><?php echo $_smarty_tpl->getVariable('lang64')->value;?>
: <span class="gigdescmax">450</span> (<?php echo $_smarty_tpl->getVariable('lang65')->value;?>
: <span class="gigdescused">0</span>)</p>
                                        </div>
                                      </div>
                                      <div class="row">
                                        <div class="column-l">
                                          <label class="editgigformtitle new-badge" for="gig_order_requirement"><?php echo $_smarty_tpl->getVariable('lang73')->value;?>
</label><br/>
                                          <p class="tip-text-static"><?php echo $_smarty_tpl->getVariable('lang74')->value;?>
</p>
                                          <p class="tip-text"><?php echo $_smarty_tpl->getVariable('lang75')->value;?>
</p>
                                        </div>
                                        <div class="column-r">
                                            <textarea class="text" cols="74" id="gig_order_requirement_attributes_body" maxlength="450" name="ginst" rows="10"><?php echo stripslashes($_smarty_tpl->getVariable('ginst')->value);?>
</textarea>
                                        </div>
                                      </div>
                                      <div class="row">
                                        <div class="column-l">
                                          <label class="editgigformtitle" for="gig_tags"><?php echo $_smarty_tpl->getVariable('lang76')->value;?>
</label>
                                          <p class="tip-text-static"><?php echo $_smarty_tpl->getVariable('lang77')->value;?>
</p>
                                          <p class="tip-text"><?php echo $_smarty_tpl->getVariable('lang78')->value;?>
</p>
                                        </div>
                                        <div class="column-r">
                                          <textarea class="tagstext" cols="74" id="gig_tag_list" maxlength="100" name="gtags" rows="2"><?php echo stripslashes($_smarty_tpl->getVariable('gtags')->value);?>
</textarea>
                                        </div>
                                      </div>
                                      <div class="estimate">
                                        <div class="column-l">
                                          <label class="editgigformtitle" for="gig_expected_duration"><?php echo $_smarty_tpl->getVariable('lang79')->value;?>
</label>
                                        </div>
                                        <div class="column-r">
                                          <input class="text" id="gig_expected_duration" name="gdays" size="2" type="text" value="<?php echo stripslashes($_smarty_tpl->getVariable('gdays')->value);?>
" />
                                          <div><?php echo $_smarty_tpl->getVariable('lang80')->value;?>
</div>
                                        </div>
                                      </div>
                                      <div class="row">
                                        <label class="editgigformtitle"><?php echo $_smarty_tpl->getVariable('lang81')->value;?>
</label>
                                      </div>
                                      <div class="row">
                                        <div class="column-l">
                                          <div class="image-box">
                                            
                                          </div>
                                        </div>
                                        <div class="column-r">
                                          <div class="image-info">
                                            <input class="browsefile" id="gig_photo" name="gphoto" size="20" type="file" />
                                            <ul class="image-tip">
                                              <li><?php echo $_smarty_tpl->getVariable('lang82')->value;?>
</li>
                                              <li><?php echo $_smarty_tpl->getVariable('lang83')->value;?>
</li>
                                              <li><?php echo $_smarty_tpl->getVariable('lang84')->value;?>
</li>
                                              <li><?php echo $_smarty_tpl->getVariable('lang85')->value;?>
</li>
                                              <li><?php echo $_smarty_tpl->getVariable('lang86')->value;?>
</li>
                                            </ul>
                                          </div>
                                        </div>
                                      </div>
                                      <div class="additional-materials">
                                        <input type="button" name="more-photos" value="<?php echo $_smarty_tpl->getVariable('lang87')->value;?>
 / <?php echo $_smarty_tpl->getVariable('lang88')->value;?>
" class="browsefile" id="toggle-additional-visuals" />
                                        <div id="additional-visuals">
                                          <div class="row">
                                            <div class="column-l">
                                              <div class="image-box">
                                                  <img alt="no image" src="<?php echo $_smarty_tpl->getVariable('imageurl')->value;?>
/no_image.jpg?" />
                                              </div>
                                            </div>
                                            <div class="column-r">
                                              <div class="image-info">
                                                <input class="browsefile" id="gig_photo2" name="gphoto2" size="20" type="file" />
                                                <p><?php echo $_smarty_tpl->getVariable('lang86')->value;?>
</p>
                                              </div>
                                            </div>
                                          </div>
                                          <div class="row">
                                            <div class="column-l">
                                              <div class="image-box">
                                                  <img alt="no image" src="<?php echo $_smarty_tpl->getVariable('imageurl')->value;?>
/no_image.jpg?" />
                                              </div>
                                            </div>
                                            <div class="column-r">
                                              <div class="image-info">
                                                <input class="browsefile" id="gig_photo3" name="gphoto3" size="20" type="file" />
                                                <p><?php echo $_smarty_tpl->getVariable('lang86')->value;?>
</p>
                                              </div>
                                            </div>
                                          </div>
                                          <div id="youtube" class="row">
                                            <div class="column-l">
                                              <label class="editgigformtitle" for="gig_youtube_url"><?php echo $_smarty_tpl->getVariable('lang89')->value;?>
</label><br/>(<?php echo $_smarty_tpl->getVariable('lang90')->value;?>
)
                                            </div>
                                            <div class="column-r">
                                              <input class="text" id="gig_youtube_url" name="gyoutube" size="30" type="text" value="<?php echo stripslashes($_smarty_tpl->getVariable('gyoutube')->value);?>
" />
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                      <div class="row">
                                        <input type="submit" value="<?php echo $_smarty_tpl->getVariable('lang46')->value;?>
" class="button" style="padding-left:10px;padding-right:10px;padding-top:5px;padding-bottom:5px;" />
                                        <div class="progress-indicator-icon-gigform"><?php echo $_smarty_tpl->getVariable('lang91')->value;?>
</div>
                                      </div>
                                    </div>
                                    <div class="edit-gig-form-b"></div>
                                    <input type="hidden" name="subform" value="1" />
                                </form>
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