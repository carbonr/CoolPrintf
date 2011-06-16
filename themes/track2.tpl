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
									<p><a href="{$baseurl}/manage_orders" class="back-to-manage">&laquo; {$lang268}</a></p> 
							<div class="order-image"> 
								<img src="{$purl}/t2/{$o.p1}?{$smarty.now}" /> 
							</div> 
							<div class="order-meta"> 
                            	{if $o.status eq "1"}
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

							  <h2><b>{$lang62}</b>  {insert name=seo_clean_titles assign=title value=a title=$o.gtitle}<a href="{$baseurl}/{$o.seo|stripslashes}/{$o.PID|stripslashes}/{$title}">{$o.gtitle|stripslashes}</a> {$lang63}{$o.price|stripslashes}</h2> 
							</div> 
						  </div> 
						  <h3 class="started">{$lang264} <b><a href="{$baseurl}/{insert name=get_seo_profile value=a username=$o.buyer|stripslashes}">{$o.buyer|stripslashes}</a></b> on {$o.time_added|date_format:"%A, %B %e %Y"} {$lang265} {$o.time_added|date_format:"%I:%M %p"}
							
							  <span class="right"><a href="{$baseurl}/{insert name=get_seo_convo value=a assign=cvseo username=$o.buyer|stripslashes}{$cvseo}">{$lang235} <b>{$o.buyer|stripslashes}</b></a></span> 
							
						  </h3> 
						  <div class="order-flow messages"> 
							 
							<div class="milestone okay" title="{$lang295}"> 
							  <div class="status-label"></div> 
							  <div class="mutual-status">
                                <span>{$lang267}<br /><b>{$lang269}</b>: {insert name=get_deadline value=a assign=deadline days=$o.days time=$o.stime}{$deadline} {if $o.status ne "5"}{insert name=countdown value=a assign=cdown days=$o.days time=$o.stime}{$cdown}{/if}</span>
							  </div> 
							</div> 
                            {if $o.status ne "0"}
                            <div class="milestone okay reqbox" title="{$o.stime|date_format}">
                              <div class="status-label"></div>
                              <div class="mutual-status underway">
                              	<h3>{$lang271}</h3>
                                <span>{$lang272}<a class="showInstructions" href="#">{$lang273}</a>. </span><span class="instructions" style="display:none;"><p>{$o.ginst|stripslashes}</p></span></div>
                            
                            </div>
                            {/if}
                            <div id="msgresults">
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
                                {elseif $m[i].action eq "seller_cancellation"}
                                <div class="milestone cancel" title="{$m[i].ctime|date_format}">
                                  <div class="status-label"></div>
                                  <div class="mutual-status duedate"><span>{$lang305}</span></div>
                                </div>
                                {elseif $m[i].action eq "rejection"}
                                <div class="milestone warning" title="{$m[i].time|date_format}">
                                  <div class="status-label"></div>
                                  <div class="mutual-status duedate"><h3>{$lang323}</h3><span>{$lang324}:<br />{$m[i].message|stripslashes}</span></div>
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
                                {/if}
								{/section}
                                {insert name=fback2 value=a assign=fbvl oid=$o.OID sid=$o.USERID}
                                {if $fbvl eq "1"}
                                <div class="milestone thumb-down"> 
                                  <div class="status-label"></div> 
                                  <div class="mutual-status complete-rating"> 
                                        <h3>{$o.buyer|stripslashes} {$lang318}</h3> 
                                    </div> 
                                </div>
                                {/if}
                                {if $o.status eq "5"}
                                <div class="milestone okay" title="{$o.cltime|date_format}"> 
                                  <div class="status-label"></div> 
                                  <div class="mutual-status duedate">{$lang314}</div> 
                                </div>
                                <div class="complete-order-link">{$lang315} <a href="{$baseurl}/{insert name=get_seo_convo value=a assign=cvseo username=$o.buyer|stripslashes}">{$lang316}</a></div>
                                {elseif $o.status eq "7"}
                                <div class="milestone cancel" title="{$lang359}">
                                  <div class="status-label"></div>
                                  <div class="mutual-status duedate"><span>{$lang359}</span></div>
                                </div>
                                {/if}
                            </div>
                            
						  </div> 
                          {if $o.status eq "1" OR $o.status eq "4" OR $o.status eq "6"}
                          {include file="track2_bit.tpl"}					 
                          {/if}
						</div> 
					  </div> 
					</div>  

                    
                    
                  </div>
                  {include file="side2.tpl"}
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>