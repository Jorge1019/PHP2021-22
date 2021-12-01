<?php
require_once '../utilBD.php';
$bd= conectarMySQL();//aqui dentro se pone a que tabla se quiere acceders
$sql= <<<SQL
insert into personas(id,nombre) values(1,'ana')

    
SQL;

try{
    $bd->exec($sql);
    echo "Persona creada";
}
catch(Exception $e){
    echo "ID duplicado";
}


?>