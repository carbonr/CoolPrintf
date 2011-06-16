              <div class="main-wrapper">
                <div id="main">
                  <div class="content">
                  {if $message ne ""}
                  {include file="error.tpl"}
                  {/if}
					
                    <div class="section">
                        <div class="manage">
                          <div class="heading">
                            <div class="holder">
                              <ul class="action">
                                <li><a href="{$baseurl}/new" class="btn-normal">{$lang182}</a></li>
                                <li><a class="btn-suspend" href="#">{$lang183}</a></li>
                                <li><a class="btn-activate" href="#">{$lang184}</a></li>
                                <li><a href="#" class="btn-delete">{$lang185}</a></li>
                              </ul>
                              <div class="sort">
                                <strong>{$lang186}</strong>
                                <ul>
                                  <li><a href="#" class="select-all">{$lang187}</a>,</li>
                                  <li><a href="#" class="select-none">{$lang188}</a>,</li>
                                  <li><a href="#" class="select-suspended">{$lang189}</a>,</li>
                                  <li><a href="#" class="select-active">{$lang190}</a></li>
                                </ul>
                              </div>
                            </div>
                          </div>
                        </div>
                    </div>
                    <form action="{$baseurl}/manage_gigs" id="gigs_form" method="post">
                    <div style="margin:0;padding:0;display:inline"></div>
                    <div class="featured">
                    	{section name=i loop=$posts}
                        {insert name=seo_clean_titles assign=title value=a title=$posts[i].gtitle}
                        <div class="box edit">
                          <div class="c">
                            <div class="holder edit-status-&lt;%=gig.status%&gt;">
                              <a href="{$baseurl}/edit?id={$posts[i].PID}" class="btn-edit">edit gig</a>
                              <div class="frame-img">
                                <a href="{$baseurl}/edit?id={$posts[i].PID}"><img src="{$purl}/t2/{$posts[i].p1}?{$smarty.now}" /></a>
                              </div>
                              <div class="frame">
                                <h2>
                                  <a href="{$baseurl}/{$posts[i].seo|stripslashes}/{$posts[i].PID|stripslashes}/{$title}">{$lang62} {$posts[i].gtitle|stripslashes} {$lang63}{$posts[i].price|stripslashes}</a>
                                </h2>
                                <p>
                                  {$posts[i].gdesc|stripslashes}
                                </p>
                                {if $posts[i].active eq "1"}
                                <strong style="color:limegreen;font-size:14px;margin:2px;">{$lang191}: {$lang192}</strong>
                                {elseif $posts[i].active eq "2"}
                                <strong style="color:orange;font-size:14px;margin:2px;">{$lang191}: {$lang193}</strong>
                                {elseif $posts[i].active eq "0"}
                                <strong style="color:orange;font-size:14px;margin:2px;">{$lang191}: {$lang194}</strong>
                                {/if}
                                <ul class="detail">
                                  <li>
                                    <a href="{$baseurl}/manage_orders?status=in_progress">{$lang195}:</a><span class="open-orders">{insert name=active_orders value=a assign=ao PID=$posts[i].PID}{$ao}</span>
                                  </li>
                                  <li>
                                    <a href="{$baseurl}/manage_orders?status=in_progress">{$lang196}:</a>{insert name=done_orders value=a assign=co PID=$posts[i].PID}{$co}
                                  </li>
                                  <li>{$lang181}: {$posts[i].viewcount|stripslashes}
                                  </li>
                                  <li>{$lang198}: <span class="gains">{$lang197}{$posts[i].rev|stripslashes}</span>
                                  </li>
                                </ul>
                                <div style="position:absolute;top:65px;left:530px;width:75px;">
                                    <a href="#" onclick="openCenteredWindow('http://www.facebook.com/sharer.php?u={$baseurl}/{$posts[i].seo|stripslashes}/{$posts[i].PID|stripslashes}/{$title}');"><img alt="Btn-facebook" src="{$imageurl}/btn-facebook.png" /></a>
                                    <a href="mailto:?subject={$lang62} {$posts[i].gtitle|stripslashes} {$lang63}{$posts[i].price|stripslashes}&amp;body={$baseurl}/{$posts[i].seo|stripslashes}/{$posts[i].PID|stripslashes}/{$title}" target="_blank" title="send by email"><img alt="Btn-email" src="{$imageurl}/btn-email.png" /></a>		
                                </div>                                
                              </div>
                            </div>
                            <div class="check">
                            	{if $posts[i].active eq "1"}
                              	<input class="checkbox approved" id="gig_" name="gig[]" type="checkbox" value="{$posts[i].PID}" />
                              	{elseif $posts[i].active eq "2"}
                              	<input class="checkbox suspended" id="gig_" name="gig[]" type="checkbox" value="{$posts[i].PID}" />
                                {elseif $posts[i].active eq "0"}
                              	<input class="checkbox inactive" id="gig_" name="gig[]" type="checkbox" value="{$posts[i].PID}" />
                                {/if}
                            </div>
                          </div>
                    	</div>
                    	{/section}
                    </div>
                    <input type="hidden" name="subme" value="1" />
                    </form>

  					<div class="paging">
                    	<div class="p1">
                        	<ul>
                            	{$pagelinks}
                            </ul>
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