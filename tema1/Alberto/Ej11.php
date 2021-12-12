<?php
$cadena = "Alberto:Garay:913334455//Ana:Garcia:914445566";

$persona = explode("//", $cadena);

foreach ($persona as $n) {
    $mono = explode(':', $n);

    echo "Nombre: " . $mono[0] . "\n";
    echo "Apellido: " . $mono[1] . "\n";
    echo "Telefono: " . $mono[2] . "\n";
}

?>