<?php 
require_once '../bd/bdh.php';
conectar();
$personas=R::findAll('persona');


desconectar();
?>

<h1>Nuevo país</h1>
<form action="cPaisPost.php" method="post">
	Nombre
	<input type="text" name="nombre" required="required"/>
	<br/>
	Quieres añadir a este pais alguna de estas personas apatridas
	<select name="nace">
	<option value=''>--No--</option>
	<?php foreach($personas as $persona ): 
 if($persona->fetchAs('pais')->nace->nombre==""){
    
   echo  " <option value='$persona->id'>$persona->nombre</option>";
    
}
	?>
	
	<?php endforeach;?>
	</select><br>
	Quieres añadir a este pais alguna de estas personas que no vive en ningun pais
	<select name="vive">
	<option value=''>--No--</option>
	<?php foreach($personas as $persona ): 
 if($persona->fetchAs('pais')->vive->nombre==""){
    
   echo  " <option value='$persona->id'>$persona->nombre</option>";
   
    
}
	?>
	
	<?php endforeach;?>
	</select><br>
	<input type="submit"/>
</form>