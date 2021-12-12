<?php
$t = time();

echo time() . "\n"; // TE DEVUELVE LOS SEGUNDOS TRANSCURRIDOS DESDE EL 1 DE ENERO DE 1970

echo date("d-m-Y H:i |n", $t);//Y es el año en el que estamon m mes,d dia, te lo calcula a partir de la fecha indicada previamente, es decir si le das un valor a $t te lo calcularia desde ese momento hasta el numero de segundos indicado

echo strtotime("11/09/2001")//El numero de segundos hasta esa fecha

//$sTrans = time() - mktime(0,0,0,$mes,$dia,$anyo);
$sTrans = time() - strtotime("$dia-$mes-$anyo");
?>