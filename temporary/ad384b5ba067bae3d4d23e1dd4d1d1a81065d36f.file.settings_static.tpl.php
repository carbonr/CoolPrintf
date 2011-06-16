<?php /* Smarty version Smarty-3.0.7, created on 2011-06-15 07:22:14
         compiled from "/Applications/MAMP/htdocs/fiverr/themes/administrator/settings_static.tpl" */ ?>
<?php /*%%SmartyHeaderCode:782690714df895e6ccd560-58245312%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ad384b5ba067bae3d4d23e1dd4d1d1a81065d36f' => 
    array (
      0 => '/Applications/MAMP/htdocs/fiverr/themes/administrator/settings_static.tpl',
      1 => 1294957844,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '782690714df895e6ccd560-58245312',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>

<script type="text/javascript" src="<?php echo $_smarty_tpl->getVariable('adminurl')->value;?>
/js/ckeditor/ckeditor.js"></script>
<script type="text/javascript">
//<![CDATA[

	CKEDITOR.replace( 'value',
		{
			fullPage : true
		});

//]]>
</script>

		<div class="middle" id="anchor-content">
            <div id="page:main-container">
				<div class="columns ">
                
					<div class="side-col" id="page:left">
    					<h3>Settings</h3>
						
                        <ul id="isoft" class="tabs">
    						<li >
        						<a href="settings_general.php" id="isoft_group_1" name="group_1" title="General Settings" class="tab-item-link ">
                                    <span>
                                        <span class="changed" title=""></span>
                                        <span class="error" title=""></span>
                                        General Settings
                                    </span>
        						</a>
                                <div id="isoft_group_1_content" style="display:none;"></div>
    						</li>
                            
                            <li >
                                <a href="settings_meta.php" id="isoft_group_9" name="group_9" title="Meta Settings" class="tab-item-link">
                                	<span>
                                    	<span class="changed" title=""></span>
                                        <span class="error" title=""></span>
                                        Meta Settings
                                    </span>
                                </a>
                                <div id="isoft_group_9_content" style="display:none;"></div>
                            </li>
                            
                            <li >
                                <a href="settings_static.php" id="isoft_group_11" name="group_11" title="Static Pages" class="tab-item-link">
                                	<span>
                                    	<span class="changed" title=""></span>
                                        <span class="error" title=""></span>
                                        Static Pages
                                    </span>
                                </a>
                                <div id="isoft_group_11_content" style="display:none;">
                                	<div class="entry-edit">
                                        <div class="entry-edit-head">
                                            <h4 class="icon-head head-edit-form fieldset-legend">Static Pages</h4>
                                            <div class="form-buttons">

                                            </div>
                                    	</div>

                                            <div class="hor-scroll">
                                            	<form action="settings_static.php" method="post" id="main_form1" name="main_form1" enctype="multipart/form-data">
                                                <table cellspacing="0" class="form-list">
                                                <tbody>
                                                    <tr class="hidden">
                                                        <td class="label"><label for="status">Terms Of Use Title </label></td>
                                                        <td class="value">
                                                            <input name="title1" value="<?php echo htmlspecialchars(stripslashes($_smarty_tpl->getVariable('static1')->value['title']));?>
" class=" required-entry required-entry input-text" type="text"  style="width:700px"/>
                                                        </td>
                                                    </tr>   
                                                    <tr class="hidden">
                                                        <td class="label"><label for="status">Terms Of Use Data </label></td>
                                                        <td class="value">
                                                            <textarea name="value1" class=" textarea ckeditor" type="textarea" ><?php echo htmlspecialchars(stripslashes($_smarty_tpl->getVariable('static1')->value['value']));?>
</textarea>
                                                        </td>
                                                    </tr>  
                                                    <tr class="hidden">
                                                        <td class="label">
                                                                <button type="button" class="scalable save" onclick="document.main_form1.submit();" style=""><span>Save Changes</span></button>			
                                                        </td>
                                                        <td class="value">
                                                        </td>
                                                    </tr>                                             
                                                </tbody>
                                                </table>
                                                <input type="hidden" id="submitform1" name="submitform1" value="1" >
                                                </form>
                                                
                                                <form action="settings_static.php" method="post" id="main_form2" name="main_form2" enctype="multipart/form-data">
                                                <table cellspacing="0" class="form-list">
                                                <tbody>
                                                    <tr class="hidden">
                                                        <td class="label"><label for="status">Privacy Policy Title </label></td>
                                                        <td class="value">
                                                            <input name="title2" value="<?php echo htmlspecialchars(stripslashes($_smarty_tpl->getVariable('static2')->value['title']));?>
" class=" required-entry required-entry input-text" type="text"  style="width:700px"/>
                                                        </td>
                                                    </tr>   
                                                    <tr class="hidden">
                                                        <td class="label"><label for="status">Privacy Policy Data </label></td>
                                                        <td class="value">
                                                            <textarea name="value2" class=" textarea ckeditor" type="textarea" ><?php echo htmlspecialchars(stripslashes($_smarty_tpl->getVariable('static2')->value['value']));?>
</textarea>
                                                        </td>
                                                    </tr>  
                                                    <tr class="hidden">
                                                        <td class="label">
                                                                <button type="button" class="scalable save" onclick="document.main_form2.submit();" style=""><span>Save Changes</span></button>			
                                                        </td>
                                                        <td class="value">
                                                        </td>
                                                    </tr>                                             
                                                </tbody>
                                                </table>
                                                <input type="hidden" id="submitform2" name="submitform2" value="1" >
                                                </form>
                                                
                                                <form action="settings_static.php" method="post" id="main_form3" name="main_form3" enctype="multipart/form-data">
                                                <table cellspacing="0" class="form-list">
                                                <tbody>
                                                    <tr class="hidden">
                                                        <td class="label"><label for="status">About Us Title </label></td>
                                                        <td class="value">
                                                            <input name="title3" value="<?php echo htmlspecialchars(stripslashes($_smarty_tpl->getVariable('static3')->value['title']));?>
" class=" required-entry required-entry input-text" type="text"  style="width:700px"/>
                                                        </td>
                                                    </tr>   
                                                    <tr class="hidden">
                                                        <td class="label"><label for="status">About Us Data </label></td>
                                                        <td class="value">
                                                            <textarea name="value3" class=" textarea ckeditor" type="textarea" ><?php echo htmlspecialchars(stripslashes($_smarty_tpl->getVariable('static3')->value['value']));?>
</textarea>
                                                        </td>
                                                    </tr>  
                                                    <tr class="hidden">
                                                        <td class="label">
                                                                <button type="button" class="scalable save" onclick="document.main_form3.submit();" style=""><span>Save Changes</span></button>			
                                                        </td>
                                                        <td class="value">
                                                        </td>
                                                    </tr>                                             
                                                </tbody>
                                                </table>
                                                <input type="hidden" id="submitform3" name="submitform3" value="1" >
                                                </form>
                                                
                                                <form action="settings_static.php" method="post" id="main_form4" name="main_form4" enctype="multipart/form-data">
                                                <table cellspacing="0" class="form-list">
                                                <tbody>
                                                    <tr class="hidden">
                                                        <td class="label"><label for="status">Advertising Title </label></td>
                                                        <td class="value">
                                                            <input name="title4" value="<?php echo htmlspecialchars(stripslashes($_smarty_tpl->getVariable('static4')->value['title']));?>
" class=" required-entry required-entry input-text" type="text"  style="width:700px"/>
                                                        </td>
                                                    </tr>   
                                                    <tr class="hidden">
                                                        <td class="label"><label for="status">Advertising Data </label></td>
                                                        <td class="value">
                                                            <textarea name="value4" class=" textarea ckeditor" type="textarea" ><?php echo htmlspecialchars(stripslashes($_smarty_tpl->getVariable('static4')->value['value']));?>
</textarea>
                                                        </td>
                                                    </tr>  
                                                    <tr class="hidden">
                                                        <td class="label">
                                                                <button type="button" class="scalable save" onclick="document.main_form4.submit();" style=""><span>Save Changes</span></button>			
                                                        </td>
                                                        <td class="value">
                                                        </td>
                                                    </tr>                                             
                                                </tbody>
                                                </table>
                                                <input type="hidden" id="submitform4" name="submitform4" value="1" >
                                                </form>
                                                
                                                <form action="settings_static.php" method="post" id="main_form5" name="main_form5" enctype="multipart/form-data">
                                                <table cellspacing="0" class="form-list">
                                                <tbody>
                                                    <tr class="hidden">
                                                        <td class="label"><label for="status">Contact Us Title </label></td>
                                                        <td class="value">
                                                            <input name="title5" value="<?php echo htmlspecialchars(stripslashes($_smarty_tpl->getVariable('static5')->value['title']));?>
" class=" required-entry required-entry input-text" type="text"  style="width:700px"/>
                                                        </td>
                                                    </tr>   
                                                    <tr class="hidden">
                                                        <td class="label"><label for="status">Contact Us Data </label></td>
                                                        <td class="value">
                                                            <textarea name="value5" class=" textarea ckeditor" type="textarea" ><?php echo htmlspecialchars(stripslashes($_smarty_tpl->getVariable('static5')->value['value']));?>
</textarea>
                                                        </td>
                                                    </tr>  
                                                    <tr class="hidden">
                                                        <td class="label">
                                                                <button type="button" class="scalable save" onclick="document.main_form5.submit();" style=""><span>Save Changes</span></button>			
                                                        </td>
                                                        <td class="value">
                                                        </td>
                                                    </tr>                                             
                                                </tbody>
                                                </table>
                                                <input type="hidden" id="submitform5" name="submitform5" value="1" >
                                                </form>
                                            </div>
									</div>
								</div>
                            </li>
                            
                            <li >
                                <a href="settings_payment.php" id="isoft_group_12" name="group_12" title="Payment Settings" class="tab-item-link">
                                	<span>
                                    	<span class="changed" title=""></span>
                                        <span class="error" title=""></span>
                                        Payment Settings
                                    </span>
                                </a>
                                <div id="isoft_group_12_content" style="display:none;"></div>
                            </li>
                            
                            <li >
                                <a href="settings_packs.php" id="isoft_group_5" name="group_5" title="Payment Packs" class="tab-item-link">
                                	<span>
                                    	<span class="changed" title=""></span>
                                        <span class="error" title=""></span>
                                        Payment Packs
                                    </span>
                                </a>
                                <div id="isoft_group_5_content" style="display:none;"></div>
                            </li>
    
						</ul>
                        
						<script type="text/javascript">
                            isoftJsTabs = new varienTabs('isoft', 'main_form', 'isoft_group_11', []);
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
                               <h3 class="icon-head head-products">Settings - Static Pages</h3>
                            </div>
                            
                            <div id="main_form">
                            </div>

						</div>
					</div>
				</div>

                        </div>
        </div>