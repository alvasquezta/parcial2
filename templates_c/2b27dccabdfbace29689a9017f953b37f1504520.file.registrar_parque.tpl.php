<?php /* Smarty version Smarty-3.0.9, created on 2015-11-13 16:32:44
         compiled from "C:/wamp/www/glight/templates\registrar_parque.tpl" */ ?>
<?php /*%%SmartyHeaderCode:181365646029c41adc1-08726865%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2b27dccabdfbace29689a9017f953b37f1504520' => 
    array (
      0 => 'C:/wamp/www/glight/templates\\registrar_parque.tpl',
      1 => 1447428024,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '181365646029c41adc1-08726865',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<div class="square">
	<form action="<?php echo $_smarty_tpl->getVariable('gvar')->value['l_global'];?>
registrar_parque.php?option=add" method="post">
		<table width="100%" border="0" cellpadding="0" cellspacing="5">
			<tr>
				<td>
					<center><b>Agregar un parque</b></center><br/><br/>
					<b>Ingrese el codigo:</b> <input type="text" name="codigo" <?php if (isset($_smarty_tpl->getVariable('object',null,true,false)->value)){?> value="<?php echo $_smarty_tpl->getVariable('object')->value->codigo;?>
" <?php }?> /> <br/>

					<b>Ingrese el nombre:</b> <input type="text" name="nombre" <?php if (isset($_smarty_tpl->getVariable('object',null,true,false)->value)){?> value="<?php echo $_smarty_tpl->getVariable('object')->value->nombre;?>
" <?php }?>/> <br/>

					<b>Ingrese el nivel:</b> <input type="text" name="nivel" <?php if (isset($_smarty_tpl->getVariable('object',null,true,false)->value)){?> value="<?php echo $_smarty_tpl->getVariable('object')->value->nivel;?>
" <?php }?>/> <br/>

					<b>Ingrese el municiio:</b> <input type="text" name="municipio" <?php if (isset($_smarty_tpl->getVariable('object',null,true,false)->value)){?> value="<?php echo $_smarty_tpl->getVariable('object')->value->municipio;?>
" <?php }?>/> <br/>

					<input class="btn btn-primary" type="submit" value="Registrar"/>
				</td>
			</tr>
		</table>
	</form>
</div>