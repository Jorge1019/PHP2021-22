<?php
function getPersonas() {
    $db = new PDO ("mysql:host=localhost;dbname=texto","root","");
    $resultado = $db->query("select id,nombre from persona");
    return $resultado;
}

?>