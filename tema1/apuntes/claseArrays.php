<?php
$a = array(
    10,
    20,
    30
);

$b = [
    10,
    20,
    30,
    60,
    70,
    80
];

for ($i = 0; $i < sizeof($b); $i ++) {

    echo $b[$i] . "  ";
}
echo "\n";
foreach ($a as $n) {

    echo $n + 1, "/";
}
$j = 0;
$max = sizeof($a);
foreach ($a as $k => $v) { // para cuando tengas arrays que no esten todos completos y tengas que recorrerlos

    echo "($k)$v " . (++ $j == $max ? " " : "/");
}

$z = rand(0, 100);

echo "\n" . $z;
echo "\n";
$l[10] = 100;
$l[20] = 200;
$l["Juanito"] = 10;
$l[30] = "lacasito";

foreach ($l as $f => $hk) {

    echo "($f)$hk \n ";
}

$colorFavorito = [

    "maria" => "rosa",
    "juanito" => "azul"
];

foreach ($colorFavorito as $f1 => $hk1) {

    echo "($f1)$hk1 \n ";
}

?>