<?php
$n = "";
$n1 = 0;
$e = 0;
$i = 0;
while ($n != "fin") {
    echo "Dime un nombre \n";
    fscanf(STDIN, "%s\n", $n);

    if ($n != "fin") {

        echo "Dime una edad para $n \n";
        fscanf(STDIN, "%d\n", $e);

        $personas[$n] = $e;
    }
}

echo "Estos son los nombres que me has dado con su edad.\n ";
foreach ($personas as $f => $h) {

    echo "$f($h), ";
}
while ($n != "no") {
    echo "\n\n\nQuieres ordenarlo por edad?   si/no ";
    fscanf(STDIN, "%s\n", $n);

    if ($n === "si") {
        arsort($personas);
        echo "\nEstos son los nombres ordenados por edad ";
        foreach ($personas as $f => $h) {
            echo "$f($h), ";
        }

        $n = "no";
    }
}
$n = " ";
while ($n != "no") {
    echo "\n\n\nQuieres ordenarlo por nombre?   si/no ";
    fscanf(STDIN, "%s\n", $n);

    if ($n === "si") {
        ksort($personas);
        echo "\nEstos son los nombres ordenados alfabeticamente ";
        foreach ($personas as $f => $h) {
            echo "$f($h), ";
        }

        $n = "no";
    }
}

?>