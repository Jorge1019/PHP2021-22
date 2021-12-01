<?php
$nombre = isset($_GET["nombre"]) ? ($_GET["nombre"]) : "vacio";
$contenido = isset($_GET["contenido"]) ? ($_GET["contenido"]) : "vacio";
$nivel = isset($_GET['num']) ? $_GET['num'] : null;

if ($nombre != null && $contenido != null && $nivel != null) {
    $rutaBase = pathinfo($_SERVER['REQUEST_URI'])['dirname'];
    $ruta = ($nivel == 0 ? $rutaBase . '/nivel0/' : ($nivel == 1 ? $rutaBase . '/nivel0/nivel1/' : $rutaBase . '/nivel0/nivel1/nivel2'));
    setcookie($nombre, $contenido, 0, $ruta);
    echo "<h1>Establecida cookie $nombre=$contenido en ruta $ruta</h1>";
} else {
    if ($nombre == null) {
        echo "El nombre no puede ser nulo<br/>";
    }

    if ($contenido == null) {
        echo "El contenido no puede ser nulo<br/>";
    }

    if ($nivel == null) {
        echo "El nivel no puede ser nulo<br/>";
    }
}

?>