<?php

function conectar(){
    require_once '../rb.php';
    R::setup('mysql:host=localhost;dbname=test','root','');
}
function desconectar() {
    R::close();
}
/*Primero colegio, luego alumno
conectar();
$c=R::dispense('colegio');
$c->nombre='IES Rey Fernando VI';
R::store($c);

$a=R::dispense('alumno');
$a->nombre='Pepe';
R::store($a);

$a->colegio=$c;
R::store($a);



desconectar();


Ahora creo primero el alumno y luego el colegio*/
conectar();

$a=R::dispense('alumno');
$a->nombre='Pepe';
R::store($a);


$c=R::dispense('colegio');
$c->nombre='IES Rey Fernando VI';
$c->ownAlumnoList[]=$a;
R::store($c);

$a->colegio=$c;
R::store($a);

desconectar();
?>