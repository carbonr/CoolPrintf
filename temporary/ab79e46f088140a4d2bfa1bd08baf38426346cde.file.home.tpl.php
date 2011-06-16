<?php /* Smarty version Smarty-3.0.7, created on 2011-06-15 06:27:39
         compiled from "/Applications/MAMP/htdocs/fiverr/themes/administrator/home.tpl" */ ?>
<?php /*%%SmartyHeaderCode:14315906114df8891ba08682-09081109%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ab79e46f088140a4d2bfa1bd08baf38426346cde' => 
    array (
      0 => '/Applications/MAMP/htdocs/fiverr/themes/administrator/home.tpl',
      1 => 1287862614,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14315906114df8891ba08682-09081109',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_modifier_truncate')) include '/Applications/MAMP/htdocs/fiverr/smarty/libs/plugins/modifier.truncate.php';
?>	<div class="middle" id="anchor-content">
    	<div id="page:main-container">
        	
            <div id="messages"></div>
            
            <div class="content-header">
                <table cellspacing="0">
                    <tr>
                        <td><h3 class="head-dashboard">Home</h3></td>
                    </tr>
                </table>
            </div>
            
			<div class="dashboard-container">
    			<p class="switcher">
                	<label for="store_switcher">Website Statistics</label>
				</p>
                  
				<table cellspacing="25" width="100%">
        		<tr>
            		<td>                                                
                        <div class="entry-edit">
                    		<div class="entry-edit-head"><h4>Gig Statistics</h4></div>
                    		<fieldset class="np">
                                <div class="grid np">
                                    <table cellspacing="0" style="border:0;" id="lastOrdersGrid_table">
                                        <col   />
                                        <col   width="100"  />
                                        <thead>
                                            <tr class="headings">
                                                <th  class=" no-link"><span class="nobr">Summary</span></th>
                                                <th  class=" no-link a-center last"><span class="nobr">Results</span></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                            	<td class=" ">Gigs Awaiting Validation</td>
                                                <td class=" a-center last"><?php echo insert_get_total_v1(array(),$_smarty_tpl);?>
</td>
                                        	</tr>
                                            <tr>
                                            	<td class=" ">New Gigs</td>
                                                <td class=" a-center last"><?php echo insert_get_total_v4(array(),$_smarty_tpl);?>
</td>
                                        	</tr>
                                            <tr>
                                            	<td class=" ">Total Gigs</td>
                                                <td class=" a-center last"><?php echo insert_get_total_v5(array(),$_smarty_tpl);?>
</td>
                                        	</tr>
                                        </tbody>
                                    </table>
                                </div>
							</fieldset>
                		</div>
                        
                        <div class="entry-edit">
                    		<div class="entry-edit-head"><h4>Order Statistics</h4></div>
                    		<fieldset class="np">
                                <div class="grid np">
                                    <table cellspacing="0" style="border:0;" id="lastOrdersGrid_table">
                                        <col   />
                                        <col   width="100"  />
                                        <thead>
                                            <tr class="headings">
                                                <th  class=" no-link"><span class="nobr">Summary</span></th>
                                                <th  class=" no-link a-center last"><span class="nobr">Total Orders</span></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                            	<td class=" ">Gig Orders</td>
                                                <td class=" a-center last"><?php echo insert_get_total_com(array('value' => 'var', 'table' => 'orders'),$_smarty_tpl);?>
</td>
                                        	</tr>
                                        </tbody>
                                    </table>
                                </div>
							</fieldset>
                		</div>
                        
                        <div class="entry-edit">
                    		<div class="entry-edit-head"><h4>Want Statistics</h4></div>
                    		<fieldset class="np">
                                <div class="grid np">
                                    <table cellspacing="0" style="border:0;" id="lastOrdersGrid_table">
                                        <col   />
                                        <col   width="100"  />
                                        <thead>
                                            <tr class="headings">
                                                <th  class=" no-link"><span class="nobr">Summary</span></th>
                                                <th  class=" no-link a-center last"><span class="nobr">Results</span></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                            	<td class=" ">Wants Awaiting Validation</td>
                                                <td class=" a-center last"><?php echo insert_get_total_v2(array(),$_smarty_tpl);?>
</td>
                                        	</tr>
                                            <tr>
                                            	<td class=" ">Total Wants</td>
                                                <td class=" a-center last"><?php echo insert_get_total_com(array('value' => 'var', 'table' => 'wants'),$_smarty_tpl);?>
</td>
                                        	</tr>
                                        </tbody>
                                    </table>
                                </div>
							</fieldset>
                		</div>
                
            	</td>
                <td>                                                
                        
                        <div class="entry-edit">
                    		<div class="entry-edit-head"><h4>Category Statistics</h4></div>
                    		<fieldset class="np">
                                <div class="grid np">
                                    <table cellspacing="0" style="border:0;" id="lastOrdersGrid_table">
                                        <col   />
                                        <col   width="100"  />
                                        <thead>
                                            <tr class="headings">
                                                <th  class=" no-link"><span class="nobr">Summary</span></th>
                                                <th  class=" no-link a-center last"><span class="nobr">Total Categories</span></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                            	<td class=" ">Categories</td>
                                                <td class=" a-center last"><?php echo insert_get_total_com(array('value' => 'var', 'table' => 'categories'),$_smarty_tpl);?>
</td>
                                        	</tr>
                                        </tbody>
                                    </table>
                                </div>
							</fieldset>
                		</div>
                        
                        <div class="entry-edit">
                    		<div class="entry-edit-head"><h4>Advertisement Statistics</h4></div>
                    		<fieldset class="np">
                                <div class="grid np">
                                    <table cellspacing="0" style="border:0;" id="lastOrdersGrid_table">
                                        <col   />
                                        <col   width="100"  />
                                        <thead>
                                            <tr class="headings">
                                                <th  class=" no-link"><span class="nobr">Summary</span></th>
                                                <th  class=" no-link a-center last"><span class="nobr">Total Ads</span></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                            	<td class=" ">Standard Advertisements</td>
                                                <td class=" a-center last"><?php echo insert_get_total_com(array('value' => 'var', 'table' => 'advertisements'),$_smarty_tpl);?>
</td>
                                        	</tr>
                                        </tbody>
                                    </table>
                                </div>
							</fieldset>
                		</div>
                        
                        <div class="entry-edit">
                    		<div class="entry-edit-head"><h4>Member Statistics</h4></div>
                    		<fieldset class="np">
                                <div class="grid np">
                                    <table cellspacing="0" style="border:0;" id="lastOrdersGrid_table">
                                        <col   />
                                        <col   width="100"  />
                                        <thead>
                                            <tr class="headings">
                                                <th  class=" no-link"><span class="nobr">Summary</span></th>
                                                <th  class=" no-link a-center last"><span class="nobr">Results</span></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                            	<td class=" ">Total Members</td>
                                                <td class=" a-center last"><?php echo insert_get_total_m3(array(),$_smarty_tpl);?>
</td>
                                        	</tr>
                                        </tbody>
                                    </table>
                                </div>
							</fieldset>
                		</div>
                        
                        <div class="entry-edit">
                    		<div class="entry-edit-head"><h4>Payment Statistics</h4></div>
                    		<fieldset class="np">
                                <div class="grid np">
                                    <table cellspacing="0" style="border:0;" id="lastOrdersGrid_table">
                                        <col   />
                                        <col   width="100"  />
                                        <thead>
                                            <tr class="headings">
                                                <th  class=" no-link"><span class="nobr">Summary</span></th>
                                                <th  class=" no-link a-center last"><span class="nobr">Results</span></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                            	<td class=" ">Total Payments</td>
                                                <td class=" a-center last"><?php echo insert_get_total_com(array('value' => 'var', 'table' => 'payments'),$_smarty_tpl);?>
</td>
                                        	</tr>
                                        </tbody>
                                    </table>
                                </div>
							</fieldset>
                		</div>
                
            	</td>
            	<td>
                        
                        <div class="entry-edit">
                    		<div class="entry-edit-head"><h4>Last 10 Members</h4></div>
                    		<fieldset class="np">
                                <div class="grid np">
                                    <table cellspacing="0" style="border:0;" id="lastOrdersGrid_table">
                                        <col   />
                                        <col   />
                                        <thead>
                                            <tr class="headings">
                                                <th  class=" no-link"><span class="nobr">Username</span></th>
                                                <th  class=" no-link a-center last"><span class="nobr">E-Mail Address</span></th>
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
                                            <tr>
                                            	<td class=" "><?php echo smarty_modifier_truncate(stripslashes($_smarty_tpl->getVariable('results')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['username']),20,"...",true);?>
</td>
                                                <td class=" a-center last"><?php echo smarty_modifier_truncate(stripslashes($_smarty_tpl->getVariable('results')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['email']),50,"...",true);?>
</td>
                                        	</tr>
											<?php endfor; endif; ?>
                                        </tbody>
                                    </table>
                                </div>
							</fieldset>
                		</div>

            </td>
        </tr>
    </table>
</div>
                        </div>
        </div>