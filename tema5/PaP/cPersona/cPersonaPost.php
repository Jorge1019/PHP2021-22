<?php
require_once '../bd/bdh.php';
$nombre = isset($_POST['nombre']) ? $_POST['nombre'] : 'John Doe';
$idPaisN= isset($_POST['idPaisN']) ? $_POST['idPaisN'] : null;
$idPaisV= isset($_POST['idPaisV']) ? $_POST['idPaisV'] : null;
//$nombrePais= isset($_POST['nombrePais']) ? $_POST['nombrePais'] : null;
$idAficionesG = isset($_POST['idAficionesGustan']) ? $_POST['idAficionesGustan'] : [];
$idAficionesN = isset($_POST['idAficionesDisgustan']) ? $_POST['idAficionesDisgustan'] : [];
conectar();
$persona=R::dispense('persona');
$persona->nombre = $nombre;
if ($idPaisN!=''){
    $persona->nace = R::load('pais',$idPaisN);}
    if($idPaisV!=''){
        $persona->vive= R::load("pais",$idPaisV);}
//$persona->pais = R::findOne('pais','nombre=?',[$nombrePais]);
foreach ($idAficionesG as $idAficionG) {
   $aficionGusta = R::load('aficion',$idAficionG);
   $gusta=R::dispense('gusta');
   $gusta->aficion=$aficionGusta;
   $gusta->persona=$persona;
   R::store($gusta);
}

foreach ($idAficionesN as $idAficionN) {
   $aficionDisgusta = R::load('aficion',$idAficionN);
   $disgusta=R::dispense('disgusta');
   $disgusta->aficion=$aficionDisgusta;
   $disgusta->persona=$persona;
   R::store($disgusta);
}
R::store($persona);
desconectar();

header('Location:../rPersona/rPersonaGet.php');
?>