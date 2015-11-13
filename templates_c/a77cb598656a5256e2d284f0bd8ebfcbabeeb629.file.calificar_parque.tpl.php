<?php /* Smarty version Smarty-3.0.9, created on 2015-11-13 17:38:36
         compiled from "C:/wamp/www/glight/templates\calificar_parque.tpl" */ ?>
<?php /*%%SmartyHeaderCode:281145646120cb77320-18714925%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a77cb598656a5256e2d284f0bd8ebfcbabeeb629' => 
    array (
      0 => 'C:/wamp/www/glight/templates\\calificar_parque.tpl',
      1 => 1447432701,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '281145646120cb77320-18714925',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<div class="square">	
			<b>Calificar parque: <?php echo $_smarty_tpl->getVariable('parques')->value->get('nombre');?>
</b>		
		<form action="<?php echo $_smarty_tpl->getVariable('gvar')->value['l_global'];?>
calificar_parque.php?option=calificar" method="post">						
						<b>Ingrese su calificación:</b> <input type="number" name="valor"/> <br/>
						<input type="hidden" name="parque" value="<?php echo $_smarty_tpl->getVariable('parques')->value->get('codigo');?>
"/>
						<input type="hidden" name="fecha" value="<?php echo $_smarty_tpl->getVariable('fecha')->value;?>
"/>
						<input type="hidden" name="id" value="8"/>
						<input class="btn btn-primary" type="submit" value="Calificar"/>							
		</form>
	
</div>