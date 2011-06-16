              <div class="main-wrapper">
                <div id="main">
                  <div class="content">
                  {if $message ne ""}
                  {include file="error.tpl"}
                  {/if}
					<form action="{$baseurl}/search" method="get">
                    <div class="looking">
                        <div class="input-label">{$lang129}</div>
                        <div class="row">
                            <input class="text" id="query" name="query" type="text" value="{$tag|stripslashes}" />
                            <input alt="Go" class="button" src="{$imageurl}/btn-go.gif" type="image" />
                        </div>
                    </div>
                    </form>
                    <div class="results-bar">
                        <h2>{$lang124}<span>:</span> {$tag|stripslashes}</h2>
                    
                        <p>{$lang125} <b>{$beginning}&nbsp;-&nbsp;{$ending}</b> of <b>{$total}</b></p>
                    </div>
                    <div class="featured">   
                    	<div class="gig_filters bordertop">
                          <div class="ul bg-f-a">
                            <div class="li"><span class="helptext">{$lang109}</span></div>
                                <div class="li sep-right"><a href="{$baseurl}/search?s=d&query={$tag}" {if $s eq "d" OR $s eq ""}class="current"{/if}>{$lang110}</a></div>
                                <div class="li sep-right"><a href="{$baseurl}/search?s=p&query={$tag}" {if $s eq "p"}class="current"{/if}>{$lang111}</a></div>
                                <div class="li last"><a href="{$baseurl}/search?s=r&query={$tag}" {if $s eq "r"}class="current"{/if}>{$lang112}</a></div>
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