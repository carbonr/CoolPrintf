			<script src="{$baseurl}/js/jquery.scrollTo-min.js" type="text/javascript"></script> 
			<script src="{$baseurl}/js/jquery.corner.js" type="text/javascript"></script> 
            <script src="{$baseurl}/js/jquery.qtip-1.0.0-rc3.js" type="text/javascript"></script> 
            <script src="{$baseurl}/js/jquery.hint.js" type="text/javascript"></script> 
            <script src="{$baseurl}/js/orders.php" type="text/javascript"></script>
              <div class="main-wrapper">
                <div id="main">
                  <div class="content">
                  {if $message ne ""}
                  {include file="error.tpl"}
                  {/if}                    					 
					<div class="wrapper"> 
					  <div class="conversation"> 
						<div class="metadata"> 
						  <div class="info order"> 
									<p><a href="{$baseurl}/orders" class="back-to-manage">&laquo; {$lang261}</a></p> 
							<div class="order-image"> 
								<img src="{$purl}/t2/{$o.p1}?{$smarty.now}" /> 
							</div> 
							<div class="order-meta"> 
                              {if $o.status eq "0"}
							  <h3 class="flag"><span class="status waiting-for-reqs" title="{$lang278}">{$lang140} #{$o.OID}<b>{$lang278}</b></span></h3> 
                              {elseif $o.status eq "1"}
                              <h3 class="flag"><span class="status in-progress" title="{$lang279}">{$lang140} #{$o.OID}<b>{$lang279}</b></span></h3>
                              {elseif $o.status eq "2" OR $o.status eq "3" OR $o.status eq "7"} 
                              <h3 class="flag"><span class="status order-cancelled" title="{$lang203}">{$lang140} #{$o.OID}<b>{$lang203}</b></span></h3>
                              {elseif $o.status eq "4"}
                              <h3 class="flag"><span class="status order-delivered" title="{$lang201}">{$lang140} #{$o.OID}<b>{$lang201}</b></span></h3>
                              {elseif $o.status eq "5"}
                              <h3 class="flag"><span class="status order-completed" title="{$lang202}">{$lang140} #{$o.OID}<b>{$lang202}</b></span></h3>
                              {elseif $o.status eq "6"}
                              <h3 class="flag"><span class="status order-rejected" title="{$lang321}">{$lang140} #{$o.OID}<b>{$lang320}</b></span></h3>
                              {/if}
					 
							  <h2><b><a href="{$baseurl}/{insert name=get_seo_profile value=a username=$o.username|stripslashes}">{$o.username|stripslashes}</a></b> {$lang262} {insert name=seo_clean_titles assign=title value=a title=$o.gtitle}<a href="{$baseurl}/{$o.seo|stripslashes}/{$o.PID|stripslashes}/{$title}">{$o.gtitle|stripslashes}</a> {$lang63}{$o.price|stripslashes}</h2> 
							</div> 
						  </div> 
						  <h3 class="started">{$lang263} <b><a href="{$baseurl}/{insert name=get_seo_profile value=a username=$o.username|stripslashes}">{$o.username|stripslashes}</a></b> on {$o.time_added|date_format:"%A, %B %e %Y"} {$lang265} {$o.time_added|date_format:"%I:%M %p"}
							
							  <span class="right"><a href="{$baseurl}/{insert name=get_seo_convo value=a assign=cvseo username=$o.username|stripslashes}">{$lang235} <b>{$o.username|stripslashes}</b></a></span> 
							
						  </h3> 
						  <div class="order-flow messages"> 
							 
							<div class="milestone okay" title="{$lang292}"> 
							  <div class="status-label"></div> 
							  <div class="mutual-status">
								<span>{$lang266}</span> 
							  </div> 
							</div> 
					 
                            <div class="milestone action reqbox" title="{$lang293}"> 
                            	<div class="status-label"></div> 
                            	<div class="mutual-status underway">
                                	<h3>{$o.username|stripslashes} {$lang270}</h3>
                                    <span><p>{$o.ginst|stripslashes}</p></span>
                                </div> 
                            </div> 

                            <div id="msgresults">
                            	{if $o.status eq "0"}
                                <div class="respond-to-start"><span class="arr-d"></span><b>{$lang274}</b><span class="arr-d"></span></div> 
                                {/if}
                            	{insert name=last_delivery value=a assign=lasdel oid=$o.OID}
                            	{section name=i loop=$m}
                                {insert name=get_member_profilepicture assign=profilepicture value=var USERID=$m[i].MSGFROM}
                                {if $m[i].action eq "mutual_cancellation_request"}
                                    {if $m[i].MSGFROM eq $smarty.session.USERID}
                                    <div class="milestone warning" title="{$m[i].mfrom|stripslashes} ({$m[i].time|date_format})">
                                      <div class="mutual-status">
                                        <span>
                                          <h3>{$lang286}</h3>
                                          <p>{$lang287}: {$m[i].message|stripslashes|nl2br}</p>
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
                                      <div class="mutual-status duedate"><span><span>{if $m[i].CID eq $smarty.session.USERID}{$lang297}{else}{$lang298}{/if}</span></span></div>
                                    </div>
                                    {elseif $m[i].cancel eq "2"}
                                    <div class="milestone cancel" title="{$m[i].ctime|date_format}">
                                      <div class="status-label"></div>
                                      <div class="mutual-status duedate"><span>{$lang303}</span></div>
                                    </div>
                                    {/if}
                                {elseif $m[i].action eq "seller_cancellation"}
                                <div class="milestone cancel" title="{$m[i].ctime|date_format}">
                                  <div class="status-label"></div>
                                  <div class="mutual-status duedate"><span>{$lang304}</span></div>
                                </div>
                                {elseif $m[i].action eq "rejection"}
                                <div class="milestone cancel" title="{$m[i].time|date_format}"> 
                                  <div class="status-label"></div> 
                                  <div class="mutual-status duedate"><span>{$lang321}:<br />{$m[i].message|stripslashes}</span></div> 
                                </div> 
                                {elseif $m[i].action eq "delivery"}
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
                                                <h5>{if $o.status eq "5"}{$lang319} {$o.cltime|date_format}{else}{$lang307}{/if}</h5>                                               
                                            </div> 
                                            {/if}
                                          </div> 
                                        </div> 
                                      </div> 
                                    </div> 
                                  </div> 
                                </div>                                 
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
                                    {if $m[i].start eq "1"}
                                    <div class="milestone okay" title="{$lang277}"> 
                                      <div class="status-label"></div> 
                                      <div class="mutual-status underway"><h3>{$lang275}. {$lang277}</h3> 
                                            <span>                                            
                                                <span>{$lang276} <b>{insert name=get_deadline value=a assign=deadline days=$o.days time=$o.stime}{$deadline}</b></span>                                  
                                            </span> 
                                        </div> 
                                    </div>
                                    {/if}
                                {/if}
								{/section}
                                {insert name=fback value=a assign=fbvl oid=$o.OID}
                                {if $lasdel GT "0" AND $fbvl eq "0"}
                                {if $o.status ne "6"}
                                <form action="{$baseurl}/track?id={$o.OID}" class="review_form" id="new_rating" method="post">
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
                                {if $fbvl eq "1"}
                                <div class="milestone thumb-down"> 
                                  <div class="status-label"></div> 
                                  <div class="mutual-status complete-rating"> 
                                        <h3>{$lang313}</h3> 
                                    </div> 
                                </div>
                                {/if}
                                {if $o.status eq "5"}
                                <div class="milestone okay" title="{$o.cltime|date_format}"> 
                                  <div class="status-label"></div> 
                                  <div class="mutual-status duedate">{$lang314}</div> 
                                </div>
                                <div class="complete-order-link">{$lang315} <a href="{$baseurl}/{insert name=get_seo_convo value=a assign=cvseo username=$o.username|stripslashes}">{$lang317}</a></div>
                                {elseif $o.status eq "7"}
                                <div class="milestone cancel" title="{$lang359}">
                                  <div class="status-label"></div>
                                  <div class="mutual-status duedate"><span>{$lang359}</span></div>
                                </div>
                                {/if}
                            </div> 
                            
						  </div> 
                          {if $o.status eq "1" OR $o.status eq "4" OR $o.status eq "6"}
                          {include file="track_bit2.tpl"}
                          {elseif $o.status eq "0"}
                          {include file="track_bit.tpl"}
                          {/if}
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