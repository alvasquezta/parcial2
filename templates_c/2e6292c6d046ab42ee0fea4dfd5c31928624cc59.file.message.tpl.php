<?php /* Smarty version Smarty-3.0.9, created on 2015-11-13 17:43:54
         compiled from "C:/wamp/www/glight/templates\message.tpl" */ ?>
<?php /*%%SmartyHeaderCode:144455646134aeff127-72682462%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2e6292c6d046ab42ee0fea4dfd5c31928624cc59' => 
    array (
      0 => 'C:/wamp/www/glight/templates\\message.tpl',
      1 => 1354314637,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '144455646134aeff127-72682462',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<div>
<div class="alert alert-<?php echo $_smarty_tpl->getVariable('type_warning')->value;?>
">
<strong><?php echo ucfirst($_smarty_tpl->getVariable('type_warning')->value);?>
</strong> <?php echo $_smarty_tpl->getVariable('msg_warning')->value;?>

</div>
</div>
