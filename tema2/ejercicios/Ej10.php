<?php
require "./Ej9.php";

for ($i = 1; $i <= 50; $i ++) {
    if ($i % 2 == 0) {
        echo $i . "<br/>\n";
    } else {
        echo resaltar($i) . "<br/>\n"; // funcion del ejercicio 9
    }
}
/* require'./Ej11.php'; */
echo pintarRadio('aficion', [
    'D' => 'Deporte'
], 'TV');
echo pintarCheckboxes('aficion', [
    'D' => 'Deporte',
    'C' => 'Camaleon'
]);
echo pintarCheckboxes('aficion', [
    'D' => 'Deporte',
    'C' => 'Camaleon'
], [
    'D',
    'C'
]);
?>