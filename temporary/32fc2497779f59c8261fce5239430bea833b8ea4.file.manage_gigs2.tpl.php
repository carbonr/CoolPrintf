<?php /* Smarty version Smarty-3.0.7, created on 2011-06-15 15:50:22
         compiled from "/Applications/MAMP/htdocs/fiverr/themes/manage_gigs2.tpl" */ ?>
<?php /*%%SmartyHeaderCode:16159793384df90cfe4ffc02-23838787%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '32fc2497779f59c8261fce5239430bea833b8ea4' => 
    array (
      0 => '/Applications/MAMP/htdocs/fiverr/themes/manage_gigs2.tpl',
      1 => 1289860424,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16159793384df90cfe4ffc02-23838787',
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
					
                    <div class="section">
                        <div class="manage">
                          <div class="heading">
                            <div class="holder">
                              <ul class="action">
                                <li><a href="<?php echo $_smarty_tpl->getVariable('baseurl')->value;?>
/new" class="btn-normal"><?php echo $_smarty_tpl->getVariable('lang182')->value;?>
</a></li>
                                <li><a class="btn-suspend" href="#"><?php echo $_smarty_tpl->getVariable('lang183')->value;?>
</a></li>
                                <li><a class="btn-activate" href="#"><?php echo $_smarty_tpl->getVariable('lang184')->value;?>
</a></li>
                                <li><a href="#" class="btn-delete"><?php echo $_smarty_tpl->getVariable('lang185')->value;?>
</a></li>
                              </ul>
                              <div class="sort">
                                <strong><?php echo $_smarty_tpl->getVariable('lang186')->value;?>
</strong>
                                <ul>
                                  <li><a href="#" class="select-all"><?php echo $_smarty_tpl->getVariable('lang187')->value;?>
</a>,</li>
                                  <li><a href="#" class="select-none"><?php echo $_smarty_tpl->getVariable('lang188')->value;?>
</a>,</li>
                                  <li><a href="#" class="select-suspended"><?php echo $_smarty_tpl->getVariable('lang189')->value;?>
</a>,</li>
                                  <li><a href="#" class="select-active"><?php echo $_smarty_tpl->getVariable('lang190')->value;?>
</a></li>
                                </ul>
                              </div>
                            </div>
                          </div>
                        </div>
                    </div>
                    <form action="<?php echo $_smarty_tpl->getVariable('baseurl')->value;?>
/manage_gigs" id="gigs_form" method="post">
                    <div style="margin:0;padding:0;display:inline"></div>
                    <div class="featured">
                    	<?php unset($_smarty_tpl->tpl_vars['smarty']->value['section']['i']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['name'] = 'i';
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'] = is_array($_loop=$_smarty_tpl->getVariable('posts')->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total']);
?>
                        <?php $_smarty_tpl->assign('title' , insert_seo_clean_titles (array('value' => 'a', 'title' => $_smarty_tpl->getVariable('posts')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['gtitle']),$_smarty_tpl), true);?>
                        <div class="box edit">
                          <div class="c">
                            <div class="holder edit-status-&lt;%=gig.status%&gt;">
                              <a href="<?php echo $_smarty_tpl->getVariable('baseurl')->value;?>
/edit?id=<?php echo $_smarty_tpl->getVariable('posts')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['PID'];?>
" class="btn-edit">edit gig</a>
                              <div class="frame-img">
                                <a href="<?php echo $_smarty_tpl->getVariable('baseurl')->value;?>
/edit?id=<?php echo $_smarty_tpl->getVariable('posts')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['PID'];?>
"><img src="<?php echo $_smarty_tpl->getVariable('purl')->value;?>
/t2/<?php echo $_smarty_tpl->getVariable('posts')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['p1'];?>
?<?php echo time();?>
" /></a>
                              </div>
                              <div class="frame">
                                <h2>
                                  <a href="<?php echo $_smarty_tpl->getVariable('baseurl')->value;?>
/<?php echo stripslashes($_smarty_tpl->getVariable('posts')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['seo']);?>
/<?php echo stripslashes($_smarty_tpl->getVariable('posts')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['PID']);?>
/<?php echo $_smarty_tpl->getVariable('title')->value;?>
"><?php echo $_smarty_tpl->getVariable('lang62')->value;?>
 <?php echo stripslashes($_smarty_tpl->getVariable('posts')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['gtitle']);?>
 <?php echo $_smarty_tpl->getVariable('lang63')->value;?>
<?php echo stripslashes($_smarty_tpl->getVariable('posts')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['price']);?>
</a>
                                </h2>
                                <p>
                                  <?php echo stripslashes($_smarty_tpl->getVariable('posts')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['gdesc']);?>

                                </p>
                                <?php if ($_smarty_tpl->getVariable('posts')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['active']=="1"){?>
                                <strong style="color:limegreen;font-size:14px;margin:2px;"><?php echo $_smarty_tpl->getVariable('lang191')->value;?>
: <?php echo $_smarty_tpl->getVariable('lang192')->value;?>
</strong>
                                <?php }elseif($_smarty_tpl->getVariable('posts')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['active']=="2"){?>
                                <strong style="color:orange;font-size:14px;margin:2px;"><?php echo $_smarty_tpl->getVariable('lang191')->value;?>
: <?php echo $_smarty_tpl->getVariable('lang193')->value;?>
</strong>
                                <?php }elseif($_smarty_tpl->getVariable('posts')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['active']=="0"){?>
                                <strong style="color:orange;font-size:14px;margin:2px;"><?php echo $_smarty_tpl->getVariable('lang191')->value;?>
: <?php echo $_smarty_tpl->getVariable('lang194')->value;?>
</strong>
                                <?php }?>
                                <ul class="detail">
                                  <li>
                                    <a href="<?php echo $_smarty_tpl->getVariable('baseurl')->value;?>
/manage_orders?status=in_progress"><?php echo $_smarty_tpl->getVariable('lang195')->value;?>
:</a><span class="open-orders"><?php $_smarty_tpl->assign('ao' , insert_active_orders (array('value' => 'a', 'PID' => $_smarty_tpl->getVariable('posts')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['PID']),$_smarty_tpl), true);?><?php echo $_smarty_tpl->getVariable('ao')->value;?>
</span>
                                  </li>
                                  <li>
                                    <a href="<?php echo $_smarty_tpl->getVariable('baseurl')->value;?>
/manage_orders?status=in_progress"><?php echo $_smarty_tpl->getVariable('lang196')->value;?>
:</a><?php $_smarty_tpl->assign('co' , insert_done_orders (array('value' => 'a', 'PID' => $_smarty_tpl->getVariable('posts')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['PID']),$_smarty_tpl), true);?><?php echo $_smarty_tpl->getVariable('co')->value;?>

                                  </li>
                                  <li><?php echo $_smarty_tpl->getVariable('lang181')->value;?>
: <?php echo stripslashes($_smarty_tpl->getVariable('posts')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['viewcount']);?>

                                  </li>
                                  <li><?php echo $_smarty_tpl->getVariable('lang198')->value;?>
: <span class="gains"><?php echo $_smarty_tpl->getVariable('lang197')->value;?>
<?php echo stripslashes($_smarty_tpl->getVariable('posts')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['rev']);?>
</span>
                                  </li>
                                </ul>
                                <div style="position:absolute;top:65px;left:530px;width:75px;">
                                    <a href="#" onclick="openCenteredWindow('http://www.facebook.com/sharer.php?u=<?php echo $_smarty_tpl->getVariable('baseurl')->value;?>
/<?php echo stripslashes($_smarty_tpl->getVariable('posts')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['seo']);?>
/<?php echo stripslashes($_smarty_tpl->getVariable('posts')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['PID']);?>
/<?php echo $_smarty_tpl->getVariable('title')->value;?>
');"><img alt="Btn-facebook" src="<?php echo $_smarty_tpl->getVariable('imageurl')->value;?>
/btn-facebook.png" /></a>
                                    <a href="mailto:?subject=<?php echo $_smarty_tpl->getVariable('lang62')->value;?>
 <?php echo stripslashes($_smarty_tpl->getVariable('posts')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['gtitle']);?>
 <?php echo $_smarty_tpl->getVariable('lang63')->value;?>
<?php echo stripslashes($_smarty_tpl->getVariable('posts')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['price']);?>
&amp;body=<?php echo $_smarty_tpl->getVariable('baseurl')->value;?>
/<?php echo stripslashes($_smarty_tpl->getVariable('posts')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['seo']);?>
/<?php echo stripslashes($_smarty_tpl->getVariable('posts')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['PID']);?>
/<?php echo $_smarty_tpl->getVariable('title')->value;?>
" target="_blank" title="send by email"><img alt="Btn-email" src="<?php echo $_smarty_tpl->getVariable('imageurl')->value;?>
/btn-email.png" /></a>		
                                </div>                                
                              </div>
                            </div>
                            <div class="check">
                            	<?php if ($_smarty_tpl->getVariable('posts')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['active']=="1"){?>
                              	<input class="checkbox approved" id="gig_" name="gig[]" type="checkbox" value="<?php echo $_smarty_tpl->getVariable('posts')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['PID'];?>
" />
                              	<?php }elseif($_smarty_tpl->getVariable('posts')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['active']=="2"){?>
                              	<input class="checkbox suspended" id="gig_" name="gig[]" type="checkbox" value="<?php echo $_smarty_tpl->getVariable('posts')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['PID'];?>
" />
                                <?php }elseif($_smarty_tpl->getVariable('posts')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['active']=="0"){?>
                              	<input class="checkbox inactive" id="gig_" name="gig[]" type="checkbox" value="<?php echo $_smarty_tpl->getVariable('posts')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['PID'];?>
" />
                                <?php }?>
                            </div>
                          </div>
                    	</div>
                    	<?php endfor; endif; ?>
                    </div>
                    <input type="hidden" name="subme" value="1" />
                    </form>

  					<div class="paging">
                    	<div class="p1">
                        	<ul>
                            	<?php echo $_smarty_tpl->getVariable('pagelinks')->value;?>

                            </ul>
                        </div>
                    </div>
                  </div>
                  <?php $_template = new Smarty_Internal_Template("side2.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>