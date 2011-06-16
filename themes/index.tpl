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
                      <div style="position:relative;">
                      	<div class="how-it-works-button">
                          <a href="#" id="show-how-it-works" rel="#how-it-work-spotlight">
                            {$lang419}
                          </a>
                        </div>
                      </div>
                      <h1>{$lang102}<br />{$lang103}</h1>
                      <h2>{$lang104}</h2>
                    </div>
					{/if}
                    <div class="how-it-work-popup apple_overlay" id="how-it-work-spotlight" style="display:none;">
                      <div class="how-it-works-wrapper" id="how-it-works-spot">
                        <div class="t"></div>
                        <div class="c">
                          <div class="close"><a href="#" class="spotlight-close">{$lang3}</a></div>
                          <div class="spacer"></div>
                    
                          <div class="left-column columns">
                            <h1><center>{$lang420}</center></h1>
                            <p>{$lang421}</p>
                            <div class="arrow-down"></div>
                            <p>{$lang422}</p>
                            <div class="arrow-down"></div>
                            <p>{$lang423}</p>
                            <div class="arrow-down"></div>
                            <p>{$lang424}</p>
                            <div class="arrow-down"></div>
                            <p>{$lang425}</p>
                            <div class="arrow-down"></div>
                            <p><strong>{$lang426}</strong></p>
                          </div>
                          <div class="right-column columns">
                            <h1><center>{$lang427}</center></h1>
                            <p>{$lang428}</p>
                            <div class="arrow-down"></div>
                            <p>{$lang429}</p>
                            <div class="arrow-down"></div>
                            <p>{$lang430}</p>
                            <div class="arrow-down"></div>
                            <p>{$lang431}</p>
                            <div class="arrow-down"></div>
                            <p>{$lang432}</p>
                            <div class="arrow-down"></div>
                            <p>{$lang433}</p>
                          </div>
                          <div class="spacer"></div>
                          <div class="more"><a href="{$baseurl}/terms_of_service">{$lang434}</a></div>
                        </div>
                        <div class="b"></div>
                      </div>
                    </div>
					<div class="darkenBackground"></div>
                    <div class="featured">   
                    	<div class="gig_filters bordertop">
                          <div class="ul bg-f-a">
                            <div class="li"><span class="helptext">{$lang109}</span></div>
                            	{if $s eq "d" OR $s eq ""}
                                <div class="li sep-right"><a href="{$baseurl}?s=dz" class="current">{$lang110}</a></div>
                                {else}
                                <div class="li sep-right"><a href="{$baseurl}?s=d" {if $s eq "d" OR $s eq "dz" OR $s eq ""}class="current"{/if}>{$lang110}</a></div>
                                {/if}
                                {if $s eq "p"}
                                <div class="li sep-right"><a href="{$baseurl}?s=pz" class="current">{$lang111}</a></div>
                                {else}
                                <div class="li sep-right"><a href="{$baseurl}?s=p" {if $s eq "p" OR $s eq "pz"}class="current"{/if}>{$lang111}</a></div>
                                {/if}
                                {if $s eq "r"}
                                <div class="li sep-right"><a href="{$baseurl}?s=rz" class="current">{$lang112}</a></div>
                                {else}
                                <div class="li sep-right"><a href="{$baseurl}?s=r" {if $s eq "r" OR $s eq "rz"}class="current"{/if}>{$lang112}</a></div>
                                {/if}
                                {if $s eq "c"}
                                <div class="li last"><a href="{$baseurl}?s=cz" class="current">{$lang436}</a></div>
                                {else}
                                <div class="li last"><a href="{$baseurl}?s=c" {if $s eq "c" OR $s eq "cz"}class="current"{/if}>{$lang436}</a></div>
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
					<div class="rss-link"><a href="{$baseurl}/rss">{$lang108}</a></div>
                  </div>
                  {include file="side.tpl"}
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>