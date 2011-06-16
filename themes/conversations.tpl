              <div class="main-wrapper">
                <div id="main">
                  <div class="content">
                  {if $message ne ""}
                  {include file="error.tpl"}
                  {/if}
                  	
                    <script src="{$baseurl}/js/jquery.scrollTo-min.js" type="text/javascript"></script>
					<script src="{$baseurl}/js/jquery.periodicalupdater.js" type="text/javascript"></script>
                    <script src="{$baseurl}/js/jquery.qtip-1.0.0-rc3.js" type="text/javascript"></script>
                    <script src="{$baseurl}/js/conversations.php" type="text/javascript"></script>

					{literal}
                    <script type="text/javascript">
					$(document).ready( function() {
					var poll_handler = $.PeriodicalUpdater(
						'{/literal}{$baseurl}/check_new{literal}', 
						{
						  method: 'get',
						  data: {last_id: {/literal}{$lastm}{literal}, uid: {/literal}{$u.USERID}{literal}},
						  minTimeout: 1000, 
						  maxTimeout: 256000,
						  multiplier: 2,
						  type: 'text', 
						  maxCalls: 0,   
						  autoStop: 0 
						}, 
						function(data) {
						  if ( eval(data) > 0) {
							poll_handler.stop();
							$('body').append('<div class="refresh-session " style="display:none;">{/literal}{$lang242}{literal} <a class="page_refresh">{/literal}{$lang243}{literal}</a></div>');
							$('.refresh-session').slideDown('slow');
						  } 
						}
					  );
					});
					</script>
                    {/literal}


                    <div class="wrapper">
                      <div class="conversation">
                        <div class="metadata">
                            <div class="page-title">
                              <h2>{$lang235} <b><a href="{$baseurl}/{insert name=get_seo_profile value=a username=$u.username|stripslashes}">{$u.username|stripslashes}</a></b></h2>
                              {if $m|@count GT "0"}
                              <h3 class="meta-details"> 
                              	<form action="{$baseurl}/inbox" method="post" name="arform" id="arform">                               
                                <input type="hidden" name="auid" value="{$u.USERID}"  />
                                <input type="hidden" name="subarc" value="1"  />
                                </form>
                                  <a href="#" onclick="document.arform.submit()">{$lang236}</a> 
                                &bull; {$lang237} {$m[0].time|date_format} 
                                &bull;
                                <span id="conversation_update_info">
                                  {$lang238} <b>{math assign="t1" equation="x-1" x=$m|@count}{$m[$t1].mfrom|stripslashes}</b>
                                </span >                                   
                              </h3>
                              {/if}
                              <div class="quicknav">
                                
                              </div>
                            </div>
                        </div>
                        
                        <div class="messages" id="msgresults">
                        {if $m|@count GT "0"}
                        	{section name=i loop=$m}
                            {if $m[i].unread eq "1"}
                            {if $smarty.session.USERID eq $m[i].MSGTO}
                            {insert name=mark_read value=a mid=$m[i].MID}
                            {/if}
                            {/if}
                            {insert name=get_member_profilepicture assign=profilepicture value=var USERID=$m[i].MSGFROM}
                            <div id="message_{$m[i].MID}" class="{if $smarty.session.USERID eq $m[i].MSGFROM}message by-me{else}message by-partner{/if}" title="{$m[i].mfrom|stripslashes} ({$m[i].time|date_format})">
                      			<div class="metadata">
                                    <div class="buddyicon">
                                      <a href="{$baseurl}/{insert name=get_seo_profile value=a username=$m[i].mfrom|stripslashes}" title="{$m[i].mfrom|stripslashes}"><img alt="{$m[i].mfrom|stripslashes}" src="{$membersprofilepicurl}/thumbs/{$profilepicture}?{$smarty.now}" /></a>
                                    </div>                        
                                    <div class="tip">&nbsp;</div>
                                </div>
                                <div class="content-text">
                                    <div class="message-inner">
                                        <div class="message-content">
                                        	{if $m[i].PID GT "0"}
                                            {insert name=gig_details value=a assign=gml pid=$m[i].PID}
                                            {section name=z loop=$gml}
                                            {insert name=seo_clean_titles assign=ztitle value=a title=$gml[z].gtitle}
                                            <p class="related-gig">
                                              <span>{$lang239} <a href="{$baseurl}/{$gml[z].seo|stripslashes}/{$gml[z].PID|stripslashes}/{$ztitle}">{$lang62} {$gml[z].gtitle|stripslashes} {$lang63}{$gml[z].price|stripslashes}</a></span>
                                            </p>
                                            {/section}
                                            {/if}
                                            <div class="said">
                                              <p>{$m[i].message|stripslashes|nl2br}</p>
                                            </div>
                                        </div>
                                        {if $m[i].FID GT "0"}
                                        {insert name=file_details value=a assign=fd fid=$m[i].FID}
                                        {section name=x loop=$fd}
                                        {insert name=gfs value=a assign=afs fid=$fd[x].FID}
                                        <div class="files">
                                          <ul>
                                            <li><a href="{$baseurl}/files/{$fd[x].FID|md5}{$fd[x].s}/{$fd[x].fname}" target="_blank">{$fd[x].fname} <b>[{$afs}]</b></a></li>
                                          </ul>
                                        </div>
                                        {/section}
                                        {/if}
                                        <div class="message-toolkit">
                                          <a href="{$baseurl}/spam?id={$m[i].MID}" class="spam_message">{$lang245}<span id="spam_message{$m[i].MID}">&nbsp;{$lang246}</span></a>
                                        </div>                                      
                                    </div>
                                </div>
                    		</div>
                          	{/section}  
                        {/if}                  
                        </div>
                        {insert name=get_member_profilepicture assign=mppc value=var USERID=$smarty.session.USERID}
                        <div class="message by-me respond">
                          	<form action="{$baseurl}/sendmessage.php" class="new_message" id="new_message" method="post" style="">
                            <input type="hidden" name="submg" value="1" />
                            <input type="hidden" name="msgto" value="{$u.USERID}" />
                            <input type="hidden" name="aboutid" value="{$aboutid}" />
                            <div style="margin:0;padding:0;display:inline"></div>
                            <div class="by-me">
                              	<div class="metadata">
                                	<div class="buddyicon">
                                  		<a href="{$baseurl}/{insert name=get_seo_profile value=a username=$smarty.session.USERNAME|stripslashes}" title="{$smarty.session.USERNAME|stripslashes}"><img alt="{$smarty.session.USERNAME|stripslashes}" src="{$membersprofilepicurl}/thumbs/{$mppc}?{$smarty.now}" /></a>
                                	</div>
                                	<div class="tip rspnd "></div>
                              	</div>
                                <div class="content-text">
                                    <div class="msg-error">
                                      <p id="message_validation_error"></p>
                                    </div>
                                    <textarea cols="75" id="message_body" maxlength="1000" name="message_body" rows="3"></textarea>                                
                                    <div class="message-form-control">
                                        <div class="send-button">
                                            <input type="submit" value="{$lang46}" class="send-small"  />
                                            <div class="progress-indicator-icon-message">
                                            	<span class="sending">{$lang120}</span>
                                            </div>
                                        </div>
                                        <div class="upload-panel">
                                        	<a href="#attach" title="Attach a file to your message" class="upload selected" id="toggle-attach">
                                        		<h5><span class="open">{$lang248}</span></h5>
                                        	</a>
                                            <div class="in-element attachment-add upload-panel" id="attach">
                                                <h5>{$lang248} <b>({$lang249})</b></h5>
                                                <br clear="both"/>
                                                <input id="message_message_attachment_id" name="message_message_attachment_id" type="hidden" />
                                                <div class="panel">
                                                    <div class="browse">
                                                    	<input id="fileInput" name="fileInput" type="file" style="display:none;" />
                                                    </div>                      
                                                    <div class="files-added">
                                                    	<span id="attached_file_name"></span><b class="remove_attachment">x</b>
                                                    </div>
                                                </div>
                                                <p class="terms">{$lang250} 
                                                    <b>{$lang251}</b>: {$lang252} <a href="{$baseurl}/terms_of_service" target="_blank" title="{$lang253}">{$lang254}</a><br />
                                                    <b>{$lang255}</b>: {$lang256}
                                                </p>
                                            </div>
                                        </div>
                                    </div>                                
                                </div>
                            </div>
                          </form>
                        </div>
                      </div>
                    </div>
                  </div>
                  {include file="side.tpl"}
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>