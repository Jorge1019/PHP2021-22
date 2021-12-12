<h1>Lista de personas</h1>
<table>

<tr>
	<th>ID</th>
	<th>Nombre</th>
</tr>

<?php foreach ($resultado as $fila):?>


<tr>
	<td> <?=$fila['id']?></td>
	<td> <?=$fila['nombre']?></td>
</tr>

<?php endforeach;?>
</table>