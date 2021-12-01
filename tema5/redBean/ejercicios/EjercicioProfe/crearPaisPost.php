<?php
function conectar(){
    require_once '../../rb.php';
    R::setup('mysql:host=localhost;dbname=test','root','');
}

function desconectar(){
    
    R::close();
}
function insertar($pais){
    $p= R::dispense('pais');
    $p->nombre = $pais;
    R::store($p);
    
}
$pais=isset($_GET['pais'])?$_GET['pais']:null;

conectar();
try{
  insertar($pais);
  header("location:insertarPostBien.php");
}
catch (Exception $e){
    header("location:insertarPostMal.php");
}


desconectar();