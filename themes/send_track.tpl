								{insert name=last_delivery value=a assign=lasdel oid=$oid}
                                {section name=i loop=$m}
                                {insert name=get_member_profilepicture assign=profilepicture value=var USERID=$m[i].MSGFROM}
                                {if $m[i].action eq "mutual_cancellation_request"}
                                	{if $who eq "buyer"}
                                        {if $m[i].MSGFROM eq $smarty.session.USERID}
                                        <div class="milestone warning" title="{$m[i].mfrom|stripslashes} ({$m[i].time|date_format})">
                                          <div class="mutual-status">
                                            <span>
                                              <h3>{$lang286}</h3>
                                              <p>{$lang287}: {$m[i].message|stripslashes}</p>
                                                {if $m[i].cancel eq "0"}
                                                <form name="abort{$m[i].MID}" method="post">
                                                <input type="hidden" name="subabort" value="1">
                                                <input type="hidden" name="AMID" value="{$m[i].MID}">
                                                </form>
                                                <div class="status-control">{$lang289} <a href="#" onclick="document.abort{$m[i].MID}.submit()">{$lang290}</a> {$lang291}</div>
                                                {/if}
                                            </span>
                                          </div>
                                        </div>
                                        {else}
                                        <div class="milestone warning" title="{$m[i].mfrom|stripslashes} ({$m[i].time|date_format})"> 
                                          <div class="mutual-status duedate"> 
                                            <span> 
                                              <h3>{$lang288}</h3> 
                                              <p>{$lang287}: {$m[i].message|stripslashes|nl2br}</p> 
                                              	{if $m[i].cancel eq "0"}
                                                <form name="decline{$m[i].MID}" method="post">
                                                <input type="hidden" name="subdecline" value="1">
                                                <input type="hidden" name="DMID" value="{$m[i].MID}">
                                                </form>
                                                <form name="accept{$m[i].MID}" method="post">
                                                <input type="hidden" name="subaccept" value="1">
                                                <input type="hidden" name="AMID" value="{$m[i].MID}">
                                                </form>
                                                <div class="status-control">{$lang291}<br /><a href="#" onclick="document.decline{$m[i].MID}.submit()">{$lang296}</a> - <a href="#" onclick="document.accept{$m[i].MID}.submit()">{$lang301}</a></div>
                                                {/if}
                                            </span> 
                                          </div> 
                                        </div>
                                        {/if}
                                        {if $m[i].cancel eq "1"}
                                        <div class="milestone warning" title="{$m[i].ctime|date_format}">
                                          <div class="mutual-status duedate"><span><span>{if $m[i].CID eq $smarty.session.USERID}{$lang297}{else}{$lang298}{/if}</span></span></div>
                                        </div>
                                        {elseif $m[i].cancel eq "2"}
                                        <div class="milestone cancel" title="{$m[i].ctime|date_format}">
                                          <div class="status-label"></div>
                                          <div class="mutual-status duedate"><span>{$lang303}</span></div>
                                        </div>
                                        {/if}
                                    {elseif $who eq "owner"}
                                    	{if $m[i].MSGFROM eq $smarty.session.USERID}
                                        <div class="milestone warning" title="{$m[i].mfrom|stripslashes} ({$m[i].time|date_format})">
                                          <div class="mutual-status">
                                            <span>
                                              <h3>{$lang286}</h3>
                                              <p>{$lang287}: {$m[i].message|stripslashes}</p>
                                              	{if $m[i].cancel eq "0"}
                                                <form name="abort{$m[i].MID}" method="post">
                                                <input type="hidden" name="subabort" value="1">
                                                <input type="hidden" name="AMID" value="{$m[i].MID}">
                                                </form>
                                                <div class="status-control">{$lang289} <a href="#" onclick="document.abort{$m[i].MID}.submit()">{$lang290}</a> {$lang291}</div>
                                                {/if}
                                            </span>
                                          </div>
                                        </div>
                                        {else}
                                        <div class="milestone warning" title="{$m[i].mfrom|stripslashes} ({$m[i].time|date_format})"> 
                                          <div class="mutual-status duedate"> 
                                            <span> 
                                              <h3>{$lang294}</h3> 
                                              <p>{$lang287}: {$m[i].message|stripslashes}</p> 
                                              	{if $m[i].cancel eq "0"}
                                              	<form name="decline{$m[i].MID}" method="post">
                                                <input type="hidden" name="subdecline" value="1">
                                                <input type="hidden" name="DMID" value="{$m[i].MID}">
                                                </form>
                                                <form name="accept{$m[i].MID}" method="post">
                                                <input type="hidden" name="subaccept" value="1">
                                                <input type="hidden" name="AMID" value="{$m[i].MID}">
                                                </form>
                                                <div class="status-control">{$lang291}<br /><a href="#" onclick="document.decline{$m[i].MID}.submit()">{$lang296}</a> - <a href="#" onclick="document.accept{$m[i].MID}.submit()">{$lang301}</a></div>
                                              	{/if}
                                            </span> 
                                          </div> 
                                        </div>
                                        {/if}
                                        {if $m[i].cancel eq "1"}
                                        <div class="milestone warning" title="{$m[i].ctime|date_format}">
                                          <div class="mutual-status duedate"><span><span>{if $m[i].CID eq $smarty.session.USERID}{$lang299}{else}{$lang300}{/if}</span></span></div>
                                        </div>
                                        {elseif $m[i].cancel eq "2"}
                                        <div class="milestone cancel" title="{$m[i].ctime|date_format}">
                                          <div class="status-label"></div>
                                          <div class="mutual-status duedate"><span>{$lang302}</span></div>
                                        </div>
                                        {/if}
                                    {/if}
                                {elseif $m[i].action eq "seller_cancellation"}
                                	{if $who eq "owner"}
                                    <div class="milestone cancel" title="{$m[i].ctime|date_format}">
                                      <div class="status-label"></div>
                                      <div class="mutual-status duedate"><span>{$lang305}</span></div>
                                    </div>
                                    {/if}
                                {elseif $m[i].action eq "rejection"}
                                	{if $who eq "buyer"}
                                    <div class="milestone cancel" title="{$m[i].time|date_format}"> 
                                      <div class="status-label"></div> 
                                      <div class="mutual-status duedate"><span>{$lang321}:<br />{$m[i].message|stripslashes}</span></div> 
                                    </div>
                                    {else}
                                    <div class="milestone warning" title="{$m[i].time|date_format}">
                                      <div class="status-label"></div>
                                      <div class="mutual-status duedate"><h3>{$lang323}:<br />{$m[i].message|stripslashes}</h3><span>{$lang324}</span></div>
                                    </div>
                                    {/if}
                                {elseif $m[i].action eq "delivery"}
                                	{if $who eq "buyer"}
                                    <div class="message action" title="{$m[i].mfrom|stripslashes} ({$m[i].time|date_format})"> 
                                      <div class="metadata"> 
                                        <div class="buddyicon"> 
                                          <a href="{$baseurl}/{insert name=get_seo_profile value=a username=$m[i].mfrom|stripslashes}" title="{$m[i].mfrom|stripslashes}"><img alt="{$m[i].mfrom|stripslashes}" src="{$membersprofilepicurl}/thumbs/{$profilepicture}?{$smarty.now}" /></a> 
                                        </div>                        
                                        <div class="tip green">&nbsp;</div> 
                                      </div> 
                                      <div class="delivery-box"> 
                                        <div class="img-delivery">&nbsp;</div> 
                                        <div class="complete delivery"> 
                                          <div class="message-border"> 
                                            <div class="message-inner"> 
                                              <div class="message-content reqbox"> 
                                                <div class="says"> 
                                                  <h4>{$lang308}</h4> 
                                                </div> 
                                                <div class="said"> 
                                                  <p>{$m[i].message|stripslashes}</p> 
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
                                                </div> 
                                                {if $m[i].MID eq $lasdel AND $m[i].reject eq "0"}
                                                <div class="delivery-footer"> 
                                                    <h5>{$lang307}</h5>                                               
                                                </div> 
                                                {/if} 
                                              </div> 
                                            </div> 
                                          </div> 
                                        </div> 
                                      </div> 
                                    </div> 
                                    {else}
                                    <div class="message action" title="{$m[i].mfrom|stripslashes} ({$m[i].time|date_format})">
                                      <div class="metadata">
                                        <div class="buddyicon">
                                          <a href="{$baseurl}/{insert name=get_seo_profile value=a username=$m[i].mfrom|stripslashes}" title="{$m[i].mfrom|stripslashes}"><img alt="{$m[i].mfrom|stripslashes}" src="{$membersprofilepicurl}/thumbs/{$profilepicture}?{$smarty.now}" /></a>
                                        </div>                        
                                        <div class="tip green">&nbsp;</div> 
                                      </div>
                                      <div class="delivery-box">
                                        <div class="img-delivery">&nbsp;</div>
                                        <div class="complete delivery">
                                          <div class="message-border">
                                            <div class="message-inner"> 
                                              <div class="message-content reqbox">
                                                <div class="says">
                                                  <h4>{$lang306}</h4>
                                                </div>
                                                <div class="said">
                                                  <p>{$m[i].message|stripslashes}</p>
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
                                                </div>   
                                                {if $m[i].MID eq $lasdel AND $m[i].reject eq "0"}                                         
                                                <div class="delivery-footer">
                                                    <h5>{$lang307}</h5>
                                                </div>
                                                {/if}
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                    {/if}
                                {else}
                                    <div id="message_{$m[i].MID}" class="message by-{if $m[i].MSGFROM eq $smarty.session.USERID}me{else}partner{/if}" title="{$m[i].mfrom|stripslashes} ({$m[i].time|date_format})">
                                      <div class="metadata">
                                        <div class="buddyicon">
                                          <a href="{$baseurl}/{insert name=get_seo_profile value=a username=$m[i].mfrom|stripslashes}" title="{$m[i].mfrom|stripslashes}"><img alt="{$m[i].mfrom|stripslashes}" src="{$membersprofilepicurl}/thumbs/{$profilepicture}?{$smarty.now}" /></a>
                                        </div>                        
                                        <div class="tip">&nbsp;</div>
                                      </div>
                                      <div class="content-text">
                                        <div class="message-inner">
                                          <div class="message-content">
                                            <div class="said">
                                              <p>{$m[i].message|stripslashes}</p>
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
                                        </div>
                                      </div>
                                    </div>
                                    {if $m[i].start eq "1" AND $USERID eq $smarty.session.USERID}
                                    <div class="milestone okay" title="{$lang277}"> 
                                      <div class="status-label"></div> 
                                      <div class="mutual-status underway"><h3>{$lang275}. {$lang277}</h3> 
                                            <span>                                            
                                                <span>{$lang276} <b>{insert name=get_deadline value=a assign=deadline days=$days time=$m[i].time}{$deadline}</b></span>                                  
                                            </span> 
                                        </div> 
                                    </div>
                                    {/if}
                                {/if}
								{/section}
                                {if $who eq "buyer"}
                                    {insert name=fback value=a assign=fbvl oid=$oid}
                                    {if $lasdel GT "0" AND $fbvl eq "0"}
                                        {insert name=get_status value=a assign=stat oid=$oid}
                                        {if $stat ne "6"}
                                        <form action="{$baseurl}/track?id={$oid}" class="review_form" id="new_rating" method="post">
                                        <div class="order-finish"> 
                                          <div class="respond-to-start-l"> 
                                            <span class="arr-r"></span><b>{$lang310}</b></span> 
                                          </div> 
                                          <div class="post-order-rating"> 
                                            <p><input checked="checked" class="good-review-button" id="rating_value_1" name="ratingvalue" type="radio" value="1" /><img src="{$imageurl}/thumb_up.png" align="absmiddle"/></p> 
                                            <p><input class="bad-review-button" id="rating_value_0" name="ratingvalue" type="radio" value="0" /><img src="{$imageurl}/thumb_down.png" align="absmiddle"/></p> 
                                          </div> 
                                          <br clear="both"/> 
                                          <div class="share-experience"> 
                                            <textarea cols="35" id="rating_comment" maxlength="300" name="ratingcomment" rows="5" title="{$lang311}">{$lang311}</textarea> 
                                            <br clear="all"/> 
                                          </div> 
                                            <input type="submit" value="{$lang46}"  />
                                        </div>
                                        <input type="hidden" name="subrat" value="1" /> 
                                        </form>
                                        {/if}
                                    {/if}
                                {/if}