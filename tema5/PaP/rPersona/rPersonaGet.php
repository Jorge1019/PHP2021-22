<?php 
require_once '../bd/bdh.php';
conectar();
$personas=R::findAll('persona');


desconectar();
?>
<h1>Lista de personas</h1>

<form action="../cPersona/cPersonaGet.php">
	<input type="submit" value="Nueva persona"/>
</form>
<form action="../">
	<input type="submit" value="Volver"/>
</form>

<table border="1">
	<tr> 
		<th>Nombre </th>	
		<th>País de nacimiento</th>	
		<th>País de residencia</th>	
		<th>Aficiones que le gustan</th>	
		<th>Aficiones que no le gustan</th>	
	</tr>

	<?php foreach ($personas as $persona):?>
		<tr>
			<td>
				<?=$persona->nombre?>
			</td>
			<td> 
				<?php if($persona->fetchAs('pais')->nace!=''){
				
				    echo $persona->fetchAs('pais')->nace->nombre;
				}else{
				    
				echo "NINGUNO";
				
				}?>
			</td>
			<td> 
				<?php if($persona->fetchAs('pais')->vive!=''){
				
				    echo $persona->fetchAs('pais')->vive->nombre;
				}else{
				echo "NINGUNO";
				}?>
			</td>
			<td>
									<?php foreach ($persona->aggr('ownGustaList','aficion') as $gusta):?>
														<?=$gusta->nombre?> 
									<?php endforeach;?>
									<!-- Otra opcion
									?php foreach($persona->ownGustaList as $gusto):
									<=$gusta->aficion->nombre >
									USAR ESTA ES MAS SIMPLE Y BONICA -->
			</td>
			<td>
						<?php foreach ($persona->aggr('ownDisgustaList','aficion') as $disgusta):?>
														<?=$disgusta->nombre?> 
				<?php endforeach;?>
			</td>
		</tr>
	
	<?php endforeach;?>
	
</table>