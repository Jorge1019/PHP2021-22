<?php
$n = 1;
$p = 0;

$veces = 0;
$numeros = 0;
do {

    echo "Dime cuantos numeros quieres que te diga \n";
    fscanf(STDIN, "%d\n", $numeros);

    echo "Dime cuantas veces quieres que repita la secuencian \n";
    fscanf(STDIN, "%d\n", $veces);

    if ((1 < $numeros) || ($numeros < 10)) {

        for ($n = 1; $n <= $veces; $n ++) {

            for ($p = 0; $p <= $numeros - 1; $p ++) {

                echo "$p ";
            }
        }
    } else {

        echo "Repite otra vez un numero que comprenda entre 1 y 10 \n";
    }
} while ($n <= $veces);

?>