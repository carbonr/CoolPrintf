
                            {literal}
                            <script type="text/javascript">
							$(document).ready( function() {
								$('.spam_message').click(function() {
								  $.post($(this).attr('href'), null, null, "script");
								  return false;
								  });
							})
							</script>
                            {/literal}
                    		{section name=i loop=$m}
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