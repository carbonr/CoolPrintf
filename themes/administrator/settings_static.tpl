{literal}
<script type="text/javascript" src="{/literal}{$adminurl}/js/ckeditor{literal}/ckeditor.js"></script>
<script type="text/javascript">
//<![CDATA[

	CKEDITOR.replace( 'value',
		{
			fullPage : true
		});

//]]>
</script>
{/literal}
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
                                                            <input name="title1" value="{$static1.title|stripslashes|htmlspecialchars}" class=" required-entry required-entry input-text" type="text"  style="width:700px"/>
                                                        </td>
                                                    </tr>   
                                                    <tr class="hidden">
                                                        <td class="label"><label for="status">Terms Of Use Data </label></td>
                                                        <td class="value">
                                                            <textarea name="value1" class=" textarea ckeditor" type="textarea" >{$static1.value|stripslashes|htmlspecialchars}</textarea>
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
                                                            <input name="title2" value="{$static2.title|stripslashes|htmlspecialchars}" class=" required-entry required-entry input-text" type="text"  style="width:700px"/>
                                                        </td>
                                                    </tr>   
                                                    <tr class="hidden">
                                                        <td class="label"><label for="status">Privacy Policy Data </label></td>
                                                        <td class="value">
                                                            <textarea name="value2" class=" textarea ckeditor" type="textarea" >{$static2.value|stripslashes|htmlspecialchars}</textarea>
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
                                                            <input name="title3" value="{$static3.title|stripslashes|htmlspecialchars}" class=" required-entry required-entry input-text" type="text"  style="width:700px"/>
                                                        </td>
                                                    </tr>   
                                                    <tr class="hidden">
                                                        <td class="label"><label for="status">About Us Data </label></td>
                                                        <td class="value">
                                                            <textarea name="value3" class=" textarea ckeditor" type="textarea" >{$static3.value|stripslashes|htmlspecialchars}</textarea>
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
                                                            <input name="title4" value="{$static4.title|stripslashes|htmlspecialchars}" class=" required-entry required-entry input-text" type="text"  style="width:700px"/>
                                                        </td>
                                                    </tr>   
                                                    <tr class="hidden">
                                                        <td class="label"><label for="status">Advertising Data </label></td>
                                                        <td class="value">
                                                            <textarea name="value4" class=" textarea ckeditor" type="textarea" >{$static4.value|stripslashes|htmlspecialchars}</textarea>
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
                                                            <input name="title5" value="{$static5.title|stripslashes|htmlspecialchars}" class=" required-entry required-entry input-text" type="text"  style="width:700px"/>
                                                        </td>
                                                    </tr>   
                                                    <tr class="hidden">
                                                        <td class="label"><label for="status">Contact Us Data </label></td>
                                                        <td class="value">
                                                            <textarea name="value5" class=" textarea ckeditor" type="textarea" >{$static5.value|stripslashes|htmlspecialchars}</textarea>
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
                            {if $message ne "" OR $error ne ""}
                            	{include file="administrator/show_message.tpl"}
                            {/if}
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