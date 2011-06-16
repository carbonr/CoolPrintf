		<div class="middle" id="anchor-content">
            <div id="page:main-container">
				<div class="columns ">
                
					<div class="side-col" id="page:left">
    					<h3>Settings</h3>
						
                        <ul id="isoft" class="tabs">
    						<li >
        						<a href="settings_general.php" id="isoft_group_1" name="group_1" title="Settings" class="tab-item-link ">
                                    <span>
                                        <span class="changed" title=""></span>
                                        <span class="error" title=""></span>
                                        General Settings
                                    </span>
        						</a>
                                
        						<div id="isoft_group_1_content" style="display:none;">
                                	<div class="entry-edit">
                                        <div class="entry-edit-head">
                                            <h4 class="icon-head head-edit-form fieldset-legend">General Settings</h4>
                                            <div class="form-buttons">

                                            </div>
                                    	</div>

                                        <fieldset id="group_fields4">
                                            <div class="hor-scroll">
                                                <table cellspacing="0" class="form-list">
                                                <tbody>
                                                    <tr class="hidden">
                                                        <td class="label"><label for="name">Website Name </label></td>
                                                        <td class="value">
                                                        	<input id="site_name" name="site_name" value="{$site_name}" class=" required-entry required-entry input-text" type="text"/>
                                                        </td>
                                                        <td class="scope-label">[YOUR WEBSITE NAME]</td>
                                                            <td><small></small></td>
                                                    </tr>
                                                    
                                                    <tr class="hidden">
                                                        <td class="label"><label for="name">Website Slogan </label></td>
                                                        <td class="value">
                                                        	<input id="site_slogan" name="site_slogan" value="{$site_slogan}" class=" required-entry required-entry input-text" type="text"/>
                                                        </td>
                                                        <td class="scope-label">[YOUR WEBSITE SLOGAN]</td>
                                                            <td><small></small></td>
                                                    </tr>
                                                    
                                                    <tr class="hidden">
                                                        <td class="label"><label for="status">Website E-Mail </label></td>
                                                        <td class="value">
                                                            <input id="site_email" name="site_email" value="{$site_email}" class=" required-entry required-entry input-text" type="text"/>
                                                        </td>
                                                        <td class="scope-label">[WHERE E-MAILS ARE SENT FROM]</td>
                                                        <td><small></small></td>
                                                    </tr>
                                                    
                                                    <tr class="hidden">
                                                        <td class="label"><label for="status">Gigs Per Page </label></td>
                                                        <td class="value">
                                                            <input id="items_per_page" name="items_per_page" value="{$items_per_page}" class=" required-entry required-entry input-text" type="text"/>
                                                        </td>
                                                        <td class="scope-label">[MAXIMUM GIGS TO LIST PER PAGE]</td>
                                                        <td><small></small></td>
                                                    </tr>
                                                    
                                                    <tr class="hidden">
                                                        <td class="label"><label for="status">Approve Gigs </label></td>
                                                        <td class="value">
                                                            <select id="approve_stories" name="approve_stories" class=" required-entry required-entry select" type="select">
                                                            <option value="1" {if $approve_stories eq "1"}selected{/if}>Yes</option>
                											<option value="0" {if $approve_stories eq "0"}selected{/if}>No</option>
                                                            </select>
                                                        </td>
                                                        <td class="scope-label">[REQUIRE NEWLY POSTED GIGS TO BE APPROVED BEFORE BEING MADE PUBLIC]</td>
                                                        <td><small></small></td>
                                                    </tr>
                                                    
                                                    <tr class="hidden">
                                                        <td class="label"><label for="status">Maximum Wants </label></td>
                                                        <td class="value">
                                                            <input id="max_suggest" name="max_suggest" value="{$max_suggest}" class=" required-entry required-entry input-text" type="text"/>
                                                        </td>
                                                        <td class="scope-label">[MAXIMUM WANTS TO LIST]</td>
                                                        <td><small></small></td>
                                                    </tr>
                                                    
                                                    <tr class="hidden">
                                                        <td class="label"><label for="status">Approve Wants </label></td>
                                                        <td class="value">
                                                            <select id="approve_suggests" name="approve_suggests" class=" required-entry required-entry select" type="select">
                                                            <option value="1" {if $approve_suggests eq "1"}selected{/if}>Yes</option>
                											<option value="0" {if $approve_suggests eq "0"}selected{/if}>No</option>
                                                            </select>
                                                        </td>
                                                        <td class="scope-label">[REQUIRE NEWLY POSTED WANTS TO BE APPROVED BEFORE BEING MADE PUBLIC]</td>
                                                        <td><small></small></td>
                                                    </tr>
                                                    
                                                    <tr class="hidden">
                                                        <td class="label"><label for="status">Maximum Related Gigs </label></td>
                                                        <td class="value">
                                                            <input id="view_rel_max" name="view_rel_max" value="{$view_rel_max}" class=" required-entry required-entry input-text" type="text"/>
                                                        </td>
                                                        <td class="scope-label">[MAXIMUM RELATED GIGS TO LIST ON VIEW PAGE]</td>
                                                        <td><small></small></td>
                                                    </tr>
                                                    
                                                    <tr class="hidden">
                                                        <td class="label"><label for="status">Maximum More Gigs </label></td>
                                                        <td class="value">
                                                            <input id="view_more_max" name="view_more_max" value="{$view_more_max}" class=" required-entry required-entry input-text" type="text"/>
                                                        </td>
                                                        <td class="scope-label">[MAXIMUM MORE GIGS TO LIST ON VIEW PAGE]</td>
                                                        <td><small></small></td>
                                                    </tr>
                                                    
                                                    <tr class="hidden">
                                                        <td class="label"><label for="status">Enable Facebook Connect </label></td>
                                                        <td class="value">
                                                            <select id="enable_fc" name="enable_fc" class=" required-entry required-entry select" type="select">
                                                            <option value="1" {if $enable_fc eq "1"}selected{/if}>Yes</option>
                											<option value="0" {if $enable_fc eq "0"}selected{/if}>No</option>
                                                            </select>
                                                        </td>
                                                        <td class="scope-label">[ALLOW USERS TO SIGN UP AND LOGIN USING THEIR FACEBOOK ACCOUNT]</td>
                                                        <td><small></small></td>
                                                    </tr>
                                                    
                                                    <tr class="hidden">
                                                        <td class="label"><label for="status">Facebook Application ID </label></td>
                                                        <td class="value">
                                                            <input id="FACEBOOK_APP_ID" name="FACEBOOK_APP_ID" value="{$FACEBOOK_APP_ID}" class=" required-entry required-entry input-text" type="text"/>
                                                        </td>
                                                        <td class="scope-label">[FACEBOOK APPLICATION ID YOU GOT WHEN YOU CREATED YOUR FACEBOOK APPLICATION]</td>
                                                        <td><small></small></td>
                                                    </tr>
                                                    
                                                    <tr class="hidden">
                                                        <td class="label"><label for="status">Facebook Secret </label></td>
                                                        <td class="value">
                                                            <input id="FACEBOOK_SECRET" name="FACEBOOK_SECRET" value="{$FACEBOOK_SECRET}" class=" required-entry required-entry input-text" type="text"/>
                                                        </td>
                                                        <td class="scope-label">[FACEBOOK APPLICATION SECRET YOU GOT WHEN YOU CREATED YOUR FACEBOOK APPLICATION]</td>
                                                        <td><small></small></td>
                                                    </tr>
                                                    
                                                    <tr class="hidden">
                                                        <td class="label"><label for="twitter">Twitter Username </label></td>
                                                        <td class="value">
                                                            <input id="twitter" name="twitter" value="{$twitter}" class=" required-entry required-entry input-text" type="text"/>
                                                        </td>
                                                        <td class="scope-label">[YOUR TWITTER ACCOUNT USERNAME]</td>
                                                        <td><small></small></td>
                                                    </tr>
                                                    
                                                    <tr class="hidden">
                                                        <td class="label"><label for="short_urls">Enable Url Shortener </label></td>
                                                        <td class="value">
                                                            <select id="short_urls" name="short_urls" class=" required-entry required-entry select" type="select">
                                                            <option value="1" {if $short_urls eq "1"}selected{/if}>Yes</option>
                											<option value="0" {if $short_urls eq "0"}selected{/if}>No</option>
                                                            </select>
                                                        </td>
                                                        <td class="scope-label">[SHORTENS TWITTER SHARE URL'S]</td>
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
                            isoftJsTabs = new varienTabs('isoft', 'main_form', 'isoft_group_1', []);
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
                               <h3 class="icon-head head-products">Settings - General Settings</h3>
                               <p class="content-buttons form-buttons">
                                    <button  id="id_be616be1324d8ae4516f276d17d34b9c" type="button" class="scalable save" onclick="document.main_form.submit();" style=""><span>Save Changes</span></button>			
                                </p>
                            </div>
                            
                            <form action="settings_general.php" method="post" id="main_form" name="main_form" enctype="multipart/form-data">
                            	<input type="hidden" id="submitform" name="submitform" value="1" >
                            	<div style="display:none"></div>
                            </form>
						</div>
					</div>
				</div>

                        </div>
        </div>