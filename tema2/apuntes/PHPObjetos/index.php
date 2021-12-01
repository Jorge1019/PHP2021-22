<?php
include "Persona.php";

$p = new Persona();
$p->dimeNombre();
$p->setNombre1("Felisa");
echo "\n" . $p->getNombre1();
$p->nombre = "Juanjo";
echo "\n";
$p->dimeNombre();
$persona = [];
for ($i = 10; $i <= 20; $i ++) {

    $personas[] = new Persona("cion", $i);
}
foreach ($personas as $persona) {
    echo $persona . "\n";
}

?>