					<div class="sections"> 
                        <ul class="tabs"> 
                          <li class="selected talk"><a class="achtung message_toggler" id="cancel-order-lin" href="#">{$lang325}</a></li> 
                          <li class="text-link"><a class="achtung problems_toggler" id="cancel-order-link" href="#">{$lang326}</a></li> 
                        </ul> 
                    </div>
                    {insert name=get_member_profilepicture assign=mppc value=var USERID=$smarty.session.USERID}
                    <div class="message by-me respond"> 
                      <form action="{$baseurl}/send_track" class="ajaxy" id="new_message" method="post">
                        <div class="by-me"> 
                          <div class="metadata"> 
                            <div class="buddyicon"> 
                              <a href="{$baseurl}/{insert name=get_seo_profile value=a username=$smarty.session.USERNAME|stripslashes}" title="{$smarty.session.USERNAME|stripslashes}"><img alt="{$smarty.session.USERNAME|stripslashes}" src="{$membersprofilepicurl}/thumbs/{$mppc}?{$smarty.now}" /></a> 
                            </div> 
                            <div class="tip rspnd"></div> 
                          </div> 
                          
                          <div id="gotProbs" class="content-text">
                           
                            <div class="toolbox seller-order"> 
                              <div id="problems_box" style="display:none;"> 
                                <div class="boxes"> 
                                  {if $lasdel GT "0" AND $o.status ne "6"}
                                  <div class="box rejection first reject_toggler"> 
                                    <h3><input type="radio" class="radio_button" id="radio_reject" name="{$lang345}" value="{$lang345}" /><span>{$lang344}</span></h3> 
                                    <p>{$lang346}</p> 
                                  </div> 
              					  {else}
                                  <div class="box rejection first disabled"> 
                                    <h3><input type="radio" class="radio_button" id="radio_reject" name="{$lang345}" value="{$lang345}" disabled="disabled" /><span>{$lang344}</span></h3> 
                                    <p>{$lang346}</p> 
                                  </div> 
                                  {/if}
                                  <div class="box mutual-cancel mid mutual_toggler mutual_toggler_buyer "> 
                                    <h3><input type="radio" class="radio_button" id="radio_mutual" name="{$lang330}" value="{$lang330}"    /><span>{$lang347}</span></h3> 
                                      <p>{$lang348}</p> 
                                  </div> 
                                  <div class="box notice last support_toggler"> 
                                    <h3><input type="radio" class="radio_button" id="radio_support" name="{$lang334}" value="{$lang334}"/><span>{$lang335}</span></h3> 
                                    <p>{$lang336}</p> 
                                  </div> 
                                </div> 
                              </div> 
                            </div> 
                     
                            <div class="support-message" style="display:none"> 
                              <h4 class="faq">{$lang337}</h4> 
                              <ul class="faq"> 
                                <ul class="qa"> 
                                  <li class="q">{$lang349}</li> 
                                  <li class="a">{$lang350}</li> 
                                </ul> 
                                <ul class="qa"> 
                                  <li class="q">{$lang351}</li> 
                                  <li class="a">{$lang352}</li> 
                                </ul> 
                              </ul> 
                            </div> 
                     
                            <div id="message_form_wrapper"> 
                              <div class="msg-error"> 
                                <p id="message_validation_error"></p> 
                              </div> 
                              <textarea cols="75" id="message_body" maxlength="1000" name="message_body" rows="3"></textarea> 
                              <br clear="all"/> 
                              <input type="hidden" name="submg" value="1" />
                              <input type="hidden" name="msgto" value="{$o.owner}" />
                              <input type="hidden" name="oid" value="{$o.OID}" />
                              <input type="hidden" name="who" value="buyer" />
                              <input id="message_message_format" name="message_message_format" type="hidden" value="" /> 
                     
                                <div class="message-form-control"> 
                                  <div class="send-button"> 
                                    <input type="submit" value="{$lang46}" class="send-small"  />
                                    <div class="progress-indicator-icon-message"> 
                                      <span class="sending">{$lang120}</span> 
                                    </div> 
                                  </div> 
                                  <div class="upload-panel"> 
                                    <a href="#attach" title="Attach a file to your message" class="upload selected" id="toggle-attach"> 
                                      <h5><span class="open">{$lang248}</span></h5> 
                                    </a> 
                                    <div class="in-element attachment-add upload-panel" id="attach"> 
                                      	<h5>{$lang248} <b>({$lang249})</b></h5> 
                                      	<br clear="both"/> 
                                      	<input id="message_message_attachment_id" name="message_message_attachment_id" type="hidden" /> 
                                      	<div class="panel"> 
                                        	<div class="browse"> 
                                          		<input id="fileInput" name="fileInput" type="file" style="display:none;" /> 
                                        	</div>                      
                                        	<div class="files-added"> 
                                          	<span id="attached_file_name"></span><b class="remove_attachment">x</b> 
                                        	</div> 
                                      	</div> 
                                      	<p class="terms">{$lang250} 
                                            <b>{$lang251}</b>: {$lang252} <a href="{$baseurl}/terms_of_service" target="_blank" title="{$lang253}">{$lang254}</a><br />
                                            <b>{$lang255}</b>: {$lang256}
                                        </p> 
                                    </div> 
                                  </div> 
                                </div> 
                     
                     
                            </div> 
                          </div> 
                        </div> 
                      </form> 
                    </div>