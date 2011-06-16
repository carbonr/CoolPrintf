<?php /* Smarty version Smarty-3.0.7, created on 2011-06-15 07:39:05
         compiled from "/Applications/MAMP/htdocs/fiverr/themes/administrator/members_manage.tpl" */ ?>
<?php /*%%SmartyHeaderCode:13325398244df899d9157c97-80519786%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1a1b301d7c71cbbed4c1445cf0f7a2773e654447' => 
    array (
      0 => '/Applications/MAMP/htdocs/fiverr/themes/administrator/members_manage.tpl',
      1 => 1297035426,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13325398244df899d9157c97-80519786',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_modifier_truncate')) include '/Applications/MAMP/htdocs/fiverr/smarty/libs/plugins/modifier.truncate.php';
if (!is_callable('smarty_modifier_date_format')) include '/Applications/MAMP/htdocs/fiverr/smarty/libs/plugins/modifier.date_format.php';
?>		<div class="middle" id="anchor-content">
            <div id="page:main-container">
				<div class="columns ">
                
					<div class="side-col" id="page:left">
    					<h3>Members</h3>
						
                        <ul id="isoft" class="tabs">
    						<li >
        						<a href="members_manage.php" id="isoft_group_1" name="group_1" title="Manage Members" class="tab-item-link ">
                                    <span>
                                        <span class="changed" title=""></span>
                                        <span class="error" title=""></span>
                                        Manage Members
                                    </span>
        						</a>
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                <div id="isoft_group_1_content" style="display:none;">
                                	<div class="entry-edit">
                                        <div class="entry-edit-head">
                                            <h4 class="icon-head head-edit-form fieldset-legend">Manage Members</h4>
                                            <div class="form-buttons">

                                            </div>
                                    	</div>

                                        <div>
        			<div id="customerGrid">
        				<table cellspacing="0" class="actions">
        				<tr>
                    		<td class="pager">
                            	Showing <?php if ($_smarty_tpl->getVariable('total')->value>0){?><?php echo $_smarty_tpl->getVariable('beginning')->value;?>
 - <?php echo $_smarty_tpl->getVariable('ending')->value;?>
 of <?php }?><?php echo $_smarty_tpl->getVariable('total')->value;?>
 Members
                    		</td>
                			<td class="export a-right"></td>
            				<td class="filter-actions a-right">
                            	<button  id="id_ffba3971e132ae3d78c160244ea09b39" type="button" class="scalable " onclick="document.location.href='members_manage.php'" style=""><span>Reset Filter</span></button>
            					<button  id="id_56a0b03bf0b3be131176f3243cc289ff" type="button" class="scalable task" onclick="document.main_form.submit();" style=""><span>Search</span></button>        
                            </td>
        				</tr>
    					</table>
                        
                        <div class="grid">
							<div class="hor-scroll">
								<table cellspacing="0" class="data" id="customerGrid_table">
                                <col  width="50"  width="100px"  />
                                <col  width="150"  />
                                <col   />
                                <col  width="50"  />
                                <col  width="100"  />
                                <col  width="50"  />
                                <col  width="200"  />
	    	    	        	<thead>
	            	                <tr class="headings">
                                        <th ><span class="nobr"><a href="members_manage.php?page=<?php echo $_smarty_tpl->getVariable('currentpage')->value;?>
&sortby=USERID&sorthow=<?php if ($_smarty_tpl->getVariable('sortby')->value=="USERID"){?><?php if ($_smarty_tpl->getVariable('sorthow')->value=="desc"){?>asc<?php }else{ ?>desc<?php }?><?php }else{ ?><?php echo $_smarty_tpl->getVariable('sorthow')->value;?>
<?php }?><?php if ($_smarty_tpl->getVariable('search')->value=="1"){?>&fromid=<?php echo $_smarty_tpl->getVariable('fromid')->value;?>
&toid=<?php echo $_smarty_tpl->getVariable('toid')->value;?>
&username=<?php echo $_smarty_tpl->getVariable('username')->value;?>
&email=<?php echo $_smarty_tpl->getVariable('email')->value;?>
&verified=<?php echo $_smarty_tpl->getVariable('verified')->value;?>
&familyfilter=<?php echo $_smarty_tpl->getVariable('familyfilter')->value;?>
&featured=<?php echo $_smarty_tpl->getVariable('featured')->value;?>
&status=<?php echo $_smarty_tpl->getVariable('status')->value;?>
<?php }?>" name="id" class="<?php if ($_smarty_tpl->getVariable('sortby')->value=="USERID"){?>sort-arrow-<?php if ($_smarty_tpl->getVariable('sorthow')->value=="desc"){?>desc<?php }else{ ?>asc<?php }?><?php }else{ ?>not-sort<?php }?>"><span class="sort-title">ID</span></a></span></th>
                                        <th ><span class="nobr"><a href="members_manage.php?page=<?php echo $_smarty_tpl->getVariable('currentpage')->value;?>
&sortby=username&sorthow=<?php if ($_smarty_tpl->getVariable('sortby')->value=="username"){?><?php if ($_smarty_tpl->getVariable('sorthow')->value=="desc"){?>asc<?php }else{ ?>desc<?php }?><?php }else{ ?><?php echo $_smarty_tpl->getVariable('sorthow')->value;?>
<?php }?><?php if ($_smarty_tpl->getVariable('search')->value=="1"){?>&fromid=<?php echo $_smarty_tpl->getVariable('fromid')->value;?>
&toid=<?php echo $_smarty_tpl->getVariable('toid')->value;?>
&username=<?php echo $_smarty_tpl->getVariable('username')->value;?>
&email=<?php echo $_smarty_tpl->getVariable('email')->value;?>
&verified=<?php echo $_smarty_tpl->getVariable('verified')->value;?>
&familyfilter=<?php echo $_smarty_tpl->getVariable('familyfilter')->value;?>
&featured=<?php echo $_smarty_tpl->getVariable('featured')->value;?>
&status=<?php echo $_smarty_tpl->getVariable('status')->value;?>
<?php }?>" name="username" class="<?php if ($_smarty_tpl->getVariable('sortby')->value=="username"){?>sort-arrow-<?php if ($_smarty_tpl->getVariable('sorthow')->value=="desc"){?>desc<?php }else{ ?>asc<?php }?><?php }else{ ?>not-sort<?php }?>"><span class="sort-title">Username</span></a></span></th>
                                        <th ><span class="nobr"><a href="members_manage.php?page=<?php echo $_smarty_tpl->getVariable('currentpage')->value;?>
&sortby=email&sorthow=<?php if ($_smarty_tpl->getVariable('sortby')->value=="email"){?><?php if ($_smarty_tpl->getVariable('sorthow')->value=="desc"){?>asc<?php }else{ ?>desc<?php }?><?php }else{ ?><?php echo $_smarty_tpl->getVariable('sorthow')->value;?>
<?php }?><?php if ($_smarty_tpl->getVariable('search')->value=="1"){?>&fromid=<?php echo $_smarty_tpl->getVariable('fromid')->value;?>
&toid=<?php echo $_smarty_tpl->getVariable('toid')->value;?>
&username=<?php echo $_smarty_tpl->getVariable('username')->value;?>
&email=<?php echo $_smarty_tpl->getVariable('email')->value;?>
&verified=<?php echo $_smarty_tpl->getVariable('verified')->value;?>
&familyfilter=<?php echo $_smarty_tpl->getVariable('familyfilter')->value;?>
&featured=<?php echo $_smarty_tpl->getVariable('featured')->value;?>
&status=<?php echo $_smarty_tpl->getVariable('status')->value;?>
<?php }?>" name="email" class="<?php if ($_smarty_tpl->getVariable('sortby')->value=="email"){?>sort-arrow-<?php if ($_smarty_tpl->getVariable('sorthow')->value=="desc"){?>desc<?php }else{ ?>asc<?php }?><?php }else{ ?>not-sort<?php }?>"><span class="sort-title">E-Mail</span></a></span></th>
                                        <th ><span class="nobr"><a href="members_manage.php?page=<?php echo $_smarty_tpl->getVariable('currentpage')->value;?>
&sortby=verified&sorthow=<?php if ($_smarty_tpl->getVariable('sortby')->value=="verified"){?><?php if ($_smarty_tpl->getVariable('sorthow')->value=="desc"){?>asc<?php }else{ ?>desc<?php }?><?php }else{ ?><?php echo $_smarty_tpl->getVariable('sorthow')->value;?>
<?php }?><?php if ($_smarty_tpl->getVariable('search')->value=="1"){?>&fromid=<?php echo $_smarty_tpl->getVariable('fromid')->value;?>
&toid=<?php echo $_smarty_tpl->getVariable('toid')->value;?>
&username=<?php echo $_smarty_tpl->getVariable('username')->value;?>
&email=<?php echo $_smarty_tpl->getVariable('email')->value;?>
&verified=<?php echo $_smarty_tpl->getVariable('verified')->value;?>
&familyfilter=<?php echo $_smarty_tpl->getVariable('familyfilter')->value;?>
&featured=<?php echo $_smarty_tpl->getVariable('featured')->value;?>
&status=<?php echo $_smarty_tpl->getVariable('status')->value;?>
<?php }?>" name="verified" class="<?php if ($_smarty_tpl->getVariable('sortby')->value=="verified"){?>sort-arrow-<?php if ($_smarty_tpl->getVariable('sorthow')->value=="desc"){?>desc<?php }else{ ?>asc<?php }?><?php }else{ ?>not-sort<?php }?>"><span class="sort-title">Verified</span></a></span></th>
                                        <th ><span class="nobr"><a href="members_manage.php?page=<?php echo $_smarty_tpl->getVariable('currentpage')->value;?>
&sortby=addtime&sorthow=<?php if ($_smarty_tpl->getVariable('sortby')->value=="addtime"){?><?php if ($_smarty_tpl->getVariable('sorthow')->value=="desc"){?>asc<?php }else{ ?>desc<?php }?><?php }else{ ?><?php echo $_smarty_tpl->getVariable('sorthow')->value;?>
<?php }?><?php if ($_smarty_tpl->getVariable('search')->value=="1"){?>&fromid=<?php echo $_smarty_tpl->getVariable('fromid')->value;?>
&toid=<?php echo $_smarty_tpl->getVariable('toid')->value;?>
&username=<?php echo $_smarty_tpl->getVariable('username')->value;?>
&email=<?php echo $_smarty_tpl->getVariable('email')->value;?>
&verified=<?php echo $_smarty_tpl->getVariable('verified')->value;?>
&familyfilter=<?php echo $_smarty_tpl->getVariable('familyfilter')->value;?>
&featured=<?php echo $_smarty_tpl->getVariable('featured')->value;?>
&status=<?php echo $_smarty_tpl->getVariable('status')->value;?>
<?php }?>" name="addtime" class="<?php if ($_smarty_tpl->getVariable('sortby')->value=="addtime"){?>sort-arrow-<?php if ($_smarty_tpl->getVariable('sorthow')->value=="desc"){?>desc<?php }else{ ?>asc<?php }?><?php }else{ ?>not-sort<?php }?>"><span class="sort-title">Date Joined</span></a></span></th>
                                        <th ><span class="nobr"><a href="members_manage.php?page=<?php echo $_smarty_tpl->getVariable('currentpage')->value;?>
&sortby=status&sorthow=<?php if ($_smarty_tpl->getVariable('sortby')->value=="status"){?><?php if ($_smarty_tpl->getVariable('sorthow')->value=="desc"){?>asc<?php }else{ ?>desc<?php }?><?php }else{ ?><?php echo $_smarty_tpl->getVariable('sorthow')->value;?>
<?php }?><?php if ($_smarty_tpl->getVariable('search')->value=="1"){?>&fromid=<?php echo $_smarty_tpl->getVariable('fromid')->value;?>
&toid=<?php echo $_smarty_tpl->getVariable('toid')->value;?>
&username=<?php echo $_smarty_tpl->getVariable('username')->value;?>
&email=<?php echo $_smarty_tpl->getVariable('email')->value;?>
&verified=<?php echo $_smarty_tpl->getVariable('verified')->value;?>
&familyfilter=<?php echo $_smarty_tpl->getVariable('familyfilter')->value;?>
&featured=<?php echo $_smarty_tpl->getVariable('featured')->value;?>
&status=<?php echo $_smarty_tpl->getVariable('status')->value;?>
<?php }?>" name="status" class="<?php if ($_smarty_tpl->getVariable('sortby')->value=="status"){?>sort-arrow-<?php if ($_smarty_tpl->getVariable('sorthow')->value=="desc"){?>desc<?php }else{ ?>asc<?php }?><?php }else{ ?>not-sort<?php }?>"><span class="sort-title">Active</span></a></span></th>
                                        <th  class=" no-link last"><span class="nobr">Action</span></th>
	                	            </tr>
	            	            	<tr class="filter">
                                        <th >
                                            <div class="range">
                                                <div class="range-line">
                                                    <span class="label">From:</span> 
                                                    <input type="text" name="fromid" id="fromid" value="<?php echo $_smarty_tpl->getVariable('fromid')->value;?>
" class="input-text no-changes"/>
                                                </div>
                                                <div class="range-line">
                                                    <span class="label">To : </span>
                                                    <input type="text" name="toid" id="toid" value="<?php echo $_smarty_tpl->getVariable('toid')->value;?>
" class="input-text no-changes"/>
                                                </div>
                                            </div>
                                        </th>
                                        <th ><input type="text" name="username" id="username" value="<?php echo stripslashes($_smarty_tpl->getVariable('username')->value);?>
" class="input-text no-changes"/></th>
                                        <th ><input type="text" name="email" id="email" value="<?php echo stripslashes($_smarty_tpl->getVariable('email')->value);?>
" class="input-text no-changes"/></th>
                                        <th ><input type="checkbox" name="verified" id="verified" <?php if ($_smarty_tpl->getVariable('verified')->value=="on"){?>checked="checked"<?php }?>></th>
                                        <th></th>
                                        <th ><input type="checkbox" name="status" id="status" <?php if ($_smarty_tpl->getVariable('status')->value=="on"){?>checked="checked"<?php }?>></th>
                                        <th  class=" no-link last">
                                            <div style="width: 100%;">&nbsp;</div>
                                        </th>
	                	            </tr>
	            	        	</thead>
	    	    	    		<tbody>
                                	<?php unset($_smarty_tpl->tpl_vars['smarty']->value['section']['i']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['name'] = 'i';
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'] = is_array($_loop=$_smarty_tpl->getVariable('results')->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
                                    <tr id="" >
                                        <td align="center"><?php echo $_smarty_tpl->getVariable('results')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['USERID'];?>
</td>
                                        <td class=" "><?php echo smarty_modifier_truncate(stripslashes($_smarty_tpl->getVariable('results')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['username']),30,"...",true);?>
</td>
                                        <td class=" "><?php echo smarty_modifier_truncate(stripslashes($_smarty_tpl->getVariable('results')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['email']),150,"...",true);?>
</td>
                                        <td class=" ">
                                        	<form name="v<?php echo $_smarty_tpl->getVariable('results')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['USERID'];?>
" id="v<?php echo $_smarty_tpl->getVariable('results')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['USERID'];?>
" action="" method="post">
                                            <input type="hidden" name="VUSERID" value="<?php echo $_smarty_tpl->getVariable('results')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['USERID'];?>
" />
                                            <input type="hidden" name="vsub" value="1" />
                                            <input type="hidden" name="vval" value="<?php echo $_smarty_tpl->getVariable('results')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['verified'];?>
" />
                                            </form>
                                        	<a href="javascript: document.v<?php echo $_smarty_tpl->getVariable('results')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['USERID'];?>
.submit();"><?php if ($_smarty_tpl->getVariable('results')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['verified']=="1"){?>Yes<?php }else{ ?>No<?php }?></a>
                                        </td>
                                        <td class=" "><?php echo smarty_modifier_date_format($_smarty_tpl->getVariable('results')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['addtime'],"%b %e, %Y");?>
</td>
                                        <td class=" ">
                                        	<form name="a<?php echo $_smarty_tpl->getVariable('results')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['USERID'];?>
" id="a<?php echo $_smarty_tpl->getVariable('results')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['USERID'];?>
" action="" method="post">
                                            <input type="hidden" name="AUSERID" value="<?php echo $_smarty_tpl->getVariable('results')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['USERID'];?>
" />
                                            <input type="hidden" name="asub" value="1" />
                                            <input type="hidden" name="aval" value="<?php echo $_smarty_tpl->getVariable('results')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['status'];?>
" />
                                            </form>
                                        	<a href="javascript: document.a<?php echo $_smarty_tpl->getVariable('results')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['USERID'];?>
.submit();"><?php if ($_smarty_tpl->getVariable('results')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['status']=="1"){?>Yes<?php }else{ ?>No<?php }?></a>
                                        </td>
                                        <td class=" last"><a href="members_edit.php?USERID=<?php echo $_smarty_tpl->getVariable('results')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['USERID'];?>
">Edit</a>&nbsp;|&nbsp;<a href="members_manage.php?page=<?php echo $_smarty_tpl->getVariable('currentpage')->value;?>
&sortby=<?php echo $_smarty_tpl->getVariable('sortby')->value;?>
&sorthow=<?php echo $_smarty_tpl->getVariable('sorthow')->value;?>
<?php if ($_smarty_tpl->getVariable('search')->value=="1"){?>&fromid=<?php echo $_smarty_tpl->getVariable('fromid')->value;?>
&toid=<?php echo $_smarty_tpl->getVariable('toid')->value;?>
&username=<?php echo $_smarty_tpl->getVariable('username')->value;?>
&email=<?php echo $_smarty_tpl->getVariable('email')->value;?>
&verified=<?php echo $_smarty_tpl->getVariable('verified')->value;?>
&familyfilter=<?php echo $_smarty_tpl->getVariable('familyfilter')->value;?>
&featured=<?php echo $_smarty_tpl->getVariable('featured')->value;?>
&status=<?php echo $_smarty_tpl->getVariable('status')->value;?>
<?php }?>&delete=1&USERID=<?php echo $_smarty_tpl->getVariable('results')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['USERID'];?>
">Delete</a>&nbsp;|&nbsp;<a href="members_login.php?USERID=<?php echo $_smarty_tpl->getVariable('results')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['USERID'];?>
" target="_blank">Login as <?php echo stripslashes($_smarty_tpl->getVariable('results')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['username']);?>
</a></td>
                                	</tr>
                                    <?php endfor; endif; ?>
                                    <tr>
                                    	<td colspan="7">
                                        <?php echo $_smarty_tpl->getVariable('pagelinks')->value;?>

                                        </td>
                                    </tr>
	    	    	    		</tbody>
								</table>
                            </div>
                        </div>
					</div>
				</div>
									</div>
								</div>
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                               
                                
                                
                                
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
                               <h3 class="icon-head head-products">Members - Manage Members</h3>
                            </div>
                            
                            <form action="members_manage.php" method="post" id="main_form" name="main_form" enctype="multipart/form-data">
                            	<input type="hidden" id="submitform" name="submitform" value="1" >
                            	<div style="display:none"></div>
                            </form>
						</div>
					</div>
				</div>

                        </div>
        </div>