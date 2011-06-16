                                    <tr class="entry {if $lur eq "1"}unread{else}read{/if}">
                                        <td {if $smarty.section.i.iteration eq "0"}class="first"{/if}>
                                            <div class="gig-entry">
                                                <div class="extended-data"><a href="{$baseurl}/{insert name=get_seo_convo value=a assign=cvseo username=$m[i].username|stripslashes}{$cvseo}"><b class="username">{$m[i].username|stripslashes}<em>&raquo;</em></b><span class="gig-title">{insert name=last_email value=a assign=lem uid=$m[i].USERID}{$lem|stripslashes|truncate:50:"...":true}</span></a></div>
                                                {if $lur eq "1"}<div class="unread-message" title="New message!"><span>{$lang233}</span></div>{/if}
                                            </div>
                                        </td>
                                        <td class="datetime last"><div>{insert name=get_time_to_days_ago value=a time=$m[i].time}</div></td>
                                    </tr>