              <div class="main-wrapper">
                <div id="main">
                  <div class="content">
                  {if $message ne ""}
                  {include file="error.tpl"}
                  {/if}
                    <center>
                    {insert name=get_advertisement AID=1}
                    </center>
					{literal}
					<script type="text/javascript">
                    $(document).ready( function() {
                     $('#user_description').linkify();
                     $('.gig-desc').linkify();
                        $("#user_description a").each(function() {
                            $(this).attr("target", "_blank");
                        });
                        $(".gig-desc a").each(function() {
                            $(this).attr("target", "_blank");
                        });
                    });
                    </script>
					{/literal}
                    <div class="section">
                        <div class="page" id="userprofilepage">
                            <div class="profile-header">
                                <div class="profile-image">
                                	{insert name=get_member_profilepicture assign=profilepicture value=var USERID=$USERID}
                                    <img alt="{$uname|stripslashes}" src="{$membersprofilepicurl}/thumbs/{$profilepicture}?{$smarty.now}" />
                                </div>
                                <div class="profile-details">
                                    <div class="user-identity">
                                        <h1>{$uname|stripslashes}</h1>
                                        <div class="user-ratings">
                                            <span class="rating">
                                                    {$lang398}: {insert name=get_percent value=a assign=percent userid=$USERID}{$percent}&#37; {$lang139}
                                            </span>
                                        </div>
                                    </div>
                                    <span class="profile-meta">{$lang399} {$addtime|date_format} </span>
                                    {if $smarty.session.USERID GT "0"}
                                    {if $smarty.session.USERID ne $USERID}
                                    <a href="{$baseurl}/{insert name=get_seo_convo value=a assign=cvseo username=$uname|stripslashes}{$cvseo}">{$lang400}</a>
                                    {/if}
                                    {else}
                                    <a href="{$baseurl}/{insert name=get_seo_convo value=a assign=cvseo username=$uname|stripslashes}{$cvseo}">{$lang400}</a>                                              
                                    {/if}
                                    <p id="user_description"><p>{$desc|stripslashes}</p></p>
                                </div>
                            </div>
                    
                        </div>
                    </div>
                    <div class="sub-titles">
                        <h2>{$lang401} {$uname|stripslashes}</h2>
                    </div>
                    <div class="section">
                    	{section name=i loop=$posts}
                        {insert name=seo_clean_titles assign=title value=a title=$posts[i].gtitle}
                        <div class="article">
                          <div class="article-promo">
                            <div class="article-txt">
                              <div class="seller">
                                <div class="holder order-btn">
                                  <div class="gig-head">
                                    <div class="gig-title-l">
                                      <h1><a href="{$baseurl}/{$posts[i].seo|stripslashes}/{$posts[i].PID|stripslashes}/{$title}">{$lang62} {$posts[i].gtitle|stripslashes} {$lang63}{$posts[i].price|stripslashes}</a></h1>
                                      <p class="metadata">{$lang119}: <b><a href="{$baseurl}/categories/{$posts[i].seo|stripslashes}">{$posts[i].name|stripslashes}</a></b> &bull; {$lang402}: ~<strong>{$posts[i].days|stripslashes} {$lang131}</strong></p>                                      
                                          <ul class="gig-meta">
                                            <li class="positive">
                                                <span>positive</span><em>{insert name=get_rating2 value=a assign=percent2 pid=$posts[i].PID}{$percent2}&#37; {$lang139}</em>
                                            </li>
                                          </ul>                                        
                                    </div>
                                    <div class="orderNow">                                        
                                        <a class="order-now" {if $smarty.session.USERID ne ""}href="{$baseurl}/{$posts[i].seo|stripslashes}/{$posts[i].PID|stripslashes}/{$title}"{else}href="#" rel="#register-spotlight"{/if}>{$lang107}</a>
                                    </div>
                                  </div>
                                  <br clear="all"/>
                                  <div class="gig-content">
                                    <div class="gig-content-left">
                                      <div class="gig-description">
                                        {$posts[i].gdesc|stripslashes}
                                        <div class="gig-share-links">
                                            {literal}
											<script type="text/javascript">
                                            $(document).ready( function() {
                                                $('a#fbsharer').click(function (){ 
                                                    url = encodeURIComponent('{/literal}{$baseurl}/{$posts[i].seo|stripslashes}/{$posts[i].PID|stripslashes}/{$title}?viewmode=1{literal}');
                                                    title = encodeURIComponent('{/literal}{$posts[i].username|stripslashes}: {$lang62} {$posts[i].gtitle|stripslashes} {$lang63}{$posts[i].price|stripslashes}.{literal}');
                                                    fbshare_url = 'http://www.facebook.com/sharer.php?u=' + url + '&t=' + title;
                                                    openCenteredWindow(fbshare_url);
                                                    return false;
                                                });
                                            });
                                            </script>
                                            {/literal}
                                            <ul class="share-control">
                                                <li>
                                                    {$lang135}:
                                                </li>
                                                <li>
                                                    <a id="fbsharer" href='#'><img alt="Btn-facebook" src="{$imageurl}/btn-facebook.png" />&nbsp; facebook</a>
                                                </li>
                                                <li>
                                                    <a href="mailto:?subject={$lang62} {$posts[i].gtitle|stripslashes} {$lang63}{$posts[i].price|stripslashes}&amp;body={$baseurl}/{$posts[i].seo|stripslashes}/{$posts[i].PID|stripslashes}/{$title}" target="_blank"><img alt="Btn-email" src="/images/btn-email.png?1283617092" /></a>&nbsp;
                                                    <a href="mailto:?subject={$lang62} {$posts[i].gtitle|stripslashes} {$lang63}{$posts[i].price|stripslashes}&amp;body={$baseurl}/{$posts[i].seo|stripslashes}/{$posts[i].PID|stripslashes}/{$title}">email</a>
                                                </li>
                                                <li>
                                                	{if $short_urls eq "1"}
                                                    {insert name=get_short_url value=a assign=takento PID=$posts[i].PID seo=$posts[i].seo short=$posts[i].short title=$title}
                                                    <a href="http://twitter.com/share" class="twitter-share-button" data-url="{$takento}" data-via="{$twitter}" data-text="{$lang62} {$posts[i].gtitle|stripslashes} {$lang63}{$posts[i].price|stripslashes}" data-count="horizontal">Tweet</a>
                                                    {else}
                                                    <a href="http://twitter.com/share" class="twitter-share-button" data-url="{$baseurl}/{$posts[i].seo|stripslashes|replace:' ':'+'}/{$posts[i].PID|stripslashes}/{$title}" data-via="{$twitter}" data-text="{$lang62} {$posts[i].gtitle|stripslashes} {$lang63}{$posts[i].price|stripslashes}" data-count="horizontal">Tweet</a>
                                                    {/if}
                                                    <script type="text/javascript" src="http://platform.twitter.com/widgets.js"></script>
                                                </li>
                                                <li>
                                                    <a class="addthis_button" addthis:url="{$baseurl}/{$posts[i].seo|stripslashes}/{$posts[i].PID|stripslashes}/{$title}" addthis:title="{$lang62} {$posts[i].gtitle|stripslashes} {$lang63}{$posts[i].price|stripslashes}" href="http://www.addthis.com/bookmark.php?v=250&amp;pub="><img src="http://s7.addthis.com/static/btn/sm-share-en.gif" width="83" height="16" alt="Bookmark and Share"></a>
                                                    {literal}
                                                    <script type="text/javascript">
                                                    var addthis_config = {
                                                        services_exclude: 'email, facebook, twitter, print'
                                                    }
                                                    </script>
                                                    <script type="text/javascript" src="http://s7.addthis.com/js/250/addthis_widget.js#pub="></script>
                                                    {/literal}
                                                </li>
                                            </ul>                        
                                        </div>
                                      </div>
                                    </div>
                                    <div class="gig-content-right">
                                      <div class="gig-image">
                                        <img alt="{$posts[i].gtitle|stripslashes}" src="{$purl}/t/{$posts[i].p1}?{$smarty.now}" />
                                        <ul class="tags">
                                        	{insert name=get_explode value=a assign=tags gtags=$posts[i].gtags}
                                            {section name=j loop=$tags}
                                            <li><span><a href="{$baseurl}/tags/{$posts[j].seo|stripslashes}/{$tags[j]|stripslashes}">{$tags[j]|stripslashes}</a></span></li>
                                            {/section}
                                        </ul>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="spacer plus10"></div>
                                {if $posts[i].youtube ne ""}<p><a href="{$posts[i].youtube|stripslashes}" target="_blank">{$lang134}</a></p>{/if}
                            </div>
                          </div>
                        </div>
                        {/section}
                    </div>
                  </div>
                  {include file="side.tpl"}
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>