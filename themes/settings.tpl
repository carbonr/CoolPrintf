              <div class="main-wrapper">
                <div id="main">
                  <div class="content">
                  {if $message ne ""}
                    <div class='flash_notice'>
                        <p>{$message}</p>
                    </div>
                  {/if}
                        <div class="section">
                            <div class="t">&nbsp;</div>
                            <div class="c">
                            <div class="settings">
                              <div class="heading">
                                <p><b>{$smarty.session.USERNAME|stripslashes}</b>: {$lang160}: <a href="{$baseurl}/{insert name=get_seo_profile value=a username=$smarty.session.USERNAME|stripslashes}">{$baseurl}/{insert name=get_seo_profile value=a username=$smarty.session.USERNAME|stripslashes}</a></p>
                              </div>
                              {if $error ne ""}
                              <div class="errorExplanation" id="errorExplanation">
                              <h2>{$lang11}</h2>
                              <ul>
                                  {$error}
                              </ul>
                              </div>
                              {/if}     
                              <form action="{$baseurl}/settings" class="settings-form" enctype="multipart/form-data" id="edit_user_{$smarty.session.USERID}" method="post">
                              <div style="margin:0;padding:0;display:inline"></div>
                                <fieldset>
                                  <div class="row">                                    
                                      <label for="fname">{$lang161}</label>
                                      <input class="text" id="fname" name="fname" size="30" type="text" value="{$p.fullname|stripslashes}" />
                                  </div>
                                  <div class="row">
                                    <label for="email">{$lang4}</label><br />
                                    <input class="text" id="email" name="email" size="30" type="text" value="{$p.email|stripslashes}" />
                                  </div>
                                  <div class="row">
                                    <label for="paypal">{$lang162}</label><br />
                                    <input class="text" id="paypal" name="paypal" size="30" type="text" value="{$p.pemail|stripslashes}" />
                                  </div>
                                  <div class="row">
                                      <label for="details">{$lang163}</label>
                                      <textarea cols="10" id="details" name="details" rows="30">{$p.description|stripslashes}</textarea>
                                  </div>
                                  <div class="row">
                                    <label>{$lang164}</label>
                                    <div class="photo">
                                    {insert name=get_member_profilepicture assign=profilepicture value=var USERID=$smarty.session.USERID}
                                      <div class="image"><img src="{$membersprofilepicurl}/{$profilepicture}?{$smarty.now}" /></div>
                                      <div class="info">
                                          <input id="gphoto" name="gphoto" size="30" type="file" />
                                        <dl>
                                          <dt>{$lang86}</dt>
                                          <dd></dd>
                                        </dl>
                                      </div>
                                    </div>
                                    <input type="submit" value="{$lang169}" class="button btn-update" style="padding-left:10px;padding-right:10px;padding-top:5px;padding-bottom:5px;" />
                                    <div class="progress-indicator-icon-gigform">{$lang91}</div>
                                  </div>
                                  <div class="row">
                                    <a href="#" class="changepassword">{$lang165}</a>
                                  </div>
                                </fieldset>
                                <input type="hidden" name="subform" value="1" />
                              </form>
                            
                              <form action="{$baseurl}/settings" class="reset-form" id="edit_pass_{$smarty.session.USERID}" method="post" style="display:none;">
                              <div style="margin:0;padding:0;display:inline"></div>
                                <fieldset>
                                  <h3>{$lang165}</h3>
                                  <div class="row">
                                    <label for="pass">{$lang166}</label>
                                    <input class="text" id="pass" name="pass" size="30" type="password" />
                                  </div>
                                  <div class="row">
                                    <label for="pass2">{$lang167}</label>
                                    <input class="text" id="pass2" name="pass2" size="30" type="password" />
                                    <input type="submit" value="{$lang168}" class="button btn-change" style="padding-left:10px;padding-right:10px;padding-top:5px;padding-bottom:5px;" />
                                    <div class="progress-indicator-icon-gigform">{$lang91}</div>
                                  </div>
                                </fieldset>
                                <input type="hidden" name="subpass" value="1" />
                              </form>                            
                            </div>
                            </div>
                            <div class="b">&nbsp;</div>
                            </div>
                  </div>
                  
                  {include file="side2.tpl"}
                  
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>