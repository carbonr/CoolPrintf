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
                    {section name=i loop=$tags max=10}
                    {if $tags[i] != ""}<a href="{$baseurl}/tags/{$cid}/{$tags[i]|stripslashes}" class="tag" title="logo">&nbsp;{$tags[i]|stripslashes}&nbsp;</a>{/if}
                    {/section}
                    </div>

                    <div class="featured">   
                    	<div class="gig_filters bordertop">
                          <div class="ul bg-f-a">
                            <div class="li"><span class="helptext">{$lang109}</span></div>
                            	{if $s eq "d" OR $s eq ""}
                                <div class="li sep-right"><a href="{$baseurl}/categories/{$cid}?s=dz" class="current">{$lang110}</a></div>
                                {else}
                                <div class="li sep-right"><a href="{$baseurl}/categories/{$cid}?s=d" {if $s eq "d" OR $s eq "dz" OR $s eq ""}class="current"{/if}>{$lang110}</a></div>
                                {/if}
                                {if $s eq "p"}
                                <div class="li sep-right"><a href="{$baseurl}/categories/{$cid}?s=pz" class="current">{$lang111}</a></div>
                                {else}
                                <div class="li sep-right"><a href="{$baseurl}/categories/{$cid}?s=p" {if $s eq "p" OR $s eq "pz"}class="current"{/if}>{$lang111}</a></div>
                                {/if}
                                {if $s eq "r"}
                                <div class="li sep-right"><a href="{$baseurl}/categories/{$cid}?s=rz" class="current">{$lang112}</a></div>
                                {else}
                                <div class="li sep-right"><a href="{$baseurl}/categories/{$cid}?s=r" {if $s eq "r" OR $s eq "rz"}class="current"{/if}>{$lang112}</a></div>
                                {/if}
                                {if $s eq "c"}
                                <div class="li last"><a href="{$baseurl}/categories/{$cid}?s=cz" class="current">{$lang436}</a></div>
                                {else}
                                <div class="li last"><a href="{$baseurl}/categories/{$cid}?s=c" {if $s eq "c" OR $s eq "cz"}class="current"{/if}>{$lang436}</a></div>
                                {/if}
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
					<div class="rss-link"><a href="{$baseurl}/rss?c={$catselect}">{$lang108}</a></div>
                  </div>
                  {include file="side.tpl"}
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>