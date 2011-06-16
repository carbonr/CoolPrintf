              	<script src="{$baseurl}/js/jquery.qtip-1.0.0-rc3.js" type="text/javascript"></script> 
				<script src="{$baseurl}/js/jquery.corner.js" type="text/javascript"></script> 
				<script src="{$baseurl}/js/indexes.js" type="text/javascript"></script> 
              <div class="main-wrapper">
                <div id="main">
                  <div class="content">
                  {if $message ne ""}
                  {include file="error.tpl"}
                  {/if}
                    <div class="wrapper">
                      <div class="page-title">
                        <h2>{$lang157}<b class="balance">{$lang223}</b></h2>
                      </div>
                      <div class="metadata">
                        <ul class="filters">
                    
                          <li>{if $s eq "active"}<span>{$lang190} <u>{$o|@count}</u></span>{else}<a href="{$baseurl}/orders?s=active&b={$b}&a={$a}"><span>{$lang190} </span></a>{/if}</li>
                          <li>{if $s eq "review"}<span>{$lang224} <u>{$o|@count}</u></span>{else}<a href="{$baseurl}/orders?s=review&b={$b}&a={$a}"><span>{$lang224} </span></a>{/if}</li>
                          <li>{if $s eq "completed"}<span>{$lang202} <u>{$o|@count}</u></span>{else}<a href="{$baseurl}/orders?s=completed&b={$b}&a={$a}"><span>{$lang202} </span></a>{/if}</li>
                          <li class="last">{if $s eq "cancelled"}<span>{$lang203} <u>{$o|@count}</u></span>{else}<a href="{$baseurl}/orders?s=cancelled&b={$b}&a={$a}"><span>{$lang203} </span></a>{/if}</li>
                        </ul>
                      </div>
                      {if $o|@count eq "0"}
                      <div class="tabs">
                        <div class="table-container yellow index orders">
                            <div class="empty-data">
                              <h3>{$lang225}</h3>
                              <p></p>
                            </div>
                        </div>
                      </div>
                      {else}
                      <div class="tabs"> 
                        <div class="table-container yellow index orders"> 
                            <table width="100%"> 
                              <thead class="topics icons"> 
                                <tr> 
                                  <td class="first"><a href="{$baseurl}/orders?s={$s}&b=id&a={if $a eq "asc"}desc{else}asc{/if}">{$lang140}</a></td> 
                                  <td class="amount"><a href="{$baseurl}/orders?s{$s}=&b=status&a={if $a eq "asc"}desc{else}asc{/if}">{$lang191}</a></td> 
                                  <td class="last"><a href="{$baseurl}/orders?s={$s}&b=date&a={if $a eq "asc"}desc{else}asc{/if}">{$lang360}</a></td> 
                                </tr> 
                              </thead> 
                              <tbody> 
                                  {section name=i loop=$o}
                                  <tr class="entry"> 
                                    	<td class="gig first"><div><a href="{$baseurl}/track?id={$o[i].OID}"><div class="extended-data"><b class="order-id">#{$o[i].OID}<u>&raquo;</u></b>{$o[i].gtitle|stripslashes}</div></a></div></td> 
                                    	{if $o[i].status eq "0"}
                                      	<td class="status waiting_for_reqs" title="{$lang361}"><div>{$lang362}</div></td> 
                                        {elseif $o[i].status eq "1"}
                                            {insert name=late value=a assign=late time=$o[i].stime days=$o[i].days}
                                            {if $late eq "1"}
                                            <td class="status late_delivery" title="{$lang364}"><div>{$lang363}</div></td>
                                            {else}
                                            <td class="status in_progress" title="{$lang366}"><div>{$lang365}</div></td>
                                            {/if}
                                        {elseif $o[i].status eq "2"}
                                        <td class="status buyer_cancelled" title="{$lang367}"><div>{$lang203}</div></td>
                                        {elseif $o[i].status eq "3"}
                                        <td class="status seller_cancelled" title="{$lang369}"><div>{$lang368}</div></td>
                                        {elseif $o[i].status eq "4"}
                                        <td class="status delivered" title="{$lang370}"><div>{$lang201}</div></td>
                                        {elseif $o[i].status eq "5"}
                                      	<td class="status completed" title="{$lang371}"><div>{$lang202}</div></td>
                                        {elseif $o[i].status eq "6"}
                                        	{insert name=late value=a assign=late time=$o[i].stime days=$o[i].days}
                                            {if $late eq "1"}
                                            <td class="status late_delivery" title="{$lang364}"><div>{$lang363}</div></td>
                                            {else}
                                            <td class="status dispute" title="{$lang372}"><div>{$lang320}</div></td>
                                            {/if}
                                        {elseif $o[i].status eq "7"}
                                        <td class="status buyer_cancelled" title="{$lang374}"><div>{$lang373}</div></td>
                                        {/if}
                                    	<td class="datetime last"><div>{insert name=get_time_to_days_ago value=a time=$o[i].time_added}</div></td>              
                                  </tr>
                                  {/section} 
                            </tbody> 
                          </table> 
                        </div> 
                      </div>
                      {/if}
                    </div>
                  </div>
                  {include file="side.tpl"}
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>