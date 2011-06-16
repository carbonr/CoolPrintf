              <div class="main-wrapper">
                <div id="main">
                  <div class="content">
                  {if $message ne ""}
                  {include file="error.tpl"}
                  {/if}
					
                    <div class="wrapper">
                      <div class="page-title">
                        <h2>{$lang226}<span>{$lang227}</span></h2>
                      </div>
                      <div class="metadata">
                        <ul class="filters">
                        	{if $s eq "all" OR $s eq ""}
                            <li><span>{$lang187}</span></li>
                            {else}
                            <li><a href="{$baseurl}/inbox?o={$o}&a={$a}"><span>{$lang187}</span></a></li>
                            {/if}
                            {if $s eq "unread"}
                            <li><span>{$lang228}</span></li>
                            {else}
                            <li><a href="{$baseurl}/inbox?s=unread&o={$o}&a={$a}"><span>{$lang228}</span></a></li>
                            {/if}
                            {if $s eq "archived"}
                            <li class="last"><span>{$lang229}</span></li>
                            {else}
                            <li class="last"><a href="{$baseurl}/inbox?s=archived&o={$o}&a={$a}"><span>{$lang229}</span></a></li>
                            {/if}
                            <li class="quick-nav">
                          	<select id="conversations_quick_navigation">
                            	{if $u GT "0"}
                                <option value="o={$o}&a={$a}&s={$s}">{$lang230}</option>
                                {section name=i loop=$m}
                                <option style="font-weight: bold;" value="o={$o}&a={$a}&s={$s}&u={$m[i].USERID|stripslashes}" selected="selected">{$m[i].username|stripslashes}</option>
                                {/section}
                                {else}
                            	<option>{$lang230}</option>
                                {section name=i loop=$m}
                                <option style="font-weight: bold;" value="o={$o}&a={$a}&s={$s}&u={$m[i].USERID|stripslashes}">{$m[i].username|stripslashes}</option>
                                {/section}
                                {/if}
                            </select>
                          </li>
                        </ul>    
                      </div>
                      <div class="tabs">
                        <div class="table-container yellow index conversation">
                        	{if $m|@count eq 0}
                        	<div class="empty-data">
                              <h3>{$lang234}</h3>
                              <p></p>
                            </div>
							{else}
                            <table width="100%">
                              <thead class="topics">
                                <tr>
                                  <td class="first"><a href="{$baseurl}/inbox?o=name&s={$s}{if $a eq "1"}&a=0{else}&a=1{/if}" {if $o eq "name"}class="{if $a eq "1"}descending{else}ascending{/if}"{/if}>{if $o eq "name"}{if $a eq "1"}&#9650;{else}&#9660;{/if}{/if}&nbsp;{$lang231}</a></td>
                                  <td class="last"><a href="{$baseurl}/inbox?o=time&s={$s}{if $a eq "1"}&a=0{else}&a=1{/if}" {if $o eq "time"}class="{if $a eq "1"}descending{else}ascending{/if}"{/if}>{if $o eq "time"}{if $a eq "1"}&#9650;{else}&#9660;{/if}{/if}&nbsp;{$lang232}</a></td>
                                </tr>
                              </thead>
                              <tbody>
                              	{if $s eq "all"}
                                    {section name=i loop=$m}
                                    {assign var="show" value=1}
                                    {section name=j loop=$arc}
                                    {if $arc[j].AID eq $m[i].USERID}
                                    {assign var="show" value=0}
                                    {/if}
                                    {/section}
                                    {insert name=last_unread value=a assign=lur uid=$m[i].USERID}
                                    {if $show eq "1" OR $lur eq "1"}
                                    <tr class="entry {if $lur eq "1"}unread{else}read{/if}">
                                        <td {if $smarty.section.i.iteration eq "0"}class="first"{/if}>
                                            <div class="gig-entry">
                                                <div class="extended-data"><a href="{$baseurl}/{insert name=get_seo_convo value=a assign=cvseo username=$m[i].username|stripslashes}{$cvseo}"><b class="username">{$m[i].username|stripslashes}<em>&raquo;</em></b><span class="gig-title">{insert name=last_email value=a assign=lem uid=$m[i].USERID}{$lem|stripslashes|truncate:50:"...":true}</span></a></div>
                                                {if $lur eq "1"}<div class="unread-message" title="New message!"><span>{$lang233}</span></div>{/if}
                                            </div>
                                        </td>
                                        <td class="datetime last"><div>{insert name=get_time_to_days_ago value=a time=$m[i].time}</div></td>
                                    </tr>
                                    {/if}
                                    {/section}
                                 {elseif $s eq "unread"}
                                 	{section name=i loop=$m}
                                    {assign var="show" value=1}
                                    {section name=j loop=$arc}
                                    {if $arc[j].AID eq $m[i].USERID}
                                    {assign var="show" value=0}
                                    {/if}
                                    {/section}
                                    {insert name=last_unread value=a assign=lur uid=$m[i].USERID}
                                    {if $show eq "1" AND $lur eq "1"}
                                    <tr class="entry {if $lur eq "1"}unread{else}read{/if}">
                                        <td {if $smarty.section.i.iteration eq "0"}class="first"{/if}>
                                            <div class="gig-entry">
                                                <div class="extended-data"><a href="{$baseurl}/{insert name=get_seo_convo value=a assign=cvseo username=$m[i].username|stripslashes}{$cvseo}"><b class="username">{$m[i].username|stripslashes}<em>&raquo;</em></b><span class="gig-title">{insert name=last_email value=a assign=lem uid=$m[i].USERID}{$lem|stripslashes|truncate:50:"...":true}</span></a></div>
                                                {if $lur eq "1"}<div class="unread-message" title="New message!"><span>{$lang233}</span></div>{/if}
                                            </div>
                                        </td>
                                        <td class="datetime last"><div>{insert name=get_time_to_days_ago value=a time=$m[i].time}</div></td>
                                    </tr>
                                    {/if}
                                    {/section}
                                 {elseif $s eq "archived"}
                                 	{section name=i loop=$m}
                                    {assign var="show" value=0}
                                    {section name=j loop=$arc}
                                    {if $arc[j].AID eq $m[i].USERID}
                                    {assign var="show" value=1}
                                    {/if}
                                    {/section}
                                    {insert name=last_unread value=a assign=lur uid=$m[i].USERID}
                                    {if $show eq "1" AND $lur eq "0"}
                                    <tr class="entry {if $lur eq "1"}unread{else}read{/if}">
                                        <td {if $smarty.section.i.iteration eq "0"}class="first"{/if}>
                                            <div class="gig-entry">
                                                <div class="extended-data"><a href="{$baseurl}/{insert name=get_seo_convo value=a assign=cvseo username=$m[i].username|stripslashes}{$cvseo}"><b class="username">{$m[i].username|stripslashes}<em>&raquo;</em></b><span class="gig-title">{insert name=last_email value=a assign=lem uid=$m[i].USERID}{$lem|stripslashes|truncate:50:"...":true}</span></a></div>
                                                {if $lur eq "1"}<div class="unread-message" title="New message!"><span>{$lang233}</span></div>{/if}
                                            </div>
                                        </td>
                                        <td class="datetime last"><div>{insert name=get_time_to_days_ago value=a time=$m[i].time}</div></td>
                                    </tr>
                                    {/if}
                                    {/section}
                                 {/if}                             
                              </tbody>
                            </table>
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