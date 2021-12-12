<?php
$colocado = isset($_COOKIE["saludos"]);

if ($colocado) {
    $numeroveces = $_COOKIE["saludos"];

    setcookie("saludos", $numeroveces + 1);
    echo "Nos has visitado $numeroveces veces anteriormente";
} else {

    setcookie("saludos", 1);
    echo "BIENVENIDO :)";
}
?>

