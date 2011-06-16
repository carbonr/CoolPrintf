		<div class="middle" id="anchor-content">
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
                                                        	{$gig.PID}
                                                        </td>
                                                        <td class="scope-label"></td>
                                                            <td><small></small></td>
                                                    </tr>
                                                    <tr class="hidden">
                                                        <td class="label"><label for="USERID">Poster </label></td>
                                                        <td class="value">
                                                        	<select name="USERID" id="USERID">
                                                            {insert name=get_all_mems assign=mems}
                                                            {section name=i loop=$mems}
                                                            <option value="{$mems[i].USERID}" {if $gig.USERID eq $mems[i].USERID}selected{/if}>{$mems[i].username|stripslashes}</option>
                                                            {/section}
                                                            </select>
                                                        </td>
                                                        <td class="scope-label">[OWNER OF THE GIG]</td>
                                                        <td><small></small></td>
                                                    </tr>
                                                    <tr class="hidden">
                                                        <td class="label"><label for="status">Title </label></td>
                                                        <td class="value">
                                                        	<input id="gtitle" name="gtitle" value="{$gig.gtitle|stripslashes}" class=" required-entry required-entry input-text" type="text"/>
                                                        </td>
                                                        <td class="scope-label">[TITLE OF THE GIG]</td>
                                                        <td><small></small></td>
                                                    </tr>
                                                    <tr class="hidden">
                                                        <td class="label"><label for="status">Tags </label></td>
                                                        <td class="value">
                                                        	<input id="gtags" name="gtags" value="{$gig.gtags|stripslashes}" class=" required-entry required-entry input-text" type="text"/>
                                                        </td>
                                                        <td class="scope-label">[TAGS OF THE GIG]</td>
                                                        <td><small></small></td>
                                                    </tr>
                                                    <tr class="hidden">
                                                        <td class="label"><label for="name">Description </label></td>
                                                        <td class="value">
                                                        	<textarea id="gdesc" name="gdesc" class=" textarea" type="textarea" >{$gig.gdesc|stripslashes}</textarea>
                                                        </td>
                                                        <td class="scope-label">[DESCRIPTION OF THE GIG]</td>
                                                            <td><small></small></td>
                                                    </tr>
                                                    <tr class="hidden">
                                                        <td class="label"><label for="name">Instructions </label></td>
                                                        <td class="value">
                                                        	<textarea id="ginst" name="ginst" class=" textarea" type="textarea" >{$gig.ginst|stripslashes}</textarea>
                                                        </td>
                                                        <td class="scope-label">[INSTRUCTION FOR THE GIG]</td>
                                                            <td><small></small></td>
                                                    </tr>
                                                    <tr class="hidden">
                                                        <td class="label"><label for="status">Days To Complete </label></td>
                                                        <td class="value">
                                                        	<input id="days" name="days" value="{$gig.days|stripslashes}" class=" required-entry required-entry input-text" type="text"/>
                                                        </td>
                                                        <td class="scope-label">[DAYS NEEDED TO COMPLETE THE GIG]</td>
                                                        <td><small></small></td>
                                                    </tr>
                                                    <tr class="hidden">
                                                        <td class="label"><label for="status">Video </label></td>
                                                        <td class="value">
                                                        	<input id="youtube" name="youtube" value="{$gig.youtube|stripslashes}" class=" required-entry required-entry input-text" type="text"/>
                                                        </td>
                                                        <td class="scope-label">[YOUTUBE URL FOR A VIDEO OF THE GIG]</td>
                                                        <td><small></small></td>
                                                    </tr>
                                                    <tr class="hidden">
                                                        <td class="label"><label for="status">Category </label></td>
                                                        <td class="value">
                                                        	<select name="category" id="category">
                                                            {insert name=get_all_cats assign=listallcats}
                                                            {section name=i loop=$listallcats}
                                                            <option value="{$listallcats[i].CATID}" {if $gig.category eq $listallcats[i].CATID}selected{/if}>{$listallcats[i].name|stripslashes}</option>
                                                            {/section}
                                                            </select>
                                                        </td>
                                                        <td class="scope-label">[CATEGORY OF THE GIG]</td>
                                                        <td><small></small></td>
                                                    </tr>
                                                    <tr class="hidden">
                                                        <td class="label"><label for="name">Date Created </label></td>
                                                        <td class="value">
                                                        	{$gig.time_added|date_format:"%b %e, %Y"}
                                                        </td>
                                                        <td class="scope-label"></td>
                                                            <td><small></small></td>
                                                    </tr>
                                                    <tr class="hidden">
                                                        <td class="label"><label for="status">Status </label></td>
                                                        <td class="value">
                                                        	<select name="active" id="active">
                                                            <option value="1" {if $gig.active eq 1}selected{/if}>Active</option>
                                                            <option value="0" {if $gig.active eq 0}selected{/if}>Not Active</option>
                                                            <option value="2" {if $gig.active eq 2}selected{/if}>Suspended</option>
                                                            </select>
                                                        </td>
                                                        <td class="scope-label">[GIG STATUS]</td>
                                                        <td><small></small></td>
                                                    </tr>
                                                    <tr class="hidden">
                                                        <td class="label"><label for="feat">Featured </label></td>
                                                        <td class="value">
                                                        	<select name="feat" id="feat">
                                                            <option value="1" {if $gig.feat eq 1}selected{/if}>Yes</option>
                                                            <option value="0" {if $gig.feat eq 0}selected{/if}>No</option>
                                                            </select>
                                                        </td>
                                                        <td class="scope-label">[IS THE GIG FEATURED ON THE WEBSITE]</td>
                                                        <td><small></small></td>
                                                    </tr>
                                                    <tr class="hidden">
                                                        <td class="label"><label for="status">Rating </label></td>
                                                        <td class="value">
                                                        	<input id="rating" name="rating" value="{$gig.rating|stripslashes}" class=" required-entry required-entry input-text" type="text"/>
                                                        </td>
                                                        <td class="scope-label">[RATING OF THE GIG]</td>
                                                        <td><small></small></td>
                                                    </tr>
                                                    <tr class="hidden">
                                                        <td class="label"><label for="status">Views </label></td>
                                                        <td class="value">
                                                        	<input id="viewcount" name="viewcount" value="{$gig.viewcount|stripslashes}" class=" required-entry required-entry input-text" type="text"/>
                                                        </td>
                                                        <td class="scope-label">[NUMBER OF TIMES THE GIG WAS VIEWED]</td>
                                                        <td><small></small></td>
                                                    </tr>
                                                    <tr class="hidden">
                                                        <td class="label"><label for="status">Price </label></td>
                                                        <td class="value">
                                                        	<input id="price" name="price" value="{$gig.price|stripslashes}" class=" required-entry required-entry input-text" type="text"/>
                                                        </td>
                                                        <td class="scope-label">[PRICE OF THE GIG, IN DOLLARS]</td>
                                                        <td><small></small></td>
                                                    </tr>
                                                    <tr class="hidden">
                                                        <td class="label"><label for="name">IP Posted With </label></td>
                                                        <td class="value">
                                                        	{$gig.pip}
                                                        </td>
                                                        <td class="scope-label"></td>
                                                            <td><small></small></td>
                                                    </tr>
                                                    <tr class="hidden">
                                                        <td class="label"><label for="name">Photo #1 </label></td>
                                                        <td class="value">
                                                        	<a href="{$purl}/t/{$gig.p1}?{$smarty.now}" target="_blank"><img src="{$purl}/t2/{$gig.p1}?{$smarty.now}" />
                                                        </td>
                                                        <td class="scope-label"></td>
                                                            <td><small></small></td>
                                                    </tr>
                                                    {if $gig.p2 != ""}
                                                    <tr class="hidden">
                                                        <td class="label"><label for="name">Photo #2 </label></td>
                                                        <td class="value">
                                                        	<a href="{$purl}/t/{$gig.p2}?{$smarty.now}" target="_blank"><img src="{$purl}/t2/{$gig.p2}?{$smarty.now}" />
                                                        </td>
                                                        <td class="scope-label"></td>
                                                            <td><small></small></td>
                                                    </tr>
                                                    {/if}
                                                    {if $gig.p3 != ""}
                                                    <tr class="hidden">
                                                        <td class="label"><label for="name">Photo #3 </label></td>
                                                        <td class="value">
                                                        	<a href="{$purl}/t/{$gig.p3}?{$smarty.now}" target="_blank"><img src="{$purl}/t2/{$gig.p3}?{$smarty.now}" />
                                                        </td>
                                                        <td class="scope-label"></td>
                                                            <td><small></small></td>
                                                    </tr>
                                                    {/if}
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
                            {if $message ne "" OR $error ne ""}
                            	{include file="administrator/show_message.tpl"}
                            {/if}
                            </div>

                            <div class="content-header">
                               <h3 class="icon-head head-products">Gigs - Edit Gig</h3>
                               <p class="content-buttons form-buttons">
                                    <button  id="id_be616be1324d8ae4516f276d17d34b9c" type="button" class="scalable save" onclick="document.main_form.submit();" style=""><span>Save Changes</span></button>			
                                </p>
                            </div>
                            
                            <form action="gigs_edit.php?PID={$smarty.request.PID}" method="post" id="main_form" name="main_form" enctype="multipart/form-data">
                            	<input type="hidden" id="submitform" name="submitform" value="1" >
                            	<div style="display:none"></div>
                            </form>
						</div>
					</div>
				</div>

                        </div>
        </div>