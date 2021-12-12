<?php
include "dos.php"; // como un copia y pega de ese fichero php, ejecuta todo
include_once "dos.php"; // que incluya eso una sola vez, si lo repetimos no lo hara mas veces
include "dos.php"; // no sale
require 'dos.php'; // igual que include practicamente, excepto en la salida de errores.
echo "UNO\n";

?>
