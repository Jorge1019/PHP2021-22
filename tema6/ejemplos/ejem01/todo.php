<?php
$db = new PDO ("mysql:host=localhost;dbname=texto","root","");
$resultado = $db->query("select id,nombre from persona");

echo <<<HTML
<h1>lista de personas</h1>
<table>
<tr><th>ID</th><th>NOMBRE</th></tr>

HTML;

foreach ($resultado as $fila) {
    echo "<tr><td> {$fila['id']} </td><td> {$fila['nombre']} </td></tr>";
}
echo '</table>';
?>

