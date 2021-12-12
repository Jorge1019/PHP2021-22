<?php

require_once '../../../rb.php';

R::setup('mysql:host=localhost;dbname=pruebas','root','');
////////////////CREAR/////////////////////////////
/*
$usuario=R::dispense('usuario');


$usuario->nombre="Jorge";
$usuario->apellido="Lominchar";
$usuario->dni="48148538Q";
$usuario->telefono='644063276';



R::store($usuario);
*/

/////////////////MODIFICAR/////////////////////////
/*
$cargar=R::load('usuario',3);


$cargar->nombre="Ruben";
$cargar->dni="7676347624w";
$cargar->apellido='Yañez';
$cargar->telefono='7y327642';
R::store($cargar);

/*
/////////////////BORRAR/////////////////////////
$borrar=R::load('usuario', '5');


R::trash($borrar);



*/

/*
$encontrar=R::findAll('usuario');

foreach ($encontrar as $en){
    
    echo "<h1>".$en->nombre."</h1><br>";
}

*/

/*
$select=R::getAll('SELECT * FROM USUARIO');
print_r($select);
*/$encuentro=R::find("usuario","nombre=Jorge");


foreach ($encuentro as $en){
    
    echo "<h1>".$en->nombre."</h1><br>";
}







try{
    echo "Se ha cambiado correctamente";
}
catch (Exception $e){
    echo "Error";
}


?>