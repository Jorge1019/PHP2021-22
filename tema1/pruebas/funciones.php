<?php

function doble($x)
{
    return 2 * $x;
}

$m = 2;

echo doble($m);
echo "\n";
echo $m;
echo "\n";

// EN ESTE CASO NO SE GUARDA EL CAMBIO EN LA FUNCION
function doble1($x)
{
    $x = 2 * $x;
    return $x;
}
echo doble1($m);
echo "\n";
echo $m;
echo "\n";

// sin return
function lanzar($x)
{
    echo $x;
}
lanzar($m);
echo "\n";

// si dentro de una funcion usamos el global, pondra el valor inicial o estatico de dicha variable.

// con esto se puede establecer un valor por defecto por si no le dices nada
function soy($asi = "guapo")
{
    echo "Soy asi de $asi";
    echo "\n";
}

soy();

soy("listo");

//
function nombres()
{
    for ($i = 0; $i < func_num_args(); $i ++) { // NUMERO DE ARGUMENTOS QUE LE PASAS
        echo func_get_arg($i), " "; // NOMBRE DE LOS ARGUMENTOS QUE LES PASAS

        echo "//";
    }
}

nombres("Juan", "Pedro", "Anastasio");

function sum(...$numeros)
{ // no defines el numero total de argumentos pero todos los que des pasaran por $numeros
    $acc = 0;
    foreach ($numeros as $n) {
        $acc += $n;
    }
    return $acc;
}
echo sum(1, 2, 3, 4);

?>
