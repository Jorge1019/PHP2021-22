<?php
$boleano = true;

$num = 1;
$max = 0;
$min = $num;

do {
    echo "Dime un numero \n";

    fscanf(STDIN, "%d\n", $num);
    echo "ntroduce n: $num";
    echo "\n";

    if ($max < $num) {
        $max = $num;
    }
    if (($num != 0) && ($min > $num)) {
        $min = $num;
    }
} while ($num != 0);

echo "Su numero maximo es $max";

echo "\nY su numero minimo es $min";

?>

