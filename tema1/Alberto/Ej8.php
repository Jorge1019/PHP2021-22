<?php
$dia = "";
$mes = "";
$ano = "";
$inicio = strtotime("1/1/1971");

echo "Dia: \n";
fscanf(STDIN, "%s\n", $dia);

echo "Mes: \n";
fscanf(STDIN, "%s\n", $mes);

echo "Ano: \n";
fscanf(STDIN, "%s\n", $ano);

$elegido = strtotime("$dia-$mes-$ano") - $inicio;

echo $elegido;

$total = $elegido - strtotime("1/1/1971");
echo "\n" . $total;

?>