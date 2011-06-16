						{section name=i loop=$posts}
                        {if $smarty.section.i.iteration eq "6"}
                        <div style="padding:5px;">
                        <center>
                        {insert name=get_advertisement AID=3}
                        </center>
                        </div>
                        {/if}
                        {insert name=seo_clean_titles assign=title value=a title=$posts[i].gtitle}
                        <div class="box">
                          <div class="c">
                            <div class="holder">                              
                                {if $posts[i].feat eq "1"}<span class="featured-label">featured</span>{/if}
                              	<div class="frame-img">
                                	<a href="{$baseurl}/{$posts[i].seo|stripslashes}/{$posts[i].PID|stripslashes}/{$title}"><img alt="{$posts[i].gtitle|stripslashes}" src="{$purl}/t2/{$posts[i].p1}?{$smarty.now}" /></a>
                              	</div>
                              	<div class="frame">
                                	<h2><a href="{$baseurl}/{$posts[i].seo|stripslashes}/{$posts[i].PID|stripslashes}/{$title}">{$lang62} {$posts[i].gtitle|stripslashes|truncate:50:"...":true} {$lang63}{$posts[i].price|stripslashes}</a></h2>
                                	<p>{$posts[i].gdesc|stripslashes|truncate:140:"...":true}<span>&nbsp;({$lang414} <a href="{$baseurl}/{insert name=get_seo_profile value=a username=$posts[i].username|stripslashes}">{$posts[i].username|stripslashes}</a>)</span></p>
	                                <ul class="control">
                                      <li>
                                        <a href="{$baseurl}/{$posts[i].seo|stripslashes}/{$posts[i].PID|stripslashes}/{$title}">{$lang105}</a>
                                      </li>
                                  		<li class="share">
                                        	{if $short_urls eq "1"}
                                            {insert name=get_short_url value=a assign=takento PID=$posts[i].PID seo=$posts[i].seo short=$posts[i].short title=$title}
                                            <a href="http://twitter.com/share" class="twitter-share-button" data-url="{$takento}" data-via="{$twitter}" data-text="{$lang62} {$posts[i].gtitle|stripslashes} {$lang63}{$posts[i].price|stripslashes}" data-count="horizontal">Tweet</a>
                                            {else}
                                            <a href="http://twitter.com/share" class="twitter-share-button" data-url="{$baseurl}/{$posts[i].seo|stripslashes|replace:' ':'+'}/{$posts[i].PID|stripslashes}/{$title}" data-via="{$twitter}" data-text="{$lang62} {$posts[i].gtitle|stripslashes} {$lang63}{$posts[i].price|stripslashes}" data-count="horizontal">Tweet</a>
                                            {/if}											
											<script type="text/javascript" src="http://platform.twitter.com/widgets.js"></script>
                                            <a href="#" onclick="openCenteredWindow('http://www.facebook.com/sharer.php?u={$baseurl}/{$posts[i].seo|stripslashes}/{$posts[i].PID|stripslashes}/{$title|replace:"'":""}');"><img alt="Btn-facebook" src="{$imageurl}/btn-facebook.png" /></a>
                                  		</li>
                                	</ul>
                                	<div class="quick-order">
	                                    <a class="login-link" {if $smarty.session.USERID ne ""}href="{$baseurl}/{$posts[i].seo|stripslashes}/{$posts[i].PID|stripslashes}/{$title}"{else}href="#" rel="#register-spotlight"{/if}>{$lang107}</a>                                  
                                	</div>
                            	</div>
                            </div>
                          </div>
                        </div>
                        {/section}