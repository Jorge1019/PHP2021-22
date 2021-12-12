<?php
$n = 1;
$parar = 5;
$sumar = - 1;
$multiplicar = 1;
$operacion = "";
$parar1 = false;
while ($n != 0) {
    $sumar = $n + $sumar;
    $multiplicar = $n * $multiplicar;
    echo "Introduce n: ";
    fscanf(STDIN, "%d\n", $n);
}
echo "\n";

while ($parar === 5) {
    echo "Operacion: ";
    fscanf(STDIN, "%s\n", $operacion);

    switch ($operacion) {

        case "sumar":
            echo "La suma de todos sus numeros es $sumar";
            $parar = 0;
            break;
        case "multiplicar":
            echo "La multiplicacion de todos sus numeros es $multiplicar";
            $parar = 0;
            break;
        default:
            echo "Elige entre 'multiplicar' o 'sumar' \n";
    }
}

?>