<?php

$r = rand(1, 3);

$r1 = rand(1, 3);

$nombre = $_GET['nombre'];

switch ($r) {
    case 1:
        echo "<h$r1> Hola $nombre </h$r1>";break;
    case 2:
        echo "<h$r1> Que tal estas $nombre </h$r1>";break;
    case 3:
        echo "<h$r1> !Que PASAAAAAA $nombre !</h$r1>";break;
}

?>