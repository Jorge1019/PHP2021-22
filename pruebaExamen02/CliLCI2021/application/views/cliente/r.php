<div>

<table class="table">

<tr><th>Nombre del Cliente</th><th>¿Madrileño?</th></tr>
<?php foreach ($clientes as $cliente):?>
<tr><td><?=$cliente->nombre ?></td><td><?php if(($cliente->fetchAs("localidad")->localidad->provincia)=="Madrid"){echo "SÍ";}else{echo "NO";}  ?></td></tr>
<?php endforeach;?>

</table>





</div>