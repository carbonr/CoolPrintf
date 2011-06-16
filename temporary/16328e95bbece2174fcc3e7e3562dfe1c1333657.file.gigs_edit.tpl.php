<?php /* Smarty version Smarty-3.0.7, created on 2011-06-15 15:45:24
         compiled from "/Applications/MAMP/htdocs/fiverr/themes/administrator/gigs_edit.tpl" */ ?>
<?php /*%%SmartyHeaderCode:8877765924df90bd4cdffe6-11507953%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '16328e95bbece2174fcc3e7e3562dfe1c1333657' => 
    array (
      0 => '/Applications/MAMP/htdocs/fiverr/themes/administrator/gigs_edit.tpl',
      1 => 1298414402,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8877765924df90bd4cdffe6-11507953',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_modifier_date_format')) include '/Applications/MAMP/htdocs/fiverr/smarty/libs/plugins/modifier.date_format.php';
?>		<div class="middle" id="anchor-content">
            <div id="page:main-container">
				<div class="columns ">
                
					<div class="side-col" id="page:left">
    					<h3>Gigs</h3>
						
                        <ul id="isoft" class="tabs">
    						<li >
        						<a href="gigs_manage.php" id="isoft_group_1" name="group_1" title="Manage Gigs" class="tab-item-link ">
                                    <span>
                                        <span class="changed" title=""></span>
                                        <span class="error" title=""></span>
                                        Manage Gigs
                                    </span>
        						</a>
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                <div id="isoft_group_1_content" style="display:none;">
                                	<div class="entry-edit">
                                        <div class="entry-edit-head">
                                            <h4 class="icon-head head-edit-form fieldset-legend">Edit Gig</h4>
                                            <div class="form-buttons">

                                            </div>
                                    	</div>

                                        <fieldset id="group_fields4">
                                            <div class="hor-scroll">
                                                <table cellspacing="0" class="form-list">
                                                <tbody>
                                                    <tr class="hidden">
                                                        <td class="label"><label for="name">Gig ID </label></td>
                                                        <td class="value">
                                                        	<?php echo $_smarty_tpl->getVariable('gig')->value['PID'];?>

                                                        </td>
                                                        <td class="scope-label"></td>
                                                            <td><small></small></td>
                                                    </tr>
                                                    <tr class="hidden">
                                                        <td class="label"><label for="USERID">Poster </label></td>
                                                        <td class="value">
                                                        	<select name="USERID" id="USERID">
                                                            <?php $_smarty_tpl->assign('mems' , insert_get_all_mems (array(),$_smarty_tpl), true);?>
                                                            <?php unset($_smarty_tpl->tpl_vars['smarty']->value['section']['i']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['name'] = 'i';
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'] = is_array($_loop=$_smarty_tpl->getVariable('mems')->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
                                                            <option value="<?php echo $_smarty_tpl->getVariable('mems')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['USERID'];?>
" <?php if ($_smarty_tpl->getVariable('gig')->value['USERID']==$_smarty_tpl->getVariable('mems')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['USERID']){?>selected<?php }?>><?php echo stripslashes($_smarty_tpl->getVariable('mems')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['username']);?>
</option>
                                                            <?php endfor; endif; ?>
                                                            </select>
                                                        </td>
                                                        <td class="scope-label">[OWNER OF THE GIG]</td>
                                                        <td><small></small></td>
                                                    </tr>
                                                    <tr class="hidden">
                                                        <td class="label"><label for="status">Title </label></td>
                                                        <td class="value">
                                                        	<input id="gtitle" name="gtitle" value="<?php echo stripslashes($_smarty_tpl->getVariable('gig')->value['gtitle']);?>
" class=" required-entry required-entry input-text" type="text"/>
                                                        </td>
                                                        <td class="scope-label">[TITLE OF THE GIG]</td>
                                                        <td><small></small></td>
                                                    </tr>
                                                    <tr class="hidden">
                                                        <td class="label"><label for="status">Tags </label></td>
                                                        <td class="value">
                                                        	<input id="gtags" name="gtags" value="<?php echo stripslashes($_smarty_tpl->getVariable('gig')->value['gtags']);?>
" class=" required-entry required-entry input-text" type="text"/>
                                                        </td>
                                                        <td class="scope-label">[TAGS OF THE GIG]</td>
                                                        <td><small></small></td>
                                                    </tr>
                                                    <tr class="hidden">
                                                        <td class="label"><label for="name">Description </label></td>
                                                        <td class="value">
                                                        	<textarea id="gdesc" name="gdesc" class=" textarea" type="textarea" ><?php echo stripslashes($_smarty_tpl->getVariable('gig')->value['gdesc']);?>
</textarea>
                                                        </td>
                                                        <td class="scope-label">[DESCRIPTION OF THE GIG]</td>
                                                            <td><small></small></td>
                                                    </tr>
                                                    <tr class="hidden">
                                                        <td class="label"><label for="name">Instructions </label></td>
                                                        <td class="value">
                                                        	<textarea id="ginst" name="ginst" class=" textarea" type="textarea" ><?php echo stripslashes($_smarty_tpl->getVariable('gig')->value['ginst']);?>
</textarea>
                                                        </td>
                                                        <td class="scope-label">[INSTRUCTION FOR THE GIG]</td>
                                                            <td><small></small></td>
                                                    </tr>
                                                    <tr class="hidden">
                                                        <td class="label"><label for="status">Days To Complete </label></td>
                                                        <td class="value">
                                                        	<input id="days" name="days" value="<?php echo stripslashes($_smarty_tpl->getVariable('gig')->value['days']);?>
" class=" required-entry required-entry input-text" type="text"/>
                                                        </td>
                                                        <td class="scope-label">[DAYS NEEDED TO COMPLETE THE GIG]</td>
                                                        <td><small></small></td>
                                                    </tr>
                                                    <tr class="hidden">
                                                        <td class="label"><label for="status">Video </label></td>
                                                        <td class="value">
                                                        	<input id="youtube" name="youtube" value="<?php echo stripslashes($_smarty_tpl->getVariable('gig')->value['youtube']);?>
" class=" required-entry required-entry input-text" type="text"/>
                                                        </td>
                                                        <td class="scope-label">[YOUTUBE URL FOR A VIDEO OF THE GIG]</td>
                                                        <td><small></small></td>
                                                    </tr>
                                                    <tr class="hidden">
                                                        <td class="label"><label for="status">Category </label></td>
                                                        <td class="value">
                                                        	<select name="category" id="category">
                                                            <?php $_smarty_tpl->assign('listallcats' , insert_get_all_cats (array(),$_smarty_tpl), true);?>
                                                            <?php unset($_smarty_tpl->tpl_vars['smarty']->value['section']['i']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['name'] = 'i';
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'] = is_array($_loop=$_smarty_tpl->getVariable('listallcats')->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
                                                            <option value="<?php echo $_smarty_tpl->getVariable('listallcats')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['CATID'];?>
" <?php if ($_smarty_tpl->getVariable('gig')->value['category']==$_smarty_tpl->getVariable('listallcats')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['CATID']){?>selected<?php }?>><?php echo stripslashes($_smarty_tpl->getVariable('listallcats')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['name']);?>
</option>
                                                            <?php endfor; endif; ?>
                                                            </select>
                                                        </td>
                                                        <td class="scope-label">[CATEGORY OF THE GIG]</td>
                                                        <td><small></small></td>
                                                    </tr>
                                                    <tr class="hidden">
                                                        <td class="label"><label for="name">Date Created </label></td>
                                                        <td class="value">
                                                        	<?php echo smarty_modifier_date_format($_smarty_tpl->getVariable('gig')->value['time_added'],"%b %e, %Y");?>

                                                        </td>
                                                        <td class="scope-label"></td>
                                                            <td><small></small></td>
                                                    </tr>
                                                    <tr class="hidden">
                                                        <td class="label"><label for="status">Status </label></td>
                                                        <td class="value">
                                                        	<select name="active" id="active">
                                                            <option value="1" <?php if ($_smarty_tpl->getVariable('gig')->value['active']==1){?>selected<?php }?>>Active</option>
                                                            <option value="0" <?php if ($_smarty_tpl->getVariable('gig')->value['active']==0){?>selected<?php }?>>Not Active</option>
                                                            <option value="2" <?php if ($_smarty_tpl->getVariable('gig')->value['active']==2){?>selected<?php }?>>Suspended</option>
                                                            </select>
                                                        </td>
                                                        <td class="scope-label">[GIG STATUS]</td>
                                                        <td><small></small></td>
                                                    </tr>
                                                    <tr class="hidden">
                                                        <td class="label"><label for="feat">Featured </label></td>
                                                        <td class="value">
                                                        	<select name="feat" id="feat">
                                                            <option value="1" <?php if ($_smarty_tpl->getVariable('gig')->value['feat']==1){?>selected<?php }?>>Yes</option>
                                                            <option value="0" <?php if ($_smarty_tpl->getVariable('gig')->value['feat']==0){?>selected<?php }?>>No</option>
                                                            </select>
                                                        </td>
                                                        <td class="scope-label">[IS THE GIG FEATURED ON THE WEBSITE]</td>
                                                        <td><small></small></td>
                                                    </tr>
                                                    <tr class="hidden">
                                                        <td class="label"><label for="status">Rating </label></td>
                                                        <td class="value">
                                                        	<input id="rating" name="rating" value="<?php echo stripslashes($_smarty_tpl->getVariable('gig')->value['rating']);?>
" class=" required-entry required-entry input-text" type="text"/>
                                                        </td>
                                                        <td class="scope-label">[RATING OF THE GIG]</td>
                                                        <td><small></small></td>
                                                    </tr>
                                                    <tr class="hidden">
                                                        <td class="label"><label for="status">Views </label></td>
                                                        <td class="value">
                                                        	<input id="viewcount" name="viewcount" value="<?php echo stripslashes($_smarty_tpl->getVariable('gig')->value['viewcount']);?>
" class=" required-entry required-entry input-text" type="text"/>
                                                        </td>
                                                        <td class="scope-label">[NUMBER OF TIMES THE GIG WAS VIEWED]</td>
                                                        <td><small></small></td>
                                                    </tr>
                                                    <tr class="hidden">
                                                        <td class="label"><label for="status">Price </label></td>
                                                        <td class="value">
                                                        	<input id="price" name="price" value="<?php echo stripslashes($_smarty_tpl->getVariable('gig')->value['price']);?>
" class=" required-entry required-entry input-text" type="text"/>
                                                        </td>
                                                        <td class="scope-label">[PRICE OF THE GIG, IN DOLLARS]</td>
                                                        <td><small></small></td>
                                                    </tr>
                                                    <tr class="hidden">
                                                        <td class="label"><label for="name">IP Posted With </label></td>
                                                        <td class="value">
                                                        	<?php echo $_smarty_tpl->getVariable('gig')->value['pip'];?>

                                                        </td>
                                                        <td class="scope-label"></td>
                                                            <td><small></small></td>
                                                    </tr>
                                                    <tr class="hidden">
                                                        <td class="label"><label for="name">Photo #1 </label></td>
                                                        <td class="value">
                                                        	<a href="<?php echo $_smarty_tpl->getVariable('purl')->value;?>
/t/<?php echo $_smarty_tpl->getVariable('gig')->value['p1'];?>
?<?php echo time();?>
" target="_blank"><img src="<?php echo $_smarty_tpl->getVariable('purl')->value;?>
/t2/<?php echo $_smarty_tpl->getVariable('gig')->value['p1'];?>
?<?php echo time();?>
" />
                                                        </td>
                                                        <td class="scope-label"></td>
                                                            <td><small></small></td>
                                                    </tr>
                                                    <?php if ($_smarty_tpl->getVariable('gig')->value['p2']!=''){?>
                                                    <tr class="hidden">
                                                        <td class="label"><label for="name">Photo #2 </label></td>
                                                        <td class="value">
                                                        	<a href="<?php echo $_smarty_tpl->getVariable('purl')->value;?>
/t/<?php echo $_smarty_tpl->getVariable('gig')->value['p2'];?>
?<?php echo time();?>
" target="_blank"><img src="<?php echo $_smarty_tpl->getVariable('purl')->value;?>
/t2/<?php echo $_smarty_tpl->getVariable('gig')->value['p2'];?>
?<?php echo time();?>
" />
                                                        </td>
                                                        <td class="scope-label"></td>
                                                            <td><small></small></td>
                                                    </tr>
                                                    <?php }?>
                                                    <?php if ($_smarty_tpl->getVariable('gig')->value['p3']!=''){?>
                                                    <tr class="hidden">
                                                        <td class="label"><label for="name">Photo #3 </label></td>
                                                        <td class="value">
                                                        	<a href="<?php echo $_smarty_tpl->getVariable('purl')->value;?>
/t/<?php echo $_smarty_tpl->getVariable('gig')->value['p3'];?>
?<?php echo time();?>
" target="_blank"><img src="<?php echo $_smarty_tpl->getVariable('purl')->value;?>
/t2/<?php echo $_smarty_tpl->getVariable('gig')->value['p3'];?>
?<?php echo time();?>
" />
                                                        </td>
                                                        <td class="scope-label"></td>
                                                            <td><small></small></td>
                                                    </tr>
                                                    <?php }?>
                                                </tbody>
                                                </table>
                                            </div>
                                        </fieldset>
									</div>
								</div>
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                               
                                
                                
                                
    						</li>
                            
                            <li >
                                <a href="gigs_validate.php" id="isoft_group_2" name="group_2" title="Validate Gigs" class="tab-item-link">
                                	<span>
                                    	<span class="changed" title=""></span>
                                        <span class="error" title=""></span>
                                        Validate Gigs
                                    </span>
                                </a>
                                <div id="isoft_group_2_content" style="display:none;"></div>
                            </li>
    
						</ul>
                        
						<script type="text/javascript">
                            isoftJsTabs = new varienTabs('isoft', 'main_form', 'isoft_group_1', []);
                        </script>
                        
					</div>
                    
					<div class="main-col" id="content">
						<div class="main-col-inner">
							<div id="messages">
                            <?php if ($_smarty_tpl->getVariable('message')->value!=''||$_smarty_tpl->getVariable('error')->value!=''){?>
                            	<?php $_template = new Smarty_Internal_Template("administrator/show_message.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>
                            <?php }?>
                            </div>

                            <div class="content-header">
                               <h3 class="icon-head head-products">Gigs - Edit Gig</h3>
                               <p class="content-buttons form-buttons">
                                    <button  id="id_be616be1324d8ae4516f276d17d34b9c" type="button" class="scalable save" onclick="document.main_form.submit();" style=""><span>Save Changes</span></button>			
                                </p>
                            </div>
                            
                            <form action="gigs_edit.php?PID=<?php echo $_REQUEST['PID'];?>
" method="post" id="main_form" name="main_form" enctype="multipart/form-data">
                            	<input type="hidden" id="submitform" name="submitform" value="1" >
                            	<div style="display:none"></div>
                            </form>
						</div>
					</div>
				</div>

                        </div>
        </div>