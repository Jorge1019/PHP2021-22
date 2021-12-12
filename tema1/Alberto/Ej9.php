<?php
$n = 0;
$d = "";
echo "Dime un numero del 1 al 10: ";
fscanf(STDIN, "%d\n", $n);

$formato = [
    "romano" => [
        "i",
        "ii",
        "iii",
        "iv",
        "v",
        "vi",
        "vii",
        "viii",
        "ix",
        "x"
    ],
    "nombre" => [
        "uno",
        "dos",
        "tres",
        "cuatro",
        "cinco",
        "seis",
        "siete",
        "ocho",
        "nueve",
        "diez"
    ]
];
echo "\nDime en que formato te lo pongo: ";
fscanf(STDIN, "%s\n", $d);

for ($i = 0; $i <= $n - 1; $i ++) {

    echo $formato[$d][$i] . ",";
}

?>