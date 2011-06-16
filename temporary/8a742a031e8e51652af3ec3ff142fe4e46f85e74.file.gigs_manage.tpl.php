<?php /* Smarty version Smarty-3.0.7, created on 2011-06-15 15:45:13
         compiled from "/Applications/MAMP/htdocs/fiverr/themes/administrator/gigs_manage.tpl" */ ?>
<?php /*%%SmartyHeaderCode:70728154df90bc94fdf75-85145902%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8a742a031e8e51652af3ec3ff142fe4e46f85e74' => 
    array (
      0 => '/Applications/MAMP/htdocs/fiverr/themes/administrator/gigs_manage.tpl',
      1 => 1287753498,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '70728154df90bc94fdf75-85145902',
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
                                            <h4 class="icon-head head-edit-form fieldset-legend">Manage Gigs</h4>
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
 Gigs
                    		</td>
                			<td class="export a-right"></td>
            				<td class="filter-actions a-right">
                            	<button  id="id_ffba3971e132ae3d78c160244ea09b39" type="button" class="scalable " onclick="document.location.href='gigs_manage.php'" style=""><span>Reset Filter</span></button>
            					<button  id="id_56a0b03bf0b3be131176f3243cc289ff" type="button" class="scalable task" onclick="document.main_form.submit();" style=""><span>Search</span></button>        
                            </td>
        				</tr>
    					</table>
                        
                        <div class="grid">
							<div class="hor-scroll">
								<table cellspacing="0" class="data" id="customerGrid_table">
                                <col  width="120" />
                                <col   />
                                <col  width="100"  />
                                <col  width="100"  />
                                <col  width="50"  />
                                <col  width="125"  />
	    	    	        	<thead>
	            	                <tr class="headings">
                                        <th ><span class="nobr"><a href="gigs_manage.php?page=<?php echo $_smarty_tpl->getVariable('currentpage')->value;?>
&sortby=PID&sorthow=<?php if ($_smarty_tpl->getVariable('sortby')->value=="PID"){?><?php if ($_smarty_tpl->getVariable('sorthow')->value=="desc"){?>asc<?php }else{ ?>desc<?php }?><?php }else{ ?><?php echo $_smarty_tpl->getVariable('sorthow')->value;?>
<?php }?><?php if ($_smarty_tpl->getVariable('search')->value=="1"){?>&fromid=<?php echo $_smarty_tpl->getVariable('fromid')->value;?>
&toid=<?php echo $_smarty_tpl->getVariable('toid')->value;?>
&title=<?php echo $_smarty_tpl->getVariable('title')->value;?>
&gtitle=<?php echo $_smarty_tpl->getVariable('gtitle')->value;?>
&username=<?php echo $_smarty_tpl->getVariable('username')->value;?>
&active=<?php echo $_smarty_tpl->getVariable('active')->value;?>
<?php }?>" name="id" class="<?php if ($_smarty_tpl->getVariable('sortby')->value=="PID"){?>sort-arrow-<?php if ($_smarty_tpl->getVariable('sorthow')->value=="desc"){?>desc<?php }else{ ?>asc<?php }?><?php }else{ ?>not-sort<?php }?>"><span class="sort-title">ID</span></a></span></th>
                                        <th ><span class="nobr"><a href="gigs_manage.php?page=<?php echo $_smarty_tpl->getVariable('currentpage')->value;?>
&sortby=gtitle&sorthow=<?php if ($_smarty_tpl->getVariable('sortby')->value=="gtitle"){?><?php if ($_smarty_tpl->getVariable('sorthow')->value=="desc"){?>asc<?php }else{ ?>desc<?php }?><?php }else{ ?><?php echo $_smarty_tpl->getVariable('sorthow')->value;?>
<?php }?><?php if ($_smarty_tpl->getVariable('search')->value=="1"){?>&fromid=<?php echo $_smarty_tpl->getVariable('fromid')->value;?>
&toid=<?php echo $_smarty_tpl->getVariable('toid')->value;?>
&title=<?php echo $_smarty_tpl->getVariable('title')->value;?>
&gtitle=<?php echo $_smarty_tpl->getVariable('gtitle')->value;?>
&username=<?php echo $_smarty_tpl->getVariable('username')->value;?>
&active=<?php echo $_smarty_tpl->getVariable('active')->value;?>
<?php }?>" name="gtitle" class="<?php if ($_smarty_tpl->getVariable('sortby')->value=="gtitle"){?>sort-arrow-<?php if ($_smarty_tpl->getVariable('sorthow')->value=="desc"){?>desc<?php }else{ ?>asc<?php }?><?php }else{ ?>not-sort<?php }?>"><span class="sort-title">Title</span></a></span></th>
                                        <th ><span class="nobr"><a href="gigs_manage.php?page=<?php echo $_smarty_tpl->getVariable('currentpage')->value;?>
&sortby=username&sorthow=<?php if ($_smarty_tpl->getVariable('sortby')->value=="username"){?><?php if ($_smarty_tpl->getVariable('sorthow')->value=="desc"){?>asc<?php }else{ ?>desc<?php }?><?php }else{ ?><?php echo $_smarty_tpl->getVariable('sorthow')->value;?>
<?php }?><?php if ($_smarty_tpl->getVariable('search')->value=="1"){?>&fromid=<?php echo $_smarty_tpl->getVariable('fromid')->value;?>
&toid=<?php echo $_smarty_tpl->getVariable('toid')->value;?>
&title=<?php echo $_smarty_tpl->getVariable('title')->value;?>
&gtitle=<?php echo $_smarty_tpl->getVariable('gtitle')->value;?>
&username=<?php echo $_smarty_tpl->getVariable('username')->value;?>
&active=<?php echo $_smarty_tpl->getVariable('active')->value;?>
<?php }?>" name="username" class="<?php if ($_smarty_tpl->getVariable('sortby')->value=="username"){?>sort-arrow-<?php if ($_smarty_tpl->getVariable('sorthow')->value=="desc"){?>desc<?php }else{ ?>asc<?php }?><?php }else{ ?>not-sort<?php }?>"><span class="sort-title">Poster</span></a></span></th>
                                        <th ><span class="nobr"><a href="gigs_manage.php?page=<?php echo $_smarty_tpl->getVariable('currentpage')->value;?>
&sortby=time_added&sorthow=<?php if ($_smarty_tpl->getVariable('sortby')->value=="time_added"){?><?php if ($_smarty_tpl->getVariable('sorthow')->value=="desc"){?>asc<?php }else{ ?>desc<?php }?><?php }else{ ?><?php echo $_smarty_tpl->getVariable('sorthow')->value;?>
<?php }?><?php if ($_smarty_tpl->getVariable('search')->value=="1"){?>&fromid=<?php echo $_smarty_tpl->getVariable('fromid')->value;?>
&toid=<?php echo $_smarty_tpl->getVariable('toid')->value;?>
&title=<?php echo $_smarty_tpl->getVariable('title')->value;?>
&gtitle=<?php echo $_smarty_tpl->getVariable('gtitle')->value;?>
&username=<?php echo $_smarty_tpl->getVariable('username')->value;?>
&active=<?php echo $_smarty_tpl->getVariable('active')->value;?>
<?php }?>" name="time_added" class="<?php if ($_smarty_tpl->getVariable('sortby')->value=="time_added"){?>sort-arrow-<?php if ($_smarty_tpl->getVariable('sorthow')->value=="desc"){?>desc<?php }else{ ?>asc<?php }?><?php }else{ ?>not-sort<?php }?>"><span class="sort-title">Date Created</span></a></span></th>
                                        <th ><span class="nobr"><a href="gigs_manage.php?page=<?php echo $_smarty_tpl->getVariable('currentpage')->value;?>
&sortby=active&sorthow=<?php if ($_smarty_tpl->getVariable('sortby')->value=="active"){?><?php if ($_smarty_tpl->getVariable('sorthow')->value=="desc"){?>asc<?php }else{ ?>desc<?php }?><?php }else{ ?><?php echo $_smarty_tpl->getVariable('sorthow')->value;?>
<?php }?><?php if ($_smarty_tpl->getVariable('search')->value=="1"){?>&fromid=<?php echo $_smarty_tpl->getVariable('fromid')->value;?>
&toid=<?php echo $_smarty_tpl->getVariable('toid')->value;?>
&title=<?php echo $_smarty_tpl->getVariable('title')->value;?>
&gtitle=<?php echo $_smarty_tpl->getVariable('gtitle')->value;?>
&username=<?php echo $_smarty_tpl->getVariable('username')->value;?>
&active=<?php echo $_smarty_tpl->getVariable('active')->value;?>
<?php }?>" name="active" class="<?php if ($_smarty_tpl->getVariable('sortby')->value=="active"){?>sort-arrow-<?php if ($_smarty_tpl->getVariable('sorthow')->value=="desc"){?>desc<?php }else{ ?>asc<?php }?><?php }else{ ?>not-sort<?php }?>"><span class="sort-title">Active</span></a></span></th>
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
                                        <th ><input type="text" name="gtitle" id="gtitle" value="<?php echo stripslashes($_smarty_tpl->getVariable('gtitle')->value);?>
" class="input-text no-changes"/></th>
                                        <th ><input type="text" name="username" id="username" value="<?php echo stripslashes($_smarty_tpl->getVariable('username')->value);?>
" class="input-text no-changes"/></th>
                                        <th></th>
                                        <th ><input type="checkbox" name="active" id="active" <?php if ($_smarty_tpl->getVariable('active')->value=="on"){?>checked="checked"<?php }?>></th>
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
                                        <td class=" a-right "><?php echo $_smarty_tpl->getVariable('results')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['PID'];?>
</td>
                                        <td class=" "><?php echo smarty_modifier_truncate(stripslashes($_smarty_tpl->getVariable('results')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['gtitle']),300,"...",true);?>
</td>
                                        <td class=" "><?php echo smarty_modifier_truncate(stripslashes($_smarty_tpl->getVariable('results')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['username']),20,"...",true);?>
</td>
                                        <td class=" "><?php echo smarty_modifier_date_format($_smarty_tpl->getVariable('results')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['time_added'],"%b %e, %Y");?>
</td>
                                        <td class=" ">
                                        	<form name="a<?php echo $_smarty_tpl->getVariable('results')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['PID'];?>
" id="a<?php echo $_smarty_tpl->getVariable('results')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['PID'];?>
" action="" method="post">
                                            <input type="hidden" name="APID" value="<?php echo $_smarty_tpl->getVariable('results')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['PID'];?>
" />
                                            <input type="hidden" name="asub" value="1" />
                                            <input type="hidden" name="aval" value="<?php echo $_smarty_tpl->getVariable('results')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['active'];?>
" />
                                            </form>
                                        	<a href="javascript: document.a<?php echo $_smarty_tpl->getVariable('results')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['PID'];?>
.submit();"><?php if ($_smarty_tpl->getVariable('results')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['active']=="1"){?>Yes<?php }else{ ?>No<?php }?></a>
                                        </td>
                                        <td class=" last"><a href="gigs_edit.php?PID=<?php echo $_smarty_tpl->getVariable('results')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['PID'];?>
">Edit</a>&nbsp;|&nbsp;<a href="gigs_manage.php?page=<?php echo $_smarty_tpl->getVariable('currentpage')->value;?>
&sortby=<?php echo $_smarty_tpl->getVariable('sortby')->value;?>
&sorthow=<?php echo $_smarty_tpl->getVariable('sorthow')->value;?>
<?php if ($_smarty_tpl->getVariable('search')->value=="1"){?>&fromid=<?php echo $_smarty_tpl->getVariable('fromid')->value;?>
&toid=<?php echo $_smarty_tpl->getVariable('toid')->value;?>
&title=<?php echo $_smarty_tpl->getVariable('title')->value;?>
&gtitle=<?php echo $_smarty_tpl->getVariable('gtitle')->value;?>
&username=<?php echo $_smarty_tpl->getVariable('username')->value;?>
&active=<?php echo $_smarty_tpl->getVariable('active')->value;?>
<?php }?>&delete=1&PID=<?php echo $_smarty_tpl->getVariable('results')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['PID'];?>
">Delete</a></td>
                                	</tr>
                                    <?php endfor; endif; ?>
                                    <tr>
                                    	<td colspan="6">
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
                               <h3 class="icon-head head-products">Gigs - Manage Gigs</h3>
                            </div>
                            
                            <form action="gigs_manage.php" method="post" id="main_form" name="main_form" enctype="multipart/form-data">
                            	<input type="hidden" id="submitform" name="submitform" value="1" >
                            	<div style="display:none"></div>
                            </form>
						</div>
					</div>
				</div>

                        </div>
        </div>