<?php
$num = 0;

echo "Dime un numero \n";

fscanf(STDIN, "%d\n", $num);
$cadena = "";
$cont = 1;

$i = 0;
do {

    if ($cont == 1) {
        echo "+";
    }
    if ($cont == 2) {
        echo "-";
    }
    if ($cont == 3) {
        echo ".";
        $cont = 0;
    }
    $cont ++;
    $i ++;
    if ($i == $num) {
        echo "\n";
        $i = 0;
        $num --;
    }
} while ($num > $i);
echo $cadena;

?>
