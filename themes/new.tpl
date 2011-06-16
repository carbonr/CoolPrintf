              <div class="main-wrapper">
                <div id="main">
                  <div class="content">
                  {if $message ne ""}
                    <div class='flash_notice'>
                        <p>{$message}</p>
                    </div>
                  {/if}
                        <div class="section">
                            <div class="edit-gig">
                            	{literal}
                                <script type="text/javascript">                        
                                  $(document).ready(function(){
                                    $("#toggle-additional-visuals").click(function(){
                                      $("#additional-visuals").toggle('slow');
                                      $('html, body').animate({
                                        scrollTop: $("#additional-visuals").offset().top
                                      }, 200);
                                    });
                                    $('textarea').focus(function() { $(this).parent().parent().find('p.tip-text').css('visibility','visible') });
                                    $('textarea').blur(function() { $(this).parent().parent().find('p.tip-text').css('visibility','hidden') });
                                  });
                                </script>
                        		{/literal}
                                <form action="{$baseurl}/new" class="new_gig" enctype="multipart/form-data" id="new_gig" method="post">
                                    <div class="edit-gig-form-t"></div>
                                    <div class="edit-gig-form edit-gig-form-top">
                                      <div  class="row top">
                                        <div class="side-captions-left">{$lang62} </div><input class="text-title" id="gig_title" maxlength="200" name="gtitle" size="200" type="text" value="{$gtitle|stripslashes}" /><div class="side-captions-right">{$lang63}{if $price_mode eq "0" OR $price_mode eq "2"}{$price}</div>{elseif $price_mode eq "1"}</div><input class="price-title" id="gprice" maxlength="3" name="gprice" size="3" type="text" value="{$gprice|stripslashes}" />{elseif $price_mode eq "3"}</div>{insert name=get_packs value=a assign=packs}<select name="gprice" id="gprice" style="font-size:24px">{section name=p loop=$packs}<option value="{$packs[p].ID|stripslashes}" {if $gprice eq $packs[p].ID|stripslashes}selected="selected"{/if}>{$packs[p].pprice|stripslashes}</option>{/section}</select>{/if}
                                        <p class="max-chars-top">{$lang64}: <span class="gigtitlemax">200</span> ({$lang65}: <span class="gigtitleused">0</span>)</p>
                                      </div>
                                    </div>
                                    <div class="edit-gig-form">
                                    	{if $error ne ""}
                                    	<div id="errorExplanation">
                                        	<h2>{$lang98}</h2>
                                            <p>{$lang99}:</p>
                                            <ul>
                                            	{$error}
                                            </ul>
                                        </div>
                                        {/if}
                                      <div class="row">
                                        <div class="column-l">
                                          <label class="editgigformtitle" for="gig_category">{$lang66}</label>
                                        </div>
                                        <div class="column-r">
                                          <select class="categoryselection" id="gig_category_id" name="gcat"><option value="0">{$lang67}</option>
                                          {insert name=get_categories assign=c}
                                          {section name=i loop=$c}
                                            <option value="{$c[i].CATID|stripslashes}" {if $gcat eq $c[i].CATID}selected="selected"{/if}>{$c[i].name|stripslashes}</option>
                                          {/section}
                                          </select>
                                          <p class="tip-text">{$lang68}</p>
                                        </div>
                                      </div>
                                      <div class="row">
                                        <div class="column-l">
                                          <label class="editgigformtitle" for="gig_description">{$lang69}</label>
                                          <p class="tip-text-static">{$lang70}</p>
                                          <p class="tip-text">{$lang71}<br/><br/>{$lang72}</p>
                                        </div>
                                        <div class="column-r">
                                          <textarea class="text" cols="74" id="gig_description" maxlength="450" name="gdesc" rows="10">{$gdesc|stripslashes}</textarea>
                                          <p class="max-chars">{$lang64}: <span class="gigdescmax">450</span> ({$lang65}: <span class="gigdescused">0</span>)</p>
                                        </div>
                                      </div>
                                      <div class="row">
                                        <div class="column-l">
                                          <label class="editgigformtitle new-badge" for="gig_order_requirement">{$lang73}</label><br/>
                                          <p class="tip-text-static">{$lang74}</p>
                                          <p class="tip-text">{$lang75}</p>
                                        </div>
                                        <div class="column-r">
                                            <textarea class="text" cols="74" id="gig_order_requirement_attributes_body" maxlength="450" name="ginst" rows="10">{$ginst|stripslashes}</textarea>
                                        </div>
                                      </div>
                                      <div class="row">
                                        <div class="column-l">
                                          <label class="editgigformtitle" for="gig_tags">{$lang76}</label>
                                          <p class="tip-text-static">{$lang77}</p>
                                          <p class="tip-text">{$lang78}</p>
                                        </div>
                                        <div class="column-r">
                                          <textarea class="tagstext" cols="74" id="gig_tag_list" maxlength="100" name="gtags" rows="2">{$gtags|stripslashes}</textarea>
                                        </div>
                                      </div>
                                      <div class="estimate">
                                        <div class="column-l">
                                          <label class="editgigformtitle" for="gig_expected_duration">{$lang79}</label>
                                        </div>
                                        <div class="column-r">
                                          <input class="text" id="gig_expected_duration" name="gdays" size="2" type="text" value="{$gdays|stripslashes}" />
                                          <div>{$lang80}</div>
                                        </div>
                                      </div>
                                      <div class="row">
                                        <label class="editgigformtitle">{$lang81}</label>
                                      </div>
                                      <div class="row">
                                        <div class="column-l">
                                          <div class="image-box">
                                            
                                          </div>
                                        </div>
                                        <div class="column-r">
                                          <div class="image-info">
                                            <input class="browsefile" id="gig_photo" name="gphoto" size="20" type="file" />
                                            <ul class="image-tip">
                                              <li>{$lang82}</li>
                                              <li>{$lang83}</li>
                                              <li>{$lang84}</li>
                                              <li>{$lang85}</li>
                                              <li>{$lang86}</li>
                                            </ul>
                                          </div>
                                        </div>
                                      </div>
                                      <div class="additional-materials">
                                        <input type="button" name="more-photos" value="{$lang87} / {$lang88}" class="browsefile" id="toggle-additional-visuals" />
                                        <div id="additional-visuals">
                                          <div class="row">
                                            <div class="column-l">
                                              <div class="image-box">
                                                  <img alt="no image" src="{$imageurl}/no_image.jpg?" />
                                              </div>
                                            </div>
                                            <div class="column-r">
                                              <div class="image-info">
                                                <input class="browsefile" id="gig_photo2" name="gphoto2" size="20" type="file" />
                                                <p>{$lang86}</p>
                                              </div>
                                            </div>
                                          </div>
                                          <div class="row">
                                            <div class="column-l">
                                              <div class="image-box">
                                                  <img alt="no image" src="{$imageurl}/no_image.jpg?" />
                                              </div>
                                            </div>
                                            <div class="column-r">
                                              <div class="image-info">
                                                <input class="browsefile" id="gig_photo3" name="gphoto3" size="20" type="file" />
                                                <p>{$lang86}</p>
                                              </div>
                                            </div>
                                          </div>
                                          <div id="youtube" class="row">
                                            <div class="column-l">
                                              <label class="editgigformtitle" for="gig_youtube_url">{$lang89}</label><br/>({$lang90})
                                            </div>
                                            <div class="column-r">
                                              <input class="text" id="gig_youtube_url" name="gyoutube" size="30" type="text" value="{$gyoutube|stripslashes}" />
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                      <div class="row">
                                        <input type="submit" value="{$lang46}" class="button" style="padding-left:10px;padding-right:10px;padding-top:5px;padding-bottom:5px;" />
                                        <div class="progress-indicator-icon-gigform">{$lang91}</div>
                                      </div>
                                    </div>
                                    <div class="edit-gig-form-b"></div>
                                    <input type="hidden" name="subform" value="1" />
                                </form>
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