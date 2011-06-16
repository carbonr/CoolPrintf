		<div class="middle" id="anchor-content">
            <div id="page:main-container">
				<div class="columns ">
                
					<div class="side-col" id="page:left">
    					<h3>Wants</h3>
						
                        <ul id="isoft" class="tabs">
                        	<li >
                                <a href="wants_manage.php" id="isoft_group_2" name="group_2" title="Manage Wants" class="tab-item-link">
                                	<span>
                                    	<span class="changed" title=""></span>
                                        <span class="error" title=""></span>
                                        Manage Wants
                                    </span>
                                </a>
                                <div id="isoft_group_2_content" style="display:none;"></div>
                            </li>
                            
    						<li >
        						<a href="wants_validate.php" id="isoft_group_1" name="group_1" title="Validate Wants" class="tab-item-link ">
                                    <span>
                                        <span class="changed" title=""></span>
                                        <span class="error" title=""></span>
                                        Validate Wants
                                    </span>
        						</a>
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                <div id="isoft_group_1_content" style="display:none;">
                                	<div class="entry-edit">
                                        <div class="entry-edit-head">
                                            <h4 class="icon-head head-edit-form fieldset-legend">Wants</h4>
                                            <div class="form-buttons">

                                            </div>
                                    	</div>

                                        <div>
        			<div id="customerGrid">
        				<table cellspacing="0" class="actions">
        				<tr>
                    		<td class="pager">
                            	Showing {$beginning} - {$ending} of {$total} Wants
                    		</td>
                			<td class="export a-right"></td>
            				<td class="filter-actions a-right">
                            	<button  id="id_ffba3971e132ae3d78c160244ea09b39" type="button" class="scalable " onclick="document.location.href='wants_validate.php'" style=""><span>Reset Filter</span></button>
            					<button  id="id_56a0b03bf0b3be131176f3243cc289ff" type="button" class="scalable task" onclick="document.main_form.submit();" style=""><span>Search</span></button>        
                            </td>
        				</tr>
    					</table>
                        
                        <div class="grid">
							<div class="hor-scroll">
								<table cellspacing="0" class="data" id="customerGrid_table">
                                <col  width="50"  width="100px"  />
                                <col   />
                                <col  width="150"  />
                                <col  width="300"  />
	    	    	        	<thead>
	            	                <tr class="headings">
                                        <th ><span class="nobr"><a href="wants_validate.php?page={$currentpage}&sortby=WID&sorthow={if $sortby eq "WID"}{if $sorthow eq "desc"}asc{else}desc{/if}{else}{$sorthow}{/if}{if $search eq "1"}&fromid={$fromid}&toid={$toid}&want={$want}&username={$username}&status={$status}{/if}" name="id" class="{if $sortby eq "WID"}sort-arrow-{if $sorthow eq "desc"}desc{else}asc{/if}{else}not-sort{/if}"><span class="sort-title">ID</span></a></span></th>
                                        <th ><span class="nobr"><a href="wants_validate.php?page={$currentpage}&sortby=want&sorthow={if $sortby eq "want"}{if $sorthow eq "desc"}asc{else}desc{/if}{else}{$sorthow}{/if}{if $search eq "1"}&fromid={$fromid}&toid={$toid}&want={$want}&username={$username}&status={$status}{/if}" name="want" class="{if $sortby eq "want"}sort-arrow-{if $sorthow eq "desc"}desc{else}asc{/if}{else}not-sort{/if}"><span class="sort-title">Want</span></a></span></th>
                                        <th ><span class="nobr"><a href="wants_validate.php?page={$currentpage}&sortby=username&sorthow={if $sortby eq "username"}{if $sorthow eq "desc"}asc{else}desc{/if}{else}{$sorthow}{/if}{if $search eq "1"}&fromid={$fromid}&toid={$toid}&want={$want}&username={$username}&status={$status}{/if}" name="username" class="{if $sortby eq "username"}sort-arrow-{if $sorthow eq "desc"}desc{else}asc{/if}{else}not-sort{/if}"><span class="sort-title">Requested By</span></a></span></th>
                                        <th  class=" no-link last"><span class="nobr">Action</span></th>
	                	            </tr>
	            	            	<tr class="filter">
                                        <th >
                                            <div class="range">
                                                <div class="range-line">
                                                    <span class="label">From:</span> 
                                                    <input type="text" name="fromid" id="fromid" value="{$fromid}" class="input-text no-changes"/>
                                                </div>
                                                <div class="range-line">
                                                    <span class="label">To : </span>
                                                    <input type="text" name="toid" id="toid" value="{$toid}" class="input-text no-changes"/>
                                                </div>
                                            </div>
                                        </th>
                                        <th ><input type="text" name="want" id="want" value="{$want|stripslashes}" class="input-text no-changes"/></th>
                                        <th ><input type="text" name="username" id="username" value="{$username|stripslashes}" class="input-text no-changes"/></th>
                                        <th  class=" no-link last">
                                            <div style="width: 100%;">&nbsp;</div>
                                        </th>
	                	            </tr>
	            	        	</thead>
	    	    	    		<tbody>
                                	{section name=i loop=$results}
                                    <tr id="" >
                                        <td class=" a-right ">{$results[i].WID}</td>
                                        <td class=" ">{$results[i].want|stripslashes}</td>
                                        <td class=" ">{$results[i].username|stripslashes}</td>
                                        <td class=" last"><form name="a{$results[i].WID}" id="a{$results[i].WID}" action="" method="post">
                                            <input type="hidden" name="AWID" value="{$results[i].WID}" />
                                            <input type="hidden" name="asub" value="1" />
                                            <input type="hidden" name="aval" value="{$results[i].active}" />
                                            </form>
                                        	<a href="javascript: document.a{$results[i].WID}.submit();">Approve Want</a>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;<a href="wants_validate.php?page={$currentpage}&sortby={$sortby}&sorthow={$sorthow}{if $search eq "1"}&fromid={$fromid}&toid={$toid}&want={$want}&username={$username}&status={$status}{/if}&delete=1&WID={$results[i].WID}">Delete Want</a></td>
                                	</tr>
                                    {/section}
                                    <tr>
                                    	<td colspan="4">
                                        {$pagelinks}
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
                            {if $message ne "" OR $error ne ""}
                            	{include file="administrator/show_message.tpl"}
                            {/if}
                            </div>

                            <div class="content-header">
                               <h3 class="icon-head head-products">Wants - Validate Wants</h3>
                            </div>
                            
                            <form action="wants_validate.php" method="post" id="main_form" name="main_form" enctype="multipart/form-data">
                            	<input type="hidden" id="submitform" name="submitform" value="1" >
                            	<div style="display:none"></div>
                            </form>
						</div>
					</div>
				</div>

                        </div>
        </div>