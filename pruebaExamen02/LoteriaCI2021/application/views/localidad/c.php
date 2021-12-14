<div class="container">
<h1>Nueva Localidad</h1>
	<form action="<?=base_url()?>localidad/cPost" method="post">
		
		<label for="id-nombre">Localidad</label>
		<input id="id-nombre" type="text" name="nombre" autofocus="autofocus"/>
		<br/>
		<label for="id-nombre">Provincia</label>
		<select name="provincia"><option>Madrid</option><option>Segovia</option><option>Zaragoza</option><option>Badajoz</option></select>
		
		<button class="btn bg-danger text-white" style="width:100px; height:30px; " >Enviar</button>
		
	</form>
</div>