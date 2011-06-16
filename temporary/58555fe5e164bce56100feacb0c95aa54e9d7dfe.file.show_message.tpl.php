<?php /* Smarty version Smarty-3.0.7, created on 2011-06-15 07:21:24
         compiled from "/Applications/MAMP/htdocs/fiverr/themes/administrator/show_message.tpl" */ ?>
<?php /*%%SmartyHeaderCode:569830604df895b4a9c1d5-75452342%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '58555fe5e164bce56100feacb0c95aa54e9d7dfe' => 
    array (
      0 => '/Applications/MAMP/htdocs/fiverr/themes/administrator/show_message.tpl',
      1 => 1223585220,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '569830604df895b4a9c1d5-75452342',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_smarty_tpl->getVariable('error')->value!=''){?>
								<ul class="messages">
                                    <li class="error-msg">
                                    	<ul><li><?php echo $_smarty_tpl->getVariable('error')->value;?>
</li></ul>
                                    </li>
                                </ul>
<?php }?>
<?php if ($_smarty_tpl->getVariable('message')->value!=''){?>
								<ul class="messages">
                                	<li class="success-msg">
                                    	<ul><li><?php echo $_smarty_tpl->getVariable('message')->value;?>
</li></ul>
                                    </li>
                                </ul>
<?php }?>
