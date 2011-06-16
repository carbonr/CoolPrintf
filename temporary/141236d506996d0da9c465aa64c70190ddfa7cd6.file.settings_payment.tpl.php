<?php /* Smarty version Smarty-3.0.7, created on 2011-06-15 07:22:21
         compiled from "/Applications/MAMP/htdocs/fiverr/themes/administrator/settings_payment.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1784546394df895ed7f7694-25571383%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '141236d506996d0da9c465aa64c70190ddfa7cd6' => 
    array (
      0 => '/Applications/MAMP/htdocs/fiverr/themes/administrator/settings_payment.tpl',
      1 => 1289768506,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1784546394df895ed7f7694-25571383',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
		<div class="middle" id="anchor-content">
            <div id="page:main-container">
				<div class="columns ">
                
					<div class="side-col" id="page:left">
    					<h3>Settings</h3>
						
                        <ul id="isoft" class="tabs">
    						<li >
        						<a href="settings_general.php" id="isoft_group_2" name="group_2" title="General Settings" class="tab-item-link ">
                                    <span>
                                        <span class="changed" title=""></span>
                                        <span class="error" title=""></span>
                                        General Settings
                                    </span>
        						</a>
                                <div id="isoft_group_2_content" style="display:none;"></div>
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
                                <div id="isoft_group_11_content" style="display:none;"></div>
                            </li>
                            
                            <li >
        						<a href="settings_payment.php" id="isoft_group_1" name="group_1" title="Payment Settings" class="tab-item-link ">
                                    <span>
                                        <span class="changed" title=""></span>
                                        <span class="error" title=""></span>
                                        Payment Settings
                                    </span>
        						</a>
                                
        						<div id="isoft_group_1_content" style="display:none;">
                                	<div class="entry-edit">
                                        <div class="entry-edit-head">
                                            <h4 class="icon-head head-edit-form fieldset-legend">Payment Settings</h4>
                                            <div class="form-buttons">

                                            </div>
                                    	</div>

                                        <fieldset id="group_fields4">
                                            <div class="hor-scroll">
                                                <table cellspacing="0" class="form-list">
                                                <tbody>                                                    
                                                    <tr class="hidden">
                                                        <td class="label"><label for="status">Paypal E-Mail </label></td>
                                                        <td class="value">
                                                            <input id="paypal_email" name="paypal_email" value="<?php echo $_smarty_tpl->getVariable('paypal_email')->value;?>
" class=" required-entry required-entry input-text" type="text"/>
                                                        </td>
                                                        <td class="scope-label">[E-MAIL ADDRESS PAYPAL PAYMENTS ARE SENT TO]</td>
                                                        <td><small></small></td>
                                                    </tr>
                                                    
                                                    <tr class="hidden">
                                                        <td class="label"><label for="status">Notify E-Mail </label></td>
                                                        <td class="value">
                                                            <input id="notify_email" name="notify_email" value="<?php echo $_smarty_tpl->getVariable('notify_email')->value;?>
" class=" required-entry required-entry input-text" type="text"/>
                                                        </td>
                                                        <td class="scope-label">[E-MAIL ADDRESS PAYPAL NOTIFICATIONS ARE SENT TO]</td>
                                                        <td><small></small></td>
                                                    </tr>
                                                    
                                                    <tr class="hidden">
                                                        <td class="label"><label for="status">Currency </label></td>
                                                        <td class="value">
                                                            <select id="currency" name="currency" class=" required-entry required-entry select" type="select">
                                                            <option value="USD" <?php if ($_smarty_tpl->getVariable('currency')->value=="USD"){?>selected<?php }?>>U.S. Dollars (USD)</option>
                											<option value="CAD" <?php if ($_smarty_tpl->getVariable('currency')->value=="CAD"){?>selected<?php }?>>Canadian Dollars (CAD)</option>
                                                            <option value="EUR" <?php if ($_smarty_tpl->getVariable('currency')->value=="EUR"){?>selected<?php }?>>Euros (EUR)</option>
                											<option value="GBP" <?php if ($_smarty_tpl->getVariable('currency')->value=="GBP"){?>selected<?php }?>>Pounds Sterling (GBP)</option>
                                                            <option value="JPY" <?php if ($_smarty_tpl->getVariable('currency')->value=="JPY"){?>selected<?php }?>>Yen (JPY)</option>
                                                            <option value="AUD" <?php if ($_smarty_tpl->getVariable('currency')->value=="AUD"){?>selected<?php }?>>Australian Dollars (AUD)</option>
                                                            <option value="NZD" <?php if ($_smarty_tpl->getVariable('currency')->value=="NZD"){?>selected<?php }?>>New Zealand Dollar (NZD)</option>
                                                            <option value="CHF" <?php if ($_smarty_tpl->getVariable('currency')->value=="CHF"){?>selected<?php }?>>Swiss Franc (CHF)</option>
                                                            <option value="HKD" <?php if ($_smarty_tpl->getVariable('currency')->value=="HKD"){?>selected<?php }?>>Hong Kong Dollar (HKD)</option>
                                                            <option value="SGD" <?php if ($_smarty_tpl->getVariable('currency')->value=="SGD"){?>selected<?php }?>>Singapore Dollar (SGD)</option>
                                                            <option value="SEK" <?php if ($_smarty_tpl->getVariable('currency')->value=="SEK"){?>selected<?php }?>>Swedish Krona (SEK)</option>
                                                            <option value="DKK" <?php if ($_smarty_tpl->getVariable('currency')->value=="DKK"){?>selected<?php }?>>Danish Krone (DKK)</option>
                                                            <option value="PLN" <?php if ($_smarty_tpl->getVariable('currency')->value=="PLN"){?>selected<?php }?>>Polish Zloty (PLN)</option>
                                                            <option value="NOK" <?php if ($_smarty_tpl->getVariable('currency')->value=="NOK"){?>selected<?php }?>>Norwegian Krone (NOK)</option>
                                                            <option value="HUF" <?php if ($_smarty_tpl->getVariable('currency')->value=="HUF"){?>selected<?php }?>>Hungarian Forint (HUF)</option>
                                                            <option value="CZK" <?php if ($_smarty_tpl->getVariable('currency')->value=="CZK"){?>selected<?php }?>>Czech Koruna (CZK)</option>
                                                            <option value="ILS" <?php if ($_smarty_tpl->getVariable('currency')->value=="ILS"){?>selected<?php }?>>Israeli Shekel (ILS)</option>
                                                            <option value="MXN" <?php if ($_smarty_tpl->getVariable('currency')->value=="MXN"){?>selected<?php }?>>Mexican Peso (MXN)</option>
                                                            <option value="BRL" <?php if ($_smarty_tpl->getVariable('currency')->value=="BRL"){?>selected<?php }?>>Brazilian Real (BRL)</option>
                                                            <option value="MYR" <?php if ($_smarty_tpl->getVariable('currency')->value=="MYR"){?>selected<?php }?>>Malaysian Ringgits (MYR)</option>
                                                            <option value="PHP" <?php if ($_smarty_tpl->getVariable('currency')->value=="PHP"){?>selected<?php }?>>Philippine Pesos (PHP)</option>
                                                            <option value="TWD" <?php if ($_smarty_tpl->getVariable('currency')->value=="TWD"){?>selected<?php }?>>Taiwan New Dollars (TWD)</option>
                                                            <option value="THB" <?php if ($_smarty_tpl->getVariable('currency')->value=="THB"){?>selected<?php }?>>Thai Baht (THB)</option>
                                                            </select>
                                                        </td>
                                                        <td class="scope-label">[CURRENCY USED FOR PAYPAL PAYMENTS]</td>
                                                        <td><small></small></td>
                                                    </tr> 
                                                    
                                                    <tr class="hidden">
                                                        <td class="label"><label for="status">Days Before Withdraw </label></td>
                                                        <td class="value">
                                                            <input id="days_before_withdraw" name="days_before_withdraw" value="<?php echo $_smarty_tpl->getVariable('days_before_withdraw')->value;?>
" class=" required-entry required-entry input-text" type="text"/>
                                                        </td>
                                                        <td class="scope-label">[NUMBER OF DAYS BEFORE REVENUES FROM GIGS CAN BE WITHDRAWN BY SELLERS]</td>
                                                        <td><small></small></td>
                                                    </tr>    
                                                    
                                                    <script language="JavaScript" type="text/JavaScript"> 
													function showP(selObj)
													{
														document.getElementById('p1').style.display="none";
														document.getElementById('p2').style.display="none";
														document.getElementById('p3').style.display="none";
														document.getElementById('p4').style.display="none";
														if(selObj == "0")
														{
															document.getElementById('p1').style.display="";
															document.getElementById('p2').style.display="";
														}
														else if(selObj == "2")
														{
															document.getElementById('p1').style.display="";
															document.getElementById('p3').style.display="";
														}
														else if(selObj == "1")
														{
															document.getElementById('p3').style.display="";
														}
														else if(selObj == "3")
														{
															document.getElementById('p4').style.display="";
														}
													} 
													</script> 
													
                                                    <tr class="hidden">
                                                        <td class="label"><label for="status">Price Mode </label></td>
                                                        <td class="value">
                                                            <select id="price_mode" name="price_mode" class=" required-entry required-entry select" type="select" onChange="showP(this.value);">
                											<option value="0" <?php if ($_smarty_tpl->getVariable('price_mode')->value=="0"){?>selected<?php }?>>Price Set by Admin (Fixed Commission)</option>
                                                            <option value="2" <?php if ($_smarty_tpl->getVariable('price_mode')->value=="2"){?>selected<?php }?>>Price Set by Admin (Percentage Commission)</option>
                                                            <option value="1" <?php if ($_smarty_tpl->getVariable('price_mode')->value=="1"){?>selected<?php }?>>Price Set by Seller (Percentage Commission)</option>
                                                            <option value="3" <?php if ($_smarty_tpl->getVariable('price_mode')->value=="3"){?>selected<?php }?>>Price Set by Seller (Using Admin Price Packs)</option>
                                                            </select>
                                                        </td>
                                                        <td class="scope-label">[PRICE MODE FOR GIGS ON THE WEBSITE]</td>
                                                        <td><small></small></td>
                                                    </tr>
                                                    
                                                    <tr class="hidden" id="p1" <?php if ($_smarty_tpl->getVariable('price_mode')->value!="0"&&$_smarty_tpl->getVariable('price_mode')->value!="2"){?>style="display:none"<?php }?>>
                                                        <td class="label"><label for="status">Price Per Gig </label></td>
                                                        <td class="value">
                                                            <input id="price" name="price" value="<?php echo $_smarty_tpl->getVariable('price')->value;?>
" class=" required-entry required-entry input-text" type="text"/>
                                                        </td>
                                                        <td class="scope-label">[IF PRICE MODE IS SET BY ADMIN THIS PRICE IS CHARGED FOR ALL GIGS]</td>
                                                        <td><small></small></td>
                                                    </tr>
                                                    
                                                    <tr class="hidden" id="p2" <?php if ($_smarty_tpl->getVariable('price_mode')->value!="0"){?>style="display:none"<?php }?>>
                                                        <td class="label"><label for="status">Commission Per Gig </label></td>
                                                        <td class="value">
                                                            <input id="commission" name="commission" value="<?php echo $_smarty_tpl->getVariable('commission')->value;?>
" class=" required-entry required-entry input-text" type="text"/>
                                                        </td>
                                                        <td class="scope-label">[COMMISSION TO TAKE FROM EACH GIG PURCHASED]</td>
                                                        <td><small></small></td>
                                                    </tr>
                                                    
                                                    <tr class="hidden" id="p3" <?php if ($_smarty_tpl->getVariable('price_mode')->value!="2"&&$_smarty_tpl->getVariable('price_mode')->value!="1"){?>style="display:none"<?php }?>>
                                                        <td class="label"><label for="status">Commission Percentage </label></td>
                                                        <td class="value">
                                                            <input id="commission_percent" name="commission_percent" value="<?php echo $_smarty_tpl->getVariable('commission_percent')->value;?>
" class=" required-entry required-entry input-text" type="text"/>
                                                        </td>
                                                        <td class="scope-label">[PERCENTAGE COMMISSION TO TAKE FROM EACH GIG PURCHASED]</td>
                                                        <td><small></small></td>
                                                    </tr>
                                                    
                                                    <tr class="hidden" id="p4" <?php if ($_smarty_tpl->getVariable('price_mode')->value!="3"){?>style="display:none"<?php }?>>
                                                        <td class="label"></td>
                                                        <td class="value">
                                                        <a href="<?php echo $_smarty_tpl->getVariable('adminurl')->value;?>
/settings_packs.php">Click here to manage the price packs.</a>
                                                        </td>
                                                        <td class="scope-label"></td>
                                                        <td><small></small></td>
                                                    </tr>
                                                    
                                                    
                                                    
                                                                                                   
                                                    
                                                </tbody>
                                                </table>
                                            </div>
                                        </fieldset>
									</div>
								</div>
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
                               <h3 class="icon-head head-products">Settings - Payment Settings</h3>
                               <p class="content-buttons form-buttons">
                                    <button  id="id_be616be1324d8ae4516f276d17d34b9c" type="button" class="scalable save" onclick="document.main_form.submit();" style=""><span>Save Changes</span></button>			
                                </p>
                            </div>
                            
                            <form action="settings_payment.php" method="post" id="main_form" name="main_form" enctype="multipart/form-data">
                            	<input type="hidden" id="submitform" name="submitform" value="1" >
                            	<div style="display:none"></div>
                            </form>
						</div>
					</div>
				</div>

                        </div>
        </div>