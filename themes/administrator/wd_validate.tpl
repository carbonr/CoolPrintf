		<div class="middle" id="anchor-content">
            <div id="page:main-container">
				<div class="columns ">
                
					<div class="side-col" id="page:left">
    					<h3>Withdrawals</h3>
						
                        <ul id="isoft" class="tabs">
    						<li >
        						<a href="wd_validate.php" id="isoft_group_1" name="group_1" title="Validate Withdrawals" class="tab-item-link ">
                                    <span>
                                        <span class="changed" title=""></span>
                                        <span class="error" title=""></span>
                                        Validate Withdrawals
                                    </span>
        						</a>
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                <div id="isoft_group_1_content" style="display:none;">
                                	<div class="entry-edit">
                                        <div class="entry-edit-head">
                                            <h4 class="icon-head head-edit-form fieldset-legend">Withdrawals</h4>
                                            <div class="form-buttons">

                                            </div>
                                    	</div>

                                        <div>
        			<div id="customerGrid">
        				<table cellspacing="0" class="actions">
        				<tr>
                    		<td class="pager">
                            	Showing {$beginning} - {$ending} of {$total} Withdrawals
                    		</td>
                			<td class="export a-right"></td>
            				<td class="filter-actions a-right">
                            	<button  id="id_ffba3971e132ae3d78c160244ea09b39" type="button" class="scalable " onclick="document.location.href='wd_validate.php'" style=""><span>Reset Filter</span></button>
            					<button  id="id_56a0b03bf0b3be131176f3243cc289ff" type="button" class="scalable task" onclick="document.main_form.submit();" style=""><span>Search</span></button>        
                            </td>
        				</tr>
    					</table>
                        
                        <div class="grid">
							<div class="hor-scroll">
								<table cellspacing="0" class="data" id="customerGrid_table">
                                <col  width="50"  width="100px"  />
                                <col  width="300"  />
                                <col  width="150"  />
                                <col  width="150"  />
                                <col   />
	    	    	        	<thead>
	            	                <tr class="headings">
                                        <th ><span class="nobr"><a href="wd_validate.php?page={$currentpage}&sortby=WID&sorthow={if $sortby eq "WID"}{if $sorthow eq "desc"}asc{else}desc{/if}{else}{$sorthow}{/if}{if $search eq "1"}&fromid={$fromid}&toid={$toid}&pemail={$pemail}&username={$username}&status={$status}{/if}" name="id" class="{if $sortby eq "WID"}sort-arrow-{if $sorthow eq "desc"}desc{else}asc{/if}{else}not-sort{/if}"><span class="sort-title">ID</span></a></span></th>
                                        <th ><span class="nobr"><a href="wd_validate.php?page={$currentpage}&sortby=pemail&sorthow={if $sortby eq "pemail"}{if $sorthow eq "desc"}asc{else}desc{/if}{else}{$sorthow}{/if}{if $search eq "1"}&fromid={$fromid}&toid={$toid}&pemail={$pemail}&username={$username}&status={$status}{/if}" name="pemail" class="{if $sortby eq "pemail"}sort-arrow-{if $sorthow eq "desc"}desc{else}asc{/if}{else}not-sort{/if}"><span class="sort-title">Paypal E-Mail</span></a></span></th>
                                        <th ><span class="nobr"><a href="wd_validate.php?page={$currentpage}&sortby=username&sorthow={if $sortby eq "username"}{if $sorthow eq "desc"}asc{else}desc{/if}{else}{$sorthow}{/if}{if $search eq "1"}&fromid={$fromid}&toid={$toid}&pemail={$pemail}&username={$username}&status={$status}{/if}" name="username" class="{if $sortby eq "username"}sort-arrow-{if $sorthow eq "desc"}desc{else}asc{/if}{else}not-sort{/if}"><span class="sort-title">Username</span></a></span></th>
                                        <th  class=" no-link"><span class="nobr">Funds To Pay</span></th>
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
                                        <th ><input type="text" name="pemail" id="pemail" value="{$pemail|stripslashes}" class="input-text no-changes"/></th>
                                        <th ><input type="text" name="username" id="username" value="{$username|stripslashes}" class="input-text no-changes"/></th>
                                        <th ></th>
                                        <th  class=" no-link last">
                                            <div style="width: 100%;">&nbsp;</div>
                                        </th>
	                	            </tr>
	            	        	</thead>
	    	    	    		<tbody>
                                	{section name=i loop=$results}
                                    <tr id="" >
                                        <td align="center">{$results[i].WID}</td>
                                        <td align="center">{$results[i].pemail|stripslashes}</td>
                                        <td align="center">{$results[i].username|stripslashes}</td>
                                        <td align="center">${$results[i].afunds|stripslashes}</td>
                                        <td class=" last">
                                        	<form name="a{$results[i].WID}" id="a{$results[i].WID}" action="" method="post">
                                            <input type="hidden" name="AWID" value="{$results[i].WID}" />
                                            <input type="hidden" name="asub" value="1" />
                                            <input type="hidden" name="auid" value="{$results[i].USERID|stripslashes}" />
                                            <input type="hidden" name="apay" value="{$results[i].afunds|stripslashes}" />
                                            </form>
                                        	<a href="http://www.paypal.com" target="_blank">Pay Via Paypal</a>&nbsp;&nbsp;&nbsp; <b>>>> Then >>></b>&nbsp;&nbsp;&nbsp;<a href="javascript: document.a{$results[i].WID}.submit();">Mark As Paid (Sets the user's funds to $0)</a></td>
                                	</tr>
                                    {/section}
                                    <tr>
                                    	<td colspan="5">
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
                               <h3 class="icon-head head-products">Withdrawals - Validate Withdrawals</h3>
                            </div>
                            
                            <form action="wd_validate.php" method="post" id="main_form" name="main_form" enctype="multipart/form-data">
                            	<input type="hidden" id="submitform" name="submitform" value="1" >
                            	<div style="display:none"></div>
                            </form>
						</div>
					</div>
				</div>

                        </div>
        </div>