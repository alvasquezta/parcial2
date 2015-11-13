<table border="0" width="100%" cellpadding="0" cellspacing="10">
<tr><td><b>Parques</b></td></tr>
{section loop=$parque name=i}
<tr><td><b>Código:</b> {$parque[i]->get('codigo')}<br />
    <b>Nombre:</b> <a href="calificar_parque.php?codigo={$parque[i]->get('codigo')}">{$parque[i]->get('nombre')}</a> <br />        
    <b>Municipio:</b> {$parque[i]->get('municipio')}</a> <br />
    </td></tr>
{/section}
</table>

