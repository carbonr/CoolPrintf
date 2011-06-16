<?php /* Smarty version Smarty-3.0.7, created on 2011-06-15 06:27:03
         compiled from "/Applications/MAMP/htdocs/fiverr/themes/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:15309724524df888f79d4c66-69824936%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6f6bf9d1f43cd51881be073a19c76c9aebb15472' => 
    array (
      0 => '/Applications/MAMP/htdocs/fiverr/themes/index.tpl',
      1 => 1298473720,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15309724524df888f79d4c66-69824936',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
              <div class="main-wrapper">
                <div id="main">
                  <div class="content">
                  <?php if ($_smarty_tpl->getVariable('message')->value!=''){?>
                  <?php $_template = new Smarty_Internal_Template("error.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>
                  <?php }?>
                  	<?php if ($_SESSION['USERID']!=''){?>
                    <?php $_template = new Smarty_Internal_Template("sub_bit.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>
                    <?php }else{ ?>
                    <div class="welcomebox">
                      <div style="position:relative;">
                      	<div class="how-it-works-button">
                          <a href="#" id="show-how-it-works" rel="#how-it-work-spotlight">
                            <?php echo $_smarty_tpl->getVariable('lang419')->value;?>

                          </a>
                        </div>
                      </div>
                      <h1><?php echo $_smarty_tpl->getVariable('lang102')->value;?>
<br /><?php echo $_smarty_tpl->getVariable('lang103')->value;?>
</h1>
                      <h2><?php echo $_smarty_tpl->getVariable('lang104')->value;?>
</h2>
                    </div>
					<?php }?>
                    <div class="how-it-work-popup apple_overlay" id="how-it-work-spotlight" style="display:none;">
                      <div class="how-it-works-wrapper" id="how-it-works-spot">
                        <div class="t"></div>
                        <div class="c">
                          <div class="close"><a href="#" class="spotlight-close"><?php echo $_smarty_tpl->getVariable('lang3')->value;?>
</a></div>
                          <div class="spacer"></div>
                    
                          <div class="left-column columns">
                            <h1><center><?php echo $_smarty_tpl->getVariable('lang420')->value;?>
</center></h1>
                            <p><?php echo $_smarty_tpl->getVariable('lang421')->value;?>
</p>
                            <div class="arrow-down"></div>
                            <p><?php echo $_smarty_tpl->getVariable('lang422')->value;?>
</p>
                            <div class="arrow-down"></div>
                            <p><?php echo $_smarty_tpl->getVariable('lang423')->value;?>
</p>
                            <div class="arrow-down"></div>
                            <p><?php echo $_smarty_tpl->getVariable('lang424')->value;?>
</p>
                            <div class="arrow-down"></div>
                            <p><?php echo $_smarty_tpl->getVariable('lang425')->value;?>
</p>
                            <div class="arrow-down"></div>
                            <p><strong><?php echo $_smarty_tpl->getVariable('lang426')->value;?>
</strong></p>
                          </div>
                          <div class="right-column columns">
                            <h1><center><?php echo $_smarty_tpl->getVariable('lang427')->value;?>
</center></h1>
                            <p><?php echo $_smarty_tpl->getVariable('lang428')->value;?>
</p>
                            <div class="arrow-down"></div>
                            <p><?php echo $_smarty_tpl->getVariable('lang429')->value;?>
</p>
                            <div class="arrow-down"></div>
                            <p><?php echo $_smarty_tpl->getVariable('lang430')->value;?>
</p>
                            <div class="arrow-down"></div>
                            <p><?php echo $_smarty_tpl->getVariable('lang431')->value;?>
</p>
                            <div class="arrow-down"></div>
                            <p><?php echo $_smarty_tpl->getVariable('lang432')->value;?>
</p>
                            <div class="arrow-down"></div>
                            <p><?php echo $_smarty_tpl->getVariable('lang433')->value;?>
</p>
                          </div>
                          <div class="spacer"></div>
                          <div class="more"><a href="<?php echo $_smarty_tpl->getVariable('baseurl')->value;?>
/terms_of_service"><?php echo $_smarty_tpl->getVariable('lang434')->value;?>
</a></div>
                        </div>
                        <div class="b"></div>
                      </div>
                    </div>
					<div class="darkenBackground"></div>
                    <div class="featured">   
                    	<div class="gig_filters bordertop">
                          <div class="ul bg-f-a">
                            <div class="li"><span class="helptext"><?php echo $_smarty_tpl->getVariable('lang109')->value;?>
</span></div>
                            	<?php if ($_smarty_tpl->getVariable('s')->value=="d"||$_smarty_tpl->getVariable('s')->value==''){?>
                                <div class="li sep-right"><a href="<?php echo $_smarty_tpl->getVariable('baseurl')->value;?>
?s=dz" class="current"><?php echo $_smarty_tpl->getVariable('lang110')->value;?>
</a></div>
                                <?php }else{ ?>
                                <div class="li sep-right"><a href="<?php echo $_smarty_tpl->getVariable('baseurl')->value;?>
?s=d" <?php if ($_smarty_tpl->getVariable('s')->value=="d"||$_smarty_tpl->getVariable('s')->value=="dz"||$_smarty_tpl->getVariable('s')->value==''){?>class="current"<?php }?>><?php echo $_smarty_tpl->getVariable('lang110')->value;?>
</a></div>
                                <?php }?>
                                <?php if ($_smarty_tpl->getVariable('s')->value=="p"){?>
                                <div class="li sep-right"><a href="<?php echo $_smarty_tpl->getVariable('baseurl')->value;?>
?s=pz" class="current"><?php echo $_smarty_tpl->getVariable('lang111')->value;?>
</a></div>
                                <?php }else{ ?>
                                <div class="li sep-right"><a href="<?php echo $_smarty_tpl->getVariable('baseurl')->value;?>
?s=p" <?php if ($_smarty_tpl->getVariable('s')->value=="p"||$_smarty_tpl->getVariable('s')->value=="pz"){?>class="current"<?php }?>><?php echo $_smarty_tpl->getVariable('lang111')->value;?>
</a></div>
                                <?php }?>
                                <?php if ($_smarty_tpl->getVariable('s')->value=="r"){?>
                                <div class="li sep-right"><a href="<?php echo $_smarty_tpl->getVariable('baseurl')->value;?>
?s=rz" class="current"><?php echo $_smarty_tpl->getVariable('lang112')->value;?>
</a></div>
                                <?php }else{ ?>
                                <div class="li sep-right"><a href="<?php echo $_smarty_tpl->getVariable('baseurl')->value;?>
?s=r" <?php if ($_smarty_tpl->getVariable('s')->value=="r"||$_smarty_tpl->getVariable('s')->value=="rz"){?>class="current"<?php }?>><?php echo $_smarty_tpl->getVariable('lang112')->value;?>
</a></div>
                                <?php }?>
                                <?php if ($_smarty_tpl->getVariable('s')->value=="c"){?>
                                <div class="li last"><a href="<?php echo $_smarty_tpl->getVariable('baseurl')->value;?>
?s=cz" class="current"><?php echo $_smarty_tpl->getVariable('lang436')->value;?>
</a></div>
                                <?php }else{ ?>
                                <div class="li last"><a href="<?php echo $_smarty_tpl->getVariable('baseurl')->value;?>
?s=c" <?php if ($_smarty_tpl->getVariable('s')->value=="c"||$_smarty_tpl->getVariable('s')->value=="cz"){?>class="current"<?php }?>><?php echo $_smarty_tpl->getVariable('lang436')->value;?>
</a></div>
                                <?php }?>
                          </div>
                        </div>                
                        <?php $_template = new Smarty_Internal_Template("bit.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>
                    </div>
                    
  					<div class="paging">
                    	<div class="p1">
                        	<ul>
                            	<?php echo $_smarty_tpl->getVariable('pagelinks')->value;?>

                            </ul>
                        </div>
                    </div>
					<div class="rss-link"><a href="<?php echo $_smarty_tpl->getVariable('baseurl')->value;?>
/rss"><?php echo $_smarty_tpl->getVariable('lang108')->value;?>
</a></div>
                  </div>
                  <?php $_template = new Smarty_Internal_Template("side.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>