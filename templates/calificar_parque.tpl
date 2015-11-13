<div class="square">	
			<b>Calificar parque: {$parques->get('nombre')}</b>		
		<form action="{$gvar.l_global}calificar_parque.php?option=calificar" method="post">						
						<b>Ingrese su calificación:</b> <input type="number" name="valor"/> <br/>
						<input type="hidden" name="parque" value="{$parques->get('codigo')}"/>
						<input type="hidden" name="fecha" value="{$fecha}"/>
						<input type="hidden" name="id" value="8"/>
						<input class="btn btn-primary" type="submit" value="Calificar"/>							
		</form>
	
</div>