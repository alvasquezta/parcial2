<div class="square">
	<form action="{$gvar.l_global}registrar_parque.php?option=add" method="post">
		<table width="100%" border="0" cellpadding="0" cellspacing="5">
			<tr>
				<td>
					<center><b>Agregar un parque</b></center><br/><br/>
					<b>Ingrese el codigo:</b> <input type="text" name="codigo" {if isset($object)} value="{$object->codigo}" {/if} /> <br/>

					<b>Ingrese el nombre:</b> <input type="text" name="nombre" {if isset($object)} value="{$object->nombre}" {/if}/> <br/>

					<b>Ingrese el nivel:</b> <input type="text" name="nivel" {if isset($object)} value="{$object->nivel}" {/if}/> <br/>

					<b>Ingrese el municiio:</b> <input type="text" name="municipio" {if isset($object)} value="{$object->municipio}" {/if}/> <br/>

					<input class="btn btn-primary" type="submit" value="Registrar"/>
				</td>
			</tr>
		</table>
	</form>
</div>