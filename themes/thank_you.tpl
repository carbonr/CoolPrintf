              <div class="main-wrapper">
                <div id="main">
                  <div class="content">
                  {if $message ne ""}
                  {include file="error.tpl"}
                  {/if}                    
                    <div class="section"> 
                      <div class="t">&nbsp;</div> 
                      <div class="c"> 
                        <div class="page"> 
                          <div class="typo" style="padding:20px;"> 
                            <h1><strong>{$lang380}</strong></h1> 
                            {if $OID GT "0"}
                            <h3>{$lang381}</h3> 
                            <ul> 
                              <li>{$lang382}</li> 
                              <li>{$lang383}<br /><a href="{$baseurl}/track?id={$OID}">{$baseurl}/track?id={$OID}</a></li> 
                            </ul><br /> 
                            <br /> 
                            <a href="{$baseurl}/track?id={$OID}"><input type="button" value="{$lang114}!" class="button" style="padding-left:10px;padding-right:10px;padding-top:5px;padding-bottom:5px;" /></a> 
                            {else}
                            <br /> 
                            <h3>{$lang440}</h3>
                            <br /> 
                            <div style="font-size:12px; color:#666; font-weight:bold;">{$lang441}</div>
                            <br />
                            {literal}
							<script language="JavaScript">
                            var countDownInterval=15;
                            var c_reloadwidth=200
                            </script>
                            <ilayer id="c_reload" width=&{c_reloadwidth}; ><layer id="c_reload2" width=&{c_reloadwidth}; left=0 top=0></layer></ilayer>
                            <script>
                            var countDownTime=countDownInterval+1;
                            function countDown(){
                            countDownTime--;
                            if (countDownTime <=0){
                            countDownTime=countDownInterval;
                            clearTimeout(counter)
                            window.location.reload()
                            return
                            }
                            if (document.all)
                            document.all.countDownText.innerText = countDownTime+" ";
                            else if (document.getElementById)
                            document.getElementById("countDownText").innerHTML=countDownTime+" "
                            else if (document.layers){
                            document.c_reload.document.c_reload2.document.write('{/literal}{$lang444}{literal}<b id="countDownText">'+countDownTime+'</b> {/literal}{$lang443}{literal}. <a href="javascript:window.location.reload()">[{/literal}{$lang442}{literal}]</a>')
                            document.c_reload.document.c_reload2.document.close()
                            }
                            counter=setTimeout("countDown()", 1000);
                            }
                            function startit(){
                            if (document.all||document.getElementById)
                            document.write('{/literal}{$lang444}{literal} <b id="countDownText">'+countDownTime+'</b> {/literal}{$lang443}{literal}. <a href="javascript:window.location.reload()">[{/literal}{$lang442}{literal}]</a>')
                            countDown()
                            }
                            if (document.all||document.getElementById)
                            startit()
                            else
                            window.onload=startit
                            </script>
                            {/literal}
                            {/if}
                          </div> 
                        </div> 
                      </div> 
                      <div class="b">&nbsp;</div> 
                    </div> 
                  </div>
                  {include file="side.tpl"}
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>