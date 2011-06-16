<?php /* Smarty version Smarty-3.0.7, created on 2011-06-15 09:09:56
         compiled from "/Applications/MAMP/htdocs/fiverr/themes/users.tpl" */ ?>
<?php /*%%SmartyHeaderCode:19888783844df8af242681b7-42086520%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0497260b960384d877729478e8c110fb00ab51a6' => 
    array (
      0 => '/Applications/MAMP/htdocs/fiverr/themes/users.tpl',
      1 => 1279712936,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19888783844df8af242681b7-42086520',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_smarty_tpl->getVariable('error')->value!=''){?>
	<div id="errorExplanation">
		<h2><?php echo $_smarty_tpl->getVariable('lang11')->value;?>
</h2>
        <ul>
        	<?php echo $_smarty_tpl->getVariable('error')->value;?>

        </ul>
    </div>
<?php }?>

<?php if ($_smarty_tpl->getVariable('done')->value=="1"){?>

<script type="text/javascript">
	$(document).ready(function() {
		setTimeout("document.location.href = '<?php echo $_smarty_tpl->getVariable('baseurl')->value;?>
/';",1)
	});
</script>

<?php }?>