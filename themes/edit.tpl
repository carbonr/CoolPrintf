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
                                <form action="{$baseurl}/edit?id={$g.PID}" class="new_gig" enctype="multipart/form-data" id="new_gig" method="post">
                                    <div class="edit-gig-form-t"></div>
                                    <div class="edit-gig-form edit-gig-form-top">
                                      <div  class="row top">
                                        <div class="side-captions-left">{$lang62} </div><input class="text-title" id="gig_title" maxlength="200" name="gtitle" size="200" type="text" value="{$g.gtitle|stripslashes}" /><div class="side-captions-right">{$lang63}{$g.price}</div>
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
                                            <option value="{$c[i].CATID|stripslashes}" {if $g.category eq $c[i].CATID}selected="selected"{/if}>{$c[i].name|stripslashes}</option>
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
                                          <textarea class="text" cols="74" id="gig_description" maxlength="450" name="gdesc" rows="10">{$g.gdesc|stripslashes}</textarea>
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
                                            <textarea class="text" cols="74" id="gig_order_requirement_attributes_body" maxlength="450" name="ginst" rows="10">{$g.ginst|stripslashes}</textarea>
                                        </div>
                                      </div>
                                      <div class="row">
                                        <div class="column-l">
                                          <label class="editgigformtitle" for="gig_tags">{$lang76}</label>
                                          <p class="tip-text-static">{$lang77}</p>
                                          <p class="tip-text">{$lang78}</p>
                                        </div>
                                        <div class="column-r">
                                          <textarea class="tagstext" cols="74" id="gig_tag_list" maxlength="100" name="gtags" rows="2">{$g.gtags|stripslashes}</textarea>
                                        </div>
                                      </div>
                                      <div class="estimate">
                                        <div class="column-l">
                                          <label class="editgigformtitle" for="gig_expected_duration">{$lang79}</label>
                                        </div>
                                        <div class="column-r">
                                          <input class="text" id="gig_expected_duration" name="gdays" size="2" type="text" value="{$g.days|stripslashes}" />
                                          <div>{$lang80}</div>
                                        </div>
                                      </div>
                                      <div class="row">
                                        <label class="editgigformtitle">{$lang81}</label>
                                      </div>
                                      <div class="row">
                                        <div class="column-l">
                                          <div class="image-box">
                                          	<img src="{$purl}/t2/{$g.p1}?{$smarty.now}" />
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
                                                  <img alt="no image" src="{if $g.p2 ne ""}{$purl}/t2/{$g.p2}?{$smarty.now}{else}{$imageurl}/no_image.jpg?{/if}" />
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
                                                  <img alt="no image" src="{if $g.p3 ne ""}{$purl}/t2/{$g.p3}?{$smarty.now}{else}{$imageurl}/no_image.jpg?{/if}" />
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
                                              <input class="text" id="gig_youtube_url" name="gyoutube" size="30" type="text" value="{$g.youtube|stripslashes}" />
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
                  
                  {include file="side2.tpl"}
                  
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>