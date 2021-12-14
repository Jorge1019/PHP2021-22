<div class="container">
<h1>Nuevo Cliente</h1>
	<form action="<?=base_url()?>cliente/cPost" method="post">
	
	<fieldset>
		<legend>Datos del Cliente</legend>
		<label for="id-nombre">Nombre</label><br>
		<input id="id-nombre" type="text" name="nombre" autofocus="autofocus"/>
		<br/>
		<fieldset>
		<legend><label for="id-nombre">Localidad</label></legend>
		<select name="localidad">
		
		<?php foreach($localidades as $localidad):?>
		
		<option value="<?=$localidad->id?>"><?=$localidad->nombre."(".$localidad->provincia.")"?></option>
		<?php endforeach;?>
		</select>
		</fieldset>
		<button class="btn bg-danger text-white" style="width:100px; height:30px; " >Enviar</button>
		</fieldset>
	</form>
</div>