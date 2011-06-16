              <div class="main-wrapper">
                <div id="main">
                  <div class="content">
                  {if $message ne ""}
                  {include file="error.tpl"}
                  {/if}
                  	{if $smarty.session.USERID ne ""}
                    {include file="sub_bit.tpl"}
                    {else}
                    <div class="welcomebox">
                      <div style="position:relative;"></div>
                      <h1>{$lang102}<br />{$lang103}</h1>
                      <h2>{$lang104}</h2>
                    </div>
					{/if}
					<div class="darkenBackground"></div>
                    
                    <div class="category-tags">
                    {if $tag != ""}<a href="{$baseurl}/tags/{$cid}/{$tag|stripslashes}" class="tag selected" title="{$tag|stripslashes}">&nbsp;{$tag|stripslashes}&nbsp;</a>{/if}
                    {section name=i loop=$tags max=10}
                    {if $tags[i] != "" AND $tags[i] !=$tag}<a href="{$baseurl}/tags/{$cid}/{$tags[i]|stripslashes}" class="tag" title="{$tags[i]|stripslashes}">&nbsp;{$tags[i]|stripslashes}&nbsp;</a>{/if}
                    {/section}
                    </div>

                    <div class="featured">   
                    	<div class="gig_filters bordertop">
                          <div class="ul bg-f-a">
                            <div class="li"><span class="helptext">{$lang109}</span></div>
                                <div class="li sep-right"><a href="{$baseurl}/categories/{$cid}?s=d" {if $s eq "d" OR $s eq ""}class="current"{/if}>{$lang110}</a></div>
                                <div class="li sep-right"><a href="{$baseurl}/categories/{$cid}?s=p" {if $s eq "p"}class="current"{/if}>{$lang111}</a></div>
                                <div class="li last"><a href="{$baseurl}/categories/{$cid}?s=r" {if $s eq "r"}class="current"{/if}>{$lang112}</a></div>
                          </div>
                        </div>                
                        {include file="bit.tpl"}
                    </div>
                    
  					<div class="paging">
                    	<div class="p1">
                        	<ul>
                            	{$pagelinks}
                            </ul>
                        </div>
                    </div>
					<div class="rss-link"><a href="{$baseurl}/rss">{$lang108}</a></div>
                  </div>
                  {include file="side.tpl"}
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>