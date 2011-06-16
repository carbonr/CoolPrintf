					{insert name=get_member_profilepicture assign=mppc value=var USERID=$smarty.session.USERID}
                    <div class="message by-me respond"> 
					  		<form action="{$baseurl}/send_track" class="nonajaxy" id="new_message" method="post">
                            <input type="hidden" name="submg" value="1" />
                            <input type="hidden" name="msgto" value="{$o.owner}" />
                            <input type="hidden" name="oid" value="{$o.OID}" />
                            <div style="margin:0;padding:0;display:inline"></div> 
                            <div class="by-me"> 
                              <div class="metadata"> 
                                <div class="buddyicon">
                                  	<a href="{$baseurl}/{insert name=get_seo_profile value=a username=$smarty.session.USERNAME|stripslashes}" title="{$smarty.session.USERNAME|stripslashes}"><img alt="{$smarty.session.USERNAME|stripslashes}" src="{$membersprofilepicurl}/thumbs/{$mppc}?{$smarty.now}" /></a>
                                </div>
                                <div class="tip rspnd"></div> 
                              </div> 

                              <div class="content-text">
                                <div class="msg-error"> 
                                  <p id="message_validation_error"></p> 
                                </div> 
                                <textarea cols="75" id="message_body" maxlength="1000" name="message_body" rows="3"></textarea> 
                                <input id="message_message_format" name="message_message_format" type="hidden" /> 
                                <input type="hidden" name="who" value="buyer" />
                                <br clear="all"/> 
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
					  </form> 
					</div>