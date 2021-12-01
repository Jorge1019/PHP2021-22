<h4>Selecciona una opcion</h4>
<form action="3.php">
<?php
require_once ('../Ej9.php');

function crearArray($tamano)
{
    $a = [];
    $etiqueta = [
        "Uno",
        "Dos",
        "Tres",
        "Cuatro",
        "Cinco",
        "Seis",
        "Siete",
        "Ocho",
        "Nueve",
        "Diez",
        "Once",
        "Doce",
        "Trece",
        "Catorce",
        "Quince"
    ];
    for ($i = 1; $i <= $tamano; $i ++) {
        $a[$i] = $etiqueta[$i - 1];
    }
    return $a;
}

echo pintarRadio('s', crearArray($_GET['n']), 1);

echo "<input type='submit' value='Enviar'/>";

?></form>