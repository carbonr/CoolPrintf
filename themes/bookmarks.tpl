              <div class="main-wrapper">
                <div id="main">
                  <div class="content">
                  {if $message ne ""}
                  {include file="error.tpl"}
                  {/if}
					
                    <div class="results-bar">
                        <h2>{$lang30}</h2>
                    
                        <p>{$lang125} <b>{$beginning}&nbsp;-&nbsp;{$ending}</b> of <b>{$total}</b></p>
                    </div>
                    <div class="featured">               
                        {include file="bit.tpl"}
                    </div>
                    
  					<div class="paging">
                    	<div class="p1">
                        	<ul>
                            	{$pagelinks}
                            </ul>
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