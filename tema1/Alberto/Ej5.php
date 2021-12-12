<?php
$p = 0;

$a = 0;
$numeros = 0;

echo "Dime cuantos numeros quieres que te diga \n";
fscanf(STDIN, "%d\n", $numeros);

for ($p = 1; $p <= $numeros; $p ++) {

    $a = $p % 10;

    if ($a === 0) {
        echo "as ";
    }
    if ($a === 1) {
        echo "dos ";
    }
    if ($a === 2) {
        echo "tres ";
    }
    if ($a === 3) {
        echo "cuatro ";
    }
    if ($a === 4) {
        echo "cinco ";
    }
    if ($a === 5) {
        echo "seis ";
    }
    if ($a === 6) {
        echo "siete ";
    }
    if ($a === 7) {
        echo "sota ";
    }
    if ($a === 8) {
        echo "caballo ";
    }
    if ($a === 9) {
        echo "rey ";
    }
}

?>