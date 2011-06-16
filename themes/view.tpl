            {insert name=seo_clean_titles assign=title value=a title=$p.gtitle}
            <div class="main-wrapper">
                <div id="main">
                    <div class="content">  
                  	{literal}                  
                    <script type="text/javascript">
					$(document).ready(function(){
					  $("#photo1").click(function(){
						var img = new Image();
						$(img).load(function () {
							$('#big-image').hide();
							$('#big-image').attr('src', '{/literal}{$purl}/t/{$p.p1}?{$smarty.now}{literal}');	
							$('#big-image').fadeIn();
						}).error(function() {
						}).attr('src', '{/literal}{$purl}/t/{$p.p1}?{$smarty.now}{literal}');
					  });
					  {/literal}
					  {if $p.p2 ne ""}
					  {literal}
					  $("#photo2").click(function(){
						var img = new Image();
						$(img).load(function () {
							$('#big-image').hide();
							$('#big-image').attr('src', '{/literal}{$purl}/t/{$p.p2}?{$smarty.now}{literal}');	
							$('#big-image').fadeIn();
						}).error(function() {
						}).attr('src', '{/literal}{$purl}/t/{$p.p2}?{$smarty.now}{literal}');
					  });
					  {/literal}
					  {/if}
					  {if $p.p2 ne ""}
					  {literal}
					  $("#photo3").click(function(){
						var img = new Image();
						$(img).load(function () {
							$('#big-image').hide();
							$('#big-image').attr('src', '{/literal}{$purl}/t/{$p.p3}?{$smarty.now}{literal}');	
							$('#big-image').fadeIn();
						}).error(function() {
						}).attr('src', '{/literal}{$purl}/t/{$p.p3}?{$smarty.now}{literal}');
					  });
					  {/literal}
					  {/if}
					  {literal}
					});
					$(document).ready( function() {
					 $('.gig-desc').linkify();
						$(".gig-desc a").each(function() {
							$(this).attr("target", "_blank");
						});
					});
					</script>
                    {/literal}					
                    <div class="section">
                        <div class="c">
                            <div class="article">
                                <div class="article-promo">
                                    <div class="article-txt">
                                        <div class="seller">
                                            <div class="holder">
                                                <div class="gig-header">						  
                                                    <div class="usr-img">
                                                    	{insert name=get_member_profilepicture assign=profilepicture value=var USERID=$p.USERID}
                                                        <div class="up-userimage"><img alt="{$p.username|stripslashes}" src="{$membersprofilepicurl}/thumbs/{$profilepicture}?{$smarty.now}" /></div>
                                                    </div>
                                                    <div class="gig-title-g">
                                                        <h1><a href="{$baseurl}/{insert name=get_seo_profile value=a username=$p.username|stripslashes}">{$p.username|stripslashes}</a>: {$lang62} {$p.gtitle|stripslashes} {$lang63}{$p.price|stripslashes}</h1>
                                                        <p>{$lang119}: <b><a href="{$baseurl}/categories/{$p.seo|stripslashes}">{$p.name|stripslashes}</a></b> &bull; {$lang130} <strong>~{$p.days|Stripslashes} {if $p.days eq "1"}{$lang132}{else}{$lang131}{/if}</strong></p>
                                                        <ul class="gig-meta">
                                                            <li class="positive">
                                                            	{if $f|@count eq "0"}
                                                                <em>{$lang138}</em>
                                                                {else}
                                                                {insert name=get_rating value=a assign=percent b=$brat g=$grat}
                                                                <span>positive</span><em>{$percent}&#37; {$lang139}</em>
                                                                {/if}
                                                            </li>	
                                                            {if $smarty.session.USERID GT "0"}
                                                            {insert name=like_cnt value=var assign=liked pid=$p.PID}
                                                            <li id="removebookmark" class="like active" {if $liked ne "1"}style="display:none"{/if}><a href="{$baseurl}/bookmark?id={$p.PID|stripslashes}&do=rem" class="removebookmark">{$lang148}</a></li>
                                                            <li id="addbookmark" class="like" {if $liked eq "1"}style="display:none"{/if}><a href="{$baseurl}/bookmark?id={$p.PID|stripslashes}&do=add" class="addbookmark">{$lang147}</a></li>
                                                            {/if}
                                                        </ul>
                                                    </div>
                                                    <div class="orderNow">   
                                                    	{if $smarty.session.USERID eq $p.USERID}   
                                                        <a href="{$baseurl}/edit?id={$p.PID}" class="order-now-g" style="padding-left:10px;padding-right:10px;padding-top:5px;padding-bottom:5px; background-color:#666; color:#FFF;">{$lang141}</a>
                                                        {elseif $smarty.session.USERID GT "0"}
                                                        <a href="{$baseurl}/order?id={$p.PID}" class="order-now-g" style="padding-left:10px;padding-right:10px;padding-top:5px;padding-bottom:5px; background-color:#666; color:#FFF;">{$lang140}</a>
                                                        {else}
                                                        <a href="#" class="login-link order-now-g" rel="#register-spotlight" style="padding-left:10px;padding-right:10px;padding-top:5px;padding-bottom:5px; background-color:#666; color:#FFF;">{$lang140}</a>
                                                        {/if}
                                                    </div>												
                                                </div>
									  			<br clear="all"/>
												<div class="gig-desc">
													{$p.gdesc|stripslashes}
                                                    {literal}
													<script type="text/javascript">
													$(document).ready( function() {
														$('a#fbsharer').click(function (){ 
															url = encodeURIComponent('{/literal}{$baseurl}/{$p.seo|stripslashes}/{$p.PID|stripslashes}/{$title|replace:"'":""}?viewmode=1{literal}');
															title = encodeURIComponent('{/literal}{$p.username|stripslashes}: {$lang62} {$p.gtitle|stripslashes|replace:"'":""} {$lang63}{$p.price|stripslashes}.{literal}');
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
                                                            <a href="mailto:?subject={$lang62} {$p.gtitle|stripslashes} {$lang63}{$p.price|stripslashes}&amp;body={$baseurl}/{$p.seo|stripslashes}/{$p.PID|stripslashes}/{$title}" target="_blank"><img alt="Btn-email" src="/images/btn-email.png?1283617092" /></a>&nbsp;
                                                            <a href="mailto:?subject={$lang62} {$p.gtitle|stripslashes} {$lang63}{$p.price|stripslashes}&amp;body={$baseurl}/{$p.seo|stripslashes}/{$p.PID|stripslashes}/{$title}">email</a>
                                                        </li>
                                                        <li>
                                                        	{if $short_urls eq "1"}
                                                            {insert name=get_short_url value=a assign=takento PID=$p.PID seo=$p.seo short=$posts[i].short title=$title}
                                                            <a href="http://twitter.com/share" class="twitter-share-button" data-url="{$takento}" data-via="{$twitter}" data-text="{$lang62} {$p.gtitle|stripslashes} {$lang63}{$p.price|stripslashes}" data-count="horizontal">Tweet</a>
                                                            {else}
                                                            <a href="http://twitter.com/share" class="twitter-share-button" data-url="{$baseurl}/{$p.seo|stripslashes|replace:' ':'+'}/{$p.PID|stripslashes}/{$title}" data-via="{$twitter}" data-text="{$lang62} {$p.gtitle|stripslashes} {$lang63}{$p.price|stripslashes}" data-count="horizontal">Tweet</a>
                                                            {/if}
															<script type="text/javascript" src="http://platform.twitter.com/widgets.js"></script>
                                                        </li>
                                                        <li>
                                                            <a class="addthis_button" addthis:url="{$baseurl}/{$p.seo|stripslashes}/{$p.PID|stripslashes}/{$title}" addthis:title="{$lang62} {$p.gtitle|stripslashes} {$lang63}{$p.price|stripslashes}" href="http://www.addthis.com/bookmark.php?v=250&amp;pub="><img src="http://s7.addthis.com/static/btn/sm-share-en.gif" width="83" height="16" alt="Bookmark and Share"></a>
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
                                                    <div style="padding-top:15px;">
                                                    {if $smarty.session.USERID ne $p.USERID}
                                                    {if $smarty.session.USERID GT "0"}
                                                        <a href="{$baseurl}/{insert name=get_seo_convo value=a assign=cvseo username=$p.username|stripslashes}{$cvseo}?id={$p.PID|stripslashes}">{$lang142}</a>
                                                    {else}
                                                        <a href="#" class="login-link" rel="#register-spotlight">{$lang142}</a>
                                                    {/if}
                                                    {/if}
                                                    </div>
												</div>
												<div class="image-box-holder">
													<div class="image-box">
														<img alt="{$p.gtitle|stripslashes}" id="big-image" src="{$purl}/t/{$p.p1}?{$smarty.now}" />
														<ul class="tags">
                                                        	{section name=i loop=$tags}
															<li><span><a href="{$baseurl}/tags/{$p.seo|stripslashes}/{$tags[i]|stripslashes}">{$tags[i]|stripslashes}</a></span></li>
															{/section}
														</ul>
													</div>														
                                                    <div id="photo1"><img alt="{$p.gtitle|stripslashes}" src="{$purl}/t2/{$p.p1}?{$smarty.now}" /></div>	
                                                    {if $p.p2 ne ""}<div id="photo2"><img alt="{$p.gtitle|stripslashes}" src="{$purl}/t2/{$p.p2}?{$smarty.now}" /></div>	{/if}
                                                    {if $p.p3 ne ""}<div id="photo3"><img alt="{$p.gtitle|stripslashes}" src="{$purl}/t2/{$p.p3}?{$smarty.now}" /></div>	{/if}
												</div>
											</div>
										</div>
										<div class="spacer plus10"></div>
											{if $p.youtube ne ""}<p><a href="{$p.youtube|stripslashes}" target="_blank">{$lang134}</a></p>{/if}											
										</div>
									</div>
									<div class="article-info">
                                    
                                    {if $f|@count GT 0}
                                    <div class="feedback">
                                        <h3>{$lang143}</h3>
                                        <ul>
                                        	{section name=i loop=$f}
                                            <li>
                                                <div>
                                                    <a href="{$baseurl}/{insert name=get_seo_profile value=a username=$f[i].username|stripslashes}">{$f[i].username|stripslashes}</a>                                                    
                                                        <img src="{$imageurl}/thumb_{if $f[i].good eq "1"}up{else}down{/if}.png" align="absmiddle" border="0"/>
                                                    <div>
                                                    <p>{$f[i].comment|stripslashes}</p>
                                                    </div>
                                                </div>
                                            </li>
                                            {/section}
                                        </ul>
                                    </div>
                                    {/if}
				
                                    <div class="other-gigs">
                                        <h3>{$lang137} <strong><a href="{$baseurl}/{insert name=get_seo_profile value=a username=$p.username|stripslashes}">{$p.username|stripslashes}</a></strong></h3>
                                        <ul>                    
                    					{section name=i loop=$u}
                                        {insert name=seo_clean_titles assign=utitle value=a title=$u[i].gtitle}
                                        <li class="other-gig-box">
                                            <a href="{$baseurl}/{$u[i].seo|stripslashes}/{$u[i].PID|stripslashes}/{$utitle}"><img alt="{$u[i].gtitle|stripslashes}" src="{$purl}/t2/{$u[i].p1}?{$smarty.now}" /></a>
                                            <div>
                                            <p><a href="{$baseurl}/{$u[i].seo|stripslashes}/{$u[i].PID|stripslashes}/{$utitle}">{$lang62} {$u[i].gtitle|stripslashes} {$lang63}{$u[i].price|stripslashes}</a></p>
                                            <p class="category-label"><a href="{$baseurl}/categories/{$u[i].seo|stripslashes}">{$u[i].name|stripslashes}</a></p>
                                            </div>
                                        </li>
										{/section}
                                        </ul>
                                    </div>

										<div class="related-gigs">
											<h3>{$lang136}</h3>
											<ul>
                                            	{section name=i loop=$r}
                                                {insert name=seo_clean_titles assign=rtitle value=a title=$r[i].gtitle}
                                                <li class="other-gig-box">
                                                    <a href="{$baseurl}/{$r[i].seo|stripslashes}/{$r[i].PID|stripslashes}/{$rtitle}"><img alt="{$r[i].gtitle|stripslashes}" src="{$purl}/t2/{$r[i].p1}?{$smarty.now}" /></a>
                                                    <div>
                                                    <p><a href="{$baseurl}/{$r[i].seo|stripslashes}/{$r[i].PID|stripslashes}/{$rtitle}">{$lang62} {$r[i].gtitle|stripslashes} {$lang63}{$r[i].price|stripslashes}</a></p>
                                                    <p class="category-label"><a href="{$baseurl}/categories/{$r[i].seo|stripslashes}">{$r[i].name|stripslashes}</a></p>
                                                
                                                    </div>
                                                </li>
                                                {/section}
											</ul>
										</div>
									
                                    </div>
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