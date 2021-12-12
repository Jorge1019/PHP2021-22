<?php
require_once '../bd/bdh.php';
$nombre = isset($_POST['nombre']) ? $_POST['nombre'] : 'Nunca Jamás';
$nace=isset($_POST['nace']) ? $_POST['nace'] : '';
$vive=isset($_POST['vive']) ? $_POST['vive'] : '';

conectar();
$p=R::dispense('pais');
$p->nombre = $nombre;
R::store($p);


if ($nace!=''){
$persona=R::load('persona',$nace);
$persona->nace = $p;
R::store($persona);

}if ($vive!=''){
$persona=R::load('persona',$vive);
$persona->vive = $p;

R::store($persona);
}

desconectar();

header('Location:../rPais/rPaisGet.php');
?>