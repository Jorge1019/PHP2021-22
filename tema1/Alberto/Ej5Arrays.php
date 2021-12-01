<?php
$n = 0;
$baraja = [
    "as",
    "dos",
    "tres",
    "cuatro",
    "cinco",
    "seis",
    "siete",
    "sota",
    "caballo",
    "rey"
];

echo "Dime un numero \n";
fscanf(STDIN, "%d\n", $n);
for ($i = 0; $n > $i; $i ++) {

    echo $baraja[$i % 10], " ";
}

?>