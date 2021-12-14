<div>

<table class="table">

<tr><th>Nombre del Cliente</th><th>¿Madrileño?</th></tr>
<?php foreach ($clientes as $cliente):?>
<tr><td><?=$cliente->nombre ?></td><td><?php if(($cliente->localidad->provincia)=="Madrid"){echo "SÍ";}else{echo "NO";}  ?></td></tr>
<?php endforeach;?>

</table>
<!-- FETCHAS SI TUVIERA ALIAS


Composición: many to one


$colegio = R::dispense('colegio');
$colegio -> nombre = 'Rey Fernando VI';
$alumno = R::dispense('alumno');
$alumno -> nombre = 'Pepe';
$alumno -> colegio = $colegio;
R::store( $alumno );




Composición: one to many


$colegio = R::dispense('colegio');
$colegio -> nombre = 'Rey Fernando VI';
$alumno = R::dispense('alumno');
$alumno -> nombre = 'Pepe';
$colegio -> ownAlumnoList [ ] = $alumno;
R::store( $colegio );


Composición: many to many

$pepe = R::dispense( 'persona' );$pepe->nombre='Pepe';
$futbol = R::dispense('aficion');$futbol->nombre='futbol';

$futbol -> sharedPersonaList [ ] = $pepe;
R::store( $futbol );

// ALTERNATIVAMENTE
// $pepe->sharedAficionList [ ] = $futbol;
// R::store( $pepe );






 -->




</div>